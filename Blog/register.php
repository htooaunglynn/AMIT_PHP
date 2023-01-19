<?php

$errors = [];

include "./db.php";
include "./partials/header.php";

// 
if (isset($_POST['register'])) {
	$name = mysqli_real_escape_string($db_connection, $_POST['name']);
	$email = mysqli_real_escape_string($db_connection, $_POST['email']);
	$password = mysqli_real_escape_string($db_connection, md5($_POST['password']));
	$phone = mysqli_real_escape_string($db_connection, $_POST['phone']);
	$city = mysqli_real_escape_string($db_connection, $_POST['city']);

	empty($name) ? $errors[] = "Name require" : "";
	empty($email) ? $errors[] = "email require" : "";
	empty($password) ? $errors[] = "password require" : "";
	empty($phone) ? $errors[] = "phone require" : "";
	empty($city) ? $errors[] = "city require" : "";

	$email_check = mysqli_query($db_connection, "SELECT * FROM users WHERE email = '$email'");

	// print_r(mysqli_num_rows($email_check));
	// die("Here");

	if (mysqli_num_rows($email_check) > 0) {
		$errors[] = "Email already exist";
	} else {
		$new_user = mysqli_query($db_connection, "INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `phone`, `city`, `created_date`, `updated_date`) VALUES (null ,'$name','$email','$password','$phone','$city', now(), now())");

		if ($new_user) {
			header("location: ./login.php");
		}
	}
}
?>

	<main>
		<form action="register.php" class="shadow-lg m-auto w-50 p-5" method="post">
			<h1 class="text-center mb-3">Register Form</h1>
			<?php
			include "./errors.php";
			?>
			<div class="mb-3">
				<input type="text" class="form-control  py-3" name="name" placeholder="Your Name">
			</div>
			<div class="mb-3">
				<input type="email" name="email" class=" form-control py-3" placeholder="Email" autocomplete="off">
			</div>
			<div class="mb-3">
				<input type="password" name="password" class=" form-control py-3" placeholder="Password" autocomplete="off">
			</div>
			<div class="mb-3">
				<input type="text" name="phone" class=" form-control py-3" placeholder="Phone">
			</div>
			<div class="mb-3">
				<textarea name="city" class="form-control" placeholder="Your city"></textarea>
			</div>
			<div class="mb-3">
				<input type="submit" name="register" class="btn btn-lg btn-warning float-end">
			</div>
		</form>
	</main>


<?php
include "./partials/footer.php";
?>