<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>
    <!-- Bootstrap CSS link Online -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

    <!-- Bootstrap CSS link offline  -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Bootstrap JS link offline  -->
    <script src="css/bootstrap.min.js"></script>

    <!-- script -->
    <script src="css/main.js"></script>
    <!-- script -->

</head>

<body class="bg-dark">
    <h1 class="text-light text-center p-3">Online Voting System</h1>
    <div class="bg-info py-4">
        <h2 class="text-center">Login</h2>
        <div class="container text-center">
            <form action="./actions/login.php" method="POST">
                <div class="mb-3">
                    <input class="form-control w-50 m-auto" autocomplete="off" type="text" name="username" placeholder="Enter your name" required="required">
                </div>
                <div class="mb-3">
                    <input class="form-control w-50 m-auto" autocomplete="off" type="text" name="nid" id="NumOnlyNid" placeholder="Enter your 10 digit NID number" oninput="numberOnly(id);" required="required" minlength="10" maxlength="10" />
                </div>
                <div class="mb-3">
                    <input class="form-control w-50 m-auto" autocomplete="off" type="password" name="password" placeholder="Enter your password" required="required">
                </div>
                <div class="mb-3">
                    <select name="roles" class="form-select w-50 m-auto" required="required">
                        <option value="" disabled="disabled" selected>Click here to select your role</option>
                        <option value="candidate">Candidate</option>
                        <option value="voter">Voter</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-dark my-4">Login</button>
                <p>Don't have an account? <a href="./partials/registration.php" class="text-white">Register here</a> </p>
            </form>
        </div>
    </div>
</body>

</html>