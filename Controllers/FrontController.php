<?php
include 'Components/Db_connection.php';

if (isset($_GET['pars']))
{
    include 'Models/Test_pars.php';
}
elseif (isset($_GET['result']))
{
    include 'Models/Result.php';
    include 'Views/Template.php';
}
elseif (isset($_GET['match_id']))
{
    include 'Models/View.php';
    include 'Views/Template.php';
}
else
{
    include 'Views/Main.php';
}