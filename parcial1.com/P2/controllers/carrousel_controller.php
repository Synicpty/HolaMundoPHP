<?php
require_once("models/carrousel_model.php");
require_once("util/carrousel_util.php");

    class carrousel_controller{
        public static function Mostrar(){
            
          $carousel[]= new carrousel_model(1,"Imagen 1","Toyota Hilux","Imagenes//Toyota.jpg");
          $carousel[]= new carrousel_model(2,"Imagen 2","BMW Series X","Imagenes//seriex.jpg");
          $carousel[]= new carrousel_model(3,"Imagen 3"," Mercedes Maybach","Imagenes//maybach.jpg");
          $carousel[]= new carrousel_model(4,"Imagen 4"," Nissan Qashqai","Imagenes//qn.jpg");
          
            return $carousel;
        }


    }

?>

