<?php
namespace CureDAO\Client\Units;
use CureDAO\Client\Properties\Base\BaseFillingTypeProperty;

use CureDAO\Client\UI\FontAwesome;
use CureDAO\Client\UI\ImageUrls;
class DropsUnit extends BaseUnit {
	const ABBREVIATED_NAME = 'drops';
	const ADVANCED = 1;
	const CATEGORY_ID = 13;
	const CATEGORY_NAME = 'Count';
	public $fillingType = BaseFillingTypeProperty::FILLING_TYPE_ZERO;
	const COMBINATION_OPERATION = null;
	const CONVERSION_STEPS = [
		[
			'operation' => 'MULTIPLY',
			'value' => 1,
		],
	];
	const DEFAULT_VALUE = null;
	const FILLING_VALUE = 0;
	const HINT = null;
	const ID = 201;
	const MANUAL_TRACKING = 1;
	const MAXIMUM_VALUE = null;
	public $maximumDailyValue = 100;
	const MINIMUM_VALUE = 0;
	const NAME = 'Drops';
	const SCALE = 'ratio';
	const SUFFIX = null;
	const SYNONYMS = ['Drops', 'drops', 'Drop', 'drop'];
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
	public $image = ImageUrls::MEDICAL_PILL;
	public $fontAwesome = FontAwesome::MEDKIT_SOLID;
	public $manualTracking = self::MANUAL_TRACKING;
	public $maximumValue = self::MAXIMUM_VALUE;
	public $minimumValue = self::MINIMUM_VALUE;
	public $name = self::NAME;
	public $scale = self::SCALE;
	public $suffix = self::SUFFIX;
	public $synonyms = self::SYNONYMS;
}
