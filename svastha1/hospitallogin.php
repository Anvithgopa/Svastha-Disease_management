<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital/Admin</title>

    <link rel="stylesheet" href="loginstyle.css">
</head>
<body>
    <div class="page">
        <div class="welcome">
            <h2>Svastha</h2>
            <p>Welcome  back , Iam glad that you are here.</p>
            <button class="login_btn">Hospital</button>
            <button class="register_btn">Admin</button>
        </div>
        <div class="register">
            <form>
                <h2>Admin Login</h2>
                <!---<input type="text" class="reg-input" placeholder="Username">-->
                <input type="email" placeholder="Email" class="reg-input">
                <input type="password" class="reg-input" placeholder="Password">
                <input type="submit" value="LOGIN" class="reg-btn">
            </form>
        </div>
        <div class="login">
            <form>
                <h2>Hospital Login</h2>
                <input type="email" class="log-input" placeholder="Email">
                <input type="password" class="log-input" placeholder="Password">
                <input type="submit" value="LOGIN" class="log-btn">

                <a href="#" class="forg-pass">Forget Password?</a>
                <a href="loginuser.php" class="forg-pass">Userlogin</a>
            </form>
        </div>
    </div>

    <script src="loginscript.js"></script>
</body>
</html>