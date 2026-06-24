<?php

declare(strict_types=1);

require_once __DIR__ . '/config/app.php';

$pageTitle = $site['name'] . ' | Software Engineer Portfolio';
$pageDescription = 'Premium portfolio for Engr. Abdullateef Olalekan Dada, focused on software engineering, systems architecture, modernization, and product delivery.';
$activePage = 'home';

require __DIR__ . '/includes/header.php';
?>
<main>
    <section class="hero">
        <div class="container">
            <div class="hero-panel glass-card">
                <div class="hero-grid">
                    <div class="hero-copy" data-aos="fade-up">
                        <span class="hero-kicker"><i class="bi bi-stars"></i> Software engineering, systems delivery, and modernization leadership</span>
                        <h1 class="display-title"><?= e($site['name']); ?></h1>
                        <p class="lead"><?= e($site['tagline']); ?> with <?= e($site['years']); ?> years shaping enterprise platforms, cleaner interfaces, and dependable backend workflows for business-critical teams.</p>
                        <div class="hero-copy-support">
                            <div class="resume-strip-card">
                                <strong>Current emphasis</strong>
                                <span>Portfolio revamps, enterprise software delivery, and dependable architecture planning.</span>
                            </div>
                            <div class="resume-strip-card">
                                <strong>Live ecosystem</strong>
                                <a href="https://www.mirrorageconcepts.com" target="_blank" rel="noreferrer">www.mirrorageconcepts.com</a>
                            </div>
                        </div>
                        <div class="hero-actions">
                            <a href="portfolio.php" class="btn btn-main">Explore selected work <i class="bi bi-arrow-right"></i></a>
                            <a href="contact.php" class="btn btn-outline-main">Book a discovery call</a>
                            <a href="<?= e($site['resume_pdf']); ?>" class="btn btn-ghost-main" download>Download resume</a>
                        </div>
                        <div class="hero-metrics">
                            <?php foreach ($site['stats'] as $stat): ?>
                                <div class="metric-card" data-aos="fade-up" data-aos-delay="100">
                                    <strong><?= e($stat['value']); ?></strong>
                                    <span><?= e($stat['label']); ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="hero-side">
                        <div class="profile-card-hero" data-aos="zoom-in">
                            <img class="profile-photo" src="assets/img/profile2.jpg" alt="<?= e($site['name']); ?>">
                            <span class="status-pill">Available for architecture, product, and UI work</span>
                        </div>
                        <div class="resume-strip" data-aos="fade-up" data-aos-delay="100">
                            <div class="resume-pair">
                                <div class="resume-strip-card">
                                    <strong>Primary focus</strong>
                                    <span>Software engineering and systems architecture</span>
                                </div>
                                <div class="resume-strip-card">
                                    <strong>Extended scope</strong>
                                    <span>Project management, HRM, and QA/QC</span>
                                </div>
                            </div>
                            <div class="mini-panel">
                                <p class="section-eyebrow mb-3">Focus areas</p>
                                <div class="skill-cloud">
                                    <span class="skill-chip">.NET</span>
                                    <span class="skill-chip">JavaScript</span>
                                    <span class="skill-chip">Python</span>
                                    <span class="skill-chip">Bootstrap</span>
                                    <span class="skill-chip">Cloud</span>
                                    <span class="skill-chip">MySQL</span>
                                    <span class="skill-chip">Project Management</span>
                                    <span class="skill-chip">HR Management</span>
                                    <span class="skill-chip">QA/QC</span>
                                </div>
                            </div>
                        </div>
                        <div class="signature-panel" data-aos="fade-up" data-aos-delay="150">
                            <p class="section-eyebrow mb-3">What clients get</p>
                            <div class="signal-list">
                                <div class="signal-item"><i class="bi bi-check2-circle"></i><span>Sharper interfaces without losing engineering discipline.</span></div>
                                <div class="signal-item"><i class="bi bi-check2-circle"></i><span>Architecture decisions that support growth, reliability, and maintainability.</span></div>
                                <div class="signal-item"><i class="bi bi-check2-circle"></i><span>Delivery shaped for real business workflows, not just technical elegance.</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-pad">
        <div class="container">
            <div class="divi-section-head" data-aos="fade-up">
                <span class="section-eyebrow">Profile overview</span>
                <h2 class="section-title mt-3">Engineering leadership and strategic delivery across technical domains.</h2>
                <p class="section-lead mb-0">Core capability pillars that drive successful systems architecture, custom software development, and quality operations.</p>
            </div>
            <div class="row g-4 align-items-center">
                <div class="col-lg-5" data-aos="fade-right">
                    <span class="section-eyebrow">Opening statement</span>
                    <h2 class="section-title mt-3">Engineered for clarity, performance, and long-term momentum.</h2>
                    <p class="section-lead">Our engineering approach bridges technical depth with business metrics. We focus on structured project delivery, systems modernization, and quality assurance workflows that yield reliable production software.</p>
                    <a href="about.php" class="btn btn-outline-main mt-3">Read the full profile</a>
                </div>
                <div class="col-lg-7">
                    <div class="row g-4">
                        <div class="col-md-6" data-aos="fade-up">
                            <div class="info-card">
                                <i class="bi bi-diagram-3"></i>
                                <span class="card-index">01</span>
                                <h3 class="h4 mt-3">Architecture-first thinking</h3>
                                <p class="text-muted-soft mb-0">Structure the product, data, and integration layers clearly before complexity becomes expensive.</p>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="info-card">
                                <i class="bi bi-window-stack"></i>
                                <span class="card-index">02</span>
                                <h3 class="h4 mt-3">Premium UI modernization</h3>
                                <p class="text-muted-soft mb-0">Elevate credibility with clearer layouts, stronger hierarchy, and more purposeful motion.</p>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="150">
                            <div class="info-card">
                                <i class="bi bi-database-check"></i>
                                <span class="card-index">03</span>
                                <h3 class="h4 mt-3">Database-ready execution</h3>
                                <p class="text-muted-soft mb-0">Reusable PHP structure and PDO-ready workflows create a more durable base for growth.</p>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="info-card">
                                <i class="bi bi-briefcase"></i>
                                <span class="card-index">04</span>
                                <h3 class="h4 mt-3">Business-aware delivery</h3>
                                <p class="text-muted-soft mb-0">Technical choices stay aligned with speed, stakeholder clarity, usability, and long-term cost.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-pad pt-0">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="timeline-card">
                        <span class="section-eyebrow">Extended profile</span>
                        <h2 class="section-title h3 mt-3">Beyond engineering, the profile also covers leadership, people, and quality operations.</h2>
                        <div class="check-list mt-4">
                            <?php foreach ($site['roles'] as $role): ?>
                                <span><i class="bi bi-check2-circle"></i><?= e($role); ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="timeline-card">
                        <span class="section-eyebrow">Web presence</span>
                        <h2 class="section-title h3 mt-3">Associated platforms and live web properties.</h2>
                        <div class="timeline-list mt-4">
                            <?php foreach ($site['websites'] as $website): ?>
                                <div>
                                    <strong><?= e($website['label']); ?></strong>
                                    <p class="mb-0"><a class="text-muted-soft" href="<?= e($website['url']); ?>" target="_blank" rel="noreferrer"><?= e($website['url']); ?></a></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-pad pt-0">
        <div class="container">
            <div class="row g-4 align-items-stretch">
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="visual-stack">
                        <div class="media-frame medium">
                            <img src="assets/img/data-pract.jpg" alt="Data and systems practice">
                        </div>
                        <div class="visual-grid-two">
                            <div class="media-frame short">
                                <img src="assets/img/net2.jpeg" alt="Network and platform delivery">
                            </div>
                            <div class="media-frame short">
                                <img src="assets/img/system_arch.jpg" alt="Systems architecture">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="timeline-card h-100">
                        <span class="section-eyebrow">Infrastructure Strategy</span>
                        <h2 class="section-title h3 mt-3">High-availability systems designed for resilience.</h2>
                        <p class="section-lead mb-4">Selecting appropriate cloud blueprints, secure database configurations, and robust API endpoints is vital to support scalable software systems and prevent expensive downtime.</p>
                        <div class="check-list">
                            <span><i class="bi bi-check2-circle"></i>Enterprise configurations designed for high uptime.</span>
                            <span><i class="bi bi-check2-circle"></i>Optimized database and query performance workflows.</span>
                            <span><i class="bi bi-check2-circle"></i>Secure integration layers for clean third-party connectivity.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-pad pt-0">
        <div class="container">
            <div class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-end gap-3 mb-4">
                <div data-aos="fade-up">
                    <span class="section-eyebrow">Featured projects</span>
                    <h2 class="section-title mt-3 mb-2">Projects that blend product thinking, platform reliability, and presentation quality.</h2>
                    <p class="section-lead mb-0">A short cut through representative work across retail, cloud integration, learning systems, and modernization delivery.</p>
                </div>
                <a href="portfolio.php" class="btn btn-outline-main" data-aos="fade-left">See all portfolio work</a>
            </div>
            <div class="showcase-grid">
                <div class="showcase-row">
                    <?php foreach (array_slice($site['projects'], 0, 2) as $index => $project): ?>
                        <div class="project-card" data-aos="zoom-in" data-aos-delay="<?= ($index + 1) * 100; ?>">
                            <div class="project-media">
                                <img src="<?= e($project['image']); ?>" alt="<?= e($project['title']); ?>">
                            </div>
                            <span class="project-tag"><?= e($project['tag']); ?></span>
                            <h3 class="h3 mt-3"><?= e($project['title']); ?></h3>
                            <p class="text-muted-soft"><?= e($project['text']); ?></p>
                            <div class="project-meta">
                                <span>Strategy, engineering, and delivery</span>
                            </div>
                            <a href="portfolio.php" class="portfolio-action">View case direction <i class="bi bi-arrow-right"></i></a>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="row g-4">
                    <?php foreach (array_slice($site['projects'], 2, 3) as $index => $project): ?>
                        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="<?= ($index + 1) * 100; ?>">
                            <div class="project-card">
                                <div class="project-media">
                                    <img src="<?= e($project['image']); ?>" alt="<?= e($project['title']); ?>">
                                </div>
                                <span class="project-tag"><?= e($project['tag']); ?></span>
                                <h3 class="h4 mt-3"><?= e($project['title']); ?></h3>
                                <p class="text-muted-soft mb-0"><?= e($project['text']); ?></p>
                                <a href="portfolio.php" class="portfolio-action">Explore project <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="section-pad pt-0">
        <div class="container">
            <div class="divi-cta-band" data-aos="fade-up">
                <span class="section-eyebrow">Start a project</span>
                <h2 class="section-title mt-3">Need a portfolio-grade interface with dependable backend thinking behind it?</h2>
                <p class="section-lead mb-4">The same delivery approach applied here can support personal brands, business platforms, LMS products, and modernization projects across the Mirror Age ecosystem.</p>
                <a href="contact.php" class="btn btn-main">Start a project conversation</a>
            </div>
        </div>
    </section>

    <section class="section-pad pt-0">
        <div class="container">
            <div class="row g-4 align-items-stretch">
                <div class="col-lg-7" data-aos="fade-up">
                    <div class="quote-card">
                        <span class="section-eyebrow">Closing note</span>
                        <h2 class="section-title mt-4">Software should feel polished on the surface and disciplined underneath.</h2>
                        <p class="section-lead mb-4">A balanced execution strategy requires robust backend logic, reliable database tables, and clean front-facing presentation working together seamlessly.</p>
                        <div class="check-list">
                            <span><i class="bi bi-check2-circle"></i>User interfaces designed for ease of use.</span>
                            <span><i class="bi bi-check2-circle"></i>Maintainable structures that support future expansions.</span>
                            <span><i class="bi bi-check2-circle"></i>Clear alignment with project requirements and deadlines.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-left">
                    <div class="timeline-card">
                        <span class="section-eyebrow">Delivery strengths</span>
                        <div class="timeline-list mt-4">
                            <div>
                                <strong>Product engineering</strong>
                                <div class="metric-bar"><span style="width: 94%"></span></div>
                            </div>
                            <div>
                                <strong>Cloud and systems integration</strong>
                                <div class="metric-bar"><span style="width: 90%"></span></div>
                            </div>
                            <div>
                                <strong>UI modernization</strong>
                                <div class="metric-bar"><span style="width: 88%"></span></div>
                            </div>
                            <div>
                                <strong>Database design and workflow automation</strong>
                                <div class="metric-bar"><span style="width: 92%"></span></div>
                            </div>
                        </div>
                        <a href="services.php" class="btn btn-main mt-4">See service capability</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
