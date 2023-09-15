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
echo " <tr>\n";
$N = 7;
for ($i=1; $i<=$N; $i++){
    echo "\t\t<td><p>$i</p></td>\n";
}
echo "\t<tr>";
?>  
</table>    
</body>
</html>




