<?php
/* 
 * Напиши небольшой фрагмент кода, чтобы мы смогли узнать о твоих навыках.
 * Реализуй функцию, которая проверяет входит ли IP в выбранный диапазон. 
 * Ответ ожидается в формате Boolean. Также напиши unit-тесты для этой функции. 
 * public function isIpInRange($ip, $IpRange) { ... }
 * 
 * Правильные варианты работы функции:
 * $result = isIpInRange('31.173.80.80', '31.173.80.0/21'); // true
 * $result = isIpInRange('31.173.79.255', '31.173.80.0/21'); // false
 * 
 * По хорошему надо оргнизовать класс с валидацией: filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4
 */
function isIpInRange($ip, $IpRange) {
    // Получаем массив, состоящий из IP и номера маски
    $IpRange = explode('/', $IpRange);
    /*
     * Элемент массива [0] является начальным IP (сеть)
     * Конвертируем строку, содержащую IPv4-адрес в целое число
     */
    $range_start  = ip2long($IpRange[0]); 
    /*
     * Выделяем число адресов в диапазоне как 2^(32-номер_маски)
     * Делаем -1, иначе закхватываем широковещательный канал
     */
    $range_end  = $range_start + pow(2, 32-intval($IpRange[1])) - 1;
    $ip = ip2long($ip);
    return ($ip >=$range_start && $ip <= $range_end) ? 1 : 0;
}
echo $result = isIpInRange('31.173.80.80', '31.173.80.0/21'); // true
echo $result = isIpInRange('31.173.79.255', '31.173.80.0/21'); // false 
