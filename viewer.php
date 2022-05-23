<?php
    $ib = file_get_contents("cat.jpg");
    header('Content-type: image/jpeg');
    $fh = fopen("php://temp", "w+");
    $is64 = base64_encode($ib);
    fwrite($fh, $is64);
    rewind($fh); // fseek($fh, 0);
    $is64_2 = fread($fh, strlen($is64));
    echo base64_decode($is64_2);
?>