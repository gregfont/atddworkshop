<?php
require_once('orderController.php');

$orderController = new orderController();

if (isset($_POST['pizza']) && isset($_POST['quantity']) && isset($_POST['ward']) && isset($_POST['discount']))
{
    $orderController->showOrder($_POST['pizza'], $_POST['quantity'], $_POST['ward'], $_POST['discount']);
}
else
{
    $orderController->showForm();
}