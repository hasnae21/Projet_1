<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
</head>

<body style="display:flex; align-items:center; margin:10%;">
    <section>
        <form action="includes/login.inc.php" method="POST">

            <input type="text" name="uid" placeholder="Username">
            <br>
            <input type="password" name="pwd" placeholder="Password">
            <br>
            <button type="submit">LOGIN</button>
        </form>
    </section>
    <section>
        <form action="includes/signup.inc.php" method="POST">

            <input type="text" name="uid" placeholder="Username">
            <br>
            <input type="password" name="pwd" placeholder="Password">
            <br>
            <input type="password" name="pwdrepeat" placeholder="Password">
            <br>
            <input type="email" name="email" placeholder="E-mail">
            <br>
            <button type="submit">SIGN UP</button>
        </form>
    </section>
</body>

</html>