<?php

use local\templates\superceni\PHPMAILER\PHPMailer;
use local\templates\superceni\PHPMAILER\Exception;

print_r($_POST);

function custom_mail($to, $subject, $message, $additionalHeaders = '')
{
    require_once($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');
    $mail = new PHPMailer();

    /* Решение проблем для старых версий Битрикса, когда письма приходят с закодированным заголовком
      $subject = str_replace('=?UTF-8?B?', '', $subject);
      $subject = str_replace('?=', '', $subject);
      $subject = base64_decode($subject);
    //*/
    try {
        $mail->IsSMTP();
        $mail->SMTPAuth      = true;
        $mail->SMTPKeepAlive = true;
        $mail->SMTPDebug = 1;
        $mail->SMTPSecure = 'ssl';
        $mail->Host = 'smtp.yandex.ru';
        $mail->Port = 465; // 587
        $mail->Username = 'no@oddler.ru';
        $mail->Password = 'Password';
        $mail->CharSet =  'UTF-8'; // 'Windows-1251'

        $mail->SetFrom($mail->Username);
        $mail->AddAddress(trim($to));
        $mail->Subject = $subject;
        $mail->MsgHTML($message);

        $bRet = $mail->Send();

        $mail->ClearAddresses();
        $mail->ClearAttachments();

        return $bRet;

    } catch (Exception $e) {
        die('Message could not be sent. Mailer Error: '. $mail->ErrorInfo);
    }
}