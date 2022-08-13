<?php 
require_once 'db_connect.php';

function register($data)
{
	$conn = db_conn();
    $selectQuery = "INSERT into users (name, email, user, pass, gender, mobile) VALUES (:name, :email, :user, :pass, :gender, :mobile)";
    
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':email' => $data['email'],
        	':user' => $data['user'],
        	':pass' => $data['pass'],
        	':gender' => $data['gender'],
        	':mobile' => $data['mobile']
        ]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function showAllUser()
{
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `users`';

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

function showUser($user)
{
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `users` where user = ?";

    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$user]);
    } 
    catch (PDOException $e) 
    {
        echo $e->getMessage();
    }

    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}

function editUserName($user, $data)
{
    $conn = db_conn();
    $selectQuery = "UPDATE users set name = ? where user = ?";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'], $user
        ]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function editUserEmail($user, $data)
{
    $conn = db_conn();
    $selectQuery = "UPDATE users set email = ? where user = ?";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['email'], $user
        ]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function editUserGender($user, $data)
{
    $conn = db_conn();
    $selectQuery = "UPDATE users set gender = ? where user = ?";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['gender'], $user
        ]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function editUserMobile($user, $data)
{
    $conn = db_conn();
    $selectQuery = "UPDATE users set mobile = ? where user = ?";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['mobile'], $user
        ]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function editUserPass($user, $data)
{
    $conn = db_conn();
    $selectQuery = "UPDATE users set pass = ? where user = ?";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['pass'], $user
        ]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}
