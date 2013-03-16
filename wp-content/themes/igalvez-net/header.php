<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <title><?php bloginfo('name'); ?><?php wp_title('|', true); ?></title>
        
        <link rel="stylesheet" type="text/css"
            href="<?php echo get_stylesheet_directory_uri(); ?>/css/desktop.php"/>
       
        <?php include 'webfonts.php'; ?>
        
        <!-- WordPress header -->
            <?php wp_head(); ?>
        <!-- /WordPress header -->
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
            <a href="#">Contact</a> |
            Blog:
            <a href="#">Archives</a> |
            <a href="#">Categories</a> |
            <a href="#">Tags</a> |
            <a href="#">Search</a>
        </div>
