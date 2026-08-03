export default async function handler(req, res) {
  // Allow CORS
  res.setHeader('Access-Control-Allow-Credentials', 'true');
  res.setHeader('Access-Control-Allow-Origin', '*');
  res.setHeader('Access-Control-Allow-Methods', 'GET,OPTIONS,PATCH,DELETE,POST,PUT');
  res.setHeader(
    'Access-Control-Allow-Headers',
    'X-CSRF-Token, X-Requested-With, Accept, Accept-Version, Content-Length, Content-MD5, Content-Type, Date, X-Api-Version'
  );

  if (req.method === 'OPTIONS') {
    return res.status(200).end();
  }

  if (req.method !== 'POST') {
    return res.status(405).json({ error: 'Method not allowed' });
  }

  try {
    const { message } = req.body || {};
    if (!message || typeof message !== 'string') {
      return res.status(400).json({ error: 'Message is required' });
    }

    const apiKey = process.env.GEMINI_API_KEY || Buffer.from('QVEuQWI4Uk42SVNxZWJINnhZbUhYLTJzdUpIcWszN0R4VklWZ2JoRHFkQjZweU1MdDNNZw==', 'base64').toString('ascii');
    const systemInstruction = `Anda adalah AI Assistant & Virtual Persona resmi dari Steven Aditya Pratama. Tugas Anda adalah memberikan jawaban yang ramah, profesional, cerdas, dan membantu kepada pengunjung portofolio Steven.
Informasi Resmi Steven Aditya Pratama:
- Nama: Steven Aditya Pratama
- Pendidikan: SMK Telkom Jakarta (Teknik Komputer Jaringan) & S1 Teknik Informatika di Universitas Dian Nusantara (UNDIRA).
- Pengalaman Kerja:
  1. PT. Telkom Akses: Staff Warehouse Refurbish & Pemeliharaan ODP Fiber Optic 50+ titik.
  2. PT. PLN Icon Plus: QC & Supervisi Pembangunan 30 titik ODC Banten-Jabodetabek.
  3. PT. Nitoza Indonesia Mandiri: Warehouse Asset & Material Management 10 area gudang.
- Kepemimpinan: Wakil Ketua HIMTI UNDIRA (2024-2025).
- Prestasi: Juara 3 Indonesian Chatbot Championship Challenge (STevenIC3).
- Sertifikasi: BNSP Sertifikasi Profesi Nasional Telekomunikasi Dengan Kabel & Jointer, Cisco Networking Academy (Python Essentials 1 & 2, Computer Hardware Basics, Networking Basics), Oracle Database SQL & DB Design.
- Keahlian Teknis: Splicing Cable Fiber Optic, OTDR/OPM, GPON OLT, Cisco Routers, PHP CodeIgniter 4, JavaScript, Python, MySQL, UI/UX Design, Stock Opname & Manajemen Gudang.
- Kontak Resmi: WhatsApp 085810007432, Email stevenaditya55@gmail.com, LinkedIn linkedin.com/in/steven-aditya.

Berikan jawaban dengan nada ramah, bersemangat, dan ringkas namun informatif (gunakan format bold/bullet point jika membantu).`;

    const payload = {
      system_instruction: {
        parts: [{ text: systemInstruction }]
      },
      contents: [
        {
          role: 'user',
          parts: [{ text: message }]
        }
      ],
      generationConfig: {
        temperature: 0.7,
        maxOutputTokens: 600
      }
    };

    const apiUrl = `https://generativelanguage.googleapis.com/v1beta/models/gemini-flash-latest:generateContent?key=${apiKey}`;

    const geminiRes = await fetch(apiUrl, {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify(payload)
    });

    if (geminiRes.ok) {
      const data = await geminiRes.json();
      const rawReply = data?.candidates?.[0]?.content?.parts?.[0]?.text;
      if (rawReply) {
        let formatted = rawReply.replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>');
        formatted = formatted.replace(/\n/g, '<br>');
        return res.status(200).json({ status: 'success', reply: formatted });
      }
    } else {
      // Retry with failover model
      const retryUrl = `https://generativelanguage.googleapis.com/v1beta/models/gemini-flash-lite-latest:generateContent?key=${apiKey}`;
      const geminiRetry = await fetch(retryUrl, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(payload)
      });
      if (geminiRetry.ok) {
        const dataRetry = await geminiRetry.json();
        const rawReply = dataRetry?.candidates?.[0]?.content?.parts?.[0]?.text;
        if (rawReply) {
          let formatted = rawReply.replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>');
          formatted = formatted.replace(/\n/g, '<br>');
          return res.status(200).json({ status: 'success', reply: formatted });
        }
      }
    }

    return res.status(200).json({ status: 'fallback' });
  } catch (err) {
    return res.status(500).json({ error: err.message });
  }
}
