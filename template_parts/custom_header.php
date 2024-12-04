<?php
/**
 * Custom Header Template Part
 * 
 * @package astra-child-services-business
 */
?>
<header id="custom-site-header" class="site-header">
    <div class="header-container">
        <div class="header-logo">
            <?php 
            the_custom_logo(); 
            ?>
        </div>
        
        <nav class="header-navigation">
            <?php 
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class'     => 'primary-menu',
                'container'      => false,
            )); 
            ?>
        </nav>
        
        <div class="header-services-info">
            <span class="service-dot"></span>
            <span class="service-text">24 hour services</span>
        </div>
    </div>
</header>