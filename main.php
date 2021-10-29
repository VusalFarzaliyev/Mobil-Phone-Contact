<?php
include "config.php";

?>



<html>
    <head>
        <title>Main Page template</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <br>
        <div class="container-md con">
            <form>
                    <i class="fa fa-address-book icon_contact" style="font-size:48px;"></i>
                    <h3 class="kontakt_text">Kontaktlar</h3><hr>
                    <a href="index.php" class="first_a">
                        <img src="image/icons/contact.png" alt="contact">
                    </a>
                    <span class="ox"> &#8592;</span>
                    <h4 class="contact_add"> Əlavə et</h4><hr>
                    <a href="list.php" class="second_a">
                        <img src="image/icons/list.png" alt="list">
                    </a>
                    <span class="ox"> &#8592;</span>
                    <h4 class="list"> Siyahı</h4><hr>
                </form>
                <br>
        </div>
    </body>
</html>