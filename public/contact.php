<?php include __DIR__ . "/app/views/layouts/header.php"; ?>
<section class="py-5 bg-soft-primary">
  <div class="container nav-max">
    <div class="row align-items-center g-5">

      <!-- Left Content -->
      <div class="col-lg-5">
        <h2 class="fw-bold mb-3">Contact Us</h2>
        <p class="text-muted fs-5 mb-4">
          Have a question, suggestion, or feedback? We'd love to hear from you.
          Reach out and the DevBlog team will respond as soon as possible.
        </p>

        <div class="mt-4">
          <p class="mb-2"><strong>Email:</strong> support@devblog.com</p>
          <p class="mb-2"><strong>Location:</strong> Mogadishu, Somalia</p>
          <p class="mb-2"><strong>Response time:</strong> Within 24 hours</p>
        </div>
      </div>

      <!-- Right Form -->
      <div class="col-lg-7">
        <div class="bg-white shadow-sm rounded-4 p-4 p-md-5">
          <form>
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label">Full Name</label>
                <input type="text" class="form-control form-control-lg" placeholder="Your name">
              </div>

              <div class="col-md-6">
                <label class="form-label">Email</label>
                <input type="email" class="form-control form-control-lg" placeholder="you@example.com">
              </div>

              <div class="col-12">
                <label class="form-label">Subject</label>
                <input type="text" class="form-control form-control-lg" placeholder="Subject">
              </div>

              <div class="col-12">
                <label class="form-label">Message</label>
                <textarea rows="5" class="form-control form-control-lg" placeholder="Write your message..."></textarea>
              </div>

              <div class="col-12">
                <button class="btn btn-primary px-5 py-2 mt-2">Send Message</button>
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>
<?php include __DIR__ . "/app/views/layouts/footer.php"; ?>