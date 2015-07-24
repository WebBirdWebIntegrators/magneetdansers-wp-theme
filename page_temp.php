<?php
	//Template Name: Temp home
?>

<?php get_header('temp'); ?>

<div class="temp-cntr">
	<div class="temp-cntr-content">
		<div class="img">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-magneetdansers.png">
		</div>
		<div class="temp-cntr-content-text">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>
			</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
</div>

<?php get_footer('temp'); ?>