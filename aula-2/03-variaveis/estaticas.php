<?php
function myTest() {
    $x = 0;
    echo $x ."\n";
    $x++;
}

myTest();
myTest();
myTest();

function myTest2() {
    static $x = 0;
    echo $x ."\n";
    $x++;
}

myTest2();
myTest2();
myTest2();
?>
