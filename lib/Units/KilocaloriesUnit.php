<?php
namespace CureDAO\Client\Units;
use CureDAO\Client\Properties\Base\BaseCombinationOperationProperty;
use CureDAO\Client\Properties\Base\BaseFillingTypeProperty;

use CureDAO\Client\Variables\PhysicalActivityCommonVariables\CaloriesBurnedCommonVariable;
class KilocaloriesUnit extends BaseUnit {
	const ABBREVIATED_NAME = 'kcal';
	const ADVANCED = 1;
	const CATEGORY_ID = 7;
	const CATEGORY_NAME = 'Energy';
	const COMBINATION_OPERATION = BaseCombinationOperationProperty::COMBINATION_SUM;
	const CONVERSION_STEPS = [];
	const DEFAULT_VALUE = null;
	const FILLING_VALUE = null;
	public $fillingType = BaseFillingTypeProperty::FILLING_TYPE_NONE;
	const HINT = null;
	const ID = 22;
	const MANUAL_TRACKING = 0;
	const MAXIMUM_VALUE = null;
	public $maximumDailyValue = CaloriesBurnedCommonVariable::MAXIMUM_ALLOWED_VALUE;
	const MINIMUM_VALUE = null;
	const NAME = 'Kilocalories';
	const SCALE = 'ratio';
	const SUFFIX = null;
	const SYNONYMS = ['Kilocalories', 'kcal', 'Kilocalory'];
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
