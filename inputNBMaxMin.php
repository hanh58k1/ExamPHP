<?php 
$A = Array(9,8,6,5,4,10,11);
echo "các phần tử ";
for($i=0 ;$i<7;$i++){
    echo $A[$i] .",";
}

echo "<br>";
echo "số lớn nhất trong mảng là:".max($A)."<br>";
echo "số bé nhất trong mảng là:".min($A)."<br>";
?>