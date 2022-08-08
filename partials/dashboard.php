<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('location: ../');
}
$data = $_SESSION['data'];
if ($_SESSION['status'] == 1) {
    $status = '<b class="text-successs">Voted</br>';
} else {
    $status = '<b class="text-danger">Not Voted</br>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System - Dashboard</title>
    <!-- Bootstrap CSS link Online  -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

    <!-- Bootstrap CSS link offline  -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Bootstrap JS link offline  -->
    <script src="../css/bootstrap.min.js"></script>
    <!-- Custom CSS link  -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="bg-secondary text-light">
    <div class="container my-5">
        <a href="../"><button class="btn btn-dark text-light px-3">Back</button></a>
        <a href="../partials/logout.php"><button class="btn btn-dark text-light px-3">Logout</button></a>
        <h1 class="my-3">Online Voting System</h1>
        <div class="row my-5">
            <!-- Candidates -->
            <div class="col md-7">
                <?php
                if (isset($_SESSION['candidate'])) {
                    $candidate = $_SESSION['candidate'];
                    for ($i = 0; $i < count($candidate); $i++) {
                ?>
                        <div class="row">
                            <div class="col md-4">
                                <img src="../uploads/<?php echo $candidate[$i]['photo'] ?>" alt="Candidate Image">
                            </div>
                            <div class="col md-8">
                                <strong class="text-dark h5">Name: </strong>
                                <?php echo $candidate[$i]['username'] ?><br>
                                <strong class="text-dark h5">Votes: </strong>
                                <?php echo $candidate[$i]['votes'] ?><br>
                            </div>
                        </div>

                        <form action="../actions/voting.php" method="post">
                            <input type="hidden" name="candidatevotes" value="<?php echo $candidate[$i]['votes']; ?>">
                            <input type="hidden" name="candidateid" value="<?php echo $candidate[$i]['id']; ?>">
                            <input type="hidden" name="candidatename" value="<?php echo $candidate[$i]['username']; ?>">
                            <?php

                            if ($_SESSION['status'] == 1) {
                            ?>
                                <button class="bg-success my-3 text-white px-3" disabled>voted</button>
                            <?php

                            } else {
                            ?>
                                <button class="bg-danger my-3 text-white px-3" type="submit">Vote</button>
                            <?php
                            }
                            ?>

                        </form>
                        <hr>
                    <?php

                    }
                } else {
                    ?>
                    <div class="container">
                        <p>No Candidates to Display</p>
                    </div>
                <?php

                }

                ?>

            </div>
            <!-- Candidates -->

            <div class="col md-5">
                <!-- user profile -->
                <img src="../uploads/<?php echo $data['photo']; ?>" alt="User Image">
                <br>
                <br>
                <strong class="text-dark">Name: </strong>
                <?php echo $data['username']; ?><br><br>
                <strong class="text-dark">NID: </strong>
                <?php echo $data['nid']; ?><br><br>
                <strong class="text-dark">Status: </strong>
                <?php echo $status; ?><br>
                <strong class="text-dark">Voted to: </strong>
                <?php
                if ($data['voted_to'] == "") {
                    echo '<span class="text-danger">Updating</span>';
                } else {
                    echo $_SESSION['voted_to'];
                } ?>
            </div>
        </div>

    </div>
</body>

</html>