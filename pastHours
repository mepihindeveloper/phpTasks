<?php
/**
 * Разработайте программу, которая определяла количество прошедших 
 * часов по введенным пользователем градусах. Введенное число может быть от 0 до 360.
 *
 * Циферблат - 360 градусов, он же 12 часов, он же 720 минут. 
 * Получаем, что поворот стрелки на 1 градус это 2 минуты.
 * 30 градусов - 1 час. То есть 360 градус / 12 часов
*/
function validateDegree($degree)
{
  if (!is_int($degree)) return ['status' => false, 'message' => 'Градус должен быть целым числом'];
  
  $isInRange = $degree >= 0 && $degree <= 360 ? true : false;

  if (!$isInRange) return ['status' => false, 'message' => 'Градус может быть от 0 до 360'];
  else return ['status' => true, 'value' => $degree];
}

// Прверяем на наличие ошибок
$validateDegree = validateDegree(0);
if ($validateDegree['status']) {
  $degree = $validateDegree['value'];
  $minutes = ($degree * 2)%60;
  $hours = (int)($degree/30);

  echo "Прошло: ".$hours." ч. и ".$minutes." мин.";
} else {
  echo $validateDegree['message'];
}
