<?php
function getQuestionLevels()
{
    try {
        $sql = "SELECT * FROM question_levels;";
        return pdo_query($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function getRandQuestion($category_id)
{
    try {
        $sql = "SELECT id FROM questions
        WHERE
        category_id = $category_id ORDER BY RAND() LIMIT 1;";
        return pdo_query_one($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function getQuestionById($id)
{
    try {
        $sql = "SELECT * FROM questions WHERE id = $id;";
        return pdo_query_one($sql);
    } catch (\Exception $e) {
        return $e->getMessage();
    }
}

function getAllQuestions()
{
    try {
        $sql = "SELECT * FROM questions ORDER BY id DESC LIMIT 10;";
        return pdo_query($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function insertQuestion($content, $image, $question_level_id, $question_type_id, $category_id)
{
    try {
        $sql = "INSERT INTO questions(content, image , question_level_id, question_type_id, category_id)
        VALUES('$content', '$image' , $question_level_id, $question_type_id, $category_id);";
        pdo_execute($sql);
    } catch (Exception $e) {
        echo json_decode($e->getMessage());
    }
}

function editQuestion ($id, $content, $image, $question_level_id, $question_type_id, $category_id)
{
    try {
        $sql = "UPDATE questions SET content = '$content', image = '$image', question_level_id = $question_level_id, question_type_id = $question_type_id, category_id = $category_id WHERE id = $id;";
        pdo_execute($sql);
        // var_dump($sql);
        // die();
    } catch (Exception $e) {
        echo json_decode($e->getMessage());
    }
}

function getTypeQuestions()
{
    try {
        $sql = "SELECT * FROM types;";
        return pdo_query($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function deleteQuestion($id)
{
    try {
        $sql = "DELETE FROM questions WHERE id = $id";
        // var_dump($sql);
        // die();
        pdo_execute($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function getLatestQuestion()
{
    try {
        $sql = "SELECT * FROM questions ORDER BY id DESC LIMIT 1;";
        return pdo_query_one($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function getRandomQuestionIdByLevel($category_id, $question_level_id, $number_question)
{
    try {
        $sql = "SELECT id FROM questions
        WHERE
        category_id = '$category_id' AND question_level_id = '$question_level_id' ORDER BY RAND() LIMIT $number_question;";
        return pdo_query_one($sql)['id'];
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

