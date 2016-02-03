<!DOCTYPE html>
<html>

<head>

<body>

<form method = "POST" action="">
  Voer uw leeftijd in:<br>
  <input type="text" name="leeftijd" value=""><br>
  <input type="submit" name="submit">
</form>
			<?php
 
if(isset($_POST['submit'])){

$leeftijd = $_POST ['leeftijd'];
	if(!empty($leeftijd)){
	if ($leeftijd < 3){
		echo "Uw kaartje is gratis";
	
		}
		else if ($leeftijd > 65 || $leeftijd <= 12) {
			echo "Uw kaartje is 5 euro";
		}
		
		else {
			echo "Uw kaartje is 10 euro";
		}
		}
		else {
			echo "Voer een geldig leeftijd in";
		}

	
}
			?>
</body>

</head>

</html>