<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-3 text-gray-800">Danh sách câu hỏi</h1>
</div>

<a class="btn btn-info mb-2" href="?act=tables&data=add_question" data-toggle="modal"
    data-target="#addquestionmodal">Thêm câu hỏi</a>

<?php for ($i = 0; $i < 10; $i++): ?>
    <div class="expandable-container border border-2 rounded my-3">
        <div id="toggleButton" class="py-2 px-5 bg-light text-dark d-flex justify-content-between">
            <div>
                Lorem100
            </div>
            <a class="btn btn-warning" href="#" data-toggle="modal" data-target="#editquestionmodal">
                <i class="fa-regular fa-pen-to-square"></i>
            </a>
        </div>
        <div class="expandable d-flex justify-content-evenly" style="display:none">
            <!-- Nội dung của thành phần con nằm ở đây -->
            <div>
                <img src="../assets/img/landing-page-backgound.avif" class="my-3 rounded-2" alt="" width="500">
            </div>
            <div class="align-self-center">
                <ul class="list-group list-group-sm p-5">
                    <li class="list-group-item list-group-item-action text-sm active" aria-current="true">
                        The current link item
                    </li>
                    <li class="list-group-item list-group-item-action text-sm">A second link item</li>
                    <li class="list-group-item list-group-item-action text-sm">A third link item</li>
                    <li class="list-group-item list-group-item-action text-sm">A fourth link item</li>
                </ul>
            </div>
        </div>
    </div>
<?php endfor ?>

<nav>
    <ul class="pagination pagination-sm justify-content-end">
        <li class="page-item disabled">
            <a class="page-link px-3">
                <i class="fa-solid fa-caret-left"></i>
            </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
            <a class="page-link px-3" href="#">
                <i class="fa-solid fa-caret-right"></i>
            </a>
        </li>
    </ul>
</nav>

