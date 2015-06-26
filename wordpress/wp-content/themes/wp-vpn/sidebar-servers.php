<div class="single_sidebar_wrapper single_sidebar_wrapper_servers">

  <div class="single_sidebar single_sidebar_servers">

    <div class="bp-features-box">
      <h3 class="icon1">Operating Systems</h3>
      <?php $cats = get_field('operating_systems');
      echo '<ul>';
      foreach ($cats as $key => $val){
        echo '<li>'.$val.'</li>';
      }
      echo '<ul>';?>
    </div><!-- bp-features-box -->

    <div class="bp-features-box">
      <h3 class="icon2">Devices</h3>
      <?php $cats = get_field('devices');
      echo '<ul>';
      foreach ($cats as $key => $val){
        echo '<li>'.$val.'</li>';
      }
      echo '<ul>';?>
    </div>

    <div class="bp-features-box">
      <h3 class="icon3">Payment Options</h3>
      <?php $cats = get_field('payment_options');
      echo '<ul>';
      foreach ($cats as $key => $val){
        echo '<li>'.$val.'</li>';
      }
      echo '<ul>';?>
    </div>

    <div class="bp-features-box">
      <h3 class="icon4">Support Types</h3>
      <?php $cats = get_field('support_types');
      echo '<ul>';
      foreach ($cats as $key => $val){
        echo '<li>'.$val.'</li>';
      }
      echo '<ul>';?>
    </div>

    <div class="bp-features-box">
      <h3 class="icon5">IP Types</h3>
      <?php $cats = get_field('ip_types');
      echo '<ul>';
      foreach ($cats as $key => $val){
        echo '<li>'.$val.'</li>';
      }
      echo '<ul>';?>
    </div>

    <div class="bp-features-box last">
      <h3 class="icon6">Protocols</h3>
      <?php $cats = get_field('protocols');
      echo '<ul>';
      foreach ($cats as $key => $val){
        echo '<li>'.$val.'</li>';
      }
      echo '<ul>';?>
    </div>

  </div><!-- single_sidebar -->
</div><!-- single_sidebar_wrapper -->


