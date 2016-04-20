<?php

/*
Sürpriziniz Var İletişim Formu
*/

$to='surprizinizvar@gmail.com';
$adsoyad=$_POST['adsoyad'];
$telefon=$_POST['telefon'];
$eposta=$_POST['eposta'];
$mesaj=$_POST['mesaj'];
$header='From:'.'surprizinizvar@gmail.com';
$subject="Surpriziniz Var! - Iletisim Formu";

// prepare email body text
$message = "\n";
$message .= "Ad Soyad: ".$adsoyad;
$message .= "\n";
$message .= "Telefon: ".$telefon;
$message .= "\n";
$message .= "E-posta: ".$eposta;
$message .= "\n";
$message .= "Müşteri Mesajı: ".$mesaj;
$message .= "\n";

$message.="\n\n".'--Bu mesaj Sürpriziniz Var! tarafından gönderilmiştir.';

mail($to,$subject,$message,$header);
