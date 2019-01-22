<?php
spl_autoload_register( function( $classname ) 
{
    $filename="classes/".$classname .'.php';
    require $filename;
});

$my_obj=new My_Class();
$my=new My_Class2();


