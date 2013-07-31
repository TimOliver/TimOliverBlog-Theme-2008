<?php get_header(); ?>

	<div id="content" class="narrowcolumn">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			
			<div class="pageheader">
				<div class="right_corner">&nbsp;</div>
				
				<h2 class="pagetitle"><?php the_title(); ?><?php edit_post_link(__('<img src="'.get_bloginfo('stylesheet_directory', 'display').'/images/icons/page_edit.png" alt="Edit" width="16" height="16" />'), ' ', ''); ?></h2>
			</div>
			
			<div class="pagebody">
				<div class="entry">
					<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
	
					<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				</div>
				
				<div class="postshadow">&nbsp;</div>
				
				<div class="pagefooter">
					<div class="left">&nbsp;</div>
					<div class="right">&nbsp;</div>
				</div> 	
				
			</div>
		</div>
		<?php endwhile; endif; ?>
	
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>