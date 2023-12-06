<?php
function filterQuestions($filterByCategory, $filterByLetter, $search, $questions)
{
    try {
        $newQuestions = [];
        if ($search != '') {
            foreach ($questions as $question) {
                if (strpos(mb_strtolower($question['content'], 'UTF-8'), $search) !== false) {
                    array_push($newQuestions, $question);
                }
            }
        } else {
            if ($filterByCategory == 'id') {
                if ($filterByLetter == 'a-z') {
                    array_multisort(array_column($questions, 'id'), SORT_ASC, $questions);
                } else {
                    array_multisort(array_column($questions, 'id'), SORT_DESC, $questions);
                }
                $newQuestions = $questions;
            } else {
                if ($filterByLetter == 'a-z') {
                    array_multisort(array_column($questions, 'content'), SORT_ASC, $questions);
                } else {
                    array_multisort(array_column($questions, 'content'), SORT_DESC, $questions);
                }
                $newQuestions = $questions;
            }
        }
        return $newQuestions;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function filterAccounts($filterByCategory, $filterByLetter, $search, $accounts)
{
    try {
        $newAccounts = [];
        if ($search != '') {
            foreach ($accounts as $account) {
                if (strpos(mb_strtolower($account['username'], 'UTF-8'), $search) !== false) {
                    array_push($newAccounts, $account);
                }
            }
        } else {
            if ($filterByCategory == 'id') {
                if ($filterByLetter == 'a-z') {
                    array_multisort(array_column($accounts, 'id'), SORT_ASC, $accounts);
                } else {
                    array_multisort(array_column($accounts, 'id'), SORT_DESC, $accounts);
                }
                $newAccounts = $accounts;
            } else if ($filterByLetter == 'username') {
                if ($filterByLetter == 'a-z') {
                    array_multisort(array_column($accounts, 'username'), SORT_DESC, $accounts);
                } else {
                    array_multisort(array_column($accounts, 'username'), SORT_ASC, $accounts);
                }
                $newAccounts = $accounts;
            } else if ($filterByLetter == 'fullname') {
                if ($filterByLetter == 'a-z') {
                    array_multisort(array_column($accounts, 'fullname'), SORT_ASC, $accounts);
                } else {
                    array_multisort(array_column($accounts, 'fullname'), SORT_DESC, $accounts);
                }
            } else {
                if ($filterByLetter == 'a-z') {
                    array_multisort(array_column($accounts, 'role'), SORT_ASC, $accounts);
                } else {
                    array_multisort(array_column($accounts, 'role'), SORT_DESC, $accounts);
                }
                $newAccounts = $accounts;
            }
        }
        return $newAccounts;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function filterCategories($filterByCategory, $filterByLetter, $search, $catergories)
{
    try {
        $newCategories = [];
        if ($search != '') {
            foreach ($catergories as $catergory) {
                if (strpos(mb_strtolower($catergory['username'], 'UTF-8'), $search) !== false) {
                    array_push($newCategories, $catergory);
                }
            }
        } else {
            if ($filterByCategory == 'id') {
                if ($filterByLetter == 'a-z') {
                    array_multisort(array_column($catergories, 'id'), SORT_ASC, $catergories);
                } else {
                    array_multisort(array_column($catergories, 'id'), SORT_DESC, $catergories);
                }
                $newCategories = $catergories;
            } else {
                if ($filterByLetter == 'a-z') {
                    array_multisort(array_column($catergories, 'name'), SORT_ASC, $catergories);
                } else {
                    array_multisort(array_column($catergories, 'name'), SORT_DESC, $catergories);
                }
                $newCategories = $catergories;
            }
        }
        return $newCategories;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function filterSchedules($filterByCategory, $filterByLetter, $search, $schedules)
{
    try {
        echo $filterByCategory;
        echo "<br>";
        echo $filterByLetter;
        die;
        $newSchedules = [];
        if ($search != '') {
            foreach ($schedules as $schedule) {
                if (strpos(mb_strtolower($schedule['name_schedules'], 'UTF-8'), $search) !== false) {
                    array_push($newSchedules, $schedule);
                }
            }
        } else {
            if ($filterByCategory == 'id') {
                if ($filterByLetter == 'a-z') {
                    array_multisort(array_column($schedules, 'id'), SORT_ASC, $schedules);
                } else {
                    array_multisort(array_column($schedules, 'id'), SORT_DESC, $schedules);
                }
                $newSchedules = $schedules;
            } else if ($filterByLetter == 'name_schedules') {
                if ($filterByLetter == 'a-z') {
                    array_multisort(array_column($schedules, 'name'), SORT_ASC, $schedules);
                } else {
                    array_multisort(array_column($schedules, 'name'), SORT_DESC, $schedules);
                }
                $newSchedules = $schedules;
            } else if ($filterByLetter == 'time_schedules') {
                if ($filterByLetter == 'a-z') {
                    array_multisort(array_column($schedules, 'time_start'), SORT_ASC, $schedules);
                } else {
                    array_multisort(array_column($schedules, 'time_start'), SORT_DESC, $schedules);
                }
            } else {
                if ($filterByLetter == 'a-z') {
                    array_multisort(array_column($schedules, 'number_exam'), SORT_ASC, $schedules);
                } else {
                    array_multisort(array_column($schedules, 'number_exam'), SORT_DESC, $schedules);
                }
                $newSchedules = $schedules;
            }
        }
        // echo "<pre>";
        // array_multisort(array_column($schedules, 'time_start'), SORT_ASC, $schedules);
        // var_dump($newSchedules);
        // echo "</pre>";
        return $newSchedules;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
