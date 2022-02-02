<?php
    require_once 'include.php';
    $id=$_GET['id'];
    deleteStd($id);
    header('Location: student.php');
?>