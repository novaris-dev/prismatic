# Changelog

All notable changes to Prismatic will be documented in this file.

## [Unreleased]

### Added

- A copy button on code blocks in posts and pages.
- Gallery styles for `.gallery` and `.gallery-columns-2`, `-3` and `-4`.
- Featured images on single posts and in the blog list, with `post-thumbnail` and `prismatic-landscape-extra-large` image sizes.
- Pagination on the blog list and on category and date archive pages.
- Helper classes generated from the SCSS settings, such as `.text-muted`, `.gap-gutter` and `.md:grid-cols-3`. See `resources/scss/README.md`.
- Colors and content widths as CSS custom properties, such as `--color-primary` and `--width-wide`.
- `npm run dev`, which rebuilds assets and re-exports the site while you work.
- `$schema` in `theme.json`.

### Changed

- The SCSS uses numbered folders with an `_index.scss` per piece, matching Amicable.
- The theme's styles now use the color settings instead of hard-coded colors. Change a color in `01.settings/03.colors`, or override its `--color-*` property.
- Code blocks are a flat panel set in JetBrains Mono, and long lines scroll inside the block.
- The content and sidebar now stack on phones. The sidebar stays beside the content from 769px up.
- Sidebar widget styles are now included in the build.
- The CSS reset, base element styles and heading spacing now match Amicable.
- Templates use the `entry__*` class names and `post_class()`.
- Requires PHP 8.2 or later and Novaris Framework `^1.0`, locked at 1.0.9, instead of `dev-develop`.
- The theme export copies only `public/assets`, and removes `'private' => true` from the packaged `config/app.php`.
- The release workflow accepts tags with or without a leading `v`, and fails if the tag doesn't match the version in `theme.json`.
- `PURGE_KEY` defaults to an empty value.
- Updated `composer.json` and `package.json` to describe Prismatic.
- Demo posts now use the `date.slug` file name format, and the misspelled "insirpation" slug is fixed.

### Fixed

- The default content template used `$single` instead of `$home`.
- The `feaure-image` typo in `config/app.php` is now `featured-image`.
- The release workflow zipped an `amicable/` folder instead of `prismatic/`.
- Fonts on the mobile menu button and post dates weren't applied because `font-family()` was called without the `fonts.` namespace.
- Added `lang="en"` to the `<html>` element.
- Removed empty `id=""` attributes and the `$engine->doctype()` call in the page body.

### Removed

- `admin.scss` and `09.admin/`, which were empty.
- The unused `nav/menu/primary.php` template.
- The tracked `public/mix-manifest.json`.
