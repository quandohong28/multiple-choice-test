<?php
include_once '../../model/pdo.php';
include_once '../../model/exam.php';
include_once '../../model/answer.php';
// Tạo một mảng dữ liệu mẫu
$exam_id = $_GET['exam_id'];
$questions = getExamDetailByExamId($exam_id);

// $data = [];

// foreach ($questions as $key => $value) {
//     $answers = getAnswersByQuestionId($value['question_id']);
//     // $data = array_merge($data, [$value['question_id'] => $answers]);
// }


// // Chuyển mảng thành dạng JSON
// $jsonData = json_encode($data);

// // Thiết lập tiêu đề HTTP để cho biết dữ liệu trả về là JSON
// header('Content-Type: application/json; charset=utf-8');

// // In dữ liệu JSON
// echo $jsonData; // return 
