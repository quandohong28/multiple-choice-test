<?php
function getAllExams()
{
    try {
        $sql = "SELECT 
        e.id AS exam_id, e.exam_code AS exam_code, e.number_question AS number_question,
        s.name AS schedule_name, c.name AS category_name, c.image AS category_image, t.type AS type_name 
        FROM exams e
        LEFT JOIN schedules s ON s.id = e.schedule_id
        INNER JOIN categories c ON c.id = e.category_id
        INNER JOIN types t ON t.id = e.exam_type_id ORDER BY e.id;";
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


function getExamsByScheduleId($account_id, $schedule_id)
{
    try {
        $sql = "SELECT
        c.id as category_id,
        c.name as category_name,
        c.image,
        e.number_question,
        e.schedule_id,
        e.exam_time,
        e.exam_code
        FROM
        exams e
        INNER JOIN categories c ON e.category_id = c.id
        INNER JOIN schedules s ON s.id = e.schedule_id
        INNER JOIN schedule_detail sd ON sd.schedule_id = s.id 
        WHERE s.id = '$schedule_id' AND sd.account_id = '$account_id';";

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

function insertPracticeExam($schedule_id = null, $category_id, $exam_type_id, $number_easy_questions, $number_medium_questions, $number_hard_questions, $exam_time)
{
    $number_question = $number_easy_questions + $number_medium_questions + $number_hard_questions;
    try {
        $exam_code = generateRandomString();
        $sql = "INSERT INTO exams (schedule_id, exam_code, category_id, exam_type_id, number_question, exam_time)
                VALUES ('$schedule_id', '$exam_code', '$category_id', '$exam_type_id', '$number_question', '$exam_time');";
        pdo_execute($sql);
        $latestExamId = getLatestExam()['id'];
        $getRandomQuestionIdByLevelEasy = getRandomQuestionIdByLevel($category_id, 1, $number_easy_questions);
        $getRandomQuestionIdByLevelMedium = getRandomQuestionIdByLevel($category_id, 2, $number_easy_questions);
        $getRandomQuestionIdByLevelHard = getRandomQuestionIdByLevel($category_id, 3, $number_easy_questions);

        foreach ($getRandomQuestionIdByLevelEasy as $question => $value) {
            insertExamDetail($latestExamId, $value['id']);
        }
        foreach ($getRandomQuestionIdByLevelMedium as $question => $value) {
            insertExamDetail($latestExamId, $value['id']);
        }
        foreach ($getRandomQuestionIdByLevelHard as $question => $value) {
            insertExamDetail($latestExamId, $value['id']);
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
        $sql = "SELECT
        e.id AS id,
        q.content AS question_content
    FROM
        exam_details e
    INNER JOIN questions q ON
        q.id = e.question_id
    WHERE
        e.exam_id = '$exam_id';";
        return pdo_query($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function getExamDetailByExamId($exam_id)
{
    try {
        $sql = "SELECT 
        q.id,
        q.content,
        q.image,
        q.question_level_id
    FROM exam_details e
    INNER JOIN questions q ON q.id = e.question_id 
    WHERE exam_id = $exam_id;";
        return pdo_query($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function filterExams($filterByCategory, $filterByLetter, $search, $page)
{
    try {
        $sql = "SELECT 
        e.id AS exam_id, e.exam_code AS exam_code, e.number_question AS number_question,
        s.name AS schedule_name, c.name AS category_name, c.image AS category_image, t.type AS type_name 
        FROM exams e
        LEFT JOIN schedules s ON s.id = e.schedule_id
        INNER JOIN categories c ON c.id = e.category_id
        INNER JOIN types t ON t.id = e.exam_type_id ";

        if (!is_null($search) && $search != "") {
            $sql .= " WHERE exam_code LIKE '%$search%' ";
        }

        if ($filterByCategory != "id") {
            if ($filterByCategory == "exam_code") {
                $sql .= " ORDER BY exam_code";

                $sql .= ($filterByLetter != "a-z") ? " DESC" : " ASC";
            }
            if ($filterByCategory == "category") {
                $sql .= " ORDER BY category_name";

                $sql .= ($filterByLetter != "a-z") ? " DESC" : " ASC";
            }
            if ($filterByCategory == "types_exam") {
                $sql .= " ORDER BY type_name";

                $sql .= ($filterByLetter != "a-z") ? " DESC" : " ASC";
            }
        } else {
            $sql .= "ORDER BY e.id";
            $sql .= ($filterByLetter != "a-z") ? " DESC" : " ASC";
        }
        $sql .= "$page, 10;";
        return pdo_query($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function getExams($page)
{
    try {
        $sql = "SELECT 
        e.id AS exam_id, e.exam_code AS exam_code, e.number_question AS number_question,
        s.name AS schedule_name, c.name AS category_name, c.image AS category_image, t.type AS type_name 
        FROM exams e
        LEFT JOIN schedules s ON s.id = e.schedule_id
        INNER JOIN categories c ON c.id = e.category_id
        INNER JOIN types t ON t.id = e.exam_type_id ORDER BY e.id LIMIT $page, 10;";
        return pdo_query($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function getQuestionsByExamDetails($exam_id)
{
    try {
        $sql = "SELECT question_id FROM exam_details
        WHERE exam_id = '$exam_id';";
        return pdo_query($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function getRandomExam($schedule_id)
{
    try {
        $sql = "SELECT * FROM exams WHERE schedule_id = '$schedule_id' ORDER BY RAND() LIMIT 1;";
        return pdo_query_one($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
