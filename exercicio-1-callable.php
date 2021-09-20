<?php

function sayHello()
{
    return "Hello World\n";
}

function executeFunction(callable $anotherFunction)
{
    echo "Calling another function\n";
    echo $anotherFunction();
}

executeFunction('sayHello');


/**
 * Every anon function is a Closure Object
 * With bindTo method we can connect an anon function with an object
 */
// Anon functions
executeFunction(function () {
    return "Anon function\n";
});

$variable = "Test \n";
// Using a variable from another escope, only works in a closure (anon function)
// Anon function stored on a variable
$anonFunction = function () use ($variable) {
    echo $variable;
    return "Anon function in a variable\n";
};

executeFunction($anonFunction);


