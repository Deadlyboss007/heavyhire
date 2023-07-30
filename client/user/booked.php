<?php 
    include '../db/db.php';
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Booked</title>
    <?php include '../links.php' ?>
    <link rel="icon" href="../images/favicon.png" type="image/x-icon">
</head>

<body>
    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
        type="button"
        class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd"
                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
            </path>
        </svg>
    </button>
    <?php include 'sidebar.php' ?>

    <div class="p-4 sm:ml-64">

            <div class="grid grid-cols-3">
                <div class="block">
                    <h1 class="font-bold text-center text-2xl">Previous</h1>
                    <?php
                        $get_previous = "select * from book where type=0";
                        $run_previous = $con->query($get_previous);
                        while($fetch_previous = $run_previous->fetch_assoc()){
                            $driver_id = $fetch_previous['driver_id'];
                            $pick_up = $fetch_previous['pick_up'];
                            $avai_id = $fetch_previous['avai_id'];
                            $drop_off = $fetch_previous['drop_off'];


                            $get_driver = "select * from accounts where acc_id=$driver_id";
                            $run_driver = $con->query($get_driver);
                            $fetch_driver = $run_driver->fetch_assoc();
                            $name = $fetch_driver['name'];


                            $get_vehicle = "select * from vehicle where acc_id=$driver_id";
                            $run_vehicle = $con->query($get_vehicle);
                            $fetch_vehicle = $run_vehicle->fetch_assoc();
                            $brand = $fetch_vehicle['brand'];
                            $model = $fetch_vehicle['model'];

                            $get_avai = "select * from available where avai_id=$avai_id";
                            $run_avai = $con->query($get_avai);
                            $fetch_avai = $run_avai->fetch_assoc();
                            $image = $fetch_avai['image'];

                            echo "
                            <div class='max-w-sm mt-10 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700'>
                                <a href='#'>
                                    <img class='rounded-t-lg h-80 w-full' src='../../backend/availableImages/$image' alt='img' />
                                </a>
                                <div class='p-5'>
                                    <a href='#'>
                                        <h5 class='mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white'>$brand $model</h5>
                                    </a>
                                    <ul class='mb-3'>
                                        <li class='font-normal text-gray-700 dark:text-gray-400'>Driver: $name</li>  
                                        <li class='font-normal text-gray-700 dark:text-gray-400'>From: $pick_up</li>  
                                        <li class='font-normal text-gray-700 dark:text-gray-400'>To: $drop_off</li>  
                                    </ul>
                                </div>
                            </div>
                            ";
                        }
                    ?>
                </div>
                <div class="block">
                    <h1 class="font-bold text-center text-2xl">Active</h1>
                    <?php
                        $get_previous = "select * from book where type=1";
                        $run_previous = $con->query($get_previous);
                        while($fetch_previous = $run_previous->fetch_assoc()){
                            $book_id = $fetch_previous['book_id'];
                            $avai_id = $fetch_previous['avai_id'];
                            $driver_id = $fetch_previous['driver_id'];
                            $pick_up = $fetch_previous['pick_up'];
                            $drop_off = $fetch_previous['drop_off'];


                            $get_driver = "select * from accounts where acc_id=$driver_id";
                            $run_driver = $con->query($get_driver);
                            $fetch_driver = $run_driver->fetch_assoc();
                            $name = $fetch_driver['name'];

                            
                            $get_vehicle = "select * from vehicle where acc_id=$driver_id";
                            $run_vehicle = $con->query($get_vehicle);
                            $fetch_vehicle = $run_vehicle->fetch_assoc();
                            $brand = $fetch_vehicle['brand'];
                            $model = $fetch_vehicle['model'];

                            $get_avai = "select * from available where avai_id=$avai_id";
                            $run_avai = $con->query($get_avai);
                            $fetch_avai = $run_avai->fetch_assoc();
                            $image = $fetch_avai['image'];
                            echo "
                            <div class='max-w-sm mt-10 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700'>
                                <a href='#'>
                                    <img class='rounded-t-lg h-80 w-full' src='../../backend/availableImages/$image' alt='img' />
                                </a>
                                <div class='p-5'>
                                    <a href='#'>
                                        <h5 class='mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white'>$brand $model</h5>
                                    </a>
                                    <ul class='mb-3'>
                                        <li class='font-normal text-gray-700 dark:text-gray-400'>Driver: $name</li>  
                                        <li class='font-normal text-gray-700 dark:text-gray-400'>From: $pick_up</li>  
                                        <li class='font-normal text-gray-700 dark:text-gray-400'>To: $drop_off</li>  
                                    </ul>
                                    <button onclick='cancelBooking($book_id)'
                                    class='inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-500 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800'>
                                    cancel</button>
                                </div>
                            </div>
                            ";
                        }
                    ?>
                </div>
                <div class="block">
                    <h1 class="font-bold text-center text-2xl">Cancelled</h1>
                    <?php
                        $get_previous = "select * from book where type=2";
                        $run_previous = $con->query($get_previous);
                        while($fetch_previous = $run_previous->fetch_assoc()){
                            $driver_id = $fetch_previous['driver_id'];
                            $pick_up = $fetch_previous['pick_up'];
                            $drop_off = $fetch_previous['drop_off'];
                            $avai_id = $fetch_previous['avai_id'];


                            $get_driver = "select * from accounts where acc_id=$driver_id";
                            $run_driver = $con->query($get_driver);
                            $fetch_driver = $run_driver->fetch_assoc();
                            $name = $fetch_driver['name'];

                            
                            $get_vehicle = "select * from vehicle where acc_id=$driver_id";
                            $run_vehicle = $con->query($get_vehicle);
                            $fetch_vehicle = $run_vehicle->fetch_assoc();
                            $brand = $fetch_vehicle['brand'];
                            $model = $fetch_vehicle['model'];

                            $get_avai = "select * from available where avai_id=$avai_id";
                            $run_avai = $con->query($get_avai);
                            $fetch_avai = $run_avai->fetch_assoc();
                            $image = $fetch_avai['image'];

                            echo "
                            <div class='max-w-sm mt-10 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700'>
                                <a href='#'>
                                    <img class='rounded-t-lg h-80 w-full' src='../../backend/availableImages/$image' alt='img' />
                                </a>
                                <div class='p-5'>
                                    <a href='#'>
                                        <h5 class='mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white'>$brand $model</h5>
                                    </a>
                                    <ul class='mb-3'>
                                        <li class='font-normal text-gray-700 dark:text-gray-400'>Driver: $name</li>  
                                        <li class='font-normal text-gray-700 dark:text-gray-400'>From: $pick_up</li>  
                                        <li class='font-normal text-gray-700 dark:text-gray-400'>To: $drop_off</li>  
                                    </ul>
                                </div>
                            </div>
                            ";
                        }
                    ?>
                </div>
            </div>


</body>
<script>
    function cancelBooking(book_id){
        console.log(book_id)
        var xhr = new XMLHttpRequest();

        xhr.open('GET', `http://localhost/heavyhire/backend/mark.php?book_id=${book_id}&type=2`, true);

        xhr.onload = function() {
        if (xhr.status >= 200 && xhr.status < 300) {
            var responseData = JSON.parse(xhr.responseText);
            console.log(responseData);
            window.location.reload()
        } else {
            console.error('Request failed with status:', xhr.status);
            window.location.reload()
        }
        };

        xhr.onerror = function() {
        console.error('Network error occurred');
        };

        xhr.send();
    }
</script>
</html>