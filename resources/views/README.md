# Knot — Bootstrap 5 link-management theme

A Bitly-style marketing + app theme for a link-shortening product, built on Bootstrap 5.3.

## Pages
- `index.html` — landing page (hero, live "shorten" demo, feature rows, stats, testimonial)
- `features.html` — full feature breakdown
- `pricing.html` — 3-tier pricing, comparison table, FAQ accordion
- `login.html` — split-screen login
- `signup.html` — split-screen signup
- `dashboard.html` — logged-in app shell: sidebar nav, stat tiles, chart, links table, create-link modal
- `dashboard-analytics.html` — analytics overview with charts, device/country breakdown, live click feed
- `dashboard-qr.html` — QR code management with generator, gallery, and scan stats
- `dashboard-bio.html` — link-in-bio page builder with live preview and customization
- `dashboard-team.html` — team workspace management with roles, activity log, and invites
- `dashboard-settings.html` — account settings, workspace config, domains, notifications

## Structure
```
knot-theme/
├── index.html
├── features.html
├── pricing.html
├── login.html
├── signup.html
├── dashboard.html
├── assets/
│   ├── css/style.css   ← design tokens + component styles (edit colors/fonts here)
│   └── js/app.js       ← nav toggle, demo widget, copy buttons, pricing toggle
└── README.md
```

## Using it
Unzip and open `index.html` in a browser — no build step needed. Bootstrap and Google Fonts load from CDN, so an internet connection is required.

To re-skin it, edit the CSS custom properties at the top of `assets/css/style.css`:
```css
--paper:  #EFEEE6;  /* page background */
--ink:    #161B17;  /* primary text / dark surfaces */
--rope:   #C1622A;  /* accent color */
--moss:   #22443B;  /* secondary dark color (footer, auth side panel) */
```

Fonts: **Fraunces** (headlines), **Inter** (body/UI), **IBM Plex Mono** (URLs, labels, data).

## Notes
- All company names, testimonials, and people pictured are fictional placeholders.
- Product screenshots are built from HTML/CSS/SVG, not real screenshots.
