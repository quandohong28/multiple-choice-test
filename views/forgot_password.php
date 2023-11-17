<head>
	<title>Trang chủ</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS v5.2.1 -->
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css?h=a36b09c30de7308fcdcc873e9287b73a">
	<link rel="stylesheet" href="../assets/css/styles.min.css?h=5623086526452171cd4d963de7cb2c74">
	<!-- CSS thuần -->
	<link rel="stylesheet" href="../assets/css/styles.user.css">
	<!-- font-awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="mt-5 pt-5">
	<main>
		<div class="container">
			<div class="row mb-4 mb-lg-5">
				<div class="col-md-8 col-xl-6 text-center mx-auto">
					<p class="fw-bold text-success mb-2">Quên mật khẩu</p>
					<h2 class="fw-bold">Chào mừng</h2>
				</div>
			</div>
			<div class="row d-flex justify-content-center">
				<div class="col-md-6 col-xl-4">
					<div class="card">
						<div class="card-body text-center d-flex flex-column align-items-center">
							<div class="bs-icon-xl bs-icon-circle bs-icon-primary shadow bs-icon my-4">
								<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
									<path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"></path>
								</svg>
							</div>
							<form method="post" data-bs-theme="light" class="" onsubmit="return validateForm()">
								<div class="input-group mb-3">
									<input class="form-control" type="email" name="email" id="email" placeholder="Email đăng ký">
									<button class="btn btn-sm btn-primary rounded-end" type="button" onclick="sendEmail()">Nhận email</button>
								</div>
							</form>
							<div id="emailError" class="text-danger mb-5"></div>
							<p class="text-muted">Bạn đã có tài khoản? <a href="./login.php">Đăng nhập</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
	<script src="../assets/js/script.min.js?h=4733a5aa722c9ef5669b270bcebbcdbf"></script>
	<script>
		function sendEmail() {
			var email = document.getElementById("email").value;

			if (isValidEmail(email)) {
				document.getElementById("emailError").innerHTML = "";
				document.getElementById("forgotPasswordMessage").innerHTML = "Email đã được gửi thành công!";
			} else {
				document.getElementById("emailError").innerHTML = "Email không hợp lệ!";
				document.getElementById("forgotPasswordMessage").innerHTML = "";
			}
		}

		function isValidEmail(email) {
			var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
			return emailRegex.test(email);
		}

		function validateForm() {
			var email = document.getElementById("email").value;

			if (!isValidEmail(email)) {
				document.getElementById("emailError").innerHTML = "Email không hợp lệ!";
				return false;
			}

			// Các kiểm tra khác có thể được thêm ở đây cho các trường khác
			// Nếu tất cả các kiểm tra đều qua, hàm trả về true để cho phép submit form
			return true;
		}
	</script>
</body>

</html>