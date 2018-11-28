<?php
/**
 * Ваше задание — создать массив, наполнить его случайными значениями 
 * (можно использовать функцию rand), найти максимальное и минимальное значение массива 
 * и поменять их местами.
*/

function arrayFill($arrayLenght = 0) {
  $array = [];
  
  if ($arrayLenght == 0) { $arrayLenght = rand(0, 100); }

  for ($i = 0; $i < $arrayLenght; $i++) {
    $array[$i] = rand(0, 100);
  }

  return $array;
}

/**
 * Смена позиций элементов по индексам
 *
 * @param array $array
 * @param int $fIndex Индекс первого элемента для смены
 * @param int $sIndex Индекс второго элемента для смены
 * @return void
 */
function swapArrayElementByIndex(&$array, $fIndex, $sIndex) {
  if (!is_int($fIndex) || !is_int($sIndex)) return false;

  $temp = $array[$fIndex];
  $array[$fIndex] = $array[$sIndex];
  $array[$sIndex] = $temp;
}

/**
 * Смена позиций элементов по элементам
 *
 * @param array $array
 * @param array $fELem Первый элемент ['index' => , 'value' => ]
 * @param array $sElem Второй элемент ['index' => , 'value' => ]
 * @return void
 */
function swapArrayElement(&$array, $fELem, $sElem) {
  $isIndexesIsset = (isset($fELem['index']) && isset($sElem['index']));
  $isValuesIsset = (isset($fELem['value']) && isset($sElem['value']));

  if (!$isIndexesIsset || !$isValuesIsset) return false;

  $array[$fELem['index']] = $sElem['value'];
  $array[$sElem['index']] = $fELem['value'];
}

$array = arrayFill();

$min = ['index' => array_keys($array, min($array))[0], 'value' =>  min($array)];
$max = ['index' => array_keys($array, max($array))[0], 'value' =>  max($array)];

echo "Минимальный элемент с индексом {$min['index']} и значением {$min['value']}\n";
echo "Максимальный элемент с индексом {$max['index']} и значением {$max['value']}\n";

// $swapResult = swapArrayElementByIndex($array, $min['index'], $max['index']);
$swapResult = swapArrayElement($array, $min, $max);
if ($swapResult !== false) {
  print_r($array);
} else {
  echo 'Произошла ошибка при смене элементов местами';
}
