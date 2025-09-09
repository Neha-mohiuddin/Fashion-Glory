<?php
$servername ="localhost";
$username = "root";
$password = "";
$db = "contact_form";

$conn = mysqli_connect($servername,$username,$password,$db);

if (!$conn) {
    echo "connection error";
}


$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];

$sql = "INSERT INTO `data`(`first_name`, `last_name`, `email`, `phone`, `subject`)
        VALUES ('$first_name', '$last_name', '$email', '$phone', '$subject')";

$res=mysqli_query($conn,$sql);
if ($res) {
    header("location:welcome.php");
    exit();
}
else{
    echo "data not inserted";
    
}
$conn->close();

?>