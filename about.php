<?php

declare(strict_types=1);

require_once __DIR__ . '/config/app.php';

$pageTitle = 'About | ' . $site['name'];
$pageDescription = 'Professional profile, technical strengths, leadership style, and strategic focus for Engr. Abdullateef Olalekan Dada.';
$activePage = 'about';

require __DIR__ . '/includes/header.php';
?>
<main>
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-card" data-aos="fade-up">
                <p class="crumbs mb-2">Home / About</p>
                <span class="section-eyebrow">Profile and approach</span>
                <h1 class="section-title mt-3">A software engineer shaped by delivery, architecture, and long-range thinking.</h1>
                <p class="lead mb-0">Built on over <?= e($site['years']); ?> years of experience across enterprise software, cloud systems, automation, product delivery, and modernization work.</p>
            </div>
        </div>
    </section>

    <section class="section-pad">
        <div class="container">
            <div class="divi-section-head" data-aos="fade-up">
                <span class="section-eyebrow">Profile overview</span>
                <h2 class="section-title mt-3">A senior engineering background shaped by architecture, team coordination, and software quality.</h2>
                <p class="section-lead mb-0">Delivering highly robust technical environments while aligning organizational goals with sustainable development practices.</p>
            </div>
            <div class="row g-4 align-items-center">
                <div class="col-lg-5" data-aos="fade-right">
                    <div class="profile-card-hero">
                        <img class="profile-photo" src="assets/img/about.webp" alt="About <?= e($site['name']); ?>">
                    </div>
                </div>
                <div class="col-lg-7" data-aos="fade-left">
                    <span class="section-eyebrow">Professional story</span>
                    <h2 class="section-title mt-3">From technical depth to practical execution.</h2>
                    <p class="section-lead">Abdullateef brings a mix of engineering discipline, systems awareness, and product sensitivity. The work spans software architecture, full-stack implementation, modernization projects, and the ability to align technical choices with business direction.</p>
                    <p class="text-muted-soft mb-4">That combination makes it easier to move from an idea, or an outdated interface, into a dependable platform with stronger usability and cleaner backend structure.</p>
                    <div class="check-list">
                        <span><i class="bi bi-check2-circle"></i>Architecture decisions designed for clarity and maintainability.</span>
                        <span><i class="bi bi-check2-circle"></i>Frontend experiences that feel more credible, current, and useful.</span>
                        <span><i class="bi bi-check2-circle"></i>Technical delivery that stays tied to operational value.</span>
                        <span><i class="bi bi-check2-circle"></i>Stronger user confidence and cleaner operational processes.</span>
                        <span><i class="bi bi-check2-circle"></i>Better alignment across teams, deliverables, and timelines.</span>
                        <span><i class="bi bi-check2-circle"></i>Work that balances quality, timelines, and real-world impact.</span>
                        <span><i class="bi bi-check2-circle"></i>Stable, scalable, and easier to support long-term.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-pad pt-0">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-xl-3" data-aos="fade-up">
                    <div class="info-card">
                        <i class="bi bi-cpu"></i>
                        <h3 class="h5">Engineering range</h3>
                        <p class="text-muted-soft mb-0">C#, .NET, JavaScript, Python, SQL, APIs, Bootstrap, and business workflow systems.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="info-card">
                        <i class="bi bi-cloud-check"></i>
                        <h3 class="h5">Platform design</h3>
                        <p class="text-muted-soft mb-0">Architecture decisions built for resilience, growth, integrations, and maintainability.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3" data-aos="fade-up" data-aos-delay="150">
                    <div class="info-card">
                        <i class="bi bi-kanban"></i>
                        <h3 class="h5">Product-minded delivery</h3>
                        <p class="text-muted-soft mb-0">Execution that balances quality, deadlines, stakeholder clarity, and UX confidence.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="info-card">
                        <i class="bi bi-people-fill"></i>
                        <h3 class="h5">Leadership and mentoring</h3>
                        <p class="text-muted-soft mb-0">Support for sustainable engineering practice, clearer collaboration, and better team habits.</p>
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
                        <span class="section-eyebrow">Additional professional coverage</span>
                        <div class="timeline-list mt-4">
                            <?php foreach ($site['roles'] as $role): ?>
                                <div>
                                    <strong><?= e($role); ?></strong>
                                    <p class="text-muted-soft mb-0">Included as part of the wider professional profile and delivery scope.</p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="signature-panel">
                        <span class="section-eyebrow">Related websites</span>
                        <p class="signature-quote">The profile also connects to live business and learning platforms under the Mirror Age Concepts ecosystem.</p>
                        <div class="process-list">
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
                        <div class="visual-grid-two">
                            <div class="media-frame medium">
                                <img src="assets/img/pro3.jpg" alt="Professional portrait">
                            </div>
                            <div class="media-frame medium">
                                <img src="assets/img/profile.jpg" alt="Profile portrait">
                            </div>
                        </div>
                        <div class="media-frame short">
                            <img src="assets/img/pot1.jpg" alt="Creative professional workspace">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="signature-panel h-100">
                        <span class="section-eyebrow">Engineering values</span>
                        <p class="signature-quote">Designing and delivering systems that balance operational capacity with high performance.</p>
                        <div class="process-list">
                            <div>
                                <strong>Agile alignment</strong>
                                <p class="text-muted-soft mb-0">Direct communication and iterative workflows that keep software systems in sync with evolving priorities.</p>
                            </div>
                            <div>
                                <strong>Continuous improvement</strong>
                                <p class="text-muted-soft mb-0">Refining developer workflows, deployment pipelines, and codebase documentation to reduce tech debt.</p>
                            </div>
                            <div>
                                <strong>End-to-end oversight</strong>
                                <p class="text-muted-soft mb-0">Managing requirements and design patterns from early wireframes to production deployment checks.</p>
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
                        <span class="section-eyebrow">Core expertise</span>
                        <div class="timeline-list mt-4">
                            <div>
                                <strong>Full-stack software development</strong>
                                <p class="text-muted-soft mb-0">Applications that connect frontend experience, business logic, and reliable data layers.</p>
                            </div>
                            <div>
                                <strong>Systems architecture</strong>
                                <p class="text-muted-soft mb-0">Practical designs for scalable services, integrations, and platform modernization.</p>
                            </div>
                            <div>
                                <strong>Database and workflow engineering</strong>
                                <p class="text-muted-soft mb-0">Structured data models, reporting foundations, and automation that reduces manual drag.</p>
                            </div>
                            <div>
                                <strong>UI and experience refinement</strong>
                                <p class="text-muted-soft mb-0">Interfaces that feel clearer, more polished, and more useful to the people actually using them.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="signature-panel">
                        <span class="section-eyebrow">Working style</span>
                        <p class="signature-quote">The strongest delivery usually happens when architecture, interface quality, and business constraints are considered together instead of being treated as separate tracks.</p>
                        <div class="process-list">
                            <div>
                                <strong>Clarity first</strong>
                                <p class="text-muted-soft mb-0">Translate complex systems into decisions teams and clients can understand quickly.</p>
                            </div>
                            <div>
                                <strong>Quality with momentum</strong>
                                <p class="text-muted-soft mb-0">Push projects forward without losing sight of maintainability and risk reduction.</p>
                            </div>
                            <div>
                                <strong>Modernization mindset</strong>
                                <p class="text-muted-soft mb-0">Improve old interfaces and static builds into better structured systems with room to grow.</p>
                            </div>
                            <div>
                                <strong>Outcome-oriented delivery</strong>
                                <p class="text-muted-soft mb-0">Technology choices are measured against value, reliability, usability, and future cost.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
