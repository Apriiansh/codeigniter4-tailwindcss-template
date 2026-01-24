<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <meta name="description" content="Login to Template CI4">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/png" href="/favicon.ico">
  <!-- STYLES -->
  <link href="/css/output.css" rel="stylesheet">
</head>

<body class="min-h-screen bg-linear-to-br from-background via-background-secondary to-surface">

  <div class="min-h-screen flex flex-col lg:flex-row">

    <!-- Left Section - Visual/Branding (Hidden on Mobile) -->
    <div class="hidden lg:flex lg:w-1/2 bg-linear-to-br from-primary to-blue-700 relative overflow-hidden">
      <!-- Decorative Background Pattern -->
      <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full translate-x-1/2 translate-y-1/2"></div>
      </div>

      <!-- Content -->
      <div class="relative z-10 flex flex-col items-center justify-center w-full p-12 text-white">
        <img src="/logo.png" class="w-32 h-auto mb-8 drop-shadow-lg" alt="logo">

        <h2 class="text-4xl font-bold mb-4 text-center">Template CI4</h2>
        <p class="text-xl text-center mb-8 text-white/90">Tailwind CLI and Shield are integrated</p>

        <!-- Animated Illustration Container -->
        <div class="w-full max-w-md aspect-square bg-white/10 backdrop-blur-sm rounded-2xl p-8 flex items-center justify-center">

          <div class="tenor-gif-embed" data-postid="11157824601050747846" data-share-method="host" data-aspect-ratio="0.891566" data-width="100%"><a href="https://tenor.com/view/shrek-shrek-rizz-rizz-gif-11157824601050747846">Shrek Shrek Rizz GIF</a>from <a href="https://tenor.com/search/shrek-gifs">Shrek GIFs</a></div>
          <script type="text/javascript" async src="https://tenor.com/embed.js"></script>

        </div>
      </div>
    </div>

    <!-- Right Section - Login Form -->
    <div class="flex-1 flex items-center justify-center p-6 lg:p-12">
      <div class="w-full max-w-md">

        <!-- Mobile Logo (hidden on large screens) -->
        <div class="lg:hidden text-center mb-8">
          <img src="/logo.png" class="w-20 h-auto mx-auto mb-4" alt="logo">
          <h1 class="text-2xl font-bold text-text-primary mb-1">Template CI4</h1>
          <p class="text-text-secondary text-sm">Tailwind CLI and Shield are integrated</p>
        </div>

        <!-- Login Card -->
        <div class="bg-white rounded-2xl shadow-xl p-8 border border-secondary/10">

          <!-- Header -->
          <div class="mb-8">
            <h2 class="text-2xl font-bold text-text-primary mb-2">Welcome</h2>
            <p class="text-text-secondary">Please log in to your account</p>
          </div>

          <!-- Error Alert -->
          <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-error mb-6">
              <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
              <?= session()->getFlashdata('error') ?>
            </div>
          <?php endif ?>

          <!-- Success Alert -->
          <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success mb-6">
              <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
              <?= session()->getFlashdata('success') ?>
            </div>
          <?php endif ?>

          <!-- Login Form -->
          <form action="<?= url_to('login') ?>" method="post" class="space-y-5">
            <?= csrf_field() ?>

            <!-- Username/Email Field -->
            <div class="form-group">
              <label for="login" class="form-label">
                <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
                Username atau Email
              </label>
              <input
                type="text"
                name="login"
                id="login"
                value="<?= old('login') ?>"
                class="form-input <?= (session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['login'])) ? 'form-input-error' : '' ?>"
                placeholder="Masukkan username atau email"
                required>
              <?php if (session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['login'])) : ?>
                <p class="form-error-message">
                  <?= session()->getFlashdata('errors')['login'] ?>
                </p>
              <?php endif ?>
            </div>

            <!-- Password Field -->
            <div class="form-group">
              <label for="password" class="form-label">
                <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                </svg>
                Password
              </label>
              <input
                type="password"
                name="password"
                id="password"
                class="form-input <?= (session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['password'])) ? 'form-input-error' : '' ?>"
                placeholder="Masukkan password"
                required>
              <?php if (session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['password'])) : ?>
                <p class="form-error-message">
                  <?= session()->getFlashdata('errors')['password'] ?>
                </p>
              <?php endif ?>
            </div>

            <!-- Remember Me & Forgot Password -->
            <div class="flex items-center justify-between">
              <div class="flex items-center">
                <input
                  id="remember"
                  name="remember"
                  type="checkbox"
                  class="form-checkbox">
                <label for="remember" class="form-checkbox-label">
                  Ingat saya
                </label>
              </div>

              <!-- <a href="/forgot-password" class="text-sm link-primary">
                Forgot password?
              </a> -->
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn-primary py-3 text-base font-semibold">
              Login
            </button>
          </form>

          <!-- Divider -->
          <div class="relative my-6">
            <div class="absolute inset-0 flex items-center">
              <div class="w-full border-t border-secondary/20"></div>
            </div>
            <div class="relative flex justify-center text-sm">
              <span class="px-4 bg-white text-text-muted">atau</span>
            </div>
          </div>

          <!-- Register Link -->
          <!-- <div class="text-center">
            <p class="text-text-secondary">
              Don't have an account?
              <a href="/register" class="link-primary font-semibold">register</a>
            </p>
          </div> -->
        </div>

        <!-- Back to Home -->
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