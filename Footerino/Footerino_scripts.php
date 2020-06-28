<?php


/*
Plugin Name: Footerino
Plugin URI: https://github.com/AChaoub
Description: Plugin --> Display footer in any theme.
Author: CHAOUB Achraf
Version: 1.0
Author URI: https://github.com/AChaoub
*/
if(!defined('ABSPATH'))
  {
      exit;
  }
  // Add Scripts
  function Ajout_css(){
    // Add Main CSS
    wp_enqueue_style('Footerino-main-style', plugins_url(). '/Footerino/css/style.css');
  }

  add_action('wp_enqueue_scripts', 'Ajout_css');



// Creation le Menu d'options.
  function Ajout_Settings_Menu()
  {
      add_menu_page('Footer Text title', 'Footerino Options', 'manage_options',
    'footer_setting_page', 'Include_plugin', 'dashicons-paperclip');
  }
  function Include_plugin()
  {
      include_once('Footerino.php');
  }
  add_action('admin_menu','Ajout_Settings_Menu');

  //construction Footer
  function Creation_footer() {
    echo('<div id="foot">
            <div id="part7">
              <div class="part7-section">
                <span id="part7-desc">
                <p class="part7-section-title">
                  About Us
                </p>
                <span id="span1">
                  Fusce dapibus, tellus ac cursus commodo,
                  tortor mauris. Fusce dapibus, tellus ac cursus
                  commodo, tortor mauris.
                </span>
              </div>
              <div class="part7-section">
                <span class="part7-section-title">
                  Quick Links
                </span>
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About us</a></li>
                  <li><a href="#">City Guide</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Faqs</a></li>
                </ul>
              </div>
              <div class="part7-section">
                <span class="part7-section-title">
                  CONTACT US
                </span><br>
                <span id="part7-contact-txt">
                  Feel free to get in touch with us via phone or send
                  us a message
                </span>
                <span id="part7-contact-details">
                  <span id="part7-phone">'.get_option('Tel_value').'</span>
                  <span id="part7-email">'.get_option('Email_value').'</span>
                </span>
                
                  <div id="RS">
                    <a href="https://twitter.com/login?lang=fr">
                      <img title="Twitter" alt="Twitter" src="https://socialmediawidgets.files.wordpress.com/2014/03/01_twitter1.png" width="50" height="50" />
                    </a>
                    <a href="https://fr.linkedin.com/">
                      <img title="LinkedIn" alt="LinkedIn" src="https://socialmediawidgets.files.wordpress.com/2014/03/07_linkedin1.png" width="50" height="50" />
                    </a>
                    <a href="https://fr-fr.facebook.com/">
                      <img title="Facebook" alt="Facebook" src="https://socialmediawidgets.files.wordpress.com/2014/03/02_facebook1.png" width="50" height="50" />
                    </a>
                    <a href="https://www.pinterest.fr/">
                      <img title="Pinterest" alt="Pinterest" src="https://socialmediawidgets.files.wordpress.com/2014/03/13_pinterest1.png" width="50" height="50" />
                    </a>
                  </div>
                
                
              </div>
            </div><br>
            <div id="footer">
              <div id="footer-content">
                  <span id="footer-left">
                      @Copyright '.get_option('Copyright_value').'.
                  </span>
                  <span id="footer-left">
                       All Right Reserved
                  </span>
                  <i class="flex-gap"></i>
                  <span id="footer-right">
                      <span>
                          Privacy Policy
                      </span>
                      <span>
                          Terms &amp; Conditions
                      </span>
                  </span>
              </div>
            </div>
          </div>');
  }
  add_action( 'wp_footer', 'Creation_footer');


?>
