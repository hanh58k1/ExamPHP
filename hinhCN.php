<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hình chữ nhật class</title>
</head>
<body>
    <form action="hinhCN.php" method="post">
        <div>Nhập chiều dài hình chữ nhật:<br>
            <input type="text" name="chieuDai"/>
        </div><br>
        <div>Nhập chiều rộng hình chữ nhật:<br>
            <input type="text" name="chieuRong"/>
        </div>
        <div>
                </br>
                <input type="submit" value="tính chu vi và diện tích HCN">
        </div>
    </form>
</body>
</html>
<?php
echo"<br>";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $chieuDai = $_POST ['chieuDai'];
    $chieuRong = $_POST ['chieuRong'];

if($chieuDai==''||$chieuRong==''){
    echo "bạn chưa nhập đủ số liệu!!";
    return;
}
}
class HCN {
  public $chieuDai;
  public $chieuRong;

  public function chieudai_chieurong($chieuDai ,$chieuRong ) {
    $this->chieuDai = $chieuDai;
    $this->chieuRong = $chieuRong;
  }
  public function in_canhHCN() {
    echo "chiều dài HCN:".$this->chieuDai."<br>" ;
    echo "chiều rộng HCN:".$this->chieuRong ;
  }
  public function tinhChuVi($chieuDai,$chieuRong) {
   return ($chieuDai+$chieuRong)*2;
  }
  public function tinhDienTich($chieuDai,$chieuRong) {
    return $chieuDai*$chieuRong;
   }

}

$hcn = new HCN();
$hcn->chieudai_chieurong($chieuDai,$chieuRong);
echo  $hcn->in_canhHCN();
echo "<br>";
echo "Chu vi HCN:".$hcn->tinhChuVi($chieuDai,$chieuRong);
echo "<br>";
echo "Diện tích HCN:".$hcn->tinhDienTich($chieuDai,$chieuRong);
?>