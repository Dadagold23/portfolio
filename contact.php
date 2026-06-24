<?php

declare(strict_types=1);

require_once __DIR__ . '/config/app.php';

$pageTitle = 'Contact | ' . $site['name'];
$pageDescription = 'Get in touch about software engineering, UI revamps, architecture, or collaboration.';
$activePage = 'contact';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim((string) ($_POST['name'] ?? ''));
    $email = trim((string) ($_POST['email'] ?? ''));
    $subject = trim((string) ($_POST['subject'] ?? ''));
    $message = trim((string) ($_POST['message'] ?? ''));

    if ($name === '' || $email === '' || $subject === '' || $message === '') {
        set_flash('danger', 'Please complete all fields before sending your message.');
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        set_flash('danger', 'Please provide a valid email address.');
    } else {
        $pdo = db_connection();

        if ($pdo === null) {
            set_flash('warning', 'The form is PHP-ready, but the database connection is not configured yet. Create the database from `database/schema.sql` and confirm your DB credentials.');
        } else {
            try {
                $statement = $pdo->prepare('
                    INSERT INTO contact_messages (name, email, subject, message)
                    VALUES (:name, :email, :subject, :message)
                ');
                $statement->execute([
                    ':name' => $name,
                    ':email' => $email,
                    ':subject' => $subject,
                    ':message' => $message,
                ]);

                set_flash('success', 'Your message has been saved successfully. Thank you for reaching out.');
                header('Location: contact.php');
                exit;
            } catch (Throwable $exception) {
                set_flash('danger', 'The database connection works only if the `contact_messages` table exists. Import `database/schema.sql` to finish setup.');
            }
        }
    }
}

$flash = get_flash();

