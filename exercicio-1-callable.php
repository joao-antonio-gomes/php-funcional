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