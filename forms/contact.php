<?php
	require_once('phpmailer/PHPMailerAutoload.php');

  $contact = new PHPMailer;
  $contact->ajax = true;
  $contact->isSMTP();
  $contact->SMTPAuth = true;
  $contact->SMTPSecure = 'ssl';
  $contact->Host = 'smtp.gmail.com';
  $contact->Port = '465';
  $contact->isHTML();
  $contact->Username = 'au17.tech@gmail.com';
  $contact->Password ='phpmailer';
  $contact->SetFrom = $_POST['name'];
  $contact->Subject = $_POST['subject'];
  $nm = $_POST['name'];
  $em = $_POST['email'];
  $ms = $_POST['message'];
  $mil = "Name - ".$nm." E-mail - ".$em." Message - ".$ms." ";
  $contact->Body = $mil;
  $contact->AddAddress('au17.tech@gmail.com');

  

  echo $contact->Send();
?>
