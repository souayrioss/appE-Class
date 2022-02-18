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
    <meta name="description" content="dashboard paltform E-classe">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
    <title>Courses</title>
</head>
<body>
    <?php
        require_once 'include.php';
        sidbar();
        navbar();
    ?>
    
    
    <main class="boxes position-absolute">
    <header class=" d-flex flex-row justify-content-between  mx-5 py-3 border-bottom border-2 ">
                    <div > 
                        <h3 style="font-weight: 700;">Courses</h3>
                    </div>
                    <div class="d-flex flex-nowrap align-items-center ">
                        <button type="button" class="btn btn-warning text-white px-1 px-md-3 rounded-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >ADD NEW COURSE</button>
                    </div>
                </header>
                <div class="modal fade" id="staticBackdrop" >
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header ">
                                    <h5 class="modal-title">ADD NEW COURSE</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <?php
                                    require_once 'include.php';
                                    if($_SERVER['REQUEST_METHOD']==='POST'){
                                        if(!empty($_POST['title']) && !empty($_POST['categorie']) && !empty($_POST['description']) && !empty($_POST['price'])){
                                        addCrs($_POST);
                                        
                                        }
                                    }
                                ?>
                                <form class="row g-3" method="post" enctype="multipart/form-data" >
                                    <div class="modal-body ">
                                        <div class="d-flex flex-column  align-items-center ">
                                            <label class="form-label text-muted ">Image</label>
                                            <input type="file" class="form-control shadow-none w-75" name="image" required> 
                                            <label class="form-label text-muted mt-2">Title</label>
                                            <input type="text" class="form-control shadow-none w-75" name="title" required> 
                                            <label class="form-label text-muted mt-2">Categorie</label>
                                            <select class="form-label text-muted mb-0 w-75 py-2" name="categorie" required> 
                                                <option value=""></option>
                                                <option value="front-end">Front-End</option>
                                                <option value="back-end">Back-End</option>
                                                <option value="dataBase">DataBase</option>
                                            </select>
                                            <label class="form-label text-muted mt-2">Description </label>
                                            <input type="text" class="form-control shadow-none w-75" name="description" required>
                                            <label class="form-label text-muted mt-2">Price </label>
                                            <input type="tel" class="form-control shadow-none w-75 " name="price" required> 
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="submit" class="btn btn-info px-5 text-white fw-bold" >Save</button>
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
        <div class="row gap-3 my-4 mx-5">
            <?php 
            $req = "SELECT * FROM course ";
            $res = $cnx -> query($req);
            if ($res -> num_rows > 0){
            while($row = $res -> fetch_assoc()){ ?>
                <div class="col bg-white rounded-3 p-4 shadow " style="min-width: 22vw;max-width: 25vw;">
                    <div>
                        <img class="mb-3 p-0 w-100 h-50 " src="img/<?php echo $row['image']; ?>" alt="student">
                    </div>
                    <div>
                        <h2 class="fs-6 fw-bold "><?php echo $row['title']; ?></h2>
                    </div>
                    <div class="mt-3 ">
                        <p><?php echo $row['description']; ?></p>
                    </div>
                    <div class="d-flex gap-3 justify-content-md-end d-flex align-items-end ">
                        <p class="fs-5 fw-bold text-end  mb-0" ><?php echo $row['price']; ?> DHs</p>
                        <a class="btn btn-warning px-3 ">Buy</a>
                    </div>
                    
                </div>
            <?php }} ?>
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