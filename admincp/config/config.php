<?php
    $mysqli = new mysqli("localhost","root","","web_mysqli");

    // Check connection
    if ($mysqli -> connect_errno) {
        echo "kết nối cơ sở dữ liệu không thành công: " . $mysqli -> connect_error;
        exit();
    }
?>