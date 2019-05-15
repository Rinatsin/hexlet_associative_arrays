<?php
/*
Реализуйте функцию findWhere, которая принимает на вход массив (элементы
которого - ассоциативные массивы) и пары ключ-значение (тоже в виде
массива), а возвращает первый элемент исходного массива, значения
которого соответствуют переданным парам (всем переданным). Если
совпадений не было, то функция должна вернуть null.
*/

namespace Hexlet_associative_arrays\FindWhere;

function findWhere(array $data, array $where)
{
	$intersect = [];
	$diff = [];
	foreach ($data as $key => $value) {
		$intersect = array_intersect_assoc($data[$key], $where);
		$diff = array_diff_assoc($where, $intersect);
			if (empty($diff)) {
				return $data[$key];
			}
	}
	return null;
}
