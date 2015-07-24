<?php get_header(); ?>

<div id="body">
	<div class="b2">
		<div class="cntr post dance-sheet">
			<div class="content with-aside">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<?php the_title('<h1>', '</h1>'); ?>
						<?php the_content(); ?>
						
						<?php if( get_field('field_55537b70f0119') ) : ?>
							<h3><?php _e('Dance sheet', 'eagle'); ?></h3>
							<iframe src="<?php echo get_field('field_55537b70f0119'); ?>" width="100%" height="500px"></iframe>
						<?php endif; ?>
						
						<?php if( get_field('field_55537bc8f011a') ) : ?>
							<hr/>
							<h3><?php _e('Video', 'eagle'); ?></h3>
							<div class="video-iframe">
								<?php echo get_field('field_55537bc8f011a'); ?>
							</div>
						<?php endif; ?>
						
						<p style="margin-top: 1.626em;"><a href="<?php echo get_permalink('415'); ?>" class="button">
							<?php _e( 'Terug naar overzicht', 'eagle' ); ?>
						</a></p>
						
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