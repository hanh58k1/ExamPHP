<?php 
$B = Array(9,8,6,5,4,10,11);
$arrlength = count($B);
echo "các phần tử ";
for($i=0 ;$i<$arrlength;$i++){
    echo $B[$i] .",";
}
echo "<br>";
echo "Sắp xếp từ nhỏ đến lớn:<br>";
sort($B);
for($x = 0; $x < $arrlength; $x++) {
  echo $B[$x].",";
}


?>