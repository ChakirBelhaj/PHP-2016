<?php
session_start();

if(isset($_GET['boomStart']) and isset($_GET['boomEinde'])){
	if(is_numeric($_GET['boomStart']) and is_numeric($_GET['boomEinde'])){
		if($_GET['submit']){
			// $_SESSION['boomStart'] = $_GET['boomStart'];
			// $_SESSION['boomEinde'] = $_GET['boomEinde'];
			///// destroy session boom x
			if(isset($_SESSION['arrayFirst']) and isset($_SESSION['arraySecond'])){
				session_destroy();			
			}
			header('Location: result.php?boomStart=' .$_GET['boomStart'] . '&boomEinde=' .$_GET['boomEinde'] . '&vragen=' . $_GET['vragen']);
		}
	}
}
?>

<form method="get">
startgetal :<input type="number" name="boomStart"><br>
eindgetal  :<input type="number" name="boomEinde"><br>
aantal vragen :<input type="number" name="vragen"><br>
<input type="submit" name="submit">
</form>