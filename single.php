<?php get_header(); ?>

	<div id="content" class="narrowcolumn">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">
            <div class="postdate">
                <div class="month"><?php echo strtoupper(get_the_time(__('M'))) ?></div>
                <div class="day"><?php the_time('d') ?></div>
                <div class="year"><?php the_time('Y') ?></div>
            </div>       
        
			<div class="postheader">
				<h2 class="pagetitle"><?php the_title(); ?><?php edit_post_link(__('<img src="'.get_bloginfo('stylesheet_directory', 'display').'/images/icons/page_edit.png" alt="Edit" width="16" height="16" />'), ' ', ''); ?></h2>
				
                <div class="postmetadata">
					<?php _e('Categories:'); ?>  <?php the_category(', ') ?>   
                   
                    
                    <div style="float: right;">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/comments.png" width="16" height="16" alt="Comments" />
                        <?php comments_popup_link( __('No Comments').' &#187;', '1 '.__('Comment').' &#187;', '% '.__('Comments').' &#187;'); ?>
                    </div>
                </div>
                <div class="right_corner">&nbsp;</div>
			</div>

			<div class="pagebody">

				<div class="entry">
					<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
	
					<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
					<?php /*the_tags( '<p>Tags: ', ', ', '</p>');*/ ?>
                	
				</div>

				<div class="comments">
					<?php comments_template(); ?>
                    
                    <div style="clear: both;"></div>
                    
				</div>
			</div>
            
		</div>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>
        
        <div class="navigation">
        	<hr/>
            <div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
            <div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
            <div style="clear: both;"></div>
        </div>
	</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
