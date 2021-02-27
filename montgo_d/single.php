<?php get_header(); ?>
<section class="post-list">
	<?php if (have_posts()) :?>
	<?php while(have_posts()) : the_post(); ?>
	<article class="post-container">
	<a class="post-link" href="<?php the_permalink() ?>">
			<h2><?php the_title(); ?></h2></a>
	<div id="post-<?php the_ID()?>" <?php post_class( array( 'post-class-v') ) ?>>
	<span class="cat"><?php the_category(' '); ?></span>
    <?php the_content(); ?>
	<p class="article_tags"><?php if ( function_exists('wp_tag_cloud') ) : ?>
							<?php the_tags( '<ul class="tags"><li>','</li><li>','</li></ul>'); ?>
							<?php endif; ?></p><div style="clear:both"></div>
							<?php echo do_shortcode('[say_thx_ya]');?>
			 <span class="post-date float_left">
			 <?php the_time('j M Y'); ?><?php //echo getPostViews(get_the_ID()); ?></span> <!--<span class="reading_time"><?php //estimated_reading_time();?></span>  -->
             <span class="com-data float_right" ><?php edit_post_link('Edit ', '', '  '); ?> <?php comments_popup_link('(0) comments', '(1) comment', '(%) comments'); ?></span>
	<div class="clear"></div>  
	</div>
	<footer class="article_meta_footer">
		<p class="article_meta muted"> <a href="#" onclick="history.back();return false;">Back</a></p>
	<div class="clear"></div>  
	</footer>
	<?php comments_template(); // Get wp-comments.php template ?>
	<?php if ($postcounter == 6) : ?>
	<?php endif; ?>
	<?php endwhile; ?>
	<?php else : ?>
	<?php endif; ?>
</article>
</section>
<?php get_footer(); ?>