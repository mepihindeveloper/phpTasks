<?php
/**
 * Сложность: 1/10
 * Дано натуральное число n. Вычислить: 1^1 + 2^2 + .. + n^n. 
 * Вывести на экран квадраты этих чисел, а также сумму квадратов этих чисел
 */

function squaresOfNumbers($number)
{
    // Если это не целое число, то возвращаем ошибку
    if (!is_int($number)) return false;
    
    // Переменная суммы цифр числа
    $sum = null;
    for ($i = 1; $i <= $number; $i++) {
        // Квадрат числа
        $square = pow($i,$i);
        $sum += $square;
        
        echo $i === $number ?  "$i^$i = " :  "$i^$i + ";
    }

    return $sum;
}
