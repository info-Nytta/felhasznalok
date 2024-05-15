<?php 
// error_reporting(0); // ha nem akarjuk a képernyőre a hibaüzeneteket

// api

		// saját függvények közvetlen elérése
		include_once("api/db_connect.php");
		include_once("api/crud.php");

// back

		// session-kezelés, beléptetés
		
		// saját függvények elérése
		include_once("back/functions.php");
		include_once("back/user/new-user.php");
		include_once("back/user/login-user.php");

// front

		// alap beállítások
		$myUrl="";
		$apiUrl=""; // ha szükséges

		// saját függvények
		
		// oldal betöltés
		include_once("front/load.php");

?>