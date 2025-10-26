# Kunst site structure

This repository now groups all public assets under the `site/` directory:

- `site/de/` – German pages and language-specific scripts.
- `site/en/` – English pages and language-specific scripts.
- `site/shared/` – CSS/JS bundles and shared imagery used by both locales.

The reorganization removes duplicated static assets, moves shared imagery to a single
location, and keeps language specific CAPTCHA data local to each locale.
