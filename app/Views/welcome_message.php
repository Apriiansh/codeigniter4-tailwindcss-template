<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CodeIgniter 4 + Tailwind CSS - Modern Framework</title>
    <meta name="description" content="CodeIgniter 4 Template with beautiful Tailwind CSS styling and responsive design">
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

    <!-- Navigation -->
    <nav class="bg-white/80 backdrop-blur-md border-b border-secondary/10 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-3">
                    <img src="https://media.tenor.com/zEAQG4xs1v8AAAAe/ketik-mengetik.png" class="w-8 h-8" alt="logo">
                    <span class="font-bold text-xl text-text-primary">CodeIgniter 4</span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#features" class="text-text-secondary hover:text-primary transition-colors">Features</a>
                    <a href="#about" class="text-text-secondary hover:text-primary transition-colors">About</a>
                    <a href="/demo/form" class="btn-primary text-sm px-4 py-2">Demo Form</a>
                </div>
                <div class="md:hidden">
                    <a href="/demo/form" class="btn-primary text-sm px-4 py-2">Demo Form</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-32">
            <div class="text-center">
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-primary/10 text-primary text-sm font-medium mb-8">
                    <span class="w-2 h-2 bg-primary rounded-full mr-2"></span>
                    Modern Web Framework
                </div>

                <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-text-primary mb-6 leading-tight">
                    Build Amazing
                    <span class="text-primary">Web Apps</span>
                    <br>
                    with CodeIgniter 4
                </h1>

                <p class="text-xl md:text-2xl text-text-secondary mb-8 max-w-3xl mx-auto leading-relaxed">
                    A powerful combination of CodeIgniter 4 and Tailwind CSS.
                    See how beautiful, responsive web applications are built with modern CSS framework.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="/demo/form" class="btn-primary px-8 py-4 text-lg font-semibold">
                        Try Demo Form
                    </a>
                    <a href="#features" class="btn-success px-8 py-4 text-lg font-semibold">
                        Learn More
                    </a>
                </div>
            </div>
        </div>

        <!-- Background Decoration -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden -z-10">
            <div class="absolute -top-40 -right-40 w-80 h-80 bg-primary/5 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-success/5 rounded-full blur-3xl"></div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 lg:py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-4">
                    Powerful Features
                </h2>
                <p class="text-xl text-text-secondary max-w-2xl mx-auto">
                    Everything you need to build modern web applications with confidence
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="card card-hover text-center group">
                    <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-primary/20 transition-colors">
                        <img src="https://cdn-icons-png.flaticon.com/512/1828/1828884.png" class="w-8 h-8" alt="Lightning Fast Icon">
                    </div>
                    <h3 class="text-xl font-semibold text-text-primary mb-3">Lightning Fast</h3>
                    <p class="text-text-secondary">Built on CodeIgniter 4's high-performance framework with optimized Tailwind CSS</p>
                </div>

                <!-- Feature 2: Tailwind CSS Utility Classes -->
                <div class="card card-hover text-center group">
                    <!-- Icon container with dynamic hover effects -->
                    <div class="w-16 h-16 bg-success/10 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-success/20 transition-colors">
                        <img src="https://cdn-icons-png.flaticon.com/512/2920/2920277.png" class="w-8 h-8" alt="Utility-First CSS Icon">
                    </div>
                    <h3 class="text-xl font-semibold text-text-primary mb-3">Utility-First CSS</h3>
                    <p class="text-text-secondary">Build interfaces rapidly using Tailwind's utility classes like flex, bg-primary, rounded-lg</p>
                </div>

                <!-- Feature 3: Responsive Design -->
                <div class="card card-hover text-center group">
                    <!-- Responsive breakpoints: sm, md, lg classes -->
                    <div class="w-16 h-16 bg-warning/10 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-warning/20 transition-colors">
                        <img src="https://cdn-icons-png.flaticon.com/512/684/684908.png" class="w-8 h-8" alt="Mobile-First Design Icon">
                    </div>
                    <h3 class="text-xl font-semibold text-text-primary mb-3">Mobile-First Design</h3>
                    <p class="text-text-secondary">Built with responsive classes like md:text-xl, lg:grid-cols-3, sm:flex-row for all devices</p>
                </div>

                <!-- Feature 4: Custom Theme System -->
                <div class="card card-hover text-center group">
                    <!-- Custom color variables defined in @theme {} -->
                    <div class="w-16 h-16 bg-info/10 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-info/20 transition-colors">
                        <img src="https://cdn-icons-png.flaticon.com/512/2920/2920349.png" class="w-8 h-8" alt="Custom Theme Icon">
                    </div>
                    <h3 class="text-xl font-semibold text-text-primary mb-3">Custom Theme</h3>
                    <p class="text-text-secondary">Beautiful color scheme with primary, secondary, success colors defined in CSS @theme block</p>
                </div>

                <!-- Feature 5: Component Classes -->
                <div class="card card-hover text-center group">
                    <!-- Reusable component classes like .card, .btn-primary -->
                    <div class="w-16 h-16 bg-error/10 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-error/20 transition-colors">
                        <img src="https://cdn-icons-png.flaticon.com/512/2920/2920226.png" class="w-8 h-8" alt="Component Classes Icon">
                    </div>
                    <h3 class="text-xl font-semibold text-text-primary mb-3">Component Classes</h3>
                    <p class="text-text-secondary">Reusable component classes like .card, .btn-primary, .form-input for consistent design</p>
                </div>

                <!-- Feature 6: CLI Build Process -->
                <div class="card card-hover text-center group">
                    <!-- Optimized build with Tailwind CLI -->
                    <div class="w-16 h-16 bg-secondary/10 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-secondary/20 transition-colors">
                        <img src="https://cdn-icons-png.flaticon.com/512/906/906334.png" class="w-8 h-8" alt="CLI Workflow Icon">
                    </div>
                    <h3 class="text-xl font-semibold text-text-primary mb-3">CLI Workflow</h3>
                    <p class="text-text-secondary">Simple build process with npm run dev:css and npm run build:css commands</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 lg:py-32 bg-linear-to-r from-primary to-blue-600">
        <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                See Tailwind CSS in Action!
            </h2>
            <p class="text-xl text-white/90 mb-8">
                Explore how utility classes, custom themes, and responsive design work together
            </p>
            <a href="/demo/form" class="inline-block bg-white text-primary px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-50 transition-colors shadow-lg">
                Try Demo Form
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-text-primary text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <div class="flex items-center justify-center space-x-3 mb-4">
                    <img src="https://media.tenor.com/zEAQG4xs1v8AAAAe/ketik-mengetik.png" class="w-8 h-8" alt="logo">
                    <span class="font-bold text-xl">CodeIgniter 4 + Tailwind</span>
                </div>
                <p class="text-white/80 mb-4">
                    CodeIgniter 4 template with Tailwind CSS - Fast, Modern, and Beautiful
                </p>
                <p class="text-white/60 text-sm">
                    © 2024 CodeIgniter 4 + Tailwind. Built with ❤️ showcasing modern CSS framework.
                </p>
            </div>
        </div>
    </footer>

</body>
</html>
