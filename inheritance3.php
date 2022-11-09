<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form class="btn" method="POST" action="">
        <input type="submit" name="image" value="imagebutton" style="width:150px;height:75px">
        <input type="submit" name="shape" value="shapebutton" style="width:120px;height:60px">
</form>

<?php

class button{

    public $x;
    public $y;
    public $width;
    public $height;
}
class imagebutton extends button{
    public $ukuran;
    public function cekUkuran(){
        echo "Lebar Tombol Adalah".$this -> ukuran;
        echo "<br>";
        echo "Tinggi Tombol Adalah".$this -> tinggi;
    } 

}
class shapebutton extends button{
    public $klic;
    public function cekKlic(){
        echo "Lebar Tombol Adalah".$this -> ukuran;
        echo "<br>";
        echo "Tinggi Tombol Adalah".$this -> tinggi;
    }

}
function satu(){
    $button = new imagebutton();
    $ukuran = $button ->ukuran=150.0;
    $tinggi = $button ->tinggi=75.0;

    echo $button->cekUkuran();
}
function dua(){
    $button = new shapebutton();
    $ukuran = $button ->ukuran=120.0;
    $tinggi = $button ->tinggi=60.0;

    echo $button->cekKlic();
}
if (isset($_POST['image'])){
    echo satu();
}else if(isset($_POST['shape'])){
    echo dua();
}
?>
</body>
</html>
