<?php
include 'db/db.php';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $acc_id = $_POST['acc_id'];
    $rating = $_POST['rating'];
    $user_id = $_POST['user_id'];

    $insert = "insert into rating(acc_id, rating, user_id) values('$acc_id', '$rating', '$user_id')";
    $run = mysqli_query($con, $insert);
    $response = [
        "message" => "Rated successfully",
    ];

    header("Content-Type: application/json");
    echo json_encode($response);
} else {
  http_response_code(405); 
}

?>