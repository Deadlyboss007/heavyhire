<?php
include 'db/db.php';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $type_id = $_POST['type_id'];
    $insert = "insert into accounts(email, pass, type_id, name) values('$email', '$pass', '$type_id', '$name')";
    $run = mysqli_query($con, $insert);
    $response = [
        "message" => "Form submitted successfully",
    ];

    header("Content-Type: application/json");
    echo json_encode($response);
} else {
  http_response_code(405); 
}

?>