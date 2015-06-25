<?php get_header(); ?>
  <div class="single_wrapper">
    <div class="single_content_wrapper">
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <div class="single_content">

        <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
        <div id="post-<?php the_ID(); ?>" <?php post_class('post_content clearfix'); ?>>

          <?php the_content(); ?>


          <div class="author_bottom" style="margin-bottom: 10px; width: 500px;">
            <img style="margin: 5px; float: left;" src="./page_files/photo-1.jpg" alt="Author Picture">
            <br>Written by <b>Douglas Crawford</b>I am a freelance writer, technology enthusiast and lover of life who enjoys spinning words and sharing knowledge for a living. Find me on <a href="https://plus.google.com/u/2/115695913224775068128?rel=author">Google+</a>
          </div>

          <br>
          <br>

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
