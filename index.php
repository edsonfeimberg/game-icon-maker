<?php

require 'classes/images.php';

$a= new images();


if(isset($_FILES['image'])){
    $image= $_FILES['image'];

    $a->uploadImage($image);

}


?>




<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,user-scalable=0">

        <link rel="stylesheet" type="text/CSS" href="assets/css/style.css">

        <title>Iconifier</title>

    </head>

    <body>

        <header>

            <nav>
                <div class="logo">
                    Iconifier
                </div>
            </nav>

        </header>

        <div class="cover-selector">
            <div class="cover-placeholder">
                <h2 class="instruction">Upload Cover</h2>

            </div>

            <div class="controlls">

            <form method="POST" enctype="multipart/form-data">
           
            <input type="file" name="image">

            </div>

            <input class="upload-button" value="Upload" type="submit">

        </form>
        
        </div>


    </body>
</html>