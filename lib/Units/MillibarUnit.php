<?php
namespace CureDAO\Client\Units;
use CureDAO\Client\Properties\Base\BaseFillingTypeProperty;

class MillibarUnit extends BaseUnit {
	const ABBREVIATED_NAME = 'mbar';
	const ADVANCED = 1;
	const CATEGORY_ID = 10;
	const CATEGORY_NAME = 'Pressure';
	const COMBINATION_OPERATION = null;
	const CONVERSION_STEPS = [
		[
			'operation' => 'MULTIPLY',
			'value' => 133.32239000000001,
		],
	];
	const DEFAULT_VALUE = null;
	const FILLING_VALUE = null;
	public $fillingType = BaseFillingTypeProperty::FILLING_TYPE_NONE;
	const HINT = null;
	const ID = 213;
	const MANUAL_TRACKING = 0;
	const MAXIMUM_VALUE = 10130;
	const MINIMUM_VALUE = 101;
	const NAME = 'Millibar';
	const SCALE = 'ratio';
	const SUFFIX = null;
	const SYNONYMS = ['Millibar', 'mbar'];
	public $abbreviatedName = self::ABBREVIATED_NAME;
	public $advanced = self::ADVANCED;
	public $unitCategoryId = self::CATEGORY_ID;
	public $categoryName = self::CATEGORY_NAME;
	public $combinationOperation = self::COMBINATION_OPERATION;
	public $conversionSteps = self::CONVERSION_STEPS;
	public $defaultValue = self::DEFAULT_VALUE;
	public $fillingValue = self::FILLING_VALUE;
	public $hint = self::HINT;
	public $id = self::ID;
	public $manualTracking = self::MANUAL_TRACKING;
	public $maximumValue = self::MAXIMUM_VALUE;
	public $minimumValue = self::MINIMUM_VALUE;
	public $name = self::NAME;
	public $scale = self::SCALE;
	public $suffix = self::SUFFIX;
	public $synonyms = self::SYNONYMS;
}
