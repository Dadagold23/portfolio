<?php

declare(strict_types=1);

require_once __DIR__ . '/config/app.php';

$pageTitle = 'Portfolio | ' . $site['name'];
$pageDescription = 'Selected projects and solution areas delivered by Engr. Abdullateef Olalekan Dada.';
$activePage = 'portfolio';

require __DIR__ . '/includes/header.php';
?>
<main>
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-card" data-aos="fade-up">
                <p class="crumbs mb-2">Home / Portfolio</p>
                <span class="section-eyebrow">Selected case directions</span>
                <h1 class="section-title mt-3">A portfolio of systems, products, and modernization work.</h1>
                <p class="lead mb-0">Discover software designs, automation scripts, and database integrations built for growth and stability.</p>
            </div>
        </div>
    </section>

    <section class="section-pad">
        <div class="container">
            <div class="divi-section-head" data-aos="fade-up">
                <span class="section-eyebrow">Project showcase</span>
                <h2 class="section-title mt-3">Selected case directions across retail, education, and platform infrastructure.</h2>
                <p class="section-lead mb-0">Explore engineering delivery and solutions optimized for performance, scalability, and usability.</p>
            </div>
            <div class="smart-toolbar" data-smart-toolbar data-aos="fade-up">
                <div class="smart-filter-group" data-filter-group>
                    <button type="button" class="smart-chip is-active" data-filter="all">All work</button>
                    <?php foreach (array_unique(array_column($site['projects'], 'tag')) as $tag): ?>
                        <?php $filterKey = strtolower((string) preg_replace('/[^a-z0-9]+/i', '-', $tag)); ?>
                        <button type="button" class="smart-chip" data-filter="<?= e($filterKey); ?>"><?= e($tag); ?></button>
                    <?php endforeach; ?>
                </div>
                <div class="smart-toolbar-copy">Filter the gallery by solution area.</div>
            </div>
            <div class="showcase-grid" data-filter-grid>
                <?php foreach (array_chunk($site['projects'], 2) as $rowIndex => $projectGroup): ?>
                    <div class="showcase-row">
                        <?php foreach ($projectGroup as $index => $project): ?>
                            <?php $filterKey = strtolower((string) preg_replace('/[^a-z0-9]+/i', '-', $project['tag'])); ?>
                            <article class="project-card" data-filter-item data-category="<?= e($filterKey); ?>" data-aos="zoom-in" data-aos-delay="<?= (($rowIndex * 2) + $index + 1) * 80; ?>">
                                <div class="project-media">
                                    <img src="<?= e($project['image']); ?>" alt="<?= e($project['title']); ?>">
                                </div>
                                <span class="project-tag"><?= e($project['tag']); ?></span>
                                <h3 class="h3 mt-3"><?= e($project['title']); ?></h3>
                                <p class="text-muted-soft"><?= e($project['text']); ?></p>
                                <div class="project-meta">
                                    <span>Role: strategy, design, engineering</span>
                                </div>
                                <a href="contact.php" class="portfolio-action">Discuss similar project <i class="bi bi-arrow-right"></i></a>
                            </article>
                        <?php endforeach; ?>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="smart-empty-state is-hidden" data-filter-empty>
                <strong>No matching projects</strong>
                <p class="mb-0 text-muted-soft">Try another filter to explore a different solution area.</p>
            </div>
        </div>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
