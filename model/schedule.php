<?php
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

function getScheduleByUserId($account_id)
{
    try {
        $sql = "SELECT * FROM
        schedules
        INNER JOIN schedule_detail ON schedules.id = schedule_detail.schedule_id
        WHERE
        account_id = $account_id;";
        return pdo_query($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function addCandidates($schedule_id, $account_id, $username)
{
    try {
        $sql = "INSERT INTO schedule_detail (schedule_id, account_id)
        VALUES ('$schedule_id', '$account_id');";
        return pdo_execute($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function addNewSchedule($name, $time_start, $number_exam, $exam_time)
{
    try {
        $sql = "INSERT INTO schedules (name, time_start, number_exam, exam_time)
                VALUES ('$name', '$time_start', '$number_exam', '$exam_time');";
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

function addSchedule($name, $time_start, $number_exam, $exam_time, $category_id, $number_easy_questions, $number_medium_questions, $number_hard_questions)
{
    try {
        $number_question = $number_easy_questions + $number_medium_questions + $number_hard_questions;
        addNewSchedule($name, $time_start, $number_exam, $exam_time);
        $schedule_id = getLatestSchedule()['id'];
        $addScheduleDetail = "INSERT INTO schedule_detail (schedule_id, category_id, number_question);";
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function deleteSchedule($id)
{
    try {
        $sql = "DELETE FROM schedules WHERE id = $id;";
        pdo_execute($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function getSchedules($page)
{
    try {
        $sql = "SELECT * FROM schedules LIMIT $page, 10;";
        return pdo_query($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
