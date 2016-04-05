<!DOCTYPE html>
<html>
    

<?php
$artiest	= array(
    array("artiest" => "justin bieber", "album" => "weetikveel", "cd" => "baby"),
    array("artiest"=> "Micheal jackson", "album" => "rock and roll", "cd" => "thriller"),
    array("artiest"=> "SMOKIN' DYNAMITE ", "album" => "SMOKE", "cd" => "Black cat moan") 
);  
?>

<table border="10" style="width:100%">
   <td><b>Artiest</b></td>
    <td><b>Album</b></td>
     <td><b>Cd</b></td>
     <tr>
<?php foreach ($artiest as $a){ ?>
    <td><?php echo $a["artiest"]; ?></td>
    <td><?php echo $a["album"]; ?></td>
    <td><?php echo $a["cd"]; ?></td>
</tr>
<?php
}


?>
</table>
</html>