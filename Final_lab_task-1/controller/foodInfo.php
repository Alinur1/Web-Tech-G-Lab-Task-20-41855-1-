<?php
require_once ('model/model.php');

function fetchAllFood()
{
    return showAllFood();
}
function fetchFood($foodID)
{
    return showFood($foodID);
}
?>