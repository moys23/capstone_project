<?php

function checkImage($img_file, $targetdir, $targetimagename){

 $stat = array(
 'fileSizeOk' => '',
 'fileExists' => '',
 'fileType' => ''
 );

    $tmp_filename = $img_file['tmp_name'];
    $file_size = $img_file['size'];
    $img_size = getimagesize($img_file['tmp_name']);
    $img_mime = $img_size['mime'];
    $acceptable_files = array('image/jpeg','image/png','image/jpg');

    if(! in_array($img_mime, $acceptable_files)){
        $stat['fileType'] = "This file is not an Image .[jpg / png] only";
    }
    if($img_size === false || $file_size > 500000){
        $stat['fileSizeOk'] = "Image size is not acceptable [5MB below only]";
    }
    if(file_exists($targetdir."/".$targetimagename)){
        $stat['fileExists'] = "File Exists. Change the Item Name";
    }

    return $stat;
}


 ?>
