<?php
/**
 * Валидация номера телефона российского формата
 * Российские номера сотовых телефонов в международном формате состоят из трех элементов:
 * +7 — международный код страны, Российской Федерации;
 * ХХХ — три цифры, обозначающих префикс. Эти три цифры определяют название сотового оператора и регион регистрации номера;
 * ХХХ-ХХ-ХХ — семь уникальных цифр, номер абонента.
*/

// Вариант, когда строго задан шаблон
$phoneNumber = "+7(900)500-20-30";
$pattern = '/^\+{1}[0-9]{1,2}\({1}[0-9]{3}\){1}[0-9]{3}\-{1}[0-9]{2}\-[0-9]{2}$/';
preg_match($pattern, $phoneNumber, $result);
print_r($result);

// Допускаем не точность в знаке '-'
$phoneNumber = "+7(900)5002030";
$pattern = '/^\+{1}[0-9]{1,2}\({1}[0-9]{3}\){1}[0-9]{3}\-?[0-9]{2}\-?[0-9]{2}$/';
preg_match($pattern, $phoneNumber, $result);
print_r($result);

// Допускаем возможность использовать проблемы в части после ()
$phoneNumber = "+7(900) 500 20-30";
$pattern = '/^\+{1}[0-9]{1,2}\({1}[0-9]{3}\){1}(\s)?[0-9]{3}(\-|\s)?[0-9]{2}(\-|\s)?[0-9]{2}$/';
preg_match($pattern, $phoneNumber, $result);
print_r($result);

// Допускаем возможность использовать либо +7, либо 8, либо 7
$phoneNumber = "+7(900)5002030";
$pattern = '/^(\+7|8|7)\({1}[0-9]{3}\){1}(\s)?[0-9]{3}(\-|\s)?[0-9]{2}(\-|\s)?[0-9]{2}$/';
preg_match($pattern, $phoneNumber, $result);
print_r($result);

// Допускаем возможность не использовать () или использовать пробелы
$phoneNumber = "8(900)5002030";
$pattern = '/^(\+7|8|7)(\({1}[0-9]{3}\){1}|[0-9]{3}|\s[0-9]{3})(\s)?[0-9]{3}(\-|\s)?[0-9]{2}(\-|\s)?[0-9]{2}$/';
preg_match($pattern, $phoneNumber, $result);
print_r($result);

// Шаблон для сайтов +7(XXX) XXX-XXXX
$phoneNumber = "+7(900) 500-2030";
$pattern = '/^(\+7)(\([0-9]{3}\))\s([0-9]{3})\-([0-9]{4})$/';
preg_match($pattern, $phoneNumber, $result);
print_r($result);
