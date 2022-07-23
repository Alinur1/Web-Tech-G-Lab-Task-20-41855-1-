<?php
require_once '../model/model/php';

if(isset($_POST['findFood']))
{
    echo $_POST['foodName'];
    try
    {
        $allSearchedFood = searchFood($_POST['foodName']);
        require_once '../showSearchedFood.php';
    }
    catch(Exception $ex)
    {
        echo $ex -> getMessage();
    }
}
?>