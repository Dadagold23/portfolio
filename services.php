<?php

declare(strict_types=1);

require_once __DIR__ . '/config/app.php';

$pageTitle = 'Services | ' . $site['name'];
$pageDescription = 'Software engineering, systems architecture, UI revamp, technical consulting, project management, HRM, and QA/QC services.';
$activePage = 'services';

require __DIR__ . '/includes/header.php';
?>
<main>
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-card" data-aos="fade-up">
                <p class="crumbs mb-2">Home / Services</p>
                <span class="section-eyebrow">How I help</span>
                <h1 class="section-title mt-3">Services shaped for products, teams, and operations that need stronger structure and better execution.</h1>
                <p class="lead mb-0">This service mix now spans engineering, architecture, design modernization, project leadership, people operations, and quality assurance support.</p>
            </div>
        </div>
    </section>

    <section class="section-pad">
        <div class="container">
            <div class="service-grid-intro" data-aos="fade-up">
                <span class="section-eyebrow">Services Overview</span>
                <h2 class="section-title mt-3">Engineering and strategic capabilities designed to deliver impact.</h2>
                <p class="section-lead mb-0">Custom-tailored services aligning product quality, scalable architectures, and team momentum.</p>
            </div>
            <div class="row g-4">
                <?php foreach ($site['services'] as $index => $service): ?>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="<?= ($index + 1) * 100; ?>">
                        <div class="service-card">
                            <i class="bi <?= e($service['icon']); ?>"></i>
                            <span class="service-tag"><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT); ?></span>
                            <h2 class="h3 mt-3"><?= e($service['title']); ?></h2>
                            <p class="text-muted-soft mb-4"><?= e($service['text']); ?></p>
                            <div class="check-list">
                                <span><i class="bi bi-check2-circle"></i>Discovery aligned with technical and business goals.</span>
                                <span><i class="bi bi-check2-circle"></i>Implementation shaped for maintainability and growth.</span>
                                <span><i class="bi bi-check2-circle"></i>Presentation quality that improves stakeholder confidence.</span>
                                <span><i class="bi bi-check2-circle"></i>Integration with existing systems and workflows.</span>
                                <span><i class="bi bi-check2-circle"></i>Quality assurance and testing processes.</span>
                                <span><i class="bi bi-check2-circle"></i>Project management and coordination.</span>
                                <span><i class="bi bi-check2-circle"></i>Human resource management.</span>
                                <span><i class="bi bi-check2-circle"></i>Process improvement</span>
                            </div>
                            <div class="service-meta">
                                <span>Strategy</span>
                                <span>Execution</span>
                                <span>Modernization</span>
                                <span>Integration</span>
                                <span>Process Improvement</span>
                                <span>Change Management</span>
                                <span>Quality Assurance</span>
                                <span>Project Management</span>
                                <span>Human Resource Management</span>
                                <span>Architecture</span>
                                <span>Cloud Deployment</span>
                                <span>UI Revamp</span>
                                <span>Technical Consulting</span>
                                <span>Networking Infrastructure and Maintenance</span>
                                <span>IT Support</span>
                                <span>Data Analysis and Visualization</span>
                                <span>Business Analysis</span>
                                <span>Operations Support</span>
                                <span>Software Development and Integration</span>
                                <span>UI and UX Design</span>
                                <span>Database Management</span>
                                <span>Testing and Quality Assurance</span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section-pad pt-0">
        <div class="container">
            <div class="row g-4 align-items-stretch">
                <div class="col-lg-7" data-aos="fade-right">
                    <div class="service-feature-card position-relative">
                        <span class="section-eyebrow">Engagement flow</span>
                        <h2 class="section-title h3 mt-3">Typical delivery path from idea to measurable execution.</h2>
                        <div class="service-flow mt-4">
                            <div class="service-flow-step">
                                <strong>01. Discovery and framing</strong>
                                <p class="text-muted-soft mb-0">Clarify the problem, map technical/business priorities, and identify the strongest implementation path.</p>
                            </div>
                            <div class="service-flow-step">
                                <strong>02. Build and coordination</strong>
                                <p class="text-muted-soft mb-0">Drive the core engineering, architecture, or operational layer while keeping stakeholders aligned.</p>
                            </div>
                            <div class="service-flow-step">
                                <strong>03. Quality and rollout</strong>
                                <p class="text-muted-soft mb-0">Use QA/QC thinking, process checks, and refinement passes to deliver with more confidence.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-left">
                    <div class="quote-card">
                        <span class="pill-label"><i class="bi bi-layout-text-window-reverse"></i> Broader professional scope</span>
                        <h2 class="section-title mt-4">Engineering is strongest when delivery, people, and quality systems are considered together.</h2>
                        <p class="section-lead mb-4">That is why this service page now includes project management, HRM, and QA/QC alongside software and architecture capability.</p>
                        <a href="contact.php" class="btn btn-main">Request a project discussion</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-pad pt-0">
        <div class="container">
            <div class="row g-4 align-items-stretch">
                <div class="col-lg-7" data-aos="fade-up">
                    <div class="service-mosaic">
                        <div class="media-frame medium">
                            <img src="assets/img/Soft_dev.webp" alt="Software development workflow">
                        </div>
                        <div class="service-mosaic-side">
                            <div class="media-frame short">
                                <img src="assets/img/cloud-integration-1.jpeg" alt="Cloud integration services">
                            </div>
                            <div class="media-frame short">
                                <img src="assets/img/it_engineer.avif" alt="IT engineering services">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="timeline-card h-100">
                        <span class="section-eyebrow">Operational philosophy</span>
                        <h2 class="section-title h3 mt-3">How technical decisions shape business velocity.</h2>
                        <div class="process-list mt-4">
                            <div>
                                <strong>Robust architecture</strong>
                                <p class="text-muted-soft mb-0">We design systems to reduce bottlenecks and support growth without expensive re-engineering.</p>
                            </div>
                            <div>
                                <strong>Continuous delivery</strong>
                                <p class="text-muted-soft mb-0">Setting up deployment loops that ensure clean, production-grade iterations.</p>
                            </div>
                            <div>
                                <strong>Process assurance</strong>
                                <p class="text-muted-soft mb-0">Combining project management and QA/QC to keep timelines realistic and builds dependable.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
