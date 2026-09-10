<?php
/**
 * HorologyCraft | Haute Horlogerie & Master Watchmaking Atelier
 * Main Homepage Controller & View
 *
 * @package HorologyCraft
 * @version 2.1.0
 */

declare(strict_types=1);

$siteTitle = "HorologyCraft | Haute Horlogerie & Atelier Master Watchmaking";
$metaDescription = "HorologyCraft engineers bespoke mechanical timepieces, 60-second flying tourbillons, hand-beveled anglage bridges, and chronometric masterworks in Le Locle, Switzerland.";
$canonicalUrl = "https://horologycraft.com/";
$currentYear = (int)date('Y');
$contactEmail = "contact@horologycraft.com";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($siteTitle) ?></title>
  <meta name="description" content="<?= htmlspecialchars($metaDescription) ?>">
  <link rel="canonical" href="<?= htmlspecialchars($canonicalUrl) ?>">
  <link rel="stylesheet" href="assets/css/style.css?v=2.1">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700;800&family=Playfair+Display:ital,wght@0,500;0,700;1,400&family=Plus+Jakarta+Sans:wght@400;500;600;700&family=JetBrains+Mono:wght@500;600&display=swap" rel="stylesheet">
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-0LY0HY7L01');
</script>
</head>
<body>

<header class="site-header">
  <div class="container header-inner">
    <a href="index.php" class="site-logo">
      <span class="logo-main">HorologyCraft</span>
      <span class="logo-tagline">Haute Horlogerie & Atelier</span>
    </a>
    <nav class="desktop-nav">
      <a href="index.php" class="nav-link active">Home</a>
      <a href="about.html" class="nav-link ">Atelier</a>
      <a href="index.php#timepieces" class="nav-link">Timepieces</a>
      <a href="index.php#movements" class="nav-link">Movements</a>
      <a href="blog/index.html" class="nav-link ">Editorial</a>
      <a href="contact.html" class="nav-link ">Concierge</a>
    </nav>
    <div class="header-actions">
      <button type="button" class="search-toggle-btn" aria-label="Search Horology Archive">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
        <span>Search</span>
      </button>
      <a href="contact.html" class="btn-header-cta">Inquire</a>
      <button type="button" class="mobile-toggle" aria-label="Toggle navigation menu">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </div>
</header>
<div class="mobile-drawer-overlay"></div>
<div class="mobile-drawer">
  <div class="drawer-header">
    <div class="site-logo">
      <span class="logo-main" style="font-size: 1.2rem;">HorologyCraft</span>
      <span class="logo-tagline">Haute Horlogerie</span>
    </div>
    <button type="button" class="drawer-close" aria-label="Close navigation menu">&times;</button>
  </div>
  <ul class="mobile-nav-list">
    <li><a href="index.php" class="mobile-nav-link">Home</a></li>
    <li><a href="about.html" class="mobile-nav-link">Atelier Heritage</a></li>
    <li><a href="index.php#timepieces" class="mobile-nav-link">Timepieces</a></li>
    <li><a href="index.php#movements" class="mobile-nav-link">Movements</a></li>
    <li><a href="blog/index.html" class="mobile-nav-link">Editorial Gazette</a></li>
    <li><a href="contact.html" class="mobile-nav-link">Private Concierge</a></li>
    <li class="nav-item-policy"><a href="privacy-policy.html" class="mobile-nav-link">Privacy Policy</a></li>
    <li class="nav-item-policy"><a href="terms-and-conditions.html" class="mobile-nav-link">Terms & Conditions</a></li>
    <li class="nav-item-policy"><a href="disclaimer.html" class="mobile-nav-link">Disclaimer</a></li>
    <li class="nav-item-policy"><a href="cookie-policy.html" class="mobile-nav-link">Cookie Policy</a></li>
  </ul>
</div>

