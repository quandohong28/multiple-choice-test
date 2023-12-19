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

function updateStatusSchedule()
{
    try {
        $sql = "SELECT * FROM schedules";
        $schedules = pdo_query($sql);

        foreach ($schedules as $schedule) {
            extract($schedule);
            $schedule_id = $id;
            $time_start = $time_start;
            $exam_time = $exam_time;
            $status = $status;
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $current_time = date('Y-m-d H:i:s');
            $time_start = DateTime::createFromFormat('Y-m-d H:i:s', $time_start);


            $prepare_datetime = clone $time_start;
            $prepare_datetime->modify('+15 minutes');
            $end_datetime = clone $time_start;
            $end_datetime->modify('+' . $exam_time . ' minutes');
            $end_datetime->modify('+15 minutes');

            if ($current_time < $time_start->format('Y-m-d H:i:s')) {
                $status = 0;
            } else if ($time_start->format('Y-m-d H:i:s') <= $current_time && $current_time <= $prepare_datetime->format('Y-m-d H:i:s')) {
                $status = 1;
            } else if ($current_time > $prepare_datetime->format('Y-m-d H:i:s') && $current_time < $end_datetime->format('Y-m-d H:i:s')) {
                $status = 2;
            } else {
                $status = 3;
            }
            $sql = "UPDATE schedules SET status = $status WHERE id = $schedule_id;";
            pdo_execute($sql);
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function getScheduleByUserId($account_id)
{
    try {
        updateStatusSchedule();

        $sql = "SELECT
        s.id as schedule_id,
        s.name,
        s.time_start,
        s.exam_time,
        s.number_exam,
        sd.id as schedule_detail_id,
        sd.account_id,
        s.status,
        sd.status as schedule_detail_status,
        sd.exam_code
    FROM
        schedules s
    INNER JOIN schedule_detail sd ON s.id = sd.schedule_id
    WHERE
        (sd.account_id = '$account_id') ORDER BY s.time_start DESC;";
        return pdo_query($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function updateStatusScheduleDetail($schedule_id, $account_id, $status)
{
    try {
        $sql = "UPDATE schedule_detail SET status = $status WHERE schedule_id = '$schedule_id' AND account_id = '$account_id';";
        pdo_execute($sql);
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
        $sql = "SELECT * FROM schedules ORDER BY time_start DESC LIMIT $page, 10;";
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

function getScheduleDetail($schedule_id, $page)
{
    try {
        $sql = "SELECT
        sd.id,
        a.id AS account_id,
        a.username,
        a.fullname
        FROM schedule_detail sd
        INNER JOIN accounts a ON sd.account_id = a.id
        WHERE sd.schedule_id = '$schedule_id'
        LIMIT $page, 10;";
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

function countScheduleDetail($schedule_id)
{
    try {
        $sql = "SELECT
        *
        FROM schedule_detail sd
        INNER JOIN accounts a ON sd.account_id = a.id
        WHERE sd.schedule_id = '$schedule_id'";
        return pdo_query($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}