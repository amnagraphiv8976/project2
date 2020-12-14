<?php
//Create Connection
$conn = mysqli_connect("localhost" , "root" , "" , "test");

if($conn->connect_error) {
    die("connection failed");
} else {
    echo "connected";
}

if(isset($_POST['user'], $_POST['pass'])) {
    $email = $_POST['user'];
    $password = $_POST['pass'];
    $sql = "INSERT INTO `level`(`Username`, `Password`) VALUES ('$email','$password');";
}

if($conn->query($sql) == true) {
    echo "<br>" . "inserted Value";
} else {
    echo "error";
}

$conn->close()
?>