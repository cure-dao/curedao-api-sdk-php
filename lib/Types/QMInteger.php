<?php
namespace CureDAO\Client\Types;
class QMInteger {
	/**
	 * @param $val
	 * @param int $min
	 * @param string $type
	 */
	public static function validateMin($val, int $min, string $type){
		if($val < $min){
			le("$type cannot be less than $min but is: " . print_r($val, true));
		}
	}
}
