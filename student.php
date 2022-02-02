<?php session_start(); ?>
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
                <header class="d-flex flex-wrap justify-content-between align-items-center pb-3 my-3 border-bottom border-2 ">
                    <div> 
                        <h3 class="fs-2 fw-bolder mx-3">Students List</h3>
                    </div>
                    <div class="d-flex flex-nowrap align-items-center ">
                        <img class="mx-2 h-50" src="img/sort.svg" alt="sort" ">
                        <button type="button" class="btn btn-info text-white px-1 px-md-3 rounded-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >ADD NEW <i class="bi bi-person-plus-fill"></i></button>
                        <button type="button" class="btn btn-info text-white mx-2 px-1 px-md-3 rounded-3" data-bs-toggle="modal" data-bs-target="#staticAplFile" >UPLOAD <i class="bi bi-file-diff-fill"></i></button>
                    </div>
                    <!-- modal for add students -->
                    <div class="modal fade" id="staticBackdrop" >
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">ADD NEW STUDENT</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <?php
                                    require_once 'include.php';
                                    if($_SERVER['REQUEST_METHOD']==='POST'){
                                        addStd($_POST);
                                        header('Location: student.php');
                                    }
                                ?>
                                <form class="row g-3" method="post" >
                                    <div class="modal-body ">
                                        <div class="d-flex flex-column  align-items-center ">
                                            <label class="form-label text-muted ">Name</label>
                                            <input type="text" class="form-control shadow-none w-75" name="name"> 
                                            <label class="form-label text-muted mt-3">email</label>
                                            <input type="text" class="form-control shadow-none w-75" name="email" >
                                            <label class="form-label text-muted mt-3">phone</label>
                                            <input type="tel" class="form-control shadow-none w-75 " name="phone" > 
                                            <label class="form-label text-muted mt-3">enroll Number</label>
                                            <input type="tel" class="form-control shadow-none w-75" name="enrollNumber"  >
                                            <label for="name" class="form-label text-muted mt-3">date Of Admission</label>
                                            <input type="date" class="form-control shadow-none w-75" name="date"  > 
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="submit" class="btn btn-info px-5 text-white fw-bold" >Save</button>
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- modal for upload file -->
                    <div class="modal fade" id="staticAplFile" data-bs-backdrop="static" >
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Upload Files</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form class="row g-3" method="post" >
                                    <div class="modal-body ">

                                            <label class="form-label text-muted ">Name</label>
                                            <input type="file" class="form-control shadow-none w-75">
                                        
                                    </div>
                                    <div class="modal-footer">
                                    <button type="submit" class="btn btn-info px-5 text-white fw-bold" >upload</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="table-responsive">
                <table class="table" id="tab">
                    <thead class=" text-start align-middle">
                        <tr>
                            <td > </td>
                            <th >Name</th>
                            <th >Email</th>
                            <th >Phone</th>
                            <th >Enroll Number</th>
                            <th >Date of admission</th>
                            <td > </td>
                            <td > </td>
                        </tr>
                    </thead>
                    <tbody class=" border-0 ">
                    <?php
                        $student = getStudents();
                        if(!empty($student)){
                        foreach($student as $row){ 
                            echo'
                            <tr class="bg-white align-middle">
                                <td class="text-center "><img  src="img/username.png" alt="username"></td>
                                <td>' . $row['name'] . '</td>
                                <td>' . $row['email'] . '</td>
                                <td>' . $row['phone'] . '</td>
                                <td>' . $row['enrollNumber'] . '</td>
                                <td>' . $row['date'] . '</td>'; ?>
                                <td><a href="update.php?id=<?php echo $row['id']; ?>"><i class="bi bi-pencil text-info"></i></a></td>
                                <td><a href="delete.php?id=<?php echo $row['id']; ?>"><i class="bi bi-trash text-info"></i></a> </td>
                            </tr>
                            <?php
                            }
                        }
                    ?>
                        <!-- // foreach($student as $row){
                        //     echo '<tr class="bg-white align-middle" >
                        //     <td class="text-center "><img  src="img/username.png" alt="username"></td>';
                        //     foreach($row as $col){
                        //         echo '
                        //             <td >'  . $col. '</td>
                        //     ';
                        //     }

                        //     echo '
                        //         <td ><i class="bi bi-pencil text-info"></i></td>
                        //         <td ><i class="bi bi-trash text-info"></i></td>
                        //     </tr>';
                        // }
                        ?> -->
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