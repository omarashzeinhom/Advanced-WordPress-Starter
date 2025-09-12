# Advanced WordPress Development Environment Theme Starter

Files can be changed inside `src` check `gulpfile.js for configuration`

```lua
----src
    |---images
    |---js
        |---main.js
    |---scss
        |---styles.scss
```

- Required in Development environment
Install
- [node.js](https://nodejs.org/en)
Add Live Reload Extension to chrome
- [livereload](https://chromewebstore.google.com/detail/livereload/jnihajbhpnppcggbcgedagnkighmdlei?hl=eng)
Setup Wordpress
- [WordPress](https://wordpress.org/download/)Installed on [Xampp](https://www.apachefriends.org/)
-

- [Download](https://github.com/omarashzeinhom/Advanced-WordPress-Starter) and Extract zip file
to `C:\xampp\htdocs\wordpress\wp-content\themes`

- Install Project By

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

- Now Open your `http://localhost/wordpress/wp-admin`

1. And Activate the live reload theme

- Go to `http://localhost:3000/wordpress`
- Press on LiveServer Extension to enable it .
- Make sure your `gulpfile.js` is working correctly
- Edit files in `./src`
