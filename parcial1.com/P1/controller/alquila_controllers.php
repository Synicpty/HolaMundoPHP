<?php

require_once("models/alquila_model.php");
require_once("utils/alquila_util.php");

    class alquila_controllers{
        private $tarifa,  $dias, $preciox;


        public static function Mostrar(){
            $tarifa=20;


            $dias=rand(1,10);
            
            $autos[] = new alquila_model(0, "BMW", " Series X", $tarifa, $dias, alquila_util::Operaciones($tarifa, $dias), "img\seriex.jpg", "mostrar.php", "img\seriex.jpg","img\maybach.jpg","img\Toyota.jpg");

            $dias=rand(1,10);

            $autos[] = new alquila_model(1, "Mercedes", " Maybach ", $tarifa, $dias, alquila_util::Operaciones($tarifa, $dias), "img\maybach.jpg", "mostrar.php","img\seriex.jpg","img\maybach.jpg","img\Toyota.jpg");

            $dias=rand(1,10);

            $autos[] = new alquila_model(2, "Toyota", " Hilux 2022", $tarifa, $dias, alquila_util::Operaciones($tarifa, $dias), "img\Toyota.jpg", "mostrar.php", "img\seriex.jpg", "img\seriex.jpg", "img\Toyota.jpg");

            $dias=rand(1,10);


            return $autos;
            
        }

    }


?>