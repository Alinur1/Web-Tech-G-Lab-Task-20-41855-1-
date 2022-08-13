<?php 
include '../Model/model.php';
$AllFoodMenu = showFoodMenu();


function fetchCart($ID){
    return showCart($ID);
}
?>