# CodeIgniter 4 + Tailwind CSS Template

A clean CodeIgniter 4 template showcasing beautiful Tailwind CSS integration for modern web development.

## Description

This template demonstrates how to integrate CodeIgniter 4 with Tailwind CSS CLI. Perfect for learning modern CSS framework with utility-first approach, custom themes, responsive design, and component classes.

## Features

- **CodeIgniter 4 Framework**: Latest version with clean setup
- **Tailwind CSS CLI**: Direct integration without PostCSS complexity  
- **Custom Theme System**: Beautiful color scheme with @theme configuration
- **Responsive Design**: Mobile-first approach with breakpoint classes
- **Component Classes**: Reusable .card, .btn-primary, .form-input classes
- **Modern Typography**: Nunito font with Google Fonts integration
- **Demo Form**: Interactive form showcasing Tailwind CSS features

## System Requirements

- PHP 8.1 or higher
- Composer
- Node.js and npm (for Tailwind CSS)
- Database server (MySQL, PostgreSQL, etc.)

## Installation

1. **Clone this repository:**
   ```bash
   git clone https://github.com/username/codeigniter4-tailwindcss-template.git
   cd codeigniter4-tailwindcss-template
   ```

2. **Install PHP dependencies:**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies:**
   ```bash
   npm install
   ```

4. **Configure environment (optional for demo):**
   - Copy `env` to `.env` if you plan to use database features
   - Adjust database settings and base URL in `.env`

5. **Build Tailwind CSS:**
   ```bash
   npm run build:css
   ```
   Or for development with watch mode:
   ```bash
   npm run dev:css
   ```

## Configuration

### Tailwind CSS
Main CSS file is located at `public/assets/css/input.css`. Output will be generated to `public/assets/css/output.css`.

## Usage

1. **Development workflow:**
   ```bash
   # Start both servers in one command
   ./start-dev.sh
   
   # Or run separately:
   composer run dev     # CodeIgniter server
   npm run dev:css      # Tailwind watch mode
   ```

2. **Access the application:**
   - Landing page: `http://localhost:8080`
   - Demo form: `http://localhost:8080/demo/form`

3. **Build for production:**
   ```bash
   npm run build:css
   ```

## Project Structure

```
codeigniter4-tailwindcss-template/
├── app/                    # CodeIgniter application
│   ├── Controllers/       # Controllers (Home, Dashboard)
│   ├── Views/             # View templates
│   │   ├── welcome_message.php    # Landing page
│   │   ├── demo_form.php         # Demo form
│   │   └── dashboard.php         # Dashboard
│   └── Config/            # Application configurations
├── public/                # Public web files
│   ├── assets/css/        # Tailwind CSS files
│   │   ├── input.css      # Source file with @theme
│   │   └── output.css     # Compiled CSS
│   └── index.php         # Entry point
├── package.json          # npm scripts and dependencies
├── composer.json         # PHP dependencies  
├── start-dev.sh         # Development server script
└── README.md
```

## Tailwind CSS Features Showcase

### Custom Theme System
- Color variables defined in `@theme {}` block
- Primary, secondary, success, warning, error colors
- Custom font family (Nunito)

### Utility Classes
- Responsive design: `md:text-xl`, `lg:grid-cols-3`
- Spacing: `p-4`, `mb-6`, `space-y-4`
- Colors: `bg-primary`, `text-white`, `border-secondary`
- Layout: `flex`, `grid`, `min-h-screen`

### Component Classes
- `.card` - Card container with shadow and padding
- `.btn-primary` - Primary button styling
- `.form-input` - Form input with focus states
- `.alert` - Alert messages with variants

## Development Tips

### CSS Build Process
```bash
# Watch for changes (development)
npm run dev:css

# Build once (production) 
npm run build:css
```

### Adding New Colors
1. Add color variable in `input.css` @theme block:
   ```css
   @theme {
     --color-brand: #your-color;
   }
   ```
2. Use in HTML: `bg-brand`, `text-brand`, etc.
3. Rebuild CSS: `npm run build:css`

## Contributing

Please create issues or pull requests for contributions.

## License

This project uses the MIT license. See the LICENSE file for more details.

## Additional Resources

- [CodeIgniter 4 User Guide](https://codeigniter.com/user_guide/)
- [Tailwind CSS Documentation](https://tailwindcss.com/docs)
- [Tailwind CSS CLI](https://tailwindcss.com/docs/installation/tailwind-cli)

## Server Requirements

PHP version 8.1 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> [!WARNING]
> - The end of life date for PHP 7.4 was November 28, 2022.
> - The end of life date for PHP 8.0 was November 26, 2023.
> - If you are still using PHP 7.4 or 8.0, you should upgrade immediately.
> - The end of life date for PHP 8.1 will be December 31, 2025.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
