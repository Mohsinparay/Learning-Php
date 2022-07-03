<?php 
    // Access modifiers in Php
    // 1. Public - can be accessed from anywhere
    // 2. Private - can only be accessed from within the class
    // 3. Protected - can be accessed from withing the class and from derived class

    // By default the properties and methods are treated as public
    // Private properties and methods can only be accessed by other member functions of the class

    
    class Employee{

        private $nme = "harry";

        function showName(){
            echo "$this->nme";
        }
    }
$harry = new Employee();
    // echo $harry->name; -> This will not work if harry is private
    $harry->showName();
    
?>