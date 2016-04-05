

<form method="post">
celsius: <input type="number" name="celsius"><br>
<input type="submit" name="verzend" value="Bereken">

</form>
<?php
	function waarde($waarde) {
		$fahrenheit = $waarde * 1.8 + 32 ;
		return $fahrenheit;
	}
	if (isset($_POST['verzend'] )) {
    $celsius = $_POST['celsius'];
        if (!empty($celsius)){
        echo waarde($celsius);
   		}
    else{
        echo "Voer waarde in";
	}
}