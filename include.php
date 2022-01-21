<?php
    function sidbar(){
        echo '
            <nav class="navbar navbar-expand d-flex flex-column align-items-start" id="sideBar">
                <div class="logo align-text-center border-start border-info border-5 mx-lg-4 mx-md-2 px-2 mt-3 mb-4">
                    <h1 class="mb-0">E-classe</h1>
                </div>
                <div class="profil text-center mb-lg-4 mx-auto">
                    <img class=" rounded-circle mb-3" src="img/youcode.png" alt="admin">
                    <h2>Admin name</h2>
                    <p class="rol text-info">Admin</p>
                </div>
                <ul class="navbar-nav d-flex flex-column mx-auto">
                    <li class="nav-item  rounded-3 px-lg-5 mb-2"><a class="nav-link text-black " href="dashboard.php" > <i class="bi bi-house-door p-2"></i><span>Home</span></a></li>
                    <li class="nav-item rounded-3 px-lg-5 mb-2"><a class="nav-link text-black" href="#" ><i class="bi bi-bookmark p-2"></i><span>Course</span></a></li>
                    <li class="nav-item rounded-3 px-lg-5 mb-2"><a class="nav-link text-black" href="student.php" ><i class="bi bi-book p-2"></i><span>Student</span></a></li>
                    <li class="nav-item rounded-3 px-lg-5 mb-2"><a class="nav-link text-black" href="payment.php" ><i class="bi bi-coin p-2"></i><span>Paiment</span></a></li>
                    <li class="nav-item rounded-3 px-lg-5 mb-2"><a class="nav-link text-black" href="#" ><i class="bi bi-clipboard-data p-2"></i><span>Report</span></a></li>
                    <li class="nav-item rounded-3 px-lg-5 mb-5"><a class="nav-link text-black" href="#" ><i class="bi bi-sliders p-2"></i><span>Setting</span></a></li>
                    <li class="nav-item rounded-3 text-center mt-md-3 "><a class="nav-link text-black" href="index.php" ><span>Log out</span><i class="bi bi-box-arrow-right p-2"></i></a></li>
                </ul>
            </nav>
        ';
    }
    function navbar(){
        echo '
        <div class="my-container bg-white d-flex flex-row align-items-center justify-content-between p-3">
        <div>
            <button class="menu-btn bg-white shadow-none border-0" id="menu-btn" type="button"><img src="img/Vector.svg" alt="navbar" style="transform: rotate(180deg);"></button>
        </div>
        <form class="d-flex">
            <div class="d-flex form-inputs"> <input class="form-control" type="text" placeholder="Search any product..."> <i class="bi bi-search"></i> </div>
            <i class="bi bi-bell p-2 mx-3"></i>
        </form>
    </div>
        ';
    }


?>