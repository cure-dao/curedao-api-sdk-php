<?php
namespace CureDAO\Client\Types;
class Enum {
	public const NULL = "NULL";
	public static function format(string $str): string{
		return strtoupper($str);
	}
}
