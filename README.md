# Advanced WordPress Development Environment Theme Starter
- Check TUTORIAL.md for an in depth installation.

```bash
yarn install
```

- Start By

```bash
gulp 
```
- And in Another Terminal 
```bash
node livereload.js
```

## Description

A luxurious WordPress theme starter built to  increase efficiency and speed in building wordpress themes.

## Author

- **Author:** Omar Ashraf Zeinhom
- **Author's Website:** [portfolio](https://omarashrafzeinhom.vercel.app/)

## Theme Information

- **Theme Name:** Advanced WordPress Development Environment Theme Starter
- **Theme URI:** [Your Theme URI]
- **Version:** 1.0
- **License:** [MIT](https://opensource.org/license/mit/)
- **License URI:** [License URL](https://opensource.org/license/mit/)
- **Tags:** blog, e-commerce, portfolio
- **Text Domain:** zayno-theme

## Installation

1. Download the theme zip file.
2. Go to your WordPress Dashboard.
3. Navigate to `Appearance > Themes`.
4. Click on the "Add New" button.
5. Upload the zip file and activate the theme.

## Usage
Feel free to customize and extend the theme to suit your specific needs.

## Production 

- Inside `functions.php` just update the DEV_ENVIRONMENT constant to false
- Or you can remove the code entirely & not upload it to production.

```php
// Define a constant to indicate whether it's a development environment
define('DEV_ENVIRONMENT', true);
// Production 
// define('DEV_ENVIRONMENT', false);

// Function to include Livereload script in the functions.php
function liveReload() {
    if (defined('DEV_ENVIRONMENT') && DEV_ENVIRONMENT) {
        echo '<script src="http://' . $_SERVER['HTTP_HOST'] . ':35729/livereload.js?snipver=1"></script>';
    }
}

// Hook the function to the wp_footer action with priority 100
add_action('wp_footer', 'liveReload', 100);
```

## Styles

The `style.css` file contains the basic styling for the theme. Customize it further to match your design preferences.

## Support

For any inquiries or issues, please contact [Author's Support Email].

## Contribution

Contributions are welcome! Feel free to fork the repository and submit pull requests.

## License

This project is licensed under the [MIT](https://opensource.org/license/mit/) - see the [LICENSE.md](LICENSE.md) file for details.

---
