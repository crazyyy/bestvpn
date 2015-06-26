<?php /* Template Name: All VPN Page */ get_header(); ?>
  <div class="vpn_wrapper">

    <div class="vpn_head">
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>

    <div class="loop_wrapper vpn_loop_wrapper clearfix">

      <?php
      $temp = $wp_query;
      $wp_query= null;
      query_posts('post_type=servers'.'&showposts=100');
      while (have_posts()) : the_post();?>

      <div class="vpn post clearfix">
        <a href="<?php the_permalink(); ?>" class="vpn_pre" style="background-image: url('<?php the_field('background_image'); ?>');">
          <div class="vpn_content clearfix">
            <div class="vpn_info">
              <h2><?php the_title(); ?></h2>
              <b><?php the_field('price'); ?></b> / mo
            </div>
          </div>
        </a>
      </div><!-- vpn post clearfix -->

      <?php endwhile; ?>
      <?php $wp_query = null; $wp_query = $temp;?>

    </div><!-- loop_wrapper vpn_loop_wrapper -->
  </div><!-- vpn_wrapper -->
<?php get_footer(); ?>
