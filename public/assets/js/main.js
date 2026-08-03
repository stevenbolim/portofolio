/* ==========================================================================
   STEVEN ADITYA PRATAMA - INTERACTIVE FRONTEND JS
   ========================================================================== */

document.addEventListener('DOMContentLoaded', () => {

  // 1. Sticky Navbar & Active Link Highlight
  const navbar = document.querySelector('.navbar');
  const navLinks = document.querySelectorAll('.nav-link');
  const sections = document.querySelectorAll('section');

  window.addEventListener('scroll', () => {
    if (window.scrollY > 40) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }

    let currentSection = '';
    sections.forEach(section => {
      const sectionTop = section.offsetTop - 120;
      const sectionHeight = section.clientHeight;
      if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
        currentSection = section.getAttribute('id');
      }
    });

    navLinks.forEach(link => {
      link.classList.remove('active');
      if (link.getAttribute('href') === `#${currentSection}`) {
        link.classList.add('active');
      }
    });
  });

  // 2. Mobile Menu Toggle
  const mobileToggle = document.querySelector('.mobile-toggle');
  const navLinksContainer = document.querySelector('.nav-links');

  if (mobileToggle && navLinksContainer) {
    mobileToggle.addEventListener('click', () => {
      navLinksContainer.classList.toggle('active');
      if (navLinksContainer.classList.contains('active')) {
        navLinksContainer.style.display = 'flex';
        navLinksContainer.style.flexDirection = 'column';
        navLinksContainer.style.position = 'absolute';
        navLinksContainer.style.top = '100%';
        navLinksContainer.style.left = '0';
        navLinksContainer.style.right = '0';
        navLinksContainer.style.background = '#090d16';
        navLinksContainer.style.padding = '1.5rem';
        navLinksContainer.style.borderBottom = '1px solid rgba(255,255,255,0.1)';
      } else {
        navLinksContainer.style.display = '';
      }
    });

    navLinks.forEach(link => {
      link.addEventListener('click', () => {
        if (navLinksContainer.classList.contains('active')) {
          navLinksContainer.classList.remove('active');
          navLinksContainer.style.display = '';
        }
      });
    });
  }

  // 3. Skills Filter Tabs
  const filterBtns = document.querySelectorAll('.filter-btn');
  const skillCards = document.querySelectorAll('.skill-card');

  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filter = btn.getAttribute('data-filter');

      skillCards.forEach(card => {
        if (filter === 'all' || card.getAttribute('data-category') === filter) {
          card.style.display = 'block';
          card.style.animation = 'fadeIn 0.4s ease';
        } else {
          card.style.display = 'none';
        }
      });
    });
  });

  // 4. Project Modal Lightbox
  const modalOverlay = document.getElementById('projectModal');
  const modalImg = document.getElementById('modalImage');
  const modalTitle = document.getElementById('modalTitle');
  const modalCompany = document.getElementById('modalCompany');
  const modalDesc = document.getElementById('modalDescription');
  const modalProcess = document.getElementById('modalProcessList');
  const modalResults = document.getElementById('modalResultsText');
  const modalClose = document.querySelector('.modal-close');

  window.openProjectModal = function(id) {
    if (!window.PORTFOLIO_PROJECTS) return;
    const project = window.PORTFOLIO_PROJECTS.find(p => p.id === id);
    if (!project) return;

    if (modalImg) {
      modalImg.src = project.image;
      modalImg.style.cursor = 'pointer';
      modalImg.title = 'Klik untuk memperbesar gambar full-screen';
    }
    if (modalTitle) modalTitle.textContent = project.title;
    if (modalCompany) modalCompany.textContent = `${project.company} (${project.period})`;
    if (modalDesc) modalDesc.textContent = project.description;

    if (modalProcess) {
      modalProcess.innerHTML = '';
      if (project.processes) {
        project.processes.forEach(p => {
          const li = document.createElement('li');
          li.textContent = p;
          modalProcess.appendChild(li);
        });
      }
    }

    if (modalResults) modalResults.textContent = project.results || '';

    if (modalOverlay) {
      modalOverlay.classList.add('active');
      document.body.style.overflow = 'hidden';
    }
  };

  if (modalClose) {
    modalClose.addEventListener('click', () => {
      if (modalOverlay) {
        modalOverlay.classList.remove('active');
        document.body.style.overflow = '';
      }
    });
  }

  if (modalOverlay) {
    modalOverlay.addEventListener('click', (e) => {
      if (e.target === modalOverlay) {
        modalOverlay.classList.remove('active');
        document.body.style.overflow = '';
      }
    });
  }

  if (modalImg) {
    modalImg.addEventListener('click', () => {
      if (typeof window.openImageViewer === 'function' && modalImg.src) {
        window.openImageViewer(modalImg.src);
      }
    });
  }

  const heroAvatar = document.querySelector('.hero-avatar');
  if (heroAvatar) {
    heroAvatar.style.cursor = 'pointer';
    heroAvatar.title = 'Klik untuk memperbesar foto profil';
    heroAvatar.addEventListener('click', () => {
      if (typeof window.openImageViewer === 'function' && heroAvatar.src) {
        window.openImageViewer(heroAvatar.src);
      }
    });
  }

  // 5. AJAX Contact Form Submission
  const contactForm = document.getElementById('portfolioContactForm');
  const formResponse = document.getElementById('formResponse');

  if (contactForm) {
    contactForm.addEventListener('submit', async (e) => {
      e.preventDefault();
      
      const submitBtn = contactForm.querySelector('button[type="submit"]');
      const originalText = submitBtn.innerHTML;
      submitBtn.disabled = true;
      submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Mengirim...';

      const formData = new FormData(contactForm);

      try {
        const response = await fetch(contactForm.action, {
          method: 'POST',
          body: formData,
          headers: {
            'X-Requested-With': 'XMLHttpRequest'
          }
        });

        const result = await response.json();

        if (formResponse) {
          formResponse.style.display = 'block';
          if (result.status === 'success') {
            formResponse.className = 'project-result-pill';
            formResponse.style.background = 'rgba(16, 185, 129, 0.15)';
            formResponse.style.color = '#10b981';
            formResponse.textContent = result.message;
            contactForm.reset();
          } else {
            formResponse.className = 'project-result-pill';
            formResponse.style.background = 'rgba(239, 68, 68, 0.15)';
            formResponse.style.color = '#ef4444';
            formResponse.textContent = 'Gagal mengirim pesan. Mohon periksa kembali input Anda.';
          }
        }
      } catch (err) {
        if (formResponse) {
          formResponse.style.display = 'block';
          formResponse.className = 'project-result-pill';
          formResponse.style.background = 'rgba(239, 68, 68, 0.15)';
          formResponse.style.color = '#ef4444';
          formResponse.textContent = 'Terjadi kesalahan jaringan. Silakan coba lagi.';
        }
      } finally {
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalText;
      }
    });
  }

  // 6. Realtime Live Clock (Hari, Tanggal, Bulan, Tahun & Jam Realtime WIB)
  function updateRealtimeClock() {
    const clockEl = document.getElementById('realtimeClock');
    if (!clockEl) return;

    const now = new Date();
    const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
    const months = [
      'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
      'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
    ];

    const dayName = days[now.getDay()];
    const dayDate = now.getDate();
    const monthName = months[now.getMonth()];
    const year = now.getFullYear();

    const hours = String(now.getHours()).padStart(2, '0');
    const minutes = String(now.getMinutes()).padStart(2, '0');
    const seconds = String(now.getSeconds()).padStart(2, '0');

    clockEl.innerHTML = `<strong>${dayName}, ${dayDate} ${monthName} ${year}</strong> &bull; <span class="clock-time">${hours}:${minutes}:${seconds} WIB</span>`;
  }

  setInterval(updateRealtimeClock, 1000);
  updateRealtimeClock();

  // 7. 100% Murni & Real Global Visitor Counter (CounterAPI REST Server)
  async function initVisitorCounter() {
    const viewsEl = document.getElementById('totalPageViews');
    const visitorsEl = document.getElementById('uniqueVisitors');

    const namespace = 'stevenadityapratama_portfolio';

    try {
      // 1. Increment total page views on global server
      const viewsRes = await fetch(`https://api.counterapi.dev/v1/${namespace}/views/up`);
      if (viewsRes.ok) {
        const viewsData = await viewsRes.json();
        if (viewsEl && viewsData.count !== undefined) {
          viewsEl.textContent = viewsData.count.toLocaleString('id-ID');
        }
      }

      // 2. Increment unique visitor count only for new sessions
      const hasVisited = sessionStorage.getItem('steven_session_active');
      let visitorEndpoint = `https://api.counterapi.dev/v1/${namespace}/visitors/`;

      if (!hasVisited) {
        visitorEndpoint += 'up';
        sessionStorage.setItem('steven_session_active', 'true');
      }

      const visitorRes = await fetch(visitorEndpoint);
      if (visitorRes.ok) {
        const visitorData = await visitorRes.json();
        if (visitorsEl && visitorData.count !== undefined) {
          visitorsEl.textContent = visitorData.count.toLocaleString('id-ID');
        }
      }
    } catch (err) {
      console.warn('CounterAPI fallback:', err);
    }
  }

  initVisitorCounter();

  // 8. Back to Top Floating Arrow Button
  const backToTopBtn = document.getElementById('backToTopBtn');
  if (backToTopBtn) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 150) {
        backToTopBtn.classList.add('show');
      } else {
        backToTopBtn.classList.remove('show');
      }
    });

    backToTopBtn.addEventListener('click', () => {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  }
  // 9. Word Cloud Tag Interactive Smooth Scroll
  const cloudTags = document.querySelectorAll('.cloud-tag');
  cloudTags.forEach(tag => {
    tag.addEventListener('click', () => {
      const targetSelector = tag.getAttribute('data-target');
      if (targetSelector) {
        const targetEl = document.querySelector(targetSelector);
        if (targetEl) {
          const navOffset = 90;
          const elementPosition = targetEl.getBoundingClientRect().top;
          const offsetPosition = elementPosition + window.pageYOffset - navOffset;

          window.scrollTo({
            top: offsetPosition,
            behavior: 'smooth'
          });

          // Glow highlight effect on targeted section
          targetEl.style.transition = 'box-shadow 0.4s ease, border-color 0.4s ease';
          targetEl.style.boxShadow = '0 0 35px rgba(52, 211, 153, 0.4)';
          setTimeout(() => {
            targetEl.style.boxShadow = '';
          }, 1800);
        }
      }
    });
  });

  // 10. Theme Initialization
  const savedTheme = localStorage.getItem('theme') || 'dark';
  document.documentElement.setAttribute('data-theme', savedTheme);
  updateThemeIcon(savedTheme);

  // 11. Language Initialization
  const savedLang = localStorage.getItem('lang') || 'id';
  applyLanguage(savedLang);

});

