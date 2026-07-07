# Cokonet Academy - Production PHP Site

36 pages (33 site pages + 3 legal), shared PHP includes, clean SEO URLs, lead capture,
newsletter capture, Razorpay enrolment flow. PHP 7.4+ (tested on PHP 8.3), Apache with
mod_rewrite (standard shared hosting works).

## Structure

    /index.php, about.php, contact.php, ...   Pages (thin: metadata + content)
    /courses/<slug>.php                       19 course pages
    /includes/config.php                      SITE_URL and constants - EDIT THIS FIRST
    /includes/head.php                        All SEO/AEO/GEO meta + JSON-LD
    /includes/header.php                      Top strip, nav, mega menu, icon sprite
    /includes/footer.php                      Footer + newsletter form
    /includes/scripts.php                     Shared JS + enrol script
    /assets/css/main.css                      Shared styles (all pages)
    /assets/css/course.css                    Shared styles (course pages)
    /assets/css/pages/<slug>.css              Page-specific styles
    /assets/js/main.js                        Shared behaviour (modals, reveals, theme)
    /assets/js/cokonet-enroll.js              Enrol + Razorpay flow (MODE at top)
    /api/lead.php                             Counselling modal -> storage/leads.csv + email
    /api/subscribe.php                        Newsletter -> storage/subscribers.csv
    /server/                                  Node backend for Razorpay SERVER mode
    /.htaccess                                Clean URLs, legacy redirects, caching, headers
    /robots.txt, /sitemap.xml, /404.php

## Deploy (shared hosting / cPanel)

1. Upload everything in this folder to the web root (public_html). The site must live
   at the domain root, links are root-relative.
2. Edit /includes/config.php - confirm SITE_URL (currently https://www.cokonet.com).
3. Make /storage writable by PHP (chmod 755 or 775 depending on host).
4. Visit /, /about, /courses/sap-fico - clean URLs should work. If you get 404s,
   the host has mod_rewrite off; ask support to enable it.
5. In /.htaccess, uncomment the HTTPS and canonical-host redirect blocks once DNS/SSL
   are confirmed.
6. Submit /sitemap.xml in Google Search Console.

Local preview: `php -S localhost:8080 router.php` in this folder.

## Going live with payments (Razorpay)

Currently in DEMO mode (simulated payments, safe to browse).
1. /assets/js/cokonet-enroll.js top CONFIG: MODE "SERVER", KEY_ID rzp_live_xxx (public
   id only), API_BASE where /server is deployed.
2. Deploy /server (Node) with RZP_KEY_ID + RZP_KEY_SECRET in .env.
3. Test first with rzp_test keys: UPI success@razorpay, card 4111 1111 1111 1111.
4. IMPORTANT: fee is counsellor-agreed, so make the server validate the amount (marked
   spot in server/server.js) or switch to Razorpay Payment Links - see
   ENROLL_INTEGRATION.md section 6.

## Confirm before launch (flagged during build)

- [ ] Legal pages: /privacy-policy, /terms-of-service, /refund-policy contain sensible
      standard terms written for Cokonet - HAVE THEM REVIEWED before going live
      (Razorpay requires these pages for live activation).
- [ ] Social URLs used site-wide: YouTube channel UCJ0NHVhOkDZH9vPdVrjmLWQ and
      linkedin.com/company/cokonet - confirm both are yours.
- [ ] Homepage "shorts" cards: data-vid="YOUTUBE_ID_1..4" are placeholders. Paste real
      YouTube video IDs in index.php (cards do nothing until then, by design).
- [ ] "Free courses" header button and "Free course videos" menu item point to
      /masterclass and your YouTube channel - swap if you prefer different targets.
- [ ] Footer "Blog - Tutorials" link was removed (no blog exists yet). Re-add when live.
- [ ] api/lead.php and api/subscribe.php email via PHP mail() to training@cokonet.com;
      most hosts need SMTP configured for reliable delivery. Leads always also land in
      /storage/leads.csv and /storage/subscribers.csv regardless.
- [ ] Old static filenames (cokonet-*.html) 301-redirect to the new URLs via .htaccess.

## Build audit results (2026-07-07)

- 36/36 pages: PHP lint clean, zero JS console errors
- Links: 0 broken internal links, 0 missing anchors, 0 dead href="#"
- SEO: unique title + meta description (50-175 chars) on every page; canonical, Open
  Graph, geo meta (IN-KL) everywhere; JSON-LD: Organization site-wide, Course +
  BreadcrumbList on all 19 course pages, FAQPage where FAQs exist, LocalBusiness x3
  with coordinates on /contact, JobPosting on the trainer vacancy
- Zero em-dashes anywhere in the codebase
- Popups verified: counselling modal, enrol + Razorpay modal, mobile menu, dark mode,
  newsletter; lead capture writes to storage and fires email
- Visual regression vs the old static site: identical section-by-section (only the
  footer grew, intentionally unified to the richer variant with badges + newsletter)
