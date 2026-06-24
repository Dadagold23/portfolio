<?php

declare(strict_types=1);
?>
    <footer class="site-footer">
      <div class="container">
        <div class="footer-panel">
          <div class="footer-cta" data-aos="fade-up">
            <div>
              <span class="section-eyebrow text-light">Build with clarity</span>
              <h3 class="footer-title">Let's build software that feels sharp, dependable, and ready to scale.</h3>
            </div>
            <a class="footer-cta-link" href="contact.php">Start a conversation</a>
          </div>
          <div class="row g-4 align-items-start mt-1">
            <div class="col-lg-5">
              <p class="footer-copy mb-0">A refined portfolio presentation for a senior software engineer focused on architecture, modernization, product delivery, and reliable execution.</p>
            </div>
            <div class="col-lg-3">
              <p class="footer-label">Navigate</p>
              <div class="footer-links">
                <a href="about.php">About</a>
                <a href="portfolio.php">Portfolio</a>
                <a href="services.php">Services</a>
                <a href="contact.php">Contact</a>
              </div>
            </div>
            <div class="col-lg-3">
              <p class="footer-label">Connect</p>
              <p class="footer-contact mb-2"><?= e($site['email']); ?></p>
              <p class="footer-contact mb-3"><?= e($site['phone']); ?></p>
              <div class="social-links">
                <a href="<?= e($site['linkedin']); ?>" target="_blank" rel="noreferrer" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                <a href="<?= e($site['github']); ?>" target="_blank" rel="noreferrer" aria-label="GitHub"><i class="bi bi-github"></i></a>
                <a href="mailto:<?= e($site['email']); ?>" aria-label="Email"><i class="bi bi-envelope"></i></a>
                <a href="<?= e($site['whatsapp']); ?>" target="_blank" rel="noreferrer" aria-label="WhatsApp"><i class="bi bi-whatsapp"></i></a>
              </div>
            </div>
            <div class="col-lg-1">
              <p class="footer-label">Base</p>
              <p class="footer-contact mb-0"><?= e($site['location']); ?></p>
            </div>
          </div>
          <div class="footer-meta">
            <small>&copy; <?= e(current_year()); ?> <?= e($site['name']); ?>. All rights reserved.</small>
            <small>Software engineering, systems architecture, and UI modernization.</small>
          </div>
        </div>
      </div>
    </footer>

    <button type="button" class="chat-toggle" data-chat-toggle>
      <i class="bi bi-chat-dots"></i> Project guide
    </button>
    <div class="chat-widget glass-card" data-chat-widget>
      <div class="chat-header">
        <div>
          <strong>Portfolio Guide</strong>
          <div class="small opacity-75">Ask about projects, services, or next steps.</div>
        </div>
        <button type="button" class="btn btn-sm btn-light" data-chat-close aria-label="Close assistant"><i class="bi bi-x-lg"></i></button>
      </div>
      <div class="chat-body" data-chat-body>
        <div class="chat-message bot"><span>Hello. I can help you review services, featured work, and how to get a project started.</span></div>
        <div class="chat-suggestions" data-chat-suggestions>
          <button type="button" data-suggestion="What services do you offer?">Services</button>
          <button type="button" data-suggestion="Tell me about your projects.">Featured Work</button>
          <button type="button" data-suggestion="How can I contact you?">Contact info</button>
          <button type="button" data-suggestion="Tell me about your experience.">Experience</button>
        </div>
      </div>
      <div class="chat-footer">
        <div class="input-group">
          <input type="text" class="form-control" data-chat-input placeholder="Ask a quick question">
          <button type="button" class="btn btn-light rounded-pill px-3" data-chat-send>Send</button>
        </div>
      </div>
    </div>

    <a class="whatsapp-float" href="<?= e($site['whatsapp']); ?>" target="_blank" rel="noreferrer" aria-label="Open WhatsApp">
      <i class="bi bi-whatsapp"></i>
    </a>
    <button type="button" class="scroll-top" data-scroll-top aria-label="Back to top">
      <i class="bi bi-arrow-up"></i>
    </button>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>