// Global Theme Toggle Function
window.toggleTheme = function() {
  const currentTheme = document.documentElement.getAttribute('data-theme') || 'dark';
  const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
  document.documentElement.setAttribute('data-theme', newTheme);
  localStorage.setItem('theme', newTheme);
  updateThemeIcon(newTheme);
};

function updateThemeIcon(theme) {
  const themeIcon = document.getElementById('themeIcon');
  const themeLabel = document.getElementById('themeLabel');
  if (themeIcon) {
    if (theme === 'light') {
      themeIcon.className = 'fas fa-sun';
      themeIcon.style.color = '#f59e0b'; // Vibrant gold/yellow sun
      if (themeLabel) {
        themeLabel.textContent = 'Light';
        themeLabel.style.color = '#0f172a';
      }
    } else {
      themeIcon.className = 'fas fa-moon';
      themeIcon.style.color = '#38bdf8'; // Glowing cyan moon
      if (themeLabel) {
        themeLabel.textContent = 'Dark';
        themeLabel.style.color = '#ffffff';
      }
    }
  }
}

// Global i18n Language Switcher with Flags & Full Page Translations
const i18n = {
  id: {
    // Nav
    nav_home: "Beranda",
    nav_about: "Tentang Saya",
    nav_skills: "Keahlian & Skills",
    nav_projects: "Proyek Unggulan",
    nav_experience: "Pengalaman",
    nav_education: "Pendidikan",
    nav_achievements: "Prestasi",
    nav_contact: "Kontak",

    // Hero
    hero_status: "Terbuka untuk Peluang Kerja & Proyek Jointer Fiber Optic / FTTH, Pergudangan, & Web Development",
    hero_title_prefix: "Hi, Saya",
    hero_subtitle_1: "Warehouse Management",
    hero_subtitle_2: "Network Engineer",
    hero_subtitle_3: "Fiber Optic Specialist",
    hero_subtitle_4: "Front-End Web & UI/UX Developer",
    hero_summary: "Lulusan S1 Teknik Informatika dari Universitas Dian Nusantara dengan rekam jejak teruji dalam infrastruktur telekomunikasi, pemeliharaan jaringan serat optik (fiber optic), manajemen aset dan material pergudangan, serta pengembangan Front-End Web dan UI/UX. Pemimpin yang aktif, bekerja keras, serta berdedikasi dalam bidang rekayasa web dan Machine Learning.",
    btn_view_projects: "Lihat Proyek Unggulan",
    btn_contact_me: "Hubungi Saya",
    btn_view_cv: "Lihat CV (JPG)",

    // Stats
    stat_label_1: "PENGALAMAN KERJA",
    stat_label_2: "PROYEK UTAMA",
    stat_label_3: "PROGRAM STUDI",
    stat_label_4: "TARGET SLA & FIX RATE",

    // About
    about_tag: "Profil Professional",
    about_title_prefix: "Tentang",
    about_title_suffix: "Saya",
    about_intro_p: "Kombinasi keahlian di bidang Infrastruktur Telekomunikasi Fiber Optic, Manajemen Aset dan Material Gudang, serta Pemrograman Web & UI/UX Design.",
    about_h3: "Integrasi Keahlian Lapangan & Pengembangan Perangkat Lunak",
    about_p1: "Saya adalah lulusan SMK Telkom Jakarta (Teknik Komputer Jaringan) dan lulusan S1 Teknik Informatika di Universitas Dian Nusantara. Memiliki pengalaman kerja profesional di perusahaan telekomunikasi terkemuka seperti PT. Telkom Akses, PT. PLN Icon Plus, dan PT. Nitoza Indonesia Mandiri.",
    about_p2: "Memiliki rekam jejak yang teruji dalam pembangunan dan pemeliharaan serta manajemen kabel jaringan kabel Fiber Optic (ODC & ODP), konfigurasi GPON OLT dan Router, serta manajemen aset dan material infrastruktur jaringan pada 10 area warehouse. Di samping itu, saya secara aktif mengembangkan aplikasi web berbasis PHP CodeIgniter 4, desain UI/UX, dan Machine Learning.",
    highlight_title_1: "Infrastruktur Jaringan dan Fiber Optic",
    highlight_desc_1: "Pengalaman QC & pembangunan 30 titik ODC PLN Icon Plus & pemeliharaan 50+ ODP Telkom Akses.",
    highlight_title_2: "Web & Software Development",
    highlight_desc_2: "PHP CodeIgniter 4, HTML5, CSS3, UI/UX Prototyping, dan Python.",
    highlight_title_3: "Manajemen Gudang",
    highlight_desc_3: "Pengelolaan 10 area warehouse refurbish material Telkom Akses se-Jakarta Timur.",
    highlight_title_4: "Kepemimpinan",
    highlight_desc_4: "Wakil Ketua HIMTI Undira, Ketua Divisi Humas dan IT Karang Taruna, Ketua Umum Remaja Musholla, Ketua Divisi Kerohanian OSIS, dan Sekretaris Jendral ROHIS.",

    // Skills
    sub_competency: "Kompetensi & Tools",
    skills_title: "Keahlian",
    skills_subtitle: "Daftar lengkap keterampilan teknis, jaringan, software, dan soft skills yang dikuasai.",
    filter_all: "Semua Skill",
    filter_web: "Web & Dev",
    filter_network: "Jaringan & Fiber Optic",
    filter_tools: "Software & Tools",
    filter_mgmt: "Manajemen & Soft Skills",

    // Projects
    projects_tag: "Portfolio Showcase",
    projects_title_prefix: "Proyek",
    projects_title_suffix: "Unggulan",
    projects_subtitle: "Kumpulan proyek infrastruktur telekomunikasi, sistem web enterprise, Telegram Bot, hingga desain UI/UX mobile.",
    filter_all_proj: "Semua Proyek",
    filter_web_proj: "Web System",
    filter_network_proj: "Network & FO",
    filter_ui_proj: "UI/UX Mobile",
    filter_bot_proj: "Bot & Automation",
    btn_detail: "Lihat Detail Proyek",

    // Experience
    exp_tag: "Karir Professional",
    exp_title_prefix: "Pengalaman",
    exp_title_suffix: "Kerja",
    exp_subtitle: "Perjalanan karir teknis dari Teknisi Splicer, QC Fiber Optic, hingga Staff Warehouse Management.",

    // Education
    edu_tag: "Pendidikan & Organisasi",
    edu_title_prefix: "Latar Belakang",
    edu_title_suffix: "& Kepemimpinan",
    edu_h3_1: "Pendidikan Formal",
    edu_h3_2: "Pengalaman Organisasi & Kepemimpinan",

    // Achievements & Pubs
    ach_tag: "Rekam Jejak & Karya",
    ach_title_prefix: "Prestasi",
    ach_title_suffix: "& Publikasi Jurnal",
    ach_subtitle: "Publikasi jurnal ilmiah pengabdian masyarakat, sertifikasi kompetensi BNSP, dan pelatihan resmi industri.",
    pub_header: "Publikasi Jurnal & Karya Ilmiah",
    btn_view_doi: "Lihat Artikel Jurnal (DOI)",
    btn_download_pdf: "Download PDF Jurnal",
    ach_header: "Sertifikasi & Penghargaan Lainnya",

    // Contact
    contact_tag: "Mari Berkomunikasi",
    contact_title_prefix: "Hubungi",
    contact_title_suffix: "Saya",
    contact_subtitle: "Terbuka untuk diskusi proyek web development, konsultasi jaringan fiber optic, maupun peluang karir.",
    contact_info_title: "Informasi Kontak",
    contact_send_title: "Kirim Pesan",
    label_name: "Nama Lengkap",
    label_email: "Alamat Email",
    label_subject: "Subjek Pesan",
    label_message: "Pesan Anda",
    btn_send_message: "Kirim Pesan Sekarang",

    // Footer
    footer_desc: "Lulusan S1 Teknik Informatika Universitas Dian Nusantara. Specialist Jointer Fiber Optik / FTTH, Manajemen Pergudangan Telkom Akses, & Front-End Web Developer.",
    footer_nav_title: "Navigasi Pintar",
    footer_contact_title: "Hubungi Langsung",
    footer_stats_title: "Statistik Pengunjung",
    footer_system_live: "System Live & Operational"
  },
  en: {
    // Nav
    nav_home: "Home",
    nav_about: "About Me",
    nav_skills: "Skills & Expertise",
    nav_projects: "Featured Projects",
    nav_experience: "Experience",
    nav_education: "Education",
    nav_achievements: "Achievements",
    nav_contact: "Contact",

    // Hero
    hero_status: "Open for Job Opportunities & Fiber Optic / FTTH Jointer Projects, Warehousing, & Web Development",
    hero_title_prefix: "Hi, I am",
    hero_subtitle_1: "Warehouse Management",
    hero_subtitle_2: "Network Engineer",
    hero_subtitle_3: "Fiber Optic Specialist",
    hero_subtitle_4: "Front-End Web & UI/UX Developer",
    hero_summary: "Bachelor of Computer Science graduate from Dian Nusantara University with a proven track record in telecommunications infrastructure, fiber optic network maintenance, warehouse asset management, and Front-End Web & UI/UX development. Active leader dedicated to web engineering and Machine Learning.",
    btn_view_projects: "View Featured Projects",
    btn_contact_me: "Contact Me",
    btn_view_cv: "View CV (JPG)",

    // Stats
    stat_label_1: "WORK EXPERIENCE",
    stat_label_2: "KEY PROJECTS",
    stat_label_3: "MAJOR / DEGREE",
    stat_label_4: "SLA & FIX RATE TARGET",

    // About
    about_tag: "Professional Profile",
    about_title_prefix: "About",
    about_title_suffix: "Me",
    about_intro_p: "Combination of expertise in Fiber Optic Telecom Infrastructure, Asset & Warehouse Material Management, and Web Programming & UI/UX Design.",
    about_h3: "Integrating Field Engineering & Software Development",
    about_p1: "Graduate of SMK Telkom Jakarta (Network Engineering) and Bachelor of Computer Science from Dian Nusantara University. Professional work experience at leading telecommunications companies such as PT. Telkom Akses, PT. PLN Icon Plus, and PT. Nitoza Indonesia Mandiri.",
    about_p2: "Proven track record in construction, maintenance, and cable management of Fiber Optic networks (ODC & ODP), GPON OLT and Router configuration, as well as asset and material management across 10 warehouse areas. Additionally, actively developing web applications using PHP CodeIgniter 4, UI/UX design, and Machine Learning.",
    highlight_title_1: "Network & Fiber Optic Infrastructure",
    highlight_desc_1: "QC & construction of 30 PLN Icon Plus ODC locations & maintenance of 50+ Telkom Akses ODPs.",
    highlight_title_2: "Web & Software Development",
    highlight_desc_2: "PHP CodeIgniter 4, HTML5, CSS3, UI/UX Prototyping, and Python.",
    highlight_title_3: "Warehouse Management",
    highlight_desc_3: "Management of 10 Telkom Akses material refurbish warehouse areas across East Jakarta.",
    highlight_title_4: "Leadership",
    highlight_desc_4: "Vice Chairman of HIMTI Undira, Head of PR and IT Division Karang Taruna, General Chairman Youth Mosque, Head of OSIS Religious Division, and Secretary General of ROHIS.",

    // Skills
    sub_competency: "Competencies & Tools",
    skills_title: "Skills",
    skills_subtitle: "Comprehensive list of technical skills, network engineering, software, and soft skills.",
    filter_all: "All Skills",
    filter_web: "Web & Dev",
    filter_network: "Network & Fiber Optics",
    filter_tools: "Software & Tools",
    filter_mgmt: "Management & Soft Skills",

    // Projects
    projects_tag: "Portfolio Showcase",
    projects_title_prefix: "Featured",
    projects_title_suffix: "Projects",
    projects_subtitle: "A collection of telecom infrastructure projects, enterprise web systems, Telegram Bot, and mobile UI/UX design.",
    filter_all_proj: "All Projects",
    filter_web_proj: "Web System",
    filter_network_proj: "Network & FO",
    filter_ui_proj: "UI/UX Mobile",
    filter_bot_proj: "Bot & Automation",
    btn_detail: "View Project Details",

    // Experience
    exp_tag: "Professional Career",
    exp_title_prefix: "Work",
    exp_title_suffix: "Experience",
    exp_subtitle: "Technical career journey from Splicer Technician, Fiber Optic QC, to Warehouse Management Staff.",

    // Education
    edu_tag: "Education & Leadership",
    edu_title_prefix: "Academic",
    edu_title_suffix: "Background",
    edu_h3_1: "Formal Education",
    edu_h3_2: "Organization & Leadership Experience",

    // Achievements & Pubs
    ach_tag: "Track Record & Works",
    ach_title_prefix: "Achievements",
    ach_title_suffix: "& Journal Publications",
    ach_subtitle: "Scientific journal publication on community empowerment, competition awards, and BNSP certifications.",
    pub_header: "Journal Publication & Research",
    btn_view_doi: "View Journal Article (DOI)",
    btn_download_pdf: "Download Journal PDF",
    ach_header: "Certifications & Other Awards",

    // Contact
    contact_tag: "Get In Touch",
    contact_title_prefix: "Contact",
    contact_title_suffix: "Me",
    contact_subtitle: "Open for web development discussions, fiber optic network consultation, or career opportunities.",
    contact_info_title: "Contact Information",
    contact_send_title: "Send Message",
    label_name: "Full Name",
    label_email: "Email Address",
    label_subject: "Message Subject",
    label_message: "Your Message",
    btn_send_message: "Send Message Now",

    // Footer
    footer_desc: "Bachelor of Computer Science graduate from Dian Nusantara University. Specialist Fiber Optic / FTTH Jointer, Telkom Akses Warehouse Management, & Front-End Web Developer.",
    footer_nav_title: "Quick Links",
    footer_contact_title: "Direct Contact",
    footer_stats_title: "Visitor Statistics",
    footer_system_live: "System Live & Operational"
  }
};

