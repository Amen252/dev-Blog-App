<?php $base = "/devblog/public"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>DevBlog</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Your CSS -->
  <link rel="stylesheet" href="<?= $base ?>/assets/css/style.css">

  <!-- Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>

<header class="glass-nav">
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid nav-max px-4">

      <!-- Logo -->
      <a class="navbar-brand d-flex align-items-baseline gap-2" href="<?= $base ?>/index.php">
        <span class="logo">DevBlog</span>
        <span class="tagline">for Developers</span>
      </a>

      <!-- Mobile Toggle -->
      <button class="navbar-toggler border-0 fs-3" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
        ☰
      </button>

      <!-- Menu -->
      <div class="collapse navbar-collapse justify-content-center" id="mainNav">
        <ul class="navbar-nav align-items-lg-center gap-lg-3 mt-3 mt-lg-0">

          <li class="nav-item">
            <a class="nav-link" href="<?= $base ?>/index.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?= $base ?>/blog.php">Blogs</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?= $base ?>/login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= $base ?>/contact.php">Contact Us</a>
          </li>

          <li class="nav-item">
            <a class="btn btn-primary ms-lg-3" href="<?= $base ?>/register.php">
              Get Started
            </a>
          </li>

        </ul>
      </div>

    </div>
  </nav>
</header>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
