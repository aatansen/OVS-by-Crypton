<?php

include('connect.php');
$username = $_POST['username'];
$nid = $_POST['nid'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$roles = $_POST['roles'];
$image = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];
$file_type = $_FILES['photo']['type'];
$roles = $_POST['roles'];
$imagex = $_FILES['photo'];

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

//Checking existing user photo
$file = '../uploads/'.$image;
if (file_exists($file)) {
    echo '<script type="text/javascript">
    alert("Image already exits in our database")
    window.location="../";
    </script>';
}

else {
    if($file_type=='image/jpeg'){
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

    }else{
        echo '<script type="text/javascript">
        alert("Select jpeg image")
        window.location="../partials/registration.php";
        </script>';
    }

}
?>