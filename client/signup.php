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
    <form action="<?php echo $url ?>/signup" method="POST">
        <input type="text" name="name" placeholder="Enter name" id="">
        <input type="email" placeholder="Enter email" name="email">
        <input type="password" placeholder="Enter password" name="pass">
        <select name="type_id" id="">
            <option value="1">Driver</option>
            <option value="2">User</option>
        </select>
    </form>
</body>
</html>