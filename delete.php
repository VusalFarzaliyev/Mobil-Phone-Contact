<?php
    include "config.php";

    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];
        $sql = "DELETE FROM `list` WHERE id=$id";
        $result=mysqli_query($conn,$sql);
    }
    if(!$result){
        echo "Xeta var!";
    }
    else{
        header("Location:list.php");
    }



?>