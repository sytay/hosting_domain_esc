<?php global $archi_option; ?>
<?php if($archi_option['ajax_work']!=false){ ?>
	<div class="container project-view">
		<?php while (have_posts()) : the_post()?>
			<?php the_content(); ?>
		<?php endwhile; ?>
	</div>		
<?php }else { ?>
<?php get_header(); ?>

	<?php global $archi_option; ?>
	<?php if($archi_option['subpage-switch']!=false){ ?>

		<section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom"
			<?php if( function_exists( 'rwmb_meta' ) ) { ?>       
		        <?php $images = rwmb_meta( '_cmb_portfolio_subheader', "type=image" ); ?>
		        <?php if($images){ foreach ( $images as $image ) { ?>
		        <?php $img =  $image['full_url']; ?>
		          style="background-image: url('<?php echo esc_url($img); ?>');"
		        <?php } } ?>
		    <?php } ?>
		>
		    <div class="container">
		        <div class="row">
		            <div class="col-md-12">                
		                <h1><?php the_title(); ?></h1>
		                <?php archi_breadcrumbs(); ?>
		            </div>
		        </div>
		    </div>
		</section>
		<!-- subheader close -->

	<?php }else{ ?>
	    <section class="no-subpage"></section>
	<?php } ?>
	
	<div id="portfolio-controls"> 
        <div class="left-right-portfolio"> 
            <div class="portfolio-icon">
            	<?php echo previous_post_link('%link', __('<i class="fa fa-angle-double-left"></i>', 'archi'), $post->max_num_pages); ?>
            </div>
        </div>
   
        <a href="<?php echo esc_url($archi_option['portfolio_link']); ?>">
            <div class="center-portfolio"> 
                <div class="portfolio-icon fa-th"></div>
            </div> 
        </a>    
        <div class="left-right-portfolio">
            <div class="portfolio-icon">
            	<?php echo next_post_link('%link', __('<i class="fa fa-angle-double-right"></i>', 'archi'), $post->max_num_pages); ?>
            </div> 
        </div>
    </div>
	<div id="content">
		<?php while (have_posts()) : the_post(); ?>			
			<?php the_content(); ?>			
		<?php endwhile; ?>
	</div>
<?php get_footer(); ?>	
<?php } ?>
