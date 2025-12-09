# Red Rocket Digital - WordPress Theme

**Version: 2.3.2**

A complete WordPress theme for Red Rocket Digital marketing agency, featuring Elementor compatibility, responsive design, and 251 original archived images from the Wayback Machine.

## What's New in 2.3.2

### Portfolio & Case Studies Templates
- Full-width Portfolio page with project grid
- Case Studies page with results metrics
- Client testimonials section
- Automatic template assignment on page creation

### Full-Width Footer Fix
- Footer now displays full-width regardless of page content
- Fixed issues with embedded content constraining layout

## What's New in 2.3.0

### Archive Image Library (251 images)
- All original service banners, icons, and background images
- Logo files and brand assets
- Portfolio screenshots
- SEO, Web Design, Social Media imagery
- Located in `/assets/images/archive/`

### Service Page Templates
Built-in templates that replicate the original Elementor page layouts:

| Template | Description |
|----------|-------------|
| `page-service.php` | Master template that routes to correct service layout |
| `page-portfolio.php` | Portfolio and Case Studies template router |
| `service-seo.php` | SEO page with hero, features, tools, pricing |
| `service-webdesign.php` | Web design with portfolio grid and process steps |
| `service-social.php` | Social media with platform icons |
| `service-overview.php` | Services listing with card grid |
| `service-default.php` | Generic template for other services |
| `page-portfolio.php` | Our Work portfolio grid |
| `page-casestudies.php` | Case studies with metrics |

### Design Elements
Each service page includes:
- Gradient hero sections with background patterns
- Feature boxes with original icons
- Tool/service grids with hover effects
- Pricing tables (Basic/Standard/Enhanced)
- Portfolio previews
- Process step displays
- Call-to-action sections

## Requirements

- WordPress 5.0+
- PHP 7.4+
- **Elementor** plugin (recommended)

## Installation

### Step 1: Upload & Activate
1. Go to WordPress Admin → Appearance → Themes → Add New → Upload Theme
2. Select `redrocket-digital.zip`
3. Click "Install Now" then "Activate"

### Step 2: Create Pages
1. Go to Settings → Create RR Pages (admin menu)
2. Click "Create Missing Pages"
3. All 14 essential pages will be created automatically

### Step 3: Assign Service Template
For service pages, edit the page and select "Service Page" from the Page Attributes → Template dropdown.

## Features

### Design
- Original site styling preserved
- Brand colors: Purple (#1e1666), Orange (#ff6c26), Blue (#1e3497)
- Google Fonts: Poppins & Roboto
- Font Awesome 6.4 icons
- Fully responsive design
- CSS animations and hover effects

### Auto-Create Pages System
- Admin page under **Settings > Create RR Pages**
- Creates 14 essential pages with content
- Includes: Home, About, Services, SEO, Web Design, Social Media, PPC, Content, eCommerce, PR, Contact, Portfolio, News, Business Toolkit

### Responsive Header
- Mobile-friendly hamburger menu
- Smooth slide-out navigation
- Touch-optimized interactions

## File Structure

```
redrocket-digital/
├── style.css                    # Theme info + base styles
├── functions.php                # Theme functions
├── page-service.php             # Service page template router
├── header.php / footer.php      # Site header/footer
├── front-page.php               # Homepage template
├── page.php / single.php        # Standard templates
├── assets/
│   ├── css/
│   │   ├── main.css             # Original site styles
│   │   └── service-pages.css    # Service page styling
│   ├── images/
│   │   └── archive/             # 251 original images
│   └── js/
│       └── theme.js             # Theme JavaScript
├── template-parts/
│   ├── service-seo.php          # SEO page layout
│   ├── service-webdesign.php    # Web design layout
│   ├── service-social.php       # Social media layout
│   ├── service-overview.php     # Services listing
│   └── service-default.php      # Generic service layout
├── inc/
│   ├── auto-create-pages.php    # Page creation system
│   └── page-content-data.php    # Page content definitions
└── elementor-templates/         # Pre-built Elementor templates
```

## Key Images Available

The `/assets/images/archive/` folder includes:

**Banners:**
- `seo-banner.png` - SEO hero image
- `web-design-service-banner.png` - Web design hero
- `social-media-marketing-network-banner.png` - Social media hero
- `banner-bg.png` - Background pattern

**Icons:**
- `seo-icon-new1-1.png` through `seo-icon-new1-4.png` - Feature icons
- `seo-service-new-icon1.png` through `seo-service-new-icon6.png` - Tool icons
- `web-development-service-new-icon1.png` through `web-development-service-new-icon6.png`

**Backgrounds:**
- `seo-curve-banner.png` - Curved section divider
- `seo-polygon-banner.png` - Polygon background
- `seo-traffic-banner.jpg` - Traffic section background

**Logos:**
- `redrockettransparentlogo-1.png` - Main logo

## Color Scheme

```css
--rr-purple: #1e1666;
--rr-purple-dark: #150f4a;
--rr-orange: #ff6c26;
--rr-orange-hover: #e55a1a;
--rr-blue: #1e3497;
--rr-gradient: linear-gradient(135deg, #1e1666 0%, #1e3497 100%);
```

## Support

For questions about this theme, contact: design@redrocket.digital

## Credits

- Theme developed for Red Rocket Digital
- https://redrocket.digital
- Original images archived via WebArchix from Wayback Machine
