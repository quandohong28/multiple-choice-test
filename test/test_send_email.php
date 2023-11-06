<?php
include './model/mailer.php';
// Sử dụng hàm gửi email
$to = 'quandhph44316@fpt.edu.vn';
$subject = 'Đăng ký thành công';
sendEmail($to, $subject, './views/mail/signup_successfully.php');
?>