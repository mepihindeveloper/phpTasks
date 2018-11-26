<?php
/**
 * Сложность 2/10
 * Вам нужно разработать программу, которая проверяла бы введенное пользователем число (год). 
 * Число может быть в диапазоне от 1 до 9999
 */

function verifyNumber($year)
{
  if (!is_int($year)) return ['status' => false, 'message' => 'Год должен быть целом числом'];
  $minYear = 1;
  $maxYear = 9999;

  $isInRange = ($year >= $minYear) && ($year <= $maxYear);
  if (!$isInRange) return ['status' => false, 'message' => "Год должен быть в рамках от $minYear до $maxYear"];

  return true;
}

function isLeapYear($year)
{
  $hasError = verifyNumber($year);
  if ($hasError !== true) return $hasError['message'];

  return $year%4 == 0 ? 'Год високосный': 'Год не високосный';
}
