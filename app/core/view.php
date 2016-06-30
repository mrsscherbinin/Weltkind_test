<?php

class View {

	function __construct(){
		
	}

	function generate($content, $data = null, $sedata = null)
	{
		
		if(is_array($data)) {
			extract($data);
		}
		if(is_array($sedata)) {
			extract($sedata);
		}
		include 'views/base/header.php';
		include 'views/'.$content;
		include 'views/base/footer.php';
	}


}
