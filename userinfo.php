<?php

$conn = new mysqli('localhost:3307', 'root');

if ($conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
} else {
    echo "Response submitted";
}

mysqli_select_db($conn,"trafficuserdata");
$user= $_POST["user"];
$email= $_POST["email"];
$mobile= $_POST["mobile"];
$date= $_POST["date"];
$type= $_POST["type"];
$description= $_POST["description"];
$action= $_POST["action"];
$affiliation= $_POST["affiliation"];
$comment= $_POST["comment"];

$query= "INSERT INTO `userinfodata`(`user`, `email`, `mobile`, `date`, `type`, `description`, `action`, `affiliation`, `comments`) VALUES ('$user','$email','$mobile','$date','$type','$description','$action','$affiliation','$comment')";
mysqli_query($conn, $query);
?>
