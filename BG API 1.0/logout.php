<?php
    include_once('init.php');
    if (isset($_SESSION['user_id'])) {
        echo 'Logout successful';
        session_destroy();
        header('Location: ' . $config['home_url']);
    }
