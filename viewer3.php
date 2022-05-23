<?php
    $ib = file_get_contents("cat.jpg");
    header('Content-type: image/jpeg');
    // this doesn't work since php 7.4
    // redirects php://stdout to error_log
    // which is usually /dev/stderr
    // e.g. docker <container_name> log | tail -10
    file_put_contents("php://stdout", $ib);
?>