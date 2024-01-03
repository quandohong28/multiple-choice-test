<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Danh sách câu hỏi</h6>
    </div>

    <div class="card-body">
        <div class="row mb-3">
            <form method="post" role="form" class="filter-panel">
                <div class="row align-items-end me-1">
                    <div class="col-md-3 form-group">
                        <label>Sắp xếp theo</label>
                        <select name="filterByCategory" class="form-control form-control-sm"> DESC
                            <option value="id" selected>ID</option>
                            <option value="question">Câu hỏi</option>
                        </select>
                    </div>
                    <div class="col-md-3 form-group">
                        <label>Cách sắp xếp</label>
                        <select name="filterByLetter" class="form-control form-control-sm">
                            <option value="a-z" selected>A-Z</option>
                            <option value="z-a">Z-A</option>
                        </select>
                    </div>
                    <div class="col-md-3 form-group">
                        <label>Tìm kiếm</label>
                        <input type="text" name="search" class="form-control form-control-sm">
                    </div>
                    <div class="col-md-3 form-group ">
                        <div class="row">
                            <button name="filter" class="btn btn-sm btn-info me-3 col">
                                <i class="fa fa-fw fa-search fs-6 me-2"></i>
                                <span class="lg-hidden">Tìm kiếm</span>
                            </button>
                            <button type="reset" class="btn btn-sm btn-outline-dark col">
                                <i class="fa-regular fa-fw fa-window-restore"></i>
                                <span class="lg-hidden">Mặc định</span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="row mb-3">
            <div class="col">
                <?php include 'components/data_export.php' ?>
            </div>
        </div>
        <div class="container-fuild">
            <?php foreach ($questions as $key => $value) :
                $answers = getAnswersByQuestionId($value['question_id']);
            ?>

                <div class="expandable-container border border-2 rounded my-3">
                    <div class="py-2 px-5 bg-light text-dark d-flex justify-content-between user-select-none">
                        <div id="toggleButton" class="content">
                            <span class="fw-bold">Câu hỏi <?= $key + 1 ?>: </span>
                            <span><?= $value['question_content'] ?></span>
                            <span class="level badge"><?= $value['level']?></span>
                        </div>
                    </div>
                    <div class="expandable" style="display:none">
                        <div class="d-flex justify-content-center ps-5 py-3">
                            <ul class="list-group col-5 user-select-none">
                                <?php foreach ($answers as $answer) : ?>
                                    <li class="list-group-item list-group-item-action text-sm <?= $answer['is_correct'] == 1 ? 'active' : '' ?>">
                                        <span><?= $answer['content'] ?></span>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <!-- <ul class="pagination pagination-sm justify-content-end">
            <li class="page-item disabled">
                <a class="page-link px-3">
                    <i class="fa-solid fa-caret-left"></i>
                </a>
            </li>
            <?php
            $currentURL = "index.php?act=tables&data=questions";
            $amountPage = ceil(count(getAllQuestions()) / 10);
            for ($page = 1; $page <= $amountPage; $page++) :
            ?>
                <li class="page-item"><a class="page-link" href="<?= $currentURL . "&page=$page" ?>"><?= $page ?></a></li>
            <?php endfor; ?>
            <li class="page-item">
                <a class="page-link px-3" href="#">
                    <i class="fa-solid fa-caret-right"></i>
                </a>
            </li>
        </ul> -->
    </div>
    <!----Thêm câu hỏi & trả lời----->
    <?php include 'modals/addquestionmodal.php' ?>

    <!----Sửa câu hỏi & trả lời----->
    <?php include 'modals/editquestionmodal.php' ?>
</div>

<script>
    const toggleButtons = document.querySelectorAll("#toggleButton");
    const expandableContents = document.querySelectorAll(".expandable");
    toggleButtons.forEach((toggleButton, index) => {
        toggleButton.addEventListener("click", function() {
            if (expandableContents[index].style.display === "none" || expandableContents[index].style
                .display === "") {
                // Khi ẩn hoặc không hiển thị, thì mở rộng
                expandableContents[index].style.display = "block";
            } else {
                // Khi đã hiển thị, thì thu gọn
                expandableContents[index].style.display = "none";
            }
        });
    });

    // Xử lý hiển thị độ khó câu hỏi
    const levels = document.querySelectorAll(".level");
    levels.forEach(level => {
        if (level.textContent === "1") {
            level.textContent = "Dễ";
            level.classList.add("bg-success");
        } else if (level.textContent === "2") {
            level.textContent = "Trung bình";
            level.classList.add("bg-warning");
        } else {
            level.textContent = "Khó";
            level.classList.add("bg-danger");
        }
    });
</script>