<?php

if (isset($_SESSION["user"])) {
   header("Location: useracc.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Register</title>

    <link rel="stylesheet" href="loginstyle.css">
</head>
<body>
<?php
session_start();
        if (isset($_POST["rsubmit"])) {
           $ruser = $_POST["rusername"];
           $remail = $_POST["remails"];
           $rpass = $_POST["rpassword"];
           $cpass = $_POST["cpassword"];
           
           $passwordHash = password_hash($rpass, PASSWORD_DEFAULT);

           $errors = array();
           
           if (empty($ruser) OR empty($remail) OR empty($rpass) OR empty($cpass)) {
            array_push($errors,"All fields are required");
           }
           if (!filter_var($remail, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email is not valid");
           }
           if (strlen($rpass)<8) {
            array_push($errors,"Password must be at least 8 charactes long");
           }
           if ($rpass!==$cpass) {
            array_push($errors,"Password does not match");
           }
           require_once "connect.php";
           $sql = "SELECT * FROM reg_form WHERE email = '$remail'";
           $result = mysqli_query($conn, $sql);
           $rowCount = mysqli_num_rows($result);
           if ($rowCount>0) {
            array_push($errors,"Email already exists!");
           }
           if (count($errors)>0) {
            foreach ($errors as  $error) {
               // echo "<div class='alert alert-danger'>$error</div>";
            }
           }else{
            
            $sql = "INSERT INTO reg_form (username, email, password) VALUES ( ?, ?, ? )";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"sss",$ruser, $remail, $rpass);
                mysqli_stmt_execute($stmt);
                //echo "<div class='alert alert-success'>You are registered successfully.</div>";
                //header("Location: login.php/button.login_btn");
            }else{
                die("Something went wrong");
            }
           }
          

        }
session_destroy();
        ?>
    <div class="page">
        <div class="welcome">
            <h2>Svastha</h2>
            <p>The place where you get to know about Disease.</p>
            <button class="login_btn">Login</button>
            <button class="register_btn">Register</button>
        </div>

        <div class="register">

            <form action="" method="post">
                <h2>Register your Account</h2>
                <input type="text" name="rusername" class="reg-input" placeholder="Username">
                <input type="email" name="remails" placeholder="Email" class="reg-input">
                <input type="password" name="rpassword" class="reg-input" placeholder="Password">
                <input type="password" name="cpassword" class="reg-input" placeholder="Password">
                <input type="submit" name="rsubmit" value="REGISTER" class="reg-btn">
            </form>
        </div>

        <div class="login" id="loginhere">
        <?php
//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['lemail']))
{
    header("location: useracc.php");
    exit;
}
require_once "connect.php";

$lemail = $lpass = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['lemail'])) || empty(trim($_POST['lpass'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $lemail = trim($_POST['lemail']);
        $lpass = trim($_POST['lpass']);
    }


if(empty($err))
{
    $sql = "SELECT email, password FROM reg_form WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $lemail;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $lemail, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($lpass, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["leamil"] = $leamil;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: useracc.php");
                            
                        }
                    }

                }

    }
}    


}
        

?>
            <form action="" method="post">
                <h2>Login to your Account</h2>
                <input type="email" name="lemail" class="log-input" placeholder="Email">
                <input type="password" name="lpass"class="log-input" placeholder="Password">
                <input type="submit" name="login" value="LOGIN" class="log-btn">

                <a href="#" class="forg-pass">Forget Password?</a>
                <a href="hospitallogin.php" class="forg-pass">Hospital login/Admin</a>
            </form>
        </div>
    </div>

    <script src="loginscript.js"></script>
</body>
</html>