<?php
/*Реализуйте функцию getIn, которая извлекает из массива
(который может быть любой глубины вложенности) значение
по указанным ключам. Аргументы:
-Исходный массив
-Массив ключей, по которым ведется поиск значения
В случае, когда добраться до значения невозможно, возвращается null.*/

namespace Hexlet_associative_arrays\GetIn;

function getIn($data, $keys)
{
	$counter = 0;
	$result = [];
	foreach ($keys as $key) {
		if ($counter === 0) {
			if (array_key_exists($key, $data)) {
				$result = $data[$key];
				$counter++;
			} else {
				return null;
			}
		} else {
			if (!is_array($result)) {
				return null;
			}
			if (array_key_exists($key, $result)) {
				$result = $result[$key];
			} else {
				return null;
			}
		}
	}
	return $result;


/* Решение учителя 
function getIn(array $data, array $keys)
{
	$current = $data;
	foreach ($keys as $key) {
		if (!isset($current[$key])) {
			return null;
		}
		$current = $current[$key];
	}
	return $current;
}*/
