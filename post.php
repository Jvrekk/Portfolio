<article id="post-<?php the_ID(); ?>" class="<?php post_class(); ?>" >
	<img class="thumbnail-image" src="<?php the_post_thumbnail_url('full'); ?>" width="100%"/>
	<header class="post-header">
		<h1><?php the_title(sprintf('<h1 class="post-title"><a href="">', esc_url(get_permalink()) ),'</a></h1>'); ?></h1>
	</header>
	<p><?php the_content(); ?></p>
</article>