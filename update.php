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
    <?php
    require_once 'include.php';
    $id=$_GET['id'];
    $req = "SELECT * FROM student WHERE id = $id ";
    $res = $cnx -> query($req);
    if ($res -> num_rows > 0){
        $student = $res -> fetch_assoc();
    }
    if($_SERVER['REQUEST_METHOD']==='POST'){
        updateStd($_POST,$id);
        header('location: student.php');
    }
    ?>
    <main class="container d-flex justify-content-center align-items-center">
            <div class="login-form bg-white p-5 ">
                <form class="row g-3" method="POST" >
                    <div class="modal-body ">
                        <div class="d-flex flex-column   ">
                            <label class="form-label text-muted ">First Name</label>
                            <input type="text" class="form-control shadow-none" name="firstName" value="<?php echo $student['firstName'] ?>"> 
                            <label class="form-label text-muted mt-1">Last Name</label>
                            <input type="text" class="form-control shadow-none" name="lastName" value="<?php echo $student['lastName'] ?>"> 
                            <label class="form-label text-muted mt-1">email</label>
                            <input type="text" class="form-control shadow-none " name="email" value="<?php echo $student['email'] ?>" >
                            <label class="form-label text-muted mt-1">phone</label>
                            <input type="tel" class="form-control shadow-none" name="phone" value="<?php echo $student['phone'] ?>" > 
                            <label class="form-label text-muted mt-1">enroll Number</label>
                            <input type="tel" class="form-control shadow-none " name="enrollNumber" value="<?php echo $student['enrollNumber'] ?>" >
                            <label for="name" class="form-label text-muted mt-1">date Of Admission</label>
                            <input type="date" class="form-control shadow-none " name="dateOfAdmission" value="<?php echo $student['dateOfAdmission'] ?>" > 
                        </div>
                        <button type="submit" class="btn btn-info mt-3 px-5  text-white fw-bold " >Save</button>
                    </div>
                </form>
            </div>
    </main>
</body>
</html>