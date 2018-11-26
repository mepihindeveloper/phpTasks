<?php
/**
 * Сложность: 1/10
 * Найти сумму чисел, которые делятся на 5
 * Разработайте программу, которая из чисел 20 .. 45 
 * находила те, которые делятся на 5 и найдите сумму этих чисел. 
 * Рекомендую использовать функцию fmod для определения "делится число" или "не делится".
 */

function isNumbersDivisibleByNumber($number, $divisibleNumber)
{
    // Если не число, то возвращаем ошибку
    if (!is_numeric($number) || !is_numeric($divisibleNumber)) return false;
    //echo fmod($number, $divisibleNumber)."\n";
    $isDivisible = fmod($number, $divisibleNumber) == 0 ? true : false;
    return $isDivisible ? $number : false;
}

// Заполняем массив числами от 20 до 45 включительно
$numbers = range(20,45);
$sum = null;

foreach ($numbers as $number) {
    // Проверяем, делится ли число на 5
    $result = isNumbersDivisibleByNumber($number, 5);
    if ($result !== false) {
        $sum += $result;
    }
}
?>
