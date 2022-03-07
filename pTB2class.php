<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class PTB2</title>
</head>
<body>
    <form action="pTB2class.php" method="post">
        <div>Nhập a<br>
            <input type="text" name="a"/>
        </div>
        <div>Nhập b<br>
            <input type="text" name="b"/>
        </div>
        <div>Nhập c<br>
            <input type="text" name="c"/>
        </div><br>
        <div>
                </br>
                <input type="submit" value="Giải PT Bậc 2">
        </div>
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $a = $_POST ['a'];
    $b = $_POST ['b'];
    $c = $_POST ['c'];
}
if($a==''||$b==''||$c==''){
    echo "bạn chưa nhập đủ số liệu!!";
    return;
}
class PTB2 {
  // Properties
  public $a;
  public $b;
  public $c;

  // Methods
  public function a_b_c($a , $b , $c ) {
    $this->a = $a;
    $this->b = $b;
    $this->c = $c;
  }
  public function in_PTB2() {
    echo "Phương trình vừa nhập: ".$this->a."x^2 + ".$this->b."x + ".$this->c." = 0" ;
  }
  public function tinh_DelTa($a , $b , $c) {
   return $b * $b - 4 * $a * $c;
}
  public function kTraHS($a,$b,$c) {
    if ($a == 0) {
        if ($b == 0) {
            echo ("Phương trình vô nghiệm!</br>");
            exit;
        } else {
            echo ("Phương trình có một nghiệm: " . "x = " . (- $c / $b));
            exit;
        }
        return;
    }
 }
 public function tinh2NoPB( $a , $b ,$c) {
     $delta= $b * $b - 4 * $a * $c;
    if ($delta> 0) {
        $x1 = (- $b + sqrt ( $delta )) / (2 * $a);
        $x2 = (- $b - sqrt ( $delta )) / (2 * $a);
        echo ("Phương trình có 2 nghiệm là: " . "x1 = " . $x1 . " và x2 = " . $x2);
    } else if ($delta==0) {
        $x1 = (- $b / (2 * $a));
        echo ("Phương trình có nghiệm kép: x1 = x2 = " . $x1);
    } else {
        echo ("Phương trình vô nghiệm!");
    }
}
}

$ptb2 = new PTB2();
$ptb2->a_b_c( $a , $b , $c);
echo  $ptb2->in_PTB2();
echo "<br>";
echo $ptb2->KTraHS( $a , $b , $c);
echo "Delta=".$ptb2->tinh_DelTa( $a , $b , $c);
echo $ptb2->tinh2NoPB( $a , $b , $c);
?>