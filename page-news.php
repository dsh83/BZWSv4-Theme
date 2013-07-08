<?php
/*
 Template Name: News
 */
?>

<?php include('inc/html_header.php'); ?>
<?php include('inc/the_header.php'); ?>
<?php include('inc/the_nav.php'); ?>

	<div class="row">
		<div class="large-6 large-offset-6 columns cont">
			<h4><?php the_title(); ?></h4>
				<?php query_posts("posts_per_page=5&post_type=news"); ?>
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>


			<div class='news-item'>
			<a href='<?php echo get_permalink(); ?>'><h3 class='news-title'><?php the_title(); ?></h3></a>

			<span class="newspost">
			<p class='the-excerpt'<?php the_content(); ?>
			</p>
			</span>
			<span class="post-meta">
				<p>Posted by 
					<span class="the-author"><?php the_author(); ?> - 
					</span>
					<span class='event-date'><?php the_date('l jS F Y'); ?>
					</span>
				</p>
			</span>
			</div>
			<hr class="news-break">

	<?php endwhile; endif; ?>






		</div>
	</div>


<?php include("inc/html_footer.php");?>
