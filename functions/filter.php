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
            switch ($filterByCategory) {
                case 'value':
                    if ($filterByLetter == 'a-z') {
                        array_multisort(array_column($questions, 'id'), SORT_ASC, $questions);
                    } else {
                        array_multisort(array_column($questions, 'id'), SORT_DESC, $questions);
                    }
                    $newQuestions = $questions;
                    break;
                case 'question';
                    if ($filterByLetter == 'a-z') {
                        array_multisort(array_column($questions, 'content'), SORT_ASC, $questions);
                    } else {
                        array_multisort(array_column($questions, 'content'), SORT_DESC, $questions);
                    }
                    $newQuestions = $questions;
                    break;
                default:
                    if ($filterByLetter == 'a-z') {
                        array_multisort(array_column($questions, 'id'), SORT_ASC, $questions);
                    } else {
                        array_multisort(array_column($questions, 'id'), SORT_DESC, $questions);
                    }
                    $newQuestions = $questions;
                    break;
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
            switch ($filterByCategory) {
                case 'value':
                    if ($filterByLetter == 'a-z') {
                        array_multisort(array_column($accounts, 'id'), SORT_ASC, $accounts);
                    } else {
                        array_multisort(array_column($accounts, 'id'), SORT_DESC, $accounts);
                    }
                    $newAccounts = $accounts;
                    break;
                case 'username':
                    if ($filterByLetter == 'a-z') {
                        array_multisort(array_column($accounts, 'username'), SORT_DESC, $accounts);
                    } else {
                        array_multisort(array_column($accounts, 'username'), SORT_ASC, $accounts);
                    }
                    $newAccounts = $accounts;
                    break;
                case 'fullname':
                    if ($filterByLetter == 'a-z') {
                        array_multisort(array_column($accounts, 'fullname'), SORT_ASC, $accounts);
                    } else {
                        array_multisort(array_column($accounts, 'fullname'), SORT_DESC, $accounts);
                    }
                    break;
                case 'role':
                    if ($filterByLetter == 'a-z') {
                        array_multisort(array_column($accounts, 'role'), SORT_ASC, $accounts);
                    } else {
                        array_multisort(array_column($accounts, 'role'), SORT_DESC, $accounts);
                    }
                    $newAccounts = $accounts;
                    break;
                default:
                    if ($filterByLetter == 'a-z') {
                        array_multisort(array_column($accounts, 'id'), SORT_ASC, $accounts);
                    } else {
                        array_multisort(array_column($accounts, 'id'), SORT_DESC, $accounts);
                    }
                    $newAccounts = $accounts;
                    break;
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
            switch ($filterByCategory) {
                case 'id':
                    if ($filterByLetter == 'a-z') {
                        array_multisort(array_column($catergories, 'id'), SORT_ASC, $catergories);
                    } else {
                        array_multisort(array_column($catergories, 'id'), SORT_DESC, $catergories);
                    }
                    $newCategories = $catergories;
                    break;
                case 'category_name':
                    if ($filterByLetter == 'a-z') {
                        array_multisort(array_column($catergories, 'name'), SORT_ASC, $catergories);
                    } else {
                        array_multisort(array_column($catergories, 'name'), SORT_DESC, $catergories);
                    }
                    $newCategories = $catergories;
                    break;
                default:
                    if ($filterByLetter == 'a-z') {
                        array_multisort(array_column($catergories, 'id'), SORT_ASC, $catergories);
                    } else {
                        array_multisort(array_column($catergories, 'id'), SORT_DESC, $catergories);
                    }
                    $newCategories = $catergories;
                    break;
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
        $newSchedules = [];
        if ($search != '') {
            foreach ($schedules as $schedule) {
                if (strpos(mb_strtolower($schedule['name_schedules'], 'UTF-8'), $search) !== false) {
                    array_push($newSchedules, $schedule);
                }
            }
        } else {
            switch ($filterByCategory) {
                case 'id':
                    if ($filterByLetter == 'a-z') {
                        array_multisort(array_column($schedules, 'id'), SORT_ASC, $schedules);
                    } else {
                        array_multisort(array_column($schedules, 'id'), SORT_DESC, $schedules);
                    }
                    $newSchedules = $schedules;
                    break;
                case 'name_schedules':
                    if ($filterByLetter == 'a-z') {
                        array_multisort(array_column($schedules, 'name'), SORT_ASC, $schedules);
                    } else {
                        array_multisort(array_column($schedules, 'name'), SORT_DESC, $schedules);
                    }
                    $newSchedules = $schedules;
                    break;
                case 'time_schedules':
                    if ($filterByLetter == 'a-z') {
                        array_multisort(array_column($schedules, 'time_start'), SORT_ASC, $schedules);
                    } else {
                        array_multisort(array_column($schedules, 'time_start'), SORT_DESC, $schedules);
                    }
                    $newSchedules = $schedules;
                    break;
                case 'time_schedules':
                    if ($filterByLetter == 'a-z') {
                        array_multisort(array_column($schedules, 'time_start'), SORT_ASC, $schedules);
                    } else {
                        array_multisort(array_column($schedules, 'time_start'), SORT_DESC, $schedules);
                    }
                    $newSchedules = $schedules;
                    break;
                case 'quantity_schedules':
                    if ($filterByLetter == 'a-z') {
                        array_multisort(array_column($schedules, 'number_exam'), SORT_ASC, $schedules);
                    } else {
                        array_multisort(array_column($schedules, 'number_exam'), SORT_DESC, $schedules);
                    }
                    $newSchedules = $schedules;
                    break;
                default:
                    if ($filterByLetter == 'a-z') {
                        array_multisort(array_column($schedules, 'id'), SORT_ASC, $schedules);
                    } else {
                        array_multisort(array_column($schedules, 'id'), SORT_DESC, $schedules);
                    }
                    $newSchedules = $schedules;
                    break;
            }
        }
        return $newSchedules;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function filterSchedulesDetail($filterByCategory, $filterByLetter, $search, $schedule_detail)
{
    try { 
        $newSchedulesDetail = [];
        if ($search != '') {
            foreach ($schedule_detail as $schedule_dt) {
                if (strpos(mb_strtolower($schedule_dt['fullname'], 'UTF-8'), $search) !== false) {
                    array_push($newSchedulesDetail, $schedule_dt);
                }
            }
        } else {
            switch ($filterByCategory) {
                case 'id':
                    if ($filterByLetter == 'a-z') {
                        array_multisort(array_column($schedule_detail, 'id'), SORT_ASC, $schedule_detail);
                    } else {
                        array_multisort(array_column($schedule_detail, 'id'), SORT_DESC, $schedule_detail);
                    }
                    $newSchedulesDetail = $schedule_detail;
                    break;
                case 'id_candidates':
                    if ($filterByLetter == 'a-z') {
                        array_multisort(array_column($schedule_detail, 'account_id'), SORT_ASC, $schedule_detail);
                    } else {
                        array_multisort(array_column($schedule_detail, 'account_id'), SORT_DESC, $schedule_detail);
                    }
                    $newSchedulesDetail = $schedule_detail;
                    break;
                case 'name_candidates':
                    if ($filterByLetter == 'a-z') {
                        array_multisort(array_column($schedule_detail, 'fullname'), SORT_ASC, $schedule_detail);
                    } else {
                        array_multisort(array_column($schedule_detail, 'fullname'), SORT_DESC, $schedule_detail);
                    }
                    $newSchedulesDetail = $schedule_detail;
                    break; 
                default:
                    if ($filterByLetter == 'a-z') {
                        array_multisort(array_column($schedule_detail, 'id'), SORT_ASC, $schedule_detail);
                    } else {
                        array_multisort(array_column($schedule_detail, 'id'), SORT_DESC, $schedule_detail);
                    }
                    $newSchedulesDetail = $schedule_detail;
                    break;
            }
        }
        return $newSchedulesDetail;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
