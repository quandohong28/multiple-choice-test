<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require './lib/PhpMailer/vendor/autoload.php'; // Đảm bảo đường dẫn đúng

function sendEmail($to, $subject, $body)
{
    $mail = new PHPMailer(true);

    try {
        // Cài đặt giao diện gửi email
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Thay bằng máy chủ SMTP thật
        $mail->SMTPAuth = true;
        $mail->Username = 'techquizhero@gmail.com'; // Thay bằng tên người dùng thật
        $mail->Password = 'voml gblk frzd juxk'; // Thay bằng mật khẩu thật
        $mail->SMTPSecure = 'tls'; // Sử dụng TLS
        $mail->Port = 587; // Cổng SMTP

        // Cài đặt thông tin người gửi và người nhận
        $mail->setFrom('techquizhero@gmail.com', 'Tech Quiz Hero');
        $mail->addAddress($to);

        // Cài đặt tiêu đề và nội dung email
        // $mail->isHTML(true);
        // $mail->Subject = $subject;
        // $mail->msgHTML(file_get_contents($htmlfile), __DIR__);

        // Nếu muốn dùng file php thì dùng đoạn code này
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = file_get_contents($body);

        // Nếu muốn gửi 1 file đính kèm thì dùng đoạn code này
        // $mail->addAttachment('attachment.pdf');


        // Cài đặt ký tự tiếng Việt
        $mail->CharSet = 'UTF-8';
        $mail->Encoding = 'base64'; // Hoặc 'quoted-printable'


        // Gửi email
        $mail->send();
        echo 'Gửi email thành công';
    } catch (Exception $e) {
        echo 'Gửi email thất bại. Lỗi: ', $mail->ErrorInfo;
    }
}
