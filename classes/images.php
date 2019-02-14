<?php

ini_set('display_errors', true);
error_reporting(E_ALL);

class images {

    public function uploadImage($image){

        $tipo = $image['type'];

        if(in_array($tipo, array('image/jpeg', 'image/png'))){

            $tempname= rand(0, 9999).'jpg';
            move_uploaded_file($image['tmp_name'], 'assets/images/'.$tempname);

            list($width_orig, $height_orig) = getimagesize('assets/images/'.$tempname);
            $ratio= $width_orig/$height_orig;

            $width=640;
            $height=908;

            if($width/$height > $ratio){
                $width= $height*$ratio;
            }else{
                $height= $width/$ratio;
            }


            $img= imagecreatetruecolor($width, $height);
            if($tipo== 'image/jpeg'){
                $origi= imagecreatefromjpeg('assets/images/'.$tempname);
            }elseif($tipo=='image/png'){
                $origi= imagecreatefrompng('assets/images/'.$tempname);
            }

            imagecopyresampled($img, $origi, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
            imagejpeg($img, 'assets/images/'.$tempname, 80);
            
        }

        

    }
}