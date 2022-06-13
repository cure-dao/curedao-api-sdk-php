<?php
namespace CureDAO\Client\Units;
use CureDAO\Client\Properties\Base\BaseFillingTypeProperty;

class LitersUnit extends BaseUnit {
	const ABBREVIATED_NAME = 'L';
	const ADVANCED = 1;
	const CATEGORY_ID = 4;
	const CATEGORY_NAME = 'Volume';
	const COMBINATION_OPERATION = null;
	const CONVERSION_STEPS = [];
	const DEFAULT_VALUE = null;
	const FILLING_VALUE = 0;
	public $fillingType = BaseFillingTypeProperty::FILLING_TYPE_ZERO;
	const HINT = null;
	const ID = 205;
	const MANUAL_TRACKING = 1;
	const MAXIMUM_VALUE = null;
	public $maximumDailyValue = 10;
	const MINIMUM_VALUE = 0;
	const NAME = 'Liters';
	const SCALE = 'ratio';
	const SUFFIX = null;
	const SYNONYMS = ['Liters', 'L', 'Liter'];
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
