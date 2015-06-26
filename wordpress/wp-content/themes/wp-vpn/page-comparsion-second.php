<?php /* Template Name: Comparsion Second Page */ get_header(); ?>
<div class="single_wrapper">


  <div class="single_content_wrapper">
    <div class="single_content">

      <div class="post_content clearfix">


<?php


session_start();
$search_404 = $_SESSION['search_404'];
session_destroy();

if($search_404){
?>
<h1>Page could not be found(404)</h1>

<h2>Perhaps you can find useful information in the articles below:</h2>
<?php
}
?>



<?php echo get_search_query(); ?>
    <ul class="all-review-page">
      <?php

// $zapit = apply_filters( 'get_search_query', get_query_var( 's' ) );
$zapit = 'operating_systems';

      // $temp = $wp_query;
      // $wp_query= null;
      query_posts('post_type=servers'.'&showposts=10');
      while (have_posts()) : the_post();?>

      <li>

        <p class="user-name"><?php the_title(); ?><span class="user-from user-from-<?php the_field('country'); ?>">
        <?php

$cats = get_field($zapit);
        foreach ($cats as $key => $val){
        echo '<li>'.$val.'</li>';
      } ?>

      </li>


      <?php endwhile; ?>
      <?php $wp_query = null; $wp_query = $temp;?>
    </ul><!-- all-review-page -->















<!--
<ul>
<?php
global $post;
$args = array( 'numberposts' => 5, 'offset'=> 1, 'category' => 1 );
$myposts = get_posts( $args );
foreach( $myposts as $post ) :
  setup_postdata($post); ?>
  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endforeach;
wp_reset_postdata(); ?>
</ul>
 -->
      <h1><?php the_title(); ?></h1>


      </div><!-- post_content -->
    </div>
  </div>

</div><!-- single_wrapper -->
<?php get_footer(); ?>
