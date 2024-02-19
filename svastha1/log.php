<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="reg.css">
</head>
<body class="">

    <div class="container bg-light rounded-3 shadow-lg">
    <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="reg.php">Register</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="log.php">Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="hosp.php">Hospital</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="muncipal.php">Muncipal</a>
  </li>
</ul>
<br>
    <a href = "index.php" class = "btn-close float-end"></a>
        <?php
        if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
            require_once "connect.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {

                    $fetch_id = "SELECT userid FROM users WHERE email='$email'";
                    $res = mysqli_query($conn, $fetch_id);
                    $row = mysqli_fetch_array($res);
                    $_SESSION['userid'] = $row['userid'];
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: useracc.php");
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }
        }
        ?>
      <form action="log.php" method="post">
        <div class="form-group">
            <h3 class="fw-bold">User login</h3>
            
            <input type="email" placeholder="Enter Email:" name="email" class="form-control">
        </div>
        <div class="form-group">
            <input type="password" placeholder="Enter Password:" name="password" class="form-control">
        </div>
        <div class="form-btn">
            <input type="submit" value="Login" name="login" class="btn btn-primary">
        </div>
      </form>
     <!--<div><p>Not registered yet <a href="reg.php">Register Here</a></p>
    <a  class="" href="hosp.php">Hospital login</a><p>
        <br>
    <a class="" href="muncipal.php">Muncipal login</a></p></div>
    </div>-->
</body>
</html>