window.toggleLanguage = function() {
  const currentLang = localStorage.getItem('lang') || 'id';
  const newLang = currentLang === 'id' ? 'en' : 'id';
  localStorage.setItem('lang', newLang);
  applyLanguage(newLang);
};

function applyLanguage(lang) {
  const langLabel = document.getElementById('langLabel');
  if (langLabel) {
    const flagSrc = lang === 'id' ? 'https://flagcdn.com/w20/id.png' : 'https://flagcdn.com/w20/gb.png';
    const flagAlt = lang === 'id' ? 'ID Flag' : 'EN Flag';
    const labelText = lang === 'id' ? 'ID' : 'EN';
    langLabel.innerHTML = `<img src="${flagSrc}" alt="${flagAlt}" style="width:18px; height:12px; border-radius:2px; object-fit:cover; display:inline-block;"> ${labelText}`;
  }

  const dict = i18n[lang];
  if (!dict) return;

  document.querySelectorAll('[data-i18n]').forEach(el => {
    const key = el.getAttribute('data-i18n');
    if (dict[key]) {
      el.textContent = dict[key];
    }
  });
}

/* ==========================================
   INTERACTIVE FEATURES JAVASCRIPT LOGIC
   ========================================== */

document.addEventListener('DOMContentLoaded', function() {
  init3DTilt();
  initDragCarousel();
  initCommandPalette();
});

