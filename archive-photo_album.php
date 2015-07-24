<?php get_header(); ?>

<div id="body">
	<div class="b2">
		<div class="cntr archive photo-albums">
			<div class="content with-sidebar">
				
			<?php
				if( is_taxonomy( 'discography_categories') ) {
					
					$args2 = array(
						'show_option_all'    => '',
						'orderby'            => 'name',
						'order'              => 'ASC',
						'style'              => 'list',
						'show_count'         => 0,
						'hide_empty'         => 1,
						'use_desc_for_title' => 1,
						'child_of'           => 0,
						'feed'               => '',
						'feed_type'          => '',
						'feed_image'         => '',
						'exclude'            => '',
						'exclude_tree'       => '',
						'include'            => '',
						'hierarchical'       => 1,
						'title_li'           => __( 'Categories' ),
						'show_option_none'   => __( '' ),
						'number'             => null,
						'echo'               => 1,
						'depth'              => 0,
						'current_category'   => 0,
						'pad_counts'         => 0,
						'taxonomy'           => 'discography_categories',
				    );
				    
				    echo wp_list_categories( $args2 );
					
					echo do_shortcode('[webbird-discography-category-listing]');
				}
			?>

			<?php if (have_posts()) : ?>
		
				<?php while ( have_posts() ) : the_post(); ?>
					<div <?php post_class( 'post' ) ?>>
						<?php if ( has_post_thumbnail() ) : ?>
							<div class="img">
								<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
									<div class="mask">
										<div class="mask-container">
											<div class="mask-content">
												<i class="fa fa-link"></i>
											</div>
										</div>
									</div>
									<?php the_post_thumbnail('medium-square'); ?>
								</a>
							</div>
						<?php endif ?>	
						<div class="content">
							<h2>
								<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
									<?php the_title() ?>
								</a>
							</h2>
							<?php the_excerpt() ?>
						</div>
					</div>
				<?php endwhile; ?>
		
			<?php else :
		
				if ( is_category() ) { // If this is a category archive
					printf("<h2>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
				} else if ( is_date() ) { // If this is a date archive
					echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
				} else if ( is_author() ) { // If this is a category archive
					$userdata = get_userdatabylogin(get_query_var('author_name'));
					printf("<h2>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);
				} else {
					echo("<h2>No posts found.</h2>");
				}
		
			endif;
		?>

		</div>
			<div class="sidebar">
				<?php dynamic_sidebar( 'sidebar1' ); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>