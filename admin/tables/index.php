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

include '../model/pdo.php';
include '../model/account.php';
include '../model/category.php';

if (isset($_GET['data'])) {
	switch ($_GET['data']) {
		case 'accounts':
			include 'accounts.php';
			break;
		case 'add_account':
			break;
		case 'edit_account':
			break;
		case 'del_account':
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
				header('location:?act=tables&data=categories');
			}
			break;
		case 'edit_category':
			$id = $_GET['id'];
			$name = $_POST['name'];
			$file = $_FILES['image'];
			$image = $file['name'];
			if (isset($_POST['submit'])) {
				editCategory($id, $name, $image);
				move_uploaded_file($file['tmp_name'], '../assets/img/categories' . $image);
			}
			break;
		case 'del_category':
			$id = $_GET['id'];
			deleteCategory($id);
			// header('location:data=categories');
			break;
		case 'schedules':
			include 'schedules.php';
			break;
		case 'add_schedule':
			break;
		case 'edit_schedule':
			break;
		case 'schedule_detail':
			include 'schedule/schedule_detail.php';
			break;
		case 'del_schedule':
			break;
		case 'questions':
			include 'question/questions.php';
			break;
		case 'add_question':
			include 'question/add_question.php';
			break;
		case 'edit_question':
			include 'question/edit_question.php';
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
			include 'result/edit_result.php';
			break;
		case 'result_detail':
			include 'result/result_detail.php';
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