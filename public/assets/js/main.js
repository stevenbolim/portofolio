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
  if (themeIcon) {
    if (theme === 'light') {
      themeIcon.className = 'fas fa-sun';
      themeIcon.style.color = '#f59e0b';
    } else {
      themeIcon.className = 'fas fa-moon';
      themeIcon.style.color = '#34d399';
    }
  }
}

// Global i18n Language Switcher
const i18n = {
  id: {
    nav_home: "Beranda",
    nav_about: "Tentang Saya",
    nav_skills: "Keahlian & Skills",
    nav_projects: "Proyek Unggulan",
    nav_experience: "Pengalaman",
    nav_education: "Pendidikan",
    nav_achievements: "Prestasi",
    nav_contact: "Kontak",
    sub_competency: "Kompetensi & Tools",
    skills_title: "Keahlian",
    skills_subtitle: "Daftar lengkap keterampilan teknis, jaringan, software, dan soft skills yang dikuasai.",
    filter_all: "Semua Skill",
    filter_web: "Web & Dev",
    filter_network: "Jaringan & Fiber Optic",
    filter_tools: "Software & Tools",
    filter_mgmt: "Manajemen & Soft Skills",
    contact_title: "Hubungi",
    contact_subtitle: "Terbuka untuk diskusi proyek web development, konsultasi jaringan fiber optic, maupun peluang karir."
  },
  en: {
    nav_home: "Home",
    nav_about: "About Me",
    nav_skills: "Skills & Expertise",
    nav_projects: "Featured Projects",
    nav_experience: "Experience",
    nav_education: "Education",
    nav_achievements: "Achievements",
    nav_contact: "Contact",
    sub_competency: "Competencies & Tools",
    skills_title: "Skills",
    skills_subtitle: "Comprehensive technical skills, network engineering, software, and soft skills.",
    filter_all: "All Skills",
    filter_web: "Web & Dev",
    filter_network: "Network & Fiber Optics",
    filter_tools: "Software & Tools",
    filter_mgmt: "Management & Soft Skills",
    contact_title: "Contact",
    contact_subtitle: "Open for web development discussions, fiber optic network consultation, or career opportunities."
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
    langLabel.innerHTML = `<i class="fas fa-globe"></i> ${lang.toUpperCase()}`;
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
