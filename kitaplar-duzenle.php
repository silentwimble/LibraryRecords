<?php
session_start(); 
if((!isset($_SESSION["login"]))||($_SESSION["yetki"]=="0")){
?>
<meta http-equiv="refresh" content="0;URL=giris.php">
<?php
} else
{
?>
<!-- GİRİŞ KONTROL -->
<?php include("header.php") ?>
<?php include("kontrol/veritabani.php") ?>

<section id="content">
<?php
$id=$_POST['id'];
$kitapadi=$_POST['kitapadi'];
$yazari=$_POST['yazari'];

$ayarguncelle=$connection->query("UPDATE kitaplar set kitapadi='$kitapadi',yazari='$yazari' where id='$id'") or die ("Bir Hata Oluştu");


if($ayarguncelle){
	$durum="<h2>İşlem Başarılı</h2>";
}else{
	$durum="<h2>Bir hata oluştu</h2>";
	}
echo"$durum";
echo" <meta http-equiv=\"refresh\" content=\"0;url=kitaplar.php\"> ";
?>

</section>

<!-- GİRİŞ KONTROL -->          
<?php include("footer.php"); ?>
<?php	} ?>