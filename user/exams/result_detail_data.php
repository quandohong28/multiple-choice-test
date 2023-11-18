<?php
include '../../model/pdo.php';
include '../../model/result.php';
// Tạo một mảng dữ liệu mẫu
$result_id = $_GET['result_id'];
$question_id = $_GET['question_id'];
$data = getResultDetailByResultIdAndQuestionId($result_id, $question_id);


// Chuyển mảng thành dạng JSON
$jsonData = json_encode($data);

// Thiết lập tiêu đề HTTP để cho biết dữ liệu trả về là JSON
header('Content-Type: application/json; charset=utf-8');

// In dữ liệu JSON
echo $jsonData; // return 