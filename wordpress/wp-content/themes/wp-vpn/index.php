<?php get_header(); ?>
  <div class="single_wrapper">
    <div class="single_content_wrapper">
    <h4>INDEX PAGE</h4>
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <div class="single_content">

        <div id="post-<?php the_ID(); ?>" <?php post_class('post_content clearfix'); ?>>

          <?php the_content(); ?>

        </div><!-- post_content -->

      </div><!-- single_content -->
      <?php endwhile; else: // If 404 page error ?>
      <div class="single_content">
        <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
        <form role="search" method="get" class="search-form" action="<?php echo home_url(); ?>/comparison-second-page.htm">
  <label>
    <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
  </label>
  <input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>
      </div>
      <?php endif; ?>
      <div class="single_share">
      </div><!-- single_share -->
    </div><!-- single_content_wrapper -->
    <?php get_sidebar(); ?>
  </div>
<?php get_footer(); ?>
