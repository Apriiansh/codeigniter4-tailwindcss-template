# CodeIgniter 4 + Shield Auth + Tailwind CSS

A CodeIgniter 4 template integrated with Shield Authentication and Tailwind CSS for rapid and secure web application development.

## Description

This template provides a starter kit for building web applications using CodeIgniter 4, with robust authentication through Shield, and modern styling using Tailwind CSS. Ideal for projects requiring login/logout systems, user management, and responsive UI.

## Features

- **CodeIgniter 4 Framework**: A lightweight, fast, flexible, and secure PHP full-stack web framework
- **Shield Authentication**: Complete authentication system with features like login, logout, registration, password reset, and role management
- **Tailwind CSS**: Utility-first CSS framework for fast and consistent styling
- **Responsive Design**: Responsive UI for desktop and mobile
- **Session Management**: Secure session handling
- **CSRF Protection**: Protection against CSRF attacks
- **Database Integration**: Support for various databases (MySQL, PostgreSQL, etc.)

## System Requirements

- PHP 8.1 or higher
- Composer
- Node.js and npm (for Tailwind CSS)
- Database server (MySQL, PostgreSQL, etc.)

## Installation

1. **Clone this repository:**
   ```bash
   git clone https://github.com/username/ci4-tailwindcss-shield.git
   cd ci4-tailwindcss-shield
   ```

2. **Install PHP dependencies:**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies:**
   ```bash
   npm install
   ```

4. **Configure environment:**
   - Copy `env` to `.env`
   - Adjust database settings, base URL, and other configurations in `.env`

5. **Run database migrations:**
   ```bash
   php spark migrate --all
   ```

6. **Run database seeders (optional, for sample data):**
   ```bash
   php spark db:seed
   ```

7. **Build Tailwind CSS:**
   ```bash
   npm run build
   ```
   Or for development with watch mode:
   ```bash
   npm run dev
   ```

## Configuration

### Database
Edit `.env` file to set up database connection:
```
database.default.hostname = localhost
database.default.database = ci4_shield
database.default.username = your_username
database.default.password = your_password
database.default.DBDriver = MySQLi
```

### Shield Authentication
Shield is configured by default. For further customization, refer to the Shield documentation at [codeigniter4-shield](https://github.com/codeigniter4/shield).

### Tailwind CSS
Main CSS file is located at `src/input.css`. Output will be generated to `public/css/output.css`.

## Usage

1. **Run Tailwind CSS CLI in watch mode (for development):**
   ```bash
   npx @tailwindcss/cli -i ./src/input.css -o ./public/css/output.css --watch
   ```
   This will automatically rebuild CSS when you make changes to `src/input.css`.

2. **Run development server:**
   ```bash
   php spark serve
   ```

3. **Access the application in browser:**
   Open `http://localhost:8080`

4. **Login:**
   - Default username: admin@example.com
   - Password: password

## Project Structure

```
ci4-tailwindcss-shield/
├── app/                    # Main application code
│   ├── Config/            # Application configurations
│   ├── Controllers/       # Controllers
│   ├── Models/            # Models
│   ├── Views/             # View templates
│   └── ...
├── public/                # Public files (CSS, JS, images)
│   ├── css/
│   └── ...
├── src/                   # Tailwind CSS source
├── vendor/                # Composer dependencies
├── writable/              # Writable files (cache, logs, etc.)
├── composer.json
├── package.json
└── ...
```

## Testing

Run unit tests with:
```bash
./vendor/bin/phpunit
```

## Deployment

1. Ensure all dependencies are installed
2. Run database migrations
3. Build Tailwind CSS for production
4. Configure web server to point to the `public/` folder

## Contributing

Please create issues or pull requests for contributions.

## License

This project uses the MIT license. See the LICENSE file for more details.

## Additional Documentation

- [CodeIgniter 4 User Guide](https://codeigniter.com/user_guide/)
- [Shield Documentation](https://github.com/codeigniter4/shield)
- [Tailwind CSS Documentation](https://tailwindcss.com/docs)

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
# ci4-tailwindcss-shieldauth
