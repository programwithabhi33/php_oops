<?php
    // typehinting means you can specify that the function is receiving the argument is it's type,if you specify the type and the another argument type is given that function means the php script give you error before compile , without type hinting the php script compile successfully but after runtime it find that it's type is diffierent and then it's gave you warning 

    // GetArray function argument only receive the array type argument if type is diffierent it give you fatel error 
    // function GetArray(array $arr){
    //     foreach ($arr as $key => $value) {
    //         echo $key .'=>'. $value;
    //     }
    // }
    // $arr = ['abhi'=>'abhishek','rushi'=>'rushikesh'];

    // // $arr = 'abhishek';
    // GetArray($arr);




    class Abhi {
        function test(){
            echo "This is the test function in the Abhi class";
        }
    }
    class Harry {
        function test(){
            echo "This is the test function in the Harry class";
        }
    }

    // Here you can specify that the argument is must be the type of the specific class in this case it's only Abhi class,you cannot gave the another type of argument to the MakeCall function and that's class base typehinting
    function MakeCall(Abhi $obj){
        $obj->test();
    }
    $obj = new Harry();
    MakeCall($obj);
?>