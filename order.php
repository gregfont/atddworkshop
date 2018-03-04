<?php
require_once('orderController.php');

$orderController = new orderController();

if (isset($_POST['pizza']) && isset($_POST['quantity']))
{
    $orderController->showOrder($_POST['pizza'], $_POST['quantity']);
}
else
{
    $orderController->showForm();
}