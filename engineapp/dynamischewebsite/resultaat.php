<?php
	
	$messages = array();
	if(!isset($_GET["inlognaam"]) && !isset($_GET["wachtwoord"])){
		$messages[] = "U moet eerst het formulier invullen.";
				
		// echo $_GET["inlognaam"]."<br>"; // toont “naam”
		// echo $_GET["wachtwoord"]."<br>"; // toont “wachtwoord”
		// echo $_GET["E-mail"]."<br>"; // toont “mail”
		// echo $_GET["knop"]; // toont “verstuur”
	}
	else if(strlen($_GET["inlognaam"])< 2){
		$messages[] = "een naam moet minimaal 2 letter bevatten.";
	}
	else if(strlen($_GET["wachtwoord"])< 4){
		$messages[] = "een wachtwoord moet minimaal 4 letter bevatten.";
	}
	else if(strlen($_GET["adres"])< 4){
		$messages[] = "een adres moet minimaal 4 letter bevatten.";
	}
	if (!count($messages) == 0 ){
		//messages weergeven
		
		$html = "<ul>";
		foreach ($messages as $message) {
			$html .= "<li>".$message."</li>";
		
		}
		$html .= "</ul>";
		echo $html;
		
	}
	else{
		echo "Naam:". $_GET["inlognaam"];
		echo "email"$_GET["E-mail"]."<br>"; // toont “mail”
		echo "adres"$_GET["adres"]."<br>"; // toont “adres”
	}
	

	?>