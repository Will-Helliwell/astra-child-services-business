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

<style>
    /* Import Plus Jakarta Sans font */
    @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600&display=swap');

    #custom-site-header {
        background-color: #142257;
        padding: 25px 0;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    .header-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
    }

    .header-logo {
        flex: 0 0 25%;
    }

    .header-navigation {
        flex: 0 0 50%;
        display: flex;
        justify-content: center;
    }

    .primary-menu,
    .primary-menu ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
    }

    .primary-menu li {
        margin: 0 15px;
    }

    .primary-menu li a {
        color: white;
        text-decoration: none;
        transition: color 0.3s ease;
        font-size: 14px;
        font-weight: bold;
    }

    .primary-menu li a:hover {
        color: #f0f0f0;
    }

    .header-services-info {
        flex: 0 0 25%;
        text-align: right;
        display: flex;
        align-items: center;
        justify-content: flex-end;
    }

    .service-dot {
        background-color: #ff5e5e;
        border-radius: 50%;
        width: 12px;
        height: 12px;
        display: inline-block;
        margin-right: 10px;
    }

    .service-text {
        color: white;
        font-weight: 600;
        font-size: 14px;
    }
</style>