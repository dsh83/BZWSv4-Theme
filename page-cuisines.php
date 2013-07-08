<?php
/*
 Template Name: Cuisines
 */
?>

<?php include('inc/html_header.php'); ?>
<?php include('inc/the_header.php'); ?>
<?php include('inc/the_nav.php'); ?>

	<div class="row">
		<div class="large-6 large-offset-6 columns cont">
			<h4><?php the_title(); ?></h4>
	
			<!-- ARGS Cuisines-->
						<?php $args_cuisines = array(
						'post_type' => 'cuisines',
						'posts_per_page' => -1,
						); ?>
							
					<div id="accordion">
						<?php $the_query = new WP_Query( $args_cuisines ); ?>
						<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
							<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
						<?php endwhile; ?> <!--  end of the loop. -->
					</div>
		</div>
	</div>


<?php include("inc/html_footer.php");?>
