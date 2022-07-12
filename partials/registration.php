<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System - Registration</title>
    <!-- Bootstrap CSS link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <h1 class="text-light text-center p-3">Online Voting System</h1>
    <div class="bg-info py-4">
        <h2 class="text-center">Register Account</h2>
        <div class="container text-center">
            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <input class="form-control w-50 m-auto" type="text" name="username" placeholder="Enter your username" required="required">
                </div>
                <div class="mb-3">
                    <input class="form-control w-50 m-auto" type="text" name="nid" placeholder="Enter your 10 digit NID number" required="required" minlength="10" maxlength="10">
                </div>
                <div class="mb-3">
                    <input class="form-control w-50 m-auto" type="text" name="password" placeholder="Enter your password" required="required" minlength="7">
                </div>
                <div class="mb-3">
                    <input class="form-control w-50 m-auto" type="text" name="cpassword" placeholder="Confirm password" required="required" minlength="7">
                </div>
                <div class="mb-3">
                    <input class="form-control w-50 m-auto" type="file" name="photo" data-buttonText="Your label here." required="required">
                </div>
                <div class="mb-3">
                    <select name="roles" class="form-select w-50 m-auto" required="required">
                        <option value="" disabled="disabled" selected>Click here to select your role</option>
                        <option value="candidate">Candidate</option>
                        <option value="voter">Voter</option>
                    </select>
                </div>
                <div>
                    <button type="submit" class="btn btn-dark my-4">Register</button>
                </div>
                <p>Already have an account? <a href="../" class="text-white">Login here</a></p>
            </form>
        </div>
    </div>
</body>

</html>