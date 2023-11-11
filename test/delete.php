<?php
include '../model/pdo.php';
include '../model/question.php';

header('Content-Type: application/json;charset=utf-8');
if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    // Nhận dữ liệu POST
    $data = json_decode(file_get_contents("php://input"));

    try {
        deleteQuestionById($data->$id);
        echo json_encode(array('thành công' => 'Xoá dữ liệu thành công'));
    } catch (Exception $e) {
        echo json_decode($e->getMessage());
    }

    // Trả về dữ liệu JSON
} else {
    header("HTTP/1.1 405 Method Not Allowed");
    echo json_encode(array('error' => 'Phương thức không được chấp nhận'));
}
