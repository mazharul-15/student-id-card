<?php declare(strict_types = 1);
    function display($a) {
        echo "<h1>The value is : $a</h1>";
    }

    display(45);

    // Returning Value from User Defined Function
    function returnValue() {
        $num1 = 100;
        $num2 = 200;
        return $num1 + $num2;
    }

    $sum = returnValue();
    echo "<h1 style = 'background: tomato;'>The Answer is: $sum</h1>";

    // without Strict Declarations
    function withOutStrict(int $a, int $b) {
        return $a + $b;
    }

    echo "<h1>" . withOutStrict(5 , 45) . "</h1>";

    function withStrict(int $a, int $b) {
        return $a + $b;
    }

    echo "<h1>" . withStrict(3, 123) . "</h1>";

    // Default Value in php functions
    function defaultValue(int $value = 50) {
        echo "<h1>$value</h1>";
    }

    defaultValue(100);
    defaultValue();
    defaultValue(1455);
?>

<style>
    h1 {
        background: tomato;
        text-align: center;
    }
</style>