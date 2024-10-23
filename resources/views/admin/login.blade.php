<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Laravel Shop :: Administrative Panel</title>
		<!-- Google Font: Inter -->
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
		<!-- Bootstrap 5 -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body class="bg-light">
		<div class="container">
			<div class="row justify-content-center align-items-center min-vh-100">
				<div class="col-md-6 col-lg-5 col-xl-4">
					<div class="card border-0 shadow-lg">
						<div class="card-body p-5">
							<h2 class="text-center mb-4 fw-bold text-primary">Admin Panel</h2>
							<p class="text-center text-muted mb-4">Sign in to start your session</p>
							<form action="dashboard.html" method="post">
								<div class="mb-4">
									<div class="input-group">
										<span class="input-group-text bg-light border-end-0"><i class="fas fa-envelope text-muted"></i></span>
										<input type="email" class="form-control border-start-0 ps-0" placeholder="Email" required>
									</div>
								</div>
								<div class="mb-4">
									<div class="input-group">
										<span class="input-group-text bg-light border-end-0"><i class="fas fa-lock text-muted"></i></span>
										<input type="password" class="form-control border-start-0 ps-0" placeholder="Password" required>
									</div>
								</div>
								<div class="d-grid">
									<button type="submit" class="btn btn-primary py-2 fw-bold">Login</button>
								</div>
							</form>
							<p class="text-center mt-4 mb-0">
								<a href="forgot-password.html" class="text-decoration-none">Forgot your password?</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Bootstrap 5 JS -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>
