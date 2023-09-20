<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}
	/**
	 * Редирект на головну із site.com/wp-admin
	 */
	add_action( 'init', function () {
		if ( is_admin() && ! current_user_can( 'administrator' ) &&
		     ! ( defined( 'DOING_AJAX' ) && DOING_AJAX ) ) {
			wp_redirect( home_url() );
			exit;
		}
	});

	/**
	 * Редирект на головну із site.com/wp-login.php
	 */
	add_action( 'init', function () {
		$page_viewed = basename( $_SERVER['REQUEST_URI'] );
		if ( $page_viewed == "wp-login.php" ) {
			wp_redirect( home_url() );
			exit;
		}
	});

	/**
	 * Редирект на головну після виходу із системи
	 */
	add_action( 'wp_logout', function () {
		$login_page  = home_url( 'wp-admin' );
		wp_redirect( $login_page . "?loggedout=true" );
		exit;
	});

	add_filter( 'login_headertext', 'goodwill_change_login_logo_text' );

	function goodwill_change_login_logo_text( $text ) {
		return 'GOODWILL';
	}

	add_action( 'login_head', 'goodwill_no_login_logo' );

	function goodwill_no_login_logo() {
		echo '<style>
		#login h1 a {
	    background-image: none;
	    text-indent: 0;
	    height: auto;
	    width: auto;
	    color: #ffffff;
	    font-size: 34px;
		}
		
		#login form{
			border-radius: 4px;
			border: 2px solid #235FCC;
			background-color: #181617;
			color: #ffffff;
		}
		
		#login form input{
			background-color: rgba(0,0,0,0);
			border: 1px solid #235FCC;
			color: #ffffff;
			font-size: 14px;
			padding-left: 20px;
		}
		
		#login form input::-webkit-input-placeholder {
        color: #5B6583;
      }
      #login form input:-moz-placeholder {
        color: #5B6583;
      }
      #login form input::-moz-placeholder {
        color: #5B6583;
      }
      #login form input:-ms-input-placeholder {
        color: #5B6583;
      }
		
		#login form input:focus{
			border: 1px solid #235FCC;
			box-shadow: none !important;
			outline: none;
		}
		
		#login form p.submit{
			width: 100%;
			display: flex;
			padding-top: 20px;
			justify-content: center;
		}
		
		#login form p.submit .button{
			display: inline-block;
			padding: 	5px 30px;
			background-color: #235FCC;
			font-size: 18px;
			border: 1px solid #235FCC;
			transition: all 0.5s;
			
			&:hover{
				border: 1px solid rgba(255,255,255,0.7);
			}	
		}
		
		#login #nav,
		#login #nav a,
		#backtoblog a{
			color: #ffffff;
		}
		
		.login #backtoblog a{
			color: #ffffff;
		}
		
		.login{
			background-color: #181617;
		}
		
		.language-switcher{
			display: none;
		}
		</style>';
	}

	add_filter( 'login_headerurl', 'goodwill_login_link_to_website' );

	function goodwill_login_link_to_website( $url ) {
		return site_url();
	}