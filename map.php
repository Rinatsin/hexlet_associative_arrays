<?php
/*
	Реализуйте набор функций, для работы со словарём, построенным на
хеш-таблице. Для простоты, наша реализация не поддерживает разрешение
коллизий.
   - make() — создаёт новый словарь
   - set($map, $key, $value) — устанавливает в словарь значение
   по ключу. Работает и для создания и для изменения. Функция
   возвращает true, если удалось установить значение. При
   возникновении коллизии, функция никак не меняет словарь и
   возвращает false.
   -get($map, $key, $default = null) — читает значение по ключу.

	Функции set и get принимают первым параметром словарь. Передача
идет по ссылке, поэтому set может изменить его напрямую.
	Для полноценного погружения в тему, считаем, что массив в PHP
может использоваться только как индексированный массив.
*/
namespace Hexlet_associatve_arrays\Map;

function make()
{
	$map = [];
	return $map;
}

function set(&$map, $key, $value)
{
	$hash = crc32($key) % 1000;
	if (!array_key_exists($hash, $map)) {
		$map[$hash] = [$key, $value];
		return true;
	} elseif (in_array($key, $map[$hash])) {
		$map[$hash] = [$key, $value];
		return true;
	}
	return false;
}

function get(&$map, $key, $default = null)
{
	$hash = crc32($key) % 1000;
	if (array_key_exists($hash, $map)) {
		[, $value] = $map[$hash];
		return $value;
	}
	return $default;
}
