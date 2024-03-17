<?php
//about theme info
add_action( 'admin_menu', 'digital_marketer_gettingstarted' );
function digital_marketer_gettingstarted() {
	add_theme_page( esc_html__('About Digital Marketer', 'digital-marketer'), esc_html__('About Digital Marketer', 'digital-marketer'), 'edit_theme_options', 'digital_marketer_guide', 'digital_marketer_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function digital_marketer_admin_theme_style() {
   wp_enqueue_style('digital-marketer-custom-admin-style', esc_url( get_template_directory_uri() ) . '/getstarted/getstarted.css');
   wp_enqueue_script('digital-marketer-tabs', esc_url( get_template_directory_uri() ) . '/getstarted/js/tab.js');
}
add_action('admin_enqueue_scripts', 'digital_marketer_admin_theme_style');

//guidline for about theme
function digital_marketer_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'digital-marketer' );
?>
<?php $digital_marketer_theme = wp_get_theme(); ?>

<div class="wrapper-info">
   <div class="col-left">
    	<h2><?php esc_html_e( 'Welcome to Digital Marketer Theme', 'digital-marketer' ); ?> <span class="version">Version: <?php echo esc_html($theme['Version']);?></span></h2>
    	<p><?php esc_html_e('The Digital Marketer WordPress theme is a versatile and user-friendly template designed specifically for digital marketing professionals and agencies. With its sleek and modern design, customizable layout options, and integrated marketing tools, this theme empowers users to create stunning websites that effectively showcase their services, portfolios, and expertise. It offers features like SEO optimization, social media integration, and responsive design, making it an ideal choice for boosting online visibility and engaging with clients in the digital marketing industry.','digital-marketer'); ?></p>
   </div>
   <div class="col-right">
 		<img class="img_responsive" style="width: 100%;" src="<?php echo esc_url( $digital_marketer_theme->get_screenshot() ); ?>" />
   </div>
   <div class="tab-sec">
		<div class="tab">
			<button class="tablinks" onclick="digital_marketer_open_tab(event, 'lite_theme')"><?php esc_html_e( 'Lite Theme Details', 'digital-marketer' ); ?></button>
		  	<button class="tablinks" onclick="digital_marketer_open_tab(event, 'pro_theme')"><?php esc_html_e( 'Get Premium', 'digital-marketer' ); ?></button>
		</div>

		<!-- Tab content -->
		<div id="lite_theme" class="tabcontent open">
			<div class="lite-theme-tab" style="">
				<h3><?php esc_html_e( 'Lite Theme Information', 'digital-marketer' ); ?></h3>
				<hr class="h3hr">
		  		<p><?php
						$digital_marketer_theme = wp_get_theme();
						echo wp_kses_post( apply_filters( 'revolutionwp_theme_description', esc_html( $digital_marketer_theme->get( 'Description' ) ) ) );
					?></p>
			  	<div class="col-left-inner">
					<h4><?php esc_html_e('Theme Customizer', 'digital-marketer'); ?></h4>
					<p> <?php esc_html_e('click here to customize your website.', 'digital-marketer'); ?></p>
					<div class="info-link">
						<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'digital-marketer'); ?></a>
					</div>
					<hr>				
					<h4><?php esc_html_e('Experiencing Issues? Require Assistance?', 'digital-marketer'); ?></h4>
					<p> <?php esc_html_e('Our committed team is fully equipped to assist you with any questions or concerns you may have about our theme.', 'digital-marketer'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url(DIGITAL_MARKETER_FREE_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'digital-marketer'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Customer Reviews and Testimonials', 'digital-marketer'); ?></h4>
					<p> <?php esc_html_e('Every aspect and feature of this WordPress Theme is exceptional. I would highly recommend this theme to everyone.', 'digital-marketer'); ?>  </p>
					<div class="info-link">
						<a href="<?php echo esc_url( DIGITAL_MARKETER_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'digital-marketer'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Go For Premium', 'digital-marketer'); ?></h4>
					<p> <?php esc_html_e('Premium themes usually receive regular updates to stay compatible with the latest versions of WordPress.', 'digital-marketer'); ?>  </p>
					<div class="info-link">
						<a href="<?php echo esc_url( DIGITAL_MARKETER_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get Premium', 'digital-marketer'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Lite Documentation', 'digital-marketer'); ?></h4>
					<p> <?php esc_html_e('For Setup our lite theme you have to follow our lite documentation', 'digital-marketer'); ?>  </p>
					<div class="info-link">
						<a href="<?php echo esc_url( DIGITAL_MARKETER_LITE_DOC ); ?>" target="_blank"><?php esc_html_e('Lite Documentation', 'digital-marketer'); ?></a>
					</div>
			  	</div>
				<div class="col-right-inner">
					<h3 class="page-template"><?php esc_html_e('How to set up Home Page Template','digital-marketer'); ?></h3>
				  	<hr class="h3hr">
					<p><?php esc_html_e('Follow these instructions to setup Home page.','digital-marketer'); ?></p>
               <ul>
                  <p><span class="strong"><?php esc_html_e('1. Create a new page :','digital-marketer'); ?></span><?php esc_html_e(' Go to ','digital-marketer'); ?>
				  		<b><?php esc_html_e(' Dashboard >> Pages >> Add New Page','digital-marketer'); ?></b></p>

                  <p><?php esc_html_e('Name it as "Home" then select the template "Home Page".','digital-marketer'); ?></p>
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/getstarted/images/home-page-template.png" alt="" />
                  <p><span class="strong"><?php esc_html_e('2. Set the front page:','digital-marketer'); ?></span><?php esc_html_e(' Go to ','digital-marketer'); ?>
				  		<b><?php esc_html_e(' Settings >> Reading ','digital-marketer'); ?></b></p>
				  		<p><?php esc_html_e('Select the option of Static Page, now select the page you created to be the homepage, while another page to be your default page.','digital-marketer'); ?></p>
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/getstarted/images/set-front-page.png" alt="" />
               </ul>
			  	</div>
		  	</div>
		</div>
		<div id="pro_theme" class="tabcontent">
		  	<h3><?php esc_html_e( 'Premium Theme Information', 'digital-marketer' ); ?></h3>
			<hr class="h3hr">
	    	<div class="col-left-pro">
	    		<p><?php esc_html_e('The Digital Marketer WordPress theme is a versatile and user-friendly template designed specifically for digital marketing professionals and agencies. With its sleek and modern design, customizable layout options, and integrated marketing tools, this theme empowers users to create stunning websites that effectively showcase their services, portfolios, and expertise. It offers features like SEO optimization, social media integration, and responsive design, making it an ideal choice for boosting online visibility and engaging with clients in the digital marketing industry.','digital-marketer'); ?></p>
		    	<div class="pro-links">
			    	<a href="<?php echo esc_url( DIGITAL_MARKETER_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'digital-marketer'); ?></a>
					<a class="buy-pro" href="<?php echo esc_url( DIGITAL_MARKETER_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'digital-marketer'); ?></a>
					<a href="<?php echo esc_url( DIGITAL_MARKETER_PRO_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Premium Suppport', 'digital-marketer'); ?></a>
					<a href="<?php echo esc_url( DIGITAL_MARKETER_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Premium Documentation', 'digital-marketer'); ?></a>
				</div>
	    	</div>
	    	<div class="featurebox">
	    		<h3><?php esc_html_e( 'Theme Features', 'digital-marketer' ); ?></h3>
				<hr class="h3hr">
				<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'digital-marketer'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'digital-marketer'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Customizing the theme', 'digital-marketer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Adaptive Layout', 'digital-marketer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Uploading a Logo', 'digital-marketer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Links to Social Media', 'digital-marketer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Slider Settings', 'digital-marketer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Quantity of Slides', 'digital-marketer'); ?></td>
								<td class="table-img"><?php esc_html_e('4', 'digital-marketer'); ?></td>
								<td class="table-img"><?php esc_html_e('Unlimited', 'digital-marketer'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Page Templates', 'digital-marketer'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'digital-marketer'); ?></td>
								<td class="table-img"><?php esc_html_e('6', 'digital-marketer'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'digital-marketer'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'digital-marketer'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'digital-marketer'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Sections of the theme', 'digital-marketer'); ?></td>
								<td class="table-img"><?php esc_html_e('2', 'digital-marketer'); ?></td>
								<td class="table-img"><?php esc_html_e('16', 'digital-marketer'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Contact us Page Template', 'digital-marketer'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'digital-marketer'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Blog Templates and Layout', 'digital-marketer'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'digital-marketer'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Page Templates and Layout', 'digital-marketer'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('2(Left/Right Sidebar)', 'digital-marketer'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Color Scheme for Specific Sections', 'digital-marketer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Global Color Option', 'digital-marketer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Reordering', 'digital-marketer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Demo Importer', 'digital-marketer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Enable Setting Site Title, Tagline, and Logo', 'digital-marketer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Toggle On/Off Options for All Sections and Logo', 'digital-marketer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Full Documentation', 'digital-marketer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Up-to-Date Compatibility with the Latest WordPress Version', 'digital-marketer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Compatibility with WooCommerce', 'digital-marketer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support for Third-Party Plugins', 'digital-marketer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Secure and Optimized Programming', 'digital-marketer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Unique Features', 'digital-marketer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Enable / Disable', 'digital-marketer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Google Font Choices', 'digital-marketer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Gallery', 'digital-marketer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Simple & Mega Menu Option', 'digital-marketer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'digital-marketer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Shortcodes', 'digital-marketer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'digital-marketer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Premium Membership', 'digital-marketer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Affordable Value', 'digital-marketer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('High-Priority Error Resolution', 'digital-marketer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Feature Addition', 'digital-marketer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Effortless Customer Support', 'digital-marketer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( DIGITAL_MARKETER_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'digital-marketer'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<?php } ?>