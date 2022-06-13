<?php
namespace CureDAO\Client\Units;
use CureDAO\Client\Properties\Base\BaseFillingTypeProperty;

use CureDAO\Client\UI\FontAwesome;
use CureDAO\Client\UI\ImageUrls;
class SpraysUnit extends BaseUnit {
	public $abbreviatedName = self::ABBREVIATED_NAME;
	public $advanced = self::ADVANCED;
	public $categoryName = self::CATEGORY_NAME;
	public $combinationOperation = self::COMBINATION_OPERATION;
	public $conversionSteps = self::CONVERSION_STEPS;
	public $defaultValue = self::DEFAULT_VALUE;
	public $fillingType = BaseFillingTypeProperty::FILLING_TYPE_ZERO;
	public $fillingValue = self::FILLING_VALUE;
	public $fontAwesome = FontAwesome::MEDKIT_SOLID;
	public $hint = self::HINT;
	public $id = self::ID;
	public $image = ImageUrls::MEDICAL_PILL;
	public $manualTracking = self::MANUAL_TRACKING;
	public $maximumDailyValue = 50;
	public $maximumValue = self::MAXIMUM_VALUE;
	public $minimumValue = self::MINIMUM_VALUE;
	public $name = self::NAME;
	public $scale = self::SCALE;
	public $suffix = self::SUFFIX;
	public $synonyms = self::SYNONYMS;
	public $unitCategoryId = self::CATEGORY_ID;
	const ABBREVIATED_NAME = 'sprays';
	const ADVANCED = 1;
	const CATEGORY_ID = 13;
	const CATEGORY_NAME = 'Count';
	const COMBINATION_OPERATION = null;
	const DEFAULT_VALUE = null;
	const FILLING_VALUE = 0;
	const HINT = null;
	const ID = 50;
	const MANUAL_TRACKING = 1;
	const MAXIMUM_VALUE = null;
	const MINIMUM_VALUE = 0;
	const NAME = 'Sprays';
	const SCALE = 'ratio';
	const SUFFIX = null;
	const SYNONYMS = ['Sprays', 'sprays', 'Spray', 'spray'];
	const CONVERSION_STEPS = [
		[
			'operation' => 'MULTIPLY',
			'value' => 1,
		],
	];
}