<main>
  <!-- Section 1: Hero Section -->
  <section class="hero-section" id="hero">
    <div class="container hero-grid">
      <div>
        <div class="hero-badge">Independent Swiss Haute Horlogerie</div>
        <h1 class="hero-title">Precision Mechanical Masterpieces Sculpted for Eternity</h1>
        <p class="hero-subtitle">In an era of disposable digital circuits, HorologyCraft upholds the sacred art of micromechanical architecture. Hand-sculpted flying tourbillons, black mirror-polished steel hammers, and monocrystalline silicon hairsprings crafted in Le Locle.</p>
        <div class="hero-actions">
          <a href="#timepieces" class="btn-primary">Explore Calibres</a>
          <a href="about.html" class="btn-secondary">The Atelier Story</a>
        </div>
      </div>
      <div class="hero-image-wrapper">
        <div class="hero-image-frame">
          <img src="assets/images/hero_luxury_tourbillon_watch.jpg" alt="HorologyCraft flagship white dial luxury chronometer timepiece with blued steel hands">
        </div>
        <div class="hero-spec-tag">
          <span class="spec-number">Calibre HC-01T</span>
          <span class="spec-label">60-Sec Flying Tourbillon &bull; 21,600 vph</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 2: Metrics Strip -->
  <section class="metrics-strip" id="chronometric-metrics">
    <div class="container metrics-grid">
      <div class="metric-item">
        <div class="metric-value">0.24 g</div>
        <div class="metric-label">Grade 5 Titanium Tourbillon Carriage Weight</div>
      </div>
      <div class="metric-item">
        <div class="metric-value">+/- 1.5 s/d</div>
        <div class="metric-label">COSC & Metas Master Chronometer Precision</div>
      </div>
      <div class="metric-item">
        <div class="metric-value">120 Hours</div>
        <div class="metric-label">Dual-Barrel Constant-Force Power Reserve</div>
      </div>
      <div class="metric-item">
        <div class="metric-value">100%</div>
        <div class="metric-label">Hand-Executed Inward Anglage Beveling</div>
      </div>
    </div>
  </section>

  <!-- Section 3: The Pillars of Haute Horlogerie -->
  <section class="section-padding" id="pillars">
    <div class="container">
      <div class="section-header">
        <span class="section-eyebrow">Artisanal Tenets</span>
        <h2 class="section-title">The Four Pillars of HorologyCraft</h2>
        <p class="section-desc">Every timepiece leaving our Le Locle manufacture embodies an uncompromising fidelity to historical watchmaking traditions paired with aerospace metallurgical engineering.</p>
      </div>
      <div class="collection-grid">
        <div class="timepiece-card">
          <div class="timepiece-image-wrap">
            <img src="assets/images/movement_balance_wheel_hairspring.jpg" alt="Mechanical balance wheel and hairspring vibrating in high-beat escapement">
            <span class="timepiece-badge">Pillar I</span>
          </div>
          <div class="timepiece-info">
            <h3 class="timepiece-title">Isochronal Balance Architecture</h3>
            <p class="timepiece-desc">Variable-inertia glucydur balances fitted with four 18-karat gold poising screws. Micro-regulated across six positions and three distinct thermal gradients for absolute chronometric stability.</p>
          </div>
        </div>
        <div class="timepiece-card">
          <div class="timepiece-image-wrap">
            <img src="assets/images/movement_cotes_de_geneve_bridges.jpg" alt="Macro view of Geneva stripes Côtes de Genève on German silver bridges">
            <span class="timepiece-badge">Pillar II</span>
          </div>
          <div class="timepiece-info">
            <h3 class="timepiece-title">Maillechort German Silver Bridges</h3>
            <p class="timepiece-desc">Untreated Maillechort bridges that mature over decades into a rich, golden champagne warmth. Detailed with 1.5 mm Côtes de Genève stripes and circular graining (perlage).</p>
          </div>
        </div>
        <div class="timepiece-card">
          <div class="timepiece-image-wrap">
            <img src="assets/images/craft_anglage_hand_beveling.jpg" alt="Artisan hand beveling steel watch bridge using gentian wood pegs and diamond paste">
            <span class="timepiece-badge">Pillar III</span>
          </div>
          <div class="timepiece-info">
            <h3 class="timepiece-title">Sharp Inward Anglage Corners</h3>
            <p class="timepiece-desc">The ultimate watermark of hand finishing: razor-sharp interior corners that cannot be milled by CNC machines, executed exclusively with wooden files and diamond pastes.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 4: Signature Timepiece Collection -->
  <section class="section-padding" id="timepieces" style="background: var(--bg-elevated);">
    <div class="container">
      <div class="section-header">
        <span class="section-eyebrow">Manufacture Repertoire</span>
        <h2 class="section-title">Numbered Masterwork Calibres</h2>
        <p class="section-desc">Meticulously constructed in small annual series of twenty-five individually numbered pieces. Each creation is delivered with its chronometer testing logs and lifetime warranty.</p>
      </div>
      <div class="collection-grid">
        <!-- Watch 1 -->
        <article class="timepiece-card">
          <div class="timepiece-image-wrap">
            <img src="assets/images/collection_tourbillon_perpetual.jpg" alt="HorologyCraft Tourbillon Monolith with exposed titanium carriage and grand complication dial">
            <span class="timepiece-badge">Haute Complication</span>
          </div>
          <div class="timepiece-info">
            <span class="timepiece-caliber">Calibre HC-01T &bull; Hand-Wound</span>
            <h3 class="timepiece-title">The Tourbillon Monolith</h3>
            <p class="timepiece-desc">60-second flying tourbillon suspended in a skeletonized Grade 5 titanium cage. Multi-axis gravity compensation with 120-hour constant-force twin mainspring barrels.</p>
            <div class="timepiece-specs">
              <div class="spec-row"><strong>Case:</strong> 40mm 950 Platinum</div>
              <div class="spec-row"><strong>Frequency:</strong> 21,600 vph (3 Hz)</div>
              <div class="spec-row"><strong>Power:</strong> 120 Hours Reserve</div>
              <div class="spec-row"><strong>Jewels:</strong> 33 Synthetic Rubies</div>
            </div>
            <div class="timepiece-footer">
              <span class="timepiece-price">CHF 84,000</span>
              <a href="contact.html?piece=monolith" class="link-inquire">Request Allocation &rarr;</a>
            </div>
          </div>
        </article>
        <!-- Watch 2 -->
        <article class="timepiece-card">
          <div class="timepiece-image-wrap">
            <img src="assets/images/collection_monopusher_chronograph.jpg" alt="HorologyCraft Split-Seconds Monopusher Chronograph with column-wheel and horizontal clutch">
            <span class="timepiece-badge">Chronograph</span>
          </div>
          <div class="timepiece-info">
            <span class="timepiece-caliber">Calibre HC-02C &bull; Column Wheel</span>
            <h3 class="timepiece-title">Chrono-Regulator Split-Seconds</h3>
            <p class="timepiece-desc">Monopusher column-wheel chronograph with instantaneous 30-minute jumping counter and rattrapante split-second hand. Mirror-polished reset heart cams.</p>
            <div class="timepiece-specs">
              <div class="spec-row"><strong>Case:</strong> 41mm 18k Rose Gold</div>
              <div class="spec-row"><strong>Frequency:</strong> 28,800 vph (4 Hz)</div>
              <div class="spec-row"><strong>Power:</strong> 65 Hours Reserve</div>
              <div class="spec-row"><strong>Actuation:</strong> Crown Monopusher</div>
            </div>
            <div class="timepiece-footer">
              <span class="timepiece-price">CHF 62,000</span>
              <a href="contact.html?piece=chronoregulator" class="link-inquire">Request Allocation &rarr;</a>
            </div>
          </div>
        </article>
        <!-- Watch 3 -->
        <article class="timepiece-card">
          <div class="timepiece-image-wrap">
            <img src="assets/images/collection_nautic_diver_bezel.jpg" alt="HorologyCraft Deep Nautic 500M diver watch with ceramic unidirectional bezel and helium valve">
            <span class="timepiece-badge">Expedition Grade</span>
          </div>
          <div class="timepiece-info">
            <span class="timepiece-caliber">Calibre HC-03D &bull; Automatic</span>
            <h3 class="timepiece-title">Nautic 500M Expedition</h3>
            <p class="timepiece-desc">Engineered for oceanic pressure depths. Helium escape valve, unidirectional laser-etched black ceramic bezel, and bidirectional automatic winding rotor in 22k gold.</p>
            <div class="timepiece-specs">
              <div class="spec-row"><strong>Case:</strong> 42mm Titanium Ti-6Al-4V</div>
              <div class="spec-row"><strong>Depth:</strong> 500m / 50 ATM</div>
              <div class="spec-row"><strong>Power:</strong> 72 Hours Reserve</div>
              <div class="spec-row"><strong>Crystal:</strong> 4.2mm Domed Sapphire</div>
            </div>
            <div class="timepiece-footer">
              <span class="timepiece-price">CHF 38,500</span>
              <a href="contact.html?piece=nautic" class="link-inquire">Request Allocation &rarr;</a>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Section 5: Movement Engineering Featurette (Split 1) -->
  <section class="section-padding" id="movements">
    <div class="container feature-split">
      <div class="feature-media">
        <img src="assets/images/movement_column_wheel_actuator.jpg" alt="Macro photograph of polished solid steel column-wheel actuator and chronograph levers">
      </div>
      <div class="feature-content">
        <span class="section-eyebrow">Mechanical Purity</span>
        <h3>Column-Wheel Kinematics & Instantaneous Reset</h3>
        <p>In modern industrial chronographs, stamped cam-and-lever systems are universally substituted to save machining costs. The result is a stiff, unpredictable pusher feel with noticeable hand-stutter upon start.</p>
        <p>HorologyCraft remains dedicated to the classic column wheel. Milled from a single cylinder of hardened surgical steel, our eight-pillar column wheels deliver a velvety, feather-light tactile click. Coupled with our vertical friction clutch, chronograph engagement produces zero second-hand shudder.</p>
        <div class="spec-list">
          <div class="spec-list-item"><span class="bullet">&bull;</span> Solid 8-column blued steel actuator wheel</div>
          <div class="spec-list-item"><span class="bullet">&bull;</span> Micro-polished curved brake levers and heart-cam reset hammers</div>
          <div class="spec-list-item"><span class="bullet">&bull;</span> Frictionless ruby jewel endstones for zero lateral arbor tilt</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 6: Hand Guilloché & Dial Enameling (Split 2 Reverse) -->
  <section class="section-padding" id="guilloche" style="background: var(--bg-elevated);">
    <div class="container feature-split reverse">
      <div class="feature-media">
        <img src="assets/images/craft_guilloche_dial_engraving.jpg" alt="Artisan operating manual rose-engine lathe to cut complex Clous de Paris guilloché dial">
      </div>
      <div class="feature-content">
        <span class="section-eyebrow">Metiers d'Art</span>
        <h3>Manual Rose-Engine Guilloché & Grand Feu Enamel</h3>
        <p>Every dial on a HorologyCraft timepiece is an original work of decorative kinetic art. Guided entirely by hand without computerized motors, our master guillocheurs operate antique 19th-century straight-line and rose-engine lathes.</p>
        <p>A single Clous de Paris or grain d'orge dial requires over eight hours of unbroken concentration. The slightest slip of thumb pressure destroys the solid gold disc instantly. The resulting geometric facets reflect ambient light with a hypnotic, undulating brilliance.</p>
        <div class="spec-list">
          <div class="spec-list-item"><span class="bullet">&bull;</span> Solid 18-karat gold and 925 sterling silver dial blanks</div>
          <div class="spec-list-item"><span class="bullet">&bull;</span> Authentic Grand Feu enamel fired seven times at 840&deg; Celsius</div>
          <div class="spec-list-item"><span class="bullet">&bull;</span> Heat-blued flame-tempered Breguet open-tipped steel hands</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 7: Metallurgical Metallurgy & Case Architecture -->
  <section class="section-padding" id="metallurgy">
    <div class="container">
      <div class="section-header">
        <span class="section-eyebrow">Materials Science</span>
        <h2 class="section-title">Aerospace Alloys & Precious Metallurgy</h2>
        <p class="section-desc">Cases designed to withstand extreme barometric shifts, magnetic fields, and salt-air corrosion while maintaining supreme wrist ergonomics.</p>
      </div>
      <div class="collection-grid">
        <div class="timepiece-card">
          <div class="timepiece-image-wrap">
            <img src="assets/images/material_grade5_titanium_case.jpg" alt="Grade 5 titanium watch case with satin brushed flanks and mirror polished bezel">
          </div>
          <div class="timepiece-info">
            <h3 class="timepiece-title">Grade 5 Titanium (Ti-6Al-4V)</h3>
            <p class="timepiece-desc">40% lighter than surgical steel with twice the tensile yield strength. Completely biocompatible, hypoallergenic, and resistant to marine saltwater pitting.</p>
          </div>
        </div>
        <div class="timepiece-card">
          <div class="timepiece-image-wrap">
            <img src="assets/images/material_rose_gold_metallurgy.jpg" alt="Solid 18-karat proprietary 5N rose gold alloy ingot with copper and platinum content">
          </div>
          <div class="timepiece-info">
            <h3 class="timepiece-title">Proprietary 5N+ Eternal Rose Gold</h3>
            <p class="timepiece-desc">Enriched with a 1.5% palladium atomic matrix that prevents copper oxidation, ensuring the rich, warm reddish gold tone never fades over decades of wear.</p>
          </div>
        </div>
        <div class="timepiece-card">
          <div class="timepiece-image-wrap">
            <img src="assets/images/material_sapphire_crystal_antireflective.jpg" alt="Double-curved box sapphire crystal with multi-layer interior anti-reflective coating">
          </div>
          <div class="timepiece-info">
            <h3 class="timepiece-title">Double-Curved Box Sapphire</h3>
            <p class="timepiece-desc">Crystalline corundum with a Mohs hardness rating of 9. Treated with five vacuum-deposited anti-reflective coats on both surfaces for optical vanishing clarity.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 8: The Le Locle Atelier Workshop -->
  <section class="section-padding" id="atelier-tour" style="background: var(--bg-elevated);">
    <div class="container feature-split">
      <div class="feature-media">
        <img src="assets/images/atelier_watchmaker_loupe_bench.jpg" alt="Master watchmaker workbench with binocular microscope, brass staking tools, and movement holder">
      </div>
      <div class="feature-content">
        <span class="section-eyebrow">The Sanctuary</span>
        <h3>Le Locle: Four Centuries of Horological Lineage</h3>
        <p>Perched high in the Swiss Jura mountains, our atelier breathes the rarefied air of horological history. Since 1705, the artisans of this alpine valley have pioneered the escapements and spring balances that mapped the world's oceans.</p>
        <p>At HorologyCraft, each watch is not moved down an impersonal assembly conveyor. A single master watchmaker accepts responsibility for your timepiece from raw components through final casing, poising, timing regulation, and caseback signature engraving.</p>
        <div class="hero-actions" style="margin-top: 24px;">
          <a href="about.html" class="btn-primary">Learn Atelier Heritage</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 9: Bespoke Commissioning Protocol -->
  <section class="section-padding" id="bespoke">
    <div class="container">
      <div class="section-header">
        <span class="section-eyebrow">Haute Sur Mesure</span>
        <h2 class="section-title">The Bespoke Private Commission</h2>
        <p class="section-desc">Collaborate directly with our master watchmakers to realize a one-of-a-kind chronometric complication tailored to your exact aesthetic and mechanical vision.</p>
      </div>
      <div class="collection-grid">
        <div class="timepiece-card">
          <div class="timepiece-info">
            <span class="timepiece-caliber">Phase 01</span>
            <h3 class="timepiece-title">Conceptual Horology Consultation</h3>
            <p class="timepiece-desc">A private salon meeting in Geneva, Zurich, or London to select complications, case geometry, dial Guilloché patterns, and precious metals.</p>
          </div>
        </div>
        <div class="timepiece-card">
          <div class="timepiece-info">
            <span class="timepiece-caliber">Phase 02</span>
            <h3 class="timepiece-title">CAD Kinetic Simulation & 3D Prototyping</h3>
            <p class="timepiece-desc">Our micromechanical engineers produce full virtual kinematic gear train models, validating tooth contact stress and hairspring breathing clearance.</p>
          </div>
        </div>
        <div class="timepiece-card">
          <div class="timepiece-info">
            <span class="timepiece-caliber">Phase 03</span>
            <h3 class="timepiece-title">Hand Execution & Atelier Delivery</h3>
            <p class="timepiece-desc">Nine months of hand filing, anglage, regulation, and 1,000-hour chronometric certification before personal handoff by the watchmaker in Le Locle.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 10: Technical Horology FAQ Accordion -->
  <section class="section-padding" id="technical-faq" style="background: var(--bg-elevated);">
    <div class="container">
      <div class="section-header">
        <span class="section-eyebrow">Technical FAQ</span>
        <h2 class="section-title">Master Watchmaking Inquiries</h2>
        <p class="section-desc">Detailed answers regarding chronometric regulation, escapement maintenance, magnetic resistance, and service intervals.</p>
      </div>
      <div class="accordion-group">
        <div class="accordion-item">
          <button type="button" class="accordion-header">
            <span>What is the functional purpose of a 60-second flying tourbillon?</span>
            <span class="accordion-icon">+</span>
          </button>
          <div class="accordion-content">
            <p>Originally invented by Abraham-Louis Breguet in 1801 for vertical pocket watches, the tourbillon continuously rotates the balance wheel, hairspring, and escapement through 360 degrees every minute. By continually rotating these components, gravitational poise errors that cause a watch to gain or lose time in vertical positions are averaged out and neutralized. Our flying tourbillon is supported solely from underneath without an upper bridge, offering unobstructed visual appreciation of the oscillating organ.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button type="button" class="accordion-header">
            <span>How does monocrystalline silicon improve balance spring isochronism?</span>
            <span class="accordion-icon">+</span>
          </button>
          <div class="accordion-content">
            <p>Traditional balance springs manufactured from iron-nickel alloys (such as Nivarox) are inherently susceptible to magnetic fields from smartphones, magnetic clasps, and laptop speakers, which cause the coils to stick together and race wildly. Monocrystalline silicon (Silinvar) is 100% antimagnetic, corrosion-free, and manufactured via Deep Reactive Ion Etching (DRIE) with atomic dimensional tolerances. It maintains consistent elastic modulus across varying temperatures, delivering superior isochronal rate stability.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button type="button" class="accordion-header">
            <span>What is black mirror polish (poli noir) and why is it so rare?</span>
            <span class="accordion-icon">+</span>
          </button>
          <div class="accordion-content">
            <p>Black mirror polish represents the pinnacle of watch finishing. Steel tourbillon bridges and screws are rubbed by hand in figure-eight patterns across a zinc plate charged with microscopic 0.5-micron diamond paste. When polished to perfection, the steel surface becomes so optically flat that it reflects light in only one direction: viewed straight on, it appears completely pitch black; tilted by a millimeter, it bursts into brilliant mirror-white illumination.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button type="button" class="accordion-header">
            <span>What are the recommended service intervals for a HorologyCraft timepiece?</span>
            <span class="accordion-icon">+</span>
          </button>
          <div class="accordion-content">
            <p>Thanks to our use of high-stability synthetic Swiss lubricants (Moebius 9010 and HP1300) and friction-reducing diamond-coated escapement palettes, HorologyCraft timepieces require complete atelier overhaul only once every five to seven years. Water-resistant gaskets should be inspected annually if the watch is regularly worn while swimming.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 11: Private Concierge & Atelier Call to Action -->
  <section class="section-padding" id="concierge-cta" style="background: var(--primary); color: #ffffff; text-align: center;">
    <div class="container" style="max-width: 820px;">
      <span class="section-eyebrow" style="color: var(--accent);">Private Salon Inquiries</span>
      <h2 class="section-title" style="color: #ffffff; margin-bottom: 20px;">Begin Your Chronometric Journey</h2>
      <p style="font-size: 1.1rem; color: #c9cdd4; line-height: 1.7; margin-bottom: 36px;">Whether inquiring about an allocated numbered calibre, scheduling a private salon appointment in Le Locle, or commissioning a bespoke Grand Complication, our private client concierge awaits your communication.</p>
      <div class="hero-actions" style="justify-content: center;">
        <a href="contact.html" class="btn-primary">Schedule Private Salon Consultation</a>
        <a href="mailto:contact@horologycraft.com" class="btn-secondary">Email Concierge Desk</a>
      </div>
    </div>
  </section>
