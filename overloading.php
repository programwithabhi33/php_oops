<?php
    // Overloading means you can make multiple forms of a single function to do different tasks
    // And overridding means suppost class A has function show and B class extends class A and B class implement show it means you override the function show in the B class you can also call the parent function show which is the class A function . syntax: parent::show() inside the B class show function 
    class Test{
        // __call is the magic method in the php opps,that has been called when the Test class object called undefined function in the class,it taken 2 arguments first is the function name and the second is the array of the arguments that has been passed in the object any function
      public function __call($fname,$arguments){
        // echo $fname;
        // print_r($arguments);
      }
    }

    $obj = new Test();
    $obj->Overload(1,2);



?>