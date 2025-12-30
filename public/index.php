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


<section class="features-section">
  <div class="features-container">

    <h2 class="features-title">Why DevBlog?</h2>
    <p class="features-subtitle">Everything you need to write, share, and grow as a developer.</p>

    <div class="features-grid">

      <div class="feature-item">
        <div class="feature-icon purple"><i data-lucide="trending-up"></i></div>
        <div>
          <h3>Grow your presence</h3>
          <p>Build your developer brand by sharing useful technical content.</p>
        </div>
      </div>

      <div class="feature-item">
        <div class="feature-icon blue"><i data-lucide="book"></i></div>
        <div>
          <h3>Write & manage blogs</h3>
          <p>Create, edit, and manage your blog posts from one simple dashboard.</p>
        </div>
      </div>

      <div class="feature-item">
        <div class="feature-icon green"><i data-lucide="lock"></i></div>
        <div>
          <h3>Full ownership</h3>
          <p>You fully control your content and can edit or delete anytime.</p>
        </div>
      </div>

      <div class="feature-item">
        <div class="feature-icon orange"><i data-lucide="users"></i></div>
        <div>
          <h3>Healthy community</h3>
          <p>Admins ensure a safe, professional, and valuable developer space.</p>
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



<section class="how-section">
  <div class="container nav-max">
    <div class="how-header">
      <h2>How It Works</h2>
      <p>Start using DevBlog in a few simple steps.</p>
    </div>

    <div class="how-flow grid">
  <div class="how-step">
    <span class="how-number">01</span>
    <div>
      <h4>Create your account</h4>
      <p>Sign up and personalize your developer profile.</p>
    </div>
  </div>

  <div class="how-step">
    <span class="how-number">02</span>
    <div>
      <h4>Write meaningful content</h4>
      <p>Share tutorials, insights, and your learning journey.</p>
    </div>
  </div>

  <div class="how-step">
    <span class="how-number">03</span>
    <div>
      <h4>Share with the community</h4>
      <p>Help others grow while gaining visibility.</p>
    </div>
  </div>

  <div class="how-step">
    <span class="how-number">04</span>
    <div>
      <h4>Build your professional presence</h4>
      <p>Grow your network and showcase your expertise.</p>
    </div>
  </div>
</div>

  </div>
</section>


<?php include __DIR__ . "/app/views/layouts/footer.php"; ?>

<script>
  lucide.createIcons();
</script>
