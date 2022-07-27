<?php

include('connect.php');
$username = $_POST['username'];
$nid = $_POST['nid'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$roles = $_POST['roles'];
$image = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];
$roles = $_POST['roles'];

if ($password != $cpassword) {
    echo '<script type="text/javascript">
    alert("Password does not match")
    window.location="../partials/registration.php";
    </script>';
}
//Checking existing user NID
$sql = "Select * from `userdata` where nid='$nid'";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result)>0){
    echo '<script type="text/javascript">
    alert("NID number already exists in our database")
    window.location="../";
    </script>';
}
else {
    move_uploaded_file($tmp_name, "../uploads/$image");
    $sql = "insert into `userdata`(username,nid,password,photo,roles,status,votes) values('$username','$nid','$password','$image','$roles',0,0)";

    $result = mysqli_query($con, $sql);
    if ($result) {
        echo '<script type="text/javascript">
        alert("Registration successful")
        window.location="../";
        </script>';
    } else {
        echo '<script type="text/javascript">
        alert("Registration failed")
        window.location="../partials/registration.php";
        </script>';
    }
}
?>