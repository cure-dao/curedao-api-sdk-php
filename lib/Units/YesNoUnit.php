<?php
namespace CureDAO\Client\Units;
use CureDAO\Client\Properties\Base\BaseCombinationOperationProperty;
use CureDAO\Client\Properties\Base\BaseFillingTypeProperty;
use CureDAO\Client\Slim\Model\Measurement\QMMeasurement;

use CureDAO\Client\UI\FontAwesome;
use CureDAO\Client\UI\ImageUrls;
class YesNoUnit extends BaseUnit {
	const ABBREVIATED_NAME = 'yes/no';
	const ADVANCED = 0;
	const CATEGORY_ID = 13;
	const CATEGORY_NAME = 'Count';
	public $fillingType = BaseFillingTypeProperty::FILLING_TYPE_ZERO;
	const COMBINATION_OPERATION = BaseCombinationOperationProperty::COMBINATION_SUM;
	const CONVERSION_STEPS = [
		[
			'operation' => 'MULTIPLY',
			'value' => 1,
		],
	];
	const DEFAULT_VALUE = null;
	const FILLING_VALUE = 0;
	const HINT = null;
	const ID = 19;
	const MANUAL_TRACKING = 1;
	const MAXIMUM_VALUE = 1;
	const MINIMUM_VALUE = 0;
	const NAME = 'Yes/No';
	const SCALE = 'ordinal';
	const SUFFIX = null;
	const SYNONYMS = ['Yes/No', 'yes/no'];
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
	public $image = ImageUrls::FITNESS_CHECK_LIST;
	public $fontAwesome = FontAwesome::CHECK_CIRCLE;
	public static function toRatingIfNecessary($yesOrNo, BaseUnit $toUnit): float{
		$number = self::toNumber($yesOrNo);
		if($toUnit->isRating()){
			return self::toRating($number, $toUnit);
		}
		return $number;
	}
	/**
	 * @param float|string $value
	 * @return float
	 */
	public static function toNumber($value): float{
		if(is_string($value)){
			$lower = strtolower($value);
			if($lower === QMMeasurement::STRING_YES){
				$value = 1;
			}
			if($lower === QMMeasurement::STRING_NO){
				$value = 0;
			}
		}
		// Keep float for consistency
		return (float)$value;
	}
	/**
	 * @param int|string $originalValue
	 * @param $toUnit
	 * @return float
	 */
	public static function toRating($originalValue, BaseUnit $toUnit): float{
		$number = self::toNumber($originalValue);
		if($number){
			return $toUnit->maximumValue;
		}
		return $toUnit->minimumValue;
	}
}
