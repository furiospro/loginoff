<?php

function debug(){

	global $USER;
	if($USER->IsAdmin()){
		call_user_func_array('printVar',func_get_args());
	}
}

function printVar($var){
	static $first_time = true;

	if ( $first_time ) {
		ob_start();
		echo '<style type="text/css">
		div.cust_print_r {
			max-height: 500px;
			overflow-y: scroll;
			background: #23282d;
			margin: 10px 30px;
			padding: 0;
			border: 1px solid #F5F5F5;
			border-radius: 3px;
			position: relative;
			z-index: 11111;
		}

		div.cust_print_r pre {
			color: #78FF5B;
			background: #23282d;
			text-shadow: 1px 1px 0 #000;
			font-family: Consolas, monospace;
			font-size: 12px;
			margin: 0;
			padding: 5px;
			display: block;
			line-height: 16px;
			text-align: left;
		}

		div.cust_print_r_group {
			background: #f1f1f1;
			margin: 10px 30px;
			padding: 1px;
			border-radius: 5px;
			position: relative;
			z-index: 11110;
		}
		div.cust_print_r_group div.cust_print_r {
			margin: 9px;
			border-width: 0;
		}
		</style>';
		echo str_replace( array( '  ', "\n" ), '', ob_get_clean() );

		$first_time = false;
	}

	if ( func_num_args() == 1 ) {
		echo '<div class="cust_print_r"><pre>';
		echo print_r($var,1);
		echo '</pre></div>';
	} else {
		echo '<div class="cust_print_r_group">';
		foreach ( func_get_args() as $param ) {
			printVar( $param );
		}
		echo '</div>';
	}
}

function mb_ucfirst($text) {
	return mb_strtoupper(mb_substr($text, 0, 1)) . mb_substr($text, 1);
}
