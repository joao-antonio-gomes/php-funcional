<?php

function sayHello(): string
{
    return "Hello World\n";
}

function executeFunction(callable $function): void
{
    echo "Calling another function\n";
    echo $function();
}

executeFunction('sayHello');

// Anon functions
executeFunction(function () {
    return "Anon function\n";
});

// Anon function stored on a variable
$anonFunction = function () {
    return "Anon function in a variable\n";
};

executeFunction($anonFunction);