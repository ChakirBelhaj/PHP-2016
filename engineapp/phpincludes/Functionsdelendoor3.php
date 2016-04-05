<form method="post">
number: <input type="number" name="number"><br>
<input type="submit" name="verzend" value="Bereken">
</form>

<?php
$deelbaar = false;
if (isset($_POST['verzend'] )){
    $number = $_POST['number'];
	if($number % 3 == 0)  {
    $deelbaar = true;
	}else{ 
    $deelbaar = false;
        }
	}

	if($deelbaar == true) {
	    echo "Dit getal is deelbaar door 3";
	}else{ 
        echo "Dit nummer is niet deelbaar door 3";
    }