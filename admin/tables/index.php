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
            <a class="nav-link" id="ex-with-icons-tab-3" data-mdb-toggle="tab" href="?act=tables&data=calendar"
                role="tab" aria-controls="ex-with-icons-tabs-3" aria-selected="false"><i
                    class="fas fa-calendar-days fa-fw me-2"></i>Lịch thi</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="ex-with-icons-tab-3" data-mdb-toggle="tab" href="?act=tables&data=question"
                role="tab" aria-controls="ex-with-icons-tabs-3" aria-selected="false"><i
                    class="fas fa-question fa-fw me-2"></i>Câu
                hỏi</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="ex-with-icons-tab-3" data-mdb-toggle="tab" href="?act=tables&data=" role="tab"
                aria-controls="ex-with-icons-tabs-3" aria-selected="false"><i
                    class="fa-solid fa-square-poll-vertical me-2"></i>Theo
                dõi điểm</a>
        </li>
    </ul>
</div>



<?php
if (isset($_GET['data'])) {
	switch ($_GET['data']) {
		case 'accounts':
			include 'account/account.php';
			break;
		case 'add_account':
			include 'account/add_account.php';
			break;
		case 'edit_account':
			include 'account/edit_account.php';
			break;
		case 'del_account':
			break;
		case 'categories':
			include 'category/category.php';
			break;
		case 'add_category':
			include 'category/add_category.php';
			break;
		case 'edit_category':
			include 'category/edit_category.php';
			break;
		case 'del_category':
			break;
		default:
			include 'account/account.php';
			break;
	}

} else {
	include 'account/account.php';
}

?>