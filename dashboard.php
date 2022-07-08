<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System - Dashboard</title>
    <!-- Bootstrap CSS link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Custom CSS link  -->
    <link rel="stylesheet" href="../style.css">
</head>

<body class="bg-secondary text-light">
    <div class="container my-5">
        <a href="../"><button class="btn btn-dark text-light px-3">Back</button></a>
        <a href="../partials/logout.php"><button class="btn btn-dark text-light px-3">Logout</button></a>
        <h1 class="my-3">Online Voting System</h1>
        <div class="row my-5">
            <div class="col md-7">
                        <div class="row">
                            <div class="col md-4">
                                <img src="../uploads/GroupImg">
                            </div>
                            <div class="col md-8">
                                <strong class="text-dark h5">Group name: </strong>
                                <br>
                                <strong class="text-dark h5">Votes: </strong>
                                <br>
                            </div>
                        </div>

                        <form action="../actions/voting.php" method="post">
                            <input type="hidden" name="groupvotes">
                            <input type="hidden" name="groupid">
                                <button class="bg-success my-3 text-white px-3">Vote</button>
                        </form>
                        <hr>
                    <div class="container">
                        <p>No Groups to Display</p>
                    </div>

                <!-- Groups -->

            </div>

            <div class="col md-5">
                <!-- user profile -->
                <img src="../uploads/UserImg">
                <br>
                <br>
                <strong class="text-dark">Name: </strong>
                <br><br>
                <strong class="text-dark">NID: </strong>
                <br><br>
                <strong class="text-dark">Status: </strong>
                <br><br>
            </div>
        </div>

    </div>
</body>

</html>