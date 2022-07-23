<?php
require_once 'db_connect.php';

function showAllFood()
{
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `foodmenu`';
    try
    {
        $stmt = $conn -> query($selectQuery);
    }
    catch(PDOException $e)
    {
        echo $e -> getMessage();
    }
    $rows = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showFood($foodID)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `foodmenu` where foodID = ?";

    try
    {
        $stmt = $conn -> prepare($selectQuery);
        $stmt -> execute([$foodID]);
    }
    catch(PDOException $e)
    {
        echo $e -> getMessage();
    }
    $row = $stmt -> fetch(PDO::FETCH_ASSOC);

    return $row;
}

function searchFood($foodName)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `foodmenu` WHERE foodName LIKE '%$foodName%'";

    try
    {
        $stmt = $conn -> query($selectQuery);
    }
    catch(PDOException $e)
    {
        echo $e -> getMessage();
    }
    $rows = $stmt -> fetchall(PDO::FETCH_ASSOC);
    return $rows;
}

function addCart($data)
{
    $conn = db_conn();
    $selectQuery = "INSERT into foodcart (foodID, foodName, price, amount) VALUES (:foodID, :foodName, :price, :amount)";
    try
    {
        $stmt = $conn -> prepare($selectQuery);
        $stmt -> execute([
            ':foodID' => $data['foodID'],
            ':foodName' => $data['foodName'],
            ':price' => $data['price'],
            ':amount' => $data['amount']
        ]);
    }
    catch(PDOException $e)
    {
        echo $e -> getMessage();
    }
    $conn = null;
    return true;
}

function updateCart($foodID, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE foodcart set foodName = ?, price = ?, amount = ? where foodID = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['foodName'], $data['price'], $data['amount'], $foodID
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteCart($foodID){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `foodcart` WHERE `foodID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$foodID]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}
?>