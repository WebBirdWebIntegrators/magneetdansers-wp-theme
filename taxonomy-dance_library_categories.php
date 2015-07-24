<?php get_header(); ?>

<div id="body">
	<div class="b2">
		<div class="cntr archive dance-library">
			<div class="content with-sidebar">

				<div class="glossary">
					<ul>
						<li>
							Filter:
						</li>
						<?php
						foreach(range('a','z') as $i) {
							if( term_exists($i) ) {
								echo '<li>';
									echo '<a href="' . get_term_link( $i, 'dance_library_categories' ). '">' . $i . '</a>';
								echo '</li>';
							}
						}
						?>
						<?php
						foreach(range(0,9) as $i) {
							if( term_exists($i) ) {
								echo '<li>';
									echo '<a href="/dansen/' . $i . '">' . $i . '</a>';
								echo '</li>';
							}
						}
						?>
					</ul>
				</div>

			<?php
					// WP_Query arguments

					$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

					$args = array (
						'post_type'              => 'wb_dance_library',
						'dance_library_categories' => $term->slug,
						'post_status'            => 'publish',
						'order'                  => 'ASC',
						'orderby'                => 'title',
						'posts_per_page'		 => -1,
					);

					// The Query
					$query = new WP_Query( $args );

					// The Loop

					echo '<ul>';
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();
							echo '<li>' . '<a href="' . get_permalink() . '">' . get_the_title() . '</a>' . '</li>';
						}
					} else {
						// no posts found
					}
					echo '</ul>';

					// Restore original Post Data
					wp_reset_postdata();
				?>

				<p style="margin-top: 2em">


				<a href="<?php echo get_the_permalink('415'); ?>
					" rel="bookmark" title="<?php the_title_attribute(); ?>" class="button">
				<?php _e( 'Terug naar overzicht', 'eagle' ); ?>
			</a>	</p>

		</div>
			<div class="sidebar">
				<?php dynamic_sidebar( 'sidebar1' ); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
