<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Steven Aditya Pratama - S1 Teknik Informatika, Jointer Fiber Optik / FTTH, Pergudangan & Front-End Web Developer</title>
  <meta name="description" content="Portofolio Resmi Steven Aditya Pratama - Lulusan S1 Teknik Informatika Universitas Dian Nusantara. Keahlian: Jointer Fiber Optik / FTTH, Manajemen Pergudangan, Network Engineer, & Front-End Web Developer (PHP CodeIgniter 4 / UI/UX).">
  <meta name="keywords" content="Steven Aditya Pratama, Jointer Fiber Optik, FTTH, Pergudangan, S1 Teknik Informatika, Universitas Dian Nusantara, Web Developer, Front-End Developer, Telkom Akses, Icon Plus">
  <meta name="author" content="Steven Aditya Pratama">
  <meta name="robots" content="index, follow">
  <meta name="google-site-verification" content="GlxguRp9I8EeqQmzXzQJVbSpkmrz-NuKqUoJbPhcy0k" />
  <link rel="canonical" href="https://stevenadityapratama.vercel.app/">

  <!-- Open Graph / Social Media Meta Tags -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://stevenadityapratama.vercel.app/">
  <meta property="og:title" content="Steven Aditya Pratama - Portofolio Profesional & Keahlian">
  <meta property="og:description" content="S1 Teknik Informatika | Jointer Fiber Optik / FTTH | Pergudangan | Front-End Web Developer.">
  <meta property="og:image" content="<?= base_url('assets/img/steven_profile.jpg') ?>">

  <!-- Schema.org JSON-LD Structured Data for Google Indexing -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Person",
    "name": "Steven Aditya Pratama",
    "jobTitle": "Front-End Web Developer, Jointer Fiber Optik / FTTH, Warehouse Specialist",
    "alumniOf": "Universitas Dian Nusantara",
    "url": "https://stevenadityapratama.vercel.app/",
    "sameAs": [
      "https://www.linkedin.com/in/steven-aditya",
      "https://github.com/stevenbollm"
    ],
    "knowsAbout": [
      "Fiber Optic FTTH",
      "Telecommunications Cable Jointer",
      "Warehouse Material Management",
      "Front-End Web Development",
      "CodeIgniter 4",
      "UI/UX Design"
    ]
  }
  </script>

  <!-- Google Fonts & FontAwesome -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;600&family=Inter:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <!-- Custom Glassmorphism Stylesheet -->
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>

  <!-- Navigation Bar -->
  <nav class="navbar">
    <div class="container nav-container">
      <a href="#hero" class="logo">
        <span class="dot"></span> <span class="logo-full">STEVEN ADITYA PRATAMA</span><span class="logo-short">STEVEN A. PRATAMA</span>
      </a>

      <ul class="nav-links">
        <li><a href="#hero" class="nav-link active">Beranda</a></li>
        <li><a href="#about" class="nav-link">Tentang Saya</a></li>
        <li><a href="#skills" class="nav-link">Keahlian & Skills</a></li>
        <li><a href="#projects" class="nav-link">Proyek Unggulan</a></li>
        <li><a href="#experience" class="nav-link">Pengalaman</a></li>
        <li><a href="#education" class="nav-link">Pendidikan</a></li>
        <li><a href="#achievements" class="nav-link">Prestasi</a></li>
        <li><a href="#contact" class="nav-link">Kontak</a></li>
        <li class="mobile-cv-item"><a href="javascript:void(0)" onclick="openCvModal()" class="nav-link" style="color:var(--primary-cyan); font-weight:700;"><i class="fas fa-file-image"></i> Lihat CV (JPG)</a></li>
      </ul>

      <div class="nav-actions">
        <button onclick="openCvModal()" class="nav-btn">
          <i class="fas fa-file-image"></i> CV JPG
        </button>

        <button class="mobile-toggle" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section id="hero" class="hero">
    <div class="container">
      <div class="hero-grid">
        <div class="hero-content">
          <div class="live-clock-card">
            <i class="far fa-clock clock-icon"></i>
            <span id="realtimeClock">Memuat waktu realtime...</span>
          </div>

          <div class="badge-status">
            <span class="pulse-dot"></span>
            <?= esc($profile['status']) ?>
          </div>

          <h1>Hi, Saya <span class="gradient-text"><?= esc($profile['name']) ?></span></h1>
          
          <div class="hero-subtitle">
            <span>Warehouse Management</span>
            <span>Network Engineer</span>
            <span>Fiber Optic Specialist</span>
            <span>Front-End Web & UI/UX Developer</span>
          </div>

          <p class="hero-description">
            <?= esc($profile['summary']) ?>
          </p>

          <div class="hero-actions">
            <a href="#projects" class="btn-primary">
              <i class="fas fa-rocket"></i> Lihat Proyek Unggulan
            </a>
            <a href="#contact" class="btn-secondary">
              <i class="fas fa-paper-plane"></i> Hubungi Saya
            </a>
          </div>

          <div class="hero-socials">
            <a href="<?= esc($profile['linkedin']) ?>" target="_blank" class="social-icon" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            <a href="<?= esc($profile['github']) ?>" target="_blank" class="social-icon" title="GitHub"><i class="fab fa-github"></i></a>
            <a href="<?= esc($profile['google_sites']) ?>" target="_blank" class="social-icon" title="Google Sites"><i class="fas fa-globe"></i></a>
            <a href="mailto:<?= esc($profile['email']) ?>" class="social-icon" title="Email Direct"><i class="fas fa-envelope"></i></a>
          </div>
        </div>

        <div class="hero-card">
          <div class="hero-avatar-wrapper">
            <img src="<?= base_url('assets/img/steven_profile.jpg') ?>" alt="<?= esc($profile['name']) ?>" class="hero-avatar">
          </div>

          <h3><?= esc($profile['nickname']) ?> Aditya Pratama</h3>
          <p class="role-title">S1 Teknik Informatika | Universitas Dian Nusantara</p>

          <div class="quick-stats-grid">
            <?php foreach ($stats as $st): ?>
              <div class="stat-box">
                <div class="stat-number"><?= esc($st['value']) ?></div>
                <div class="stat-label"><?= esc($st['label']) ?></div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About Me Section -->
  <section id="about" class="section section-alt">
    <div class="container">
      <div class="section-title">
        <span class="sub-tag">Profil Professional</span>
        <h2>Tentang <span class="gradient-text">Saya</span></h2>
        <p>Kombinasi keahlian di bidang Infrastruktur Telekomunikasi Fiber Optic, Manajemen Aset dan Material Gudang, serta Pemrograman Web & UI/UX Design.</p>
      </div>

      <div class="about-grid" style="grid-template-columns: 1fr;">
        <div class="about-text">
          <h3>Integrasi Keahlian Lapangan & Pengembangan Perangkat Lunak</h3>
          <p>
            Saya adalah lulusan SMK Telkom Jakarta (Teknik Komputer Jaringan) dan lulusan S1 Teknik Informatika di Universitas Dian Nusantara. Memiliki pengalaman kerja profesional di perusahaan telekomunikasi terkemuka seperti PT. Telkom Akses, PT. PLN Icon Plus, dan PT. Nitoza Indonesia Mandiri.
          </p>
          <p>
            Memiliki rekam jejak yang teruji dalam pembangunan dan pemeliharaan serta manajemen kabel jaringan kabel Fiber Optic (ODC & ODP), konfigurasi GPON OLT dan Router, serta manajemen aset dan material infrastruktur jaringan pada 10 area warehouse. Di samping itu, saya secara aktif mengembangkan aplikasi web berbasis PHP CodeIgniter 4, desain UI/UX, dan Machine Learning.
          </p>

          <div class="about-highlights">
            <div class="highlight-card">
              <div class="highlight-icon"><i class="fas fa-network-wired"></i></div>
              <div class="highlight-info">
                <h4>Infrastruktur Jaringan dan Fiber Optic</h4>
                <p>Pengalaman QC & pembangunan 30 titik ODC PLN Icon Plus & pemeliharaan 50+ ODP Telkom Akses.</p>
              </div>
            </div>
            <div class="highlight-card">
              <div class="highlight-icon"><i class="fas fa-laptop-code"></i></div>
              <div class="highlight-info">
                <h4>Web & Software Development</h4>
                <p>PHP CodeIgniter 4, HTML5, CSS3, UI/UX Prototyping, dan Python.</p>
              </div>
            </div>
            <div class="highlight-card">
              <div class="highlight-icon"><i class="fas fa-warehouse"></i></div>
              <div class="highlight-info">
                <h4>Manajemen Gudang</h4>
                <p>Pengelolaan 10 area warehouse refurbish material Telkom Akses se-Jakarta Timur.</p>
              </div>
            </div>
            <div class="highlight-card">
              <div class="highlight-icon"><i class="fas fa-users"></i></div>
              <div class="highlight-info">
                <h4>Kepemimpinan</h4>
                <p>Wakil Ketua HIMTI Undira, Ketua Divisi Humas dan IT Karang Taruna, Ketua Umum Remaja Musholla, Ketua Divisi Kerohanian OSIS, dan Sekretaris Jendral ROHIS.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Skills Matrix Section -->
  <section id="skills" class="section">
    <div class="container">
      <div class="section-title">
        <span class="sub-tag">Kompetensi & Tools</span>
        <h2>Keahlian <span class="gradient-text">& Skills</span></h2>
        <p>Daftar lengkap keterampilan teknis, jaringan, software, dan soft skills yang dikuasai.</p>
      </div>

      <!-- Skill Category Filter Tabs -->
      <div class="skills-filter">
        <button class="filter-btn active" data-filter="all">
          <i class="fas fa-th"></i> Semua Skill
        </button>
        <button class="filter-btn" data-filter="web_dev">
          <i class="fas fa-code"></i> Web & Dev
        </button>
        <button class="filter-btn" data-filter="network">
          <i class="fas fa-network-wired"></i> Jaringan & Fiber Optic
        </button>
        <button class="filter-btn" data-filter="tools">
          <i class="fas fa-toolbox"></i> Software & Tools
        </button>
        <button class="filter-btn" data-filter="management">
          <i class="fas fa-users-gear"></i> Manajemen & Soft Skills
        </button>
      </div>

      <div class="skills-grid">
        <?php foreach ($skills as $catKey => $catData): ?>
          <?php foreach ($catData['items'] as $item): ?>
            <div class="skill-card" data-category="<?= $catKey ?>">
              <div class="skill-header" style="margin-bottom:0;">
                <div class="skill-title">
                  <i class="fas <?= $catData['icon'] ?>"></i>
                  <h4><?= esc($item['name']) ?></h4>
                </div>
              </div>
              <div style="font-size:0.8rem; color:var(--text-dim); margin-top:0.5rem;">
                Kategori: <?= esc($catData['category']) ?>
              </div>
            </div>
          <?php endforeach; ?>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Featured Projects Showcase Section -->
  <section id="projects" class="section section-alt">
    <div class="container">
      <div class="section-title">
        <span class="sub-tag">Showcase Pekerjaan</span>
        <h2>Proyek <span class="gradient-text">Unggulan</span></h2>
        <p>Detail pelaksanaan proyek infrastruktur jaringan, sistem AI & bot notifikasi QC, prototipe aplikasi mobile, serta manajemen aset dan material pergudangan.</p>
      </div>

      <div class="projects-grid">
        <?php foreach ($featured_projects as $proj): ?>
          <div class="project-card">
            <div class="project-img-wrapper" onclick="openProjectModal('<?= $proj['id'] ?>')" style="cursor:pointer;">
              <img src="<?= $proj['image'] ?>" alt="<?= esc($proj['title']) ?>" class="project-img">
              <span class="project-tag"><?= esc($proj['tag']) ?></span>
            </div>

            <div class="project-body">
              <div class="project-company">
                <span><?= esc($proj['company']) ?></span>
                <span><i class="far fa-calendar-alt"></i> <?= esc($proj['period']) ?></span>
              </div>

              <h3 class="project-title"><?= esc($proj['title']) ?></h3>

              <p class="project-desc"><?= esc($proj['description']) ?></p>

              <div class="project-process-box">
                <h5><i class="fas fa-tasks"></i> Tahapan & Proses Pengerjaan:</h5>
                <ul class="project-process-list">
                  <?php foreach (array_slice($proj['processes'], 0, 4) as $proc): ?>
                    <li><?= esc($proc) ?></li>
                  <?php endforeach; ?>
                  <?php if (count($proj['processes']) > 4): ?>
                    <li style="color:var(--primary-cyan); font-weight:600;">+<?= count($proj['processes']) - 4 ?> tahapan QC/konfigurasi lainnya...</li>
                  <?php endif; ?>
                </ul>
              </div>

              <div class="project-result-pill">
                <strong><i class="fas fa-check-circle"></i> Hasil:</strong> <?= esc($proj['results']) ?>
              </div>

              <div class="project-tech-tags">
                <?php foreach ($proj['technologies'] as $tech): ?>
                  <span class="tech-tag"><?= esc($tech) ?></span>
                <?php endforeach; ?>
              </div>

              <button onclick="openProjectModal('<?= $proj['id'] ?>')" class="btn-secondary" style="margin-top:1.25rem; width:100%; justify-content:center; padding:0.6rem;">
                <i class="fas fa-expand-alt"></i> Lihat Detail & Dokumentasi Full
              </button>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Work Experience Timeline Section -->
  <section id="experience" class="section">
    <div class="container">
      <div class="section-title">
        <span class="sub-tag">Karir Professional</span>
        <h2>Pengalaman <span class="gradient-text">Kerja</span></h2>
        <p>Rekam jejak kontribusi di PT. Telkom Akses, PT. PLN ICON+, dan PT. Nitoza Indonesia Mandiri.</p>
      </div>

      <div class="timeline">
        <?php foreach ($experiences as $exp): ?>
          <div class="timeline-item">
            <div class="timeline-dot"></div>
            <div class="timeline-content">
              <div class="timeline-header">
                <div>
                  <span class="timeline-company"><?= esc($exp['company']) ?></span>
                  <span style="color:var(--text-dim); font-size:0.85rem; margin-left:0.5rem;"><i class="fas fa-map-marker-alt"></i> <?= esc($exp['location']) ?></span>
                </div>
                <span class="timeline-period"><?= esc($exp['period']) ?></span>
              </div>
              <h3 class="timeline-role"><?= esc($exp['role']) ?></h3>
              <ul class="timeline-tasks">
                <?php foreach ($exp['tasks'] as $task): ?>
                  <li><?= esc($task) ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Education & Organizational Experience Section -->
  <section id="education" class="section section-alt">
    <div class="container">
      <div class="section-title">
        <span class="sub-tag">Pendidikan & Organisasi</span>
        <h2>Latar Belakang <span class="gradient-text">& Kepemimpinan</span></h2>
        <p>Riwayat studi formal dan aktivitas organisasi kemahasiswaan serta kepemudaan.</p>
      </div>

      <div class="education-org-grid">
        <!-- Formal Education -->
        <div>
          <h3 style="font-size:1.4rem; margin-bottom:1.5rem; display:flex; align-items:center; gap:0.75rem;">
            <i class="fas fa-graduation-cap" style="color:var(--primary-cyan);"></i> Pendidikan Formal
          </h3>
          <div class="timeline" style="max-width:100%;">
            <?php foreach ($education as $edu): ?>
              <div class="timeline-item">
                <div class="timeline-dot" style="border-color:var(--primary-emerald);"></div>
                <div class="timeline-content">
                  <div class="timeline-header">
                    <span class="timeline-company" style="color:#fff;"><?= esc($edu['institution']) ?></span>
                    <span class="timeline-period"><?= esc($edu['period']) ?></span>
                  </div>
                  <h4 style="color:var(--primary-cyan); font-size:1.05rem; margin-bottom:0.3rem;"><?= esc($edu['degree']) ?></h4>
                  <div style="display:inline-block; padding:0.2rem 0.6rem; background:rgba(16,185,129,0.15); color:var(--primary-emerald); border-radius:4px; font-size:0.82rem; font-weight:700; margin-bottom:0.8rem;">
                    <?= esc($edu['score']) ?>
                  </div>
                  <ul class="timeline-tasks">
                    <?php foreach ($edu['details'] as $det): ?>
                      <li><?= esc($det) ?></li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Organizational Leadership -->
        <div>
          <h3 style="font-size:1.4rem; margin-bottom:1.5rem; display:flex; align-items:center; gap:0.75rem;">
            <i class="fas fa-users-line" style="color:var(--primary-indigo);"></i> Pengalaman Organisasi
          </h3>
          <div class="timeline" style="max-width:100%;">
            <?php foreach ($organization as $org): ?>
              <div class="timeline-item">
                <div class="timeline-dot" style="border-color:var(--primary-indigo);"></div>
                <div class="timeline-content">
                  <div class="timeline-header">
                    <span class="timeline-company" style="color:var(--primary-indigo);"><?= esc($org['organization']) ?></span>
                    <span class="timeline-period"><?= esc($org['period']) ?></span>
                  </div>
                  <h4 style="color:#fff; font-size:1rem; margin-bottom:0.5rem;"><?= esc($org['role']) ?></h4>
                  <p style="color:var(--text-muted); font-size:0.9rem; line-height:1.6;"><?= esc($org['details']) ?></p>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Achievements & Certifications Section -->
  <section id="achievements" class="section">
    <div class="container">
      <div class="section-title">
        <span class="sub-tag">Penghargaan & Lisensi</span>
        <h2>Prestasi <span class="gradient-text">& Sertifikasi</span></h2>
        <p>Sertifikasi kompetensi nasional BNSP, penghargaan kompetisi AI Chatbot, dan pelatihan resmi industri.</p>
      </div>

      <div class="achievements-grid">
        <?php foreach ($achievements as $ach): ?>
          <div class="achievement-card">
            <div class="achievement-icon-box">
              <i class="fas <?= $ach['icon'] ?>"></i>
            </div>
            <div class="achievement-info" style="flex: 1; min-width: 0;">
              <div style="display:flex; justify-content:space-between; align-items:center; gap:0.75rem; margin-bottom:0.4rem; flex-wrap:wrap;">
                <span class="achievement-tag"><?= esc($ach['type']) ?></span>
                <span style="font-size:0.78rem; color:var(--primary-cyan); font-weight:700; background:rgba(52, 211, 153, 0.12); padding:0.15rem 0.55rem; border-radius:4px; border:1px solid rgba(52, 211, 153, 0.25); font-family:var(--font-code); flex-shrink:0;"><?= esc($ach['year']) ?></span>
              </div>
              <h4><?= esc($ach['title']) ?></h4>
              <p class="achievement-issuer"><i class="fas fa-building"></i> <?= esc($ach['issuer']) ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="section section-alt">
    <div class="container">
      <div class="section-title">
        <span class="sub-tag">Mari Berkomunikasi</span>
        <h2>Hubungi <span class="gradient-text">Saya</span></h2>
        <p>Terbuka untuk diskusi proyek web development, konsultasi jaringan fiber optic, maupun peluang karir.</p>
      </div>

      <div class="contact-grid">
        <div class="contact-info-card">
          <h3 style="font-size:1.5rem; margin-bottom:1.5rem;">Informasi Kontak</h3>

          <div class="contact-item">
            <div class="contact-icon"><i class="fas fa-envelope"></i></div>
            <div class="contact-detail">
              <h5>Email Direct</h5>
              <a href="mailto:<?= esc($profile['email']) ?>"><?= esc($profile['email']) ?></a>
            </div>
          </div>

          <div class="contact-item">
            <div class="contact-icon"><i class="fas fa-phone-alt"></i></div>
            <div class="contact-detail">
              <h5>Telepon / WhatsApp</h5>
              <a href="https://wa.me/6285810007432" target="_blank"><?= esc($profile['phone']) ?></a>
            </div>
          </div>

          <div class="contact-item">
            <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
            <div class="contact-detail">
              <h5>Domisili</h5>
              <p><?= esc($profile['address']) ?></p>
            </div>
          </div>

          <div class="contact-item">
            <div class="contact-icon"><i class="fab fa-google"></i></div>
            <div class="contact-detail">
              <h5>Google Site Portfolio</h5>
              <a href="<?= esc($profile['google_sites']) ?>" target="_blank" style="font-size:0.85rem;">Visit Google Sites Link</a>
            </div>
          </div>
        </div>

        <div class="contact-form-card">
          <h3 style="font-size:1.5rem; margin-bottom:1.5rem;">Kirim Pesan</h3>

          <div id="formResponse" style="display:none; margin-bottom:1.25rem;"></div>

          <form id="portfolioContactForm" action="<?= base_url('contact/submit') ?>" method="POST">
            <?= csrf_field() ?>
            <div class="form-group">
              <label class="form-label" for="name">Nama Lengkap</label>
              <input type="text" id="name" name="name" class="form-control" placeholder="Masukkan nama Anda" required>
            </div>

            <div class="form-group">
              <label class="form-label" for="email">Alamat Email</label>
              <input type="email" id="email" name="email" class="form-control" placeholder="nama@email.com" required>
            </div>

            <div class="form-group">
              <label class="form-label" for="subject">Subjek Pesan</label>
              <input type="text" id="subject" name="subject" class="form-control" placeholder="Topik diskusi atau tawaran proyek" required>
            </div>

            <div class="form-group">
              <label class="form-label" for="message">Pesan Anda</label>
              <textarea id="message" name="message" class="form-control" rows="4" placeholder="Tuliskan rincian pesan atau tawaran kerja..." required></textarea>
            </div>

            <button type="submit" class="btn-primary" style="width:100%; justify-content:center; padding:0.9rem;">
              <i class="fas fa-paper-plane"></i> Kirim Pesan Sekarang
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Modal Lightbox for Project Details & Screenshots -->
  <div id="projectModal" class="modal-overlay">
    <div class="modal-content">
      <button class="modal-close" aria-label="Close modal"><i class="fas fa-times"></i></button>

      <img id="modalImage" src="" alt="Project Preview" class="modal-img">
      <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:0.5rem; flex-wrap:wrap;">
        <h3 id="modalTitle" style="font-size:1.6rem; color:var(--primary-cyan);"></h3>
        <span id="modalCompany" style="color:var(--text-muted); font-size:0.9rem; font-weight:600;"></span>
      </div>

      <p id="modalDescription" style="color:var(--text-muted); margin-bottom:1.5rem; font-size:1rem; line-height:1.6;"></p>

      <div class="project-process-box" style="margin-bottom:1.5rem;">
        <h5 style="font-size:0.95rem;"><i class="fas fa-cogs"></i> Detail Tahapan & Alur Kerja (Workflow):</h5>
        <ul id="modalProcessList" class="project-process-list" style="margin-top:0.75rem; font-size:0.9rem;"></ul>
      </div>

      <div class="project-result-pill">
        <strong><i class="fas fa-trophy"></i> Impact & Hasil Akhir:</strong> <span id="modalResultsText"></span>
      </div>
    </div>
  </div>

  <!-- Modal Lightbox for Full CV JPG Viewer -->
  <div id="cvModal" class="modal-overlay">
    <div class="modal-content" style="max-width:900px; width:95%;">
      <button class="modal-close" onclick="closeCvModal()" aria-label="Close modal"><i class="fas fa-times"></i></button>
      
      <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:1rem; flex-wrap:wrap; gap:0.5rem;">
        <h3 style="font-size:1.5rem; color:var(--primary-cyan);"><i class="fas fa-file-image"></i> Curriculum Vitae Steven Aditya Pratama</h3>
        <div style="display:flex; gap:0.5rem;">
          <button onclick="openImageViewer(document.querySelector('#cvModalImg1:not([style*=\'display: none\'])')?.src || '<?= $cv_images['page1'] ?>')" class="btn-secondary" style="padding:0.4rem 0.9rem; font-size:0.8rem;">
            <i class="fas fa-expand"></i> Enlarge / Perbesar Fullscreen
          </button>
          <a href="<?= $cv_images['page1'] ?>" download="Steven_Aditya_Pratama_CV_Page1.jpg" class="btn-primary" style="padding:0.4rem 1rem; font-size:0.8rem;">
            <i class="fas fa-download"></i> Download JPG
          </a>
        </div>
      </div>

      <div class="cv-tab-container" style="display:flex; gap:1rem; margin-bottom:1rem;">
        <button id="cvTab1" class="btn-primary" onclick="showCvPage(1)" style="padding:0.4rem 1.2rem; font-size:0.85rem;">Halaman 1</button>
        <button id="cvTab2" class="btn-secondary" onclick="showCvPage(2)" style="padding:0.4rem 1.2rem; font-size:0.85rem;">Halaman 2</button>
      </div>

      <div style="max-height:75vh; overflow-y:auto; border-radius:12px; background:#000; text-align:center; padding:0.5rem; position:relative;">
        <p style="color:var(--primary-cyan); font-size:0.8rem; margin-bottom:0.4rem;"><i class="fas fa-search-plus"></i> Klik pada gambar CV untuk memperbesar tampilan full-screen</p>
        <img id="cvModalImg1" src="<?= $cv_images['page1'] ?>" alt="CV Halaman 1" class="zoomable-img" onclick="openImageViewer(this.src)" style="width:100%; border-radius:8px; display:block; margin:0 auto; cursor:pointer;" title="Klik untuk memperbesar gambar">
        <img id="cvModalImg2" src="<?= $cv_images['page2'] ?>" alt="CV Halaman 2" class="zoomable-img" onclick="openImageViewer(this.src)" style="width:100%; border-radius:8px; display:none; margin:0 auto; cursor:pointer;" title="Klik untuk memperbesar gambar">
      </div>
    </div>
  </div>

  <!-- Modal Lightbox for Full-Screen Image Viewer & Zoom -->
  <div id="imageViewerModal" class="modal-overlay" style="z-index:3000; padding:1rem;">
    <div style="position:relative; width:100%; height:100%; display:flex; flex-direction:column; align-items:center; justify-content:center;">
      <button class="modal-close" onclick="closeImageViewer()" aria-label="Close image viewer" style="position:fixed; top:1.5rem; right:1.5rem; z-index:3010; width:44px; height:44px; font-size:1.3rem; background:rgba(7,15,11,0.9); border:1px solid var(--primary-cyan); color:var(--primary-cyan);">
        <i class="fas fa-times"></i>
      </button>

      <div style="position:fixed; top:1.5rem; left:1.5rem; z-index:3010; display:flex; gap:0.75rem;">
        <button onclick="toggleZoomImage()" class="btn-primary" style="padding:0.5rem 1.1rem; font-size:0.85rem; border-radius:50px;">
          <i class="fas fa-search-plus" id="zoomIcon"></i> <span id="zoomText">Perbesar (Zoom 1.8x)</span>
        </button>
      </div>

      <div id="imageViewerContainer" style="max-width:96vw; max-height:85vh; overflow:auto; border-radius:12px; border:1px solid var(--border-color); background:rgba(0,0,0,0.95); box-shadow:0 0 50px rgba(0,0,0,0.9); padding:0.5rem; cursor:zoom-in;" onclick="toggleZoomImage()">
        <img id="imageViewerImg" src="" alt="Enlarged Image" style="max-width:100%; max-height:82vh; object-fit:contain; transition:transform 0.3s ease; margin:0 auto; display:block;">
      </div>

      <div style="margin-top:0.75rem; color:var(--text-muted); font-size:0.85rem; background:rgba(7,15,11,0.9); padding:0.4rem 1.2rem; border-radius:50px; border:1px solid var(--border-color);">
        <i class="fas fa-info-circle"></i> Klik gambar untuk toggle zoom | Tekan ESC untuk menutup
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <p>&copy; <?= date('Y') ?> <strong><?= esc($profile['name']) ?></strong>. All rights reserved.</p>
      <p style="font-size:0.8rem; color:var(--text-dim); margin-bottom:1.5rem;">Built with PHP CodeIgniter 4 &amp; Modern Glassmorphic Design System</p>

      <!-- Visitor Flag Counter Widget -->
      <div class="visitor-counter-wrapper">
        <div class="visitor-card">
          <div class="visitor-header">
            <i class="fas fa-globe-asia"></i>
            <h4>Statistik Pengunjung (Visitor Flag Counter)</h4>
          </div>
          
          <div class="flag-counter-box">
            <a href="https://info.flagcounter.com/Glxg" target="_blank" title="Visitor Flag Counter">
              <img src="https://s11.flagcounter.com/count2/Glxg/bg_0D1B13/txt_ECFDF5/border_10B981/columns_4/maxflags_12/viewers_0/labels_1/pageviews_1/timeline_0/" alt="Flag Counter" border="0">
            </a>
          </div>

          <div class="visitor-badges">
            <div class="visitor-badge-item">
              <i class="fas fa-eye"></i>
              <span>Total Dilihat: <strong id="totalPageViews">-</strong></span>
            </div>
            <div class="visitor-badge-item">
              <i class="fas fa-user-check"></i>
              <span>Pengunjung Unik: <strong id="uniqueVisitors">-</strong></span>
            </div>
            <div class="visitor-badge-item">
              <i class="fas fa-signal"></i>
              <span>Status: <span class="status-online"><i class="fas fa-circle"></i> Live Online</span></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Pass JS data for Modal -->
  <script>
    window.PORTFOLIO_PROJECTS = <?= json_encode($featured_projects) ?>;
    let isZoomed = false;

    function openCvModal() {
      const cvModal = document.getElementById('cvModal');
      if (cvModal) {
        cvModal.classList.add('active');
        document.body.style.overflow = 'hidden';
      }
    }

    function closeCvModal() {
      const cvModal = document.getElementById('cvModal');
      if (cvModal) {
        cvModal.classList.remove('active');
        document.body.style.overflow = '';
      }
    }

    function showCvPage(page) {
      const img1 = document.getElementById('cvModalImg1');
      const img2 = document.getElementById('cvModalImg2');
      const tab1 = document.getElementById('cvTab1');
      const tab2 = document.getElementById('cvTab2');

      if (page === 1) {
        img1.style.display = 'block';
        img2.style.display = 'none';
        tab1.className = 'btn-primary';
        tab2.className = 'btn-secondary';
      } else {
        img1.style.display = 'none';
        img2.style.display = 'block';
        tab1.className = 'btn-secondary';
        tab2.className = 'btn-primary';
      }
    }

    function openImageViewer(src) {
      if (!src) return;
      const modal = document.getElementById('imageViewerModal');
      const img = document.getElementById('imageViewerImg');
      const container = document.getElementById('imageViewerContainer');
      
      if (modal && img) {
        img.src = src;
        img.style.transform = 'scale(1)';
        img.style.maxHeight = '82vh';
        img.style.maxWidth = '100%';
        container.style.cursor = 'zoom-in';
        isZoomed = false;
        
        const zoomText = document.getElementById('zoomText');
        const zoomIcon = document.getElementById('zoomIcon');
        if (zoomText) zoomText.textContent = 'Perbesar (Zoom 1.8x)';
        if (zoomIcon) zoomIcon.className = 'fas fa-search-plus';

        modal.classList.add('active');
      }
    }

    function closeImageViewer() {
      const modal = document.getElementById('imageViewerModal');
      if (modal) {
        modal.classList.remove('active');
        isZoomed = false;
      }
    }

    function toggleZoomImage() {
      const img = document.getElementById('imageViewerImg');
      const container = document.getElementById('imageViewerContainer');
      const zoomText = document.getElementById('zoomText');
      const zoomIcon = document.getElementById('zoomIcon');

      if (!img) return;

      if (!isZoomed) {
        img.style.transform = 'scale(1.8)';
        img.style.maxHeight = 'none';
        img.style.maxWidth = 'none';
        container.style.cursor = 'zoom-out';
        isZoomed = true;
        if (zoomText) zoomText.textContent = 'Reset Ukuran (1x)';
        if (zoomIcon) zoomIcon.className = 'fas fa-search-minus';
      } else {
        img.style.transform = 'scale(1)';
        img.style.maxHeight = '82vh';
        img.style.maxWidth = '100%';
        container.style.cursor = 'zoom-in';
        isZoomed = false;
        if (zoomText) zoomText.textContent = 'Perbesar (Zoom 1.8x)';
        if (zoomIcon) zoomIcon.className = 'fas fa-search-plus';
      }
    }

    // ESC Key listener to close image viewer
    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape') {
        closeImageViewer();
      }
    });
  </script>

  <!-- Back To Top Floating Button -->
  <button id="backToTopBtn" class="back-to-top-btn" aria-label="Kembali ke Atas" title="Kembali ke Atas">
    <i class="fas fa-arrow-up"></i>
  </button>

  <script src="<?= base_url('assets/js/main.js') ?>"></script>
</body>
</html>
