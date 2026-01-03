<?php
// Since index.php is in the 'public' folder, we look for 'views' in the same folder
include 'views/layouts/header.php'; 
?>

<section class="hero">
  <div class="hero-grid">
    <div class="hero-content">
      <span class="badge">🚀 Built for Developers</span>
      <h1>Where Developers Share, Learn & Grow</h1>
      <p>Publish technical blogs, explore community knowledge, and build your developer brand.</p>
      <div class="hero-actions">
        <a href="register.php" class="btn">Get Started</a>
        <a href="blog.php" class="btn secondary">Explore Blogs</a>
      </div>
    </div>

    <div class="hero-image">
      <img src="assets/images/hero.svg" alt="Developer illustration">
    </div>
  </div>
</section>
<section class="features-section">
  <div class="features-container">
    <h2 class="features-title">The Platform for <span class="gradient-text">Modern Developers</span></h2>
    <p class="features-subtitle">Everything you need to write, share, and grow your digital footprint in one place.</p>

    <div class="bento-grid">
      <div class="bento-card card-large">
        <div class="card-content">
          <h3>Write & manage</h3>
          <p>A seamless markdown-ready editor to keep your blog posts sleek, professional, and organized.</p>
        </div>
        <i data-lucide="laptop" class="bento-bg-icon blue-text"></i>
      </div>

      <div class="bento-card card-small">
        <div class="card-icon-top purple">
          <i data-lucide="trending-up"></i>
        </div>
        <div class="card-content">
          <h3>Grow your presence</h3>
          <p>Build your brand by sharing technical content with a global audience.</p>
        </div>
      </div>

      <div class="bento-card card-small">
        <div class="card-icon-top green">
          <i data-lucide="shield-check"></i>
        </div>
        <div class="card-content">
          <h3>Full ownership</h3>
          <p>You control your data. Edit, export, or delete your content anytime.</p>
        </div>
      </div>

      <div class="bento-card card-large">
        <div class="card-content">
          <h3>Dev-First Space</h3>
          <p>No fluff, no noise. Just a high-quality community focused on pure technical knowledge.</p>
        </div>
        <i data-lucide="users" class="bento-bg-icon orange-text"></i>
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
        <img src="assets/images/mission.svg" alt="Mission illustration" class="img-fluid" style="max-height: 360px;">
      </div>
    </div>
  </div>
</section>
<section class="how-section-split">
  <div class="container nav-max split-wrapper">
    <div class="split-sidebar">
      <span class="badge">The Process</span>
      <h2 class="split-title">From Code to <br><span class="gradient-text">Influence</span></h2>
      <p class="split-desc">Building your developer brand shouldn't be a full-time job. We made it a workflow.</p>
    </div>

    <div class="split-content">
      <div class="modern-step">
        <div class="step-header">
          <span class="step-num">01</span>
          <h4>Create your account</h4>
        </div>
        <p>Sign up and personalize your developer profile. Link your GitHub and social handles to centralize your professional identity.</p>
      </div>

      <div class="modern-step">
        <div class="step-header">
          <span class="step-num">02</span>
          <h4>Write meaningful content</h4>
        </div>
        <p>Share tutorials, insights, and your learning journey. Our markdown editor is optimized for code snippets and technical clarity.</p>
      </div>

      <div class="modern-step">
        <div class="step-header">
          <span class="step-num">03</span>
          <h4>Share with the community</h4>
        </div>
        <p>Distribute your knowledge. Engage with other developers through comments and collaborative learning to gain visibility.</p>
      </div>

      <div class="modern-step">
        <div class="step-header">
          <span class="step-num">04</span>
          <h4>Build your presence</h4>
        </div>
        <p>Grow your network and showcase your expertise. Watch your influence grow as your posts reach thousands of developers.</p>
      </div>
    </div>
  </div>
</section>


<?php include 'views/layouts/footer.php'; ?>

<script src="https://unpkg.com/lucide@latest"></script>
<script>
  lucide.createIcons();
</script>