<?php
/*
ДНК и РНК это последовательности нуклеотидов.
Четыре нуклеотида в ДНК это аденин (A), цитозин (C), гуанин (G)
и тимин (T).
Четыре нуклеотида в РНК это аденин (A), цитозин (C), гуанин (G)
и урацил (U).
Цепь РНК составляется на основе цепи ДНК последовательной заменой
каждого нуклеотида:
	G -> C
	C -> G
	T -> A
	A -> U
	Напишите функцию toRna, которая принимает на вход цепь ДНК
и возвращает соответствующую цепь РНК (совершает транскрипцию РНК).
<?php
	toRna('ACGTGGTCTTAA');
	// → 'UGCACCAGAAUU'
*/

namespace Hexlet_associative_arrays\ToRna;

function toRna(string $dna)
{
	$DnaToRna = [
	'G' => 'C',
	'C' => 'G',
	'T' => 'A',
	'A' => 'U',
	];
	$result = [];
	$arrDna = str_split($dna);
	foreach ($arrDna as $value) {
		$result[] = $DnaToRna[$value];
	}
	return implode($result);
}
