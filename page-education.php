<?php
/*
 Template Name: Education
 */
?>

<?php include('inc/html_header.php'); ?>
<?php include('inc/the_header.php'); ?>
<?php include('inc/the_nav.php'); ?>
<script>
  $(function() {
    $( "#accordion" ).accordion({ heightStyle: "content" });
  });
 </script>


	<div class="row">
		<div class="large-6 large-offset-6 columns cont">
			<h4><?php the_title(); ?></h4>
	
<!-- <div id="accordion">
  <h3>Section 1</h3>
  <div>
    <p>
    Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
    ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
    amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
    odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
    </p>
  </div>
  <h3>Section 2</h3>
  <div>
    <p>
    Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
    purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
    velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
    suscipit faucibus urna.
    </p>
  </div>
  <h3>Section 3</h3>
  <div>
    <p>
    Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
    Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
    ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
    lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
    </p>
    <ul>
      <li>List item one</li>
      <li>List item two</li>
      <li>List item three</li>
    </ul>
  </div>
  <h3>Section 4</h3>
  <div>
    <p>
    Cras dictum. Pellentesque habitant morbi tristique senectus et netus
    et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
    faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
    mauris vel est.
    </p>
    <p>
    Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
    inceptos himenaeos.
    </p>
  </div>
</div> -->
					<!-- ARGS Education-->
						<?php $args_education = array(
						'post_type' => 'education',
						'posts_per_page' => -1,
						); ?>
							
					<div id="accordion">
						<?php $the_query = new WP_Query( $args_education ); ?>
						<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
							<h4><?php the_title(); ?></h4>
							<div><?php the_content(); ?></div>

						<?php endwhile; ?> <!--  end of the loop. -->
					</div>


		</div>
	</div>


<?php include("inc/html_footer.php");?>
