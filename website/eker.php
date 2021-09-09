<?php
$ad = $_POST['ad'];
$kullaniciadi = $_POST['kullaniciadi'];
$sifre = $_POST['sifre'];
$posta = $_POST['posta'];
if(empty($ad)){
echo("<center><b>Adınızı Yazmadınız. Lütfen Geri Dönüp Doldurunuz.</b></center>");
}elseif(empty($kullaniciadi)){
echo("<center><b>Kullanıcı Adınızı Yazmadınız. Lütfen Geri Dönüp Doldurunuz.</b></center>");
}elseif(empty($sifre)){
echo("<center><b>Şifrenizi Yazmadınız. Lütfen Geri Dönüp Doldurunuz.</b></center>");
}elseif(empty($posta)){
echo("<center><b>E-Postanızı Yazmadınız. Lütfen Geri Dönüp Doldurunuz.</b></center>");
}else{
include("db_ayar.php");
$sql = "insert into uye (ad, kullaniciadi, sifre, email, hakkimda)
values ('$ad', '$kullaniciadi', '$sifre', '$posta', '$hakkimda')";
$kayit = mysql_query($sql);
}
if (isset ($kayit)){
echo "Üye Kaydınız Yapılmıştır";
}
else {
echo "Kayıt Başarısız sanane@banane.com adresinden iletişime geçin";
}
?>