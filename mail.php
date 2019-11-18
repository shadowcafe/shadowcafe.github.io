<?php
header("Content-Type:Text/Html;charset=utf8");

if(isset($_POST["submit"]) && !empty($_POST["ad"]) && !empty($_POST["eposta"]) && !empty($_POST["konu"]) && !empty($_POST["mesaj"]))
{
	$yaz = fopen("girilen_degerler.txt","a+");
	fputs($yaz, "Adı : ". $_POST["ad"] ."\nE-Posta : ".$_POST["eposta"]."\nKonu : ".$_POST["konu"]."\nMesaj :".$_POST["mesaj"]);
	if(fclose($yaz)){
		echo "Başarıyla Kaydedildi.";
	}else{
		echo "Bir Hata Oluştu.";
	}

}else{
	echo "Boş Alan Bırakmayınız.";
}
?>
