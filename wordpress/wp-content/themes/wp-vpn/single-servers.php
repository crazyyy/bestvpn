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
                <div itemtype="http://schema.org/Product" itemscope="">
                  <meta content="<?php the_title(); ?>" itemprop="name">
                  <div itemtype="http://schema.org/Review" itemscope="">
                    <div class="ta_magic_review">
                      <div class="ta_rating_container ta_box_align_none" style="width:300px;">
                        <div id="ta_rating" class="clearfix">
                          <div>
                            <div>Review of: <span class="title item fn" itemprop="name"><a rel="nofollow" href="<?php the_field('server_url'); ?>" title="<?php the_title(); ?>" target="_blank"><?php the_field('server_name'); ?></a></span>
                            </div>
                            <div class="clear"></div>
                            <dl><dt>Product by: </dt>
                              <dd><span>Peter S</span>
                              </dd>
                            </dl>
                            <div class="clear"></div>
                            <div class="clear_space"></div>
                            <div class="hr">
                              <hr>
                            </div>
                            <div>Reviewed by: <span class="reviewer author byline vcard hcard"><span class="author me fn" itemprop="author"><?php the_author_posts_link(); ?></span></span>
                            </div>
                            <dl><dt>Rating:</dt>
                              <dd>
                                <div class="ta_rating result rating" itemtype="http://schema.org/Rating" itemscope="" itemprop="reviewRating">
                                  <meta content="1" itemprop="worstRating">
                                  <meta content="5" itemprop="ratingValue">
                                  <meta content="5" itemprop="bestRating">
                                  <div class="result" style="width:100%;" title="5">5</div>
                                </div>
                              </dd>
                            </dl>
                            <div class="clear"></div>
                            <div class="ta_headline_meta">On <span class="dtreviewed rating_date"><span class="published" title="April 15, 2014">April 15, 2014</span></span>
                            </div>
                            <div class="ta_headline_meta">Last modified:<span class="dtmodified rating_date" itemprop="dateModified"><span class="updated" title="May 23, 2015">May 23, 2015</span></span>
                            </div>
                            <div class="clear_space"></div>
                            <div class="hr">
                              <hr>
                            </div>
                            <h3>Summary:</h3>
                            <div class="ta_description summary" itemprop="description">
                              <p><span>Review of <?php the_title(); ?>, the VPN service.</span>
                              </p>
                            </div>
                          </div>
                          <div class="rating_btn">
                            <a itemprop="url" class="ar_button ar_blue" href="https://www.bestvpn.com/blog/9405/expressvpn_review/" title="<?php the_title(); ?>" target="_blank" rel="nofollow">More Details</a>
                          </div>
                        </div><!-- #ta_rating -->
                      </div><!-- ta_rating_container -->
                    </div><!-- ta_magic_review -->

                    <div itemprop="reviewBody">

                      <div itemtype="http://schema.org/Thing" itemscope="" itemprop="itemReviewed">
                        <meta content="ExpressVPN" itemprop="name">
                      </div>

                      <div class="summary">
                        <h3>&nbsp;<img class="alignleft wp-image-178 size-full" title="icon_form" src="./single-review_files/icon_form.png" alt="ExpressVPN Review" width="30" height="30"> ExpressVPN Review Summary</h3>
                        <p>ExpressVPN prides itself on simplicity and security. With plenty of servers, impressive speeds and clean interfaces for all its software/apps, it’s definitely the No. 1 provider.</p>
                        <p style="text-align: center;"><a class="btn green-button" style="width: 210px; font-size: 16pt; margin: 0 auto;" href="https://www.bestvpn.com/goto/expressvpn_review">Visit ExpressVPN »</a>
                        </p>
                      </div><!-- summary -->

                      <?php the_content(); ?>

                    </div><!-- reviewBody -->
                  </div>
                </div>
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
    <?php get_sidebar(); ?>
  </div><!-- single_wrapper -->
<?php get_footer(); ?>
