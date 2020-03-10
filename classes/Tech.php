<?php
  // classe base
  class Tech
  {
    // nome degli attributi
    public $name;
    public $brand;
    public $model;
    public $color;
    protected $price;
    // funzione construct per determinare quali attributi sono OBBLIGATORI da specificare quando si crea una nuova istanza
    function __construct($_brand, $_model, $_price)
    {
      $this->brand = $_brand;
      $this->model = $_model;
      $this->price = $_price;
    }
    // funzione per validare il valore prezzo (voce proc)
    public function setPrice($_price){
      // se non è un numero intero: messaggio
      if (!is_int($_price)){
        die('Il prezzo inserito non è corretto');
      }
      // altrimenti il valore viene passato correttamente
      $this->price = $_price;
    }

    public function getPrice() {
      return $this->price;
    }
  }
