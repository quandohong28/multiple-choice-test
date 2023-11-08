<?php
include '../model/pdo.php';
include '../model/question.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Nhận dữ liệu POST
    $data = json_decode(file_get_contents("php://input"));


    // Xử lý dữ liệu POST
    $response = array(
        'message' => 'Dữ liệu đã được gửi thành công',
        'received_data' => $data
    );

    addQuestion($data->content, $data->image, $data->question_level_id, $data->question_type_id, $data->category_id);

    // Trả về dữ liệu JSON
    header('Content-Type: application/json;charset=utf-8');
    echo json_encode($response);
} else {
    header("HTTP/1.1 405 Method Not Allowed");
    echo json_encode(array('error' => 'Phương thức không được chấp nhận'));
}
