<?php

$server = 'localhost';
$username ='root';
$password = '';
$database='jobs';

$conn = mysqli_connect($server,$username,$password,$database);

// if($conn->connect_error){
//     die("connection failed : ".$conn->connect_error);
// }
// echo"";

// if(isset($_POST['submit'])){
//     $name=$_POST['name'];
//     $email=$_POST['email'];
//     $phone=$_POST['phone'];
//     $password=$_POST['password'];

//     $sql="INSERT INTO `user`(`name`, `email`, `password`,'phone') VALUES ($name,$email,$password,$phone)";
    
// }

if($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
    }
    echo"";
    
    session_start();
    if(isset($_POST['Login'])) {
    $email=$_POST['email'];
    $pass=$_POST['password'];
    
    $query="SELECT * FROM user WHERE email = '$email' AND password = '$pass'";
    $result=mysqli_query($conn, $query);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        if(mysqli_num_rows($result)==1){
            header("location:index.php");
        }
        else{
            echo 'emailid or password is incorrect';
        }
    }

    if(isset($_POST['job'])){
    $cname=$_POST['cname'];
    $pos=$_POST['position'];
    $jdesc=$_POST['jdesc'];
    $skills=$_POST['skills'];
    $CTC=$_POST['CTC'];

    $job= "INSERT INTO jobs(`cname`, `position`, `jdesc`, `skills`, `CTC`) VALUES ('$cname','$pos', '$jdesc', '$skills', '$CTC')";
    mysqli_query($conn, $job);
}
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $qual=$_POST['qual'];
    $apply=$_POST['apply'];
    $year=$_POST['year'];

    $sql="INSERT INTO `candidates`(`name`, `qual`, `year`, `apply`) VALUES ('$name', '$qual', '$year' ,'$apply' )";
    mysqli_query($conn, $sql);
}
?>