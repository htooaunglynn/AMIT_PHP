<?php
session_start();
$auth = isset($_SESSION['name']);
include "./partials/header.php";
require "./partials/carousel.php";
?>

	<main>
		<h1>Home Page</h1>
	</main>

	<?php
		if ($auth) {
		echo "Welcome " . $_SESSION['name'];
		} else {
		echo "Welcome Guset";
		}
	?>

<?php
include "./partials/footer.php";
?>