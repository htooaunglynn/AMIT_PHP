<?php
include "./partials/header.php";
?>

	<main>
		<form action="login.php" class="shadow-lg m-auto w-50 p-5 mt-5" method="post">
			<h1 class="text-center mb-3">Login</h1>
			<div class="mb-3">
				<input type="email" name="email" class=" form-control py-3" placeholder="Email" autocomplete="off">
			</div>
			<div class="mb-3">
				<input type="password" name="password" class=" form-control py-3" placeholder="Password" autocomplete="off">
			</div>
			<div class="mb-4">
				<input type="submit" name="login" class="btn btn-lg btn-warning float-end" value="Login">
			</div>
		</form>
	</main>

<?php
include "./partials/footer.php";
?>