<div class="single_sidebar_wrapper">
  <div class="single_sidebar">

  <?php if ( is_active_sidebar('widgetarea1') ) : ?>
    <?php dynamic_sidebar( 'widgetarea1' ); ?>
  <?php else : ?>

  <?php endif; ?>

  </div>
</div><!-- single_sidebar_wrapper -->
