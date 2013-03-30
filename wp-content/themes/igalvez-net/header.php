<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>
            <?php
            bloginfo('name');
            if (is_single()) {
                $category = get_the_category();
                echo ' | ' . $category[0]->cat_name . ': ';
                wp_title('', true);
            } else if(is_404()) {
                echo ' |  Error 404: File Not Found';
            } else {
                wp_title('|', true);
            }
            if(is_paged()) {
                echo " | Page $paged";
            }
            ?>
        </title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
        
        <link rel="stylesheet" type="text/css"
            href="<?php echo get_stylesheet_directory_uri(); ?>/css/desktop.php"/>
       
        <?php include 'webfonts.php'; ?>
        
        <!-- WordPress header -->
            <?php wp_head(); ?>
        <!-- /WordPress header -->
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    </head>
    <body <?php body_class(); ?>>
        <div id="wrapper">
        
        <div id="header">
            <div id="title">IGalvez.Net</div>
            <div id="tagline">A Personal Knowledgebase</div>
        </div>
  
        <div id="menu">
            <a href="<?php bloginfo('wpurl'); ?>">Home</a> |
            <a href="#">About</a> |
            <a href="#">Projects</a> |
            <a href="<?php bloginfo('wpurl'); ?>/contact/">Contact</a> |
            Blog:
            <a href="<?php bloginfo('wpurl'); ?>/archives/">Archives</a> |
            <a href="<?php bloginfo('wpurl'); ?>/categories/">Categories</a> |
            <a href="<?php bloginfo('wpurl'); ?>/tags/">Tags</a> |
            <a href="<?php bloginfo('wpurl'); ?>/search/">Search</a>
        </div>
