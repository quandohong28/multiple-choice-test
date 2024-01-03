<?php
include './model/mailer.php';
// Sử dụng hàm gửi email
$from = "anhdo13072004@gmail.com";
$to = 'techquizhero@gmail.com';
$subject = 'Đăng ký thành công'; 
$body = "text";
$attachment = './test/test_send_email.php';
sendEmail($from, $to, $subject, $body, $attachment);
?>