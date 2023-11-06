<section class="filter px-5 py-3 bg-white shadow rounded">
    <?php include "./user/components/data_export.php" ?>
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
                        Phân loại
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
                    <td class="py-3">fasfdsloremloremloremloremlorem</td>
                    <td class="py-3">9</td>
                    <td class="py-3">fasnfdkedskfhkasdf</td>
                    <td class="py-3">Dat</td>
                    <td class="py-3">
                        <a href="?act=result&nav=detail_exam" class="badge bg-primary">Xem chi tiết</a>
                    </td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>

    <!-- pagination -->
    <?php include "./user/components/pagination.php" ?>

</section>