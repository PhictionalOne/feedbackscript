<?php
session_start('phi');
require_once "settings.php";
// define variables and set to empty values
$name = $text = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_SESSION['auth']) {
  if (empty($_POST["name"]) || empty($_POST["text"])) {
    echo '<html><body style="font-family:sans-serif;">Keine Daten angegeben!</body></html>';
  } 
  else {
    $name = sanitize($_POST['name']);
    $text = sanitize2($_POST['text']);
    $datum = date("Y-m-d");
    $uhrzeit = date("H:i");
    $header = 'From: ' . "$sender_mail\r\n" .
    'X-Mailer: PHP/' . phpversion();
    mail ($recipient_mail , $mail_subject , "Feedback von: " . $name . "\n\n\n" . $text, $header);
    echo '<html><body style="font-family:sans-serif;">Feedback gesendet</body></html>';
    $_SESSION['auth'] = false;
  }
}
else {
  echo '<html><body style="font-family:sans-serif;">Keine Daten vom Formular erhalten!</body></html>';
}

function sanitize($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function sanitize2($data) {
  $data = trim($data);
  $data = stripslashes($data);
  return $data;
}
?>                                                     
