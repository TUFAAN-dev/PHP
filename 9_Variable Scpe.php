<?php

$x = 5;

function testGlobal() {
      global $x;
      echo $x;
}

function testStatic() {
      static $count = 0;
      $count++;
      echo $count . "\n";
}

testGlobal();     // 5
testStatic();     // 1
testStatic();     // 2
testStatic();     // 3

?>