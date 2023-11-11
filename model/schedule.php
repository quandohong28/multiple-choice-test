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

function getScheduleByUserId($user_id)
{
    try {
        $sql = "SELECT * FROM
        schedules
        INNER JOIN schedule_detail ON schedules.id = schedule_detail.schedule_id
        WHERE
        user_id = $user_id;";
        return pdo_query_one($sql);
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

function insertSchedule($name, $time_start, $time_exp, $exam_time, $number_exam, $category_id, $number_question)
{
    try {
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
