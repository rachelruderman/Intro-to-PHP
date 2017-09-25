<?php
//classes are blueprints
  class Car {
    //static attaches the property to the class so it's no longer passed to the instance
    static $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;
  }

  //call static properties with class name, two colins and $
  echo Car::$wheels;

 ?>
