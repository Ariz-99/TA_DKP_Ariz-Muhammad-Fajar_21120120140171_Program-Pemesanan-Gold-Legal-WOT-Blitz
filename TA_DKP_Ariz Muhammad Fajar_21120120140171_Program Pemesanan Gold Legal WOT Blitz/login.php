<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body class="body1">
    <?php
    session_start();
    error_reporting(0);
        $user = array( "user" => "ariz", "pass" => "ariz321"); 
        if(isset($_POST['login'])){
            if ($_POST['username'] == $user['user'] && $_POST['password'] == $user['pass']){

                $_SESSION['berhasil'] = true;

                header("location: data.php");
            } else{
                login_form();
                echo '<p>Username atau Password Tidak Benar</P>';
            }
        }
        else{
            login_form();
        }
    
    function login_form(){
    ?>
    <div class="register">
    <form action="" method="post">
        <div class="regmsg">Silahkan Login</div>
        <div class="box1">
            <input name="username" placeholder="username" class="text-1" type="text" autocomplete="off">
        </div>

        <div class="box1">
            <input name="password" placeholder="password" class="text-1" type="password" autocomplete="off">
        </div>
        
        <button type="submit" class="regis" name="login">login</button>
    </form>
    </div>
    <?php } ?>
</body>
</html>