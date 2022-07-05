<?php
session_start();
if(isset($_GET["logout"])){
    session_destroy();
}
if(isset($_SESSION["user"])){
    header("location: index.php");
    exit();
}


//$login = "Admin";
//$pass = "123456";
$error = '';
if(isset($_POST['submit'])){
    //echo $_POST['login'].$_POST['password'].md5($_POST['role']);
    $login = ''; $role = '';
    require_once ("config.php");
    //$sql = "SELECT * FROM users";
    $sql = "SELECT * FROM users";
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            if ($row['login'] == $_POST['login'])
            {
                $login = $row['login'];
                $role = $password['password'];
                break;
            }
        }
    }
    if($login == $_POST['login'] AND $row['password'] == md5($_POST['password'])){
        $_SESSION['user'] = $login;
        $_SESSION['password'] = $password;

        header("Location: index.php");
        exit;
    }else $error = 'Логин или пароль неверны, повторите попытку';
}
?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Войти</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Добро пожаловать!</h3></div>
                                    <div class="card-body">
                                       <form action="login.php" method="post">

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Логин</label>
                                                <input type="text" name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                <div id="emailHelp" class="form-text">Мы никогда не будем делиться вашей электронной почтой с кем-либо еще.</div>
                                            </div>
                                            
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Пароль</label>
                                                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                                            </div>

                                            <br>
                                            <button type="submit" name="submit" class="btn btn-primary text-center">Войти</button>
                                        </form>
                                        
                                    </div>
                                    <h4 class="text-danger text-center"><i><?php echo $error ?></i></h4>
                                    <div class="card-footer text-center py-3">
                                        <!-- <div class="small"><a href="register.html">Need an account? Sign up!</a></div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
