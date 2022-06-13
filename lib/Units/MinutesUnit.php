<?php
namespace CureDAO\Client\Units;
use CureDAO\Client\Properties\Base\BaseCombinationOperationProperty;
use CureDAO\Client\Properties\Base\BaseFillingTypeProperty;

class MinutesUnit extends BaseUnit {
	const ABBREVIATED_NAME = 'min';
	const ADVANCED = 0;
	const CATEGORY_ID = 1;
	const CATEGORY_NAME = 'Duration';
	const COMBINATION_OPERATION = BaseCombinationOperationProperty::COMBINATION_SUM;
	const CONVERSION_STEPS = [
		[
			'operation' => 'MULTIPLY',
			'value' => 60,
		],
	];
	const DEFAULT_VALUE = null;
	const FILLING_VALUE = 0;
	public $fillingType = BaseFillingTypeProperty::FILLING_TYPE_ZERO;
	const HINT = null;
	const ID = 2;
	const MANUAL_TRACKING = 1;
	const MAXIMUM_VALUE = 10080;
	public $maximumDailyValue = 60 * 24;
	const MINIMUM_VALUE = 0;
	const NAME = 'Minutes';
	const SCALE = 'ratio';
	const SUFFIX = null;
	const SYNONYMS = ['Minutes', 'min', 'Minute'];
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
