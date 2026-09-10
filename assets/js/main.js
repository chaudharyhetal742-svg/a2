/* ==========================================================================
   HOROLOGYCRAFT - JAVASCRIPT MASTER INTERACTIVITY
   ========================================================================== */

document.addEventListener('DOMContentLoaded', () => {
  // 1. Reading Progress Bar (for articles)
  const progressBar = document.querySelector('.reading-progress-bar');
  if (progressBar) {
    window.addEventListener('scroll', () => {
      const totalHeight = document.documentElement.scrollHeight - window.innerHeight;
      if (totalHeight > 0) {
        const progress = (window.scrollY / totalHeight) * 100;
        progressBar.style.width = Math.min(100, Math.max(0, progress)) + '%';
      }
    });
  }

  // 2. Mobile Drawer Navigation Toggle
  const mobileToggle = document.querySelector('.mobile-toggle');
  const drawerClose = document.querySelector('.drawer-close');
  const drawerOverlay = document.querySelector('.mobile-drawer-overlay');

  function openDrawer() {
    document.body.classList.add('mobile-drawer-open');
    document.body.style.overflow = 'hidden';
  }

  function closeDrawer() {
    document.body.classList.remove('mobile-drawer-open');
    document.body.style.overflow = '';
  }

  if (mobileToggle) {
    mobileToggle.addEventListener('click', openDrawer);
  }
  if (drawerClose) {
    drawerClose.addEventListener('click', closeDrawer);
  }
  if (drawerOverlay) {
    drawerOverlay.addEventListener('click', closeDrawer);
  }

  // 3. Technical Specifications Accordion
  const accordionHeaders = document.querySelectorAll('.accordion-header');
  accordionHeaders.forEach(header => {
    header.addEventListener('click', () => {
      const item = header.closest('.accordion-item');
      const isOpen = item.classList.contains('open');
      
      // Close peers if desired
      document.querySelectorAll('.accordion-item').forEach(other => {
        if (other !== item) other.classList.remove('open');
      });

      if (isOpen) {
        item.classList.remove('open');
      } else {
        item.classList.add('open');
      }
    });
  });

  // 4. Live Search Modal
  const searchToggle = document.querySelector('.search-toggle-btn');
  const searchModal = document.querySelector('.search-modal');
  const searchClose = document.querySelector('.search-close-btn');
  const searchInput = document.querySelector('.search-input');
  const searchResults = document.querySelector('.search-results-list');

  const siteArticles = [
    { title: "Gravitational Compensation: The Physics and Geometry of Tourbillon Cages", url: "blog/tourbillon-gravitational-compensation-and-cage-inertia.html", snippet: "Thermodynamics of Breguet balance springs, poise errors, and multi-axis tourbillon carriage mechanics." },
    { title: "Monocrystalline Silicon Hairsprings Versus Nivarox Isochronism", url: "blog/monocrystalline-silicon-hairsprings-versus-nivarox-isochronism.html", snippet: "Paramagnetic alloys, DRIE plasma etching, thermal coefficients, and magnetic immunity." },
    { title: "Hand Anglage, Black Mirror Polish, and Haute Horlogerie Finishing", url: "blog/hand-anglage-black-mirror-polish-and-haute-horlogerie-finishing.html", snippet: "Traditional gentian wood laps, diamond paste burnishing, and inward angle beveling." },
    { title: "Mechanical Memory: 400-Year Perpetual Calendar Gear Train Kinematics", url: "blog/mechanical-memory-400-year-perpetual-calendar-kinematics.html", snippet: "Leap year satellites, 48-month program wheels, and grand complication indexing." },
    { title: "Chronograph Coupling Dynamics: Column Wheel Versus Lateral Clutch Mechanics", url: "blog/chronograph-coupling-column-wheel-versus-lateral-clutch.html", snippet: "Kinematic engagement, oscillating pinion teeth meshing, and split-second reset hammers." },
    { title: "Archival Horological Conservation: Dial Enamel Healing and Historical Movements", url: "blog/archival-horological-conservation-and-dial-restoration.html", snippet: "Museum-grade clockwork conservation, synthetic lubricant neutralization, and pivot burnishing." },
    { title: "The Tourbillon Monolith Atelier", url: "index.php#tourbillon", snippet: "Flagship 60-second flying tourbillon in Grade 5 Titanium." },
    { title: "The Chrono-Regulator Reserve", url: "index.php#timepieces", snippet: "Split-seconds column-wheel chronograph with 72-hour power reserve." }
  ];

  if (searchToggle && searchModal) {
    searchToggle.addEventListener('click', () => {
      searchModal.classList.add('active');
      if (searchInput) searchInput.focus();
    });
  }

  if (searchClose && searchModal) {
    searchClose.addEventListener('click', () => {
      searchModal.classList.remove('active');
    });
  }

  if (searchModal) {
    searchModal.addEventListener('click', (e) => {
      if (e.target === searchModal) searchModal.classList.remove('active');
    });
  }

  if (searchInput && searchResults) {
    searchInput.addEventListener('input', (e) => {
      const q = e.target.value.toLowerCase().trim();
      if (!q) {
        searchResults.innerHTML = '<div style="padding:16px 20px;color:var(--text-muted);font-size:0.85rem;">Type a complication, calibre, or topic to search...</div>';
        return;
      }
      const matches = siteArticles.filter(a => a.title.toLowerCase().includes(q) || a.snippet.toLowerCase().includes(q));
      if (matches.length === 0) {
        searchResults.innerHTML = '<div style="padding:16px 20px;color:var(--text-muted);font-size:0.85rem;">No horological results found for "' + q + '"</div>';
      } else {
        searchResults.innerHTML = matches.map(m => `
          <a href="${m.url}" class="search-result-item">
            <div class="search-result-title">${m.title}</div>
            <div class="search-result-snippet">${m.snippet}</div>
          </a>
        `).join('');
      }
    });
  }
});
