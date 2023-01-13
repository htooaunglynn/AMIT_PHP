<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://images.unsplash.com/photo-1672681373273-64cc9c122df3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" type="image/x-icon">
    <title>Form</title>
</head>
<body>

    <!-- 1.action -->
    <!-- 2.method {default ==> GET} -->
    <!-- 3.name -->
    <!-- 4.file must be inlcude enctype -->
    <form action="db.php" method="post" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="name"> <br><br>
        <input type="email" name="email" placeholder="email"> <br><br>
        <input type="password" name="password" placeholder="password"> <br><br>
        <input type="number" name="age" placeholder="age"> <br><br>
        <textarea name="message" cols="30" rows="10">Message</textarea>
        <br><br>
        <input type="file" name="photo"> <br><br>
        <input type="submit" name="login"> <br><br>
        <div>
            <h4>Select Your Skills</h4>
            <input type="checkbox" name="skills[]" value="HTML">html
            <input type="checkbox" name="skills[]" value="CSS">CSS
            <input type="checkbox" name="skills[]" value="JS">JS
            <input type="checkbox" name="skills[]" value="PHP">PHP
            <input type="checkbox" name="skills[]" value="Java">Java
        </div>
    </form>
</body>
</html>