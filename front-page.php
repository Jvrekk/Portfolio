<?php get_header(); ?>
<div class="menu-trigger"><div class="dash"></div><div class="dash"></div><div class="dash"></div></div>
<div id="page">
	<?php get_template_part( 'welcome' ); ?>
	<div class="main-posts">
		<div class="container">
		<?php if(have_posts()):
			while(have_posts()): the_post(); 
				get_template_part('post',get_post_format());

			 endwhile;
		endif; ?>
		</div> <!-- .container -->
	</div>

<?php get_footer(); ?>