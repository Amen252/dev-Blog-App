<?php 
// Go UP one level from 'public' to reach the 'app' folder
include __DIR__ . "/../app/views/layouts/header.php"; 
?>

<section class="latest-blogs-brutal">
  <div class="container nav-max">
    <div class="blog-header">
      <h2 class="brutal-title">01_LATEST_SHIPS</h2>
      <p class="brutal-subtitle">Fresh technical insights from the community.</p>
    </div>

    <div class="brutal-blog-grid">
      <?php for ($i=1; $i<=6; $i++): ?>
      <article class="brutal-blog-card">
        <div class="blog-top">
          <span class="brutal-badge">CMD+READ</span>
          <span class="blog-date">JAN 2026</span>
        </div>
        
        <div class="blog-main">
          <h3>Blog Title Example <?= $i ?></h3>
          <p>Exploring development trends and building your developer brand.</p>
        </div>

        <div class="blog-footer">
          <span class="author">by @Mohamed</span>
          <a href="#" class="read-btn">VIEW_POST →</a>
        </div>
      </article>
      <?php endfor; ?>
    </div>
  </div>
</section>

<?php 
// Go UP one level from 'public' to reach the 'app' folder
include __DIR__ . "/../app/views/layouts/footer.php"; 
?>