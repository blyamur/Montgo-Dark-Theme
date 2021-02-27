<?php get_header(); ?>
<section class="post-list">

     <h4 class="page-title"><?php printf( esc_html__( 'Результаты поиска для: «%s»', 'mo' ), get_search_query() ); ?></h4>


	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<article class="post-container">
	<a class="post-link" href="<?php the_permalink() ?>">
			<h2><?php the_title(); ?></h2></a>
	<div id="post-<?php the_ID()?>" <?php post_class( array( 'post-class-v') ) ?>>
			<span class="cat"><?php the_category(' '); ?></span>  
			<?php the_content('Читать далее &raquo;'); ?>
	        <p class="article_tags"><?php if ( function_exists('wp_tag_cloud') ) : ?>
							         <?php the_tags( '<ul class="tags"><li>','</li><li>','</li></ul>'); ?>
							          <?php endif; ?></p><div style="clear:both"></div>
			 <span class="post-date float_left">
			 <?php echo getPostViews(get_the_ID()); ?> |
			 <?php the_time('j M Y'); ?></span>  <span class="reading_time"><?php estimated_reading_time();?></span>  
             <span class="com-data float_right" ><?php edit_post_link('Правка ', '', '  '); ?> <?php comments_popup_link('(0) комментарий', '(1) комментарий', '(%) комментарий'); ?></span>
	<div class="clear"></div>    
	</div>
    </article>
	<?php endwhile; ?>
	<div class="pagination">
		<div class="pagination-older"><?php next_posts_link('Старее'); ?></div>
		<div class="pagination-newer"><?php previous_posts_link( 'Новее'); ?></div>
	</div>
    <div class="clear"></div>
	<?php else: ?>
	<div class="404">
		<h2>Упс | OOPS</h2>
		<p>Мы ничего не нашли по вашему запросу</p>
		<p>We did not find anything for your request</p>
	</div>
	<?php endif; ?>

</section>
<?php get_footer(); ?>
