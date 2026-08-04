<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Steven Aditya Pratama - S1 Teknik Informatika, Jointer Fiber Optik / FTTH, Pergudangan & Front-End Web Developer</title>
  <meta name="description" content="Portofolio Resmi Steven Aditya Pratama - Calon Lulusan S1 Teknik Informatika Universitas Dian Nusantara (Sidang Skripsi Agustus 2026 / Expected Graduation: Agustus - September 2026). Keahlian: Jointer Fiber Optik / FTTH, Manajemen Pergudangan, Network Engineer, & Front-End Web Developer (PHP CodeIgniter 4 / UI/UX).">
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

  <!-- Google Fonts, FontAwesome & Devicon Icons -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;600&family=Inter:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">

  <!-- Custom Glassmorphism Stylesheet -->
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css?v=3.0') ?>">
</head>
<body>

  <!-- Navigation Bar -->
  <nav class="navbar">
    <div class="container nav-container">
      <a href="#hero" class="logo">
        <span class="dot"></span> 
        <span class="logo-full">STEVEN ADITYA PRATAMA</span>
        <span class="logo-short">STEVEN A. PRATAMA</span>
        <span class="logo-mini">STEVEN</span>
      </a>

      <ul class="nav-links">
        <li><a href="#hero" class="nav-link active" data-i18n="nav_home">Beranda</a></li>
        <li><a href="#about" class="nav-link" data-i18n="nav_about">Tentang Saya</a></li>
        <li><a href="#skills" class="nav-link" data-i18n="nav_skills">Keahlian & Skills</a></li>
        <li><a href="#projects" class="nav-link" data-i18n="nav_projects">Proyek Unggulan</a></li>
        <li><a href="#experience" class="nav-link" data-i18n="nav_experience">Pengalaman</a></li>
        <li><a href="#education" class="nav-link" data-i18n="nav_education">Pendidikan</a></li>
        <li><a href="#achievements" class="nav-link" data-i18n="nav_achievements">Prestasi</a></li>
        <li><a href="#contact" class="nav-link" data-i18n="nav_contact">Kontak</a></li>
        <li class="mobile-cv-item"><a href="javascript:void(0)" onclick="openCvModal()" class="nav-link" style="color:var(--primary-cyan); font-weight:700;"><i class="fas fa-file-image"></i> Lihat CV (JPG)</a></li>
      </ul>

      <div class="nav-actions">
        <!-- Quick Search Ctrl+K Button -->
        <button id="searchOpenBtn" onclick="openSearchModal()" class="nav-btn-toggle" title="Quick Search (Ctrl + K)">
          <i class="fas fa-search" style="color:var(--primary-cyan); font-size:0.85rem;"></i>
          <span class="search-kbd-text" style="font-family:var(--font-code); font-size:0.72rem; opacity:0.8; background:rgba(52, 211, 153, 0.18); padding:0.1rem 0.35rem; border-radius:4px;">Ctrl K</span>
        </button>

        <!-- Language Switcher -->
        <button id="langToggleBtn" onclick="toggleLanguage()" class="nav-btn-toggle" title="Switch Language / Ganti Bahasa">
          <span id="langLabel" style="display:inline-flex; align-items:center; gap:0.3rem;">
            <img src="https://flagcdn.com/w20/id.png" alt="ID Flag" style="width:18px; height:12px; border-radius:2px; object-fit:cover; display:inline-block;"> <span class="lang-text">ID</span>
          </span>
        </button>

        <!-- Dark / Light Theme Switcher -->
        <button id="themeToggleBtn" onclick="toggleTheme()" class="nav-btn-toggle" title="Mode Gelap / Terang (Dark / Light Theme)">
          <i class="fas fa-moon" id="themeIcon" style="color:#38bdf8; font-size:0.9rem;"></i> <span id="themeLabel" class="theme-label-text">Dark</span>
        </button>

        <button onclick="openCvModal()" class="nav-btn btn-nav-cv">
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
            <span data-i18n="hero_status"><?= esc($profile['status']) ?></span>
          </div>

          <h1><span data-i18n="hero_title_prefix">Hi, Saya</span> <span class="gradient-text"><?= esc($profile['name']) ?></span></h1>
          
          <div class="hero-subtitle">
            <span data-i18n="hero_subtitle_1">Warehouse Management</span>
            <span data-i18n="hero_subtitle_2">Network Engineer</span>
            <span data-i18n="hero_subtitle_3">Fiber Optic Specialist</span>
            <span data-i18n="hero_subtitle_4">Front-End Web & UI/UX Developer</span>
          </div>

          <p class="hero-description" data-i18n="hero_summary">
            <?= esc($profile['summary']) ?>
          </p>

          <div class="hero-actions">
            <a href="#projects" class="btn-primary">
              <i class="fas fa-rocket"></i> <span data-i18n="btn_view_projects">Lihat Proyek Unggulan</span>
            </a>
            <a href="#contact" class="btn-secondary">
              <i class="fas fa-paper-plane"></i> <span data-i18n="btn_contact_me">Hubungi Saya</span>
            </a>
          </div>

          <div class="hero-socials">
            <a href="<?= esc($profile['linkedin']) ?>" target="_blank" class="social-icon" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            <a href="<?= esc($profile['github']) ?>" target="_blank" class="social-icon" title="GitHub"><i class="fab fa-github"></i></a>
            <a href="mailto:<?= esc($profile['email']) ?>" class="social-icon" title="Email Direct"><i class="fas fa-envelope"></i></a>
          </div>
        </div>

        <div class="hero-card">
          <div class="hero-avatar-wrapper">
            <img src="<?= base_url('assets/img/steven_profile.jpg') ?>" alt="<?= esc($profile['name']) ?>" class="hero-avatar">
          </div>

          <h3><?= esc($profile['nickname']) ?> Aditya Pratama</h3>
          <p class="role-title">Calon Lulusan S1 Teknik Informatika | Universitas Dian Nusantara</p>

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
        <span class="sub-tag" data-i18n="about_tag">Profil Professional</span>
        <h2><span data-i18n="about_title_prefix">Tentang</span> <span class="gradient-text" data-i18n="about_title_suffix">Saya</span></h2>
        <p data-i18n="about_intro_p">Kombinasi keahlian di bidang Infrastruktur Telekomunikasi Fiber Optic, Manajemen Aset dan Material Gudang, serta Pemrograman Web & UI/UX Design.</p>
      </div>

      <div class="about-grid" style="display:grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem; align-items: stretch;">
        <div class="about-text">
          <h3 data-i18n="about_h3">Integrasi Keahlian Lapangan & Pengembangan Perangkat Lunak</h3>
          <p data-i18n="about_p1">
            Saya adalah alumni SMK Telkom Jakarta (Teknik Komputer Jaringan) dan Calon Lulusan S1 Teknik Informatika di Universitas Dian Nusantara (Sidang Skripsi Agustus 2026 / Expected Graduation: Agustus - September 2026). Memiliki pengalaman kerja profesional di perusahaan telekomunikasi terkemuka seperti PT. Telkom Akses, PT. PLN Icon Plus, dan PT. Nitoza Indonesia Mandiri.
          </p>
          <p data-i18n="about_p2">
            Memiliki rekam jejak yang teruji dalam pembangunan dan pemeliharaan serta manajemen kabel jaringan kabel Fiber Optic (ODC & ODP), konfigurasi GPON OLT dan Router, serta manajemen aset dan material infrastruktur jaringan pada 10 area warehouse. Di samping itu, saya secara aktif mengembangkan aplikasi web berbasis PHP CodeIgniter 4, desain UI/UX, dan Machine Learning.
          </p>

          <div class="about-highlights">
            <div class="highlight-card">
              <div class="highlight-icon"><i class="fas fa-network-wired"></i></div>
              <div class="highlight-info">
                <h4 data-i18n="highlight_title_1">Infrastruktur Jaringan dan Fiber Optic</h4>
                <p data-i18n="highlight_desc_1">Pengalaman QC & pembangunan 30 titik ODC PLN Icon Plus & pemeliharaan 50+ ODP Telkom Akses.</p>
              </div>
            </div>
            <div class="highlight-card">
              <div class="highlight-icon"><i class="fas fa-laptop-code"></i></div>
              <div class="highlight-info">
                <h4 data-i18n="highlight_title_2">Web & Software Development</h4>
                <p data-i18n="highlight_desc_2">PHP CodeIgniter 4, HTML5, CSS3, UI/UX Prototyping, dan Python.</p>
              </div>
            </div>
            <div class="highlight-card">
              <div class="highlight-icon"><i class="fas fa-warehouse"></i></div>
              <div class="highlight-info">
                <h4 data-i18n="highlight_title_3">Manajemen Gudang</h4>
                <p data-i18n="highlight_desc_3">Pengelolaan 10 area warehouse refurbish material Telkom Akses se-Jakarta Timur.</p>
              </div>
            </div>
            <div class="highlight-card">
              <div class="highlight-icon"><i class="fas fa-users"></i></div>
              <div class="highlight-info">
                <h4 data-i18n="highlight_title_4">Kepemimpinan</h4>
                <p data-i18n="highlight_desc_4">Wakil Ketua HIMTI Undira, Ketua Divisi Humas dan IT Karang Taruna, Ketua Umum Remaja Musholla, Ketua Divisi Kerohanian OSIS, dan Sekretaris Jendral ROHIS.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- KEYWORDS Word Cloud Card -->
        <div class="word-cloud-card">
          <div class="word-cloud-header">
            <h4>KEYWORDS HIGHLIGHTS</h4>
          </div>
          <div class="word-cloud-container">
            <span class="cloud-tag tag-ml" data-target="#skills" title="Klik untuk menuju Keahlian Machine Learning">Machine Learning</span>
            <span class="cloud-tag tag-ci" data-target="#skills" title="Klik untuk menuju Keahlian CodeIgniter 4">CodeIgniter 4</span>
            <span class="cloud-tag tag-fo" data-target="#skills" title="Klik untuk menuju Keahlian Fiber Optic">Fiber Optic</span>
            <span class="cloud-tag tag-cramping" data-target="#achievements" title="Klik untuk menuju Publikasi Cramping Kabel">Cramping kabel</span>
            <span class="cloud-tag tag-rj45" data-target="#achievements" title="Klik untuk menuju Publikasi RJ-45">RJ-45</span>
            <span class="cloud-tag tag-spk" data-target="#achievements" title="Klik untuk menuju Publikasi Teknisi Komunitas">Teknisi Komunitas</span>
            <span class="cloud-tag tag-website" data-target="#projects" title="Klik untuk menuju Proyek Telegram Bot API">Telegram Bot API</span>
            <span class="cloud-tag tag-ai" data-target="#projects" title="Klik untuk menuju Proyek UI/UX Mobile PASS">UI/UX Mobile</span>
            <span class="cloud-tag tag-classif" data-target="#experience" title="Klik untuk menuju Pengalaman ODC & ODP PLN Icon Plus">ODC & ODP</span>
            <span class="cloud-tag tag-android" data-target="#experience" title="Klik untuk menuju Pengalaman Cisco Router & GPON">Cisco & GPON</span>
            <span class="cloud-tag tag-bigdata" data-target="#skills" title="Klik untuk menuju Skill Python">Python</span>
            <span class="cloud-tag tag-id" data-target="#achievements" title="Klik untuk menuju Sertifikasi BNSP">BNSP Sertifikasi</span>
            <span class="cloud-tag tag-telkom" data-target="#experience" title="Klik untuk menuju Pengalaman PT Telkom Akses">Telkom Akses</span>
            <span class="cloud-tag tag-pln" data-target="#experience" title="Klik untuk menuju Pengalaman PT PLN Icon Plus">PLN Icon Plus</span>
            <span class="cloud-tag tag-s1" data-target="#education" title="Klik untuk menuju Pendidikan S1 Undira">S1 Teknik Informatika</span>
            <span class="cloud-tag tag-smk" data-target="#education" title="Klik untuk menuju Pendidikan SMK Telkom Jakarta">SMK Telkom Jakarta</span>
            <span class="cloud-tag tag-himti" data-target="#education" title="Klik untuk menuju Pengalaman Wakil Ketua HIMTI">Wakil Ketua HIMTI</span>
            <span class="cloud-tag tag-abdimas" data-target="#achievements" title="Klik untuk menuju Jurnal Pengabdian Masyarakat">Pengabdian Masyarakat</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Skills Matrix Section -->
  <section id="skills" class="section">
    <div class="container">
      <div class="section-title">
        <span class="sub-tag" data-i18n="sub_competency">Kompetensi & Tools</span>
        <h2><span data-i18n="skills_title">Keahlian</span> <span class="gradient-text">& Skills</span></h2>
        <p data-i18n="skills_subtitle">Daftar lengkap keterampilan teknis, jaringan, software, dan soft skills yang dikuasai.</p>
      </div>

      <!-- Skill Category Filter Tabs -->
      <div class="skills-filter">
        <button class="filter-btn active" data-filter="all">
          <i class="fas fa-th"></i> <span data-i18n="filter_all">Semua Skill</span>
        </button>
        <button class="filter-btn" data-filter="web_dev">
          <i class="fas fa-code"></i> <span data-i18n="filter_web">Web & Dev</span>
        </button>
        <button class="filter-btn" data-filter="network">
          <i class="fas fa-network-wired"></i> <span data-i18n="filter_network">Jaringan & Fiber Optic</span>
        </button>
        <button class="filter-btn" data-filter="tools">
          <i class="fas fa-toolbox"></i> <span data-i18n="filter_tools">Software & Tools</span>
        </button>
        <button class="filter-btn" data-filter="management">
          <i class="fas fa-users-gear"></i> <span data-i18n="filter_mgmt">Management & Soft Skills</span>
        </button>
      </div>

      <div class="skills-grid" style="display:grid; grid-template-columns:repeat(auto-fill, minmax(250px, 1fr)); gap:1.25rem;">
        <?php foreach ($skills as $catKey => $catData): ?>
          <?php foreach ($catData['items'] as $item): ?>
            <div class="skill-card" data-category="<?= $catKey ?>" style="position:relative; background:var(--bg-card); border:1px solid var(--border-color); border-radius:14px; padding:1.2rem; transition:all 0.3s ease; display:flex; flex-direction:column; justify-content:space-between; gap:0.75rem;">
              <div style="display:flex; align-items:center; gap:0.85rem;">
                <div style="width:44px; height:44px; border-radius:10px; background:rgba(16,185,129,0.1); border:1px solid var(--border-color); display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                  <?php if (!empty($item['devicon'])): ?>
                    <i class="<?= esc($item['devicon']) ?>" style="font-size:1.65rem;"></i>
                  <?php elseif (!empty($item['fa'])): ?>
                    <i class="fas <?= esc($item['fa']) ?>" style="font-size:1.3rem; color:<?= esc($item['color'] ?? 'var(--primary-cyan)') ?>;"></i>
                  <?php else: ?>
                    <i class="fas <?= esc($catData['icon']) ?>" style="font-size:1.3rem; color:var(--primary-cyan);"></i>
                  <?php endif; ?>
                </div>
                <div>
                  <h4 style="font-size:0.95rem; color:var(--text-main); font-weight:700; margin:0; line-height:1.3;"><?= esc($item['name']) ?></h4>
                  <span style="font-size:0.75rem; color:var(--text-muted); display:inline-block; margin-top:0.2rem;"><?= esc($catData['category']) ?></span>
                </div>
              </div>
              
              <?php if (!empty($item['level'])): ?>
                <div style="display:flex; justify-content:space-between; align-items:center; border-top:1px dashed var(--border-color); padding-top:0.6rem; margin-top:0.2rem;">
                  <span style="font-size:0.72rem; color:var(--text-dim); text-transform:uppercase; letter-spacing:0.5px; font-weight:600;">Level / Mastery</span>
                  <span style="font-size:0.75rem; font-weight:700; color:var(--primary-cyan); background:rgba(52,211,153,0.12); padding:0.15rem 0.55rem; border-radius:50px; border:1px solid var(--border-color);">
                    <?= esc($item['level']) ?>
                  </span>
                </div>
              <?php endif; ?>
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

      <!-- Interactive Carousel Toolbar & Drag Control -->
      <div class="carousel-toolbar">
        <div style="display:flex; align-items:center; gap:0.5rem;">
          <button id="viewGridBtn" onclick="setProjectsView('grid')" class="nav-btn-toggle" title="Tampilan Grid Standard" style="padding:0.35rem 0.75rem; font-size:0.78rem;">
            <i class="fas fa-th-large"></i> Grid
          </button>
          <button id="viewCarouselBtn" onclick="setProjectsView('carousel')" class="nav-btn-toggle" title="Tampilan Carousel Geser (Swipe)" style="padding:0.35rem 0.75rem; font-size:0.78rem;">
            <i class="fas fa-sliders-h"></i> Carousel Geser (Swipe)
          </button>
        </div>
        <div id="carouselNavBtns" style="display:flex; align-items:center; gap:0.4rem;">
          <button onclick="slideProjects('left')" class="carousel-nav-btn" title="Geser Kiri"><i class="fas fa-chevron-left"></i></button>
          <button onclick="slideProjects('right')" class="carousel-nav-btn" title="Geser Kanan"><i class="fas fa-chevron-right"></i></button>
        </div>
      </div>

      <div class="projects-grid-wrapper">
        <div id="projectsContainer" class="projects-grid">
          <?php foreach ($featured_projects as $proj): ?>
            <div class="project-card tilt-card" data-project-id="<?= $proj['id'] ?>">
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
        <span class="sub-tag" data-i18n="edu_tag">Pendidikan & Organisasi</span>
        <h2><span data-i18n="edu_title_prefix">Latar Belakang</span> <span class="gradient-text" data-i18n="edu_title_suffix">& Kepemimpinan</span></h2>
        <p>Riwayat studi formal dan aktivitas organisasi kemahasiswaan serta kepemudaan.</p>
      </div>

      <div class="education-org-grid">
        <!-- Formal Education -->
        <div>
          <h3 style="font-size:1.4rem; margin-bottom:1.5rem; display:flex; align-items:center; gap:0.75rem; color:var(--text-main);">
            <i class="fas fa-graduation-cap" style="color:var(--primary-cyan);"></i> <span data-i18n="edu_h3_1">Pendidikan Formal</span>
          </h3>
          <div class="timeline" style="max-width:100%;">
            <?php foreach ($education as $edu): ?>
              <div class="timeline-item">
                <div class="timeline-dot" style="border-color:var(--primary-emerald);"></div>
                <div class="timeline-content">
                  <div class="timeline-header">
                    <span class="timeline-company" style="color:var(--text-main); font-weight:700;"><?= esc($edu['institution']) ?></span>
                    <span class="timeline-period"><?= esc($edu['period']) ?></span>
                  </div>
                  <h4 style="color:var(--primary-cyan); font-size:1.05rem; margin-bottom:0.3rem;"><?= esc($edu['degree']) ?></h4>
                  <div style="display:inline-block; padding:0.2rem 0.6rem; background:rgba(16,185,129,0.15); color:var(--primary-emerald); border-radius:4px; font-size:0.82rem; font-weight:700; margin-bottom:0.8rem;">
                    <?= esc($edu['score']) ?>
                  </div>
                  <ul class="timeline-tasks">
                    <?php foreach ($edu['details'] as $det): ?>
                      <li style="margin-bottom:0.75rem;">
                        <span><?= esc($det) ?></span>
                        <?php if (strpos($det, 'Pengabdian Masyarakat') !== false && !empty($edu['youtube_embed_id'])): ?>
                          <div class="youtube-embed-wrapper" style="margin-top:0.75rem; border-radius:12px; overflow:hidden; border:1px solid rgba(239,68,68,0.4); background:rgba(7,15,11,0.95); box-shadow:0 8px 30px rgba(0,0,0,0.6);">
                            <div style="padding:0.5rem 0.85rem; background:rgba(239,68,68,0.12); border-bottom:1px solid rgba(239,68,68,0.25); display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; gap:0.5rem;">
                              <span style="font-size:0.82rem; color:#fca5a5; font-weight:700; display:flex; align-items:center; gap:0.4rem;">
                                <i class="fab fa-youtube" style="color:#ef4444; font-size:1.1rem;"></i> Dokumentasi PKM-PM Karang Taruna Unit 04
                              </span>
                              <a href="<?= esc($edu['youtube_url']) ?>" target="_blank" style="font-size:0.75rem; color:var(--primary-cyan); text-decoration:none; font-weight:600;">
                                <i class="fas fa-external-link-alt"></i> Buka YouTube
                              </a>
                            </div>
                            <div style="position:relative; padding-bottom:56.25%; height:0; overflow:hidden;">
                              <iframe src="https://www.youtube.com/embed/<?= esc($edu['youtube_embed_id']) ?>" title="Video Dokumentasi PKM-PM Karang Taruna Unit 04" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="position:absolute; top:0; left:0; width:100%; height:100%; border:0;"></iframe>
                            </div>
                          </div>
                        <?php endif; ?>
                      </li>
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
                  <h4 style="color:var(--text-main); font-size:1rem; margin-bottom:0.5rem;"><?= esc($org['role']) ?></h4>
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
        <span class="sub-tag" data-i18n="ach_tag">Rekam Jejak & Karya</span>
        <h2><span data-i18n="ach_title_prefix">Prestasi</span> <span class="gradient-text" data-i18n="ach_title_suffix">& Publikasi Jurnal</span></h2>
        <p data-i18n="ach_subtitle">Publikasi jurnal ilmiah pengabdian masyarakat, sertifikasi kompetensi BNSP, dan pelatihan resmi industri.</p>
      </div>

      <!-- Featured Scientific Publication Card -->
      <?php if (!empty($publications)): ?>
        <div style="margin-bottom: 2.5rem;">
          <h3 style="font-size:1.3rem; margin-bottom:1.25rem; display:flex; align-items:center; gap:0.6rem; color:var(--text-main);">
            <i class="fas fa-book-open" style="color:var(--primary-cyan);"></i> <span data-i18n="pub_header">Publikasi Jurnal & Karya Ilmiah</span>
          </h3>
          <?php foreach ($publications as $pub): ?>
            <div class="publication-card" style="background: var(--bg-card); border: 1px solid var(--border-color); padding: 1.5rem; border-radius: var(--radius-lg); display:flex; flex-direction: column; gap: 1rem; box-shadow:var(--glass-shadow);">
              <div style="display:flex; justify-content:space-between; align-items:flex-start; gap:1rem; flex-wrap:wrap; width:100%;">
                <div>
                  <span class="achievement-tag" style="background:rgba(52, 211, 153, 0.15); color:var(--primary-cyan); font-weight:700; padding:0.25rem 0.75rem; border-radius:50px; font-size:0.78rem;">
                    <i class="fas fa-newspaper"></i> <?= esc($pub['type']) ?>
                  </span>
                  <h4 style="font-size:1.2rem; color:var(--text-main); margin-top:0.75rem; margin-bottom:0.4rem; line-height:1.4;">
                    <?= esc($pub['title']) ?>
                  </h4>
                  <p style="color:var(--text-muted); font-size:0.88rem; margin:0; line-height:1.5;">
                    <strong style="color:var(--primary-cyan);"><?= esc($pub['journal']) ?></strong> &bull; <?= esc($pub['volume']) ?>
                  </p>
                </div>
                <span style="font-size:0.82rem; color:var(--primary-cyan); font-weight:700; background:rgba(52, 211, 153, 0.12); padding:0.25rem 0.75rem; border-radius:6px; border:1px solid rgba(52, 211, 153, 0.25); font-family:var(--font-code); flex-shrink:0;">
                  <?= esc($pub['year']) ?>
                </span>
              </div>

              <div style="background:rgba(16, 185, 129, 0.05); border:1px solid var(--border-color); padding:1rem; border-radius:8px; font-size:0.88rem; color:var(--text-muted); line-height:1.6;">
                <p style="margin:0 0 0.5rem 0; color:var(--text-main);"><strong>Penulis:</strong> <?= esc($pub['authors']) ?> (<?= esc($pub['institution']) ?>)</p>
                <p style="margin:0 0 0.75rem 0;"><strong style="color:var(--text-main);">Abstrak:</strong> <?= esc($pub['abstract']) ?></p>
                <?php if (!empty($pub['keywords'])): ?>
                  <div style="display:flex; align-items:center; gap:0.5rem; flex-wrap:wrap; border-top:1px dashed var(--border-color); padding-top:0.65rem; margin-top:0.5rem;">
                    <strong style="color:var(--text-main); font-size:0.82rem;"><i class="fas fa-tags" style="color:var(--primary-cyan);"></i> Kata Kunci (Keywords):</strong>
                    <?php foreach ($pub['keywords'] as $kw): ?>
                      <span style="font-size:0.75rem; color:var(--primary-cyan); background:rgba(52, 211, 153, 0.12); border:1px solid rgba(52, 211, 153, 0.3); padding:0.15rem 0.55rem; border-radius:50px; font-weight:600;">
                        <?= esc($kw) ?>
                      </span>
                    <?php endforeach; ?>
                  </div>
                <?php endif; ?>
              </div>

              <div style="display:flex; gap:0.8rem; flex-wrap:wrap; align-items:center; margin-top:0.25rem;">
                <a href="<?= esc($pub['url']) ?>" target="_blank" class="nav-btn" style="padding:0.5rem 1.1rem; font-size:0.84rem;" data-i18n="btn_view_doi">
                  <i class="fas fa-external-link-alt"></i> Lihat Artikel Jurnal (DOI)
                </a>
                <a href="<?= esc($pub['pdf_url']) ?>" target="_blank" class="btn-secondary" style="padding:0.45rem 1rem; font-size:0.84rem;" data-i18n="btn_download_pdf">
                  <i class="fas fa-file-pdf" style="color:#ef4444;"></i> Download PDF Jurnal
                </a>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <div style="margin-bottom:1.5rem;">
        <h3 style="font-size:1.3rem; margin:0; display:flex; align-items:center; gap:0.6rem; color:var(--text-main);">
          <i class="fas fa-certificate" style="color:var(--primary-cyan);"></i> <span data-i18n="ach_header">Sertifikasi & Penghargaan Lainnya</span>
        </h3>
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
              <?php if (!empty($ach['pdf_file'])): ?>
                <a href="<?= base_url('assets/certificates/' . esc($ach['pdf_file'])) ?>" target="_blank" class="btn-secondary" style="display:inline-flex; align-items:center; gap:0.4rem; margin-top:0.6rem; padding:0.35rem 0.8rem; font-size:0.78rem; border-color:rgba(239,68,68,0.4); color:#ef4444; background:rgba(239,68,68,0.12);">
                  <i class="fas fa-file-pdf" style="color:#ef4444; font-size:0.9rem;"></i> Buka PDF Sertifikat
                </a>
              <?php elseif (!empty($ach['url'])): ?>
                <a href="<?= esc($ach['url']) ?>" target="_blank" class="btn-secondary" style="display:inline-flex; align-items:center; gap:0.4rem; margin-top:0.6rem; padding:0.35rem 0.8rem; font-size:0.78rem;">
                  <i class="fas fa-external-link-alt" style="color:var(--primary-cyan);"></i> Lihat Tautan
                </a>
              <?php endif; ?>
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
        <span class="sub-tag" data-i18n="contact_tag">Mari Berkomunikasi</span>
        <h2><span data-i18n="contact_title_prefix">Hubungi</span> <span class="gradient-text" data-i18n="contact_title_suffix">Saya</span></h2>
        <p data-i18n="contact_subtitle">Terbuka untuk diskusi proyek web development, konsultasi jaringan fiber optic, maupun peluang karir.</p>
      </div>

      <div class="contact-grid">
        <div class="contact-info-card">
          <h3 style="font-size:1.5rem; margin-bottom:1.5rem;" data-i18n="contact_info_title">Informasi Kontak</h3>

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
        </div>

        <div class="contact-form-card">
          <h3 style="font-size:1.5rem; margin-bottom:1.5rem;" data-i18n="contact_send_title">Kirim Pesan</h3>

          <div id="formResponse" style="display:none; margin-bottom:1.25rem;"></div>

          <form id="portfolioContactForm" action="<?= base_url('contact/submit') ?>" method="POST">
            <?= csrf_field() ?>
            <div class="form-group">
              <label class="form-label" for="name" data-i18n="label_name">Nama Lengkap</label>
              <input type="text" id="name" name="name" class="form-control" placeholder="Masukkan nama Anda" required>
            </div>

            <div class="form-group">
              <label class="form-label" for="email" data-i18n="label_email">Alamat Email</label>
              <input type="email" id="email" name="email" class="form-control" placeholder="nama@email.com" required>
            </div>

            <div class="form-group">
              <label class="form-label" for="subject" data-i18n="label_subject">Subjek Pesan</label>
              <input type="text" id="subject" name="subject" class="form-control" placeholder="Topik diskusi atau tawaran proyek" required>
            </div>

            <div class="form-group">
              <label class="form-label" for="message" data-i18n="label_message">Pesan Anda</label>
              <textarea id="message" name="message" class="form-control" rows="4" placeholder="Tuliskan rincian pesan atau tawaran kerja..." required></textarea>
            </div>

            <button type="submit" class="btn-primary" style="width:100%; justify-content:center; padding:0.9rem;">
              <i class="fas fa-paper-plane"></i> <span data-i18n="btn_send_message">Kirim Pesan Sekarang</span>
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
  <div id="imageViewerModal" class="modal-overlay" style="z-index:100000; padding:1rem;">
    <div style="position:relative; width:100%; height:100%; display:flex; flex-direction:column; align-items:center; justify-content:center;">
      <button class="modal-close" onclick="closeImageViewer()" aria-label="Tutup Tampilan Gambar" title="Tutup (ESC)" style="position:fixed; top:1.5rem; right:1.5rem; z-index:100005; width:48px; height:48px; font-size:1.4rem; background:rgba(7,15,11,0.95); border:2px solid var(--primary-cyan); color:var(--primary-cyan); box-shadow:0 0 25px rgba(0,0,0,0.8), 0 0 12px rgba(52,211,153,0.5);">
        <i class="fas fa-times"></i>
      </button>

      <div style="position:fixed; top:1.5rem; left:1.5rem; z-index:100005; display:flex; gap:0.75rem;">
        <button onclick="toggleZoomImage()" class="btn-primary" style="padding:0.55rem 1.2rem; font-size:0.85rem; border-radius:50px; box-shadow:0 4px 20px rgba(0,0,0,0.6);">
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

  <!-- Modern Interactive Footer -->
  <footer class="footer" style="background:var(--bg-dark); border-top:1px solid var(--border-color); padding-top:4rem; padding-bottom:2rem; position:relative; overflow:hidden;">
    <div class="container">
      <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(220px, 1fr)); gap:2.5rem; margin-bottom:3rem;">
        
        <!-- Col 1: About / Brand -->
        <div>
          <a href="#hero" class="logo" style="margin-bottom:1rem; display:inline-flex;">
            <span class="dot"></span> <span>STEVEN ADITYA PRATAMA</span>
          </a>
          <p style="color:var(--text-muted); font-size:0.88rem; line-height:1.6; margin-bottom:1.25rem;" data-i18n="footer_desc">
            Calon Lulusan S1 Teknik Informatika Universitas Dian Nusantara. Specialist Jointer Fiber Optik / FTTH, Manajemen Pergudangan Telkom Akses, &amp; Front-End Web Developer.
          </p>
          <div style="display:flex; gap:0.75rem;">
            <a href="https://www.linkedin.com/in/steven-aditya" target="_blank" class="social-icon" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://github.com/stevenbollm" target="_blank" class="social-icon" title="GitHub"><i class="fab fa-github"></i></a>
            <a href="mailto:<?= esc($profile['email']) ?>" class="social-icon" title="Email Direct"><i class="fas fa-envelope"></i></a>
            <a href="https://wa.me/6285810007432" target="_blank" class="social-icon" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
          </div>
        </div>

        <!-- Col 2: Navigation Links -->
        <div>
          <h4 style="font-size:1.05rem; color:var(--text-main); font-weight:700; margin-bottom:1.2rem; position:relative; padding-bottom:0.5rem;" data-i18n="footer_nav_title">
            Navigasi Pintar
            <span style="position:absolute; bottom:0; left:0; width:35px; height:2px; background:var(--primary-cyan); border-radius:2px;"></span>
          </h4>
          <ul style="list-style:none; padding:0; margin:0; display:flex; flex-direction:column; gap:0.6rem; font-size:0.88rem;">
            <li><a href="#hero" class="nav-link"><i class="fas fa-chevron-right" style="font-size:0.7rem; color:var(--primary-cyan);"></i> <span data-i18n="nav_home">Beranda</span></a></li>
            <li><a href="#about" class="nav-link"><i class="fas fa-chevron-right" style="font-size:0.7rem; color:var(--primary-cyan);"></i> <span data-i18n="nav_about">Tentang Saya</span></a></li>
            <li><a href="#skills" class="nav-link"><i class="fas fa-chevron-right" style="font-size:0.7rem; color:var(--primary-cyan);"></i> <span data-i18n="nav_skills">Keahlian &amp; Skills</span></a></li>
            <li><a href="#projects" class="nav-link"><i class="fas fa-chevron-right" style="font-size:0.7rem; color:var(--primary-cyan);"></i> <span data-i18n="nav_projects">Proyek Unggulan</span></a></li>
            <li><a href="#experience" class="nav-link"><i class="fas fa-chevron-right" style="font-size:0.7rem; color:var(--primary-cyan);"></i> <span data-i18n="nav_experience">Pengalaman</span></a></li>
            <li><a href="#achievements" class="nav-link"><i class="fas fa-chevron-right" style="font-size:0.7rem; color:var(--primary-cyan);"></i> <span data-i18n="nav_achievements">Prestasi</span></a></li>
          </ul>
        </div>

        <!-- Col 3: Contact Summary -->
        <div>
          <h4 style="font-size:1.05rem; color:var(--text-main); font-weight:700; margin-bottom:1.2rem; position:relative; padding-bottom:0.5rem;" data-i18n="footer_contact_title">
            Hubungi Langsung
            <span style="position:absolute; bottom:0; left:0; width:35px; height:2px; background:var(--primary-cyan); border-radius:2px;"></span>
          </h4>
          <div style="display:flex; flex-direction:column; gap:0.85rem; font-size:0.86rem; color:var(--text-muted); text-align:left;">
            <div style="display:flex; align-items:flex-start; gap:0.75rem; text-align:left;">
              <i class="fas fa-envelope" style="color:var(--primary-cyan); font-size:1rem; flex-shrink:0; margin-top:0.15rem;"></i>
              <a href="mailto:<?= esc($profile['email']) ?>" style="color:var(--text-muted); text-decoration:none; transition:color 0.2s; word-break:break-all;" onmouseover="this.style.color='var(--primary-cyan)'" onmouseout="this.style.color='var(--text-muted)'"><?= esc($profile['email']) ?></a>
            </div>
            <div style="display:flex; align-items:flex-start; gap:0.75rem; text-align:left;">
              <i class="fas fa-phone-alt" style="color:var(--primary-cyan); font-size:1rem; flex-shrink:0; margin-top:0.15rem;"></i>
              <a href="https://wa.me/6285810007432" target="_blank" style="color:var(--text-muted); text-decoration:none; transition:color 0.2s;" onmouseover="this.style.color='var(--primary-cyan)'" onmouseout="this.style.color='var(--text-muted)'"><?= esc($profile['phone']) ?></a>
            </div>
            <div style="display:flex; align-items:flex-start; gap:0.75rem; text-align:left;">
              <i class="fas fa-map-marker-alt" style="color:var(--primary-cyan); font-size:1rem; flex-shrink:0; margin-top:0.2rem;"></i>
              <span style="text-align:left; line-height:1.55; display:inline-block; flex:1;"><?= esc($profile['address']) ?></span>
            </div>
          </div>
        </div>

        <!-- Col 4: Visitor Analytics -->
        <div>
          <h4 style="font-size:1.05rem; color:var(--text-main); font-weight:700; margin-bottom:1.2rem; position:relative; padding-bottom:0.5rem;" data-i18n="footer_stats_title">
            Statistik Pengunjung
            <span style="position:absolute; bottom:0; left:0; width:35px; height:2px; background:var(--primary-cyan); border-radius:2px;"></span>
          </h4>
          <div class="visitor-card" style="padding:1rem; border-radius:14px; margin-top:0; width:100%;">
            <div class="flag-counter-box" style="margin-bottom:0.85rem; padding:0.4rem; background:rgba(0,0,0,0.25); border-radius:10px; border:1px solid var(--border-color); display:flex; justify-content:center; overflow:hidden;">
              <a href="https://info.flagcounter.com/Glxg" target="_blank" title="Visitor Flag Counter" style="display:block; width:100%; text-align:center;">
                <img src="https://s11.flagcounter.com/count2/Glxg/bg_0D1B13/txt_ECFDF5/border_10B981/columns_2/maxflags_12/viewers_0/labels_1/pageviews_1/timeline_0/" alt="Flag Counter" border="0" style="width:100%; min-width:180px; max-width:280px; height:auto; display:inline-block; border-radius:6px;">
              </a>
            </div>
            <div class="visitor-badges" style="display:flex; gap:0.5rem; justify-content:center; flex-wrap:wrap;">
              <div class="visitor-badge-item" style="padding:0.4rem 0.75rem; font-size:0.85rem; font-weight:700; display:flex; align-items:center; gap:0.4rem;">
                <i class="fas fa-eye" style="color:var(--primary-cyan);"></i> <span><strong id="totalPageViews" style="color:var(--primary-cyan); font-size:0.95rem;">-</strong> Views</span>
              </div>
              <div class="visitor-badge-item" style="padding:0.4rem 0.75rem; font-size:0.85rem; font-weight:700; display:flex; align-items:center; gap:0.4rem;">
                <i class="fas fa-user-check" style="color:var(--primary-cyan);"></i> <span><strong id="uniqueVisitors" style="color:var(--primary-cyan); font-size:0.95rem;">-</strong> Unique</span>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Bottom Bar -->
      <div style="border-top:1px solid var(--border-color); padding-top:1.5rem; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:1rem; font-size:0.84rem; color:var(--text-dim);">
        <p style="margin:0;">&copy; <?= date('Y') ?> <strong><?= esc($profile['name']) ?></strong>. All rights reserved. | CodeIgniter 4 Framework</p>
        <div style="display:flex; align-items:center; gap:0.5rem;">
          <span style="display:inline-flex; align-items:center; gap:0.4rem; color:var(--primary-cyan); font-weight:600;">
            <i class="fas fa-circle" style="font-size:0.5rem;"></i> <span data-i18n="footer_system_live">System Live &amp; Operational</span>
          </span>
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

  <!-- Matrix, Fiber Laser & HIMTI Gold Animation Overlay Canvases -->
  <canvas id="matrixCanvas" class="matrix-canvas-overlay"></canvas>
  <canvas id="fiberLaserCanvas" class="fiber-laser-overlay"></canvas>
  <canvas id="himtiCanvas" class="himti-gold-overlay"></canvas>

  <!-- BNSP Holographic Verified Shield Seal Stamp Overlay -->
  <div id="bnspSealOverlay" class="bnsp-seal-overlay">
    <div class="bnsp-seal-card">
      <div class="bnsp-seal-icon"><i class="fas fa-certificate"></i></div>
      <div class="bnsp-seal-title">BNSP VERIFIED JOINTER</div>
      <div class="bnsp-seal-sub">Sertifikasi Profesi Nasional Telekomunikasi Kabel</div>
      <div class="bnsp-seal-badge">LICENSED & VERIFIED</div>
    </div>
  </div>

  <!-- Easter Egg Hologram Toast Notification -->
  <div id="easterEggToast" class="easter-egg-toast"></div>

  <!-- Interactive Terminal CLI Modal (Ctrl + K / Terminal Mode) -->
  <div id="searchModal" class="search-modal-overlay" onclick="if(event.target === this) closeSearchModal()">
    <div class="terminal-modal-card">
      <div class="terminal-header">
        <div class="terminal-dots">
          <span class="dot-red" onclick="closeSearchModal()" title="Close Terminal"></span>
          <span class="dot-yellow" title="Minimize"></span>
          <span class="dot-green" title="Maximize"></span>
        </div>
        <div class="terminal-title">
          <i class="fas fa-terminal" style="color:#34d399; margin-right:0.4rem;"></i> Steven CLI v2.5 — Network & Dev Terminal
        </div>
        <span class="search-kbd-badge" onclick="closeSearchModal()" style="cursor:pointer;">ESC</span>
      </div>

      <div id="terminalBody" class="terminal-body" onclick="document.getElementById('cliInput').focus()">
        <div class="terminal-welcome">
          <pre class="terminal-ascii">
 ____  _____ _____ __   __ _____ _   _ 
