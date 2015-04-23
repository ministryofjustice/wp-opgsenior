<?php
	locate_template( array( 'functions' . DIRECTORY_SEPARATOR . 'linen-extend.php' ), true );
	
		if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}