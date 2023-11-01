<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-3 text-gray-800">Danh sách câu hỏi</h1>
</div>

<a class="btn btn-info mb-2" href="?act=tables&data=add_question">Thêm câu hỏi</a>

<?php for ($i = 0; $i < 10; $i++): ?>
    <div class="expandable-container">
        <div id="toggleButton" class="py-2 px-5 mb-3 bg-light text-dark d-flex justify-content-between">
            <div>
                Lorem100
            </div>

            <a class=" btn btn-warning" href="#" data-toggle="modal" data-target="#editquestionmodal">
                <i class="fa-regular fa-pen-to-square"></i>
            </a>
        </div>
        <div class="expandable" style="display:none">
            <!-- Nội dung của thành phần con nằm ở đây -->
            <div class="text-center">
                <img src="../assets/img/landing-page-backgound.avif" class="mb-3" alt="" width="500">
            </div>
            <ul class="list-group list-group-sm px-5 mb-3">

                <li class="list-group-item list-group-item-action text-sm" aria-current="true">
                    The current link item
                </li>
                <li class="list-group-item list-group-item-action text-sm">A second link item</li>
                <li class="list-group-item list-group-item-action text-sm">A third link item</li>
                <li class="list-group-item list-group-item-action text-sm">A fourth link item</li>

            </ul>
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
            if (expandableContents[index].style.display === "none" || expandableContents[index].style.display === "") {
                // Khi ẩn hoặc không hiển thị, thì mở rộng
                expandableContents[index].style.display = "block";
            } else {
                // Khi đã hiển thị, thì thu gọn
                expandableContents[index].style.display = "none";
            }
        });
    });
</script>


<div class="modal fade" id="editquestionmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>