<?php
include 'db/db.php';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user_id = $_POST['user_id'];
    $driver_id = $_POST['driver_id'];
    $pick_up = $_POST['pick_up'];
    $drop_off = $_POST['drop_off'];

    $insert = "insert into book(user_id, driver_id, pick_up, drop_off) values('$user_id', '$driver_id', '$pick_up', '$drop_off')";
    $run = mysqli_query($con, $insert);
    $response = [
        "user_id" => $user_id,
        "driver_id" => $driver_id,
        "pick_up" => $pick_up,
        "drop_off" => $drop_off,
        "message" => "Booked successfully",
    ];

    header("Content-Type: application/json");
    echo json_encode($response);
} else {
  http_response_code(405); 
}

?>