<?php 

session_start();
include('connect.php');
$username = $_POST['username'];
$nid = $_POST['nid'];
$password = $_POST['password'];
$roles = $_POST['roles'];

$sql = "Select * from `userdata` where username='$username' and nid='$nid' and password='$password' and roles='$roles'";

$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result)>0){
    $sql="Select username, photo,votes,id from `userdata` where roles='candidate'";
    $resultcandidate = mysqli_query($con, $sql);
    if(mysqli_num_rows($resultcandidate)>0){
        $candidate=mysqli_fetch_all($resultcandidate,MYSQLI_ASSOC);
        $_SESSION['candidate']=$candidate;
    }
    $data = mysqli_fetch_array($result);
    $_SESSION['id']=$data['id'];
    $_SESSION['status']=$data['status'];
    $_SESSION['voted_to']=$data['voted_to']; //voted_to is the candidate name
    $_SESSION['data']=$data;
    
echo '<script type="text/javascript">
window.location="../partials/dashboard.php";
</script>';    

}else{
    echo '<script type="text/javascript">
    alert("Invalid credentials")
    window.location="../";
    </script>';
}
?>