require __DIR__ . '/includes/header.php';
?>
<main>
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-card" data-aos="fade-up">
                <p class="crumbs mb-2">Home / Contact</p>
                <span class="section-eyebrow">Start the conversation</span>
                <h1 class="section-title mt-3">Let's talk about your next build, redesign, or system upgrade.</h1>
                <p class="lead mb-0">The contact flow is now ready to support your project conversations and store your messages in our Database for quick access and communication to you once the included message is sent.<br><br>Thanks Warm Regard</p>
            </div>
        </div>
    </section>

    <section class="section-pad">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-5" data-aos="fade-right">
                    <div class="contact-card">
                        <div class="contact-visual mb-4">
                            <div class="media-frame medium">
                                <img src="assets/img/conta.webp" alt="Contact and collaboration">
                            </div>
                            <div class="visual-grid-two">
                                <div class="media-frame short">
                                    <img src="assets/img/web-application.webp" alt="Web application support">
                                </div>
                                <div class="media-frame short">
                                    <img src="assets/img/whatsapp-icon.jpg" alt="WhatsApp contact">
                                </div>
                            </div>
                        </div>
                        <span class="section-eyebrow">Reach out directly</span>
                        <h2 class="section-title h3 mt-3">Bring a project idea, redesign need, or architecture challenge.</h2>
                        <p class="text-muted-soft">Whether the goal is a complete software platform, a UI revamp, or better backend and database structure, this is the cleanest next step.</p>
                        <div class="mt-4">
                            <div class="d-flex gap-3 mb-3">
                                <div class="contact-icon"><i class="bi bi-envelope"></i></div>
                                <div>
                                    <strong>Email</strong>
                                    <p class="mb-0"><a class="text-muted-soft text-decoration-none hover-link" href="mailto:<?= e($site['email']); ?>"><?= e($site['email']); ?></a></p>
                                    <p class="mb-0"><a class="text-muted-soft text-decoration-none hover-link" href="mailto:mirrorageconcepts@gmail.com">mirrorageconcepts@gmail.com</a></p>
                                    <p class="mb-0"><a class="text-muted-soft text-decoration-none hover-link" href="mailto:eng.matinsolatald@gmail.com">eng.matinsolatald@gmail.com</a></p>
                                    <p class="mb-0"><a class="text-muted-soft text-decoration-none hover-link" href="mailto:matinsola4luv@yahoo.com">matinsola4luv@yahoo.com</a></p>
                                </div>
                            </div>
                            <div class="d-flex gap-3 mb-3">
                                <div class="contact-icon"><i class="bi bi-telephone"></i></div>
                                <div>
                                    <strong>Phone</strong>
                                    <p class="mb-0"><a class="text-muted-soft text-decoration-none hover-link" href="tel:<?= str_replace(' ', '', $site['phone']); ?>"><?= e($site['phone']); ?></a></p>
                                    <p class="mb-0"><a class="text-muted-soft text-decoration-none hover-link" href="tel:+234 902 229 5511">+234 902 229 5511</a></p>
                                    <p class="mb-0"><a class="text-muted-soft text-decoration-none hover-link" href="tel:+234 813 009 5597">+234 813 009 5597</a></p>
                                </div>
                            </div>
                            <div class="d-flex gap-3">
                                <div class="contact-icon"><i class="bi bi-geo-alt"></i></div>
                                <div>
                                    <strong>Location</strong>
                                    <p class="mb-0 text-muted-soft"><?= e($site['location']); ?></p>
                                </div>
                            </div>
                        </div>
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
                <div class="col-lg-7" data-aos="fade-left">
                    <div class="contact-card">
                        <?php if ($flash): ?>
                            <div class="alert alert-<?= e($flash['type']); ?>"><?= e($flash['message']); ?></div>
                        <?php endif; ?>
                        <div class="smart-toolbar smart-toolbar-stack mb-4" data-aos="fade-up">
                            <div class="smart-toolbar-copy">Quick start your inquiry:</div>
                            <div class="smart-filter-group">
                                <button type="button" class="smart-chip" data-subject-preset="Portfolio UI Revamp" data-message-preset="I want to discuss a premium UI revamp for my website or portfolio.">UI revamp</button>
                                <button type="button" class="smart-chip" data-subject-preset="Software Engineering Project" data-message-preset="I want to discuss a software engineering project and the best implementation approach.">Software build</button>
                                <button type="button" class="smart-chip" data-subject-preset="Systems Architecture Consultation" data-message-preset="I need help with systems architecture, platform structure, or integration planning.">Architecture</button>
                                <button type="button" class="smart-chip" data-subject-preset="Project Management and QA Support" data-message-preset="I want to discuss project management, QA/QC, or broader delivery support for an active project.">PM / QA</button>
                            </div>
                        </div>
                        <form class="contact-form" method="post" action="contact.php" novalidate>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label fw-semibold">Full name</label>
                                    <input id="name" name="name" type="text" class="form-control" value="<?= e(old('name')); ?>" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label fw-semibold">Email address</label>
                                    <input id="email" name="email" type="email" class="form-control" value="<?= e(old('email')); ?>" required>
                                </div>
                                <div class="col-12">
                                    <label for="subject" class="form-label fw-semibold">Project subject</label>
                                    <input id="subject" name="subject" type="text" class="form-control" value="<?= e(old('subject')); ?>" required>
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label fw-semibold">Message</label>
                                    <textarea id="message" name="message" class="form-control" rows="8" required><?= e(old('message')); ?></textarea>
                                </div>
                                <div class="col-12 d-flex flex-wrap gap-3 align-items-center">
                                    <button class="btn btn-main" type="submit">Send message</button>
                                    <a class="btn btn-outline-main" href="<?= e($site['whatsapp']); ?>" target="_blank" rel="noreferrer">Chat on WhatsApp</a>
                                </div>
                            </div>
                        </form>
                        <div class="mt-4 p-3 rounded-4" style="background: var(--primary-soft); border: 1px dashed var(--line);">
                            <h6 class="mb-1 fw-bold text-primary" style="font-size: 0.95rem;"><i class="bi bi-lightning-charge-fill"></i> Direct Engagement Promise</h6>
                            <p class="small text-muted-soft mb-0" style="font-size: 0.82rem; line-height: 1.4;">You will collaborate directly with Engr. Dada. No middleware or agencies. Expect a prompt response and analysis of your project request within one business day.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
