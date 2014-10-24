<?php 

require_once 'core/init.php';

$SiteInfo = new SiteInfo(); 

	// Ovde se nalazi logika koja kontrolise sve

// $user = DB::getInstance();    Povezivanje sa bazom

// Template::render()   Prikaz stranice sa temom

if (isset($_GET['page'])) {
	$page = escape($_GET['page']);
} else {
	$page = 'index';
}

Template::render($page);
