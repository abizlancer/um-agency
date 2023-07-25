<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$token = "5398087643:AAGpM8nER1tbOOApSF8PeBiqYlQDX1rzq0Q";
$chat_id = "-970674257";
$arr = array(
    'Имя: ' => $name,
    'Телефон: ' => $phone,
    'Cообщение: ' => $message,
);


foreach($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ".$value."\n";
};

$txt = rawurlencode($txt);

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
    header('Location: index.html');
} else {
    echo "Error";
}
?>