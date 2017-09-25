<?php
//classes are blueprints
  class Car {
    function wheels(){
      echo "spin the wheels";
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

  //call method on an object
  $bmw->wheels();
  $mercedes->wheels();

 ?>
