<?php
$teams = [
    [
        'fullname' => 'Đỗ Hồng Quân',
        'image_url' => 'https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-6/345202027_189994030631781_283479889532429484_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=783fdb&_nc_eui2=AeEGtW1AXp3ul9m2FFMIMjuQMdI4QLPzWpwx0jhAs_NanGfmxYUZu1ceEADZhe2Bp8j2Gu-fYHp3xGrwzCvUU8Az&_nc_ohc=vTWZNhimAAgAX_Ug3Hr&_nc_ht=scontent.fhan14-2.fna&oh=00_AfBvs7skr1nOrCwQx-jbGg7dHFkFw1taTPffVeivbyah3A&oe=658CE225',
        'job_title' => 'Developer',
        'bio' => 'Người đẹp trai nhất TEAM và cũng là người đẹp trai nhất thế giới',
    ],
    [
        'fullname' => 'Trần Chung Hiếu',
        'image_url' => 'https://scontent.fhan14-4.fna.fbcdn.net/v/t39.30808-6/413014775_330809436547663_3699078200550012817_n.jpg?stp=dst-jpg_s1080x2048&_nc_cat=109&ccb=1-7&_nc_sid=3635dc&_nc_ohc=2GKILSf4O34AX_GNORJ&_nc_ht=scontent.fhan14-4.fna&oh=00_AfC-pBQzd2sOBReoRP5qzx54cQfFQhycU1oMVJBYZsNs1Q&oe=658AFCC0',
        'job_title' => 'Tester, Designer, Developer',
        'bio' => 'Chăm chỉ, nhiệt tình, thân thiện, hòa đồng, dễ gần, dễ thương',
    ],
    [
        'fullname' => 'Lê Văn Thành',
        'image_url' => 'https://scontent.fhan14-3.fna.fbcdn.net/v/t39.30808-1/370569092_328953836229426_854951388401401113_n.jpg?stp=dst-jpg_p100x100&_nc_cat=104&ccb=1-7&_nc_sid=5740b7&_nc_ohc=szlf19molOoAX9U638k&_nc_ht=scontent.fhan14-3.fna&oh=00_AfDrM6TSyGuDoyxGFDww8rp-sqzUTrf-Vb4Oewq8derNIg&oe=658C23B7',
        'job_title' => 'Developer, Team Leader',
        'bio' => 'Hài hước, vui tính, thân thiện, hòa đồng, dễ gần, dễ thương',
    ],
]
?>

