<?php get_header(); ?>
<div class="loop_wrapper clearfix">

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <div class="post clearfix">
    <div class="post_pre">

      <div class="image">

        <a class="cover" href="<?php the_permalink(); ?>">
          <?php if ( has_post_thumbnail()) :
            the_post_thumbnail('medium');
          else: ?>
            <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
          <?php endif; ?>
        </a>

        <a href="<?php the_permalink(); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/img/imgcover.png" class="imgcover" alt="">
        </a>
      </div>

      <h2><a href="<?php the_permalink(); ?>">5 Best VPNs for China (June 2015)</a></h2>
      <div class="info"><?php the_time('j F Y'); ?> | <?php the_author_posts_link(); ?>
      </div>
      <div class="post_content">
        Since we last updated this article in March, we have learned of China’s new Social Credit System. Under this terrifying scheme, all of China’s 1.3 billion citizens will be awarded a ‘citizen score’ based on a variety of variety of criteria, such as financial history, criminal record, and online...
        <a href="<?php the_permalink(); ?>" class="more-link">
          <img src="<?php echo get_template_directory_uri(); ?>/img/readmore.png" alt="Read more" style="background: none">
        </a>
      </div><!-- post_content -->
    </div>
  </div><!-- post -->
<?php endwhile; else: ?>
  <div class="post">

    <h2 class="title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>

  </div><!-- /article -->
<?php endif; ?>

  <?php get_template_part('pagination'); ?>
</div><!-- loop_wrapper -->
<?php get_footer(); ?>
