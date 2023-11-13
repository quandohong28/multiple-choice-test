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
                        include "./exams/practice.php";
                        break;
                    case 'start_exam':
                        $type = $_GET['type'];
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
                        // header("location: ?act=doing_exam&type=$type&exam_id=$latestExamId");
                        // header("Location: index.php");
                        echo '<meta http-equiv="refresh" content="0;url=?act=doing_exam&type=' . $type . '&exam_id=' . $latestExamId . '">';
                        break;
                    case 'doing_exam':
                        include "./exams/doing_exam.php";
                        $exam_detail = getExamDetailByExamId($_GET['exam_id']);
                        var_dump($exam_detail);
                        break;
                    case 'result':
                        include "./results/result.php";
                        break;
                    case 'result_detail':
                        $avatarPath = '../assets/img/accounts/';
                        include "./results/result_detail.php";
                        break;
                    case 'profile':
                        $id = $_SESSION['user']['id'];
                        $account = getAccountById($id);
                        $avatarPath = '../assets/img/accounts/';
                        extract($account);
                        $parts = explode(' ', trim($fullname));
                        extract([
                            'firstname' => $parts[0],
                            'lastname' => array_slice($parts, 1),
                        ]);
                        include "./accounts/profile.php";
                        break;
                    case 'setting':
                        include "./accounts/setting.php";
                        break;
                    case 'change_password':
                        echo '<meta http-equiv="refresh" content="0;url=../views/change_password.php">';
                        break;
                    case 'logout':
                        unset($_SESSION['user']);
                        var_dump($_SESSION['user']);
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