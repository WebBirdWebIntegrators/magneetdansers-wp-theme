<?php get_header(); ?>

<div id="body">
	<div class="b2">
		<div class="cntr archive event">
			<div class="content with-sidebar">
				
				<?php
				// WP_Query arguments
				
				$term = get_term( $id, $taxonomy );
				$slug = $term->slug;
				echo 'slug:' . $slug;
				
				$tax_terms = get_terms($tax);
				echo $tax_terms;
				
				$args = array (
					'post_type'              => 'event',
					'post_status'            => 'published',
					'posts_per_page'		=> -1,
					'event_category'		=> 'extern',
					'meta_key'				=> 'wb_555342f7ab45e',
					'orderby'				=> 'meta_value_num',
					'order'					=> 'ASC',
				);
				
				// The Query
				$query = new WP_Query( $args );
				
				// The Loop
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post(); ?>
							<div <?php post_class( 'post' ) ?>>
								<?php if( get_field('field_5553932a9c8b5') ): ?>
									<div class="img">
									<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
										<div class="mask">
											<div class="mask-container">
												<div class="mask-content">
													<i class="fa fa-link"></i>
												</div>
											</div>
										</div>
										<img src="<?php the_field('field_5553932a9c8b5'); ?>"/>
									</a>
								</div>
								<?php endif; ?>
									
								<div class="content">
									<h2>
										<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
											<?php the_title() ?>
										</a>
									</h2>
									<?php the_excerpt() ?>
									<?php if( get_field('field_555342f7ab45e') ) { ?>
										<ul class="event-info" style="margin-top: 1.5em;">
											<li>Datum: <?php echo '<strong>' . get_field('field_555342f7ab45e') . '</strong>' ?></li>
											<li>Locatie: <?php echo '<strong>' . get_field('field_55534318ab45f') . '</strong>' ?></li>
										</ul>
									<?php } ?>
								</div>
							</div>
					<?php }
				} else {
					// no posts found
				}
				
				// Restore original Post Data
				wp_reset_postdata();
			?>
		</div>
			<div class="sidebar">
				<?php dynamic_sidebar( 'sidebar1' ); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>