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


function getScheduleById($id)
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

function getScheduleByUserId($account_id)
{
    try {
        $sql = "SELECT
        s.id as schedule_id,
        s.name,
        s.time_start,
        s.exam_time,
        s.number_exam,
        sd.id as schedule_detail_id,
        sd.account_id
    FROM
        schedules s
    INNER JOIN schedule_detail sd ON s.id = sd.schedule_id
    WHERE
        sd.account_id = '$account_id' AND s.name <> 'test'";
        return pdo_query($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function addSchedule($name, $time_start, $exam_time, $number_exam)
{
    try {
        $sql = "INSERT INTO schedules(name, time_start, exam_time, number_exam) VALUES ('$name', '$time_start', '$exam_time', '$number_exam');";
        return pdo_execute($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function addScheduleDetail($schedule_id, $username)
{
    try {
        $account_id = getAccountByUsername($username)['id'];
        $sql = "INSERT INTO schedule_detail(schedule_id, account_id) VALUES ('$schedule_id', '$account_id');";
        return pdo_execute($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function deleteSchedule($id)
{
    try {
        $sql = "DELETE FROM schedules WHERE id = $id;";
        pdo_execute($sql);
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

function getSchedules($page)
{
    try {
        $sql = "SELECT * FROM schedules LIMIT $page, 10;";
        return pdo_query($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function getNumberFinishedExamThisMonth()
{
    try {
        $sql = "SELECT COUNT(*) as value FROM schedules WHERE MONTH(time_start) = MONTH(CURRENT_DATE()) AND YEAR(time_start) = YEAR(CURRENT_DATE());";
        return pdo_query_one($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function getLimitShedule($limit)
{
    try {
        $sql = "SELECT * FROM schedules ORDER BY id DESC LIMIT $limit;";
        return pdo_query($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function getNumberCandidateOfSchedule($schedule_id)
{
    try {
        $sql = "SELECT COUNT(*) AS number FROM schedule_detail WHERE schedule_id = '$schedule_id';";
        return pdo_query_one($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function getScheduleThisWeek()
{
    try {
        $sql = "SELECT
        COUNT(s.id) AS number_schedule,
        COUNT(r.status) AS number_finished_exam
    FROM
        schedules s
    INNER JOIN exams e ON
        e.schedule_id = s.id
    INNER JOIN results r ON
        r.exam_id = e.id
    WHERE r.status = 1
    AND (s.time_start BETWEEN DATE_SUB(CURDATE(), INTERVAL WEEKDAY(CURDATE()) DAY) AND CURDATE());time_start BETWEEN DATE_SUB(CURDATE(), INTERVAL WEEKDAY(CURDATE()) DAY) AND CURDATE();";
        return pdo_query_one($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function getScheduleThisMonth()
{
    try {
        $sql = "SELECT
        COUNT(s.id) AS number_schedule,
        COUNT(r.status) AS number_finished_exam
    FROM
        schedules s
    INNER JOIN exams e ON
        e.schedule_id = s.id
    INNER JOIN results r ON
        r.exam_id = e.id
    WHERE r.status = 1
    AND (s.time_start BETWEEN DATE_FORMAT(NOW(), '%Y-%m-01') AND LAST_DAY(NOW()));";
        return pdo_query_one($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function getScheduleThisYear()
{
    try {
        $sql = "SELECT
        COUNT(s.id) AS number_schedule,
        COUNT(r.status) AS number_finished_exam
    FROM
        schedules s
    INNER JOIN exams e ON
        e.schedule_id = s.id
    INNER JOIN results r ON
        r.exam_id = e.id
    WHERE r.status = 1
    AND (s.time_start BETWEEN DATE_FORMAT(NOW(), '%Y-01-01') AND DATE_FORMAT(NOW(), '%Y-12-31'));";
        return pdo_query_one($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}



function getScheduleByTimePeriod($start_date, $end_date)
{
    try {
        $sql = "SELECT
        COUNT(s.id) AS number_schedule,
        COUNT(r.status) AS number_finished_exam
    FROM
        schedules s
    INNER JOIN exams e ON
        e.schedule_id = s.id
    INNER JOIN results r ON
        r.exam_id = e.id
    WHERE r.status = 1
    AND (s.time_start BETWEEN '$start_date' AND '$end_date');";
        return pdo_query_one($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function getScheduleDetail($schedule_id)
{
    try {
        $sql = "SELECT
        sd.id,
        a.id AS account_id,
        a.username,
        a.fullname
        FROM schedule_detail sd
        INNER JOIN accounts a ON sd.account_id = a.id
        WHERE sd.schedule_id = '$schedule_id';";
        return pdo_query($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function deleteCandidate($schedule_id, $candidate_id)
{
    try {
        $sql = "DELETE FROM schedule_detail WHERE schedule_id = '$schedule_id' AND account_id = '$candidate_id';";
        pdo_execute($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function getAllSchedulesAndNumberCandidates()
{
    try {
        $sql = "SELECT
                    s.*,
                    e.category_id,
                    COUNT(DISTINCT sd.account_id) AS number_candidate,
                    SUM(q.question_level_id = 1) AS number_easy_questions,
                    SUM(q.question_level_id = 2) AS number_medium_questions,
                    SUM(q.question_level_id = 3) AS number_hard_questions
                FROM
                    schedules s
                JOIN exams e ON
                    s.id = e.schedule_id
                LEFT JOIN schedule_detail sd ON
                    s.id = sd.schedule_id
                LEFT JOIN exam_details ed ON
                    e.id = ed.exam_id
                LEFT JOIN questions q ON
                    ed.question_id = q.id
                GROUP BY
                    s.id;";
        return pdo_query($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function editSchedule($id, $name, $time_start, $exam_time, $number_exam)
{
    try {
        $sql = "UPDATE schedules 
            SET
            name = '$name',
            time_start = '$time_start',
            exam_time = $exam_time,
            number_exam = $number_exam
        WHERE
            id = $id;";
        pdo_execute($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}


function getNumbersScheduleLast6Month()
{
    try {
        $sql = "SELECT
    SUM(
        CASE WHEN MONTH(s.time_start) = MONTH(NOW()) AND YEAR(s.time_start) = YEAR(NOW()) THEN 1 ELSE 0
        END) AS ThisMonth,
        SUM(
            CASE WHEN MONTH(s.time_start) = MONTH(NOW() - INTERVAL 1 MONTH) AND YEAR(s.time_start) = YEAR(NOW() - INTERVAL 1 MONTH) THEN 1 ELSE 0
            END) AS LastMonth,
            SUM(
                CASE WHEN MONTH(s.time_start) = MONTH(NOW() - INTERVAL 2 MONTH) AND YEAR(s.time_start) = YEAR(NOW() - INTERVAL 2 MONTH) THEN 1 ELSE 0
                END) AS Month2,
                SUM(
                    CASE WHEN MONTH(s.time_start) = MONTH(NOW() - INTERVAL 3 MONTH) AND YEAR(s.time_start) = YEAR(NOW() - INTERVAL 3 MONTH) THEN 1 ELSE 0
                    END) AS Month3,
                    SUM(
                        CASE WHEN MONTH(s.time_start) = MONTH(NOW() - INTERVAL 4 MONTH) AND YEAR(s.time_start) = YEAR(NOW() - INTERVAL 4 MONTH) THEN 1 ELSE 0
                        END) AS Month4,
                        SUM(
                            CASE WHEN MONTH(s.time_start) = MONTH(NOW() - INTERVAL 5 MONTH) AND YEAR(s.time_start) = YEAR(NOW() - INTERVAL 5 MONTH) THEN 1 ELSE 0
                            END) AS Month5
                        FROM
                            schedules s
                        WHERE
                            s.time_start BETWEEN DATE_FORMAT(NOW(), '%Y-01-01') AND LAST_DAY(NOW()) OR s.time_start BETWEEN DATE_FORMAT(
                                NOW() - INTERVAL 6 MONTH, '%Y-07-01') AND LAST_DAY(NOW());";
        return pdo_query_one($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function getPointRateFromSchedule($schedule_id)
{
    try {
        $sql = "SELECT
                    s.id AS schedule_id,
                    s.name AS schedule_name,
                    COUNT(DISTINCT e.id) AS number_of_exams,
                    COUNT(r.id) AS total_results,
                    SUM(
                        CASE WHEN r.points >= 1 AND r.points <= 5 THEN 1 ELSE 0
                    END
                ) AS count_1_to_5,
                SUM(
                    CASE WHEN r.points > 5 AND r.points <= 8 THEN 1 ELSE 0
                END
                ) AS count_5_to_8,
                SUM(
                    CASE WHEN r.points > 8 THEN 1 ELSE 0
                END
                ) AS count_8_and_above
                FROM
                    results r
                LEFT JOIN exams e ON
                    r.exam_id = e.id
                LEFT JOIN schedules s ON
                    s.id = e.schedule_id
                WHERE
                    s.id = '$schedule_id'
                GROUP BY
                    s.id,
                    s.name;";
        return pdo_query_one($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}



?>