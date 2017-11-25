<?php get_header(); ?>
<div class="button"></div>
<div id="page">
	<div class="container main-posts">
	<?php if(have_posts()):
		while(have_posts()): the_post(); 
			get_template_part('post',get_post_format());

		 endwhile;
	endif; ?>
	</div> <!-- .container -->
<?php get_footer(); ?>
</div>