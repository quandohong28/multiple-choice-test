<?php
function filterQuestions($filterByCategory, $filterByLetter, $search, $page)
{
    try {
        $questions = getQuestions($page);
        $newQuestions = [];
        if ($filterByCategory == 'id') {
            if ($filterByLetter == 'a-z') {
                usort($questions, 'increaseId');
                $newQuestions = $questions;
            } else {
                usort($questions, 'decreaseId');
                $newQuestions = $questions;
            }
        } else {
            if ($filterByLetter == 'a-z') {
                usort($questions, 'increaseQuestion');
                $newQuestions = $questions;
            } else {
                usort($questions, 'decreaseQuestion');
                $newQuestions = $questions;
            }
        }

        if ($search != '') {
            $newQuestions = [];
            foreach ($questions as $question) {
                if (strpos(mb_strtolower($question['content'], 'UTF-8'), $search) !== false) {
                    array_push($newQuestions, $question);
                }
            }
        }
        return $newQuestions;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function filterAccount($filterByCategory, $filterByLetter, $search, $page)
{
    try {
        $accounts = getAccounts($page);
        $newAccounts = [];

        if ($filterByCategory == 'id') {
            if ($filterByLetter == 'a-z') {
                usort($accounts, 'increaseId');
                $newAccounts = $accounts;
            } else {
                usort($accounts, 'decreaseId');
                $newAccounts = $accounts;
            }
        } else if ($filterByCategory == 'username') {
            if ($filterByLetter == 'a-z') {
                usort($accounts, 'increaseUsername');
                $newAccounts = $accounts;
            } else {
                usort($accounts, 'decreaseUsername');
                $newAccounts = $accounts;
            }
        } else if ($filterByCategory == 'fullname') {
            if ($filterByLetter == 'a-z') {
                usort($accounts, 'increaseFullname');
                $newAccounts = $accounts;
            } else {
                usort($accounts, 'decreaseFullname');
                $newAccounts = $accounts;
            }
        } else {
            if ($filterByLetter == 'a-z') {
                usort($accounts, 'increaseRole');
                $newAccounts = $accounts;
            } else {
                usort($accounts, 'decreaseRole');
                $newAccounts = $accounts;
            }
        }

        if ($search != '') {
            $newAccounts = [];
            foreach ($accounts as $account) {
                if (strpos(mb_strtolower($account['username'], 'UTF-8'), $search) !== false) {
                    array_push($newAccounts, $account);
                }
            }
        }
        return $newAccounts;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function increaseId($value1, $value2)
{
    return $value1['id'] - $value2['id'];
}

function decreaseId($value1, $value2)
{
    return $value2['id'] - $value1['id'];
}

function increaseQuestion($value1, $value2)
{
    return strcmp($value1['content'], $value2['content']);
}

function decreaseQuestion($value1, $value2)
{
    return strcmp($value2['content'], $value1['content']);
}

function increaseUsername($value1, $value2)
{
    return strcmp($value1['username'], $value2['username']);
}

function decreaseUsername($value1, $value2)
{
    return strcmp($value2['username'], $value1['username']);
}

function increaseFullname($value1, $value2)
{
    return strcmp($value1['fullname'], $value2['fullname']);
}

function decreaseFullname($value1, $value2)
{
    return strcmp($value2['fullname'], $value1['fullname']);
}

function increaseRole($value1, $value2)
{
    return strcmp($value1['role'], $value2['role']);
}

function decreaseRole($value1, $value2)
{
    return strcmp($value2['role'], $value1['role']);
} 