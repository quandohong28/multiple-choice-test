<section><!-- Start: Features Cards -->


    <div class="row">
        <div class="col-md-8 col-xl-6 text-center mx-auto mb-5">
            <h3 class="fw-bold">Đăng ký thi thử</h3>
        </div>
    </div>
    <div class="container bg-primary-gradient p-lg-5 p-sm-2 mb-5">

        <div class="row">
            <div class="col-md-3">
                <div class="flex-shrink-0 p-3">
                    <ul class="list-unstyled ps-0">
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                                Tất cả
                            </button>
                            <div class="collapse ps-5 show" id="home-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="link-dark">Toán rời rạc</a></li>
                                    <li><a href="#" class="link-dark">Cấu trúc dữ liệu và giải thuật</a></li>
                                    <li><a href="#" class="link-dark">C++</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn">
                                Mới cập nhật
                            </button>
                        </li>
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                                Đang làm
                            </button>
                            <div class="collapse ps-5" id="orders-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="link-dark">Danh sách những bài thi thử đang làm dở...</a></li>
                                    <li><a href="#" class="link-dark">Danh sách những bài thi thử đang làm dở...</a></li>
                                    <li><a href="#" class="link-dark">Danh sách những bài thi thử đang làm dở...</a></li>
                                    <li><a href="#" class="link-dark">Danh sách những bài thi thử đang làm dở...</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="border-top my-3"></li>
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                                Level
                            </button>
                            <div class="collapse ps-5" id="account-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="link-dark">Dễ</a></li>
                                    <li><a href="#" class="link-dark">Trung bình</a></li>
                                    <li><a href="#" class="link-dark">Khó</a></li>
                                    <li><a href="#" class="link-dark">Ác quỷ</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <form class="form mb-4">
                    <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control" placeholder="Tìm kiếm..." aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-primary" type="button" id="button-addon2">Tìm kiếm</button>
                    </div>
                </form>
                <div class="row gy-4 mb-5">
                    <?php for ($i = 0; $i < 10; $i++) : ?>
                        <div class="col-md-6 col-lg-4 project-sidebar-card">
                            <a href="#">
                                <img class="img-fluid image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMJI2BwvnS1HDbk1_TWB9wlaNjmL2y0JlZPfRA5sx7p0LszCRWEAMBVAtb4GN6ErwVibY&usqp=CAU">
                            </a>
                        </div>
                    <?php endfor ?>
                </div>
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
        </div>
    </div>


</section>