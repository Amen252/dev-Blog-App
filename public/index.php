<?php include __DIR__ . "/app/views/layouts/header.php"; ?>

<section class="hero">
  <div class="hero-grid">
    <div class="hero-content">
      <span class="badge">🚀 Built for Developers</span>
      <h1>Where Developers Share, Learn & Grow</h1>
      <p>Publish technical blogs, explore community knowledge, and build your developer brand.</p>
      <div class="hero-actions">
        <a href="/devblog/public/register.php" class="btn">Get Started</a>
        <a href="/devblog/public/blog.php" class="btn secondary">Explore Blogs</a>
      </div>
    </div>

    <div class="hero-image">
      <img src="/devblog/public/assets/images/hero.svg" alt="Developer illustration">
    </div>
  </div>
</section>

  <section class="why-cool">
  <div class="container text-center">
    <h2 class="why-title">Why DevBlog?</h2>
    <p class="why-sub">Everything you need to write, share, and grow as a developer.</p>

    <div class="row g-4 justify-content-center mt-4">

      <div class="col-md-6 col-lg-3">
        <div class="cool-card">
          <div class="cool-icon blue">
            <i data-lucide="trending-up"></i>
          </div>
          <h5>Grow your presence</h5>
          <p>Build your developer brand by sharing useful content.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="cool-card">
          <div class="cool-icon purple">
            <i data-lucide="edit-3"></i>
          </div>
          <h5>Write & manage blogs</h5>
          <p>Create, edit and manage blog posts from one dashboard.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="cool-card">
          <div class="cool-icon green">
            <i data-lucide="lock"></i>
          </div>
          <h5>Full ownership</h5>
          <p>You fully control your content anytime.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="cool-card">
          <div class="cool-icon orange">
            <i data-lucide="users"></i>
          </div>
          <h5>Healthy community</h5>
          <p>Admins keep the platform safe and professional.</p>
        </div>
      </div>

    </div>
  </div>
</section>


  <section class="mission-section">
  <div class="container nav-max">
    <div class="row align-items-center">

      <div class="col-lg-6 mb-4 mb-lg-0">
        <h2 class="fw-bold mb-4">Our Mission</h2>
        <p class="fs-5 opacity-75" style="max-width: 520px;">
          DevBlog exists to help developers learn by teaching,
          grow by sharing, and build their professional identity through meaningful content.
        </p>
      </div>

      <div class="col-lg-6 text-center">
        <img src="/devblog/public/assets/images/mission.svg"
             alt="Mission illustration"
             class="img-fluid"
             style="max-height: 360px;">
      </div>

    </div>
  </div>
</section>





<div class="footer-separator">

<footer class="footer">
  <div class="footer-grid">
    <div>
      <h4>DevBlog</h4>
      <p>A community blogging platform for developers.</p>
    </div>
    <div>
      <h4>Quick Links</h4>
      <a href="/devblog/public/index.php">Home</a>
      <a href="/devblog/public/blog.php">Blogs</a>
      <a href="/devblog/public/login.php">Login</a>
      <a href="/devblog/public/register.php">Register</a>
    </div>
    <div>
      <h4>Legal</h4>
      <a href="#">Privacy</a>
      <a href="#">Terms</a>
    </div>
  </div>
  <p class="footer-copy">© 2025 DevBlog. All rights reserved.</p>
</footer>
</div>

<?php include __DIR__ . "/app/views/layouts/footer.php"; ?>

<script>
  lucide.createIcons();
</script>
