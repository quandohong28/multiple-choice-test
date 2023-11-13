<div class="row">
	<!-- Tabs navs -->
	<ul class="nav nav-tabs m-3" id="ex-with-icons" role="tablist">
		<li class="nav-item" role="presentation">
			<a class="nav-link" id="ex-with-icons-tab-1" data-mdb-toggle="tab" href="?act=tables&data=accounts"
				role="tab" aria-controls="ex-with-icons-tabs-1" aria-selected="true"><i
					class="fas fa-solid fa-users me-2"></i>Tài khoản</a>
		</li>
		<li class="nav-item" role="presentation">
			<a class="nav-link" id="ex-with-icons-tab-2" data-mdb-toggle="tab" href="?act=tables&data=categories"
				role="tab" aria-controls="ex-with-icons-tabs-2" aria-selected="false"><i
					class="fas fa-chart-line fa-list me-2"></i>Chuyên mục</a>
		</li>
		<li class="nav-item" role="presentation">
			<a class="nav-link" id="ex-with-icons-tab-3" data-mdb-toggle="tab" href="?act=tables&data=schedules"
				role="tab" aria-controls="ex-with-icons-tabs-3" aria-selected="false"><i
					class="fas fa-calendar-days fa-fw me-2"></i>Lịch thi</a>
		</li>
		<li class="nav-item" role="presentation">
			<a class="nav-link" id="ex-with-icons-tab-3" data-mdb-toggle="tab" href="?act=tables&data=questions"
				role="tab" aria-controls="ex-with-icons-tabs-3" aria-selected="false"><i
					class="fas fa-question fa-fw me-2"></i>Câu
				hỏi</a>
		</li>
		<li class="nav-item" role="presentation">
			<a class="nav-link" id="ex-with-icons-tab-3" data-mdb-toggle="tab" href="?act=tables&data=results"
				role="tab" aria-controls="ex-with-icons-tabs-3" aria-selected="false"><i
					class="fa-solid fa-square-poll-vertical me-2"></i>Theo
				dõi điểm</a>
		</li>
		<li class="nav-item" role="presentation">
			<a class="nav-link" id="ex-with-icons-tab-3" data-mdb-toggle="tab" href="?act=tables&data=exams" role="tab"
				aria-controls="ex-with-icons-tabs-3" aria-selected="false"><i class="fa-solid fa-file-lines me-2"></i>Đề
				thi</a>
		</li>
	</ul>
</div>



<?php
// Include Model
include '../model/pdo.php';
include '../model/account.php';
include '../model/category.php';
include '../model/schedule.php';
include '../model/question.php';
include '../model/answer.php';
include '../model/result.php';
include '../model/exam.php';
require '../lib/PhpExcel/vendor/autoload.php';


