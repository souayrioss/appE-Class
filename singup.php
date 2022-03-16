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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap.css" >
    <link rel="stylesheet" href="css/style.css" >
    <title>Sing in</title>
</head>
<body>
    <div class="back"></div>
        <main class="d-flex justify-content-center align-items-center">
            <div class="login bg-white p-4 my-5" >
                <div class="login-logo border-start border-info border-5 mx-4 px-2 my-4">
                    <h1>E-classe</h1>
                </div>
                <div class="login-title text-center mb-3">
                    <h2 class="text-uppercase">Sing up</h2>
                    <p class="text-muted ">Remplissez soigneusement le formulaire d'inscription</p>
                </div>
                <form class="row g-3" name="form" method="POST" >
                    <div class="col-md-6 ">
                        <label class="form-label text-muted">First Name</label>
                        <input type="text" class="form-control shadow-none " name="firstName" id="firstName" placeholder="Enter your First Name" >
                        <div id="message" class="d-none"><span class="text-danger mx-3 "><i class="bi bi-exclamation-circle-fill "></i> First Name obligatoir</span></div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label text-muted">Last Name</label>
                        <input type="text" class="form-control shadow-none " name="lastName" id="lastName" placeholder="Enter your Last Name" >
                        <div id="message" class="d-none"><span class="text-danger mx-3 "><i class="bi bi-exclamation-circle-fill "></i> Last Name obligatoir</span></div>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label text-muted">E-mail</label>
                        <input type="text" class="form-control shadow-none  " name="email" id="email" placeholder="Enter your UserName" > 
                        <div id="message" class="d-none"><span class="text-danger mx-3 "><i class="bi bi-exclamation-circle-fill "></i> E-mail obligatoir</span></div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label text-muted">Password</label>
                        <input type="password" class="form-control shadow-none" name="password" id="password" placeholder="Enter your password" >
                        <div id="message" class="d-none"><span class="text-danger mx-3 "><i class="bi bi-exclamation-circle-fill "></i> Password obligatoir</span></div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label text-muted">Confirm-Password</label>
                        <input type="password" class="form-control shadow-none" id="confirmPassword" placeholder="Enter your password" >
                        <div id="message" class="message d-none "><span class="text-danger mx-3 "><i class="bi bi-exclamation-circle-fill "></i> Password deferent</span></div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label text-muted">Phone</label>
                        <input type="tel" class="form-control shadow-none" name="phone" id="phone" placeholder="Enter your Number Phone" >
                        <div id="message" class="d-none"><span class="text-danger mx-3 "><i class="bi bi-exclamation-circle-fill "></i> Phone Number obligatoir</span></div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label text-muted">Enroll Number</label>
                        <input type="text" class="form-control shadow-none " name="enrollNumber" id="enrollNumber" placeholder="Enter your Enroll Number " >
                        <div id="message" class="d-none"><span class="text-danger mx-3 "><i class="bi bi-exclamation-circle-fill "></i> Enroll Number obligatoir</span></div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label text-muted"> Date Of Admission </label>
                        <input type="date" class="form-control shadow-none " name="dateOfAdmission" id="dateOfAdmission" > 
                        <div id="message" class="d-none"><span class="text-danger mx-3 "><i class="bi bi-exclamation-circle-fill "></i> Date Admission obligatoir</span></div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label text-muted">Code Role</label>
                        <input type="text" class="form-control shadow-none " name="codeRole" placeholder="Enter your Code Role" > 
                    </div>
                    <div >
                        <input class="btn btn-info w-100 p-2 mb-2 text-uppercase text-white shadow-none" type="submit" id="singup" value="Sign up">
                    </div>
                    <p class="text-center text-muted">Je suis déjà membre! <a class="text-info cursor-pointer text-decoration-none" href="index.php"> Sign in</a></p>
                </form>
                <?php
                    require_once 'include.php' ;
                    if($_SERVER['REQUEST_METHOD']==='POST'){
                        addUser($_POST);
                    }
                        
                ?>
            </div>

    </main>
    
    <script src="js/script.js">
    </script>
</body>
</html>