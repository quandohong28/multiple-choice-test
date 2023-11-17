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
					<p class="fw-bold text-success mb-2">Đăng ký</p>
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
							<form method="post" action="./index.php?act=signup" data-bs-theme="light" onsubmit="return validateForm()">
								<div class="mb-3">
									<input class="form-control" type="email" name="email" id="email" placeholder="Email">
									<div id="emailError" class="text-danger"></div>
								</div>
								<div class="mb-3">
									<input class="form-control" type="text" name="username" id="username" placeholder="Tên đăng nhập">
									<div id="usernameError" class="text-danger"></div>
								</div>
								<div class="mb-3">
									<input class="form-control" type="password" name="password" id="password" placeholder="Mật khẩu">
									<div id="passwordError" class="text-danger"></div>
								</div>
								<div class="mb-3">
									<input class="form-control" type="password" name="conf_pass" id="conf_pass" placeholder="Nhập lại mật khẩu">
									<div id="confPassError" class="text-danger"></div>
								</div>
								<div class="mb-3">
									<button class="btn btn-primary shadow d-block w-100" type="submit">Đăng ký</button>
								</div>
							</form>
							<p class="text-muted">Bạn đã có tài khoản? <a href="./login.php">Đăng nhập</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<!-- ... -->
	<script>
		function validateForm() {
			var email = document.getElementById("email").value;
			var username = document.getElementById("username").value;
			var password = document.getElementById("password").value;
			var conf_pass = document.getElementById("conf_pass").value;

			var isValid = true;

			// Reset thông báo lỗi
			document.getElementById("emailError").innerHTML = "";
			document.getElementById("usernameError").innerHTML = "";
			document.getElementById("passwordError").innerHTML = "";
			document.getElementById("confPassError").innerHTML = "";

			// Kiểm tra email
			if (!isValidEmail(email)) {
				document.getElementById("emailError").innerHTML = "Email không hợp lệ!";
				isValid = false;
			}

			// Kiểm tra tên đăng nhập
			if (!isValidUsername(username)) {
				document.getElementById("usernameError").innerHTML = "Tên đăng nhập phải từ 3 đến 20 ký tự và chỉ chứa chữ cái, số và dấu gạch dưới!";
				isValid = false;
			}

			// Kiểm tra mật khẩu
			if (!isValidPassword(password)) {
				document.getElementById("passwordError").innerHTML = "Mật khẩu phải từ 8 đến 20 ký tự và chứa ít nhất một chữ cái và một số!";
				isValid = false;
			}

			// Kiểm tra nhập lại mật khẩu
			if (password !== conf_pass) {
				document.getElementById("confPassError").innerHTML = "Nhập lại mật khẩu không khớp!";
				isValid = false;
			}

			return isValid;
		}

		function isValidEmail(email) {
			var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
			return emailRegex.test(email);
		}

		function isValidUsername(username) {
			var usernameRegex = /^[a-zA-Z0-9_]{3,20}$/;
			return usernameRegex.test(username);
		}

		function isValidPassword(password) {
			// Mật khẩu phải từ 8 đến 20 ký tự và chứa ít nhất một chữ cái và một số
			var passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,20}$/;
			return passwordRegex.test(password);
		}
	</script>
</body>

</html>