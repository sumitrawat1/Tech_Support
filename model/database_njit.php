<?php
    $dsn = 'mysql:host=sql2.njit.edu;dbname=drk25';
    $username = 'drk25';
    $password = 'tertiary5';

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