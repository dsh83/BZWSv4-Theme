<?php
/*
 Template Name: Pisco Lablanca
 */
?>
<?php include('inc/html_header.php'); ?>
<?php include('inc/the_header.php'); ?>
<?php include('inc/the_nav.php'); ?>


	<div class="row">
		<div class="large-6 columns"><br>
			
				  <!-- ARGS Images-->
						<?php $args_images = array(
						'post_type' => 'images',
						'posts_per_page' => -1,
						'orderby' => 'menu_order',
						'order' => 'ASC',
						); ?>
							
					<div id="full-width-slider" class="royalSlider heroSlider rsMinW">
						<?php $the_query = new WP_Query( $args_images ); ?>
						<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
							<div class="rsContent">
				    			<img class="rsImg"  src="<?php the_field('picture'); ?>" alt="">
				  			</div>
						<?php endwhile; ?> <!--  end of the loop. -->
					</div>
				  
			
		</div>
		
		<div class="large-6 columns cont">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<!-- Display the Post's content in a div box. -->
			<br>
				<div class="entry">
				<?php the_content(); ?>
			</div>

			<?php endwhile; else: ?>

			<?php endif; ?>
		</div>
	
	</div>

<?php include('inc/the_footer.php'); ?>
<?php include('inc/html_footer.php'); ?>