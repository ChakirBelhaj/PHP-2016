<?php
session_start();
if(!$_GET['boomStart'] and !$_GET['boomEinde']){
	header('Location: opdracht.php');
}
else{
?>
<form method="post">


<?php
if(isset($_SESSION['corrigeren']) and isset($_SESSION['goed']) and isset($_SESSION['fout'])){
	echo "u heeft " . $_SESSION['goed'] . " goed en ". $_SESSION['fout']  . " fout";
	echo'<br>';

	if(empty($_SESSION['corrigeren'])){
	echo'U heeft alle vragen goed beantwoord<br>';
	}
	if(!empty($_SESSION['corrigeren'])){
	echo'de volgende vragen zijn fout:<br>';
		foreach($_SESSION['corrigeren'] as $corrigeren){
			echo 'vraag '. $corrigeren . ' ';
		}
	}

	echo'<br>';

	unset($_SESSION['corrigeren'],$_SESSION['goed'],$_SESSION['fout']);
}

if(!isset($_SESSION['arrayFirst']) and !isset($_SESSION['arraySecond'])){
	if(isset($_GET['vragen']) and isset($_GET['boomStart']) and isset($_GET['boomEinde'])){
		$vragen = $_GET['vragen'];
		$arrayFirst = array();
		$arraySecond = array();

		for($i = 0; $i < $vragen; $i++){
			$First[$i] = rand($_GET['boomStart'],$_GET['boomEinde']);
			$Second[$i] = rand($_GET['boomStart'],$_GET['boomEinde']);
			array_push($arrayFirst, $First[$i]);
			array_push($arraySecond, $Second[$i]);
		}

	$_SESSION['arrayFirst'] = $arrayFirst;
	$_SESSION['arraySecond'] = $arraySecond;
	}
}
else{
	$arrayFirst = $_SESSION['arrayFirst'] ;
	$arraySecond = $_SESSION['arraySecond'] ;
	$vragen = $_GET['vragen'];
}



//array got error put array in for loop.
echo 'Beantwoord de volgende vragen :) <br>';
echo "<table border='0px'>";

$ingevulden = array();
$antwoorden = array();

	for($i = 0; $i < $vragen; $i++){
		echo "<tr>";
		

?>
<td>vraag <?php echo ($i + 1); ?>:</td>
<td> <?php echo $arrayFirst[$i]; ?></td>
<td>+</td>
<td><?php echo $arraySecond[$i];  ?></td>
<td>=</td>
<td><input type="text" size="3" name="<?php echo $i; array_push($ingevulden,$i) ?>" value="<?php if(isset($_SESSION['opslaan'])){ echo $_SESSION['opslaan'][$i];} ?>"></td>


<?php
array_push($antwoorden,$arrayFirst[$i] + $arraySecond[$i]);
		echo "</tr>";
	}
	?>
</table>
<input type="submit" name="corrigeren" value="corrigeren">
<input type="submit" name="andereVragen" value="andere vragen">
<input type="submit" name="start" value="start pagina">
<?php
if(isset($_POST['corrigeren'])){

$_SESSION['opslaan'] = array();
$_SESSION['corrigeren'] = array();
	$goed = 0;
	$fout = 0;

		for($i = 0; $i < $vragen; $i++){

			array_push($_SESSION['opslaan'],$_POST[$ingevulden[$i]]);

			if($antwoorden[$i] == $_POST[$ingevulden[$i]]){
				$goed = $goed + 1;
			}
			else{ 
				$fout = $fout + 1;
				array_push($_SESSION['corrigeren'],($i + 1));
			}
	$_SESSION['goed'] = $goed;
	$_SESSION['fout'] = $fout;
	}
	echo "u heeft " . $goed . " goed en ". $fout . " fout";
		header('Location: result.php?boomStart=' .$_GET['boomStart'] . '&boomEinde=' .$_GET['boomEinde'] . '&vragen=' . $_GET['vragen']);
}
if(isset($_POST['start'])){
header('Location: opdracht.php');
}

if(isset($_POST['andereVragen'])){
	if(isset($_GET['vragen']) and isset($_GET['boomStart']) and isset($_GET['boomEinde'])){
		$vragen = $_GET['vragen'];
		$arrayFirst = array();
		$arraySecond = array();

		for($i = 0; $i < $vragen; $i++){
			$First[$i] = rand($_GET['boomStart'],$_GET['boomEinde']);
			$Second[$i] = rand($_GET['boomStart'],$_GET['boomEinde']);
			array_push($arrayFirst, $First[$i]);
			array_push($arraySecond, $Second[$i]);
		}

	$_SESSION['arrayFirst'] = $arrayFirst;
	$_SESSION['arraySecond'] = $arraySecond;
	if(isset($_SESSION['opslaan'])){ unset($_SESSION['opslaan']); } // destroy de sessie opslaan
	header('Location: result.php?boomStart=' .$_GET['boomStart'] . '&boomEinde=' .$_GET['boomEinde'] . '&vragen=' . $_GET['vragen']);
	}	
}
}
?>