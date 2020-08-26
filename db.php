<?php

    $conn = mysqli_connect('localhost', 'root');
    if($conn){
        echo "Connection Successfull";
    }else{
        echo "Problem with connecting database ???";
    }

mysqli_select_db($conn,'info');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = "insert into information (user, email, mobile, comment) values('$user','$email','$email','$comment')";

mysqli_query($conn,$query);
header('location:index.php');

?>