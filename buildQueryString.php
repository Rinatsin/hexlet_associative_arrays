<?php
/*
Реализуйте функцию buildQueryString, которая принимает на вход
список параметров и возвращает сформированный query string из этих
параметров:

<?php

buildQueryString(['per' => 10, 'page' => 1 ]);
// → page=1&per=10

Имена параметров в выходной строке должны располагаться в алфавитном
порядке (то есть их нужно отсортировать).
*/

namespace Hexlet_associative_arrays\BuildQueryString;

function buildQueryString(array $params)
{
	$result = '';
	$arr = [];
	foreach ($params as $key => $value) {
		$arr[] = "{$key}={$value}";
	}
	sort($arr);
	$result = implode('&', $arr);
	return $result;
}
