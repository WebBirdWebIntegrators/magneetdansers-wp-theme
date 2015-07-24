<?php get_header(); ?>

<div id="body">
	<div class="b2">
		<div class="cntr archive dance-library">
			<div class="content with-sidebar">

			

			<?php
					// WP_Query arguments
					$args = array (
						'post_type'              => 'wb_dance_library',
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

		</div>
			<div class="sidebar">
				<?php dynamic_sidebar( 'sidebar1' ); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
