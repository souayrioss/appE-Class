<?php
        $cnx= new mysqli("localhost","root","","e-class");
        if($cnx->connect_error){
            die("Connection failed: " . $cnx->connect_error);
            }


    function sidbar(){
        echo '
            <nav class="navbar navbar-expand d-flex flex-column align-items-start" id="sideBar">
                <div class="logo align-text-center border-start border-info border-5 mx-lg-4 mx-md-2 px-2 mt-3 mb-4">
                    <h1 class="mb-0">E-classe</h1>
                </div>
                <div class="profil text-center mb-lg-4 mx-auto">
                    <img class=" rounded-circle mb-3" src="img/youcode.png" alt="admin">
                    <h2>'.$_SESSION['firstName']. " ".$_SESSION['lastName'].'</h2>
                    <p class="rol text-info">'.$_SESSION['role'].'</p>
                </div>
                <ul class="navbar-nav d-flex flex-column mx-auto">
                    <li class="nav-item  rounded-3 px-lg-5 mb-2 ';
                    if(basename($_SERVER["REQUEST_URI"]) == "dashboard.php"){ echo "bg-info" ;}else{ echo "bg-transparent";}
                    echo ' "><a href="dashboard.php" class="nav-link text-black"> <i class="bi bi-house-door p-2"></i><span>Home</span></a></li>
                    <li class="nav-item  rounded-3 px-lg-5 mb-2 ';
                    if(basename($_SERVER["REQUEST_URI"]) == "course.php"){ echo "bg-info" ;}else{ echo "bg-transparent";}
                    echo '"><a class="nav-link text-black" href="course.php" ><i class="bi bi-bookmark p-2"></i><span>Course</span></a></li>
                    <li class="nav-item rounded-3 px-lg-5 mb-2 ';
                    if(basename($_SERVER["REQUEST_URI"]) == "student.php"){ echo "bg-info" ;}else{ echo "bg-transparent";}
                    echo ' "><a class="nav-link text-black" href="student.php" ><i class="bi bi-book p-2"></i><span>Student</span></a></li>
                    <li class="nav-item rounded-3 px-lg-5 mb-2 ';
                    if(basename($_SERVER["REQUEST_URI"]) == "payment.php"){ echo "bg-info" ;}else{ echo "bg-transparent";}
                    echo ' "><a class="nav-link text-black" href="payment.php" ><i class="bi bi-coin p-2"></i><span>Paiment</span></a></li>
                    <li class="nav-item rounded-3 px-lg-5 mb-2"><a class="nav-link text-black" href="#" ><i class="bi bi-clipboard-data p-2"></i><span>Report</span></a></li>
                    <li class="nav-item rounded-3 px-lg-5 mb-5"><a class="nav-link text-black" href="#" ><i class="bi bi-sliders p-2"></i><span>Setting</span></a></li>
                    <li class="nav-item rounded-3 text-center mt-md-3 "><a class="nav-link text-black" href="logout.php" ><span>Log out</span><i class="bi bi-box-arrow-right p-2"></i></a></li>
                </ul>
            </nav>
        ';
    }
    function navbar(){
        echo '
        <header class="my-container bg-white d-flex flex-row align-items-center justify-content-between p-3">
        <div>
            <button class="menu-btn bg-white shadow-none border-0" id="menu-btn" type="button"><img src="img/Vector.svg" alt="navbar" style="transform: rotate(180deg);"></button>
        </div>
        <form class="d-flex">
            <div class="d-flex form-inputs"> <input class="form-control" type="text" placeholder="Search any product..."> <i class="bi bi-search"></i> </div>
            <i class="bi bi-bell p-2 mx-1 mx-md-2 mx-lg-3 "></i>
        </form>
    </header>
        ';
    }
    // $student = array (
    //     ['oussama', 'souayrioss@gmail.com', '0612345678', '1234567890', '99-erth, 0000'],
    //     ['Qossay', 'qossayria@gmail.com', '068765432', '0987654321', '00-pliton, 9999'],
    //     ['zoubair', 'zoubairsou@gmail.com', '0656748930', '012938474', '66-ZOO, 2001']      
    // );
    $payment  = array (
        ['name' => 'oussama', 'paymentSchedule' => 'First', 'billNumber' => '00011225', 'amountPaid' => '300', 'nalanceAmount' => '500', 'date' => '00/00/0000'],
        ['name' => 'Qossay', 'paymentSchedule' => 'Last', 'billNumber' => '00044339', 'amountPaid' => '400', 'nalanceAmount' => '9999', 'date' => '01/01/0000'],
        ['name' => 'zoubair', 'paymentSchedule' => 'First', 'billNumber' => '00099771', 'amountPaid' => '200', 'nalanceAmount' => '0000', 'date' => '02/02/0000'],
        ['name' => 'Oways', 'paymentSchedule' => 'First', 'billNumber' => '00088571', 'amountPaid' => '2100', 'nalanceAmount' => '0001', 'date' => '07/09/9999'],
    );
        

    function check($data){
        $email= $data['email'];
        $pass=$data['password'];
        $req=" SELECT * FROM role r, user u where u.email ='$email' and u.password ='$pass' and r.id = u.id_role ";
        global $cnx;
        $res = $cnx -> query($req);
        if( $res -> num_rows > 0 ){
            $row = $res -> fetch_assoc();
                session_start();
                $_SESSION['firstName'] = $row['firstName'];
                $_SESSION['lastName'] = $row['lastName'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['role'] = $row['name'];

                if(isset($_POST['check'])){
                    setcookie('email', $row['email'], time() + 3600*24);
                    setcookie('password',$row['password'], time() + 3600*24);
                }else{
                    setcookie('email');
                    setcookie('password');
                }
                header('Location: dashboard.php'); 
        }else {
                header('Location: index.php?error');
        }
    }
    // Function for Json File
    function getStudents()
    {
        return json_decode(file_get_contents('js/student.json'),true);
    }
    // function putStudents()
    // {
    //     return file_put_contents('js/student.json',json_encode());
    // }
    function getStudentById($id)
    {
        $students = getStudents() ;

        foreach($students as $student){
            if ($student['id'] == $id){
                return $student;
            }
        }
    }
    function maxId(){
        $students =  getStudents()  ;
        $max=0;
            foreach($students as $student){
                    if ($max < $student['id']){
                        $max = $student['id'];
                    }
            }
            return $max;
            
    }
    function addStd($data)
    {       
            $imgName =$_FILES['image']['name'];
            $image = $_FILES['image'];
            move_uploaded_file($image['tmp_name'], "./img/$imgName");
            $fname = $data['firstName'];
            $lname = $data['lastName'];
            $email = $data['email'];
            $phone =$data['phone'];
            $enrollNumber = $data['enrollNumber'];
            $dateOfAdmission = $data['dateOfAdmission'];
            $id_rol=3;
            

        $req=" INSERT INTO user (image, firstname, lastname, email, phone, enrollNumber, dateOfAdmission,id_role )VALUES ('$imgName', '$fname', '$lname', '$email', '$phone', '$enrollNumber', '$dateOfAdmission' ,'$id_rol')";
        global $cnx;
        $cnx -> query($req);


            // $student = getStudents();
            // $add_arr = array(
            // 'id'   => maxId()+1,
            // 'name' => $data['name'],
            // 'email' => $data['email'],
            // 'phone' => $data['phone'],
            // 'enrollNumber' => $data['enrollNumber'],
            // 'date' => $data['date']
            // );
            // $student[] = $add_arr;
            
            // $datas = json_encode($student, JSON_PRETTY_PRINT);
            // file_put_contents('js/student.json', $datas);
    }
    function addCrs($data)
    {       
        $imgName =$_FILES['image']['name'];
        $image = $_FILES['image'];
        move_uploaded_file($image['tmp_name'], "./img/$imgName");
        $title = $data['title'];
        $categorie =$data['categorie'];
        $description = $data['description'];
        $price = $data['price'];
        $date = date("Y-m-d");

        $req=" INSERT INTO course (image, title, categorie, description, price, dateCourse )VALUES ('$imgName', '$title', '$categorie', '$description', '$price', '$date')";
        global $cnx;
        $cnx -> query($req);
        

    }
        

    function updateStd($data,$id)
    {
            $fname = $data['firstName'];
            $lname = $data['lastName'];
            $email = $data['email'];
            $phone =$data['phone'];
            $enrollNumber = $data['enrollNumber'];
            $dateOfAdmission = $data['dateOfAdmission'];
            $req = "UPDATE user SET firstName= '$fname', lastName = '$lname', email = '$email', phone = '$phone', enrollNumber = '$enrollNumber', dateOfAdmission ='$dateOfAdmission'  WHERE id = '$id' ";
            global $cnx;
            $cnx -> query($req);
        // $students = getStudents() ;
        // foreach($students as $key => $student){
        //     if($student['id'] == $id ){
        //         $students[$key] = array_merge($student,$data);
        //     }
        // } 
        // file_put_contents('js/student.json',json_encode($students)); 
    }
    function deleteStd($id){
        $students = getStudents() ;
        foreach($students as $key => $student){
            if($student['id'] == $id ){
                unset($students[$key]);
                
            }
        }
        file_put_contents('js/student.json',json_encode($students));  
    }

?>