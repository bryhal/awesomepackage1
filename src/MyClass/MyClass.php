<?php

namespace MyClass;

class MyClass
{
    
    protected $name;


    public function __construct($name = 'Bob')
    {
        
        $this->name = $name;
        
    }
    
    
    public function sayHello()
    {
        
        echo $this->name;
        
    }
    
}

?>
