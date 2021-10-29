<?php
include "config.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['submit']) && !empty($_POST['name'])&& !empty($_POST['phone'])){
        $name     = $_POST['name'];
        $phone    =$_POST['phone'];
        $id       =$_POST['id'];
        $sql= " INSERT INTO list (`name`,`phone`) VALUES ('$name',$phone)"; 
        $insert = mysqli_query($conn,$sql);
        if(!$insert){
            echo "Problem var";
            //print_r($sql);
        }
        else{
         header("Location:list.php");
        }
    }
}

?>
<html>
    <head>
        <title>Contact Add template</title>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <br>
        <div class="container-md con">
            <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
                    <label  for="exampleInputName">Ad:</label>
                    <input type="name" class="form-control" name="name" placeholder="Adınız">
                    <label for="exampleInputPhone">Nömrə: (+994505005050) </label>
                    <input type="tel" class="form-control" name="phone" placeholder="Nömrəniz"><br>
                    <button name="submit" type="submit" value="submit" class="btn btn-success">Saxla</button>
                    <a href="main.php" class="btn btn-primary">Kontaktlara Get</a>
                    <a href="list.php" class="btn btn-danger">Siyahını gör</a>
                </form>
                <br>
        </div>
    </body>
</html>