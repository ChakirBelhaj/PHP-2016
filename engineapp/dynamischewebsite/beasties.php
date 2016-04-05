<html>
<body>
<img src="beer.png" alt="Smiley face" height="42" width="42">
<form method="post">
<input type="submit" name="formSubmit" value="Bereken">
<label for='formDier[]'>Selecteer uw dier(en):</label><br>
<select multiple="multiple" name="formDier[]">
    <option value='<img src="images/muis.png" style="width:304px;height:228px">'>Muis</option>
    <option value='<img src="images/geit.jpg" style="width:304px;height:228px">'>Geit</option>
    <option value='<img src="images/koe.png" style="width:304px;height:228px">'>Koe</option>
    <option value='<img src="images/kat.png" style="width:304px;height:228px">'>kat</option>
    <option value='<img src="images/beer.png" style="width:304px;height:228px">'>Beer</option>
    <option value='<img src="images/hond.png" style="width:304px;height:228px">'>Hond</option>
</select>
<?php
 
if(isset($_POST['formSubmit'])) 
{
  $aDier = $_POST['formDier'];
   
  if(!isset($aDier)) 
  {
    echo("U heeft geen dier aangekozen");
  } 
  else
  {
    $nDier = count($aDier);
     
    echo("<p>je hebt $nDier dieren gekozen: ");
    for($i=0; $i < $nDier; $i++)
    {
      echo($aDier[$i] . " ");
    }
    echo("</p>");
  }
}


?>


 