<?php

require_once 'Model.php';

    class OrderModel extends Model
    {
        public function __construct()
        {
          parent::__construct('quotation');
        }

        public function getWards()
        {
            $wards = array("Nerima","Itabashi","Kita","Adachi","Suginami","Nakano","Toshima","Bunkyo","Arakawa","Taito","Sumida","Katsushika","Shinjuku","Edogawa","Chiyoda","Chuo","Koto","Setagaya","Shibuya","Minato","Meguro","Shinagawa","Ota");
            return $wards;
        }

        public function getPizzas()
        {
            $pizzas = array(
                "Capricciosa" => 1000,
                "Quattro formaggi" => 1400,
                "Calzone"   => 1200,
                "Margherita"  => 1000,
            );
            return $pizzas;
        }
		
		public function calculateOrder($pizza, $quantity, $ward, $discount)
		{
			$price= $pizza * $quantity;
			
			$cheapWards = array("Shinjuku","Shibuya","Minato","Chuo","Chiyoda");
			if (in_array($ward,$cheapWards))
					$price = $price *0.9;
			
			if ($discount=="PARTY" && $quantity>=10)
					$price = $price *0.8;
				
			return $price;
		}
    }
