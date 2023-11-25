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

function reloadStatusResult($id)
{
    try {
        $sql1 = "SELECT
        r.id as result_id,
        r.time_start as time_start,
        e.exam_time as exam_time,
        r.status as result_status,
        r.exam_id as exam_id
    FROM
        results r
    INNER JOIN exams e ON
        r.exam_id = e.id
    INNER JOIN schedules s ON
        e.schedule_id = s.id 
    INNER JOIN accounts a ON
        r.account_id = a.id
    WHERE
        a.id = $id;
        ";

        $results = pdo_query($sql1);
        foreach ($results as $result) {
            extract($result);
            $exam_id = $exam_id;
            $result_id = $result_id;
            $result_status = $result_status;
            $time_start = $time_start;
            $exam_time = $exam_time;
            $time_end = date('Y-m-d H:i:s', strtotime($time_start) + ($exam_time * 60));
            $dt = new DateTime('now', new DateTimeZone('Asia/Ho_Chi_Minh'));
            $current_time = $dt->format('Y-m-d H:i:s');
            $exam_time_finish = sprintf('%02d:%02d:%02d', ($exam_time / 60), ($exam_time % 60), 0);
            if ($result_status == 0) {
                if ($current_time >= $time_end) {
                    $sql = "UPDATE results SET status = 1, exam_time = '$exam_time_finish' WHERE id = $result_id";
                    examResult($exam_id);
                    pdo_execute($sql);
                }
            }
        }
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function examResult($exam_id)
{
    try {
        $sql = "SELECT 
        rd.result_id,
        rd.question_id,
        rd.answer_id,
        a.id AS answer_correct
    FROM result_details rd
    JOIN questions q ON q.id = rd.question_id
    JOIN results r ON r.id = rd.result_id
    JOIN answers a ON a.question_id = q.id 
    WHERE r.exam_id = '$exam_id' AND a.is_correct = 1;";

        $result_details = pdo_query($sql);

        $points = 0;
        $maxPoints = 10 / count($result_details);
        foreach ($result_details as $result_detail) {
            extract($result_detail);
            if ($answer_id == $answer_correct) {
                $points += $maxPoints;
            }
        }
        $points = round($points, 1);
        $sql = "UPDATE results SET points = '$points' WHERE id = '$result_id'";
        pdo_execute($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}
