<?php
$adi=@$_POST["ad"];
$soyadi=@$_POST["soyad"];
$dogumgünü=@$_POST["dogumgünü"];
$cinsiyet=@$_POST["gender"];
$egitimi=@$_POST["egitim"];
$dili=@$_POST["dil"];
$telefonu=@$_POST["phone"];
$maili=@$_POST["email"];
$ulkesi=@$_POST["ülke"];
$sehri=@$_POST["Şehirler"];
$adresi=@$_POST["adres"];

echo "Ad:$adi"; 
echo "<br/><br/>"; 
echo "Soyadı:$soyadi";
echo "<br/><br/>";
echo"Doğum günü:$dogumgünü"; 
echo "<br/><br/>";
echo"Cinsiyet:$cinsiyet";
echo "<br/><br/>";
echo"Eğitim:$egitimi";
echo "<br/><br/>";
echo"Dil:$dili";
echo "<br/><br/>";
echo"Telefon:$telefonu";
echo "<br/><br/>";
echo"Mail:$maili";
echo "<br/><br/>";
echo"Ülke:$ulkesi";
echo "<br/><br/>";
echo"Şehir:$sehri";
echo "<br/><br/>";
echo"Adres:$adresi";


?>