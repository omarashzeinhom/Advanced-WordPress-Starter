<?php

/**
 * Template Name: Home
 * The template for displaying the homepage
 *
 * @package Advanced WordPress Theme Starter
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="hero">
        <div class="container">
            <h1>Welcome to Your Professional WordPress Theme 🎉</h1>
            <p>A high-performance development environment with built-in tools for creating amazing websites</p>
        </div>
    </div>

    <div class="container">
        <section class="features">
            <div class="feature-card">
                <div class="feature-icon">⚡</div>
                <h3>Gulp Automation</h3>
                <p>Automate your workflow with Gulp for seamless development experience.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🔁</div>
                <h3>LiveReload</h3>
                <p>See changes instantly with LiveReload functionality as you code.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">📦</div>
                <h3>Webpack Bundling</h3>
                <p>Efficient JavaScript bundling with Webpack for optimal performance.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🛠️</div>
                <h3>Node.js Power</h3>
                <p>Leverage Node.js for package management and build processes.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🐘</div>
                <h3>XAMPP Environment</h3>
                <p>Local server environment for testing and development.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">💻</div>
                <h3>WordPress CMS</h3>
                <p>The world's most popular content management system at your fingertips.</p>
            </div>
        </section>

        <section class="section-alpha">
            <h2>Section Alpha ✨</h2>
            <p>This is a sample section that demonstrates how to organize your content. You can edit this section in <code>front-page.php</code>.</p>
            <p>For better organization, consider moving repeated sections to template parts using <code>get_template_part()</code>.</p>
            <a href="#" class="btn">Learn More</a>
        </section>

        <section class="main-content">
            <h2>Main Content Area 📝</h2>
            <p>This is where your primary content would go. You can customize this area to fit your needs.</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias, fugiat architecto doloribus cum ex ipsam voluptates commodi possimus eveniet facere sit corporis atque perferendis! Facere pariatur officia odio quidem corrupti!</p>
            <p>Follow the setup instructions in the <code>README.md</code> or <code>TUTORIAL.md</code> to get started with your development.</p>
        </section>
    </div>

</main>

<?php
get_footer();
