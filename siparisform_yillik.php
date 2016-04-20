<?php

/*
Sürpriziniz Var Sipariş Formu
*/
$to =$_POST['eposta'] . ", ";
$to .='surprizinizvar@gmail.com';
$adsoyad=$_POST['adsoyad'];
$telefon=$_POST['telefon'];
$eposta=$_POST['eposta'];
$kargoadresi=$_POST['kargoadresi'];
$mesaj=$_POST['mesaj'];
$header='From:'.'surprizinizvar@gmail.com';
$subject="Surpriziniz Var! - 1 Yillik Surpriz Kutusu Siparisiniz";

$message = "Merhaba ".$adsoyad.",";
$message .= "\n\n";
$message .= "Tam 12 ay boyunca sürpriz kutu alma siparişinizi aldık. Teşekkür ederiz ! Aşağıdaki belirtilen banka hesabına 24 saat içerisinde 439.90 TL havale yaptıktan sonra siparişiniz kesinleşecektir. Lütfen havalenizde gönderen kişi ya da bilgilendirme kısmında kendi isminizin olmasına dikkat ediniz.";
$message .= "\n\n";
$message .= "BANKA BİLGİLERİ:";
$message .= "\n";
$message .= "----------------------------------";
$message .= "\n";
$message .= "Banka Adı: İş Bankası";
$message .= "\n";
$message .= "Kişi Adı: Nurgül Turan";
$message .= "\n";
$message .= "IBAN NUMARASI: TR33 0006 4000 0014 1930 0311 60";
$message .= "\n\n";
$message .= "SİPARİŞ DETAYLARINIZ:";
$message .= "\n";
$message .= "----------------------------------";
$message .= "\n";
$message .= "Ad Soyad: ".$adsoyad;
$message .= "\n";
$message .= "Telefon: ".$telefon;
$message .= "\n";
$message .= "E-posta: ".$eposta;
$message .= "\n";
$message .= "Kargo Adresi: ".$kargoadresi;
$message .= "\n";
$message .= "İletmek İstediğiniz Mesaj: ".$mesaj;
$message .= "\n";
$message .= "----------------------------------";

$message.="\n\n"."SürprizinizVar.com – Hayat sürprizlerle dolu !";

mail($to,$subject,$message,$header);
