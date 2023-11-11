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

function addCandidates($schedule_id, $account_id)
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

function insertSchedule($name, $time_start, $number_exam, $exam_time, $category_id, $number_easy_questions, $number_medium_questions, $number_hard_questions)
{
    try {
        $number_question = $number_easy_questions + $number_medium_questions + $number_hard_questions;
        addNewSchedule($name, $time_start, $number_exam, $exam_time);
        $schedule_id = getLatestSchedule()['id'];
        // addCandidates($schedule_id, $account_id);
        for ($i = 0; $i < $number_exam; $i++) {
            insertExam($schedule_id, $category_id, 2, $number_question);
            $exam_id = getLatestExam()['id'];
            for ($i = 0; $i < $number_easy_questions; $i++) {
                $question_id = getRandomQuestionIdByLevel($category_id, 1);
                insertExamDetail($exam_id, $question_id);
            }
            for ($i = 0; $i < $number_medium_questions; $i++) {
                $question_id = getRandomQuestionIdByLevel($category_id, 2);
                insertExamDetail($exam_id, $question_id);
            }
            for ($i = 0; $i < $number_hard_questions; $i++) {
                $question_id = getRandomQuestionIdByLevel($category_id, 3);
                insertExamDetail($exam_id, $question_id);
            }
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function deleteSchedule($id)
{
    try {
        $sql = "DELETE FROM schedules WHERE id = $id;";
        return pdo_execute($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
