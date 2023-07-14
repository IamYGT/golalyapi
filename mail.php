<?
require("class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();                                   // send via SMTP
$mail->Host     = "mail.mustafamertyurek.com"; // SMTP servers
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "memsidea@mustafamertyurek.com";  // SMTP username
$mail->Password = "EmpeRiaN22"; // SMTP password
$mail->Port     = 587; 
$mail->CharSet = "utf-8"; 
$mail->From     = "memsidea@mustafamertyurek.com"; // smtp kullanıcı adınız ile aynı olmalı
$mail->Fromname = "Memsidea";
$mail->AddAddress("merhaba@memsidea.com","Memsidea");$mail->AddAddress("mertyurek@memsidea.com","Memsidea"); 
$mail->Subject  =  "Memsidea İletişim Formundan Gelen Mesaj";
$mail->Body     =  implode("    ",$_POST);
$mail->IsHTML(true);
if(!$mail->Send())
{
   echo "Mesaj Gönderilemedi <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Mesaj Gönderildi";


?>
