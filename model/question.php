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

function addQuestion($content, $image, $question_level_id, $question_type_id, $category_id)
{
    try {
        $sql = "INSERT INTO questions(content, image , question_level_id, question_type_id, category_id)
        VALUES('$content', '$image' , '$question_level_id', '$question_type_id', '$category_id');";
        pdo_execute($sql);
    } catch (Exception $e) {
        echo json_decode($e->getMessage());
    }
}

function deleteQuestionById($id)
{   
    try {
        $sql = "DELETE FROM questions WHERE id = $id;";
        pdo_execute($sql);
    } catch (Exception $e) {
        echo json_decode($e->getMessage());
    }
}
