<?php /* Template Name: Top Page */ get_header(); ?>
<div class="single_wrapper">
  <div class="single_content_wrapper">
    <div class="single_content">

      <div class="top_vpn_head">
        <h1><?php the_title(); ?></h1>
      </div>

      <div class="post_content clearfix">
        <?php the_content(); ?>

        <table class="summary_table">
          <tbody>
            <tr class="toprow">
              <td>Rank</td>
              <td>Company</td>
              <td>Price</td>
              <td>OS</td>
              <td>Score</td>
              <td></td>
            </tr>
            <tr></tr>
            <tr></tr>

            <?php
            $temp = $wp_query;
            $wp_query= null;
            query_posts('post_type=servers'.'&showposts=100');
            while (have_posts()) : the_post();?>

            <tr>
              <td class="rank">*</td>
              <td>
                <a href="<?php the_field('server_url'); ?>" title="<?php the_title(); ?>">
                  <img src="<?php the_field('server_logo'); ?>" alt="<?php the_title(); ?>">
                </a>
              </td>
              <td class="price"><b><?php the_field('price'); ?></b> / month</td>
              <td class="compat">
                    <?php $cats = get_field('operating_systems');
                      foreach ($cats as $key => $val){
                        echo '<span class="'.$val.'"></span>';
                      } ;?>
<!--                 <img src="<?php echo get_template_directory_uri(); ?>/img/content/Linux.png" alt="Linux Compatible" title="Linux Compatible" width="26">
<img src="<?php echo get_template_directory_uri(); ?>/img/content/MacOSX.png" alt="Mac Compatible" title="Mac Compatible" width="26">
<img src="<?php echo get_template_directory_uri(); ?>/img/content/Windows.png" alt="PC Compatible" title="PC Compatible" width="26"> -->
              </td>
              <td>Sponsored
                <div class="rating-stars">
                  <div style="width:98%;margin:0 auto 0 0"></div>
                </div>
              </td>
              <td><a class="greenbtn" href="<?php the_field('server_url'); ?>" rel="nofollow" target="_blank">Visit <?php the_field('server_name'); ?></a>
                <br>
                <a href="<?php the_permalink(); ?>">Read Review</a>
              </td>
            </tr>

            <?php endwhile; ?>
            <?php $wp_query = null; $wp_query = $temp;?>


          </tbody>
        </table>

      </div>
    </div><!-- single_content -->
  </div><!-- single_content_wrapper -->
</div><!-- single_wrapper -->
<?php get_footer(); ?>
