<?php
namespace CureDAO\Client\Units;
use CureDAO\Client\Properties\Base\BaseCombinationOperationProperty;

use CureDAO\Client\UI\FontAwesome;
use CureDAO\Client\UI\ImageUrls;
class RecommendedDailyAllowanceUnit extends BaseUnit {
	const ABBREVIATED_NAME = '%RDA';
	const ADVANCED = 1;
	const CATEGORY_ID = 6;
	const CATEGORY_NAME = 'Miscellany';
	const COMBINATION_OPERATION = BaseCombinationOperationProperty::COMBINATION_SUM; // Combination operation refers to how they're combined in a given day, so RDA should be summed over the day, not averaged.  Multi-day aggregation should use the average.
	const CONVERSION_STEPS = [];
	const DEFAULT_VALUE = null;
	const FILLING_VALUE = -1;
	const HINT = null;
	const ID = 29;
	const MANUAL_TRACKING = 0;
	const MAXIMUM_VALUE = null;
	public $maximumDailyValue = 10000;
	const MINIMUM_VALUE = 0;
	const NAME = '% Recommended Daily Allowance';
	const SCALE = 'ratio';
	const SUFFIX = 'intake';
	const SYNONYMS = ['% Recommended Daily Allowance', '%RDA', 'Percent Recommended Daily Allowance'];
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
	public $image = ImageUrls::FITNESS_PROTEIN;
	public $fontAwesome = FontAwesome::UTENSIL_SPOON_SOLID;
}
