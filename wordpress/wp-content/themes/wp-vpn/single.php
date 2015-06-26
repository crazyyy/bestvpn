<?php get_header(); ?>
  <div class="single_wrapper">
    <div class="single_content_wrapper">

      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <div class="single_content clearfix">

        <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
        <div class="info"><?php the_time('j F Y'); ?> | <?php the_author_posts_link(); ?></div>
        <div class="post_content clearfix">

          <?php the_content(); ?>
          <br>
          <br>
          <span style="background: yellow">Did you like the article? Help spread the word and share!</span>

        </div><!-- post_content -->


        <div class="single_share_wrapper">
          <div class="single_share">
            <div class="tags">
              <?php the_tags( __( 'Tags: ', 'wpeasy' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
            </div>
          </div><!-- single_share -->
        </div><!-- single_share_wrapper -->

      </div><!-- single_content -->

      <div class="author_bottom">
        <span>Written by <b>Ray Walsh</b></span>
        <br>I am a freelance journalist and blogger from England. I am highly interested in politics and in particular the subject of IR and I am an advocate for freedom of speech, equality and personal privacy. On a more personal level I like to stay active, love snowboarding, swimming and cycling, enjoy seafood and love to listen to trap music.
      </div><!-- author_bottom -->

      <div class="comment_wrapper">

        <?php if ( comments_open() || get_comments_number() ) {
            comments_template();
          } ?>
      </div><!-- comment_wrapper -->

      <?php endwhile; else: ?>
      <div class="single_content clearfix">

        <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>

      </div>
      <?php endif; ?>

    </div><!-- single_content_wrapper -->
    <?php get_sidebar(); ?>
  </div><!-- single_wrapper -->
<?php get_footer(); ?>
