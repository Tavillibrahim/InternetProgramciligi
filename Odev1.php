<!-- 1 den 10 a kadar tek sayılar-->
<?php 
echo "<hr>1 den 10 a kadar tek sayılar<br><hr>";
for($i = 0;$i<=10;$i++){
    if($i%2==1){
        echo $i ."<br>";
    }
}
?>
<!-- 1 den 10 a kadar tek sayıların toplamı-->
<?php 
echo "<hr> <br>1 den 10 a kadar tek sayıların toplamı <br><hr>";
$toplam = 0;
for($i = 0;$i<=10;$i++){
    if($i%2==1){
        $toplam+=$i;
    }
}
echo $toplam;
?>
<!-- 1 den 10 a kadar çift sayıların karesini tek sayıların iki katı-->
<?php 
echo "<hr> <br>1 den 10 a kadar çift sayıların karesini tek sayıların iki katı <br><hr>";
for($i = 0;$i<=10;$i++){
    if($i%2==0){
        echo $i*$i ."<br>";
    }
    else if($i%2==1){
        echo $i*2 ."<br>";
    }
}
?>
<!-- 1 den 10 a kadar tek sayılar-->
<?php echo"<hr> <br>Girilen 2 sayı arasındaki sayıları yazdırma<br><hr>"; ?>
<form action="" method="GET">
   Başlangıç <input type="text" name="sayi1" id=""><br>
   Bitiş <input type="text" name="sayi2" id=""><br>
   <input type="submit">
</form>
<?php 
if(isset($_GET["sayi1"]))
{
    $sayi1 = $_GET["sayi1"];
    $sayi2 = $_GET["sayi2"];
    if( $sayi1 < $sayi2){
        for($i = $sayi1;$i<=$sayi2;$i++){
            if($i%2==1){
                echo $i ."<br>";
            }
        }
    }
    else{
        echo "<br><b style='color:red'>Başlangıç bitişten büyük olmalı!!</b>";
    }
}
?>