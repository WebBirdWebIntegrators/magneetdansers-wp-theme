<?php get_header(); ?>

<div id="body">
	<div class="b2">
		<div class="cntr post event">
			<div class="content with-aside">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<?php the_title('<h1>', '</h1>'); ?>
						<?php the_content(); ?>
						<hr/>
						<ul class="event-info">
							<h3>Event info</h3>
							<li>Datum: <?php echo '<strong>' . get_field('field_555342f7ab45e') . '</strong>' ?></li>
							<li>Locatie: <?php echo '<strong>' . get_field('field_55534318ab45f') . '</strong>' ?></li>
						</ul>
						<?php if( get_field('field_5553932a9c8b5') ): ?>
							<hr/>
							<h3>Affiche / flyer</h3>
							<img src="<?php the_field('field_5553932a9c8b5'); ?>" class="poster"/>
						<?php endif; ?>

						<p style="margin-top: 1.626em;">
							<a href="link_ intern" rel="bookmark" title="<?php the_title_attribute(); ?>" class="button">
							<?php _e( 'Terug naar overzicht', 'eagle' ); ?>
						</a>
					</p>
					</div>

					<!-- <?php previous_post_link('&laquo; %link') ?> | <?php next_post_link('%link &raquo;') ?> -->

					<?php endwhile; else: ?>

						<p>Sorry, no posts matched your criteria.</p>

				<?php endif; ?>
			</div>
			<div class="sidebar">
				<?php dynamic_sidebar( 'sidebar1' ); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
