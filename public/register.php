<?php include __DIR__ . "/app/views/layouts/header.php"; ?>

<section class="min-vh-100 d-flex align-items-center bg-light">
  <div class="container nav-max">
    <div class="row g-0 shadow-lg rounded-4 overflow-hidden">

      <!-- Left Image -->
      <div class="col-lg-6 d-none d-lg-flex align-items-center justify-content-center bg-primary text-white p-5">
        <div class="text-center">
          <h2 class="fw-bold mb-3">Join DevBlog 🚀</h2>
          <p class="fs-5 opacity-75">
            Create your account and start sharing your knowledge with the world.
          </p>
          <img src="<?= $base ?>/assets/images/register.svg " class="img-fluid mt-4" style="max-height:280px;">
        </div>
      </div>

      <!-- Right Form -->
      <div class="col-lg-6 bg-white p-5">
        <h3 class="fw-bold mb-2">Create your account</h3>
        <p class="text-muted mb-4">It only takes a minute to get started.</p>

        <form>
          <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" class="form-control form-control-lg" placeholder="Your name">
          </div>

          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control form-control-lg" placeholder="you@example.com">
          </div>

          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control form-control-lg" placeholder="Create a password">
          </div>

          <button class="btn btn-primary w-100 py-2 mt-2">Create account</button>
        </form>

        <p class="text-center mt-4 text-muted">
          Already have an account?
          <a href="<?= $base ?>/login.php" class="fw-semibold text-primary">Login</a>
        </p>
      </div>

    </div>
  </div>
</section>

<?php include __DIR__ . "/app/views/layouts/footer.php"; ?>
