<?php
$auth = isset($_SESSION['name']);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Shop</title>

    <link rel="stylesheet" type="text/css" href="./partials/css/style.css">

    <link rel="shortcut icon" href="./partials/img/anime.jpg" type="image/x-icon">

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-danger px-5">
          <div class="container-fluid">
            <a class="navbar-brand" href="./index.php">Online Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
              <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <?php if($auth):  ?>
                  <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="">
                        <?php
                        echo $_SESSION['name'];
                        ?>
                      </a>
                    </li>
                  <?php else:  ?>
                    <li class="nav-item dropdown">
                      <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="register.php">Register</a>
                    </li>
                <?php endif ?>
              </ul>
            </div>
          </div>
        </nav>
    </header>