<?php get_header();?>
	<!-- end #menu -->
	<div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="content">
        <?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

			<div class="post">
				<h2 class="title"><a href="<?php the_permalink() ?>"> <?php echo mb_strimwidth(get_the_title(), 0, 32, ''); ?></a></h2>
				<p class="meta">发布日期：<?php the_time('Y-m-d'); ?>  - 分类：<?php the_category(', ') ?>  - <?php the_tags('标签： ', ', ', ''); ?> - 评论：<?php comments_number('暂无评论', '1条评论', '% 评论' );?></p>
				<div class="entry">
					<p><?php the_content(); ?></p>
					
				
                    <p>
                    <div style="float:left"><?php previous_post_link('&laquo; %link'); ?></div>
<div style="float:right"><?php next_post_link('%link &raquo;'); ?></div>

                    
                    </p>
				</div>
			</div>
			<?php endwhile; ?>
           <?php comments_template(); ?>
<?php endif;?>

			
		<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<?php get_sidebar();?>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	</div>
	</div>
	<!-- end #page -->
</div>
<?php get_footer();?>
</body>
</html>
