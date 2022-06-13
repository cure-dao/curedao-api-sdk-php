<?php
namespace CureDAO\Client\Units;
use CureDAO\Client\Properties\Base\BaseCombinationOperationProperty;
use CureDAO\Client\Properties\Base\BaseFillingTypeProperty;

class DegreesFahrenheitUnit extends BaseUnit {
	const ABBREVIATED_NAME = 'F';
	const ADVANCED = 1;
	const CATEGORY_ID = 11;
	const CATEGORY_NAME = 'Temperature';
	const COMBINATION_OPERATION = BaseCombinationOperationProperty::COMBINATION_MEAN;
	const CONVERSION_STEPS = [
		['operation' => 'ADD', 'value' => -32],
		['operation' => 'MULTIPLY', 'value' => 0.55555555555556002],
	];
	const DEFAULT_VALUE = null;
	const FILLING_VALUE = null;
	public $fillingType = BaseFillingTypeProperty::FILLING_TYPE_NONE;
	const HINT = null;
	const ID = 45;
	const MANUAL_TRACKING = 1;
	const MAXIMUM_VALUE = 214;
	const MINIMUM_VALUE = -87;
	const NAME = 'Degrees Fahrenheit';
	const SCALE = 'interval';
	const SUFFIX = null;
	const SYNONYMS = ['Degrees Fahrenheit', 'F', "\xc2\xb0F"];
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
