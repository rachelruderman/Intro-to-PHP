<?php
//classes are blueprints
  class Car {
    //public = available to whole program
    //protected = available to this class, subclasses and extended classes
    //private = only available to this class, not subclasses or extended classes
    public $wheels = 4;
    protected $hood = 1;
    private $engine = 1;
    var $doors = 4;

    function wheels(){
      echo "spin the wheels";
      $this->wheels = 10;
    }
  }

  if(class_exists("Car")){
    echo "Yayyyy, car is here" . "<br>";
  } else {
    echo "no 'Car' class" . "<br>";
  }

  if(method_exists("Car", "wheels")){
    echo "Yayyyy, spin the wheels";
  } else {
    echo "no 'wheels' method";
  }

  $bmw      = new Car();
  $mercedes = new Car();

  //call properties on an object with ->
  //no dollar sign when calling object properties
  echo $bmw->wheels;
  $bmw->wheels();
  $mercedes->wheels();
  echo $bmw->hood;
  echo $bmw->wheels;
  echo $mercedes->wheels;

  //$this is how we reference a class inside a class

  //extend for class inheritance

  class Plane extends Car {

  }

  $jet = new Plane();
  echo $jet->wheels;


 ?>
