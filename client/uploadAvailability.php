<?php include 'db/db.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'links.php' ?>
    <title>Upload Availability</title>
</head>
<body>
    <?php include 'navbar.php' ?>
    <form class="flex flex-col px-20 py-20" method="POST" enctype="multipart/form-data">
        <select name="v_id" class="border-2 mb-10 py-3 rounded-[15px] px-5" id="">
            <option value="1">Ashok Leyland 3118 | 2014</option>
            <option value="2">Ashok Leyland 3118 | 2014</option>
            <option value="3">Ashok Leyland 3118 | 2014</option>
        </select>
        <input class="hidden" type="text" id="acc_id" name="acc_id">
        <input value="Kochi" class="border-2 mb-10 py-3 rounded-[15px] px-5" type="text" placeholder="Enter location" name="loc">
        <input class="border-2 mb-10 py-3 rounded-[15px] px-5 w-[50%]" value="09:45" type="time" name="tfrom">
        <input class="border-2 mb-10 py-3 rounded-[15px] px-5 w-[50%]" value="10:30" type="time" name="tto">
        <div class="flex">
        </div>
        <input value="+919778393558" class="border-2 mb-10 py-3 rounded-[15px] px-5" type="text" placeholder="Enter Phone" name="phone">
        <input class="border-2 mb-10 py-3 rounded-[15px] px-5" type="file" name="image">
        <button type="submit" class="bg-teal-800 hover:bg-teal-900 text-white px-4 py-2 rounded-[15px] m-auto w-[30%]">Upload</button>
    </form>
    <?php include 'footer.php' ?>
</body>
</html>

<script>

    const form = document.querySelector("form");
    document.getElementById('acc_id').value = localStorage.getItem('acc_id')
    form.addEventListener("submit", (e) => {
        e.preventDefault();

        const formData = new FormData(form);

        fetch("../backend/uploadAvailability.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.json())
            .then(data => {
                // window.location.replace('/heavyhire/client/driverDashboard.php')
                console.log(data)
            })
            .catch(error => {
                console.error(error);
            });
        });
</script>