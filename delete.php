<?php
    require_once 'include.php';
    $id= filter_var($_GET['id'],FILTER_SANITIZE_NUMBER_INT);
    $req = "DELETE FROM user WHERE id = '$id'";
    $cnx -> query($req);
    // $id=$_GET['id'];
    // deleteStd($id);
    header('Location: student.php');
?>