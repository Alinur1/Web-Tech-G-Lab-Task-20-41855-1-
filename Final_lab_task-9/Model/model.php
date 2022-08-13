<?php 
require_once 'db_connect.php';



function showFoodMenu()
{
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `foodmenu`';

    try
    {
        $stmt = $conn->query($selectQuery);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }

    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function searchFood($name)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `foodmenu` WHERE name LIKE '%$name%'";

    try
    {
        $stmt = $conn->query($selectQuery);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
?>