<?php
// "https://api.telegram.org/bot1842087135:AAHMMg4_NNDqWBRij7i-M05L_45ynKH7LU4/getUpdates",

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$token = "1809560411:AAHIhCBN0EpWxC6l32W4cw1PGfPStpr9i-4";
$chat_id = "-571582658";
$arr = array(
'Buyurtmachi ismi: ' => $name,
'Buyurtma stoli: ' => $phone,
'Buyurtma taomlar' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot"{$token}/sendMessage?chat_id={$chat_id}
&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: Thank-you.html');
} else {
  echo "Error";
}
?>