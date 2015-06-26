<?php get_header(); ?>
  <div class="single_wrapper">
    <div class="single_content_wrapper">

      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <div class="single_content clearfix">

        <div class="review_head">
          <img src="<?php echo get_template_directory_uri(); ?>/img/review_icon.png" class="iconpic" alt="">

          <h1><?php the_title(); ?></h1>

          <a href="<?php the_permalink(); ?>" class="logolink" target="_blank">
            <img src="<?php the_field('server_logo'); ?>" class="logopic" alt="">
          </a>
          <div class="clear"></div>

          <div class="screenshot_wrapper clearfix" style="background-image: url('<?php the_field('background_image'); ?>');">

            <a href="<?php the_field('server_url'); ?>" target="_blank" class="sitelink">Visit Site</a>

            <ul class="ratings">
            <?php $metas = get_post_meta($post->ID, 'wp_review_item', TRUE);
              foreach ( $metas as $metakey ){  ?>

              <li>
                <label class="rating_label"><?php echo $metakey['wp_review_item_title']; ?></label>
                <span class="rating_value rating_value-<?php echo $metakey['wp_review_item_star']; ?>">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </span>
              </li>

            <?php } ?>
            </ul>
          </div>

        </div><!-- review_head -->


        <div class="review_wrapper">

          <ul class="page_tabs clearifx">
            <li class="editor">Editor Review</li>
            <li class="user"><a href="#userreview" style="text-decoration: none">User Reviews</a>
            </li>
            <li class="post"><a href="<?php the_permalink(); ?>" style="text-decoration: none">Post Review</a>
            </li>
            <li class="visit"><a href="<?php the_field('server_url'); ?>" style="text-decoration: none">Visit Site</a>
            </li>
          </ul>

          <div class="review_content_wrapper">
            <div class="editor tab clearfix">
              <div class="review">

                    <div itemprop="reviewBody">

                      <div itemtype="http://schema.org/Thing" itemscope="" itemprop="itemReviewed">
                        <meta content="ExpressVPN" itemprop="name">
                      </div>

<!--                       <div class="summary">
  <?php the_field('short_description'); ?>
</div>summary
 -->
                      <?php the_content(); ?>

                    </div><!-- reviewBody -->

              </div>
            </div><!-- editor -->

            <div class="user tab comment_wrapper">
              <?php if ( comments_open() || get_comments_number() ) {
                  comments_template();
                } ?>
            </div>

          </div>
        </div>

      </div><!-- single_content -->

      <?php endwhile; else: ?>
      <div class="single_content clearfix">
        <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
      </div>
      <?php endif; ?>
    </div><!-- single_content_wrapper -->
    <?php get_sidebar('servers'); ?>
  </div><!-- single_wrapper -->
<?php get_footer(); ?>
