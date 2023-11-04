<section><!-- Start: Features Cards -->
    <div class="container bg-primary-gradient p-lg-5 p-sm-2 mb-5 rounded">
        <div class="row">
            <div class="col-md-8 col-xl-6 text-center mx-auto mb-5">
                <h3 class="fw-bold">Đăng ký thi thử</h3>
            </div>
        </div>
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
                                    <?php foreach ($categories as $category) :
                                        extract($category);
                                    ?>
                                        <li><a href="#" class="link-dark">• <?= $name ?></a></li>
                                    <?php endforeach ?>
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
                                    <?php foreach ($question_levels as $level) : ?>
                                        <li class="">
                                            <a href="#" class=" badge py-2 px-3 mb-2
                                            <?php
                                            switch ($level['level']) {
                                                case 'Dễ':
                                                    echo 'bg-success';
                                                    break;
                                                case 'Trung bình':
                                                    echo 'bg-warning';
                                                    break;
                                                case 'Khó':
                                                    echo 'bg-danger';
                                                    break;
                                                default:
                                                    break;
                                            }
                                            ?>">
                                                <?= $level['level'] ?>
                                            </a>
                                        </li>
                                    <?php endforeach ?>
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

                <div class="mb-5">
                    <div class="row gx-5">
                        <div class="">
                            <!-- Chuyên mục -->
                            <?php foreach ($categories as $category) :
                                extract($category);
                                $category_image = '../assets/img/categories/';
                                $quantity = getQuantityOfQuestions($id);
                            ?>

                                <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                    <div class="card-body p-0">
                                        <div class="d-flex align-items-start justify-content-between">
                                            <div class="p-5">
                                                <h5 class="fw-bolder"><?= $name ?></h5>
                                                <ul>
                                                    <li><?= $quantity['value'] ?> câu hỏi khác nhau</li>
                                                    <li>
                                                        <?php foreach ($question_levels as $level) : ?>
                                                            <span class="badge <?php
                                                                                switch ($level['level']) {
                                                                                    case 'Dễ':
                                                                                        echo 'bg-success';
                                                                                        break;
                                                                                    case 'Trung bình':
                                                                                        echo 'bg-warning';
                                                                                        break;
                                                                                    case 'Khó':
                                                                                        echo 'bg-danger';
                                                                                        break;
                                                                                    default:
                                                                                        break;
                                                                                }
                                                                                ?>"><?= $level['level'] ?></span>
                                                        <?php endforeach ?>
                                                    </li>
                                                </ul>
                                            </div>
                                            <img class="img-fluid image col-7" src="<?= $category_image . $image ?>" alt="..." />
                                        </div>
                                    </div>
                                </div>

                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
                <!-- pagination -->
                <nav>
                    <?php include "./user/components/pagination.php" ?>
                </nav>
            </div>
        </div>
    </div>


</section>