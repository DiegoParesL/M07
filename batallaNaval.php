<!--to delete something: php > unset ( $var[num])  -->
<!-- $a[vaca] = "mu" adds a dictionary that has the key "vaca" and the value "mu" -->
<!-- foreach($sons as $animal => $so){ ...some code... } -->

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
$R = 10;
$C = 10;
$AUX = 0;
$rand = 0;
$vehicles = [ "fragata" => 4 , "submari" => 3 , "destructor" => 2 , "portaavions" => 1];

$a = [[0, 0, 0, 0, 0, 0, 0, 0, 0, 0]];
for($i =1; $i<$R; $i++){
    if($rand ==0){
        $rand = random_int(1,40);
        if(($rand ==1 or $rand ==3 or $rand == 5) and $vehicles["fragata"] >0){
            echo "\t\t<td><p><b>1</b></p></td>\n\n";
            $vehicles["fragata"] =$vehicles["fragata"];
            $rand = random_int(1,40);
        }else{
            echo "\t\t<td><p><b>\t</b></p></td>\n\n";
            $rand = random_int(1,40);
        }
    } elseif(($rand ==1 or $rand ==3 or $rand == 5) and $vehicles["fragata"] >0){
        echo "\t\t<td><p><b>1</b></p></td>\n\n";
        $vehicles["fragata"] =$vehicles["fragata"];
        $rand = random_int(1,40);
    }else{
        echo "\t\t<td><p><b>\t</b></p></td>\n\n";
        $rand = random_int(1,40);
    }
}






for ($j=0; $j<=$R; $j++){
  echo " <tr>\n";
    
    for ($i=$AUX; $i<=$C+$AUX; $i++){
        if ($j==0 and $i ==0 ) {
            echo "\t\t<td><p>\t</p></td>\n\n";
        } else{
            if ($j== 0 and $i >0) {
                
                echo "\t\t<td><p>$i</p></td>\n\n"; 
            } elseif ($j >0 and $i==$AUX) {
                $letter = chr($j+64);
                echo "\t\t<td><p>$letter</p></td>\n\n"; 
            }else {
                echo "\t\t<td><p><b>\t</b></p></td>\n\n";
                $rand = random_int(1,40);
            }
        }
    }
  $AUX = $AUX +1;
  echo "\t<tr>";
}
?>  
</table>    
</body>
</html>