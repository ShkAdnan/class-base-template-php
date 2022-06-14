<?php
class Test {
    private $data = [ 'name' => 'Adnan Asad', 'Exp' => '5'];
    private static $name = 'Test';

    public function __get( $property ){
        return $this->data[ $property ];
    }

    public function __set( $property, $value ){
        if(property_exists( $this, $property)){
            $this->name = $value;
        }else{
            echo "Property does not exist ". $property;
        }
    }

    public static function printName(){
        echo self::$name;
    }
}

class base{
    public static $name = 'Static Classes';
}

class derived extends base {
    public static function show(){
        echo parent::$name;
    }
}

derived::show();