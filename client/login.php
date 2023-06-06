<!-- <?php include './db/db.php' ?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'links.php' ?>
    <title>Log in</title>
</head>
<body>
    <?php include 'navbar.php' ?>
    <form class="flex flex-col px-20 py-20" action="<?php echo $url ?>/login" method="GET">
        <input class="border-2 mb-10 py-3 rounded-[15px] px-5" type="email" placeholder="Enter email" name="email">
        <input class="border-2 mb-10 py-3 rounded-[15px] px-5" type="password" name="pass" placeholder="Enter password" id="">
        <button type="submit" class="bg-teal-800 hover:bg-teal-900 text-white px-4 py-2 rounded-[15px] m-auto w-[30%]">Log in</button>
    </form>
    <?php include 'footer.php' ?>
</body>
</html>