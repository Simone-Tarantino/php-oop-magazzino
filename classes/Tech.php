<?php

  // classe base
  class Tech
  {
    // nome degli attributi
    public $name;
    public $brand;
    public $model;
    public $color;
    public $price;
    // funzione construct per determinare quali attributi sono OBBLIGATORI da specificare quando si crea una nuova istanza
    function __construct($_brand, $_model, $_price)
    {
      $this->brand = $_brand;
      $this->model = $_model;
      $this->price = $_price;
    }

  }
