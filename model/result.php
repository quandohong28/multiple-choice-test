<?php
function getAllResults()
{
    try {
        $sql = "SELECT 
        r.id AS id, e.id AS exam_code, e.exam_type_id AS exam_type, a.fullname AS fullname,
        r.points AS points, r.time_start AS time_start, r.exam_time AS exam_time FROM results r 
        INNER JOIN accounts a ON a.id = r.account_id 
        INNER JOIN exams e ON e.id = r.exam_id
        INNER JOIN types t ON t.id = e.exam_type_id;";
        return pdo_query($sql);
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

function getResultById($id)
{
    try {
        $sql = "SELECT * FROM results WHERE id = $id";
        return pdo_query_one($sql);
    } catch (Exception $e) {
        return $e->getMessage();
    }
}


function getResultsByUserId($account_id)
{
    try {
        $sql = "SELECT
        r.id as id,
        e.exam_code as exam_code,
        r.points as points,
        t.type as type,
        r.time_start as time_start,
        r.exam_time as exam_time
        FROM results r
        INNER JOIN exams e ON r.exam_id = e.id
        INNER JOIN types t ON e.exam_type_id = t.id
        WHERE r.account_id = '$account_id'";
        return pdo_query($sql);
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

function getResultsByExamId($exam_id)
{
    try {
        $sql = "SELECT * FROM results WHERE exam_id = $exam_id";
        return pdo_query($sql);
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

function getResultDetails($id)
{
    try {
        $sql = "SELECT 
        rd.answer_id AS selected_answer_id,
        rd.id AS result_detail_id, q.content AS question_content, 
        a.content as answer_content FROM result_details rd 
        INNER JOIN questions q ON q.id = rd.id
        INNER JOIN answers a ON a.id = rd.id
        WHERE rd.id = '$id';";
        return pdo_query($sql);
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

function getResultDetailByResultIdAndQuestionId($result_id, $question_id)
{
    try {
        $sql = "SELECT * FROM result_details WHERE result_id = $result_id AND question_id = $question_id";
        return pdo_query_one($sql);
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

function addResult($account_id, $exam_id)
{
    try {
        $sql = "INSERT INTO results(account_id, exam_id)
        VALUES ($account_id, $exam_id)";
        return pdo_execute($sql);
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

function updateResult($exam_time, $points, $exam_id)
{
    try {
        $sql = "UPDATE results SET exam_time = '$exam_time', status = 1, points = '$points' WHERE exam_id = '$exam_id'";
        return pdo_execute($sql);
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

function getLatestResult()
{
    try {
        $sql = "SELECT * FROM results ORDER BY id DESC LIMIT 1";
        return pdo_query_one($sql);
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

function getResultDetailByResultId($result_id)
{
    try {
        $sql = "SELECT
        rd.id AS result_detail_id,
        q.id AS question_id,
        q.content AS question_content,
        rd.answer_id AS selected_answer_id
    FROM
        result_details rd
    INNER JOIN questions q ON
        rd.question_id = q.id
    WHERE
        rd.result_id = $result_id";
        return pdo_query($sql);
    } catch (Exception $e) {
        return json_encode($e->getMessage());
    }
}

function addResultDetail($result_id, $question_id, $answer_id)
{
    try {
        $sql = "INSERT INTO result_details(result_id, question_id, answer_id)
        VALUES ($result_id, $question_id, $answer_id)";  
        pdo_execute($sql);
    } catch (Exception $e) {
        return json_encode($e->getMessage());
    }
}

function updateResultDetail($result_id, $question_id, $answer_id)
{
    try {
        $sql = "UPDATE result_details SET answer_id = $answer_id WHERE result_id = $result_id AND question_id = $question_id";
        pdo_execute($sql);
    } catch (Exception $e) {
        return json_encode($e->getMessage());
    }
}

function getDoingExamByAccountId($id)
{
    try {
        $sql = "SELECT 
                r.id AS result_id, r.status AS result_status, r.exam_time AS exam_time,
                e.id AS exam_id, e.exam_code AS exam_code, e.exam_type_id AS type
                FROM results r
                INNER JOIN exams e ON e.id = r.exam_id
                WHERE r.account_id = $id AND r.status = 0;";
        return pdo_query($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}