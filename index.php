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
    <main class="container d-flex justify-content-center align-items-center">
        <div class="login-form bg-white p-5 ">
            <div class="login-logo border-start border-info border-5 mx-4 px-2 mb-5">
                <h1>E-classe</h1>
            </div>
            <div class="login-title text-center mb-5">
                <h2 class="text-uppercase">Sing in</h2>
                <p class="text-black-50">Enter your credentials to access your account</p>
            </div>
            <form class="row g-3" action="dashboard.php">
                <div >
                    <label for="email" class="form-label text-muted">E-mail</label>
                    <input type="text" class="form-control shadow-none p-2 " id="email" placeholder="Enter your email">
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label text-muted">Password</label>
                    <input type="text" class="form-control shadow-none p-2" id="password" placeholder="Enter your password">
                </div>
                <div >
                    <button type="submit" class="btn btn-info w-100 p-2 mb-3 text-uppercase text-white">Sign in</button>
                </div>
                <p class="text-center text-muted">Forgot your password? <a class="text-info cursor-pointer">Reset Password</a></p>
            </form>
        </div>
    </main>
    <script src="js/bootstrap.js" ></script>

</body>
</html>