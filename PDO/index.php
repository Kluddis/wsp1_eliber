<?php
/*
This is my solution for the laboration that Niklas Mårdby share on his wiki Porkforge.
I've used this laboration to show my pupils how you can work with PHP in developement.
http://porkforge.mardby.se/index.php?title=PHP_Laboration_2_-_Projektstart,_require_och_GET
*/

// We tell the page to require a file called functions
require ('resources/includes/view.php');
require ('resources/includes/model.php');

// Set header correct without using HTML
header("Content-type: text/html; charset=utf-8");

// Get value from url for key page
$page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_URL);
$error=" ";
if(empty($page)) {
	$header = 'Start';
    $content = 'PDO Labb       WASA WASA WASA WASA  WAAASSSAAAAAAAAPP  BITCONNECT!!!!! ';
    include ('resources/templates/page-template.php');
}
elseif($page == "blogg") {
    $header = 'Blogg';
	$template = 'all-blog-posts';
	$post = filter_input(INPUT_GET, 'post', FILTER_SANITIZE_URL);


 		if(array_key_exists($post, $model)){
			$template = 'single-blog-post';
			$title = $model[$post]['title'];
			$author = $model[$post]['author'];
			$date = $model[$post]['date'];
			$message = $model[$post]['text'];
		}
	elseif(!empty($post)){
		$header = 'ERROR 404';
		$error = 'Denna sidan existerar ej!';
		$template = 'page';
	}

    include ('resources/templates/'. $template .'-template.php');
}
elseif($page == "kontakt") {
	$header = 'Kontakt';
    $content = "Ho ho ho ha ha , ho ho ho he ha. Hello there, old chum. I’m g'not a g'nelf. I’m g'not a g'noblin. I’m a gnome!! And you’ve been, GNOOOMED";
    include ('resources/templates/page-template.php');
}
else {
	echo "Den sökta sidan finns inte";
}



?>
