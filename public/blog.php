<?php include __DIR__ . "/app/views/layouts/header.php"; ?>

<section class="py-5 bg-light">
  <div class="container nav-max">
    <h2 class="fw-bold mb-4 text-center">Latest Blogs</h2>

    <div class="row g-4">

      <?php for ($i=1; $i<=6; $i++): ?>
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body">
            <h5 class="fw-semibold">Blog title <?= $i ?></h5>
            <p class="text-muted small">by Mohamed • Dec 2025</p>
            <p class="text-muted">
              Short description of the blog post goes here to preview the content.
            </p>
            <a href="#" class="text-primary fw-semibold">Read more →</a>
          </div>
        </div>
      </div>
      <?php endfor; ?>

    </div>
  </div>
</section>

<?php include __DIR__ . "/app/views/layouts/footer.php"; ?>
