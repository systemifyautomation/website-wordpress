# Systemify Automation — WordPress Website

> AI-powered automation for service lead-based businesses. Built by a Moroccan engineer. 🇲🇦

## About

**Systemify Automation** is an AI automation company that helps service lead-based businesses (agencies, coaches, consultants, law firms, etc.) deliver faster to their clients without admin headache. This repository contains the custom WordPress theme and development environment for the Systemify website.

---

## Tech Stack

| Layer | Technology |
|---|---|
| CMS | WordPress 6.x |
| Theme | Custom — `systemify` |
| Local Dev | Docker Compose (WordPress + MySQL + phpMyAdmin) |
| Automation tools shown | Make.com, n8n, Zapier, GPT-4, GoHighLevel, HubSpot |

---

## Repository Structure

```
website-wordpress/
├── docker-compose.yml          # Local dev environment
├── wp-config-sample.php        # Config template (copy to wp-config.php)
├── wp-content/
│   ├── themes/
│   │   └── systemify/          # Custom theme
│   │       ├── style.css       # Theme metadata + all CSS
│   │       ├── functions.php   # Theme setup, enqueue, AJAX handlers
│   │       ├── header.php      # Site header / navigation
│   │       ├── footer.php      # Site footer
│   │       ├── front-page.php  # Homepage (hero, services, about, contact…)
│   │       ├── page.php        # Generic page template
│   │       ├── single.php      # Blog post template
│   │       ├── index.php       # Blog archive / fallback template
│   │       ├── screenshot.png  # Theme preview image
│   │       └── assets/
│   │           └── js/
│   │               └── main.js # Nav toggle, scroll reveal, contact AJAX
│   └── plugins/                # Add plugins here (not committed by default)
└── README.md
```

---

## Quick Start (Docker)

### Prerequisites
- [Docker Desktop](https://www.docker.com/products/docker-desktop/) installed and running

### 1 — Clone & start

```bash
git clone https://github.com/systemifyautomation/website-wordpress.git
cd website-wordpress
docker-compose up -d
```

### 2 — Run WordPress installer

Open [http://localhost:8080](http://localhost:8080) and follow the WordPress installation wizard.

| Field | Value |
|---|---|
| Site Title | Systemify Automation |
| Username | *(choose securely)* |
| Password | *(choose securely)* |
| Email | hello@systemifyautomation.com |

### 3 — Activate the theme

1. Log into WP Admin → **Appearance → Themes**
2. Activate **Systemify Automation**

### 4 — Configure static front page

Go to **Settings → Reading** and set:
- **Your homepage displays** → A static page
- **Homepage** → Create a page titled `Home`
- **Posts page** → Create a page titled `Blog`

### 5 — (Optional) phpMyAdmin

Database management is available at [http://localhost:8081](http://localhost:8081).

---

## Theme Features

- **Responsive** — Mobile-first, works on all screen sizes
- **Hero section** — Compelling headline, animated dashboard mockup, social proof
- **Services grid** — 6 AI automation services with hover effects
- **How It Works** — 3-step process with connector line
- **Stats / Results** — Key metrics with gradient numbers
- **Testimonials** — 3 client testimonial cards
- **About section** — Founder story (Moroccan engineer background)
- **CTA banner** — Full-width conversion section
- **Contact form** — AJAX-powered form with WordPress email delivery
- **Scroll-reveal animations** — IntersectionObserver-based entrance animations
- **Sticky header** — Frosted-glass navbar that scrolls with the page
- **Custom logo support** — Upload your logo via Customizer

---

## Customisation

### Brand colours
All colours are defined as CSS custom properties in `style.css`:

```css
:root {
  --color-primary:  #0A66FF;  /* Electric blue */
  --color-accent:   #00D4AA;  /* Teal / AI accent */
  --color-bg-dark:  #0D1117;  /* Hero / footer dark background */
}
```

### Navigation menus
Register menus under **Appearance → Menus**:
- **Primary Navigation** — main navbar
- **Footer — Company** — footer company column
- **Footer — Services** — footer services column
- **Footer — Legal** — footer legal column

---

## Production Deployment

1. Copy `wp-config-sample.php` to `wp-config.php` and fill in your database credentials and secret keys (generate at https://api.wordpress.org/secret-key/1.1/salt/).
2. Upload `wp-content/themes/systemify/` to your server's `wp-content/themes/` directory.
3. Install WordPress core separately (not tracked in this repo).
4. Set `DISALLOW_FILE_EDIT` and `FORCE_SSL_ADMIN` to `true` in production.

---

## Contributing

Pull requests are welcome. Please follow WordPress coding standards and ensure all strings are translatable using `esc_html_e()` / `__()`.

---

## License

GNU General Public License v2 or later. See [LICENSE](https://www.gnu.org/licenses/gpl-2.0.html).

---

*Built with ❤️ in Morocco 🇲🇦 by [Systemify Automation](https://systemifyautomation.com)*