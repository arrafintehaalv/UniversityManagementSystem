<?php get_header();?>
	
		<div class="content_wrapper">
			<div class="left_content">
	<h1 style="padding-left:100px;color:rgb(178,200,89);">Student Management System<hr></h1>
	
<?php
	if(have_posts()):
		while(have_posts()): the_post();?>
	<article class="home_ar_wrap">
		<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
		
		<div class="featured_image">
		<a href="<?php the_permalink();?>">
			<?php the_post_thumbnail();?></a>
		</div>


		<div class="post_meta">
		Posted By: <?php The_author_posts_link();?>
		|Posted On: <?php the_time('M,d,Y');?>
		 at <?php the_time();?>
		|Posted In:<?php  the_category(',');?>
		</div>
		<p><?php the_content();?></p>
	</article>
	<?php endwhile;
	else:
		echo 'Nothing found!';
	endif;
	?>
	</div>

	</div>
<?php wp_footer(); ?>
<?php get_footer();?>
</body>
</html>