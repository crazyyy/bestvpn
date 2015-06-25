<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

    <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->
    <!-- meta -->

    <!-- icons -->
    <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

    <!-- css + javascript -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="container">
    <div class="wrapper">
      <div>
        <div class="vpn_bar">
          <div class="logo">
            <?php if ( is_front_page() && is_home() ){ } else { ?>
              <a href="<?php echo home_url(); ?>">
                <?php  } ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo_dec9.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
                <?php if ( is_front_page() && is_home() ){
                } else { ?>
              </a>
            <?php } ?>
          </div><!-- /logo -->
        </div>
        <div class="top_menu">
          <div class="main_menu clearfix">
            <?php wpeHeadNav(); ?>
          </div>
        </div><!-- top_menu -->
      </div>
      <div class="content_wrapper">
        <div class="content">
