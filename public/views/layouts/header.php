<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevBlog | For Developers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php $base = "/devblog/public"; ?>

<header class="glass-nav">
  <nav class="navbar navbar-expand-lg">
    <div class="container nav-max px-4">

      <a class="navbar-brand d-flex align-items-center gap-2" href="<?= $base ?>/index.php">
        <span class="brand-icon">
          <i data-lucide="code"></i>
        </span>
        <div class="d-flex flex-column">
            <span class="logo">DevBlog</span>
            <span class="tagline d-none d-sm-inline">for Developers</span>
        </div>
      </a>

      <button class="navbar-toggler border-0 fs-3" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
         <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="mainNav">
        <ul class="navbar-nav align-items-lg-center gap-lg-3 mt-3 mt-lg-0">
          <li class="nav-item"><a class="nav-link" href="<?= $base ?>/index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= $base ?>/blog.php">Blogs</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= $base ?>/contact.php">Contact Us</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= $base ?>/login.php">Login</a></li>
          <li class="nav-item">
            <a class="btn btn-primary ms-lg-3" href="<?= $base ?>/register.php">Register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>