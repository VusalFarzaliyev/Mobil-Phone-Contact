<?php
include "config.php";
$id = $_GET['id'];
$sql= "SELECT * FROM list WHERE $id=id";
//print_r($sql);
//exit();
$result=mysqli_query($conn,$sql);
$row= mysqli_fetch_assoc($result);
$name = $row['name'];
$phone= $row['phone'];
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['submit']) && !empty($_POST['name'])&& !empty($_POST['phone'])){
        $name     = $_POST['name'];
        $phone    =$_POST['phone'];
        $sql= " UPDATE list SET name= '$name', phone = '$phone' WHERE id=$id"; 
        $update = mysqli_query($conn,$sql);
        if(!$update){
            echo "Problem var";
            print_r($sql);
        }
        else{
            header("Location:list.php");
        }
    }
}

?>
<html>
    <head>
        <title>Edit</title>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <br>
        <div class="container-md con">
            <form action="<?=$_SERVER['PHP_SELF'];?>?id=<?=$_GET['id'];?>" method="POST">
                    <label for="exampleInputName">Name:</label>
                    <input value="<?php echo $name;?>" type="text" class="form-control" name="name" placeholder="Enter Name" >
                    <label for="exampleInputPhone">Phone:  </label>
                    <input value="<?php echo $phone;?>" type="tel" class="form-control" name="phone" placeholder="Enter Phone"><br>
                    <button name="submit" type="submit" value="UPDATE DATA" class="btn btn-success">Edit</button>
                </form>
                <br>
        </div>
    </body>
</html>