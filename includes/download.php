<?php
if(!empty($_GET['file'])){
    $fileName = basename($_GET['file']);
    // $filePath = 'images/'.$fileName;
    $filePath = 'https://chart.googleapis.com/chart?cht=qr&chs=175x175&chl='.$fileName;
    if(!empty($fileName) && file_exists($filePath)){
        // Define headers
        header('Content-Length: ' . filesize($filePath));
        header('Content-Encoding: none');
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$fileName");
        header("Content-Type: image/jpg");
        header("Content-Transfer-Encoding: binary");

        // Read the file
        readfile($filePath);

    }else{
        echo 'The File '.$fileName.' does not exist.';
        exit();
    }
}
