<?php  
if(isset($_SESSION)){
    header('location: dashborad.php');
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="page login for paltform E-classe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css" >
    <link rel="stylesheet" href="css/style.css" >
    <title>Sing in</title>
</head>
<body>
    <main class="container d-flex justify-content-center align-items-center ">
            <div class="login-form bg-white p-5 h-75 ">
                <div class="login-logo border-start border-info border-5 mx-4 px-2 mb-5">
                    <h1>E-classe</h1>
                </div>
                <div class="login-title text-center mb-3">
                    <h2 class="text-uppercase">Sing in</h2>
                    <p class="text-muted">Enter your credentials to access your account</p>
                </div>
                <?php 
                    if (isset($_GET['error'])){
                        echo '<p class="err"> Email Or Password Incorrect </p>';
                    }
                    if (isset($_GET['empty'])){
                        echo '<p class="err"> Email Or Password Empty </p>';
                    }
                ?>
                <form class="row g-3" method="POST" >
                    <div >
                        <label class="form-label text-muted">E-mail</label>
                        <input type="text" class="form-control shadow-none p-2 " name="email" placeholder="Enter your UserName" value="<?php if(isset($_COOKIE['email'])) echo $_COOKIE['email']; ?>" required> 
                    </div>
                    <div class="mb-4">
                        <label class="form-label text-muted">Password</label>
                        <input type="password" class="form-control shadow-none p-2" name="password" placeholder="Enter your password" value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password']; ?>" required>
                    </div>
                    <div class="form-check form-switch mt-0 mx-3" >
                        <input class="form-check-input" type="checkbox" name="check">
                        <label class="form-check-label text-muted" > Rester connecté</label>
                    </div>
                    <div >
                        <input class="btn btn-info w-100 p-2 mb-3 text-uppercase text-white" type="submit" value="Sign in">
                    </div>
                    <p class="text-center text-muted">Forgot your password? <a class="text-info cursor-pointer">Reset Password</a></p>
                </form>
                <?php
                    require_once 'include.php' ;
                    if($_SERVER['REQUEST_METHOD']==='POST'){
                        if(empty($_POST['email']) || empty($_POST['password'])){
                        header('location: index.php?empty');
                        }else{
                            check($_POST);
                        }
                    }
                        
                ?>
            </div>
    </main>
</body>
</html>