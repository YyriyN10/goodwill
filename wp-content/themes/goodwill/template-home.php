<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}
	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Template home
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package goodwill
	 *
	 */

	get_header();
	?>

<?php
	$mainScreenCall = carbon_get_post_meta( get_the_ID(), 'goodwill_main_screen_call'.carbon_lang_prefix());


?>
	<!-- Main screen -->
	<section class="main-screen">
	  <div class="container">
	    <div class="row">
	      <div class="content col-12">
	        <?php the_content();?>
		      <?php if( $mainScreenCall ):?>
			      <p class="main-call"><?php echo $mainScreenCall;?></p>
		      <?php endif;?>
		      <a href="" class="button"><?php echo esc_html( pll__( 'Розрахувати вартість послуги' ) ); ?></a>
	      </div>
	    </div>
	  </div>
	</section>

<?php
	$mainSlogan = carbon_get_post_meta( get_the_ID(), 'goodwill_main_screen_slogan'.carbon_lang_prefix());

	if ( $mainSlogan ):
?>
	<!-- Main slogan -->
	<section class="main-slogan">
	  <div class="container">
	    <div class="row">
	      <h2 class="block-title col-12"><?php echo $mainSlogan;?></h2>
	    </div>
	  </div>
	</section>
<?php endif;?>

<?php
	$ourAdvantagesTitle = carbon_get_post_meta( get_the_ID(), 'goodwill_why_us_title'.carbon_lang_prefix());
	$ourAdvantagesList = carbon_get_post_meta( get_the_ID(), 'goodwill_why_us_advantages_list'.carbon_lang_prefix());

	if ( $ourAdvantagesTitle && $ourAdvantagesList ):
?>
	<!-- Our advantages -->
	<section class="our-advantages">
	  <div class="container">
	    <div class="row">
	      <h2 class="block-title col-12"><?php echo $ourAdvantagesTitle;?></h2>
	    </div>
	    <div class="row">
	      <div class="content col-12">
		      <?php foreach( $ourAdvantagesList as $item ):?>
			      <div class="item">
				      <div class="icon-wrapper">
					      <img data-src="<?php echo $item['advantage_image'];?>" alt="" class="svg-pic">
				      </div>
				      <h3 class="name"><?php echo $item['advantage_name'];?></h3>
				      <p class="description"><?php echo $item['advantage_description'];?></p>
			      </div>
		      <?php endforeach;?>
	      </div>
	    </div>
	  </div>
	</section>
<?php endif;?>

<?php
	$callToActionTitle = carbon_get_post_meta( get_the_ID(), 'goodwill_call_block_title'.carbon_lang_prefix());
	$callToActionText = carbon_get_post_meta( get_the_ID(), 'goodwill_call_block_text'.carbon_lang_prefix());

	if ( $callToActionTitle || $callToActionText ):
?>

	<!-- Cal to action -->
	<section class="call-to-action">
	  <div class="container">
	    <div class="row">
	      <div class="content col-12">
		      <h2 class="block-title"><?php echo $callToActionTitle;?></h2>
	        <p class="call"><?php echo $callToActionText;?></p>
		      <a href="" class="button"><?php echo esc_html( pll__( 'Зв’яжіться зі мною' ) ); ?></a>
	      </div>
	    </div>
	  </div>
	</section>
<?php endif;?>

<?php
	$aboutUsTitle = carbon_get_post_meta( get_the_ID(), 'goodwill_about_us_title'.carbon_lang_prefix());
	$aboutUsText = carbon_get_post_meta( get_the_ID(), 'goodwill_about_us_text'.carbon_lang_prefix());
	$aboutUsSlogan = carbon_get_post_meta( get_the_ID(), 'goodwill_about_us_slogan'.carbon_lang_prefix());
	$aboutUsGallery = carbon_get_post_meta( get_the_ID(), 'goodwill_about_us_images_list'.carbon_lang_prefix());

	if ( $aboutUsTitle && $aboutUsText ):
?>
	<!-- About us-->
	<section class="about-us">
	  <div class="container">
	    <div class="row">
		    <div class="text-content col-lg-6">
			    <h2 class="block-title"><?php echo $aboutUsTitle;?></h2>
			    <div class="text"><?php echo $aboutUsText;?></div>
		    </div>
		    <?php if( $aboutUsGallery ):?>
			    <div class="slider-wrapper col-lg-6">
				    <div class="about-slider" id="about-slider">
					    <?php foreach( $aboutUsGallery as $item ):?>
						    <div class="slide">
							    <img src="<?php echo $item['about_image'];?>" alt="">
						    </div>
					    <?php endforeach;?>
				    </div>
			    </div>
		    <?php endif;?>
	    </div>
		  <?php if( $aboutUsSlogan ):?>
			  <div class="row">
				  <div class="content col-12">
					  <p class="slogan"><?php echo $mainSlogan;?></p>
				  </div>
			  </div>
		  <?php endif;?>
	  </div>
	</section>
