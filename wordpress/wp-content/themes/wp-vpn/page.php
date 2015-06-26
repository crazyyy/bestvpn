<?php get_header(); ?>
  <div class="single_wrapper">
    <div class="single_content_wrapper">
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <div class="single_content">

        <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
        <div id="post-<?php the_ID(); ?>" <?php post_class('post_content clearfix'); ?>>

          <?php the_content(); ?>

        </div><!-- post_content -->
      </div><!-- single_content -->
      <?php endwhile; else: // If 404 page error ?>
      <div class="single_content">
        <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
      </div>
      <?php endif; ?>
      <div class="single_share">
      </div><!-- single_share -->
    </div><!-- single_content_wrapper -->
    <?php get_sidebar(); ?>
  </div>
<?php get_footer(); ?>
