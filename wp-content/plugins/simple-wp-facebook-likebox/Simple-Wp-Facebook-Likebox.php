<?php 

/*
Plugin Name: Simple Wp Facebook Likebox 
Plugin URI:https://wordpress.org/plugins/simple-wp-facebook-likebox
Author: nayon46
Author Uri: http://www.nayonbd.com
Description:Widget Facebook Like Box is a social plugin that enables Facebook Page owners to attract and gain Likes from their own website
Version:1.0
*/



add_action('init', 'swf_facebook_textdomain');

function swf_facebook_textdomain() {
	load_plugin_textdomain('swf_facebook_plugin_textdomain', false, dirname( __FILE__).'/lang');

}




add_action('widgets_init','swf_facebook_widget_area');
function swf_facebook_widget_area(){
	register_widget('swf_widget_section_facebook');
}

class swf_widget_section_facebook extends wp_Widget{
/**
	* Declares the FacebookLikeBoxWidget class.
	*
	*/
	public function __construct(){
		parent::__construct('facebook-widget','facebook like box',array(
			'description'=>__('it is very beautiful plugin','swf_facebook_plugin_textdomain')
		));
	}
	/**
	* Displays the Widget
	*
	*/
	public function widget($args,$instance){

		$data =$args['before_widget']; 
		$data .=$args['before_title']; 
		 
		$data .=$instance['title'];
		$data .=$args['after_title']; 

		$data .='<div id="fb-root"></div>
				<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, "script", "facebook-jssdk"));</script>';

		$page_url =esc_url($instance['page_url']);
		
		$page_width = $instance['width'];
		$page_height = $instance['height'];

		$data  .='<div class="fb-page" data-href="'.$page_url.'" data-width="'.$page_width.'" data-height="'.$page_height.'" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"><blockquote cite="'.$page_url.'" class="fb-xfbml-parse-ignore"><a href="'.$page_url.'"></a></blockquote></div>';

		$data .=$args['after_widget']; 

		echo $data;

	}
	/**
	* Creates the edit form for the widget.
	*
	*/
	public function form($instance){
?>

		<label for="<?php echo $this->get_field_id('title'); ?>">TITLE:</label>
		<input type="text" class="widefat" value="<?php if(isset($instance['title'])){ echo $instance['title']; }?>" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>">

<label for="<?php echo $this->get_field_id('page_url'); ?>">PAGE URL:</label>
		<input type="text" class="widefat" value="<?php if(isset($instance['page_url'])){ echo esc_url($instance['page_url']); }?>" name="<?php echo $this->get_field_name('page_url'); ?>" id="<?php echo $this->get_field_id('page_url'); ?>">

		<label for="<?php echo $this->get_field_id('width'); ?>">WIDTH:</label>
		<input type="number" class="widefat" value="<?php if(isset($instance['width'])){ echo $instance['width']; }?>" name="<?php echo $this->get_field_name('width'); ?>" id="<?php echo $this->get_field_id('width'); ?>">


		<label for="<?php echo $this->get_field_id('height'); ?>">HEIGHT:</label>
		<input type="number" class="widefat" value="<?php if(isset($instance['height'])){ echo $instance['height']; }?>" name="<?php echo $this->get_field_name('height'); ?>" id="<?php echo $this->get_field_id('height'); ?>">

	

		<?php 
	}

}