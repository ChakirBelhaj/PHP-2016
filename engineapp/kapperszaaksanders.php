<!DOCTYPE html>

    
<?php 

$kapperszaaksanders	= array(

"9:20"	=> "Meneer: Mouaad",
"9:30"	=> "Meneer: Belhaj",
"9:40"	=> "Meneer: Anderson",
"9:50"	=> "Meneer: Pandio",
"9:50"	=> "",

);
echo $kapperszaaksanders;
    echo "<br>";
foreach ($kapperszaaksanders as $tijd => $naam) {
    if ($naam == ""){
        $naam = "hier kunt u reserveren";
    }
    echo $naam;
              echo "<br>";
    echo $tijd;
             echo "<br>";
}
?>

