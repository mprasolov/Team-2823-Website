<?php get_header(); ?>
<style type="text/css">
body {
	padding-top: 0px !important;
}
.carousel-bottom-padding-remove {
	margin-bottom: 10px;
}
</style>
<div id="content">
	<div id="myCarousel" class="carousel slide carousel-bottom-padding-remove" data-ride="carousel">
		<div class="carousel-inner">
			<div class="item active"> <img class="hidden-xs hidden-sm" src="images/Front1desktop.jpg"> <img class="hidden-lg hidden-md" src="images/Front1mobile.jpg">
				<div class="container">
					<div class="carousel-caption">
						<div class="row">
							<h1>Welcome to Highland Park Robotics</h1>
							<p>Highland Park Team 2823 - The Automatons - is a team of Highland students that compete in the FIRST Robotics Competition league each year. The team meets Tuesdays, Thursdays and Saturdays while we prepare for the competition.</p>
							<p><a class="btn btn-lg btn-danger" href="Team.html" role="button">Learn more</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<h1>News</h1>
		<hr>
	</div>
	<div class="container">
		<div class="panel panel-default panel-body">
			<div class="row">
				<div class="col-md-2">
					<ul class="nav nav-pills nav-stacked">
						<?php wp_list_categories('orderby=name&title_li=') ?>
					</ul>
				</div>
				<div class="col-md-10">
				<?php function remove_more_link_scroll( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' ); ?>
					<?php while(have_posts()) : the_post(); ?>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<?php
						if(has_post_thumbnail()) {
							echo '<div class="row"><div class="col-sm-2">';
							the_post_thumbnail('thumbnail',array('class' => 'img-thumbnail'));
							echo '</div><div class="col-sm-10">';
							the_content('Continue Reading &rarr;');
							echo '<p class="text-muted">Posted by ';
							the_author();
							echo ' on ';
							the_time('F j, Y g:i a');
							echo '</p></div></div>';
						} else {
							the_content('Continue Reading &rarr;');
							echo '<p class="text-muted">Posted by ';
							the_author();
							echo ' on ';
							the_time('F j, Y g:i a');
							echo '</p>';
						}
						?>
					<?php endwhile; wp_reset_query(); ?>
				</div>
			</div>
		</div>
		</div>
</div>
<?php get_footer(); ?>
