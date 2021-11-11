<?php
$server='localhost';
$username='root';
$password="";
$database='jobs';
$conn= mysqli_connect($server, $username, $password, $database);
if($conn->connect_error){
die("Connection failed: ".$conn->connect_error);
}
echo"";

if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['password'];
$phone=$_POST['phone'];
$sql = "INSERT INTO user (name,email,password,phone) VALUES ('$name', '$email', '$pass', '$phone')";
if(mysqli_query($conn, $sql)) { 
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. ". mysqli_error($conn);
}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
    body {
        background-image: url('bg.jpg');
        background-size: cover;
    }

    form {
        background-color: white;
        margin-top: 6em;
        margin-left: 30em;
        margin-right: 10em;
        padding: 30px;
        box-shadow: 10px 10px 8px 10px #88888888;
    }
    </style>
    <title>Register</title>
</head>

<body>
    <div class="container">
        <form>
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="exampleInputName" name="name">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputNumber" class="form-label">Phone Number</label>
                <input type="text" class="form-control" id="exampleInputNumber" name="phone" maxlength="10">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="exampleInputPassword2">
            </div>
            <input type="submit" class="btn btn-primary" name="submit">
            <br><br>
            Already Registered?<a href="login.php">Login</a>
        </form>
    </div>
</body>

</html>