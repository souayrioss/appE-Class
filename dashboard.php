<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="dashboard paltform E-classe">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
    <title>Dashboard</title>
</head>
<body>
    <?php
        require_once 'include.php';
        sidbar();
        navbar();
    ?>
    
    
    <main class="boxes position-absolute">
        <div class="row gap-3 my-4 mx-2">
            <div class="col  bg-std rounded-3 p-4" style="min-width: 200px;">
                <div>
                    <img class="mb-3 p-0" src="img/student.svg" alt="student">
                    <h2 class="fs-6 fw-normal">Students </h2>
                </div>
                <div >
                    <p class="fs-3 mb-0 mt-5 fw-bold text-end" >243</p>
                </div>
            </div>
            <div class="col bg-crs rounded-3 p-4 " style="min-width: 200px;">
                <div>
                    <img class="mb-3 p-0" src="img/course.svg" alt="Course">
                    <h2 class="fs-6 fw-normal" >Course </h2>
                </div>
                <div >
                    <p class="fs-3 mb-0 mt-5 fw-bold text-end" >13</p>
                </div>
            </div>
            <div class="col  bg-pay  rounded-3 p-4 " style="min-width: 200px;">
                <div>
                    <img class="mb-3 p-0" src="img/payment.svg" alt="payment">
                    <h2 class="fs-6 fw-normal" >Payments</h2>
                </div>
                <div >
                    <p class="fs-3 mb-0 mt-5 fw-bold text-end" ><span class="fs-5">DHS</span> 556,000</p>
                </div>
            </div>
            <div class="col bg-use rounded-3 p-4 " style="min-width: 200px;">
                <div>
                    <img class="mb-3 p-0" src="img/user.svg" alt="user">
                    <h2 class="fs-6 fw-normal">Users</h2>
                </div>
                <div >
                    <p class="fs-3 mb-0 mt-5 fw-bold text-end" >3</p>
                </div>
            </div>
        </div>
    </main>

            
    <script src="js/bootstrap.js" ></script>
    <script>
        var menu_btn = document.querySelector("#menu-btn")
        var sidebar = document.querySelector("#sideBar")
        var btn = document.querySelector(".menu-btn")
        var boxes = document.querySelector(".boxes")
        var box = document.querySelectorAll(".box")
        menu_btn.addEventListener("click",()=>{
            sidebar.classList.toggle("active-nav")
            btn.classList.toggle("active-cont")
            boxes.classList.toggle("active-boxes")
            box.forEach(boxs=>{
                boxs.classList.toggle("active-box")
            })
        })
    </script>
</body>
</html>