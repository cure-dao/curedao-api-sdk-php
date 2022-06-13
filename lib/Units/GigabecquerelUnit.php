<?php
namespace CureDAO\Client\Units;
use CureDAO\Client\Properties\Base\BaseCombinationOperationProperty;
use CureDAO\Client\Properties\Base\BaseFillingTypeProperty;

use CureDAO\Client\UnitCategories\EnergyUnitCategory;
class GigabecquerelUnit extends BaseUnit {
	const ABBREVIATED_NAME = 'GBq';
	const ADVANCED = 1;
	const CATEGORY_ID = EnergyUnitCategory::ID;
	const CATEGORY_NAME = EnergyUnitCategory::NAME;
	const COMBINATION_OPERATION = BaseCombinationOperationProperty::COMBINATION_SUM;
	const CONVERSION_STEPS = [];
	const DEFAULT_VALUE = null;
	const FILLING_VALUE = null;
	public $fillingType = BaseFillingTypeProperty::FILLING_TYPE_NONE;
	const HINT = null;
	const ID = 217;
	const MANUAL_TRACKING = 1;
	const MAXIMUM_VALUE = null;
	const MINIMUM_VALUE = null;
	const NAME = 'Gigabecquerel';
	const SCALE = 'interval';
	const SUFFIX = null;
	const SYNONYMS = ['Gigabecquerel', 'GBq'];
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
