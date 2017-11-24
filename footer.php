
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h5><i class="fa fa-road"></i> ACME CO INC.</h5>
                <div class="row">
                    <div class="col-6">
							  <?php wp_nav_menu( array(
										'theme_location' => 'footer', // Defined when registering the menu
										'menu_id'        => 'footer-1',
										'container'      => false,
										'depth'          => 2,
										'menu_class'     => 'list-unstyled',
									) );
								  ?>
                    </div>
                    <div class="col-6">
							  <?php wp_nav_menu( array(
										'theme_location' => 'footer-2', // Defined when registering the menu
										'menu_id'        => 'footer-2',
										'container'      => false,
										'depth'          => 2,
										'menu_class'     => 'list-unstyled',
									) );
								  ?>
                    </div>
                </div>
                <ul class="nav">
                    <li class="nav-item"><a href="" class="nav-link pl-0"><i class="fa fa-facebook fa-lg"></i></a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-twitter fa-lg"></i></a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-github fa-lg"></i></a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-instagram fa-lg"></i></a></li>
                </ul>
                <br>
            </div>
            <div class="col-md-2">
                <h5 class="text-md-right">Contact Us</h5>
                <hr>
            </div>
            <div class="col-md-5">
                <form>
                    <fieldset class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </fieldset>
                    <fieldset class="form-group">
                        <textarea class="form-control" id="exampleMessage" placeholder="Message"></textarea>
                    </fieldset>
                    <fieldset class="form-group text-xs-right">
                        <button type="button" class="btn btn-secondary-outline btn-lg">Send</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</footer>
	
		
	<?php wp_footer(); ?>
	</body>
</html>