<?php session_start(); 
if(empty($_SESSION)){
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="file payments for student paltform E-classe">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
    <title>Payments</title>
</head>
<body>
    <?php
        require_once 'include.php';
        $id= filter_var($_GET['id'],FILTER_SANITIZE_NUMBER_INT);
        $req = "SELECT * FROM student S, course C, payment P   where   P.id = $id  and S.id = P.id_student and C.id = P.id_course";
        $res = $cnx -> query($req);
        $row = $res -> fetch_assoc();
    ?>
    <div class="login-logo border-start border-info border-5 m-4 px-2 mb-5">
                    <h1 class="fw-bold">E-classe</h1>
                </div>
<main class="container-fluid d-flex justify-content-between align-items-center">
            
                <div class="login-form bg-white p-2 py-4 border border-warning border-2 rounded shadow" >
                    <div class="login-title text-center mb-2">
                        <h2 class="text-uppercase">Student</h2>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control" value="<?php echo $row['firstName'] ?>">
                        </div>
                        <div class="col">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="form-control" value="<?php echo $row['lastName'] ?>">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <label class="form-label ">Email</label>
                            <input type="text" class="form-control" value="<?php echo $row['email'] ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="form-label ">Phone</label>
                            <input type="text" class="form-control" value="<?php echo $row['phone'] ?>">
                        </div>
                        <div class="col">
                            <label class="form-label ">Date of admission</label>
                            <input type="text" class="form-control" value="<?php echo $row['dateOfAdmission'] ?>">
                        </div>
                    </div>
                </div>
                <div class="login-form bg-white p-2 py-4 border border-warning border-2 mx-2 rounded shadow ">
                    <div class="login-title text-center mb-2">
                        <h2 class="text-uppercase">COURSE</h2>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" value="<?php echo $row['title'] ?>" >
                        </div>
                        <div class="col">
                            <label class="form-label">Categorie </label>
                            <input type="text" class="form-control" value=" <?php echo $row['categorie'] ?>" >
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <label class="form-label ">Description </label>
                            <input type="text" class="form-control" value="<?php echo $row['description'] ?> ">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="form-label ">Price</label>
                            <input type="text" class="form-control" value="<?php echo $row['price'] ?>" >
                        </div>
                        <div class="col">
                            <label class="form-label ">Date</label>
                            <input type="text" class="form-control" value="<?php echo $row['dateCourse'] ?>" >
                        </div>
                    </div>
                </div>
                <div class="login-form bg-white p-2 py-4 border border-warning border-2 rounded shadow">
                    <div class="login-title text-center mb-2">
                        <h2 class="text-uppercase">Payment</h2>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <label class="form-label">Payment Schedule</label>
                            <input type="text" class="form-control" value="<?php echo $row['paymentSchedule'] ?>">
                        </div>
                        <div class="col">
                            <label class="form-label">Amount Paid </label>
                            <input type="text" class="form-control" value="<?php echo $row['amountPaid'] ?>" >
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <label class="form-label ">Bill Number</label>
                            <input type="text" class="form-control" value="<?php echo $row['billNumber'] ?>" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="form-label ">Date payment</label>
                            <input type="text" class="form-control" value="<?php echo $row['date'] ?>" >
                        </div>
                        <div class="col">
                            <label class="form-label ">Balance Amount </label>
                            <input type="text" class="form-control" value="<?php echo $row['balanceAmount'] ?>" >
                        </div>
                    </div>
                </div>
    </main>
</body>
</html>