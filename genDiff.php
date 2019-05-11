<?php
/*
Реализуйте функцию genDiff, которая возвращает ассоциативный
массив, в котором каждому ключу из исходных массивов соответствует
одно из четырёх значений: added, deleted, changed или unchanged.
Аргументы:
	Ассоциативный массив
	Ассоциативный массив
Расшифровка:
	added — ключ отсутствовал в первом массиве,
	но был добавлен во второй
	deleted — ключ был в первом массиве,
	но отсутствует во втором
	changed — ключ присутствовал и в первом и во втором
	массиве, но значения отличаются
	unchanged — ключ присутствовал и в первом и во
	втором массиве с одинаковыми значениями

Решение учителя:
function union(array $data1, array $data2)
{
	    return array_unique(array_merge($data1, $data2));
}

function genDiff(array $data1, array $data2)
{
	$keys = union(array_keys($data1), array_keys($data2));
	$result = [];
	foreach ($keys as $key) {
		if (!array_key_exists($key, $data1)) {
			$result[$key] = 'added';
		} elseif (!array_key_exists($key, $data2)) {
			$result[$key] = 'deleted';
		} elseif ($data1[$key] !== $data2[$key]) {
			$result[$key] = 'changed';
		} elseif ($data1[$key] === $data2[$key]) {
			$result[$key] = 'unchanged';
		}
	}
	return $result;
}
*/
namespace Hexlet_associative_arrays\GenDiff;

function union(array $data1, array $data2)
{
	    return array_unique(array_merge($data1, $data2));
}

function genDiff(array $data1, array $data2)
{
	$result = [];
	$unionArrays = union($data1, $data2);
	$del = array_diff_key($data1, $data2);
	$add = array_diff_key($data2, $data1);
	$changed = array_intersect_key($data1, $data2);
	$unchanged = array_intersect_key($data2, $data1);
	foreach ($unionArrays as $key => $value) {
		if (array_key_exists($key, $del)) {
			$result[$key] = 'deleted';
		} elseif (array_key_exists($key, $add)) {
			$result[$key] = 'added';
		} elseif (array_key_exists($key, $changed) && ($changed[$key] !== $unchanged[$key])) {
			$result[$key] = 'changed';
		} elseif (array_key_exists($key, $changed) && ($changed[$key] === $unchanged[$key])) {
			$result[$key] = 'unchanged';
		}
	}
	return $result;
}
