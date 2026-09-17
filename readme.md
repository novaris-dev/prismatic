# Prismatic

Prismatic is a theme for the Novaris Content Management System. It provides a clean and flexible starting point for building websites powered by the Novaris Framework.

## About

Prismatic is designed to demonstrate the standard structure and features of a Novaris theme while providing a simple foundation that can be customized for your own project.

Prismatic follows the standard Novaris theme structure and can be installed and managed through the Novaris theme system.

## Requirements

- PHP 8.0 or later
- Novaris Framework
- Node.js and npm for theme development

## Theme Structure

A packaged Prismatic theme uses the following structure:

```text
prismatic/
├── app/
├── public/
├── user/
└── theme.json
```

### `app`

Contains the theme's PHP application files, templates, and other theme-specific functionality.

### `public`

Contains compiled assets that are publicly accessible, including CSS, JavaScript, images, and the Vite manifest.

### `user`

Contains theme content and other user-facing resources provided by the theme.

### `theme.json`

Contains metadata about the theme, including its name, slug, version, and repository.

```json
{
    "name": "Prismatic",
    "slug": "prismatic",
    "version": "0.0.1",
    "repository": "novaris-dev/prismatic"
}
```

## Development

Install the PHP and Node.js dependencies:

```bash
composer install
npm install
```

Build the theme:

```bash
npm run build
```

The build process creates the distributable `prismatic/` directory containing the files required by Novaris.

## Releases

Prismatic releases follow semantic versioning.

Before publishing a new release, update the version in `theme.json`.

For example:

```json
"version": "0.0.2"
```

The GitHub release tag should match the version defined in `theme.json`.

Release packages use the following naming convention:

```text
{theme}.{version}.zip
```

For example:

```text
prismatic.0.0.1.zip
prismatic.0.0.2.zip
```

## Novaris

Prismatic is built for the Novaris Content Management System and Novaris Framework.

- Novaris: `novaris-dev/novaris`
- Framework: `novaris-dev/framework`
- Prismatic: `novaris-dev/prismatic`

## License

Prismatic is licensed under the GNU General Public License v2.0 or later.