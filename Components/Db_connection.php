<?php
try
{
    $user = 'root';
    $pass = '';
    $dbh = new PDO('mysql:host=localhost;charset=utf8;dbname=result_pars', $user, $pass);
}

catch (PDOException $e)
{
    $error_message = 'Невозможно поключится к серверу баз данных';
    include  'Views/Error.php';
    exit();
}