</main>

<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">
      <div class="footer-col">
        <div class="site-logo" style="margin-bottom: 20px;">
          <span class="logo-main" style="color: #ffffff;">HorologyCraft</span>
          <span class="logo-tagline" style="color: var(--accent);">Haute Horlogerie & Master Clockwork</span>
        </div>
        <p>Independent Swiss-calibrated mechanical watchmaking atelier. Engineering chronometric masterworks, 60-second flying tourbillons, hand anglage beveling, and grand complications in limited numbered editions.</p>
        <p style="font-size: 0.85rem; color: #838b96;">Grand-Rue 42, 2400 Le Locle, Canton of Neuchâtel, Switzerland</p>
      </div>
      <div class="footer-col">
        <h4>Manufacture</h4>
        <ul class="footer-links">
          <li><a href="index.php#timepieces">The Tourbillon Monolith</a></li>
          <li><a href="index.php#timepieces">Chrono-Regulator Reserve</a></li>
          <li><a href="index.php#timepieces">Nautic Deep Diver Calibre</a></li>
          <li><a href="index.php#timepieces">Perpetual Astronomic</a></li>
          <li><a href="about.html">Atelier Metallurgy</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Navigation</h4>
        <ul class="footer-links">
          <li><a href="index.php">Home Atelier</a></li>
          <li><a href="about.html">Lineage & Ethics</a></li>
          <li><a href="blog/index.html">Editorial Gazette</a></li>
          <li><a href="contact.html">Private Concierge</a></li>
          <li><a href="contact.html#appointments">Salon Appointments</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Legal Governance</h4>
        <ul class="footer-links">
          <li><a href="privacy-policy.html">Privacy Policy</a></li>
          <li><a href="terms-and-conditions.html">Terms & Conditions</a></li>
          <li><a href="disclaimer.html">Disclaimer</a></li>
          <li><a href="cookie-policy.html">Cookie Policy</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <div>&copy; 2026 HorologyCraft Manufacture S.A. All rights reserved. Registered Swiss Master Horology Guild.</div>
      <div>Official Inquiries: <a href="mailto:contact@horologycraft.com" style="color: var(--accent);">contact@horologycraft.com</a></div>
    </div>
  </div>
</footer>
<div class="search-modal">
  <div class="search-modal-box">
    <div class="search-modal-header">
      <input type="text" class="search-input" placeholder="Search calibres, complications, technical treatises...">
      <button type="button" class="search-close-btn">&times;</button>
    </div>
    <div class="search-results-list">
      <div style="padding:16px 20px;color:var(--text-muted);font-size:0.85rem;">Type a complication, calibre, or topic to search...</div>
    </div>
  </div>
</div>

<script src="assets/js/main.js?v=2.1"></script>
</body>
</html>
