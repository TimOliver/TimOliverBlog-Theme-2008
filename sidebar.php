	<div id="sidebar">
		
		<div id="social_icons">
				<a title="RSS Feed" href="<?php bloginfo('rss2_url'); ?>"><div class="rss"><span>RSS</span></div></a>
				<a title="Facebook" href="http://www.facebook.com/timoliver.au" target="_blank"><div class="facebook"><span>Facebook</span></div></a>
				<a title="mixi" href="http://mixi.jp/show_friend.pl?id=6310887" target="_blank"><div class="mixi"><span>mixi</span></div></a>
				<a title="Twitter" href="http://www.twitter.com/Tim0liver" target="_blank"><div class="twitter"><span>Twitter</span></div></a>
				<a title="Steam" href="http://steamcommunity.com/id/-TiM-" target="_blank"><div class="steam"><span>Steam</span></div></a>
				<a title="YouTube" href="http://www.youtube.com/user/Tim0liver" target="_blank"><div class="youtube"><span>YouTube</span></div></a>
				<a title="Google" href="http://www.google.com/profiles/TimOliverAU" target="_blank"><div class="google"><span>Google</span></div></a>
				<a title="LinkedIn" href="http://au.linkedin.com/in/timothyo" target="_blank"><div class="linkedin"><span>LinkedIn</span></div></a>
		</div>

		<div style="text-align: center; margin-bottom: 40px;">
		<script type="text/javascript"><!--
				google_ad_client = "pub-5797331808696959";
				/* Tim-Oliver.com Page */
				google_ad_slot = "3257589929";
				google_ad_width = 300;
				google_ad_height = 250;
		//-->
		</script>
		<script type="text/javascript"
				src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
		</script>
		</div>
        
		<ul>
			<?php 	/* Widgetized sidebar, if you have the plugin installed. */
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
			<li>
				<?php include (TEMPLATEPATH . '/searchform.php'); ?>
			</li>

			<!-- Author information is disabled per default. Uncomment and fill in your details if you want to use it.
			<li><h2>Author</h2>
			<p>A little something about you, the author. Nothing lengthy, just an overview.</p>
			</li>
			-->

			<?php if ( is_404() || is_category() || is_day() || is_month() ||
						is_year() || is_search() || is_paged() ) {
			?> <li>

			<?php /* If this is a 404 page */ if (is_404()) { ?>
			<?php /* If this is a category archive */ } elseif (is_category()) { ?>
			<p>You are currently browsing the archives for the <?php single_cat_title(''); ?> category.</p>

			<?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for the day <?php the_time('l, F jS, Y'); ?>.</p>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for <?php the_time('F, Y'); ?>.</p>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for the year <?php the_time('Y'); ?>.</p>

			<?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
			<p>You have searched the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for <strong>'<?php the_search_query(); ?>'</strong>. If you are unable to find anything in these search results, you can try one of these links.</p>

			<?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<p>You are currently browsing the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives.</p>

			<?php } ?>

			</li> <?php }?>

			<?php wp_list_pages('title_li=<h2>Pages</h2>' ); ?>

			<li><h2>Archives</h2>
				<ul>
				<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</li>

			<?php wp_list_categories('show_count=0&title_li=<h2>Categories</h2>'); ?>

			<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
				<?php wp_list_bookmarks(); ?>

				<li><h2>Meta</h2>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
					<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
					<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
					<?php wp_meta(); ?>
				</ul>
				</li>
			<?php } ?>

			<?php endif; ?>
		</ul>
        
        <div class="widget archive">
        	<h2 class="widgettitle">Archives</h2>
            <ul>
				<?php wp_get_archives('type=monthly'); ?>
			</ul>
        </div>
        
        <div class="categories">
        	<h2>Categories</h2>
            <ul>
            	<?php wp_list_categories('show_count=0&title_li='); ?>
            </ul>
        </div>
        
	</div>
    

