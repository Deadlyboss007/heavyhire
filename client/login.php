<?php include './db/db.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>
<body>
    <form action="<?php echo $url ?>/login" method="GET">
        <input type="email" placeholder="Enter email" name="email">
        <input type="password" name="pass" placeholder="Enter name" id="">
        <input type="submit" value="Login">
    </form>
</body>
</html>