<section">
    <div class="bg-primary-gradient py-5 rounded">
        <div class="row">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <p class="fw-bold">
                    <span>Xin chào</span>
                    <a href="?act=profile" class="text-success mb-2 text-decoration-none"><?= $_SESSION['user']['fullname'] ?></a>
                </p>
                <h3 class="fw-bold">Nội dung cập nhật</h3>
            </div>
        </div>
        <div class="py-5 p-lg-5">
            <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
                <div class="col mb-5">
                    <div class="card shadow-sm">
                        <div class="card-body shadow rounded px-4 py-5 px-md-5">
                            <div class="bs-icon-lg d-flex justify-content-center align-items-center mb-3 bs-icon" style="top: 1rem;right: 1rem;position: absolute;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bell text-success">
                                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z">
                                    </path>
                                </svg></div>
                            <h5 class="fw-bold card-title">Lịch thi</h5>
                            <p class="text-muted card-text mb-4">Lịch thi là tài liệu chứa thông tin về thời gian, hình thức và các chuyên mục mà các bạn cần tham gia.</p>
                            <a href="?act=schedule" class="btn btn-sm btn-outline-dark shadow">Chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card shadow-sm">
                        <div class="card-body shadow rounded px-4 py-5 px-md-5">
                            <div class="bs-icon-lg d-flex justify-content-center align-items-center mb-3 bs-icon" style="top: 1rem;right: 1rem;position: absolute;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bezier text-success">
                                    <path fill-rule="evenodd" d="M0 10.5A1.5 1.5 0 0 1 1.5 9h1A1.5 1.5 0 0 1 4 10.5v1A1.5 1.5 0 0 1 2.5 13h-1A1.5 1.5 0 0 1 0 11.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm10.5.5A1.5 1.5 0 0 1 13.5 9h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM6 4.5A1.5 1.5 0 0 1 7.5 3h1A1.5 1.5 0 0 1 10 4.5v1A1.5 1.5 0 0 1 8.5 7h-1A1.5 1.5 0 0 1 6 5.5v-1zM7.5 4a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z">
                                    </path>
                                    <path d="M6 4.5H1.866a1 1 0 1 0 0 1h2.668A6.517 6.517 0 0 0 1.814 9H2.5c.123 0 .244.015.358.043a5.517 5.517 0 0 1 3.185-3.185A1.503 1.503 0 0 1 6 5.5v-1zm3.957 1.358A1.5 1.5 0 0 0 10 5.5v-1h4.134a1 1 0 1 1 0 1h-2.668a6.517 6.517 0 0 1 2.72 3.5H13.5c-.123 0-.243.015-.358.043a5.517 5.517 0 0 0-3.185-3.185z">
                                    </path>
                                </svg></div>
                            <h5 class="fw-bold card-title">Theo dõi điểm</h5>
                            <p class="text-muted card-text mb-4">Theo dõi điểm là quá trình ghi nhận điểm số từ bài kiểm tra và bài tập để đánh giá hiệu suất học tập của bạn</p>
                            <a href="?act=result" class="btn btn-sm btn-outline-dark shadow">Chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body shadow rounded px-4 py-5 px-md-5">
                            <div class="bs-icon-lg d-flex justify-content-center align-items-center mb-3 bs-icon" style="top: 1rem;right: 1rem;position: absolute;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-pin-angle text-success">
                                    <path d="M9.828.722a.5.5 0 0 1 .354.146l4.95 4.95a.5.5 0 0 1 0 .707c-.48.48-1.072.588-1.503.588-.177 0-.335-.018-.46-.039l-3.134 3.134a5.927 5.927 0 0 1 .16 1.013c.046.702-.032 1.687-.72 2.375a.5.5 0 0 1-.707 0l-2.829-2.828-3.182 3.182c-.195.195-1.219.902-1.414.707-.195-.195.512-1.22.707-1.414l3.182-3.182-2.828-2.829a.5.5 0 0 1 0-.707c.688-.688 1.673-.767 2.375-.72a5.922 5.922 0 0 1 1.013.16l3.134-3.133a2.772 2.772 0 0 1-.04-.461c0-.43.108-1.022.589-1.503a.5.5 0 0 1 .353-.146zm.122 2.112v-.002.002zm0-.002v.002a.5.5 0 0 1-.122.51L6.293 6.878a.5.5 0 0 1-.511.12H5.78l-.014-.004a4.507 4.507 0 0 0-.288-.076 4.922 4.922 0 0 0-.765-.116c-.422-.028-.836.008-1.175.15l5.51 5.509c.141-.34.177-.753.149-1.175a4.924 4.924 0 0 0-.192-1.054l-.004-.013v-.001a.5.5 0 0 1 .12-.512l3.536-3.535a.5.5 0 0 1 .532-.115l.096.022c.087.017.208.034.344.034.114 0 .23-.011.343-.04L9.927 2.028c-.029.113-.04.23-.04.343a1.779 1.779 0 0 0 .062.46z">
                                    </path>
                                </svg></div>
                            <h5 class="fw-bold card-title">Bộ đề ôn tập</h5>
                            <p class="text-muted card-text mb-4">Bộ đề ôn tập là tài liệu chứa các câu hỏi và bài tập dành giúp bạn để chuẩn bị cho kỳ thi hoặc kiểm tra.</p>
                            <a href="?act=review_questions" class="btn btn-sm btn-outline-dark shadow">Chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body shadow rounded px-4 py-5 px-md-5">
                            <div class="bs-icon-lg d-flex justify-content-center align-items-center mb-3 bs-icon" style="top: 1rem;right: 1rem;position: absolute;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-chat-quote text-success">
                                    <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z">
                                    </path>
                                    <path d="M7.066 6.76A1.665 1.665 0 0 0 4 7.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 0 0 .6.58c1.486-1.54 1.293-3.214.682-4.112zm4 0A1.665 1.665 0 0 0 8 7.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 0 0 .6.58c1.486-1.54 1.293-3.214.682-4.112z">
                                    </path>
                                </svg></div>
                            <h5 class="fw-bold card-title">Thông tin phúc khảo</h5>
                            <p class="text-muted card-text mb-4">Thông tin phúc khảo liên quan đến quá trình bạn yêu cầu kiểm tra lại kết quả hoặc điểm số sau khi kết quả đã được công bố.</p>
                            <a href="?act=support" class="btn btn-sm btn-outline-dark shadow">Trợ giúp</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="col-md-8 col-xl-6 text-center mx-auto my-5">
            <h3 class="fw-bold">Chuyên mục</h3>
        </div>

        <div class="container py-5">
            <div class="mx-auto">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 d-flex justify-content-center">
                    <?php foreach ($categories as $category) :
                    ?>
                        <div class="card text-dark bg-white mb-5 category-card">
                            <img height="200px" class="card-img-top rounded" src="../assets/img/categories/<?= $category['image'] ?>" alt="<?= $category['name'] ?>" />
                            <div class="card-body text-center">
                                <h6 class="card-title fw-bold"><?= $category['name'] ?></h6>
                                <button class="btn btn-sm btn-outline-dark" type="button"><small>Xem chi tiết</small></button>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div><!-- End: Features Cards -->
    </section>
    <section class="py-5 mt-5">
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h3 class="fw-bold">Các câu hỏi thường gặp</h3>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 d-sm-flex justify-content-sm-center">
                <div class="col mb-4">
                    <p class="rounded p-4 shadow">Nisi sit justo faucibus nec ornare amet, tortor torquent. Blandit class dapibus, aliquet morbi.</p>
                </div>
                <div class="col mb-4">
                    <p class="rounded p-4 shadow">Nisi sit justo faucibus nec ornare amet, tortor torquent. Blandit class dapibus, aliquet morbi.</p>
                </div>
                <div class="col mb-4">
                    <p class="rounded p-4 shadow">Nisi sit justo faucibus nec ornare amet, tortor torquent. Blandit class dapibus, aliquet morbi.</p>
                </div>
            </div>
        </div><!-- End: Testimonials -->
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <p class="fw-bold text-success mb-2">Liên hệ trực tiếp</p>
                    <h2 class="fw-bold">Bạn không tìm thấy vấn đề đang gặp phải?</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div>
                        <form class="p-3 p-xl-4" method="post" data-bs-theme="light" id="form-support">
                            <div class="mb-3 form-group">
                                <input id="fullname" class="form-control" type="text" name="name" placeholder="Họ và tên" value="<?= $_SESSION['user']['fullname'] ?>">
                                <span class="form-message text-danger"></span>
                            </div>
                            <div class="mb-3 form-group">
                                <input id="email" class="form-control" type="email" name="email" placeholder="Email" value="<?= $_SESSION['user']['email'] ?>">
                                <span class="form-message text-danger"></span>
                            </div><!-- End: Error Example -->
                            <div class="mb-3 form-group">
                                <textarea id="message" class="form-control" name="message" rows="6" placeholder="Miêu tả cho chúng tôi vấn đề của bạn"></textarea>
                                <span class="form-message text-danger"></span>
                            </div>
                            <div>
                                <button class="btn btn-primary shadow d-block w-100" type="submit">Gửi</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 col-xl-4 d-flex justify-content-center justify-content-xl-start">
                    <div class="d-flex flex-wrap flex-md-column justify-content-md-start align-items-md-start h-100">
                        <a href="tel:0326239019" class="d-flex align-items-center p-3">
                            <div class="bs-icon-md bs-icon-circle bs-icon-primary shadow d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon bs-icon-md">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-telephone">
                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z">
                                    </path>
                                </svg>
                            </div>
                            <div class="px-2">
                                <h6 class="fw-bold mb-0">Phone</h6>
                                <p class="text-muted mb-0">0326239019</p>
                            </div>
                        </a>
                        <a href="mailto:techquizhero@gmail.com" class="d-flex align-items-center p-3">
                            <div class="bs-icon-md bs-icon-circle bs-icon-primary shadow d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon bs-icon-md">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z">
                                    </path>
                                </svg>
                            </div>
                            <div class="px-2">
                                <h6 class="fw-bold mb-0">Email</h6>
                                <p class="text-muted mb-0">techquizhero@gmail.com</p>
                            </div>
                        </a>
                        <a href="https://maps.app.goo.gl/4Jyap5VWqkffB95h9" target="_blank" class="d-flex align-items-center p-3">
                            <div class="bs-icon-md bs-icon-circle bs-icon-primary shadow d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon bs-icon-md">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-pin">
                                    <path d="M4.146.146A.5.5 0 0 1 4.5 0h7a.5.5 0 0 1 .5.5c0 .68-.342 1.174-.646 1.479-.126.125-.25.224-.354.298v4.431l.078.048c.203.127.476.314.751.555C12.36 7.775 13 8.527 13 9.5a.5.5 0 0 1-.5.5h-4v4.5c0 .276-.224 1.5-.5 1.5s-.5-1.224-.5-1.5V10h-4a.5.5 0 0 1-.5-.5c0-.973.64-1.725 1.17-2.189A5.921 5.921 0 0 1 5 6.708V2.277a2.77 2.77 0 0 1-.354-.298C4.342 1.674 4 1.179 4 .5a.5.5 0 0 1 .146-.354zm1.58 1.408-.002-.001.002.001zm-.002-.001.002.001A.5.5 0 0 1 6 2v5a.5.5 0 0 1-.276.447h-.002l-.012.007-.054.03a4.922 4.922 0 0 0-.827.58c-.318.278-.585.596-.725.936h7.792c-.14-.34-.407-.658-.725-.936a4.915 4.915 0 0 0-.881-.61l-.012-.006h-.002A.5.5 0 0 1 10 7V2a.5.5 0 0 1 .295-.458 1.775 1.775 0 0 0 .351-.271c.08-.08.155-.17.214-.271H5.14c.06.1.133.191.214.271a1.78 1.78 0 0 0 .37.282z">
                                    </path>
                                </svg>
                            </div>
                            <div class="px-2">
                                <h6 class="fw-bold mb-0">Địa chỉ</h6>
                                <p class="text-muted mb-0">Toà nhà FPT đường Trịnh Văn Bô, Phương Canh, Nam Từ Liêm, Hà Nội</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="m-5">
                    <div class="row m-5">
                        <div class="col-md-8 col-xl-6 text-center mx-auto">
                            <h2 class="fw-bold">Team</h2>
                        </div>
                    </div>
                    <div class="row">
                        <?php foreach ($teams as $member) : ?>
                            <div class="col-lg-6 col-12">
                                <div class="card card-profile overflow-hidden">
                                    <div class="row row-cols-2 justify-content-center align-items-center">
                                        <div class="col">
                                            <a href="javascript:;">
                                                <div class="p-5">
                                                    <img class="rounded-circle object-fit-cover" src="<?= $member['image_url']?>" alt="image" height="200px" width="200px">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <div class="card-body">
                                                <h5 class="mb-0"><?= $member['fullname']?></h5>
                                                <h6 class="text-info"><?= $member['job_title']?></h6>
                                                <p class="mb-0"><?= $member['bio']?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </section>

    <script>
        // Validate form
        document.addEventListener('DOMContentLoaded', function() {
            Validator({
                form: '#form-support',
                formGroupSelector: '.form-group',
                errorSelector: '.form-message',
                rules: [
                    Validator.isRequired('#fullname', 'Vui lòng nhập đầy đủ họ và tên'),
                    Validator.isRequired('#email', 'Vui lòng nhập email'),
                    Validator.isEmail('#email', 'Email không hợp lệ'),
                    Validator.isRequired('#message', 'Vui lòng mô tả vấn đề của bạn'),
                ]
            });
        });
    </script>