<?php
namespace CureDAO\Client\Units;
use CureDAO\Client\Properties\Base\BaseFillingTypeProperty;
use CureDAO\Client\Properties\VariableCategory\VariableCategoryNameProperty;

class MilligramsUnit extends BaseUnit {
	const ABBREVIATED_NAME = 'mg';
	const ADVANCED = 0;
	const CATEGORY_ID = 3;
	const CATEGORY_NAME = 'Weight';
	const COMBINATION_OPERATION = null;
	const CONVERSION_STEPS = [
		[
			'operation' => 'MULTIPLY',
			'value' => 1.0E-6,
		],
	];
	const DEFAULT_VALUE = null;
	const FILLING_VALUE = 0;
	public $fillingType = BaseFillingTypeProperty::FILLING_TYPE_ZERO;
	const HINT = null;
	const ID = 7;
	const MANUAL_TRACKING = 1;
	const MAXIMUM_VALUE = null;
	public $maximumDailyValue = 1000000;
	const MINIMUM_VALUE = 0;
	const NAME = 'Milligrams';
	const SCALE = 'ratio';
	const SUFFIX = VariableCategoryNameProperty::SUFFIX_INTAKE;
	const SYNONYMS = ['Milligrams', 'mg', 'Milligram'];
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
