<?php

function getAllAnswer()
{
    try {
        $sql = "SELECT * FROM answers";
        return pdo_query($sql);
    } catch (\Exception $e) {
        throw $e;
    }
}

function getAnswersByQuestionId($question_id)
{
    try {
        $sql = "SELECT * FROM answers WHERE question_id = '$question_id'";
        return pdo_query($sql);
    } catch (\Exception $e) {
        throw $e;
    }
}

function addAnswer($content, $question_id, $is_correct)
{
    try {
        $sql = "INSERT INTO answers(content, question_id, is_correct)
        VALUES('$content', $question_id, $is_correct);"; 
        pdo_execute($sql);
    } catch (Exception $e) {
        echo ($e->getMessage());
    }
}
