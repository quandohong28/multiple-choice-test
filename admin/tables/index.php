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
	</ul>
</div>



<?php
// Include Model
include '../model/pdo.php';
include '../model/account.php';
include '../model/category.php';

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
			// include 'account/add_account.php';	
			break;
		case 'edit_account':
			$id = $_GET['id'];
			editAccount($id, $fullname, $avatar, $email, $address, $tel);
			// include 'account/edit_account.php';
			break;
		case 'del_account':
			// header('location: ?act=tables&data=accounts');
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
				// header('location:index.php?act=tables&data=categories');
			}
			break;
		case 'edit_category':
			$id = $_GET['id'];
			$name = $_POST['name'];
			$file = $_FILES['image'];
			$image = $file['name'];
			editCategory($id, $name, $image);
			move_uploaded_file($file['tmp_name'], '../assets/img/categories' . $image);
			break;
		case 'del_category':
			$id = $_GET['id'];
			deleteCategory($id);
			// header('location:data=categories');
			break;
		case 'schedules':
			include 'schedule/schedules.php';
			break;
		case 'add_schedule':
			include 'schedule/add_schedule.php';
			break;
		case 'edit_schedule':
			include 'schedule/edit_schedule.php';
			break;
		case 'schedule_detail':
			include 'schedule/schedule_detail.php';
			break;
		case 'del_schedule':
			break;
		case 'questions':
			include 'questions.php';
			break;
		case 'add_question':
			break;
		case 'edit_question':
			break;
		case 'del_question':
			break;
		case 'results':
			include 'result/results.php';
			break;
		case 'add_result':
			include 'result/add_result.php';
			break;
		case 'edit_result':
			break;
		case 'result_detail':
			break;
		case 'del_result':
			break;
		default:
			include 'account/accounts.php';
			break;
	}
} else {
	include 'account/accounts.php';
}

?>