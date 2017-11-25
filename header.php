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
		
		<nav id="main-Menu">
			<?php wp_nav_menu( array(
						'theme_location' => 'main',
						'menu_id'        => 'primary-menu',
						'container'		 => false,
						'menu_class'     => 'menu list-unstyled',
			));?>
		
		</nav>
					
			
	
		
		
	

