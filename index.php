<?php get_header(); ?>
	
	<?php if (have_posts()): ?>
		
		<div class="starter-template">

			<?php while (have_posts()): the_post(); ?>
					
				<div class="row">
					<div class="col-sm-8">
						<?php get_template_part( 'content', get_post_format() ); ?>				
					</div>				
				</div>

			<?php endwhile ?>

			<!-- Post number paginate -->
			<?= fellowtuts_wpbs_pagination(); ?>
<!-- 			<?php  
				the_posts_pagination( array(
				    'screen_reader_text' => ' ', 
				    'prev_text'          => __( 'Previous', 'learn' ),
				    'next_text'          => __( 'Next', 'learn' ),
				    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( '', 'nieuwedruk' ) . ' </span>',
				) );
			?> -->

		</div>

	<?php endif ?>

<?php get_footer(); ?>