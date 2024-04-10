<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?> 
</head>


<body class="generic-header"<?php body_class(); ?>>

    <header class="header-container">
        <div class="logo-the">
            <h1> Les Plaisirs du Thé</h1>
        </div>
        <div class="logo">
        <a href="<?php echo home_url( '/' ); ?>">
    
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.jpg" alt="Logo">
        </a> 
        </div>
       

    </header>  

    <div class="header-menu">
                <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?> 
    </div> 

<?php wp_body_open(); ?>


