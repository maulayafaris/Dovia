<?php
    include "../connect.php";

    $err = '';
    if (isset($_POST['login']) && $_POST['login'] == "LOGIN" ) {
        $name = $_POST['user'];
        $pass = MD5($_POST['pass']);

        $query = mysqli_query($connect, "SELECT * FROM admin WHERE user_admin = '$name' and pass_admin = '$pass'");
        $data = mysqli_fetch_assoc($query);

        if (mysqli_num_rows($query) > 0) {
            session_start();

            $_SESSION['id_admin'] = $data['id_admin'];
            $_SESSION['login'] = true;
            header('location:index.php');
        }else {
            $err = "Username atau Password salah!";
        }
    }
?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Admin</title>
    </head>
    <body>
        <div>
        <form action="" method="post">
            <input type="text" name="user"><br>
            <input type="password" name="pass"><br>
            <input type="submit" name="login" value="LOGIN"><br>
            <br>
        </form>
                
        </div>
    </body>
</html>

