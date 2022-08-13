<?php
require_once '../Model/model.php';

//require_once 'ShowFoodMenu.php';
//$cart = fetchCart($_GET['ID']);



$fileErr = $message = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
     if(isset($_POST['submit']))
     {
          $data['ID'] = $_POST['id'];
          $data['name'] = $_POST['name'];
          $data['cat'] = $_POST['cat'];
          $data['price'] = $_POST['price'];
     
          if(foodItem($data))
          {
               echo "<label class='text-success'>Food Item Added successfully</label>";
               header("location:../View/Add to cart.php");
          }
          else 
          {
               $message = "<label class='text-danger'>Can not add Food Item</label>";
          }
     }  
}
?>