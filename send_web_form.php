<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');

use Bitrix\Main\Application;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require($_SERVER['DOCUMENT_ROOT'] . '/PHPMAILER/src/PHPMailer.php');
require($_SERVER['DOCUMENT_ROOT'] . '/PHPMAILER/src/SMTP.php');
require($_SERVER['DOCUMENT_ROOT'] . '/PHPMAILER/src/Exception.php');

//print_r($_POST);

function custom_mail($to, $subject, $message, $additionalHeaders = '')
{
    try {
        $mail = new PHPMailer;
        $mail->IsSMTP(); // enable SMTP
        $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
        $mail->SMTPAuth = true; // authentication enabled
        $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
        $mail->Host = "smtp.beget.com";
        $mail->Port = 465; // or 587
        $mail->IsHTML(true);
        $mail->Username = "btest@3dlookinside.ru";
        $mail->Password = "Eryjsn567!";
        $mail->SetFrom("btest@3dlookinside.ru");
        $mail->Subject = $subject;
        $mail->Body = $message;
        foreach ($to as $email_to) $mail->AddAddress(trim($email_to));
        if(!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            echo 200;
        }
    } catch (Exception $e) {
        echo $e->errorMessage();
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function validate_webform($fields){
    if( $fields['checkbox'] == 'on' ){
        $form_id = $fields['form_id'];
        $count_of_fields = $fields['count_of_fields'];

        $message = '';
        for($i = 0; $i < $count_of_fields; $i++){
            $message .= $fields['form_field_name_'.$form_id.'_'.$i].': '.$fields['form_field_'.$form_id.'_'.$i].'<br/>';
        }
        $emails = COption::GetOptionString("main", "all_bcc", "");

        return custom_mail(explode(',' , $emails),'Заполнена форма!',$message);
    }
    else return false;
}

validate_webform($_POST);