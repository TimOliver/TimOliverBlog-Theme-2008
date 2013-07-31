<?php get_header(); ?>
	<div id="content" class="narrowcolumn">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">

				<div class="postdate">
					<div class="month"><?php echo strtoupper(get_the_time(__('M'))) ?></div>
					<div class="day"><?php the_time('d') ?></div>
					<div class="year"><?php the_time('Y') ?></div>
				</div>

				<div class="postheader">
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a><?php edit_post_link(__('<img src="'.get_bloginfo('stylesheet_directory', 'display').'/images/icons/page_edit.png" alt="Edit" width="16" height="16" />'), ' ', ''); ?></h2>
					<? /*<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>*/ ?>
					
					<div class="postmetadata">
						<?php _e('Categories:'); ?>  <?php the_category(', ') ?>   
                       
						
                        <div style="float: right;">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/comments.png" width="16" height="16" alt="Comments" />
							<?php comments_popup_link( __('No Comments').' &#187;', '1 '.__('Comment').' &#187;', '% '.__('Comments').' &#187;'); ?>
						</div>
                    </div>	
					
					<div class="right_corner">&nbsp;</div>				
				</div>

				<div class="postbody">
					<div class="entry">
						<?php the_content('(Read the rest!) &raquo;'); ?>
					</div>
	
					<? /*<hr/>
					<div class="subpostmetadata">
						<?php the_tags(__('Tags').': ', ', ', '<br />'); _e('Category:'); ?>  
						<?php the_category(', ') ?> | <?php edit_post_link(__('Edit'), '', ' | '); ?>  <?php comments_popup_link( __('No Comments').' &#187;', '1 '.__('Comment').' &#187;', '% '.__('Comments').' &#187;'); ?>
					</div> */ ?>    
				</div>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
        	<hr/>
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>
		<div style="clear:both"></div>

<?php get_footer(); ?>
