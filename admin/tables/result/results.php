<section class="bg-light p-5 rounded-3 mb-5 min-vh-100">
    <h3 class="text-dark text-center mb-5">Danh sách kết quả thi</h3>

    <table class="table table-striped text-center">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">ID bài thi</th>
                <th scope="col">Loại bài thi</th>
                <th scope="col">Họ và tên thí sinh</th>
                <th scope="col">Điểm</th>
                <th scope="col">Thời gian bắt đầu</th>
                <th scope="col">Thời gian làm bài</th>
                <th scope="col">Chức năng</th>
            </tr>
        </thead>
        <?php foreach ($results as $result):
            extract($result);
            list($start_date, $start_time) = explode(" ", $time_start);
            $exam_time_format = date('i:s', strtotime($exam_time));
            ?>
            <tbody>
                <tr class="">
                    <td class="align-middle">
                        <?= $id ?>
                    </td>
                    <td class="align-middle">
                        <?= $exam_code ?>
                    </td>
                    <td class="align-middle">
                        <?= $exam_type ?>
                    </td>
                    <td class="align-middle">
                        <?= $fullname ?>
                    </td>
                    <td class="align-middle">
                        <?= $points ?>
                    </td>
                    <td class="align-middle">
                        <span>
                            <?= 'Ngày : ' . $start_date ?>
                        </span>
                        <br>
                        <span>
                            <?= 'Giờ : ' . $start_time ?>
                        </span>
                    </td>
                    <td class="align-middle">
                        <?= $exam_time_format ?>
                    </td>
                    <td class="align-middle">
                        <a class="btn btn-success btn-sm mx-3" href="?act=tables&data=result_detail&id=<?= $id ?>"><i
                                class="fa-solid fa-circle-info"></i></a>
                    </td>
                </tr>
            </tbody>
        <?php endforeach ?>
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

</section>