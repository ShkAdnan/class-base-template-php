<?php

spl_autoload_register('autoload');

function autoload( $class_name ){
    require "lib/". $class_name . ".php";
}

?>