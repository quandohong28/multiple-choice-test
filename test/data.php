<?php
include '../model/pdo.php';
include '../model/question.php';
// Tạo một mảng dữ liệu mẫu
$id = $_GET['id'];
$data = getQuestionById($id);

// $data = [
//     'name' => 'Nguyễn Văn A',
//     'age' => 20,
//     'address' => 'Hà Nội',
//     'phone' => '0123456789'
// ];

// Chuyển mảng thành dạng JSON
$jsonData = json_encode($data);

// Thiết lập tiêu đề HTTP để cho biết dữ liệu trả về là JSON
header('Content-Type: application/json; charset=utf-8');

// In dữ liệu JSON
echo $jsonData; // return 
