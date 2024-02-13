<nav class="app-navigation">
    <?php
    $arguments = array(
        'theme_location' => 'primary-menu',
        'container' => false,
        'menu_class' => 'menu',
    ); 
    
    wp_nav_menu($arguments);
    
    ?>
</nav>