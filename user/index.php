<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location: ../index.php');
}
// Kiểm tra các bài thi đang làm

include '../model/pdo.php';
include '../model/category.php';
include '../model/question.php';
include '../model/account.php';
include '../model/schedule.php';
include '../model/exam.php';
include '../model/result.php';
include '../model/answer.php';
include '../functions/core.php';

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
    <!-- Fontawesome -->
    <script src="../assets/fontawesome/js/all.min.js"></script>
    <!-- select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>

<body class="mt-5 pt-5">
    <header>

        <?php
        include './layouts/header.php';
        ?>
    </header>
    <main>
        <div class="container">

            <?php
            reloadStatusResult($_SESSION['user']['id']);
            if (isset($_GET['act'])) {
                switch ($_GET['act']) {
                    case 'home':
                        $categories = getAllCategories();
                        include './utilities/home.php';
                        break;
                    case 'schedule':
                        $schedules = getScheduleByUserId($_SESSION['user']['id']);
                        include './schedules/schedule.php';
                        break;
                    case 'practice':
                        $question_levels = getQuestionLevels();
                        $categories = getAllCategories();
                        $doingExams = getDoingExamByAccountId($_SESSION['user']['id']);
                        include './exams/practice.php';
                        break;
                    case 'start_exam':
                        // Xu ly lay ra so luong cau hoi theo do kho trong moi chuyen muc
                        




                        if (isset($_POST['start-btn'])) {
                            $type = $_POST['type'];
                            $exam_time = $_POST['exam_time'];
                            $category_id = $_POST['category_id'];

                            // Xu ly logic cho chuan bi thi thu
                            if ($type == 1) {
                                $number_easy_questions = $_POST['number_easy_questions'];
                                $number_medium_questions = $_POST['number_medium_questions'];
                                $number_hard_questions = $_POST['number_hard_questions'];
                                $schedule_id = 1;
                                insertPracticeExam($schedule_id, $category_id, $type, $number_easy_questions, $number_medium_questions, $number_hard_questions, $exam_time);
                                $latestExamId = getLatestExam()['id'];
                                $exam_id = $latestExamId;
                                $exam_code = getLatestExam()['exam_code'];
                            }

                            // Xu ly cho chuan bi thi that
                            else {
                                $schedule_id = $_POST['schedule_id'];
                                $exam_id = getRandomExam($schedule_id)['id'];
                                $exam_code = getExamById($exam_id)['exam_code'];
                            }

                            addExamToScheduleDetail($_SESSION['user']['id'], $schedule_id, $exam_code);
                            addResult($_SESSION['user']['id'], $exam_id);
                            $latest_result_id = getLatestResult()['id'];
                            $time_start = getResultById($latest_result_id)[0]['time_start'];
                            //Tạo bản kết quả tạm thời với câu trả lời là Null
                            $getQuestionsByExamDetails = getQuestionsByExamDetails($exam_id);
                            for ($question = 0; $question < count($getQuestionsByExamDetails); $question++) {
                                addResultDetail($latest_result_id, $getQuestionsByExamDetails[$question]['question_id'], 'null');
                            }
                            $$exam_code = [
                                'schedule_id' => $schedule_id,
                                'exam_code' => $exam_code,
                                'type' => $type,
                                'exam_id' => $exam_id,
                                'exam_time' => $exam_time, // Thoi gian lam bai thi
                                'time_start' => $time_start, // Thoi gian bat dau lam bai thi
                                'remaining_time' => $exam_time, // Thoi gian con lai de lam bai thi
                                'result_id' => $latest_result_id
                            ];
                            echo "<script>  
                                if (localStorage.getItem('" . $exam_code . "') === null) {
                                    localStorage.setItem('" . $exam_code . "', JSON.stringify(" . json_encode($$exam_code) . ")); 
                                } 
                            </script>";

                            echo '<meta http-equiv="refresh" content="0;url=?act=doing_exam&exam_code=' . $exam_code . '">';
                        }
                        break;
                    case 'doing_exam':
                        echo "<script>
                            if (localStorage.getItem('" . $_GET['exam_code'] . "') === null) {
                                window.location.href = '?act=practice'; 
                            } else { 
                                var exam = JSON.parse(localStorage.getItem('" . $_GET['exam_code'] . "'));

                                var exam_time = exam.exam_time; 
                                var time_start = exam.time_start;
                                var remaining_time = exam.remaining_time;
                                if (remaining_time <= 0) {
                                    window.location.href = '?act=result';
                                } else {
                                    dt = new Date();
                                    var day = dt.getDate();
                                    var month = dt.getMonth() + 1; // Tháng bắt đầu từ 0 nên cần cộng thêm 1
                                    var year = dt.getFullYear();

                                    var hours = dt.getHours().toString().padStart(2, '0');
                                    var minutes = dt.getMinutes().toString().padStart(2, '0');
                                    var seconds = dt.getSeconds().toString().padStart(2, '0');

                                    // Định dạng ngày và giờ thành chuỗi
                                    var current_time = year + '-' + month + '-' + day + ' ' + hours + ':' + minutes + ':' + seconds;
                                    var diff = (Date.parse(current_time) - Date.parse(time_start)) / 1000;
                                    var remaining_time = exam_time * 60 - diff;
                                    if (remaining_time <= 0) {
                                        window.location.href = '?act=result';
                                    } else {
                                        remaining_time = remaining_time / 60;
                                        exam.remaining_time = remaining_time;
                                        localStorage.setItem('" . $_GET['exam_code'] . "', JSON.stringify(exam));
                                    }
                                }
                            }
                        </script>";

                        include './exams/doing_exam.php';
                        break;
                    case 'finish_exam':
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $exam_time = $_POST['exam_time'];
                            $exam_id = $_POST['exam_id'];
                            $schedule_id = $_POST['schedule_id'];
                            $points = 0;
                            if ($exam_time == '') {
                                $exam_time = $_GET['exam_time'];
                            }
                            updateStatusScheduleDetail($schedule_id, $_SESSION['user']['id'], 2);
                            updateResult($exam_time, $points, $exam_id);
                            examResult($exam_id);
                            echo '<meta http-equiv="refresh" content="0;url=?act=result">';
                        }
                        break;
                    case 'result':
                        if (isset($_GET['sort'])) {
                            $results = getResultsByUserId($_SESSION['user']['id'], $_GET['sort']);
                        } else {
                            $results = getResultsByUserId($_SESSION['user']['id']);
                        }
                        include './results/result.php';
                        break;
                    case 'result_detail':
                        $avatarPath = '../assets/img/accounts/';
                        $result_id = $_GET['result_id'];
                        // Phân trang
                        if (isset($_GET['page'])) {
                            $page = $_GET['page'];
                        } else {
                            $page = 1;
                        }
                        $i = $page * 10 - 9; // Số thứ tự câu hỏi
                        $page = ($page - 1) * 10;
                        $result_detail = getResultDetailByResultId($result_id, $page);
                        // Xử lý logic tính điểm
                        $result = getResultById($result_id);
                        $number_incorrect = 0;
                        $number_correct = 0;
                        $points = $result[0]['points'];
                        $exam_time = $result[0]['exam_time'];
                        foreach ($result as $question) {
                            extract($question);
                            if ($user_answer_id == $answer_correct_id) {
                                $number_correct++;
                            } else {
                                $number_incorrect++;
                            }
                        }
                        include './results/result_detail.php';
                        break;
                    case 'support':
                        include './utilities/support.php';
                        break;
                    case 'profile':
                        $id = $_SESSION['user']['id'];
                        $account = getAccountById($id);
                        $avatarPath = '../assets/img/accounts/';
                        extract($account);
                        include './accounts/profile.php';
                        break;
                    case 'edit_profile':
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $id = $_SESSION['user']['id'];
                            $account = getAccountById($id);
                            $email = $_POST['email'];
                            $introduce = $_POST['introduce'];
                            $fullname = trim($_POST['fullname']);
                            $tel = $_POST['tel'];
                            $address = ucfirst(trim($_POST['address']));
                            if ($_FILES['avatar']['name'] != '') {
                                $targetDir = '../assets/img/accounts/';
                                $avatar = $_FILES['avatar']['name'];
                                move_uploaded_file($_FILES['avatar']['tmp_name'], $targetDir . $avatar);
                            } else {
                                $avatar = $account['avatar'];
                            }


                            editProfile($id, $email, $introduce, $avatar, $fullname, $tel, $address);
                            echo '<meta http-equiv="refresh" content="0;url=?act=profile">';
                        }
                        break;
                    case 'review_questions':
                        include './utilities/review_question.php';
                        break;
                    case 'help':
                        include './utilities/help.php';
                        break;
                    case 'setting':
                        include './accounts/setting.php';
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
                        $colors = ['bg-primary', 'bg-success', 'bg-danger', 'bg-warning', 'bg-info', 'bg-light'];
                        $count = count($colors);
                        include './utilities/home.php';
                        break;
                }
            } else {
                $categories = getAllCategories();
                $colors = ['bg-primary', 'bg-success', 'bg-danger', 'bg-warning', 'bg-info', 'bg-light'];
                $count = count($colors);
                include './utilities/home.php';
            }
            ?>
        </div>
    </main>
    <footer>
        <?php include './layouts/footer.php'; ?>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="../assets/js/script.min.js"></script>
    <script src="../assets/js/validator.js"></script>
</body>

</html>