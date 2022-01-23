<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="file list student paltform E-classe">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
    <title>Student</title>
</head>
<body style="background-color: #f8f8f8;">
<?php
        require_once 'include.php';
        sidbar();
        navbar();
    ?>
            <main class="boxes position-absolute p-3" >
                <header class="d-flex flex-row justify-content-between pb-3 m-3 border-bottom border-2 ">
                        <div> 
                        <h3 style="font-weight: 700;">Students List</h3>
                    </div>
                    <div>
                        <img class="mx-3" src="img/sort.svg" alt="sort" style="height: 19px;">
                        <button type="button" class="btn btn-info text-white  p-2 rounded-3">ADD NEW STUDENT</button>
                    </div>
                </header>
                <div class="table-responsive">
                <table class="table" id="tab">
                    <thead class=" text-start text-black-50 align-middle">
                        <tr>
                            <th > </th>
                            <th >Name</th>
                            <th >Email</th>
                            <th >Phone</th>
                            <th >Enroll Number</th>
                            <th >Date of admission</th>
                            <th > </th>
                            <th > </th>
                        </tr>
                    </thead>
                    <tbody class=" border-0 ">
                    <?php
                        foreach($student as $row){
                            echo '<tr class="bg-white align-middle" >
                            <td class="text-center "><img  src="img/username.png" alt="username"></td>';
                            foreach($row as $col){
                                echo '
                                    <td >'  . $col. '</td>
                            ';
                            }

                            echo '
                                <td ><i class="bi bi-pencil text-info"></i></td>
                                <td ><i class="bi bi-trash text-info"></i></td>
                            </tr>';
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </main>
            
            <script src="js/bootstrap.js" ></script>
            <script>
                var menu_btn = document.querySelector("#menu-btn")
                var sidebar = document.querySelector("#sideBar")
                var btn = document.querySelector(".menu-btn")
                var boxes = document.querySelector(".boxes")
                menu_btn.addEventListener("click",()=>{
                    sidebar.classList.toggle("active-nav")
                    btn.classList.toggle("active-cont")
                    boxes.classList.toggle("active-boxes")
                })
            </script>
</body>
</html>