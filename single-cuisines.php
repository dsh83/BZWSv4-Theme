
<?php include('inc/html_header.php'); ?>
<?php include('inc/the_header.php'); ?>
<?php include('inc/the_nav.php'); ?>


	<div class="row">
		<br>
		<div class="large-6 large-offset-6 columns cont">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<!-- Display the Post's content in a div box. -->
				<h3><?php the_title(); ?></h3>
				<div class="entry">
					<?php the_content(); ?>
				</div>

				
				<!-- Stop The Loop (but note the "else:" - see next line). -->

				<?php endwhile; else: ?>

				<!-- The very first "if" tested to see if there were any Posts to -->
				<!-- display.  This "else" part tells what do if there weren't any. -->
				<p>Sorry, no posts matched your criteria.</p>

				<!-- REALLY stop The Loop. -->
				<?php endif; ?>
		</div>
	</div>

<?php include('inc/the_footer.php'); ?>
<?php include('inc/html_footer.php'); ?>