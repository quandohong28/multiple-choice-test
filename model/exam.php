<?php
function getAllListExams()
{
    try {
        $sql = "SELECT * FROM list_exams;";
        return pdo_query($sql);
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

function insertExam($exam_code, $schedule_id, $category_id, $exam_type_id, $number_question)
{
    try {
        $sql = "INSERT INTO list_exams (exam_code, schedule_id, category_id, exam_type_id, number_question)
                VALUES ('$exam_code', '$schedule_id', '$category_id', '$exam_type_id', '$number_question');";
        return pdo_execute($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function getLatestExam()
{
    try {
        $sql = "SELECT * FROM list_exams ORDER BY id DESC LIMIT 1;";
        return pdo_query_one($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
