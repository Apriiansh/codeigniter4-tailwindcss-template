#!/bin/bash

# Colors
GREEN='\033[0;32m'
BLUE='\033[0;34m'
YELLOW='\033[1;33m'
NC='\033[0m'

# Header
echo -e "${BLUE}CodeIgniter 4 + Tailwind CSS${NC}"
echo "================================"
echo ""

# Cleanup function
cleanup() {
    echo ""
    echo -e "${YELLOW}Stopping servers...${NC}"
    kill $(jobs -p) 2>/dev/null
    echo -e "${GREEN}Done. Goodbye!${NC}"
    exit 0
}

trap cleanup INT TERM

# Start services
echo -e "${GREEN}Starting Tailwind CSS watch...${NC}"
npx tailwindcss -i ./public/assets/css/input.css -o ./public/assets/css/output.css --watch &

sleep 2

echo -e "${GREEN}Starting CodeIgniter server...${NC}"
php spark serve &

sleep 2

# Status
echo ""
echo -e "${GREEN}✓ Server:${NC} http://localhost:8080"
echo -e "${GREEN}✓ Tailwind:${NC} Watching for changes"
echo ""

# Demo pages
echo -e "${YELLOW}Demo Pages:${NC}"
echo "  • Landing: http://localhost:8080"
echo "  • Form: http://localhost:8080/demo/form"  
echo ""

# Tips
echo -e "${YELLOW}Quick Tips:${NC}"
echo "  • Edit views in app/Views/"
echo "  • Edit styles in public/assets/css/input.css"
echo "  • Press Ctrl+C to stop"
echo ""

wait