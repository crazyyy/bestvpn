<?php /* Template Name: Comparsion Page */ get_header(); ?>
  <div class="single_wrapper">
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <div class="single_content_wrapper">
      <div class="single_content">
        <h1><?php the_title(); ?></h1>
        <div class="post_content clearfix">
          <div style="clear: both"></div>
          <?php the_content(); ?>


<form role="search" method="get" class="search-form" action="<?php echo home_url(); ?>/comparison-second-page">
  <label>
    <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
  </label>
  <input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>


          <form id="bp-questionnaire" action="http://bestvpn.dev/comparison-second-page.htm" method="post">

            <h3>Select the features you need</h3>
            <div style="overflow:hidden">
              <div style="float:left; width:30%; padding:10px">
                <b>Operating Systems</b>
                <ul style="overflow:auto; height:200px; border:1px inset gray">
                  <li>
                    <input id="bp-q-13" name="bp-q[13]" value="13" type="checkbox">
                    <label for="bp-q-13">Linux Compatible</label>
                  </li>
                  <li>
                    <input id="bp-q-2" name="bp-q[2]" value="2" type="checkbox">
                    <label for="bp-q-2">Mac Compatible</label>
                  </li>
                  <li>
                    <input id="bp-q-1" name="bp-q[1]" value="1" type="checkbox">
                    <label for="bp-q-1">PC Compatible</label>
                  </li>
                </ul>
              </div>
              <div style="float:left; width:30%; padding:10px">
                <b>Devices</b>
                <ul style="overflow:auto; height:200px; border:1px inset gray">
                  <li>
                    <input id="bp-q-4" name="bp-q[4]" value="4" type="checkbox">
                    <label for="bp-q-4">Android Compatible</label>
                  </li>
                  <li>
                    <input id="bp-q-22" name="bp-q[22]" value="22" type="checkbox">
                    <label for="bp-q-22">Cellphone access</label>
                  </li>
                  <li>
                    <input id="bp-q-35" name="bp-q[35]" value="35" type="checkbox">
                    <label for="bp-q-35">DDWRT Router</label>
                  </li>
                  <li>
                    <input id="bp-q-3" name="bp-q[3]" value="3" type="checkbox">
                    <label for="bp-q-3">iOS Compatible</label>
                  </li>
                  <li>
                    <input id="bp-q-38" name="bp-q[38]" value="38" type="checkbox">
                    <label for="bp-q-38">Nokia</label>
                  </li>
                  <li>
                    <input id="bp-q-6" name="bp-q[6]" value="6" type="checkbox">
                    <label for="bp-q-6">Tablet Compatible</label>
                  </li>
                  <li>
                    <input id="bp-q-34" name="bp-q[34]" value="34" type="checkbox">
                    <label for="bp-q-34">Tomato Router</label>
                  </li>
                  <li>
                    <input id="bp-q-37" name="bp-q[37]" value="37" type="checkbox">
                    <label for="bp-q-37">Windows Mobile</label>
                  </li>
                </ul>
              </div>
              <div style="float:left; width:30%; padding:10px">
                <b>Payment Options</b>
                <ul style="overflow:auto; height:200px; border:1px inset gray">
                  <li>
                    <input id="bp-q-16" name="bp-q[16]" value="16" type="checkbox">
                    <label for="bp-q-16">American Express</label>
                  </li>
                  <li>
                    <input id="bp-q-17" name="bp-q[17]" value="17" type="checkbox">
                    <label for="bp-q-17">Bank Transfer</label>
                  </li>
                  <li>
                    <input id="bp-q-28" name="bp-q[28]" value="28" type="checkbox">
                    <label for="bp-q-28">Bitcoin</label>
                  </li>
                  <li>
                    <input id="bp-q-20" name="bp-q[20]" value="20" type="checkbox">
                    <label for="bp-q-20">Diners Club</label>
                  </li>
                  <li>
                    <input id="bp-q-53" name="bp-q[53]" value="53" type="checkbox">
                    <label for="bp-q-53">Gift Cards</label>
                  </li>
                  <li>
                    <input id="bp-q-47" name="bp-q[47]" value="47" type="checkbox">
                    <label for="bp-q-47">Google Checkout</label>
                  </li>
                  <li>
                    <input id="bp-q-19" name="bp-q[19]" value="19" type="checkbox">
                    <label for="bp-q-19">JCB</label>
                  </li>
                  <li>
                    <input id="bp-q-15" name="bp-q[15]" value="15" type="checkbox">
                    <label for="bp-q-15">Paypal</label>
                  </li>
                  <li>
                    <input id="bp-q-18" name="bp-q[18]" value="18" type="checkbox">
                    <label for="bp-q-18">Visa / Mastercard</label>
                  </li>
                </ul>
              </div>
              <div style="float:left; width:30%; padding:10px">
                <b>Support Types</b>
                <ul style="overflow:auto; height:200px; border:1px inset gray">
                  <li>
                    <input id="bp-q-14" name="bp-q[14]" value="14" type="checkbox">
                    <label for="bp-q-14">24/7 Support</label>
                  </li>
                  <li>
                    <input id="bp-q-27" name="bp-q[27]" value="27" type="checkbox">
                    <label for="bp-q-27">Forum</label>
                  </li>
                  <li>
                    <input id="bp-q-25" name="bp-q[25]" value="25" type="checkbox">
                    <label for="bp-q-25">Live Chat</label>
                  </li>
                  <li>
                    <input id="bp-q-24" name="bp-q[24]" value="24" type="checkbox">
                    <label for="bp-q-24">Phone Support</label>
                  </li>
                  <li>
                    <input id="bp-q-30" name="bp-q[30]" value="30" type="checkbox">
                    <label for="bp-q-30">Remote Desktop</label>
                  </li>
                  <li>
                    <input id="bp-q-29" name="bp-q[29]" value="29" type="checkbox">
                    <label for="bp-q-29">Skype</label>
                  </li>
                  <li>
                    <input id="bp-q-49" name="bp-q[49]" value="49" type="checkbox">
                    <label for="bp-q-49">Ticket Support</label>
                  </li>
                </ul>
              </div>
              <div style="float:left; width:30%; padding:10px">
                <b>IP Types</b>
                <ul style="overflow:auto; height:200px; border:1px inset gray">
                  <li>
                    <input id="bp-q-32" name="bp-q[32]" value="32" type="checkbox">
                    <label for="bp-q-32">Dedicated IP</label>
                  </li>
                  <li>
                    <input id="bp-q-33" name="bp-q[33]" value="33" type="checkbox">
                    <label for="bp-q-33">Shared IP (Dynamic)</label>
                  </li>
                  <li>
                    <input id="bp-q-48" name="bp-q[48]" value="48" type="checkbox">
                    <label for="bp-q-48">Shared IP (Static)</label>
                  </li>
                  <li>
                    <input id="bp-q-31" name="bp-q[31]" value="31" type="checkbox">
                    <label for="bp-q-31">Total IPs</label>
                  </li>
                </ul>
              </div>
              <div style="float:left; width:30%; padding:10px">
                <b>Protocols</b>
                <ul style="overflow:auto; height:200px; border:1px inset gray">
                  <li>
                    <input id="bp-q-50" name="bp-q[50]" value="50" type="checkbox">
                    <label for="bp-q-50">Cisco DTLS</label>
                  </li>
                  <li>
                    <input id="bp-q-44" name="bp-q[44]" value="44" type="checkbox">
                    <label for="bp-q-44">IPSec</label>
                  </li>
                  <li>
                    <input id="bp-q-40" name="bp-q[40]" value="40" type="checkbox">
                    <label for="bp-q-40">L2TP/IPSec</label>
                  </li>
                  <li>
                    <input id="bp-q-52" name="bp-q[52]" value="52" type="checkbox">
                    <label for="bp-q-52">OpenSSH</label>
                  </li>
                  <li>
                    <input id="bp-q-42" name="bp-q[42]" value="42" type="checkbox">
                    <label for="bp-q-42">OpenVPN</label>
                  </li>
                  <li>
                    <input id="bp-q-39" name="bp-q[39]" value="39" type="checkbox">
                    <label for="bp-q-39">PPTP</label>
                  </li>
                  <li>
                    <input id="bp-q-51" name="bp-q[51]" value="51" type="checkbox">
                    <label for="bp-q-51">SmartDNS</label>
                  </li>
                  <li>
                    <input id="bp-q-41" name="bp-q[41]" value="41" type="checkbox">
                    <label for="bp-q-41">SSL</label>
                  </li>
                  <li>
                    <input id="bp-q-43" name="bp-q[43]" value="43" type="checkbox">
                    <label for="bp-q-43">SSTP</label>
                  </li>
                </ul>
              </div>
            </div>
            <input type="hidden" name="bp-search" value="1">
            <input type="submit" value="Search">
          </form>


        </div>
      </div>
    </div>

    <?php endwhile; else: // If 404 page error ?>
    <article>
      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
    </article>
  <?php endif; ?>
  </div><!-- single_wrapper -->
<?php get_footer(); ?>
