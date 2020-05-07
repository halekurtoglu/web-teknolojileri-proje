<?php
$kullanici="G191210067";
$sifre="12345";
$mail="halenur.kurtoglu@ogr.sakarya.edu.tr";
$kadi=@$_POST["kullaniciAdi"];
$password=@$_POST["sifre"];

if($kadi==$mail && $sifre==$password){
    echo "HOŞGELDİNİZ"." ".$kullanici;
    
}
else{
    echo "Kullanıcı adı ya da şifre yanlış.";
}

if($kadi!=$mail)
{
    echo "Böyle bir e-mail bulunamadı.";
}

?>