/* 1. 3D Parallax Tilt Effect for Cards */
function init3DTilt() {
  const cards = document.querySelectorAll('.tilt-card');
  cards.forEach(card => {
    card.addEventListener('mousemove', function(e) {
      const rect = card.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;
      const centerX = rect.width / 2;
      const centerY = rect.height / 2;
      const rotateX = ((y - centerY) / centerY) * -8;
      const rotateY = ((x - centerX) / centerX) * 8;

      card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.02, 1.02, 1.02)`;
    });

    card.addEventListener('mouseleave', function() {
      card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)';
    });
  });
}

/* 2. Drag & Touch Carousel Logic */
function initDragCarousel() {
  const container = document.getElementById('projectsContainer');
  if (!container) return;

  let isDown = false;
  let startX;
  let scrollLeft;

  container.addEventListener('mousedown', (e) => {
    if (!container.classList.contains('carousel-view')) return;
    isDown = true;
    startX = e.pageX - container.offsetLeft;
    scrollLeft = container.scrollLeft;
  });

  container.addEventListener('mouseleave', () => { isDown = false; });
  container.addEventListener('mouseup', () => { isDown = false; });

  container.addEventListener('mousemove', (e) => {
    if (!isDown || !container.classList.contains('carousel-view')) return;
    e.preventDefault();
    const x = e.pageX - container.offsetLeft;
    const walk = (x - startX) * 2;
    container.scrollLeft = scrollLeft - walk;
  });
}

window.setProjectsView = function(view) {
  const container = document.getElementById('projectsContainer');
  const viewGridBtn = document.getElementById('viewGridBtn');
  const viewCarouselBtn = document.getElementById('viewCarouselBtn');

  if (!container) return;

  if (view === 'carousel') {
    container.classList.add('carousel-view');
    viewCarouselBtn.classList.add('active');
    if (viewGridBtn) viewGridBtn.classList.remove('active');
  } else {
    container.classList.remove('carousel-view');
    viewGridBtn.classList.add('active');
    if (viewCarouselBtn) viewCarouselBtn.classList.remove('active');
  }
};

window.slideProjects = function(direction) {
  const container = document.getElementById('projectsContainer');
  if (!container) return;

  if (!container.classList.contains('carousel-view')) {
    setProjectsView('carousel');
  }

  const scrollAmount = 350;
  if (direction === 'left') {
    container.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
  } else {
    container.scrollBy({ left: scrollAmount, behavior: 'smooth' });
  }
};

/* 3. Quick Search Command Palette Modal (Ctrl + K) */
function initCommandPalette() {
  document.addEventListener('keydown', function(e) {
    if ((e.ctrlKey || e.metaKey) && e.key.toLowerCase() === 'k') {
      e.preventDefault();
      openSearchModal();
    }
    if (e.key === 'Escape') {
      closeSearchModal();
    }
  });
}

window.openSearchModal = function() {
  const modal = document.getElementById('searchModal');
  const input = document.getElementById('searchInput');
  if (modal) {
    modal.classList.add('active');
    setTimeout(() => { if (input) input.focus(); }, 150);
  }
};

window.closeSearchModal = function() {
  const modal = document.getElementById('searchModal');
  if (modal) {
    modal.classList.remove('active');
  }
};

window.filterSearchResults = function() {
  const query = document.getElementById('searchInput').value.toLowerCase().trim();
  const resultsContainer = document.getElementById('searchResults');
  if (!resultsContainer) return;

  if (!query) {
    resultsContainer.innerHTML = `
      <div style="padding:1.5rem; text-align:center; color:var(--text-muted); font-size:0.88rem;">
        Tulis kata kunci untuk mencari seluruh isi portofolio Steven Aditya Pratama...
      </div>`;
    return;
  }

  const searchData = [
    { title: "Machine Learning & AI Classification", cat: "Skill", target: "#skills" },
    { title: "CodeIgniter 4 PHP Framework", cat: "Skill", target: "#skills" },
    { title: "Fiber Optic & Splicing (Jointer BNSP)", cat: "Skill / Sertifikasi", target: "#skills" },
    { title: "ODC PLN Icon Plus 30 Titik", cat: "Proyek", target: "#projects" },
    { title: "ODP Telkom Akses 50+ Titik", cat: "Proyek / Pengalaman", target: "#experience" },
    { title: "Refurbish Material Warehouse Management", cat: "Proyek / Karir", target: "#experience" },
    { title: "Telegram Bot API Notifikasi QC", cat: "Proyek Showcase", target: "#projects" },
    { title: "Cisco & GPON Networking", cat: "Skill Jaringan", target: "#skills" },
    { title: "Python Data Processing & Automation", cat: "Skill Dev", target: "#skills" },
    { title: "Jurnal PKM Pengabdian Masyarakat Karang Taruna", cat: "Publikasi Jurnal", target: "#publications" },
    { title: "Pendidikan S1 Teknik Informatika (UNDIRA)", cat: "Pendidikan", target: "#education" },
    { title: "Organisasi Wakil Ketua HIMTI UNDIRA", cat: "Organisasi", target: "#education" }
  ];

  const matches = searchData.filter(item => 
    item.title.toLowerCase().includes(query) || item.cat.toLowerCase().includes(query)
  );

  if (matches.length === 0) {
    resultsContainer.innerHTML = `
      <div style="padding:1.5rem; text-align:center; color:var(--text-muted); font-size:0.88rem;">
        Tidak ada hasil yang cocok dengan "<strong>${query}</strong>"
      </div>`;
    return;
  }

  resultsContainer.innerHTML = matches.map(item => `
    <a href="${item.target}" onclick="closeSearchModal()" class="search-result-item">
      <div>
        <div class="search-result-title">${item.title}</div>
        <div style="font-size:0.75rem; color:var(--text-muted); margin-top:0.15rem;">Melompat ke section ${item.target}</div>
      </div>
      <span class="search-result-category">${item.cat}</span>
    </a>
  `).join('');
};

/* 4. Experience Timeline Category Filter */
window.filterExperience = function(category) {
  const buttons = document.querySelectorAll('.timeline-filter-btn');
  buttons.forEach(btn => btn.classList.remove('active'));

  if (event && event.target) {
    event.target.classList.add('active');
  }

  const items = document.querySelectorAll('.timeline-item');
  items.forEach(item => {
    const itemCat = item.getAttribute('data-exp-cat');
    if (category === 'all' || itemCat === category) {
      item.style.display = 'block';
      item.style.opacity = '0';
      setTimeout(() => { item.style.opacity = '1'; }, 50);
    } else {
      item.style.display = 'none';
    }
  });
};

/* ==========================================
   CLI TERMINAL & AI STEVEN CHATBOT LOGIC
   ========================================== */

/* 1. Interactive Terminal CLI (steven@web-portofolio:~$) */
window.handleCliKeyDown = function(e) {
  if (e.key === 'Enter') {
    const inputEl = document.getElementById('cliInput');
    const outputContainer = document.getElementById('cliOutput');
    const command = inputEl.value.trim().toLowerCase();
    inputEl.value = '';

    if (!command) return;

    // Create command echo
    const block = document.createElement('div');
    block.className = 'cli-output-block';

    const echoLine = document.createElement('div');
    echoLine.className = 'cli-command-echo';
    echoLine.innerHTML = `<span style="color:#10b981;">steven@web-portofolio:~$</span> ${command}`;
    block.appendChild(echoLine);

    const respLine = document.createElement('div');
    respLine.className = 'cli-response-text';

    // Process command
    switch (command) {
      case 'help':
        respLine.innerHTML = `
          <strong>Perintah Tersedia:</strong><br>
          • <span style="color:#34d399;">whoami</span> : Profil singkat Steven Aditya Pratama<br>
          • <span style="color:#34d399;">skills</span> : Daftar keahlian teknis (Fiber Optic, CodeIgniter 4, Cisco, Python)<br>
          • <span style="color:#34d399;">projects</span> : Proyek ODC Icon Plus, ODP Telkom, Bot Telegram QC<br>
          • <span style="color:#34d399;">certif</span> : Daftar sertifikasi resmi BNSP & Cisco<br>
          • <span style="color:#34d399;">contact</span> : Email & Link WhatsApp Steven<br>
          • <span style="color:#34d399;">clear</span> : Bersihkan layar terminal<br>
          • <span style="color:#f59e0b;">Kode Rahasia:</span> <span style="color:#10b981;">matrix</span>, <span style="color:#10b981;">slytherin</span>, <span style="color:#10b981;">fiber</span>, <span style="color:#10b981;">cisco</span>, <span style="color:#10b981;">himti</span>, <span style="color:#10b981;">bnsp</span>, <span style="color:#10b981;">sudo</span>
        `;
        break;

      case 'whoami':
        respLine.innerHTML = `
          <strong>Steven Aditya Pratama (S.Kom Candidate)</strong><br>
          Lulusan SMK Telkom Jakarta (TKJ) & S1 Teknik Informatika UNDIRA.<br>
          Pengalaman: PT. Telkom Akses (Warehouse & FO Maintenance), PT. PLN Icon Plus (ODC Network Engineer), PT. Nitoza Indonesia Mandiri (UI/UX).<br>
          Keahlian Utama: Fiber Optic Splicing (BNSP), Cisco Router, PHP CodeIgniter 4, Machine Learning.
        `;
        break;

      case 'skills':
        respLine.innerHTML = `
          <strong>Keahlian Teknis & Tools:</strong><br>
          [Jaringan & FO] : OTDR, OPM, Splicer, GPON OLT, Cisco ASR 920, BNSP Jointer<br>
          [Web & Dev] : PHP CodeIgniter 4, HTML5, CSS3, JavaScript, Python, MySQL<br>
          [Tools & Soft] : VS Code, MS Excel Advanced (Pivot/QC), Leadership, Critical Thinking
        `;
        break;

      case 'projects':
        respLine.innerHTML = `
          <strong>Rekam Jejak Proyek Utama:</strong><br>
          1. ODC PLN Icon Plus 30 Titik (Banten - Jabodetabek)<br>
          2. ODP Telkom Akses 50+ Titik (Assurance & Maintenance Rawamangun)<br>
          3. Telegram Bot API Ticket & QC Material Gudang Telkom Akses<br>
          4. Chatbot Compy (Asisten Pembelajaran Komputer UNDIRA)<br>
          5. Prototipe Mobile App PASS (PT. Nitoza Indonesia Mandiri)
        `;
        break;

      case 'certif':
        respLine.innerHTML = `
          <strong>Sertifikasi Resmi:</strong><br>
          • BNSP Sertifikasi Telekomunikasi Dengan Kabel (2023)<br>
          • BNSP Sertifikasi Telekomunikasi Jointer (2022)<br>
          • Cisco Networking Device and Initial Configuration (2025)<br>
          • Cisco Python Essentials 1 & 2 (2023)<br>
          • Cisco Computer Hardware Basics (2025)<br>
          • Oracle Database Programming with SQL & Design (2023)
        `;
        break;

      case 'contact':
        respLine.innerHTML = `
          <strong>Kontak Langsung Steven:</strong><br>
          • Email: <a href="mailto:stevenadityapratama74@gmail.com" style="color:#34d399;">stevenadityapratama74@gmail.com</a><br>
          • WhatsApp: <a href="https://wa.me/6281289196924" target="_blank" style="color:#34d399;">+62 812-8919-6924</a><br>
          • LinkedIn: <a href="https://linkedin.com/in/stevenadityapratama" target="_blank" style="color:#34d399;">linkedin.com/in/stevenadityapratama</a>
        `;
        break;

      case 'clear':
        outputContainer.innerHTML = '';
        return;

      /* Easter Egg Secret Codes */
      case 'matrix':
        respLine.innerHTML = `<span style="color:#10b981; font-weight:700;">🟢 [EASTER EGG ACTIVATED] Starting Full-Screen Matrix Stream...</span>`;
        triggerMatrixEffect();
        setTimeout(() => closeSearchModal(), 400);
        break;

      case 'slytherin':
      case 'snake':
        respLine.innerHTML = `<span style="color:#34d399; font-weight:700;">🐍 [SLYTHERIN EMERALD POWER] Serpent Crest Activated!</span>`;
        triggerSlytherinPulse();
        setTimeout(() => closeSearchModal(), 400);
        break;

      case 'fiber':
      case 'fo':
        respLine.innerHTML = `<span style="color:#34d399; font-weight:700;">⚡ [FIBER OPTIC PULSE] 100 Gbps Laser Signal Transmitting...</span>`;
        triggerFiberPulseEffect();
        setTimeout(() => closeSearchModal(), 400);
        break;

      case 'cisco':
      case 'router':
        respLine.innerHTML = `
          <div style="font-family:monospace; color:#34d399; font-size:0.78rem;">
            Cisco IOS Software, ASR920 Software (PPC_LINUX_IOSD-UNIVERSALK9-M), Version 15.6(2)S4<br>
            Technical Support: http://www.cisco.com/techsupport<br>
            System Bootstrap, Version 15.6(2)rS, RELEASE SOFTWARE (fc1)<br>
            cisco ASR-920-24SZ-IM (PPC_LINUX_IOSD) processor with 3670016K/524288K bytes of memory.<br>
            <span style="color:#10b981;">Router# show interfaces GigabitEthernet0/0/0 status -> CONNECTED (1000Mbps Full-Duplex)</span>
          </div>
        `;
        triggerFiberPulseEffect();
        break;

      case 'undira':
      case 'himti':
        respLine.innerHTML = `<span style="color:#f59e0b; font-weight:700;">🎓 [HIMTI UNDIRA ACADEMIC BADGE] Wakil Ketua Himpunan Mahasiswa Teknik Informatika (2024-2025).</span>`;
        triggerSlytherinPulse();
        break;

      case 'bnsp':
      case 'jointer':
        respLine.innerHTML = `<span style="color:#10b981; font-weight:700;">📜 [BNSP VERIFIED CERTIFICATE] Sertifikasi Profesi Nasional Aktivitas Telekomunikasi Dengan Kabel & Jointer.</span>`;
        triggerFiberPulseEffect();
        break;

      case 'sudo':
      case 'root':
        respLine.innerHTML = `<span style="color:#ef4444; font-weight:700;">🔓 [ACCESS GRANTED] Developer Root Privileges Activated! Full Administrative Control Granted.</span>`;
        triggerMatrixEffect();
        setTimeout(() => closeSearchModal(), 400);
        break;

      default:
        respLine.innerHTML = `Perintah "<strong>${command}</strong>" tidak dikenali. Ketik <span style="color:#34d399;">help</span> untuk melihat daftar perintah.`;
        break;
    }

    block.appendChild(respLine);
    outputContainer.appendChild(block);
    outputContainer.scrollTop = outputContainer.scrollHeight;
  }
};

/* 2. Floating AI Steven Assistant Chatbot Logic */
window.toggleAiChatbot = function() {
  const windowEl = document.getElementById('aiChatWindow');
  if (windowEl) {
    windowEl.classList.toggle('active');
  }
};

window.sendQuickAiQuery = function(queryText) {
  const inputEl = document.getElementById('aiChatInput');
  if (inputEl) {
    inputEl.value = queryText;
    sendAiChatMessage();
  }
};

window.sendAiChatMessage = function() {
  const inputEl = document.getElementById('aiChatInput');
  const messagesContainer = document.getElementById('aiChatMessages');
  const text = inputEl.value.trim();
  if (!text) return;

  // Render User Message
  const userDiv = document.createElement('div');
  userDiv.className = 'chat-msg user-msg';
  userDiv.textContent = text;
  messagesContainer.appendChild(userDiv);
  inputEl.value = '';
  messagesContainer.scrollTop = messagesContainer.scrollHeight;

  // Bot Response Logic
  setTimeout(() => {
    const botDiv = document.createElement('div');
    botDiv.className = 'chat-msg bot-msg';

    const lower = text.toLowerCase();
    if (lower.includes('pengalaman') || lower.includes('kerja') || lower.includes('telkom') || lower.includes('icon')) {
      botDiv.innerHTML = `
        Steven memiliki rekam jejak profesional di <strong>PT. Telkom Akses</strong> (Warehouse Refurbish Staff & FO Maintenance) dan <strong>PT. PLN Icon Plus</strong> (Supervisi & QC 30 Titik ODC Banten-Jabodetabek). Memiliki keahlian lengkap di bidang operasional jaringan maupun manajemen gudang! 🏢
      `;
    } else if (lower.includes('sertifikat') || lower.includes('bnsp') || lower.includes('cisco') || lower.includes('jointer')) {
      botDiv.innerHTML = `
        Steven memegang <strong>Sertifikasi Profesi BNSP Jointer & Telekomunikasi Kabel</strong>, serta sertifikasi internasional Cisco Networking Academy (<em>Networking Devices, Python Essentials 1 & 2, Computer Hardware Basics</em>) dan Oracle Database! 📜
      `;
    } else if (lower.includes('keahlian') || lower.includes('skill') || lower.includes('fiber') || lower.includes('web')) {
      botDiv.innerHTML = `
        Keahlian utama Steven mencakup: 
        <br>⚡ <strong>Infrastruktur Jaringan:</strong> Fiber Optic Splicing, OTDR/OPM, GPON OLT, Cisco Router.
        <br>💻 <strong>Web Dev:</strong> PHP CodeIgniter 4, JavaScript, Python, MySQL.
        <br>📦 <strong>Gudang:</strong> Manajemen Aset & Material, Stock Opname, MS Excel Advanced.
      `;
    } else if (lower.includes('kontak') || lower.includes('wa') || lower.includes('whatsapp') || lower.includes('email')) {
      botDiv.innerHTML = `
        Anda dapat menghubungi Steven langsung via:
        <br>📱 <strong>WhatsApp:</strong> <a href="https://wa.me/6281289196924" target="_blank" style="color:#34d399; font-weight:600;">+62 812-8919-6924</a>
        <br>✉️ <strong>Email:</strong> <a href="mailto:stevenadityapratama74@gmail.com" style="color:#34d399; font-weight:600;">stevenadityapratama74@gmail.com</a>
      `;
    } else if (lower.includes('gimana') || lower.includes('siapa') || lower.includes('orangnya') || lower.includes('kepribadian')) {
      botDiv.innerHTML = `
        Steven Aditya Pratama adalah seorang yang <strong>disiplin, berdedikasi tinggi, berjiwa kepemimpinan (Wakil Ketua HIMTI UNDIRA), cepat belajar (fast learner), dan memiliki problem-solving kuat</strong> di bidang Jaringan Fiber Optic maupun Software Development! 🚀
      `;
    } else {
      botDiv.innerHTML = `
        Terima kasih atas pertanyaannya! Steven Aditya Pratama siap berkontribusi sebagai <strong>Network Engineer, Web Developer (CodeIgniter 4), maupun Admin Pergudangan & Aset</strong>. Silakan tanyakan hal lain atau hubungi langsung via WhatsApp! 😊
      `;
    }

    messagesContainer.appendChild(botDiv);
    messagesContainer.scrollTop = messagesContainer.scrollHeight;
  }, 350);
};

/* 3. Matrix Digital Code Easter Egg Animation Engine */
function triggerMatrixEffect() {
  const canvas = document.getElementById('matrixCanvas');
  if (!canvas) return;

  canvas.classList.add('active');
  const ctx = canvas.getContext('2d');

  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;

  const chars = '01STEVEN10ADITYA10PRATAMA10TELKOM10ICONPLUS10CISC010';
  const fontSize = 14;
  const columns = canvas.width / fontSize;
  const drops = Array(Math.floor(columns)).fill(1);

  let frameCount = 0;
  const matrixInterval = setInterval(() => {
    ctx.fillStyle = 'rgba(7, 15, 11, 0.08)';
    ctx.fillRect(0, 0, canvas.width, canvas.height);

    ctx.fillStyle = '#10b981';
    ctx.font = `${fontSize}px monospace`;

    for (let i = 0; i < drops.length; i++) {
      const text = chars.charAt(Math.floor(Math.random() * chars.length));
      ctx.fillText(text, i * fontSize, drops[i] * fontSize);

      if (drops[i] * fontSize > canvas.height && Math.random() > 0.975) {
        drops[i] = 0;
      }
      drops[i]++;
    }

    frameCount++;
    if (frameCount > 250) { // Stop matrix effect after ~8 seconds
      clearInterval(matrixInterval);
      canvas.classList.remove('active');
    }
  }, 33);
}

function triggerSlytherinPulse() {
  document.body.style.transition = 'box-shadow 0.5s ease';
  document.body.style.boxShadow = 'inset 0 0 120px #10b981';
  setTimeout(() => { document.body.style.boxShadow = 'none'; }, 3000);
}

function triggerFiberPulseEffect() {
  const cards = document.querySelectorAll('.tilt-card, .project-card, .skill-card, .hero-card');
  cards.forEach(card => {
    card.classList.add('highlight-pulse');
    setTimeout(() => { card.classList.remove('highlight-pulse'); }, 4000);
  });
}

/* 4. Scroll Listener for Back to Top Button */
window.addEventListener('scroll', function() {
  const backToTopBtn = document.getElementById('backToTopBtn');
  if (backToTopBtn) {
    if (window.scrollY > 300) {
      backToTopBtn.classList.add('visible');
    } else {
      backToTopBtn.classList.remove('visible');
    }
  }
});
