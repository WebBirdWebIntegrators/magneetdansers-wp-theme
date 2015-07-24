<?php
	//Template Name: Dansen A-Z
?>

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

			<div class="active-dances">
				<?php

				// check if the repeater field has rows of data
				if( have_rows('wb_555e317045c54') ):

				 	// loop through the rows of data
				    while ( have_rows('wb_555e317045c54') ) : the_row();

				        // display a sub field value
				        echo '<h2>' . get_sub_field('wb_555e321ac574b');




						echo '</h2>';


				        if( have_rows('wb_55698d9066823') ):

						 	// loop through the rows of data
						 	echo '<ul>';
						    while ( have_rows('wb_55698d9066823') ) : the_row();

						        // display a sub field value
						        echo '<li>';
						        	echo get_sub_field('wb_555e31b8c5749') . ': ';

						        	$post_object = get_sub_field('wb_555e31ecc574a');


														$value = get_sub_field('herhaling');

														if( $value === 'ja' ) {
														    echo 'Herhaling';
														} else {

															if( $post_object ):

				                        $post = $post_object; setup_postdata( $post );

				                        echo '<a href="' . get_permalink() . '">';
						                        echo the_title();
						                    echo '</a>';

					                        wp_reset_postdata();

					                    endif;

														}

						        echo '</li>';

						    endwhile;
						    echo '</ul>';


						else :

						    // no rows found

						endif;

				    endwhile;

				else :

				    // no rows found

				endif;

				?>
			</div>

		</div>
			<div class="sidebar">
				<?php dynamic_sidebar( 'sidebar1' ); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
