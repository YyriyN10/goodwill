
<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package goodwill
 */

$sitePhone = carbon_get_theme_option('goodwill_phone_number');
$siteEmail = carbon_get_theme_option('goodwill_email_address');

$phoneToCall = preg_replace( '/[^0-9]/', '', $sitePhone);


?>
  </main>
	<footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="content col-12">
          <div class="social-list">
            <h3 class="footer-subtitle"><?php echo esc_html( pll__( 'Ми у соцмережах' ) ); ?>:</h3>
            <a href="" target="_blank"></a>
          </div>
          <div class="contacts">
            <h3 class="footer-subtitle"><?php echo esc_html( pll__( 'Наші контакти' ) ); ?>:</h3>
            <a href="tel:<?php echo $phoneToCall;?>" class="item">
              <?php echo $sitePhone;?>
            </a>
            <a href="mailto:<?php echo antispambot($siteEmail, 1);?>" class="item">
	            <?php echo antispambot($siteEmail);?>
            </a>
          </div>
          <nav>
	          <?php
		          wp_nav_menu(
			          array(
				          'theme_location' => 'menu-2',
				          'menu_id'        => 'footer-menu',
				          'container' => false,
				          'menu_class' => 'footer-menu',
			          )
		          );
	          ?>
          </nav>
        </div>
      </div>
    </div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
