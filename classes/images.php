<?php

class images {

    public function uploadImage($image){

        $tipo = $image['type'];

        if(in_array($tipo, array('image/jpeg', 'image/png'))){

            move_uploaded_file($image['tmp_name'], 'assets/images/123.jpg');
        }

        

    }
}