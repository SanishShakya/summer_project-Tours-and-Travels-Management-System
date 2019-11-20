<?php
require_once "../object.php"; 
$booking->set('bookingId',$_GET['bookingId']); 
 $books = $booking->selectDataByIdd();
 

    $mailto = $books[0]->customerEmail;
    echo $mailSub = "Booking Cancelled";
    echo $mailMsg = 'Dear '.$books[0]->customerName .' ,Your Booking for '.$books[0]->packageName.' package has been cancelled for the the date '.$books[0]->date.'Please inform the management  <br><br><br><br>Regards, Sunshine Team';
     
   use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* Exception class. */
require 'src\Exception.php';

/* The main PHPMailer class. */
require 'src\PHPMailer.php';

/* SMTP class, needed if you want to use SMTP. */
require 'src\SMTP.php';

$email = new PHPMailer(TRUE);
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'tls';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 587; // or 467
   $mail ->IsHTML(true);
   $mail ->Username = "trvlsunshine@gmail.com";
   $mail ->Password = "fknuujcufvhahnpx";
   $mail ->SetFrom("trvlsushine@gmail.com","Sunshine Asian Int'l Travels and Tours");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       header("location:../booking_manage.php?confirm=0");
   }
   else
   {
       $booking->remove();
       header("location:../booking_manage.php?confirm=0");
   }





   

