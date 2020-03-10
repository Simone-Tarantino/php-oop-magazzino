<?php

  require_once 'classes/Tech.php';
  require_once 'classes/Smartphone.php';

  $smartTv = new Tech('LG', '55UM7450PLA', 399);
  $smartTv->name = 'LG TV LED AI Ultra HD Smart TV 55" 4K Active HDR';
  echo 'Il modello ' . $smartTv->name . ' costava ' .$smartTv->getPrice();
  $smartTv->setPrice(350);
  echo '. Nuovo prezzo ' . $smartTv->getPrice();

  $zFlip = new Smartphone('SAMSUNG Galaxy Z Flip', 'SAMSUNG', 'SM-F700N', 300);
  $zFlip->display = '6.7"';
  $zFlip->battery = '3300mAh';
  $zFlip->connection = '4G';
  var_dump($zFlip);
