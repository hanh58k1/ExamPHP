<?php
// khai báo các biến toàn cầu
$canh_a = "";
$canh_b = "";
$canh_c = "";
// đọc các hệ số từ FORM
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $canh_a = $_POST ['canh_a'];
    $canh_b = $_POST ['canh_b'];
    $canh_c = $_POST ['canh_c'];}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiem tra Tam Giac</title>
</head>
<body>
<form action="nhapCanhTGiac.php" method="post">
 <table>
  <tr>
   <td>Cạnh thứ nhất</td>
   <td><input type="text" name="canh_a"  /></td>
  </tr>
  <tr>
   <td>Cạnh thứ 2 </td>
   <td><input type="text" name="canh_b" /></td>
  </tr>
  <tr>
   <td>Cạnh thứ 3</td>
   <td><input type="text" name="canh_c" /></td>
  </tr>
  <tr>
   <td></td>
   <td><input type="submit" value="Tính toán"></td>
  </tr>
 </table>
</form>
</body>
</html>
<?php
function kiemTraTG ($a, $b, $c) {
    // kiểm tra biến đầu vào
    if ($a == "")
        $a = 0;
    if ($b == "")
        $b = 0;
    if ($c == "")
        $c = 0;
    // in phương trình ra màn hình
    echo " Độ dài :". $a . " , " . $b . " , " . $c . ".";
    echo "<br>";
    // kiểm tra tính hợp lệ của tam giác
    if (($a + $b) > $c && ($b + $c) > $a && ($c + $a) > $b) {
        echo 'Thỏa mãn yêu cầu là tam giác ';
        echo '</br>';
     
    //Loại tam giác.
        $a2=$a*$a;
        $b2=$b*$b;
        $c2=$c*$c;
        
        if ($a == $b && $b == $c) {
                echo 'Tam giác đều';
        }
            
        else if ($a == $b || $a == $c || $c == $b)  {
                if ($a2==$b2+$c2 || $b2==$a2+$c2 || $c2==$a2+$b2) {
                    echo 'Tam giác vuông cân';
                }
        else {
                    echo 'Tâm giác cân';
                }
        }
            
        else if ($a2==$b2+$c2 || $b2==$a2+$c2 || $c2==$a2+$b2) {
                echo 'Tam giác vuông';
        }
            
        else {
                echo 'Tam giác thường';
        }
    }
    else {
        echo 'Không tạo thành được tam giác ';
    }
}

// gọi hàm kiem tra tam giac
// Sử dụng từ kháo $GLOBALS để đọc các biến toàn cầu và truyền vào hàm

    kiemTraTG( $GLOBALS ['canh_a'], $GLOBALS ['canh_b'], $GLOBALS ['canh_c'] );

?>
