<?php get_header(); ?>

<div id="body">
	<div class="b2">
		<div class="cntr archive links">
			<div class="content with-sidebar">
				<?php
					// WP_Query arguments
					$args = array (
						'post_type'              => 'links',
						'post_status'            => 'publish',
						'order'                  => 'ASC',
						'orderby'                => 'title',
						'link_categories'        => 'artiesten',
						'posts_per_page'		 => -1,
					);
					
					// The Query
					$query = new WP_Query( $args );
					
					// The Loop
					
					echo '<h2>' . 'Artiesten' . '</h2>';
					echo '<ul>';
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();
							echo '<li>' . '<a href="' . get_field('field_5553723045c3e') . '" target="_blank">' . get_the_title() . '</a>' . '</li>';
						}
					} else {
						// no posts found
					}
					echo '</ul>';
					
					// Restore original Post Data
					wp_reset_postdata();
				?>
				
				<hr/>
				
				<?php
					// WP_Query arguments
					$args = array (
						'post_type'              => 'links',
						'post_status'            => 'publish',
						'order'                  => 'ASC',
						'orderby'                => 'title',
						'link_categories'        => 'dansclubs',
						'posts_per_page'		 => -1,
					);
					
					// The Query
					$query = new WP_Query( $args );
					
					// The Loop
					
					echo '<h2>' . 'Dansclubs' . '</h2>';
					echo '<ul>';
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();
							echo '<li>' . '<a href="' . get_field('field_5553723045c3e') . '" target="_blank">' . get_the_title() . '</a>' . '</li>';
						}
					} else {
						// no posts found
					}
					echo '</ul>';
					
					// Restore original Post Data
					wp_reset_postdata();
				?>
				
				<hr/>
				
				<?php
					// WP_Query arguments
					$args = array (
						'post_type'              => 'links',
						'post_status'            => 'publish',
						'order'                  => 'ASC',
						'orderby'                => 'title',
						'link_categories'        => 'dansorganisaties',
						'posts_per_page'		 => -1,
					);
					
					// The Query
					$query = new WP_Query( $args );
					
					// The Loop
					
					echo '<h2>' . 'Dansorganisaties' . '</h2>';
					echo '<ul>';
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();
							echo '<li>' . '<a href="' . get_field('field_5553723045c3e') . '" target="_blank">' . get_the_title() . '</a>' . '</li>';
						}
					} else {
						// no posts found
					}
					echo '</ul>';
					
					// Restore original Post Data
					wp_reset_postdata();
				?>
				
				<hr/>
				
				<?php
					// WP_Query arguments
					$args = array (
						'post_type'              => 'links',
						'post_status'            => 'publish',
						'order'                  => 'ASC',
						'orderby'                => 'title',
						'link_categories'        => 'danssheets',
						'posts_per_page'		 => -1,
					);
					
					// The Query
					$query = new WP_Query( $args );
					
					// The Loop
					
					echo '<h2>' . 'Danssheets' . '</h2>';
					echo '<ul>';
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();
							echo '<li>' . '<a href="' . get_field('field_5553723045c3e') . '" target="_blank">' . get_the_title() . '</a>' . '</li>';
						}
					} else {
						// no posts found
					}
					echo '</ul>';
					
					// Restore original Post Data
					wp_reset_postdata();
				?>
				
				<hr/>
				
				<?php
					// WP_Query arguments
					$args = array (
						'post_type'              => 'links',
						'post_status'            => 'publish',
						'order'                  => 'ASC',
						'orderby'                => 'title',
						'link_categories'        => 'overige',
						'posts_per_page'		 => -1,
					);
					
					// The Query
					$query = new WP_Query( $args );
					
					// The Loop
					
					echo '<h2>' . 'Overige' . '</h2>';
					echo '<ul>';
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();
							echo '<li>' . '<a href="' . get_field('field_5553723045c3e') . '" target="_blank">' . get_the_title() . '</a>' . '</li>';
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