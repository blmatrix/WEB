<?php
    session_start();
    $config = [
        'home_url' => 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']),
        'conn' => mysqli_connect("localhost", "homestead", "secret", "webdb"),
        'token_time' => 60,
        'token_rand' => substr(md5(mt_rand()), 0, 8)."-".substr(md5(mt_rand()), 0, 8)."-".substr(md5(mt_rand()), 0, 8)."-".substr(md5(mt_rand()), 0, 8),
        'api_key' => 'BOTHD-O01I9-O9G3X-SFIX7',
        'api_partner' => 'betchange',
        'request_time_diff' => 60
    ];
