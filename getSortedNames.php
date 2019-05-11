<?php
/*
Реализуйте функцию getSortedNames, которая принимает на вход список пользователей, извлекает их имена, сортирует и возвращает отсортированный список имен.  
*/

namespace Hexlet_associative_arrays\GetSortedNames;

function getSortedNames(array $data)
{
	$result = [];
	foreach ($data as ['name' => $name]) {
		$result[] = $name;
	}
	sort($result);
	return $result;
}
