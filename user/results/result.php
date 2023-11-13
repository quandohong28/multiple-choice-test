<section class="filter px-5 py-3 bg-white shadow rounded">
    <?php include "components/data_export.php" ?>
    <span><i class="fa-solid fa-table me-3"></i></span>
    <span>Bảng điểm chung</span>
    <hr>
    <table class="table table-sm table-bordered align-middle text-center my-5">
        <thead>
            <tr>
                <th class="small p-2" scope="col">
                    <a href="?act=result&sortbyindex">
                        STT
                        <span class="ms-2"><i class="fa-solid fa-sort"></i></span>
                    </a>
                </th>
                <th class="small p-2" scope="col">
                    <a href="?act=result&sortbydate">
                        Tên bài thi
                        <span class="ms-2"><i class="fa-solid fa-sort"></i></span>
                    </a>
                </th>
                <th class="small p-2" scope="col">
                    <a href="?act=result&sortbylocation">
                        Điểm
                        <span class="ms-2"><i class="fa-solid fa-sort"></i></span>
                    </a>
                </th>
                <th class="small p-2" scope="col">
                    <a href="?act=result&sortbyindex">
                        Hình thức
                        <span class="ms-2"><i class="fa-solid fa-sort"></i></span>
                    </a>
                </th>
                <th class="small p-2" scope="col">
                    <a href="?act=result&sortbyindex">
                        Trạng thái
                        <span class="ms-2"><i class="fa-solid fa-sort"></i></span>
                    </a>
                </th>
                <th class="small p-2" scope="col">Chức năng</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 0; $i < 10; $i++) : ?>
                <tr>
                    <td class="py-3" scope="row"><?php echo $i + 1; ?></td>
                    <td class="py-3">Cấu trúc dữ liệu và giải thuật nâng cao</td>
                    <td class="py-3">9</td>
                    <td class="py-3">Thi thử</td>
                    <td class="py-3">Đạt</td>
                    <td class="small" class="">
                        <a href="?act=result_detail" class="badge bg-info p-2">
                            <i class="fa-solid fa-circle-info fa-xl me-2"></i>
                            Chi tiết
                        </a>
                    </td>
                </tr>
            <?php endfor; ?>

            
        </tbody>
    </table>

    <!-- pagination -->
    <?php include "components/pagination.php" ?>

</section>