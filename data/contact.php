<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../vendor/autoload.php';

$post = $_POST;

/* CLEAN DATA */
if(isset($post) && count($post) > 0){

  $error = checkPost($post);

  if($error['status'] === false) {

    function mb_ucfirst($string) {
      return mb_strtoupper(mb_substr($string, 0, 1)).mb_strtolower(mb_substr($string, 1));
    }

    function cleanData($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    function cleanDataCap($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      $data = mb_ucfirst($data);
      return $data;
    }

    function cleanDataLower($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = strtolower($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    function cleanDataUpper($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = strtoupper($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    date_default_timezone_set('Europe/Paris');
    $cleanData['fname'] = cleanDataCap($post['fname']);
    $cleanData['lname'] = cleanDataCap($post['lname']);
    $cleanData['email'] = cleanDataLower($post['email']);
    $cleanData['phone'] = cleanData($post['phone']);
    $cleanData['message'] = nl2br(cleanData($post['message']));
    $cleanData['time'] = date('Y-m-d H:i:s');
    sendForm($cleanData);
  }
  else {
    echo implode(" ",$error['info']);
  }
}
else {
  echo 'no_post';
}

/* CHECK ERRORS */
function checkPost($post){

  $error['status'] = false;

  if(!isset($post['fname']) || empty(trim($post['fname'])) || strlen($post['fname']) > 255){
    $error['status'] = true;
    $error['info'][] = "fname";
  }

  if(!isset($post['lname']) || empty(trim($post['lname'])) || strlen($post['lname']) > 255){
    $error['status'] = true;
    $error['info'][] = "lname";
  }

  if(!isset($post['email']) || empty(trim($post['email'])) || strlen($post['email']) > 255 || strpos($post['email'] ,'@') === false){
    $error['status'] = true;
    $error['info'][] = "email";
  }

  if(!isset($post['phone']) || empty(trim($post['phone'])) || strlen($post['phone']) > 255){
    $error['status'] = true;
    $error['info'][] = "phone";
  }

  if(!isset($post['message']) || empty(trim($post['message'])) || strlen($post['message']) > 1000){
    $error['status'] = true;
    $error['info'][] = "message";
  }

  /* CAPTCHA */
  $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
  $recaptcha_secret = '__SECRETKEY__';
  $recaptcha_response = $post['recaptcha_response'];
  $ip_visiteur = $_SERVER['REMOTE_ADDR'];
  $recaptcha = file_get_contents($recaptcha_url.'?secret='.$recaptcha_secret.'&response='.$recaptcha_response.'&remoteip='.$ip_visiteur);
  $recaptcha = json_decode($recaptcha);
  if ($recaptcha->score < 0.5) {
    $error['status'] = true;
    $error['info'][] = "You are a spammer !";
  }
  return $error;
}

/* SEND FORM */
function sendForm($cleanData){
  $mail = new PHPMailer(true);

  try {
    $emailing = '
    Prénom : ' . $cleanData['fname'] .'<br><br>
    Nom : ' . $cleanData['lname'] . '<br><br>
    Email : ' . $cleanData['email'] . '<br><br>
    Téléphone :' . $cleanData['phone'] . '<br><br><br><br>
    Message : <p>
    '. $cleanData['message'] .'</p><br><br>
    ';

    $mail->CharSet = 'UTF-8';
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'ssl0.ovh.net';
    $mail->SMTPAuth = true;
    $mail->Username = '__YOUREMAIL__';
    $mail->Password = '__YOURPASSWORD__';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('__YOUREMAIL__', '__YOURNAME__');

    $mail->addAddress('__CLIENTEMAIL__','__CLIENTNAME_');
    $mail->addReplyTo($cleanData['email'], $cleanData['fname'].' '.$cleanData['lname']);

    $mail->isHTML(true);
    $mail->Subject = 'Nouveau message';
    $mail->Body = $emailing;
    $mail->AltBody = 'Nouveau message';

    $mail->send();
  }
  catch (Exception $e) {
    exit();
  }
}