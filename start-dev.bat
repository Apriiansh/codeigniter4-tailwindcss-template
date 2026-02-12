@echo off
REM CodeIgniter 4 + Tailwind CSS Development Server

echo.
echo ================================
echo CodeIgniter 4 + Tailwind CSS
echo ================================
echo.

REM Start Tailwind CSS watcher
echo Starting Tailwind CSS watch...
start cmd /k npm run dev:css

timeout /t 2 /nobreak

REM Start CodeIgniter server
echo Starting CodeIgniter server...
start cmd /k php spark serve

timeout /t 2 /nobreak

REM Status
echo.
echo ✓ Server: http://localhost:8080
echo ✓ Tailwind: Watching for changes
echo.

REM Demo pages
echo Demo Pages:
echo   • Landing: http://localhost:8080
echo   • Form: http://localhost:8080/demo/form
echo.

REM Tips
echo Quick Tips:
echo   • Edit views in app/Views/
echo   • Edit styles in public/assets/css/input.css
echo   • Close windows to stop servers
echo.
