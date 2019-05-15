<?php
/*
Реализуйте функцию wordsCount, которая считает количество одинаковых
слов в предложении. Результатом функции является ассоциативный массив,
в ключах которого слова из исходного текста, а значения это количество
повторений.
*/

namespace Hexlet_associatve_arrays\WordsCount;

Ринат Салимьянов <rinatsin@gmail.com>
	
	12 мая 2019 г., 23:51 (3 дня назад)
		
		кому: я
		Реализуйте функцию wordsCount, которая считает количество одинаковых слов в предложении. Результатом функции является ассоциативный массив, в ключах которого слова из исходного текста, а значения это количество повторений.

function wordsCount($sentence)
{
	$words = explode(" ", $sentence);
	$result = [];
	foreach ($words as $word) {
	if (empty($word)) {
		continue;
	}
	if (!array_key_exists($word, $result)) {
		$result[$word] = 1;
	} else {
		$result[$word]++;
	}
}
	return $result;
}
