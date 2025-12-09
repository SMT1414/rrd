# Elementor Template Import Instructions

## Overview

This folder contains pre-built Elementor templates for your Red Rocket Digital website. These templates will help you quickly set up pages that match the original site design.

## Templates Included

| File | Description | Requirements |
|------|-------------|--------------|
| `homepage-template.json` | Full homepage with hero, services, stats, testimonials, CTA | Elementor (Free) |
| `services-template.json` | Services overview page | Elementor (Free) |
| `about-template.json` | About Us page with values and location | Elementor (Free) |
| `contact-template.json` | Contact page with info cards and map | Elementor (Free) |
| `header-template.json` | Site header with logo, nav, CTA | Elementor Pro |
| `footer-template.json` | Site footer with links and contact | Elementor Pro |

## How to Import Templates

### Method 1: Import as Page Template (Recommended for Free Elementor)

1. Go to **WordPress Admin → Pages → Add New**
2. Enter a page title (e.g., "Home")
3. Click **Edit with Elementor**
4. In Elementor, click the **folder icon** (top left) or press Ctrl+Shift+L
5. Click the **Import Templates** button (arrow icon)
6. Select the JSON file (e.g., `homepage-template.json`)
7. Click **Import Now**
8. The template will be inserted into your page
9. Click **Update** to save

### Method 2: Import to Saved Templates Library

1. Go to **WordPress Admin → Templates → Saved Templates**
2. Click **Import Templates** at the top
3. Choose the JSON file and upload
4. Go to the Templates tab in Elementor editor to use them

### Method 3: Header/Footer (Elementor Pro Only)

1. Go to **WordPress Admin → Templates → Theme Builder**
2. Click **Add New** → Select **Header** or **Footer**
3. Click the folder icon → Import Templates
4. Select `header-template.json` or `footer-template.json`
5. Set display conditions (usually "Entire Site")
6. Publish

## After Importing

### Update Images

The templates don't include actual images. To add your images:

1. Click on any Image widget
2. Click **Choose Image**
3. Upload or select from Media Library
4. Your theme includes all original images in `/assets/images/`

### Update Logo

1. In the header template or header.php fallback
2. Upload your logo via Appearance → Customize → Site Identity
3. Or replace the image widget in the header template

### Update Links

Review and update any internal links to match your actual page URLs.

### Add Contact Form

For the contact page:

1. Install **WPForms** or **Contact Form 7**
2. Create a contact form
3. In Elementor, add a **Shortcode** widget
4. Paste your form shortcode (e.g., `[wpforms id="123"]`)

## Recommended Plugins

- **Elementor** (Required) - Page builder
- **Elementor Pro** (Optional) - For header/footer builder and forms
- **WPForms Lite** - Free contact forms
- **Yoast SEO** - Search engine optimization

## Color Reference

When customizing, use these brand colors:

```
Primary Navy:    #1E1666
Primary Red:     #EC5D49
Orange Gradient: #FF6C26 → #FFA526
Pink Gradient:   #FA887C → #FD5F87
Blue Accent:     #16A3BD → #1656BD
Text Gray:       #6A7C92
Background:      #F8F9FA
```

## Typography

- **Headings**: Poppins (weight 500-600)
- **Body Text**: Roboto (weight 400)
- **Buttons**: Roboto (weight 500)

## Troubleshooting

### Template won't import?
- Ensure Elementor is activated
- Try importing one template at a time
- Check that the JSON file is not corrupted

### Styling looks different?
- The theme CSS should be loaded - check that the theme is active
- Clear any caching plugins
- Check browser console for CSS errors

### Header/Footer not showing?
- These require Elementor Pro
- Without Pro, use the fallback header/footer in the theme

## Support

For questions about the theme or templates:
- Email: design@redrocket.digital
- Website: https://redrocket.digital

---

Template Version: 2.0.0
Compatible with Elementor: 3.8+
