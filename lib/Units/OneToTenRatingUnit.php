<?php
namespace CureDAO\Client\Units;
use CureDAO\Client\Properties\Base\BaseFillingTypeProperty;

class OneToTenRatingUnit extends BaseUnit {
	const ABBREVIATED_NAME = '/10';
	const ADVANCED = 0;
	const CATEGORY_ID = 5;
	const CATEGORY_NAME = 'Rating';
	const COMBINATION_OPERATION = null;
	const CONVERSION_STEPS = [
		[
			'operation' => 'MULTIPLY',
			'value' => 11.111111111111001,
		],
		[
			'operation' => 'ADD',
			'value' => -11.111111111111001,
		],
	];
	const DEFAULT_VALUE = null;
	const FILLING_VALUE = null;
	public $fillingType = BaseFillingTypeProperty::FILLING_TYPE_NONE;
	const HINT = null;
	const ID = 203;
	const MANUAL_TRACKING = 1;
	const MAXIMUM_VALUE = 10;
	const MINIMUM_VALUE = 1;
	const NAME = '1 to 10 Rating';
	const SCALE = 'ordinal';
	const SUFFIX = null;
	const SYNONYMS = ['1 to 10 Rating', '/10'];
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
