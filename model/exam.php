<?php
function getAllExams()
{
    try {
        $sql = "SELECT * FROM exams;";
        return pdo_query($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function getExamById($id)
{
    try {
        $sql = "SELECT * FROM exams WHERE id = '$id';";
        return pdo_query_one($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function getExamsByScheduleId($schedule_id)
{
    try {
        $sql = "SELECT
        c.name as category_name,
        c.image,
        e.number_question
        FROM
        exams e
        INNER JOIN categories c ON e.category_id = c.id
        WHERE schedule_id = '$schedule_id';";
        return pdo_query_one($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function insertExamDetail($exam_id, $question_id)
{
    try {
        $sql = "INSERT INTO exam_detail (exam_id, question_id)
        VALUES ('$exam_id', '$question_id');";
        return pdo_execute($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function generateRandomString($length = 6)
{
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    try {
        $max = strlen($characters) - 1;
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $max)];
        }

        return $randomString;
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

function insertExam($schedule_id, $category_id, $exam_type_id, $number_question)
{
    try {
        $exam_code = generateRandomString();
        $sql = "INSERT INTO exams (exam_code, schedule_id, category_id, exam_type_id, number_question)
                VALUES ('$exam_code', '$schedule_id', '$category_id', '$exam_type_id', '$number_question');";
        return pdo_execute($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function getLatestExam()
{
    try {
        $sql = "SELECT * FROM exams ORDER BY id DESC LIMIT 1;";
        return pdo_query_one($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
