<?php
namespace CureDAO\Client\Units;
use CureDAO\Client\Properties\Base\BaseFillingTypeProperty;

class HectopascalUnit extends BaseUnit {
	const ABBREVIATED_NAME = 'hPa';
	const ADVANCED = 1;
	const CATEGORY_ID = 10;
	const CATEGORY_NAME = 'Pressure';
	const COMBINATION_OPERATION = null;
	const CONVERSION_STEPS = [
		[
			'operation' => 'MULTIPLY',
			'value' => 100,
		],
	];
	const DEFAULT_VALUE = null;
	const FILLING_VALUE = null;
	public $fillingType = BaseFillingTypeProperty::FILLING_TYPE_NONE;
	const HINT = null;
	const ID = 214;
	const MANUAL_TRACKING = 0;
	const MAXIMUM_VALUE = PascalUnit::MAXIMUM_VALUE / 100;
	const MINIMUM_VALUE = PascalUnit::MINIMUM_VALUE / 100;
	const NAME = 'Hectopascal';
	const SCALE = 'ratio';
	const SUFFIX = null;
	const SYNONYMS = ['Hectopascal ', 'hPa'];
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
