<?php

    $path =  './images/logo.png';
    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data = file_get_contents($path);
    $logo_base64 = 'data:image/'.$type.';base64,' . base64_encode($data);

    $path =  './images/sofa.png';
    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data = file_get_contents($path);
    $img_base64 = 'data:image/'.$type.';base64,' . base64_encode($data);

    $path =  './images/conditions-of-sale.png';
    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data = file_get_contents($path);
    $condition1_base64 = 'data:image/'.$type.';base64,' . base64_encode($data);

    $path =  './images/conditions-of-sale-last.png';
    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data = file_get_contents($path);
    $condition2_base64 = 'data:image/'.$type.';base64,' . base64_encode($data);

    include_once("./main.html");