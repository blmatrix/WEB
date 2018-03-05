<?php

    include_once('init.php');

    $new_token = $config['token_rand'];
    $sql_token = "UPDATE users SET token='".$new_token."' WHERE id=1";
    $sql_token_lifetime = "UPDATE users SET token_life=".time()." WHERE id=1";

    if ($config['conn']->query($sql_token) === true && $config['conn']->query($sql_token_lifetime)) {
        $row['token'] = $new_token;
        echo $new_token;
    } else {
        echo "Error updating record: " . $config['conn']->error;
    }
