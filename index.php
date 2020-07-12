<?php

class firstClass{
  const Ex= "you cant change it";

  public static function test(){
    $testing ="this is a test";
    return $testing;
  }
}

$a = firstClass::test();
echo $a;



 ?>
