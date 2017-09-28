<?php
    $site = isset($_GET['site'])?$_GET['site'] : 'bob';

    //p7中可以这么写
    $site = $_GET['site'] ?? 'bob'
?>