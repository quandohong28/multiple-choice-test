<?php
include '../../model/pdo.php';
include '../../model/result.php';
header('Content-Type: application/json;charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Nhận dữ liệu POST
    $data = json_decode(file_get_contents("php://input"));

    // Xử lý dữ liệu POST
    if ($data) {
        $flag = false;
        foreach (getResultDetailByResultId($data->result_id) as $value) {
            if ($data->question_id == $value['question_id']) {
                $flag = true;
                break;
            } else {
                $flag = false;
                
            }
        }

        if ($flag) {
            updateResultDetail($data->result_id, $data->question_id, $data->answer_id);
        } else {
            addResultDetail($data->result_id, $data->question_id, $data->answer_id);
        }
        $response = [
            'message' => 'Dữ liệu đã được gửi thành công',
            'received_data' => $data
        ];
    } else {
        $response = [
            'message' => 'Dữ liệu gửi không thành công',
            'received_data' => $data
        ];
    }



    echo json_encode($response);
} else {
    header("HTTP/1.1 405 Method Not Allowed");
    echo json_encode(['error' => 'Phương thức không được chấp nhận']);
}
