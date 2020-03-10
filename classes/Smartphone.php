<?php
  require_once 'Tech.php';

  class Smartphone extends Tech
  {
      public $display;
      public $battery;
      public $connection;

      public function __construct($_name, $_brand, $_model, $_price)
      {
        parent:: __construct($_brand, $_model, $_price);
        $this->name = $_name;
      }

      public function setPrice($_price){
        // se non è un numero intero: messaggio
        if (!is_int($_price)){
          die('Il prezzo inserito non è corretto');
        }
        // altrimenti il valore viene passato correttamente
        $this->price = $_price;
      }
  }
