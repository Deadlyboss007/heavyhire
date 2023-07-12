<?php 
    include '../db/db.php';
    session_start();
    $avai_id = $_GET['avai_id'];
    $getDetails = "select * from available where avai_id=$avai_id";
    $runDetails = $con->query($getDetails);
    while($row = $runDetails->fetch_assoc()){
        $v_id = $row['v_id'];
        $getVehicle = "select * from vehicle where v_id=$v_id";
        $runVehicle = $con->query($getVehicle);
        $fetchVehicle = $runVehicle->fetch_assoc();
        $brand = $fetchVehicle['brand'];
        $model = $fetchVehicle['model'];

        $Ufrom = $row['tfrom'];
        $acc_id = $row['acc_id'];
        $from = DateTime::createFromFormat('H:i:s.u', $Ufrom)->format('H:i');
        $Uto = $row['tto'];
        $to = DateTime::createFromFormat('H:i:s.u', $Uto)->format('H:i');
        $loc = $row['loc'];
        $phone = $row['phone'];
        $image = $row['image'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../links.php' ?>
    
    <title>Edit Listing</title>
</head>
<body>
    <?php include 'sidebar.php' ?>
    <div class="p-4 sm:ml-64">
        <a href="viewListings.php" class="bg-green-700 hover:bg-green-800 text-white px-3 py-2 rounded">Back</a>
    </div>
    <form class="flex flex-col p-4 sm:ml-64" method="POST" enctype="multipart/form-data">
        <input type="text" name="avai_id" value="<?php echo $avai_id ?>" class="hidden" id="">
        <input type="text" name="oimage" value="<?php echo $image ?>" class="hidden" id="">
        <select name="v_id" class="border-2 mb-10 py-3 rounded-[15px] px-5" id="">
            <?php
                $acc_id = $_SESSION['acc_id'];
                echo "<option value='$v_id' selected>$brand $model</option>";
                $get_user_vehicles = "select * from vehicle where acc_id=$acc_id and v_id!=$v_id";
                $run_user_vehicles = $con->query($get_user_vehicles);
                while($row = $run_user_vehicles->fetch_assoc()){
                    $Obrand = $row['brand'];
                    $Omodel = $row['model'];
                    $Ov_id = $row['v_id'];
                    echo "<option value='$Ov_id'>$Obrand $Omodel</option>";
                }
            ?>
        </select>
        <input class="hidden" type="text" id="acc_id" name="acc_id">
        <input value="<?php echo $loc; ?>" class="border-2 mb-10 py-3 rounded-[15px] px-5" type="text" placeholder="Enter location" name="loc">
        <div class="flex">
            <input class="border-2 mb-10 py-3 rounded-[15px] px-5 w-[50%]" value="<?php echo $from; ?>" type="time" name="tfrom">
            <input class="border-2 mb-10 py-3 rounded-[15px] px-5 w-[50%]" value="<?php echo $to; ?>" type="time" name="tto">
        </div>
        <input value="<?php echo $phone; ?>" class="border-2 mb-10 py-3 rounded-[15px] px-5" type="text" placeholder="Enter Phone" name="phone">
        <label class="font-semibold mb-3 text-lg">Chosen Image</label>
        <img src="../../backend/availableImages/<?php echo $image; ?>" class='w-[350px] h-[200px]'  alt="">
        <input class="border-2 mb-10 py-3 rounded-[15px] px-5" value="<?php echo $image; ?>" type="file" name="image">
        <button type="submit" class="bg-teal-800 hover:bg-teal-900 text-white px-4 py-2 rounded-[15px] m-auto w-[30%]">Edit</button>
    </form>
</body>
</html>

<script>

    const form = document.querySelector("form");
    document.getElementById('acc_id').value = localStorage.getItem('acc_id')
    form.addEventListener("submit", (e) => {
        e.preventDefault();

        const formData = new FormData(form);

        fetch("../../backend/editAvailability.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.json())
            .then(data => {
                window.location.replace('/heavyhire/client/driver/viewListings.php')
                console.log(data)
            })
            .catch(error => {
                console.error(error);
            });
        });
</script>