<?php
function getAllResults()
{
    try {
        $sql = "SELECT * FROM results";
        return pdo_execute($sql);
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
        $sql = "SELECT * FROM results WHERE account_id = $account_id";
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

function getResultDetails($result_id)
{
    try {
        $sql = "SELECT * FROM result_details WHERE result_id = $result_id";
        return pdo_query($sql);
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
