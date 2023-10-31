<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-3 text-gray-800">Danh sách câu hỏi</h1>
</div>

<a class="btn btn-info mb-2" href="?act=tables&data=add_question">Thêm câu hỏi</a>


<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên lịch thi</th>
            <th scope="col">Thời gian bắt đầu</th>
            <th scope="col">Thời gian kết thúc</th>
            <th scope="col">Thời gian làm bài</th>
            <th scope="col">Số lượng đề thi</th>
            <th scope="col">Số lượng thí sinh</th>
            <th scope="col">Chức năng</th>
        </tr>
    </thead>
    <tbody>
        <tr class="">
            <td>R1C1</td>
            <td>R1C2</td>
            <td>R1C3</td>
            <td>R1C3</td>
            <td>R1C3</td>
            <td>R1C3</td>
            <td>R1C3</td>
            <td class="d-flex gap-1">
                <a class="btn btn-success btn-sm" href="?act=tables&data=schedule_detail"><i
                        class="fa-solid fa-circle-info"></i></a>
                <a class="btn btn-warning btn-sm" href="?act=tables&data=edit_schedule"><i
                        class="fa-regular fa-pen-to-square"></i></a>
                <a onclick="return confirm('Bạn có xác nhận xóa ?');" class="btn btn-danger btn-sm"
                    href="?act=tables&data=del_schedule"><i class="fa fa-trash"></i></a>

            </td>
        </tr>
    </tbody>
</table>
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


</div>