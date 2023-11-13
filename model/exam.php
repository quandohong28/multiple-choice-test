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
        $sql = "INSERT INTO exam_details (exam_id, question_id)
        VALUES ('$exam_id', '$question_id');";
        pdo_execute($sql);
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

function insertExam($schedule_id, $category_id, $exam_type_id, $number_easy_questions, $number_medium_questions, $number_hard_questions, $exam_time)
{
    $number_question = $number_easy_questions + $number_medium_questions + $number_hard_questions;
    try {
        $exam_code = generateRandomString();
        $sql = "INSERT INTO exams (exam_code, schedule_id, category_id, exam_type_id, number_question, exam_time)
                VALUES ('$exam_code', '$schedule_id', '$category_id', '$exam_type_id', '$number_question', '$exam_time');";
        return pdo_execute($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function insertPracticeExam($category_id, $exam_type_id, $number_easy_questions, $number_medium_questions, $number_hard_questions, $exam_time)
{
    $number_question = $number_easy_questions + $number_medium_questions + $number_hard_questions;
    try {
        $exam_code = generateRandomString();
        $sql = "INSERT INTO exams (exam_code, category_id, exam_type_id, number_question, exam_time)
                VALUES ('$exam_code', '$category_id', '$exam_type_id', '$number_question', '$exam_time');";
        pdo_execute($sql);
        $latestExamId = getLatestExam()['id'];
        for ($i = 0; $i < $number_easy_questions; $i++) {
            insertExamDetail($latestExamId, getRandomQuestionIdByLevel($category_id, 1));
        }
        for ($i = 0; $i < $number_medium_questions; $i++) {
            insertExamDetail($latestExamId, getRandomQuestionIdByLevel($category_id, 2));
        }
        for ($i = 0; $i < $number_hard_questions; $i++) {
            insertExamDetail($latestExamId, getRandomQuestionIdByLevel($category_id, 3));
        }
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

function getExamDetailByExamId($exam_id)
{
    try {
        $sql = "SELECT
        
        FROM exam_details
        INNER JOIN questions ON questions.id = exam_details.question_id
        INNER JOIN answers ON questions.id = answers.question_id
        WHERE exam_id = '$exam_id';";
        return pdo_query($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
