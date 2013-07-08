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
			
							
					<div id="full-width-slider" class="royalSlider heroSlider rsMinW">
						
						
							<div class="rsContent">
				    			<img class="rsImg" src="http://www.placehold.it/600x600" alt="">
				  			</div>
				  			<div class="rsContent">
				    			<img class="rsImg" src="http://www.placehold.it/600x600" alt="">
				  			</div>
				  			<div class="rsContent">
				    			<img class="rsImg" src="http://www.placehold.it/600x600" alt="">
				  			</div>
				  			<div class="rsContent">
				    			<img class="rsImg" src="http://www.placehold.it/600x600" alt="">
				  			</div>
				  			<div class="rsContent">
				    			<img class="rsImg" src="http://www.placehold.it/600x600" alt="">
				  			</div>
						
					</div>
				  
			
		</div>
		
		<div class="large-6 columns cont">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<!-- Display the Post's content in a div box. -->
			<br>
			<h4><?php the_title(); ?></h4>
			<div class="entry">
				<?php the_content(); ?>
			</div>

			<?php endwhile; else: ?>

			<?php endif; ?>
		</div>
	
	</div>

<?php include('inc/the_footer.php'); ?>
<?php include('inc/html_footer.php'); ?>