/ ___||_   _| ____|\ \ / / ____| \ | |
\___ \  | | |  _|   \ V /|  _| |  \| |
 ___) | | | | |___   \ / | |___| |\  |
|____/  |_| |_____|   V  |_____|_| \_|
          </pre>
          <div style="color:#34d399; font-weight:700; margin-bottom:0.4rem;">
            [SYSTEM ONLINE] Steven Aditya Pratama Interactive Terminal
          </div>
          <div style="color:var(--text-muted); font-size:0.82rem; margin-bottom:0.75rem;">
            Ketik <span style="color:#10b981; font-weight:600;">help</span> untuk daftar perintah standar, atau ketik kode rahasia (<span style="color:#34d399;">matrix</span>, <span style="color:#34d399;">slytherin</span>, <span style="color:#34d399;">fiber</span>, <span style="color:#34d399;">php</span>, <span style="color:#34d399;">himti</span>, <span style="color:#34d399;">bnsp</span>, <span style="color:#34d399;">sudo</span>).
          </div>
        </div>

        <div id="cliOutput" class="cli-output"></div>

        <div class="cli-input-line">
          <span class="cli-prompt">steven@web-portofolio:~$</span>
          <input type="text" id="cliInput" class="cli-input" autofocus autocomplete="off" spellcheck="false" placeholder="Ketik perintah (contoh: help, skills, matrix)..." onkeydown="handleCliKeyDown(event)">
        </div>
      </div>
    </div>
  </div>

  <!-- Floating Scroll to Top Button -->
  <button id="backToTopBtn" onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="back-to-top-btn" title="Kembali ke Atas">
    <i class="fas fa-arrow-up"></i>
  </button>

  <!-- Floating AI Steven Assistant Chatbot Widget (Pojok Kanan Bawah) -->
  <div id="aiChatbotWidget" class="ai-chatbot-wrapper">
    <!-- Chatbot Dialog Window -->
    <div id="aiChatWindow" class="ai-chat-window">
      <div class="ai-chat-header">
        <div style="display:flex; align-items:center; gap:0.6rem;">
          <div class="ai-avatar-badge">
            <i class="fas fa-robot" style="color:#10b981; font-size:1.1rem;"></i>
          </div>
          <div>
            <div style="font-weight:700; font-size:0.92rem; color:#ffffff;">AI Steven Assistant</div>
            <div style="font-size:0.72rem; color:#34d399; display:flex; align-items:center; gap:0.3rem;">
              <span style="width:6px; height:6px; background:#10b981; border-radius:50%; display:inline-block;"></span> Online & Ready
            </div>
          </div>
        </div>
        <button onclick="toggleAiChatbot()" class="ai-chat-close-btn" title="Tutup Chat"><i class="fas fa-times"></i></button>
      </div>

      <div id="aiChatMessages" class="ai-chat-messages">
        <div class="chat-msg bot-msg">
          Halo! 👋 Saya <strong>AI Steven Assistant</strong> (Kloning Digital Steven Aditya Pratama). 
          Ada yang ingin Anda ketahui tentang pengalaman Fiber Optic, CodeIgniter 4, Sertifikasi BNSP, atau proyek yang dikerjakan Steven?
        </div>
      </div>

      <!-- Quick Action Query Chips -->
      <div class="ai-chat-chips">
        <button onclick="sendQuickAiQuery('Pengalaman Telkom Akses & PLN Icon Plus')">🏢 Pengalaman Kerja</button>
        <button onclick="sendQuickAiQuery('Sertifikasi Jointer & Cisco')">📜 Sertifikasi BNSP</button>
        <button onclick="sendQuickAiQuery('Keahlian Fiber Optic & Web')">⚡ Keahlian Utama</button>
        <button onclick="sendQuickAiQuery('Kontak & Nomor WhatsApp Steven')">📲 Kontak Direct</button>
      </div>

      <div class="ai-chat-input-area">
        <input type="text" id="aiChatInput" class="ai-chat-input" placeholder="Tanyakan sesuatu tentang Steven..." onkeydown="if(event.key==='Enter') sendAiChatMessage()">
        <button onclick="sendAiChatMessage()" class="ai-chat-send-btn"><i class="fas fa-paper-plane"></i></button>
      </div>
    </div>

    <!-- Floating Toggle Button -->
    <button id="aiChatToggleBtn" onclick="toggleAiChatbot()" class="ai-chat-toggle-btn" title="Tanya AI Steven Assistant">
      <i class="fas fa-robot"></i>
      <span class="ai-pulse-ring"></span>
    </button>
  </div>

  <script src="<?= base_url('assets/js/main.js?v=3.9') ?>"></script>
</body>
</html>
