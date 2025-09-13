<nav class="app-navigation">
    <?php
    $arguments = array(
        'theme_location' => 'primary-menu',
        'container' => false,
        'menu_class' => 'site-header-menu',
    ); 
    
    wp_nav_menu($arguments);
    
    ?>
</nav>