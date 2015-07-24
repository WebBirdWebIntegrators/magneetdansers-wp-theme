<?php get_header(); ?>

<div id="body">
	<div class="b2">
		<div class="cntr post photo-albums">
			<div class="content with-aside">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<?php the_title('<h1>', '</h1>'); ?>
						<?php the_content(); ?>
							
						<?php $images = get_field('field_555447abc7789');
						
						if( $images ): ?>
							<div class="gallery">
							    <ul>
							        <?php foreach( $images as $image ): ?>
							            <li>
							                <a href="<?php echo $image['url']; ?>">
								                <div class="layer-enlarge">
									                <div class="layer-enlarge-container">
										            	<div class="layer-enlarge-container-plus">
											            	<i class="fa fa-search-plus"></i>
											            </div>
									                </div>
								                </div>
							                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
							                </a>
							                <p><?php echo $image['caption']; ?></p>
							            </li>
							        <?php endforeach; ?>
							    </ul>
							</div>
						<?php endif; ?>
						
						<p style="margin-top: 1.626em;"><a href="/fotos/" rel="bookmark" title="<?php the_title_attribute(); ?>" class="button">
							<?php _e( 'Terug naar overzicht', 'eagle' ); ?>
						</a></p>
						
					</div>
				
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