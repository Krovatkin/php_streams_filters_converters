<?php
    $ib = file_get_contents("php://filter/read=convert.base64-encode/resource=cat.jpg");
    // Available filters: https://www.php.net/manual/en/filters.php
    // Conversion filters (convert.base64-encode)
    file_put_contents("php://filter/write=convert.base64-decode/resource=cat2.jpg", $ib);
?>