<?php endif;?>

	 <?php
	 	$servicesArgs = array(
	 		'posts_per_page' => -1,
	 		'orderby' 	 => 'date',
	 		'post_type'  => 'services',
	 		'post_status'    => 'publish'
	 	);

	 	$servicesList = new WP_Query( $servicesArgs );

	 		  if ( $servicesList->have_posts() ) : ?>
			    <!-- Our services -->
			    <section class="our-services">
				    <div class="container">
					    <div class="row">
						    <h2 class="block-title col-12"><?php echo esc_html( pll__( 'Наші послуги' ) ); ?></h2>
					    </div>
					    <div class="row">
						    <?php while ( $servicesList->have_posts() ) : $servicesList->the_post();?>
							    <div class="content col-12">
								    <div class="item">
                      <h3 class="service-name"><?php the_title();?></h3>
                      <a href="" class="button"><?php echo esc_html( pll__( 'Залишити заявку' ) ); ?></a>
								    </div>
							    </div>
						    <?php endwhile;?>
					    </div>
				    </div>
			    </section>

	 	<?php endif; ?>
	 <?php wp_reset_postdata(); ?>

<?php
  $rangeCleaningServicesTitle = carbon_get_post_meta( get_the_ID(), 'goodwill_range_of_services_title'.carbon_lang_prefix());
	$rangeCleaningServicesList = carbon_get_post_meta( get_the_ID(), 'goodwill_range_of_services_list'.carbon_lang_prefix());

	if ( $rangeCleaningServicesList && $rangeCleaningServicesList ):
?>
	<!-- Range cleaning services -->
	<section class="range-cleaning-services">
	  <div class="container">
	    <div class="row">
	      <h2 class="block-title col-12"></h2>
	    </div>
	    <div class="row">
	      <div class="content col-12">
          <?php foreach( $rangeCleaningServicesList as $item ):?>
            <p class="item"><?php echo $item['service_name'];?></p>
          <?php endforeach;?>
	      </div>
	    </div>
	  </div>
	</section>
<?php endif;?>

   <?php
   	$reviewsArgs = array(
   		'posts_per_page' => -1,
   		'orderby' 	 => 'date',
   		'post_type'  => 'reviews',
   		'post_status'    => 'publish'
   	);

   	$reviewsList = new WP_Query( $reviewsArgs );

   		  if ( $reviewsList->have_posts() ) :?>
          <!-- Reviews -->
          <section class="reviews">
            <div class="container">
              <div class="row">
                <h2 class="block-title col-12">
                  <?php echo carbon_get_post_meta( get_the_ID(), 'goodwill_reviews_title'.carbon_lang_prefix());;?>
                </h2>
                <h3 class="subtitle col-12">
	                <?php echo carbon_get_post_meta( get_the_ID(), 'goodwill_reviews_subtitle'.carbon_lang_prefix());;?>
                </h3>
              </div>
              <div class="row">
                <div class="slider-wrapper col-12">
                  <div class="reviews-slider" id="reviews-slider">
	                  <?php while ( $reviewsList->have_posts() ) : $reviewsList->the_post(); ?>
                      <div class="slide">
                        <div class="avatar"><?php the_post_thumbnail_url();?></div>
                        <h3 class="nam"><?php the_title();?></h3>
                        <div class="text">
                          <?php the_content();?>
                        </div>
                      </div>
	                  <?php endwhile;?>
                  </div>
                </div>
              </div>
            </div>
          </section>
   	<?php endif; ?>
   <?php wp_reset_postdata(); ?>


  <!-- Contact form -->
  <section class="contact-form">
    <div class="container">
      <div class="row">
        <h2 class="block-title col-12">
	        <?php echo carbon_get_post_meta( get_the_ID(), 'goodwill_contact_form_title'.carbon_lang_prefix());;?>
        </h2>
        <h3 class="subtitle col-12">
		      <?php echo carbon_get_post_meta( get_the_ID(), 'goodwill_contact_form_subtitle'.carbon_lang_prefix());;?>
        </h3>
      </div>
      <div class="row">
        <div class="form-wrapper col-12">
          <iframe src="https://goodwills.site/crm/index.php?module=ext/public/form&id=1" width="100%" height="300"  frameborder="0" scrolling="auto" onLoad="window.scrollTo(0, 0)"></iframe>
        </div>

      </div>
    </div>
  </section>

<?php get_footer();
