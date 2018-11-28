<?php
/**
 * Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф-я rand). 
 * Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные индексы. 
 * После вывести на экран элементы, которые больше ноля и у которых не парный индекс.
*/

function arrayFill($arrayLenght = 0) {
  $array = [];
  
  if ($arrayLenght == 0) { $arrayLenght = rand(1, 100); }

  for ($i = 0; $i < $arrayLenght; $i++) {
    $array[$i] = rand(0, 100);
  }

  return $array;
}

/**
 * Фукнкция фильтрации значений, которые больше 0 и не четные индексы
*/
function filterGreater0AndNotEvenIndex($value, $key) {
  return ($key%2 != 0 && $value > 0) ? true : false;
}

$array = arrayFill();
$multiplication = 1;

foreach($array as $key=>$value) {
  $multiplication = ($value > 0 && $key%2 == 0) ? $multiplication*$value : $multiplication;
}


print_r($array);
print_r(array_filter($array, filterGreater0AndNotEvenIndex, ARRAY_FILTER_USE_BOTH));

echo "Произведение элементов, которые больше ноля и у которых парные индексы = ".$multiplication;
