<?php
$zwemclub ["De spartelkuikens"] = 25;
$zwemclub ["De waterbuffels"] = 32;
$zwemclub ["Plonsmderin"] = 11;
$zwemclub ["Blommetje"] = 23;
echo "<table border=1 style=width:100%>";
foreach ($zwemclub as $label => $waarde) {
   echo "<tr><td>Club ". $label ."</td><td> heeft ". $waarde ." zwemmers</td><td>";
        for ($i=1;$waarde/5 >= $i; $i++){
            echo "<img src=/Image/zwemer.png>";
        }
  echo "</td></tr>";
}
?>