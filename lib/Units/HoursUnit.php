<?php
namespace CureDAO\Client\Units;
use CureDAO\Client\Properties\Base\BaseCombinationOperationProperty;
use CureDAO\Client\Properties\Base\BaseFillingTypeProperty;

class HoursUnit extends BaseUnit {
	const ABBREVIATED_NAME = 'h';
	const ADVANCED = 0;
	const CATEGORY_ID = 1;
	const CATEGORY_NAME = 'Duration';
	const COMBINATION_OPERATION = BaseCombinationOperationProperty::COMBINATION_SUM;
	const CONVERSION_STEPS = [
		[
			'operation' => 'MULTIPLY',
			'value' => 3600,
		],
	];
	const DEFAULT_VALUE = null;
	const FILLING_VALUE = 0;
	public $fillingType = BaseFillingTypeProperty::FILLING_TYPE_ZERO;  // Override in variable if necessary. Variable categories aren't a good place for filling value setting because we could have a rating Social Interaction variable and hours from Rescuetime
	const HINT = null;
	const ID = 34;
	const MANUAL_TRACKING = 1;
	const MAXIMUM_VALUE = null;
	public $maximumDailyValue = 24;
	const MINIMUM_VALUE = 0;
	const NAME = 'Hours';
	const SCALE = 'ratio';
	const SUFFIX = null;
	const SYNONYMS = ['Hours', 'h', 'Hour'];
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
