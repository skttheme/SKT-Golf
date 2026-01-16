<?php
//about theme info
add_action( 'admin_menu', 'skt_golf_abouttheme' );
function skt_golf_abouttheme() {    	
	add_theme_page( esc_html__('About Theme', 'skt-golf'), esc_html__('About Theme', 'skt-golf'), 'edit_theme_options', 'skt_golf_guide', 'skt_golf_mostrar_guide');   
} 
//guidline for about theme
function skt_golf_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
<div class="wrapper-info">
	<div class="col-left">
   		   <div class="col-left-area">
			  <?php esc_html_e('Theme Information', 'skt-golf'); ?>
		   </div>
          <p><?php esc_html_e('SKT Golf WordPress theme is suitable for golfing clubs, resorts, training centres, sports, recreational facilities, vacation, family tours and travel, hotel, resorts, motels, fitness, gaming theme parks, club membership, and tournament events. Can be integrated with WooCommerce for online merchandise, event ticket sales and club membership payments. Elementor based to be easy to use. Compatible with contact form plugins. Responsive, scalable, flexible and easy to use.','skt-golf'); ?></p>
          <a href="<?php echo esc_url(SKT_GOLF_SKTTHEMES_PRO_THEME_URL); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/free-vs-pro.png" alt="" /></a>
	</div><!-- .col-left -->
	<div class="col-right">			
			<div class="centerbold">
				<hr />
				<a href="<?php echo esc_url(SKT_GOLF_SKTTHEMES_LIVE_DEMO); ?>" target="_blank"><?php esc_html_e('Live Demo', 'skt-golf'); ?></a> | 
				<a href="<?php echo esc_url(SKT_GOLF_SKTTHEMES_PRO_THEME_URL); ?>"><?php esc_html_e('Buy Pro', 'skt-golf'); ?></a> | 
				<a href="<?php echo esc_url(SKT_GOLF_SKTTHEMES_THEME_DOC); ?>" target="_blank"><?php esc_html_e('Documentation', 'skt-golf'); ?></a>
                <div class="space5"></div>
				<hr />                
                <a href="<?php echo esc_url(SKT_GOLF_SKTTHEMES_THEMES); ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sktskill.jpg" alt="" /></a>
			</div>		
	</div><!-- .col-right -->
</div><!-- .wrapper-info -->
<?php } ?>