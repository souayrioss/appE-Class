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
<body style="background-color: #f8f8f8;">
<?php
        require_once 'include.php';
        sidbar();
        navbar();
    ?>
            <main class="container-fluid boxes position-absolute p-3" >
                <header class=" d-flex flex-row justify-content-between m-3 border-bottom border-2 ">
                        <div> 
                        <h3 style="font-weight: 700;">Payment Details</h3>
                    </div>
                    <div >
                        <img src="img/sort.svg" alt="sort" style="height: 19px;">
                    </div>
                </header>
                <div class="table-responsive">
                    <table class=" table table-striped table-hover">
                        <thead class=" text-start ">
                            <tr>
                                <th >Name</th>
                                <th >Payment Schedule</th>
                                <th >Bill Number</th>
                                <th >Amount Paid</th>
                                <th >Balance amount</th>
                                <th >Date</th>
                                <td > </td>
                            </tr>
                        </thead>
                        <tbody class="bg-white border-0">
                        <?php
                        $req = "SELECT * FROM student S, course C, payment P where S.id = id_student and C.id = id_course";
                        $res = $cnx -> query($req);
                        if ($res -> num_rows > 0){
                        while($row = $res -> fetch_assoc()){
                                    echo '<tr class="bg-white align-middle" >
                                        <td>'.$row['firstName']." ". $row['lastName'].'</td>
                                        <td>'.$row['paymentSchedule'].'</td>
                                        <td>'.$row['billNumber'].'</td>
                                        <td>'.$row['amountPaid'].'</td>
                                        <td>'.$row['balanceAmount'].'</td>
                                        <td>'.$row['date'].'</td>'; ?>
                                        <td class="py-3"><a href="paymentDetail.php?id=<?php echo $row['id']; ?>"><i class="bi bi-eye text-info"></i></a></td>
                                        </tr><?php
                                }
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