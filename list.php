<?php
include "config.php";
if(isset($_POST['search'])){
    $searchKey=$_POST['search'];
    $sql = "SELECT * FROM list WHERE `name` LIKE '%$searchKey%' ";
    $query = mysqli_query($conn,$sql);
    
    if(!$query){
        echo "sehv var";
    }
    else{
        $result = mysqli_fetch_all($query,1);    
        }
}else{ 
    $sql = " SELECT `name`,`id`,`phone`  FROM  `list` ORDER BY `name` ASC ";
    $select    = mysqli_query($conn,$sql);
    $result    = mysqli_fetch_all($select,1);
}

?>

<html>
    <head>
        <title>Main Page template</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="list.css">
        
    </head>
    <body>
        <br>
        <div class="container-md con">
            <div>
                <i class="fa fa-address-book icon_contact" style="font-size:48px;"></i>
                <h3 class="kontakt_text">Kontaktlar</h3>
                <a style=" margin-top:-50px;" href="main.php" class="btn btn-primary">Geri</a>
                <a href="index.php">
                 <img src="image/icons/add.png" alt="add">
                </a><hr>
            </div>

            <div>
                
                <form class="form-inline my-2 my-lg-0" action="list.php" method="POST">
                    <input name="search" class="form-control mr-sm-2" style="width:75%;float:left;" type="search" placeholder="Axtar" aria-label="Search">
                    <button name="submit" class="btn btn-outline-success my-2 my-sm-0" style="width:15%;float:left; margin-left:10px;" type="submit">Axtar</button>  
                </form>

            </div><br>
               <br><hr>

                <table class="table table-sm table-success">
                    <thead>
                        <tr>
                        <th scope="col">Ad</th>
                        <th scope="col">Nömrə</th>
                        <th>Əməliyyat</th>
                        </tr>
                    </thead>
                <tbody>
         <?php 
                foreach($result as $key => $value)
                {
        ?>
            <tr>
            <td><?=$value['name'];?></td>
            <td><?=$value['phone'];?></td>
            <td>
                <a href="edit.php?id=<?=$value['id'];?>" name="edit" class="btn btn-primary">Düzəlt</a>
                <a href="delete.php?deleteid=<?=$value['id'];?>" name="delete" class="btn btn-danger">Sil</a>
            </td>
            </tr>
        <?php  } ?>
    
  </tbody>
</table>


        </div>
    </body>
</html>