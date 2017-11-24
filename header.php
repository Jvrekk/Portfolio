<html>
	<head>

        <meta charset="<?php bloginfo('charset'); ?>">
        <title>
            <?php if( is_front_page() ):
                 bloginfo('name');  
            else:
               echo '<', wp_title(''), ' >';
            endif;
        ?>
        </title>
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<?php wp_head() ?>
	</head>
	
<?php if(is_front_page()):
	$body_theme_classes = array('frontPage');
else:
	$body_theme_classes = array('otherPage');
endif; ?>
	
	<body <?php body_class($body_theme_classes); ?> >
		
			
		
			
<?php if( get_header_image()): ?>
			<header>
				<div class="row">
					<img class="header-image" src="<?php header_image(); ?>" width="100%" />
				</div>
			</header>
<?php endif; ?>
		
			
					<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
						<div class="container">
						  <a class="navbar-brand" href="#">Navbar</a>
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						  </button>
							<div class="collapse navbar-collapse" id="navbarNav">
							  <?php wp_nav_menu( array(
										'theme_location' => 'main', // Defined when registering the menu
										'menu_id'        => 'primary-menu',
										'container'      => false,
										'depth'          => 2,
										'menu_class'     => 'navbar-nav mx-auto',
										'walker'         => new Bootstrap_NavWalker(), // This controls the display of the Bootstrap Navbar
										'fallback_cb'    => 'Bootstrap_NavWalker::fallback', // For menu fallback
									) );
								  ?>
							</div>
						</div>
					</nav>
			
	
		
		
	

