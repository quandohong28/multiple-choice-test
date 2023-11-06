<?php
include 'exam.php';
include 'pdo.php';

function getAllSchedules()
{
    try {
        $sql = "SELECT * FROM schedules;";
        return pdo_query($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function getSchedulesById($id)
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

function insertSchedules($name, $time_start, $time_exp, $exam_time, $number_exam, $number_account, $category_id, $number_question, $exam_detail_id, $account_id)
{
    try {
        $sql = "INSERT INTO schedules(name, time, date, place, description, image)
        VALUES ('$name', '$time_start', '$time_exp', '$exam_time', '$number_exam', '$number_account');";
        pdo_execute($sql);

        // Tạo một bài thi mới - bảng danh sách bài thi
        for ($exam_code = 1; $exam_code <= $number_exam; $exam_code++) {
            $exam_type_id = 2;
            insertExam($exam_code, getLatestSchedule()['id'], $category_id, $exam_type_id, $number_question);
        }

        // Tạo một bài thi chi tiết - bảng chi tiết bài thi
        for ($i = 1; $i <= $number_question; $i++) {
            $question_id = getRandQuestion($category_id)['id'];
            insertExamDetail(getLatestExam()['id'], $question_id);
        }


        // Tạo một thí sinh mới - bảng thí sinh
        for ($i = 1; $i <= $number_account; $i++) {
            insertCandidates(getLatestSchedule()['id'], $exam_detail_id, $account_id);
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function deleteSchedules($id)
{
    try {
        $sql = "DELETE FROM schedules WHERE id = $id;";
        return pdo_execute($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
