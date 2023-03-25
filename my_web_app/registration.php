<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    
    <div>
        <?php   
            if (isset($_POST["submit"])) {
                $firstname = $_POST["firstname"];
                $lastname = $_POST["lastname"];
                $email = $_POST["email"];
                $password = $_POST["password"];
                $passwordRepeat = $_POST["repeat_password"];

                $errors = array();

                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    array_push($errors, "Email is not valid");
                }
                if (strlen($password)<8) {
                    array_push($errors, "Password must be at least 8 characters long.");
                }
                if ($password!==$passwordRepeat)
                    array_push($errors, "Password does not match.");

                if (count($errors)>0) {
                    foreach ($errors as $error) {
                        echo "<div class='alert alert-danger'>$errors</div>";
                    }
                } else {

                }
            }     
                        
        ?>
    </div>
    
    <div>
        <form action="registration.php" method="POST">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-3">
                        <h2>Registration Form</h2>
                        <p>Fill up form with correct values.</p>
                        <hr>
                        <label for="firstname"><b>First Name</b></label>
                        <input class="form-control" id="firstname" type="text" name="firstname"  ><br>

                        <label for="lastname"><b>Last Name</b></label>
                        <input class="form-control" id="lastname" type="text" name="lastname"  ><br>

                        <label for="email"><b>Email</b></label>
                        <input class="form-control" id="email" type="email" name="email"  ><br>

                        <label for="password"><b>Password</b></label>
                        <input class="form-control" id="password" type="password" name="password"  ><br>

                        <label for="repeat_password"><b>Repeat Password</b></label>
                        <input class="form-control" id="repeat_password" type="password" name="repeat_password"  >
                        <hr class="mb-3">
                        <input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up"><br>
                        <p>Already have an account?<a href="login.php"> Click here</a></p>
                    </div>
                </div>
            </div>
        </form>
    </div>


    </body>
</html>