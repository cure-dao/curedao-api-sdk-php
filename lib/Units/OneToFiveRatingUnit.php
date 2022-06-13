<?php
namespace CureDAO\Client\Units;
use CureDAO\Client\Properties\Base\BaseFillingTypeProperty;

class OneToFiveRatingUnit extends BaseUnit {
	const ABBREVIATED_NAME = '/5';
	const ADVANCED = 0;
	const CATEGORY_ID = 5;
	const CATEGORY_NAME = 'Rating';
	const COMBINATION_OPERATION = null;
	const CONVERSION_STEPS = [
		[
			'operation' => 'MULTIPLY',
			'value' => 25,
		],
		[
			'operation' => 'ADD',
			'value' => -25,
		],
	];
	const DEFAULT_VALUE = null;
	const FILLING_VALUE = null;
	public $fillingType = BaseFillingTypeProperty::FILLING_TYPE_NONE;
	const HINT = null;
	const ID = 10;
	const MANUAL_TRACKING = 1;
	const MAXIMUM_VALUE = 5;
	const MINIMUM_VALUE = 1;
	const NAME = '1 to 5 Rating';
	const SCALE = 'ordinal';
	const SUFFIX = null;
	const SYNONYMS = ['out of five', 'out of 5', '1 to 5 Rating', '/5'];
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
