<div class="header-introduction">
	<div class="header-introduction-cntr" <?php if( get_field('wb_554e719e57efa', 'option') ) { echo 'style="background-color:' . get_field('wb_554e719e57efa', 'option') . '"'; } ?> >

		<?php if( is_singular('photo_album') ) { ?>
			<h1>Foto's</h1>
		<?php } elseif( is_singular('wb_dance_library')  ) { ?>
			<h1>Dansen</h1>

		<?php } elseif( is_singular('event') ) { ?>
			<h1>Evenement</h1>
		<?php } elseif( is_singular('link') ) { ?>
			<h1>Links</h1>
		<?php } elseif( is_page() || is_single() || is_singular() ) { ?>
			<h1 <?php if( get_field('wb_554e717f57ef9', 'option') ) { echo 'style="color:' . get_field('wb_554e717f57ef9', 'option') . '"'; } ?>><?php the_title(); ?></h1>
		<?php } elseif( is_category() ) { ?>
			<h1 <?php if( get_field('wb_554e717f57ef9', 'option') ) { echo 'style="color:' . get_field('wb_554e717f57ef9', 'option') . '"'; } ?>><?php single_cat_title(); ?></h1>
			<?php if( category_description() ) : ?>
				<div class="header-introduction-cntr-content">
					<?php echo category_description(); ?>
				</div>
			<?php endif ?>
		<?php } elseif( is_post_type_archive('photo_album') ) { ?>
			<h1>Foto's</h1>
		<?php } elseif( is_post_type_archive() ) { ?>
			<h1 <?php if( get_field('wb_554e717f57ef9', 'option') ) { echo 'style="color:' . get_field('wb_554e717f57ef9', 'option') . '"'; } ?>><?php post_type_archive_title(); ?></h1>
		<?php } elseif( is_tax() ) { ?>
			<h1 <?php if( get_field('wb_554e717f57ef9', 'option') ) { echo 'style="color:' . get_field('wb_554e717f57ef9', 'option') . '"'; } ?>>
				<?php
					$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
					echo $term->name;
				?>
			</h1>

		<?php } elseif ( category_description() ) { ?>
			<div class="header-introduction-cntr-content">
				<?php echo category_description(); ?>
			</div>
		<?php } ?>

	</div>
</div>
