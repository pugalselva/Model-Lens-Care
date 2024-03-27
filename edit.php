<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "dpcrud";
$conn = new mysqli($server, $user, $pass, $database);
$edit = $_GET['edit'];

$str = "select * from crudut where id = '$edit'";

$run =mysqli_query($conn,$str);

while($row=mysqli_fetch_array($run))
{
    $uid =$row['id'];
    $name =$row['name'];
    $address =$row['address'];
    $mobile =$row['mobile'];
}
?>













<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "dpcrud";
$conn = new mysqli($server, $user, $pass, $database);


if (isset($_POST['submit'])) {
    
    $edit = $_GET['edit'];
    $name = $_POST['name'];
    $address = $_POST['add'];
    $mobile = $_POST['mob'];

    $str = "update crudut set name= '$name',address='$address',mobile='$mobile' where id = '$edit'";
    if (mysqli_query($conn, $str)) 
    
    {
        echo '<script>location.replace("index1.php")</script>';
    }
    else
    {
    echo "some thing error" . $conn->error;
    }

}

?>

















<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h1>Customer Application</h1>

                    </div>


                    <div class="card-body">
                        <form action="add.php" method="post">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" value="<?php echo $name; ?>"><br>

                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="add" class="form-control" value="<?php echo $address; ?>"><br>

                            </div>
                            <div class="form-group">
                                <label>Mobile</label>
                                <input type="text" name="mob" class="form-control" value="<?php echo $mobile; ?>"><br>

                            </div>
                            <br>

                            <button type="submit" class="btn btn-primary" name="submit" value="edit">Submit</button>
                        </form>

                    </div>


                </div>

            </div>

        </div>


</body>

</html>