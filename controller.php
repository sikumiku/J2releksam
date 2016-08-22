<?php
require_once('functions.php');

session_start();
connect_database();

$page="homepage";
if (isset($_GET['page']) && $_GET['page']!=""){
	$page=htmlspecialchars($_GET['page']);
}

include_once('header.html');

switch($page){
	case "homepage":
			homepage();
	break;
	
	default:
		include_once('home.html');
	break;
}

include_once('footer.html');

?>