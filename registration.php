<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System-Registration page</title>
    <!-- Bootstrap CSS link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center text info p-3">Voting System </h1>
    <div class="bg-info py-4">
        <h2 class="text-center">Register</h2>
        <div class="container text-center">
            <form action="form.php">
                <div class="mb-3">
                    <input type="text" class="form control w-50 m-auto" placeholder="Enter your username" required="required" name="username">

                </div>
                <div class="mb-3">
                    <input type="text" class="form control w-50 m-auto" placeholder="Enter your mobile number" required="required" name="mobile">
                
                </div>
                <div class="mb-3">
                    <input type="text" class="form control w-50 m-auto" placeholder="Enter your password" required="required" name="password">
                
                </div>
                <div class="mb-3">
                    <input type="text" class="form control w-50 m-auto" placeholder="Confirm password" required="required" name="cpassword">
                
                </div>
                <div class="mb-3">
                    <input type="file" class="form control w-50 m-auto" name="photo">
                
                </div>
                <div class="mb-3">
                <select name="std" class="form-select w-50 m-auto">
                    <option value="group">Group</option>
                    <option value="voter">Voter</option>
                </select>
                </div>
                <button type="submit" class="btn btn-datk my-4">Register</button>
                <p>Already have an Account?
                    <a href="../" class="text-white"></a>Logine Here</p>
            </form>
        </div>
    </div>
</body>
</html>