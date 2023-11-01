<?php
include './model/mailer.php';
// Sử dụng hàm gửi email
$to = 'thanhlvph39393@fpt.edu.vn';
$subject = 'Email thử nghiệm';
$message = 'Đây là email được gửi từ PhpMailer';
sendEmail($to, $subject, '../model/contents.html');
?>