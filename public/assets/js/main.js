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

});
