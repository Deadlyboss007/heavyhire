<?php 
    include '../db/db.php';
    session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../links.php' ?>
    
    <title>Upload Vehicles</title>
</head>
<body>
    <?php include 'sidebar.php' ?>
    <form class="flex flex-col p-4 sm:ml-64" method="POST" enctype="multipart/form-data">
        <input class="hidden" type="text" id="acc_id" name="acc_id" value="<?php echo $_SESSION['acc_id'] ?>">
        <input class="border-2 mb-10 py-3 rounded-[15px] px-5" type="text" placeholder="Enter Brand" name="brand">
        <input class="border-2 mb-10 py-3 rounded-[15px] px-5" type="text" placeholder="Enter Model" name="model">
        <div class="flex">
            <input placeholder="Enter register no" class="border-2 mb-10 py-3 rounded-[15px] px-5 w-[50%]" type="number" name="reg_no">
            <input class="border-2 mb-10 py-3 rounded-[15px] px-5 w-[50%]" type="date" name="exp_date">
        </div>
        <input class="border-2 mb-10 py-3 rounded-[15px] px-5 w-[50%]" type="number" name="insurance">
        <button type="submit" class="bg-teal-800 hover:bg-teal-900 text-white px-4 py-2 rounded-[15px] m-auto w-[30%]">Upload</button>
    </form>
</body>
</html>

<script>

    const form = document.querySelector("form");
    form.addEventListener("submit", (e) => {
        e.preventDefault();

        const formData = new FormData(form);

        fetch("../../backend/uploadVehicle.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.json())
            .then(data => {
                window.location.replace('/heavyhire/client/driver/driverDashboard.php')
                console.log(data)
            })
            .catch(error => {
                console.error(error);
            });
        });
</script>