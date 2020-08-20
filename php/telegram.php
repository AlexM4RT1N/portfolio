<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   // $sendToTelegram = fopen("https://api.telegram.org/bot1255735512:AAH4YmGBAMMeIVYwGpNlQGiHiTj1KbmKWvo/sendMessage?chat_id=-392300022&parse_mode=html&text=555","r");
// if (!empty($_POST['user_name']) && !empty($_POST['user_phone'])){
//   if (isset($_POST['user_name'])) {
//     if (!empty($_POST['user_name'])){
//   $name = strip_tags($_POST['user_name']);
//   $nameFieldset = "Имя: ";
//   }
// }
 
// if (isset($_POST['user_phone'])) {
//   if (!empty($_POST['user_phone'])){
//   $phone = strip_tags($_POST['user_phone']);
//   $phoneFieldset = "Телефон: ";
//   }
// }
// if (isset($_POST['user_email'])) {
//   if (!empty($_POST['user_email'])){
//   $theme = strip_tags($_POST['user_email']);
//   $themeFieldset = "Почта: ";
//   }
// }
// $token = "1255735512:AAH4YmGBAMMeIVYwGpNlQGiHiTj1KbmKWvo";
// $chat_id = "-392300022";
// $arr = array(
//   $nameFieldset => $name,
//   $phoneFieldset => $phone,
//   $themeFieldset => $theme
// );
// foreach($arr as $key => $value) {
//   $txt .= "<b>".$key."</b> ".$value."%0A";
// };

$token = "1255735512:AAH4YmGBAMMeIVYwGpNlQGiHiTj1KbmKWvo";
$chat_id = "-392300022";

$arr = array(
  "Имя: " => $_POST['user_name'],
  "Телефон: " => $_POST['user_phone'],
  "Почта: " => $_POST['user_email']
);

foreach($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
if ($sendToTelegram) {
  
  echo '<p class="success">Спасибо за отправку вашего сообщения!</p>';
    return true;
} else {
  echo '<p class="fail"><b>Ошибка. Сообщение не отправлено!</b></p>';
}
// } else {
//   echo '<p class="fail">Ошибка. Вы заполнили не все обязательные поля!</p>';
// }
// } else {
// header ("Location: /");
// }

// $token = "1255735512:AAH4YmGBAMMeIVYwGpNlQGiHiTj1KbmKWvo";
// $chat_id = "-392300022";

// $arr = array(
//   "Имя: " => $_POST['user_name'],
//   "Телефон: " => $_POST['user_phone'],
//   "Почта: " => $_POST['user_email']
// );

// foreach($arr as $key => $value) {
//     $txt .= "<b>".$key."</b> ".$value."%0A";
// };

// $url = "https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}";
// $proxy = "67.154.111.452:3128";

// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, $url);

// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
// curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

// curl_setopt($ch, CURLOPT_PROXY, $proxy);

// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_HEADER, 1);
// $curl_scraped_page = curl_exec($ch);
// curl_close($ch);

?>