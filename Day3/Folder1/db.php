<?php
    if (isset($_POST['login'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $msg = $_POST['message'];
    $password = $_POST['password'];
    $password = sha1(md5($_POST['password']));
    $photo = $_FILES['photo'];
    // print_r($photo);
    // die("here");
    $p_name = $_FILES['photo']['name'];
    $p_tmp_name = $_FILES['photo']['tmp_name'];
    move_uploaded_file($p_tmp_name, "./img/$p_name");
    $skill = $_POST['skills'];
    // print_r($skill);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB</title>
    <link rel="shortcut icon" href="https://images.unsplash.com/photo-1672681373273-64cc9c122df3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" type="image/x-icon">

    <style>

        a {
            text-decoration: none;
            color: black;
            font-size: 1.4rem;
            border: 1px solid black;
            border-radius: 10px;
            padding: 10px 20px;
            position: absolute;
            bottom: 50px;
            right: 100px;
        }

        section > div {
            border: 1px solid black;

            padding: 10px 20px;
            border-radius: 10px;

        }

        section {
            display: flex;
            flex: 1 1 20rem;
            gap: 40px;

            justify-content: space-between;
        }
    </style>
</head>
<body>
    <a href="./index.php">Go to Back</a>

    <section>
        <div class="pro">
        <h1>My Profile</h1>
        <h4> <span>Name:</span> <?php echo $name ?></h4>
        <h4> <span>Email:</span> <?php echo $email ?></h4>
        <h4> <span>Password:</span> <?php echo $password ?></h4>
        <img src="./img/<?= $p_name; ?>" alt="" width="300">
        <h4> <span>Age:</span> <?php echo $age ?></h4>
        <h4> <span>Message:</span> <?php echo $msg ?></h4>
        <p>
            <?php
                foreach ($skill as $key => $value) {
                    echo ++$key . " My hobbies is $value <br>";
                }
            ?>
        </p>
    </div>

    <div class="photo">
        <?php
        $all_pho = scandir("./img");

        for ($i = 2; $i < count($all_pho); $i++) {
            $img = $all_pho[$i];
            echo "<img src='./img/$img' alt='' width='100'>";
        }
        ?>
    </div>
    </section>
</body>
</html>