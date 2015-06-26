<?php /* Template Name: Comparsion Second Page */ get_header(); ?>
<div class="single_wrapper">

<div class="blackwoter">
<p>911</p>
  <?php
global $wp_query;
$total_results = $wp_query->found_posts;

echo "$total_results";

?>

<p>112</p>


</div>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <div class="single_content_wrapper">
    <div class="single_content">
      <h1><?php the_title(); ?></h1>
      <div class="post_content clearfix">
        <div style="clear: both"></div>
        <?php the_content(); ?>

        <div class="bp_compare_head">
          <form action="./comparsion-second_files/comparsion-second.html" method="post" style="display:inline-block; margin-bottom: 15px;">
            <input type="hidden" name="bp-q" value="Array">
            <input type="hidden" name="bp-search" value="1">
            <input type="hidden" name="bp-start" value="5">
            <input type="submit" value="Next 5 »" class="greenbtn">
          </form>
          Comparison of VPN Providers
        </div><!-- bp_compare_head -->

        <table class="bp_compare_table">
          <tbody>
            <tr>
              <td class="prop"><b></b>
              </td>
              <td class="fld-logo_html2">
                <a href="https://www.bestvpn.com/blog/9405/expressvpn_review/" title="ExpressVPN">
                  <img src="./comparsion-second_files/ExpressVPN_Logo.png" alt="ExpressVPN" style="height:30px;border:none;background:none;width:106px;height: auto;">
                </a>
              </td>
              <td class="fld-logo_html2">
                <a href="https://www.bestvpn.com/blog/10973/ipvanish-review-3/" title="IPVanish">
                  <img src="./comparsion-second_files/IPVanish_Logo.png" alt="IPVanish" style="height:30px;border:none;background:none;width:106px;height: auto;">
                </a>
              </td>
              <td class="fld-logo_html2">
                <a href="https://www.bestvpn.com/blog/10123/vyprvpn-review/" title="VyprVPN">
                  <img src="./comparsion-second_files/homeVyprvpnLogo.jpg" alt="VyprVPN" style="height:30px;border:none;background:none;width:106px;height: auto;">
                </a>
              </td>
              <td class="fld-logo_html2">
                <a href="https://www.bestvpn.com/blog/3711/private-internet-access-review/" title="Private Net Access">
                  <img src="./comparsion-second_files/logo21.png" alt="Private Net Access" style="height:30px;border:none;background:none;width:106px;height: auto;">
                </a>
              </td>
              <td class="fld-logo_html2">
                <a href="https://www.bestvpn.com/blog/13688/cyberghost-review-2/" title="CyberGhost">
                  <img src="./comparsion-second_files/cyberghost-logo.png" alt="CyberGhost" style="height:30px;border:none;background:none;width:106px;height: auto;">
                </a>
              </td>
            </tr>
            <tr>
              <td class="prop"><b>Price</b>
              </td>
              <td class="fld-price"><b>$8.32</b> / mo</td>
              <td class="fld-price"><b>$6.49</b> / mo</td>
              <td class="fld-price"><b>$6.67</b> / mo</td>
              <td class="fld-price"><b>$6.95</b> / mo</td>
              <td class="fld-price"><b>$5.83</b> / mo</td>
            </tr>
            <tr>
              <td class="prop"><b></b>
              </td>
              <td><a href="https://www.bestvpn.com/goto/expressvpn" rel="nofollow" target="_blank" class="greenbtn">Visit Site »</a>
                <p style="margin:6px 0"><a href="https://www.bestvpn.com/blog/9405/expressvpn_review/">Read Review</a>
                </p>
              </td>
              <td><a href="https://www.bestvpn.com/goto/ipvanish" rel="nofollow" target="_blank" class="greenbtn">Visit Site »</a>
                <p style="margin:6px 0"><a href="https://www.bestvpn.com/blog/10973/ipvanish-review-3/">Read Review</a>
                </p>
              </td>
              <td><a href="https://www.bestvpn.com/goto/vypervpn" rel="nofollow" target="_blank" class="greenbtn">Visit Site »</a>
                <p style="margin:6px 0"><a href="https://www.bestvpn.com/blog/10123/vyprvpn-review/">Read Review</a>
                </p>
              </td>
              <td><a href="https://www.bestvpn.com/goto/privateinternetaccess" rel="nofollow" target="_blank" class="greenbtn">Visit Site »</a>
                <p style="margin:6px 0"><a href="https://www.bestvpn.com/blog/3711/private-internet-access-review/">Read Review</a>
                </p>
              </td>
              <td><a href="https://www.bestvpn.com/goto/cyberghost" rel="nofollow" target="_blank" class="greenbtn">Visit Site »</a>
                <p style="margin:6px 0"><a href="https://www.bestvpn.com/blog/13688/cyberghost-review-2/">Read Review</a>
                </p>
              </td>
            </tr>
            <tr>
              <td class="section_head" colspan="6">
                <div>Operating Systems</div>
              </td>
            </tr>
            <tr>
              <td class="prop">Linux Compatible</td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
            </tr>
            <tr class="alt-row">
              <td class="prop">Mac Compatible</td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
            </tr>
            <tr>
              <td class="prop">PC Compatible</td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
            </tr>
            <tr>
              <td class="section_head" colspan="6">
                <div>Devices</div>
              </td>
            </tr>
            <tr>
              <td class="prop">Android Compatible</td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
            </tr>
            <tr class="alt-row">
              <td class="prop">Cellphone access</td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
            </tr>
            <tr>
              <td class="prop">DDWRT Router</td>
              <td>
                <div class="icon-cross"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
            </tr>
            <tr class="alt-row">
              <td class="prop">iOS Compatible</td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
            </tr>
            <tr>
              <td class="prop">Nokia</td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-cross"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-cross"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
            </tr>
            <tr class="alt-row">
              <td class="prop">Tablet Compatible</td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
            </tr>
            <tr>
              <td class="prop">Tomato Router</td>
              <td>
                <div class="icon-cross"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
            </tr>
            <tr class="alt-row">
              <td class="prop">Windows Mobile</td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
            </tr>
            <tr>
              <td class="section_head" colspan="6">
                <div>Payment Options</div>
              </td>
            </tr>
            <tr>
              <td class="prop">American Express</td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
            </tr>
            <tr class="alt-row">
              <td class="prop">Bank Transfer</td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-cross"></div>
              </td>
              <td>
                <div class="icon-cross"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
            </tr>
            <tr>
              <td class="prop">Bitcoin</td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-cross"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
            </tr>
            <tr class="alt-row">
              <td class="prop">Diners Club</td>
              <td>
                <div class="icon-cross"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-cross"></div>
              </td>
              <td>
                <div class="icon-cross"></div>
              </td>
              <td>
                <div class="icon-cross"></div>
              </td>
            </tr>
            <tr>
              <td class="prop">Google Checkout</td>
              <td>
                <div class="icon-cross"></div>
              </td>
              <td>
                <div class="icon-cross"></div>
              </td>
              <td>
                <div class="icon-cross"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-cross"></div>
              </td>
            </tr>
            <tr class="alt-row">
              <td class="prop">JCB</td>
              <td>
                <div class="icon-cross"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-cross"></div>
              </td>
              <td>
                <div class="icon-cross"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
            </tr>
            <tr>
              <td class="prop">Paypal</td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
            </tr>
            <tr class="alt-row">
              <td class="prop">Visa / Mastercard</td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
            </tr>
            <tr>
              <td class="section_head" colspan="6">
                <div>Support Types</div>
              </td>
            </tr>
            <tr>
              <td class="prop">24/7 Support</td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-cross"></div>
              </td>
              <td>
                <div class="icon-cross"></div>
              </td>
            </tr>
            <tr class="alt-row">
              <td class="prop">Forum</td>
              <td>
                <div class="icon-cross"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-cross"></div>
              </td>
              <td>
                <div class="icon-cross"></div>
              </td>
              <td>
                <div class="icon-cross"></div>
              </td>
            </tr>
            <tr>
              <td class="prop">Live Chat</td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
            </tr>
            <tr class="alt-row">
              <td class="prop">Remote Desktop</td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-cross"></div>
              </td>
              <td>
                <div class="icon-cross"></div>
              </td>
              <td>
                <div class="icon-cross"></div>
              </td>
              <td>
                <div class="icon-cross"></div>
              </td>
            </tr>
            <tr>
              <td class="prop">Skype</td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-cross"></div>
              </td>
              <td>
                <div class="icon-cross"></div>
              </td>
              <td>
                <div class="icon-cross"></div>
              </td>
              <td>
                <div class="icon-cross"></div>
              </td>
            </tr>
            <tr class="alt-row">
              <td class="prop">Ticket Support</td>
              <td>
                <div class="icon-cross"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-cross"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
            </tr>
            <tr>
              <td class="section_head" colspan="6">
                <div>IP Types</div>
              </td>
            </tr>
            <tr>
              <td class="prop">Dedicated IP</td>
              <td>
                <div class="icon-cross"></div>
              </td>
              <td>
                <div class="icon-cross"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-cross"></div>
              </td>
              <td>
                <div class="icon-cross"></div>
              </td>
            </tr>
            <tr class="alt-row">
              <td class="prop">Shared IP (Dynamic)</td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-cross"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
            </tr>
            <tr>
              <td class="prop">Total IPs</td>
              <td>
                <div class="icon-cross"></div>
              </td>
              <td>
                <div class="icon-cross"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-cross"></div>
              </td>
              <td>
                <div class="icon-cross"></div>
              </td>
            </tr>
            <tr>
              <td class="section_head" colspan="6">
                <div>Protocols</div>
              </td>
            </tr>
            <tr>
              <td class="prop">IPSec</td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-cross"></div>
              </td>
              <td>
                <div class="icon-cross"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
            </tr>
            <tr class="alt-row">
              <td class="prop">L2TP/IPSec</td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
            </tr>
            <tr>
              <td class="prop">OpenVPN</td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
            </tr>
            <tr class="alt-row">
              <td class="prop">PPTP</td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
            </tr>
            <tr>
              <td class="prop">SSL</td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-cross"></div>
              </td>
              <td>
                <div class="icon-cross"></div>
              </td>
            </tr>
            <tr class="alt-row">
              <td class="prop">SSTP</td>
              <td>
                <div class="icon-tick"></div>
              </td>
              <td>
                <div class="icon-cross"></div>
              </td>
              <td>
                <div class="icon-cross"></div>
              </td>
              <td>
                <div class="icon-cross"></div>
              </td>
              <td>
                <div class="icon-cross"></div>
              </td>
            </tr>
          </tbody>
        </table>

      </div><!-- post_content -->
    </div>
  </div>
  <?php endwhile; else: // If 404 page error ?>
    <article>
      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
    </article>
  <?php endif; ?>
</div><!-- single_wrapper -->
<?php get_footer(); ?>
