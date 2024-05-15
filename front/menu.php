<?php
$page="pages/start.php";
$cim="Kezdőlap";

if (isset($_GET['p'])){
	switch ($_GET['p']) {
		case 'reg': {
			$page="pages/reg.php";
			break;
		}
		case 'login': {
			$page="pages/login.php";
			break;
		}
		case 'titok': {
			$page="pages/crypt.php";
			break;
		}
	}
}

?>