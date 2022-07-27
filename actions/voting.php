<?php
session_start();
include('connect.php');
$votes = $_POST['candidatevotes'];
$totalvotes = $votes + 1;
$gid = $_POST['candidateid'];
$gname = $_POST['candidatename'];
$uid = $_SESSION['id'];
$updatevotes = mysqli_query($con, "UPDATE `userdata` SET `votes`='$totalvotes' WHERE `id`='$gid'");

$updatestatus = mysqli_query($con, "UPDATE `userdata` SET `status`='1' , `voted_to`='$gname' WHERE `id`='$uid'");

if ($updatevotes && $updatestatus) {
    $getcandidate = mysqli_query($con, "SELECT username , photo,votes,id FROM `userdata` WHERE roles = 'candidate'");
    $candidate = mysqli_fetch_all($getcandidate, MYSQLI_ASSOC);
    //testing
    $sql = "SELECT voted_to from `userdata`";
    $voted = mysqli_query($con, $sql);
    $vdata = mysqli_fetch_array($voted, MYSQLI_ASSOC);
    $_SESSION['voted_to']=$vdata;
    //testing
    $_SESSION['candidate'] = $candidate;
    $_SESSION['status'] = 1;
    echo '<script type="text/javascript">
    alert("Voting Successful");
    window.location="../partials/dashboard.php";
    </script>';
} else {
    echo '<script type="text/javascript">
    alert("Voting failed!! Please try again");
    window.location="../partials/dashboard.php";
    </script>';
}
?>
