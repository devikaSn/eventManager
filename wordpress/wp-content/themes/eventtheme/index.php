<?php get_header(); ?>
<div id="main">
<div id="content">
<?php 
	if (have_posts()) : 
		while (have_posts()) : the_post(); 
?>
			<p>
				<?php the_content(__('(more...)')); ?>
			</p>
			<hr>
<?php 
 		endwhile; else: 
?>
	<p>
	<?php 
		_e('Sorry, no posts matched your criteria.');
	?>
	</p>
<?php 
	endif;	
?>
</div>
<?php
	 // get_sidebar(); 
?>
</div>
<div id="delimiter">
</div>
<?php get_footer(); ?>
