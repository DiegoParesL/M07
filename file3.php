<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<table>
  <?php 
$R = 7;
$C = 10;
$AUX = 0;

for ($j=0; $j<=$R; $j++){
  echo " <tr>\n";
    for ($i=$AUX; $i<=$C+$AUX; $i++){
        $letter = $i;
        echo "\t\t<td><p>$letter</p></td>\n\n";
    }
  $AUX = $AUX +1;
  echo "\t<tr>";
}
?>  
</table>    
</body>
</html>
