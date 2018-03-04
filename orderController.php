<?php

class OrderController
{
    private $view;
    private $order;

    public function __construct()
    {
        require_once 'orderModel.php';
        $this->view = array();
        $this->order = new orderModel();
    }

    public function showOrder($pizza, $quantity, $ward, $discount)
    {
        $this->view['price'] = $this->order->calculateOrder($pizza, $quantity, $ward, $discount);
        $this->display();
    }

    public function showForm()
    {
        $this->view['pizzas'] = $this->order->getPizzas();
        $this->view['wards'] = $this->order->getWards();
        $this->display();
    }

    private function display()
    {
        require_once 'orderView.php';
    }
}