<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "dpcrud";
$conn = new mysqli($server, $user, $pass, $database);
$delete = $_GET['del'];

$str = "delete from crudut where id = '$delete'";

if (mysqli_query($conn, $str)) {
    echo '<script>location.replace("index1.php")</script>';
} else {
    echo "some thing error" . $conn->error;
}



?>