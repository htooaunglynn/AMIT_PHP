<?php
session_start();
include "./db.php";
$errors = [];
include "./partials/header.php";

//
if (isset($_POST['login'])) {
	$email = mysqli_real_escape_string($db_connection, $_POST['email']);
	$password = mysqli_real_escape_string($db_connection, md5($_POST['password']));

	empty($email) ? $errors[] = "email require" : "";
	empty($password) ? $errors[] = "password require" : "";

	$email_check = mysqli_query($db_connection, "SELECT * FROM users WHERE email = '$email'");

	// print_r($email_check);
	// die("Here");

	if (mysqli_num_rows($email_check) > 0) {
		$db_user = mysqli_fetch_assoc($email_check);

		// print_r($login_user);
		// die("HERE");

		$login_email = $db_user['email'];
		$login_password = $db_user['password'];

		if ($email === $login_email && $password === $login_password) {
			$_SESSION['name'] = $db_user['name'];
			header("location: index.php");
		} else {
			$errors[] = "email and password do not match";
		}
	} else {
		$errors[] = "Eamil does not register";
	}
}
?>

	<main>
		<form action="login.php" class="shadow-lg m-auto w-50 p-5 mt-5" method="post">
			<?php
			include "./errors.php";
			?>
			<h1 class="text-center mb-3">Login</h1>
			<div class="mb-3">
				<input type="email" name="email" required class=" form-control py-3" placeholder="Email" autocomplete="off">
			</div>
			<div class="mb-3">
				<input type="password" name="password" required class=" form-control py-3" placeholder="Password" autocomplete="off">
			</div>
			<div class="mb-4">
				<input type="submit" name="login" class="btn btn-lg btn-warning float-end" value="Login">
			</div>
		</form>
	</main>

<?php
include "./partials/footer.php";
?>