<script>
    const toggleButtons = document.querySelectorAll("#toggleButton");
    const expandableContents = document.querySelectorAll(".expandable");
    toggleButtons.forEach((toggleButton, index) => {
        toggleButton.addEventListener("click", function () {
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
</script>


<!----Thêm câu hỏi & trả lời----->

<form action="" method="post">
    <div class="modal fade" id="addquestionmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm câu hỏi</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="col-11 m-4 text-center">
                    <div class="form-outline">
                        <label class="form-label" for="username">Câu hỏi</label>
                        <textarea type="text" id="username" class="form-control form-control-sm"></textarea>
                    </div>
                </div>
                <div>
                </div>
                <div class="row m-4 text-center gap-5">
                    <label class="form-label" for="answer">Câu trả lời</label>
                    <div class="col-5 d-flex justify-content-between mx-3">
                        <input class="form-check-input" name="correct_answer" type="checkbox" value=""
                            id="flexCheckDefault">
                        <textarea type="text" id="answer" name="answer" class="form-control form-control-sm"></textarea>
                    </div>
                    <div class="col-5 d-flex justify-content-between mx-3">
                        <input class="form-check-input" name="correct_answer" type="checkbox" value=""
                            id="flexCheckDefault">
                        <textarea type="text" id="answer" name="answer" class="form-control form-control-sm"></textarea>
                    </div>
                    <div class="col-5 d-flex justify-content-between mx-3">
                        <input class="form-check-input" name="correct_answer" type="checkbox" value=""
                            id="flexCheckDefault">
                        <textarea type="text" id="answer" name="answer" class="form-control form-control-sm"></textarea>
                    </div>
                    <div class="col-5 d-flex justify-content-between mx-3">
                        <input class="form-check-input" name="correct_answer" type="checkbox" value=""
                            id="flexCheckDefault">
                        <textarea type="text" id="answer" name="answer" class="form-control form-control-sm"></textarea>
                    </div>
                    <div class="col-md-5 mx-3">
                        <label class="form-label select-label" name="question_level_id">Loại câu hỏi</label>
                        <select class="select form-control form-control-sm">
                            <option value="?" name="question_level_id" selected>Chọn loại câu hỏi</option>
                            <option value="0" name="question_level_id">Dễ</option>
                            <option value="1" name="question_level_id">Trung bình</option>
                            <option value="2" name="question_level_id">Khó</option>
                        </select>
                    </div>
                    <div class="col-md-5 mx-3">
                        <label class="form-label select-label" name="id_category">Chuyên mục</label>
                        <select class="select form-control form-control-sm">
                            <option value="?" name="id_category" selected>Chọn chuyên mục</option>
                            <option value="0" name="id_category">Toán rời rạc</option>
                            <option value="1" name="id_category">...</option>
                            <option value="2" name="id_category">...</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-11 m-3 text-center">
                    <div class="form-outline">
                        <label class="form-label" for="avatar">Ảnh</label>
                        <input class="form-control form-control-sm" name="image" id="avatar" type="file" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
                    <a class="btn btn-primary">Xác nhận</a>
                </div>
            </div>
        </div>
    </div>
</form>

<!----Sửa câu hỏi & trả lời----->


<form action="" method="post">
    <div class="modal fade" id="editquestionmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sửa câu hỏi</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="col-11 m-4 text-center">
                    <div class="form-outline">
                        <label class="form-label" for="username">Câu hỏi</label>
                        <textarea type="text" id="username" class="form-control form-control-sm"></textarea>
                    </div>
                </div>
                <div>
                </div>
                <div class="row m-4 text-center gap-5">
                    <label class="form-label" for="answer">Câu trả lời</label>
                    <div class="col-5 d-flex justify-content-between mx-3">
                        <input class="form-check-input" name="correct_answer" type="checkbox" value=""
                            id="flexCheckDefault">
                        <textarea type="text" id="answer" name="answer" class="form-control form-control-sm"></textarea>
                    </div>
                    <div class="col-5 d-flex justify-content-between mx-3">
                        <input class="form-check-input" name="correct_answer" type="checkbox" value=""
                            id="flexCheckDefault">
                        <textarea type="text" id="answer" name="answer" class="form-control form-control-sm"></textarea>
                    </div>
                    <div class="col-5 d-flex justify-content-between mx-3">
                        <input class="form-check-input" name="correct_answer" type="checkbox" value=""
                            id="flexCheckDefault">
                        <textarea type="text" id="answer" name="answer" class="form-control form-control-sm"></textarea>
                    </div>
                    <div class="col-5 d-flex justify-content-between mx-3">
                        <input class="form-check-input" name="correct_answer" type="checkbox" value=""
                            id="flexCheckDefault">
                        <textarea type="text" id="answer" name="answer" class="form-control form-control-sm"></textarea>
                    </div>
                    <div class="col-md-5 mx-3">
                        <label class="form-label select-label" name="question_level_id">Loại câu hỏi</label>
                        <select class="select form-control form-control-sm">
                            <option value="?" name="question_level_id" selected>Chọn loại câu hỏi</option>
                            <option value="0" name="question_level_id">Dễ</option>
                            <option value="1" name="question_level_id">Trung bình</option>
                            <option value="2" name="question_level_id">Khó</option>
                        </select>
                    </div>
                    <div class="col-md-5 mx-3">
                        <label class="form-label select-label" name="id_category">Chuyên mục</label>
                        <select class="select form-control form-control-sm">
                            <option value="?" name="id_category" selected>Chọn chuyên mục</option>
                            <option value="0" name="id_category">Toán rời rạc</option>
                            <option value="1" name="id_category">...</option>
                            <option value="2" name="id_category">...</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-11 m-3 text-center">
                    <div class="form-outline">
                        <label class="form-label" for="avatar">Ảnh</label>
                        <input class="form-control form-control-sm" name="image" id="avatar" type="file" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
                    <a class="btn btn-primary">Xác nhận</a>
                </div>
            </div>
        </div>
    </div>
</form>