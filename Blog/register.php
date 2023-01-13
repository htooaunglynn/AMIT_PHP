<?php
include "./partials/header.php";
?>

	<main>
		<form action="register.php" class="shadow-lg m-auto w-50 p-5" method="post">
			<h1 class="text-center mb-3">Register Form</h1>
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
				<textarea name="address" class="form-control" placeholder="Your Address"></textarea>
			</div>
			<div class="mb-3">
				<input type="submit" name="register" class="btn btn-lg btn-warning float-end">
			</div>
		</form>
	</main>

<?php
include "./partials/footer.php";
?>