<?php
function getAllExams()
{
    try {
        $sql = "SELECT 
        e.id AS exam_id, e.exam_code AS exam_code, e.number_question AS number_question,
        s.name AS schedule_name, c.name AS category_name, c.image AS category_image, t.type AS type_name 
        FROM exams e
        INNER JOIN schedules s ON s.id = e.schedule_id
        INNER JOIN categories c ON c.id = e.category_id
        INNER JOIN types t ON t.id = e.exam_type_id;";
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

function getQuestionsByExamId($exam_id)
{
    try {
        $sql = "SELECT e.id as id, q.content as question_content FROM exam_details e
        INNER JOIN questions q ON q.id = e.id 
        WHERE e.exam_id = '$exam_id';";
        return pdo_query($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}