if (isset($_GET['data'])) {
	switch ($_GET['data']) {
		case 'accounts':
			$accounts = getAllAccounts();
			$getRole = getRoles();
			$pathImg = '../assets/img/accounts/';
			include 'accounts.php';
			break;
		case 'add_account':
			if (isset($_POST['btn_add'])) {
				$username = $_POST['username'];
				$password = hashPassword($_POST['password']);
				$fullname = $_POST['fullname'];
				$address = $_POST['address'];
				$email = $_POST['emailAddress'];
				$tel = $_POST['tel'];
				$role_id = $_POST['role_id'];

				if ($_FILES['avatar']['name'] != "") {
					$targetDir = '../assets/img/accounts/';
					$avatar = $_FILES['avatar']['name'];
					move_uploaded_file($_FILES['avatar']['tmp_name'], $targetDir . $avatar);
				} else {
					$avatar = "profile.png";
				}

				insertAccount($username, $password, $fullname, $avatar, $email, $address, $tel, $role_id);
			}
			echo '<meta http-equiv="refresh" content="0;url=?act=tables&data=accounts">';
			break;
		case 'edit_account':
			if (isset($_POST['btn_edit'])) {

				$id = $_POST['edit_id'];
				$fullname = $_POST['edit_fullname'];
				$email = $_POST['edit_emailAddress'];
				$address = $_POST['edit_address'];
				$tel = $_POST['edit_tel'];


				if ($_FILES['edit_avatar']['name'] != "") {
					$targetDir = '../assets/img/accounts/';
					$avatar = $_FILES['edit_avatar']['name'];
					move_uploaded_file($_FILES['edit_avatar']['tmp_name'], $targetDir . $avatar);
				} else {
					$avatar = $_POST['edit_avatar'];
				}
			}
			editAccount($id, $fullname, $avatar, $email, $address, $tel);
			echo '<meta http-equiv="refresh" content="0;url=?act=tables&data=accounts">';
			break;
		case 'del_account':
			deleteAccount($_GET['id']);
			echo '<meta http-equiv="refresh" content="0;url=?act=tables&data=accounts">';
			break;
		case 'categories':
			$catergories = getAllCategories();
			include 'categories.php';
			break;
		case 'add_category':
			if (isset($_POST['submit'])) {
				$name = $_POST['name'];
				$file = $_FILES['image'];
				$image = $file['name'];
				insertCategory($name, $image);
				move_uploaded_file($file['tmp_name'], '../assets/img/categories' . $image);
				echo '<meta http-equiv="refresh" content="0;url=?act=tables&data=categories">';
			}
			break;
		case 'edit_category':
			if (isset($_POST['btn_edit'])) {
				$id = $_POST['edit_id'];
				$name = $_POST['edit_name'];
				if ($_FILES['edit_image']['name'] != "") {
					$targetDir = '../assets/img/categories/';
					$image = $_FILES['edit_image']['name'];
					move_uploaded_file($_FILES['edit_image']['tmp_name'], $targetDir . $image);
				} else {
					$image = $_POST['edit_image'];
				}
			}
			editCategory($id, $name, $image);
			echo '<meta http-equiv="refresh" content="0;url=?act=tables&data=categories">';
			break;
		case 'del_category':
			deleteCategory($_GET['id']);
			echo '<meta http-equiv="refresh" content="0;url=?act=tables&data=categories">';
			break;
		case 'schedules':
			$schedules = getAllSchedules();
			include 'schedule/schedules.php';
			break;
		case 'add_schedule':
			if (isset($_POST['add_schedule'])) {
				$name = $_POST['name'];
				$time_start = $_POST['time_start'];
				$number_exam = $_POST['number_exam'];
				$exam_time = $_POST['exam_time'];
				$category_id = $_POST['category_id'];
				$number_easy_questions = $_POST['number_easy_questions'];
				$number_medium_questions = $_POST['number_medium_questions'];
				$number_hard_questions = $_POST['number_hard_questions'];
				$file = $_FILES['accounts']['tmp_name'];
				// var_dump($file);
				// Tạo một đối tượng PHPExcel để đọc dữ liệu từ tệp Excel
				$objPHPExcel = PHPExcel_IOFactory::load($file);

				// Lấy sheet đầu tiên
				$sheet = $objPHPExcel->getActiveSheet();

				// Lấy tất cả các dữ liệu từ sheet và đưa chúng vào một mảng
				$accounts = $sheet->toArray();

				// duyệt mảng dữ liệu để thêm vào cơ sở dữ liệu
				foreach ($accounts as $account) {
					$schedule_id = 1;
					$account_id = $account[0];
					$username = $account[1];
					// addCandidates($schedule_id, $account_id, $username);
				}
			}
			// echo '<meta http-equiv="refresh" content="0;url=?act=tables&data=schedules">';
			break;
		case 'edit_schedule':
			break;
		case 'schedule_detail':
			include 'schedule/schedule_detail.php';
			break;
		case 'del_schedule':
			deleteSchedule($_GET['id']);
			echo '<meta http-equiv="refresh" content="0;url=?act=tables&data=schedules">';
			break;
		case 'questions':
			$questions = getAllQuestions();
			$categories = getAllCategories();
			$question_type = getTypeQuestions();
			$question_level = getQuestionLevels();
			$pathImg = '../assets/img/questions/';
			include 'questions.php';
			break;
		case 'add_question':
			if (isset($_POST['btn_add'])) {
				$content_question = $_POST['content'];
				$question_level_id = $_POST['question_level_id'];
				$question_type_id = $_POST['question_type_id'];
				$category_id = $_POST['id_category'];

				if ($_FILES['image']['name'] != "") {
					$targetDir = '../assets/img/questions/';
					$image = $_FILES['image']['name'];
					move_uploaded_file($_FILES['image']['tmp_name'], $targetDir . $image);
				} else {
					$image = null;
				}

				insertQuestion($content_question, $image, $question_level_id, $question_type_id, $category_id);

				$question_id = getLatestQuestion();
				$answer = $_POST['answer'];
				$correct_answer = $_POST['correct_answer'];

				foreach ($answer as $key => $value) {
					$content = $value;
					$is_correct = (int) $correct_answer[$key];
					addAnswer($content, $question_id['id'], $is_correct);
				}
			}
			echo '<meta http-equiv="refresh" content="0;url=?act=tables&data=questions">';
			break;
		case 'edit_question':
			if (isset($_POST['btn_edit'])) {
				$content_question = $_POST['edit_content'];
				$question_level_id = $_POST['edit_question_level_id'];
				$question_type_id = $_POST['edit_question_type_id'];
				$category_id = $_POST['edit_category_id'];
				$question_id = $_POST['edit_id'];

				if ($_FILES['edit_image']['name'] != "") {
					$targetDir = '../assets/img/questions/';
					$image = $_FILES['edit_image']['name'];
					move_uploaded_file($_FILES['edit_image']['tmp_name'], $targetDir . $image);
				} else {
					$image = $_POST['edit_image'];
				}

				editQuestion($question_id, $content_question, $image, $question_level_id, $question_type_id, $category_id);

				$id_answer = $_POST['edit_id_answer'];
				$answer = $_POST['edit_answer'];
				$correct_answer = $_POST['edit_correct_answer'];
				$leng_answer = count($answer);

				for ($i = 0; $i < $leng_answer; $i++) {
					$id = (int)$id_answer[$i];
					$content = $answer[$i];
					$is_correct = (int)$correct_answer[$i];
					editAnswer($id, $content, $question_id, $is_correct);
				}
			}
			echo '<meta http-equiv="refresh" content="0;url=?act=tables&data=questions">';
			break;
		case 'del_question':
			deleteQuestion($_GET['id']);
			echo '<meta http-equiv="refresh" content="0;url=?act=tables&data=questions">';
			break;
		case 'results':
			$results = getAllResults();
			include 'result/results.php';
			break;
		case 'result_detail':
			$result_detail = getResultDetails($id);
			include 'result/result_detail.php';
			break;
		case 'exams':
			$exams = getAllExams();
			include 'exam/exams.php';
			break;
		case 'exam_detail':
			$exam_detail = getQuestionsByExamId($exam_id);
			include 'exam/exam_detail.php';
			break;
		case 'add_candidate':
			break;
		default:
			$accounts = getAllAccounts();
			$getRole = getRoles();
			$pathImg = '../assets/img/accounts/';
			include 'accounts.php';
			break;
	}
} else {
	$accounts = getAllAccounts();
	$getRole = getRoles();
	$pathImg = '../assets/img/accounts/';
	include 'accounts.php';
}

?>