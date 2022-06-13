<?php
namespace CureDAO\Client\Units;
use CureDAO\Client\Properties\Base\BaseCombinationOperationProperty;
use CureDAO\Client\Properties\Base\BaseFillingTypeProperty;

use CureDAO\Client\UnitCategories\RatingUnitCategory;
class OneToThreeRatingUnit extends BaseUnit {
	const ABBREVIATED_NAME = '/3';
	const ADVANCED = 1;
	const CATEGORY_ID = RatingUnitCategory::ID;
	const CATEGORY_NAME = RatingUnitCategory::NAME;
	const COMBINATION_OPERATION = BaseCombinationOperationProperty::COMBINATION_MEAN;
	const CONVERSION_STEPS = [
		[
			'operation' => 'MULTIPLY',
			'value' => 50,
		],
		[
			'operation' => 'ADD',
			'value' => -50,
		],
	];
	const DEFAULT_VALUE = null;
	const FILLING_VALUE = null;
	public $fillingType = BaseFillingTypeProperty::FILLING_TYPE_NONE;
	const HINT = null;
	const ID = 216;
	const MANUAL_TRACKING = 1;
	const MAXIMUM_VALUE = 3;
	const MINIMUM_VALUE = 1;
	const NAME = '1 to 3 Rating';
	const SCALE = 'ordinal';
	const SUFFIX = null;
	const SYNONYMS = ['out of three', 'out of 3', '1 to 3 Rating', '/3'];
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
