<?php
    $auth = isset($_COOKIE['email']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    <?php if ($auth) : ?>
        <div>
            <h1>Welcome Member</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor a, distinctio ad minus architecto quidem veniam ducimus reprehenderit ipsam, illo tenetur consequuntur. Cum facere obcaecati amet quisquam molestiae deserunt quia et assumenda sit vitae harum quasi vero modi hic accusamus voluptatem, doloremque nam. Voluptas sapiente illo aut molestias labore provident voluptates eos ex architecto ipsum? Fuga voluptatem officia dolor ad laborum saepe fugiat. Quis consequuntur unde nam repellat. Voluptate ex dolore excepturi autem non modi, iusto debitis dolor nesciunt qui distinctio enim? Eligendi explicabo id iste officiis dignissimos totam, quae laudantium ullam similique ut minus incidunt sed doloremque cupiditate voluptates aperiam sit quasi vero! Adipisci harum dolore corporis magni temporibus cupiditate assumenda, dolores delectus maxime a nam sunt odit, sapiente ipsa at veniam! Ex, rem corrupti. At dignissimos magni voluptatum tempore necessitatibus molestiae, perspiciatis nihil culpa inventore fuga, perferendis amet similique porro! Qui, omnis exercitationem eum tenetur quia corporis consequuntur sapiente ad maiores minus autem blanditiis ut voluptate iste veniam accusamus doloremque tempore voluptatum, corrupti nemo laborum necessitatibus! At ratione deserunt quis dicta deleniti eos ipsum labore doloremque tenetur esse doloribus inventore tempora magnam voluptatum sed quae asperiores, maxime id ducimus! Dolores sapiente reprehenderit nesciunt iure dolorem nemo ratione at dicta magnam, fuga, eius a eveniet. Est expedita et, id illum minima deserunt? Omnis, aliquam, eius non perferendis ipsam maiores fugiat quod incidunt voluptas totam obcaecati harum voluptatum nihil illo voluptates error doloribus placeat pariatur? A ipsa sunt odit quos beatae voluptates quidem, impedit, quam amet placeat veniam tenetur modi odio. Vel quam nemo quia provident aliquam mollitia consectetur a nostrum nulla inventore minus nisi, architecto expedita omnis numquam aspernatur exercitationem, dolores rem assumenda eum quis possimus magnam perspiciatis blanditiis. Accusamus qui dolorum sed voluptates veritatis laborum amet ipsa provident ex, autem illum neque dolorem cum molestiae dolore quidem voluptate corporis aliquid numquam quod. Id porro culpa voluptas, officiis ut laboriosam. Eius facilis doloribus dolores sapiente error mollitia veritatis, ex id ut rem dolor quibusdam. Impedit nisi dolorum laboriosam rem excepturi. Rem quos nobis debitis eaque quam. Est vitae aut mollitia quibusdam repellendus. Nostrum perspiciatis, minima reprehenderit necessitatibus modi ad minus quaerat. Incidunt, iste quisquam rerum quasi laudantium impedit voluptas. Vero iusto deleniti repellendus vitae pariatur voluptatem fugiat, nihil dolore dicta a accusantium rem corrupti praesentium, natus consectetur laboriosam est necessitatibus! Dolor cum quis repellat consectetur? Vitae earum beatae ullam. Aliquid sunt numquam, quisquam quae aperiam repudiandae ullam saepe rem! Repellendus dolorum veniam aspernatur a atque consequuntur libero corrupti ipsam similique tempora non quod reiciendis error eveniet, culpa, quaerat deleniti, assumenda perferendis. Numquam quia, earum excepturi aspernatur eius sed assumenda, molestias consequuntur, veniam veritatis voluptatibus sapiente doloribus! Quaerat, vero. Sint minus aperiam, quam voluptate ipsa laborum et iste, inventore facilis quibusdam, fugit dignissimos beatae debitis distinctio eveniet eligendi deserunt autem consequuntur nostrum eos veniam. Atque sit qui suscipit dicta pariatur nam corrupti molestias nobis iusto quos magnam maiores tempora quod velit accusantium sint consectetur, doloremque laborum modi architecto deleniti! Beatae quo aspernatur, inventore sapiente voluptatum ab maxime a rem asperiores!
            </p>
            <br><br>
            <a href="./logout.php">Logout</a>
        </div>
    <?php else : ?>
        <div>
            <h1>You need to login</h1>
        </div>
        <a href="./login.php">Login</a>
    <?php endif ?>

</body>
</html>