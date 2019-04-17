<?php get_header();?>
	
		<div class="content_wrapper">
			<div class="left_content">
	<h1 style="padding-left:100px;color:rgb(178,200,89);">Student Management System<hr></h1>
	
	
<?php
	if(have_posts()):
		while(have_posts()): the_post();?>
	<?php get_template_part('content');?>
	<?php endwhile;
	else:
		echo 'Nothing found!';
	endif;
	?>
		<?php if (function_exists("pagination")) {    pagination($additional_loop->max_num_pages);} ?>
				
	</div>
		<?php get_sidebar();?>
	</div>
<?php wp_footer(); ?>
<?php get_footer();?>
</body>
</html>