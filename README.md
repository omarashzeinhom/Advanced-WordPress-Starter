# Advanced WordPress Development Environment Theme Starter

A modern WordPress theme starter with built-in development tools including Gulp, Webpack, and LiveReload for efficient theme development.

## Table of Contents

1. [Quick Start](#quick-start)
2. [Theme Hierarchy](#theme-hierarchy)
3. [Development Setup](#development-setup)
4. [Production Deployment](#production-deployment)
5. [Theme Customization](#theme-customization)
6. [Features](#features)
7. [Support](#support)
8. [License](#license)

## Quick Start

1. Download and extract the theme to your WordPress themes directory (`wp-content/themes/`)
2. Install dependencies: `yarn install` (or `npm install`/`pnpm install`)
3. Install Gulp globally: `yarn global add gulp-cli`
4. Start development: `yarn run gulp` (in one terminal) and `node livereload.js` (in another terminal)
5. Activate the theme in WordPress Admin > Appearance > Themes

## Theme Hierarchy

Understanding WordPress template hierarchy is crucial for proper theme development:

### Front-Page vs Home vs Index

- **front-page.php**: Highest priority for your site's front page
  - Used when a static front page is set in Settings > Reading
  - Will override home.php for the front page
- **home.php**: Blog posts index page
  - Used when "Your latest posts" is selected in Settings > Reading
  - Also used for the posts page when a static front page is set
- **index.php**: The fallback template
  - Used when no more specific template is found
  - Should contain the basic loop and structure

For detailed information, refer to the [WordPress Template Hierarchy documentation](https://developer.wordpress.org/themes/basics/template-hierarchy/).

## Development Setup

### Prerequisites

- [Node.js](https://nodejs.org/en)
- [XAMPP](https://www.apachefriends.org/) or similar local server
- WordPress installed locally
- [LiveReload browser extension](https://chromewebstore.google.com/detail/livereload/jnihajbhpnppcggbcgedagnkighmdlei)

### File Structure

```
src/
├── images/      # Source images
├── js/          # JavaScript files
│   └── main.js  # Main JS file
└── scss/        # SCSS styles
    └── styles.scss  # Main stylesheet
```

### Development Commands

```bash
# Install dependencies
yarn install

# Start development (run in separate terminals)
yarn run gulp
node livereload.js
```

## Production Deployment

1. Update `DEV_ENVIRONMENT` constant in `functions.php`:

   ```php
   define('DEV_ENVIRONMENT', false);
   ```

2. Update Webpack mode in `webpack.config.js`:

   ```js
   mode: 'production'
   ```

3. It's recommended to remove the `src/` directory in production environments

## Theme Customization

### Editing Templates

- **front-page.php**: Customize your site's homepage
- **home.php**: Modify your blog index page
- **index.php**: Edit the fallback template

### Adding Styles

Edit `src/scss/styles.scss` for all your custom styles. The Gulp workflow will automatically compile and prefix your CSS.

### Adding JavaScript

Place custom JavaScript in `src/js/main.js`. Webpack will process and bundle your scripts.

### Working with Template Parts

Use WordPress's `get_template_part()` function to include reusable components:

```php
<?php get_template_part('partials/section', 'alpha'); ?>
```

## Features

- LiveReload for instant browser refreshing
- SCSS compilation with autoprefixing
- JavaScript bundling with Webpack
- WooCommerce support
- Clean, minimal starter markup
- Optimized for development workflow

## Support

For issues or questions, please contact [Author's Support Email].

## License

This project is licensed under the [MIT License](https://opensource.org/license/mit/) - see the LICENSE.md file for details.
