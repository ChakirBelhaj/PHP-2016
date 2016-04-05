<form method="post">
naam: <input type="text" name="text"><br>
<input type="submit" name="verzend" value="draaiom">
</form>

<?php

if (isset($_POST['verzend'] )){
    $naam = $_POST['text'];
    echo strrev ($naam );
	}
	?>

	