<?php
    $dsn = 'mysql:host=sql2.njit.edu;dbname=sr674';
    $username = 'sr674';
    $password = 'XcFKs8KN';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
    
    function display_db_error($error_message) {
    	global $app_path;
    	include '../errors/database_error.php';
    	exit();
    }
?>