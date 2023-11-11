<?php
include 'exam.php';

function getAllSchedules()
{
    try {
        $sql = "SELECT * FROM schedules;";
        return pdo_query($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function getScheduleById($id)
{
    try {
        $sql = "SELECT * FROM
        schedules
        WHERE
        id = $id;";
        return pdo_query_one($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function getSchedulesByName($name)
{
    try {
        $sql = "SELECT * FROM
        schedules
        WHERE
        name = $name;";
        return pdo_query_one($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function getSchedulesByUserId($user_id)
{
    try {
        $sql = "SELECT * FROM
        schedules
        WHERE
        account_id = $user_id;";
        return pdo_query($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function insertCandidates($test_schedule_id, $exam_detail_id, $account_id)
{
    try {
        $sql = "INSERT INTO candidates(test_schedule_id, exam_detail_id, account_id)
        VALUES ('$test_schedule_id', '$exam_detail_id', '$account_id');";
        return pdo_execute($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function getLatestSchedule()
{
    try {
        $sql = "SELECT * FROM schedules ORDER BY id DESC LIMIT 1;";
        return pdo_query_one($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

// function insertSchedules($name, $time_start, $time_exp, $exam_time, $number_exam, $category_id, $number_question)
// {
//     try {
//         $sql = "INSERT INTO schedules(name, time_start, time_exp, exam_time, number_exam)
//         VALUES ('$name', '$time_start', '$time_exp', '$exam_time', '$number_exam');";
//         pdo_execute($sql);

//         // Tạo một bài thi mới - bảng danh sách bài thi
//         for ($exam_code = 1; $exam_code <= $number_exam; $exam_code++) {
//             $exam_type_id = 2;
//             insertExam($exam_code, getLatestSchedule()['id'], $category_id, $exam_type_id, $number_question);
//         }
//     } catch (Exception $e) {
//         echo $e->getMessage();
//     }
// }

function deleteSchedules($id)
{
    try {
        $sql = "DELETE FROM schedules WHERE id = $id;";
        return pdo_execute($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
