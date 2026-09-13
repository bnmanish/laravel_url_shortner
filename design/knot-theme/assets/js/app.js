// Knot theme — shared interactions
document.addEventListener('DOMContentLoaded', function () {

  // Navbar scroll effect
  var navbar = document.querySelector('.knot-nav');
  if (navbar) {
    window.addEventListener('scroll', function () {
      if (window.scrollY > 10) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });
  }

  // Intersection Observer for scroll animations
  var observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  };

  var observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('animate-in');
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);

  document.querySelectorAll('.stagger-item, .animate-in').forEach(function (el) {
    if (!el.classList.contains('animate-in')) {
      observer.observe(el);
    }
  });

  // Fake "shorten" demo on the marketing pages
  var demoForm = document.getElementById('demoShortenForm');
  if (demoForm) {
    demoForm.addEventListener('submit', function (e) {
      e.preventDefault();
      var input = document.getElementById('demoShortenInput');
      var result = document.getElementById('demoShortenResult');
      if (!input.value.trim()) { input.focus(); return; }
      var slug = Math.random().toString(36).substring(2, 7);
      result.querySelector('.js-short-url').textContent = 'knot.to/' + slug;
      result.classList.remove('d-none');
      result.style.animation = 'scaleIn 0.3s ease forwards';
    });
  }

  // Fake "generate QR" demo
  var demoQrForm = document.getElementById('demoQrForm');
  if (demoQrForm) {
    demoQrForm.addEventListener('submit', function (e) {
      e.preventDefault();
      var input = document.getElementById('demoQrInput');
      var result = document.getElementById('demoQrResult');
      if (!input.value.trim()) { input.focus(); return; }
      var slug = Math.random().toString(36).substring(2, 7);
      result.querySelector('.js-qr-url').textContent = 'knot.to/qr-' + slug;
      result.classList.remove('d-none');
      result.style.animation = 'scaleIn 0.3s ease forwards';
    });
  }

  // Copy-to-clipboard buttons (data-copy-text attribute)
  document.querySelectorAll('[data-copy-text]').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var text = btn.getAttribute('data-copy-text');
      if (navigator.clipboard && navigator.clipboard.writeText(text)) {
        navigator.clipboard.writeText(text).then(function () {
          showToast('Copied to clipboard');
        });
      }
      var original = btn.innerHTML;
      btn.textContent = 'Copied';
      btn.classList.add('btn-rope');
      setTimeout(function () { btn.innerHTML = original; btn.classList.remove('btn-rope'); }, 1400);
    });
  });

  // Dashboard sidebar toggle (mobile)
  var sidebarToggle = document.getElementById('sidebarToggle');
  var sidebar = document.getElementById('dashSidebar');
  if (sidebarToggle && sidebar) {
    sidebarToggle.addEventListener('click', function () {
      sidebar.classList.toggle('is-open');
    });
  }

  // Pricing period toggle (monthly / annual)
  var periodToggle = document.getElementById('pricePeriodToggle');
  if (periodToggle) {
    periodToggle.addEventListener('change', function () {
      var isAnnual = periodToggle.checked;
      document.querySelectorAll('[data-monthly]').forEach(function (el) {
        el.textContent = isAnnual ? el.getAttribute('data-annual') : el.getAttribute('data-monthly');
      });
      document.querySelectorAll('.js-period-label').forEach(function (el) {
        el.textContent = isAnnual ? '/mo, billed yearly' : '/month';
      });
    });
  }

  // Active nav link handling
  document.querySelectorAll('.dash-nav-link').forEach(function (link) {
    link.addEventListener('click', function () {
      document.querySelectorAll('.dash-nav-link').forEach(function (l) {
        l.classList.remove('active');
      });
      this.classList.add('active');
    });
  });

  // Bar chart hover effects
  document.querySelectorAll('.bar-chart .bar').forEach(function (bar) {
    bar.addEventListener('mouseenter', function () {
      this.style.transform = 'scaleY(1.05)';
      this.style.transformOrigin = 'bottom';
    });
    bar.addEventListener('mouseleave', function () {
      this.style.transform = 'scaleY(1)';
    });
  });
});

// Toast notification helper
function showToast(message) {
  var container = document.createElement('div');
  container.className = 'toast-container';
  var toast = document.createElement('div');
  toast.className = 'toast';
  toast.innerHTML = '<span>&#10003;</span> ' + message;
  container.appendChild(toast);
  document.body.appendChild(container);
  setTimeout(function () {
    toast.classList.add('toast-out');
    setTimeout(function () { container.remove(); }, 300);
  }, 2000);
}
