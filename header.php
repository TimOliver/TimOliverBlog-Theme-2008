<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title><?php bloginfo('name'); ?> <?php if ( /*is_single()*/false ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<link rel="Shortcut Icon" href="http://www.tim-oliver.com/favicon.ico" /> 
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<style type="text/css" media="screen">

	#navstrip .button { background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/header/buttons_<? _e('en'); ?>.gif'); }

<?php
// Checks to see whether it needs a sidebar or not
if ( !empty($withcomments) && !is_single() ) {
?>
	#page { background: url("<?php bloginfo('stylesheet_directory'); ?>/images/kubrickbg-<?php bloginfo('text_direction'); ?>.jpg") repeat-y top; border: none; }
<?php } else { // No sidebar ?>
	#page { background: url("<?php bloginfo('stylesheet_directory'); ?>/images/framework/main_bg_y.gif") repeat-y top; border: none; }
<?php } ?>

</style>

<?php wp_head(); ?>

<!-- Twitter Widget Code -->
<script type='text/javascript' src='<?php get_option('home'); ?>/wp-includes/js/jquery/jquery.tweet.js?ver=1.0'></script>


<script type='text/javascript'>
<!--
    jQuery(document).ready(function(){
        jQuery(".tweet").tweet({
            username: "Tim0liver",
            join_text: "auto",
            count: 5,
            auto_join_text_default: "",
            auto_join_text_ed: "",
            auto_join_text_ing: "",
            auto_join_text_reply: "",
            auto_join_text_url: "",
            loading_text: "Loading Tweets..."
        });
    });
//-->
</script> 

<!-- FancyBox code -->
<script type='text/javascript' src='<?php get_option('home'); ?>/wp-includes/js/jquery/jquery.fancybox-1.2.6.js?ver=1.2.6'></script>
<link rel="stylesheet" href="<?php get_option('home'); ?>/wp-includes/css/jquery.fancybox-1.2.6.css" type="text/css" media="screen" />

<script type="text/javascript">
<!--
	/*Add fancybox to any link that contains an image*/
	jQuery(document).ready(function() 
	{
		var imgs = ['.jpg', '.jpeg', '.gif', '.png'];
		jQuery("#content a").each(function(index,obj) {
			for( i = 0; i < imgs.length; i++ )
			{
				var img = imgs[i].toLowerCase(); //indexof is case sensitive so force lower case
				
				if( jQuery(obj).attr('href').indexOf(img) != -1 && jQuery(obj).attr('href') != "_blank" )
					break;
			}
			
			if( i<imgs.length )
				jQuery(obj).fancybox();
		});
	});
//-->
</script>

</head>
<body>
<div id="page">

	<div class="page_vertical top">
		<div class="page_corner top_left">&nbsp;</div>
		<div class="page_corner top_right">&nbsp;</div>
	</div>	

	<div id="header">	
		
		<div id="headerimg">
			<div id="title">
				<a href="<?php echo get_option('home'); ?>" title="<? _e('Tim Oliver'); ?>">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/header/title.png" alt="<? _e('Tim Oliver &middot; Gamer. Coder. Artist. Geek.'); ?> "/>
				</a>
			</div>
		</div>
		<div id="navstrip">
        	<?php wp_page_menu(array('show_home'=>true, 'sort_column'=>'menu_order')); ?> 
		
        	<div id="searchbar">		
                <form action="http://www.tim-oliver.com" id="searchform" method="get">
                        <input type="text" id="s" name="s" value="" size="35"/>
						<input type="image" value="Search" id="searchsubmit" src="<? echo get_option('siteurl'); ?>/wp-content/themes/tim/images/header/search.png"/>
                </form>
            </div>
			
			<div class="shadow">&nbsp;</div>
		</div>
	</div>
