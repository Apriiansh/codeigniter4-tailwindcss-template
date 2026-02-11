<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Demo Form - CodeIgniter 4 + Tailwind CSS</title>
  <meta name="description" content="Demo form showcasing CodeIgniter 4 with beautiful Tailwind CSS styling">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/png" href="/favicon.ico">
  <!-- Google Fonts - Nunito -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <!-- STYLES -->
  <link href="/assets/css/output.css" rel="stylesheet">
</head>

<body class="min-h-screen bg-linear-to-br from-background via-background-secondary to-surface">

  <div class="min-h-screen flex flex-col lg:flex-row">

    <!-- Left Section: Tailwind CSS Features -->
    <div class="hidden lg:flex lg:w-1/2 bg-primary relative overflow-hidden">
      <div class="relative z-10 flex flex-col items-center justify-center w-full p-12 text-white">
        <img src="/logo.png" class="w-24 h-auto mb-6" alt="logo">

        <h2 class="text-3xl font-bold mb-4 text-center">Tailwind CSS Demo</h2>
        <p class="text-lg text-center text-white/90 mb-8">See utility classes in action</p>
        
        <!-- Tailwind Features List -->
        <div class="space-y-4 text-white/80">
          <div class="flex items-center space-x-3">
            <!-- Using: w-5 h-5 fill-currentColor -->
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
            </svg>
            <!-- Using: text-sm font-medium -->
            <span class="text-sm font-medium">Utility-first approach</span>
          </div>
          <div class="flex items-center space-x-3">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
            </svg>
            <!-- Using: responsive classes md:text-xl lg:text-2xl -->
            <span class="text-sm font-medium">Responsive design classes</span>
          </div>
          <div class="flex items-center space-x-3">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
            </svg>
            <!-- Using: custom @theme colors -->
            <span class="text-sm font-medium">Custom @theme colors</span>
          </div>
          <div class="flex items-center space-x-3">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
            </svg>
            <!-- Using: component classes .btn-primary .form-input -->
            <span class="text-sm font-medium">Component classes</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Right Section: Demo Form -->
    <div class="flex-1 flex items-center justify-center p-6 lg:p-12">
      <div class="w-full max-w-md">

        <!-- Mobile Header -->
        <div class="lg:hidden text-center mb-6">
          <img src="/logo.png" class="w-16 h-auto mx-auto mb-3" alt="logo">
          <h1 class="text-xl font-bold text-text-primary mb-1">Tailwind CSS Demo</h1>
          <p class="text-text-secondary text-sm">See utility classes in action</p>
        </div>

        <!-- Form Card: Using .card class from input.css -->
        <div class="card">

          <!-- Header: Using text utility classes -->
          <div class="mb-8">
            <h2 class="text-2xl font-bold text-text-primary mb-2">Contact Form Demo</h2>
            <p class="text-text-secondary">Built with Tailwind CSS utility classes and custom components</p>
          </div>

          <!-- Success Alert: Using .alert .alert-success classes -->
          <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success mb-6">
              <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
              <?= session()->getFlashdata('success') ?>
            </div>
          <?php endif ?>

          <!-- Error Alert -->
          <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-error mb-6">
              <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
              <?= session()->getFlashdata('error') ?>
            </div>
          <?php endif ?>

          <!-- Demo Form: Using component classes and utilities -->
          <form action="<?= url_to('demo.form') ?>" method="post" class="space-y-4">
            <?= csrf_field() ?>

            <!-- Name Field: Using .form-group .form-label .form-input classes -->
            <div class="form-group">
              <label for="name" class="form-label">Full Name</label>
              <input
                type="text"
                name="name"
                id="name"
                value="<?= old('name') ?>"
                class="form-input <?= (session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['name'])) ? 'form-input-error' : '' ?>"
                placeholder="Enter your full name"
                required>
              <?php if (session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['name'])) : ?>
                <p class="form-error-message">
                  <?= session()->getFlashdata('errors')['name'] ?>
                </p>
              <?php endif ?>
            </div>

            <!-- Email Field -->
            <div class="form-group">
              <label for="email" class="form-label">Email Address</label>
              <input
                type="email"
                name="email"
                id="email"
                value="<?= old('email') ?>"
                class="form-input <?= (session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['email'])) ? 'form-input-error' : '' ?>"
                placeholder="Enter your email address"
                required>
              <?php if (session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['email'])) : ?>
                <p class="form-error-message">
                  <?= session()->getFlashdata('errors')['email'] ?>
                </p>
              <?php endif ?>
            </div>

            <!-- Message Field -->
            <div class="form-group">
              <label for="message" class="form-label">Message</label>
              <textarea
                name="message"
                id="message"
                rows="4"
                class="form-input <?= (session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['message'])) ? 'form-input-error' : '' ?>"
                placeholder="Write your message here..."><?= old('message') ?></textarea>
              <?php if (session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['message'])) : ?>
                <p class="form-error-message">
                  <?= session()->getFlashdata('errors')['message'] ?>
                </p>
              <?php endif ?>
            </div>

            <!-- Submit Button: Using .btn-primary class -->
            <button type="submit" class="btn-primary py-3 text-base font-semibold">
              Submit Demo Form
            </button>
          </form>
        </div>

        <!-- Back to Home: Using .link-secondary class -->
        <div class="text-center mt-6">
          <a href="/" class="link-secondary text-sm inline-flex items-center gap-1">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Back to Landing Page
          </a>
        </div>
      </div>
    </div>
  </div>

</body>

</html>