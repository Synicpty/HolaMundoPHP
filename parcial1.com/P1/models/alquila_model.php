<?php

    class alquila_model{
        private $id, $marca, $modelo, $precio, $dias_de_alquiler, $precio_a_pagar, $foto, $linkbtn, $foto1, $foto2, $foto3, $foto4;


        public function __construct($id, $marca, $modelo, $precio, $dias_de_alquiler, $precio_a_pagar, $foto, $linkbtn, $foto1,$foto2,$foto3){
            $this->id=$id;
            $this->marca=$marca;
            $this->modelo=$modelo;
            $this->precio=$precio;
            $this->dias_de_alquiler=$dias_de_alquiler;
            $this->precio_a_pagar=$precio_a_pagar;
            $this->foto=$foto;
            $this->linkbtn=$linkbtn;
            $this->foto1=$foto1;
            $this->foto2=$foto2;
            $this->foto3=$foto3;

    
        }


        public function setId($id){
            $this->id=$id;
        }
        public function setMarca($marca){
            $this->marca=$marca;
        }
        public  function setModelo($modelo){
            $this->modelo=$modelo;
        }
        public function setPrecio($precio){
            $this->precio=$precio;
        }
        public function setDias_de_alquiler($dias_de_alquiler){
            $this->dias_de_alquiler=$dias_de_alquiler;
        }
        public function setPrecio_a_pagar($precio_a_pagar){
            $this->precio_a_pagar=$precio_a_pagar;
        }
        public function setFoto($foto){
            $this->foto=$foto;
        }
        public function setLinkbtn($linkbtn){
            $this->linkbtn=$linkbtn;
        }


        public function getId(){
            return $this->id;
        }
        public function getMarca(){
            return $this->marca;
        }
        public function getModelo(){
            return $this->modelo;
        }
        public function getPrecio(){
            return  $this->precio;
        }
        public function getDias_de_alquiler(){
            return  $this->dias_de_alquiler;
        }
        public function getPrecio_a_pagar(){
            return $this->precio_a_pagar;
        }
        public function getFoto(){
            return $this->foto;
        }
        public function getLinkbtn(){
            return $this->linkbtn;
        }



        public function setFoto1($foto1){
            $this->foto1=$foto1;
        }
        public function setFoto2($foto2){
            $this->foto2=$foto2;
        }
        public function setFoto3($foto3){
            $this->foto3=$foto3;
        }
        public function setFoto4($foto4){
            $this->foto4=$foto4;
        }


        public function getFoto1(){
            return $this->foto1;
        }
        public function getFoto2(){
            return $this->foto2;
        }
        public function getFoto3(){
            return $this->foto3;
        }
        public function getFoto4(){
            return $this->foto4;
        }

        
    }

?>
