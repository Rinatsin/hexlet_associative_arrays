<?php
/*
Реализуйте функцию fromPairs, которая принимает на вход массив,
состоящий из массивов-пар, и возвращает ассоциативный массив,
полученный из этих пар.
Примечания
Если при конструировании объекта попадаются совпадающие ключи,
то берётся ключ из последнего массива-пары.
*/

namespace Hexlet_associative_arrays\FromPairs;

function fromPairs(array $pairs)
{
	$result = [];
	foreach ($pairs as [$key, $value]) {
		$result[$key] = $value;
	}
	return $result;
}
