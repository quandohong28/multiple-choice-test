<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("location: ../index.php");
}
include '../model/pdo.php';
include '../model/category.php';
include '../model/question.php';
include '../model/account.php';
include '../model/schedule.php';
include '../model/exam.php';
include '../model/result.php';
include '../model/answer.php';

?>

<!doctype html>
<html lang="en">

<head>
    <title>Trang chủ</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css?h=a36b09c30de7308fcdcc873e9287b73a">
    <link rel="stylesheet" href="../assets/css/styles.min.css?h=5623086526452171cd4d963de7cb2c74">
    <!-- CSS thuần -->
    <link rel="stylesheet" href="../assets/css/styles.user.css">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="mt-5 pt-5">
    <header>

        <?php

        include "./layouts/header.php";
        ?>
    </header>
    <main>
        <div class="container">

            <?php
            if (isset($_GET['act'])) {
                switch ($_GET['act']) {
                    case 'home':
                        $categories = getAllCategories();
                        $colors = [
                            'bg-primary',
                            'bg-success',
                            'bg-danger',
                            'bg-warning',
                            'bg-info',
                            'bg-light'
                        ];
                        $count = count($colors);
                        include "./utilities/home.php";
                        break;
                    case 'schedule':
                        $schedules = getScheduleByUserId($_SESSION['user']['id']);
                        include "./schedules/schedule.php";
                        break;
                    case 'practice':
                        $question_levels = getQuestionLevels();
                        $categories = getAllCategories();
                        $doingExams = getDoingExamByAccountId($_SESSION['user']['id']);
                        include "./exams/practice.php";
                        break;
                    case 'start_exam':
                        $category_id = $_GET['category_id'];
                        $type = $_GET['type'];
                        if (isset($_POST['btn_submit'])) {
                            $number_easy_questions = $_POST['number_easy_questions'];
                            $number_medium_questions = $_POST['number_medium_questions'];
                            $number_hard_questions = $_POST['number_hard_questions'];
                            $exam_time = $_POST['exam_time'];
                            insertPracticeExam($category_id, $type, $number_easy_questions, $number_medium_questions, $number_hard_questions, $exam_time);
                        }
                        $latestExamId = getLatestExam()['id'];
                        addResult($_SESSION['user']['id'], $latestExamId);
                        $latest_result_id = getLatestResult()['id'];
                        echo '<meta http-equiv="refresh" content="0;url=?act=doing_exam&type=' . $type . '&exam_id=' . $latestExamId . '&exam_time=' . $exam_time . '&result_id=' . $latest_result_id . '">';
                        break;
                    case 'doing_exam':
                        // $result_id = $_GET['result_id'];
                        // if (!getResultById($result_id)['exam_time']) {
                        //     echo 123;die;
                        //     $time_start = getResultById($result_id)['time_start'];
                        //     $dt = new DateTime('now', new DateTimeZone('Asia/Ho_Chi_Minh'));
                        //     $current_time = $dt->format('Y-m-d H:i:s');
                        //     $diff = strtotime($current_time) - strtotime($time_start);
                        //     $remaning_time = $diff - strtotime($exam_time);
                        //     
                        // } else {
                        //     // Xử lý khi người dùng bắt đầu thi
                        //     $exam_detail = getExamDetailByExamId($_GET['exam_id']);
                        // }


                        $type = $_GET['type'];
                        $result_id = $_GET['result_id'];
                        $exam_id = getResultById($result_id)['id'];
                        $exam_detail = getExamDetailByExamId($_GET['exam_id']);
                        // var_dump($_GET['exam_time']);die;
                        // thi do va quay lai
                        if ($_GET['exam_time'] === '') {
                            $exam_time = getExamById($_GET['exam_id'])['exam_time'];
                            $time_start = getResultById($result_id)['time_start'];
                            $dt = new DateTime('now', new DateTimeZone('Asia/Ho_Chi_Minh'));
                            $current_time = $dt->format('Y-m-d H:i:s');
                            $diff = strtotime($current_time) - strtotime($time_start);
                            $remaning_time = strtotime($exam_time) - $diff;
                            echo $remaning_time;
                            if ($remaning_time <= 0) {
                                echo '<meta http-equiv="refresh" content="0;url=?act=result">';
                            } else {
                                $exam_time = $remaning_time / 60;
                                header("location: ?act=doing_exam&type=$type&exam_id=$exam_id&exam_time=$exam_time&result_id=$result_id");
                            }
                        }
                        // bat dau mot bai thi moi
                        else {
                            $exam_time = getResultById($result_id)['exam_time'];
                        }
                        include "./exams/doing_exam.php";
                        break;
                    case 'finish_exam':
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $exam_time = $_POST['exam_time'];
                            $exam_id = $_POST['exam_id'];
                            // $points = $_POST['points'];
                            $points = 0;
                            if ($exam_time == '') {
                                $exam_time = $_GET['exam_time'];
                            }
                            updateResult($exam_time, $points, $exam_id);
                            echo '<meta http-equiv="refresh" content="0;url=?act=result">';
                        }
                        break;
                    case 'result':
                        $results = getResultsByUserId($_SESSION['user']['id']);
                        include "./results/result.php";
                        break;
                    case 'result_detail':
                        $avatarPath = '../assets/img/accounts/';
                        $result_id = $_GET['result_id'];
                        $result_detail = getResultDetailByResultId($result_id);
                        $result = getResultById($result_id);
                        include "./results/result_detail.php";
                        break;
                    case 'profile':
                        $id = $_SESSION['user']['id'];
                        $account = getAccountById($id);
                        $avatarPath = '../assets/img/accounts/';
                        extract($account);
                        include "./accounts/profile.php";
                        break;
                    case 'edit_profile':
                        if (isset($_POST['btn_edit'])) {
                            $id = $_SESSION['user']['id'];
                            $account = getAccountById($id);
                            $email = $_POST['email'];
                            $introduce = $_POST['introduce'];

                            if ($_FILES['avatar']['name'] != "") {
                                $targetDir = '../assets/img/accounts/';
                                $avatar = $_FILES['avatar']['name'];
                                move_uploaded_file($_FILES['avatar']['tmp_name'], $targetDir . $avatar);
                            } else {
                                $avatar = $account['avatar'];
                            }

                            $fullname = trim($_POST['fullname']);

                            $tel = $_POST['tel'];

                            $address = ucfirst(trim($_POST['address']));

                            editProfile($id, $email, $introduce, $avatar, $fullname, $tel, $address);
                            echo '<meta http-equiv="refresh" content="0;url=?act=profile">';
                        }
                        break;
                    case 'setting':
                        include "./accounts/setting.php";
                        break;
                    case 'change_password':
                        echo '<meta http-equiv="refresh" content="0;url=../views/change_password.php">';
                        break;
                    case 'logout':
                        unset($_SESSION['user']);
                        // var_dump($_SESSION['user']);
                        echo '<meta http-equiv="refresh" content="0;url=../index.php">';
                        break;
                    default:
                        $categories = getAllCategories();
                        $colors = [
                            'bg-primary',
                            'bg-success',
                            'bg-danger',
                            'bg-warning',
                            'bg-info',
                            'bg-light'
                        ];
                        $count = count($colors);
                        include "./utilities/home.php";
                        break;
                }
            } else {
                $categories = getAllCategories();
                $colors = [
                    'bg-primary',
                    'bg-success',
                    'bg-danger',
                    'bg-warning',
                    'bg-info',
                    'bg-light'
                ];
                $count = count($colors);
                include "./utilities/home.php";
            }
            ?>
        </div>
    </main>
    <footer>
        <?php include "./layouts/footer.php"; ?>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    <script src="../assets/js/script.min.js"></script>
</body>

</html>