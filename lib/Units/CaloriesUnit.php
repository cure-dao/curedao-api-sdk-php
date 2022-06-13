<?php
namespace CureDAO\Client\Units;
use CureDAO\Client\Properties\Base\BaseFillingTypeProperty;

use CureDAO\Client\Variables\PhysicalActivityCommonVariables\CaloriesBurnedCommonVariable;
class CaloriesUnit extends BaseUnit {
	const ABBREVIATED_NAME = 'cal';
	const ADVANCED = 1;
	const CATEGORY_ID = 7;
	const CATEGORY_NAME = 'Energy';
	const COMBINATION_OPERATION = null;
	const CONVERSION_STEPS = [];
	const DEFAULT_VALUE = null;
	const FILLING_VALUE = null;
	public $fillingType = BaseFillingTypeProperty::FILLING_TYPE_NONE;
	const HINT = null;
	const ID = 39;
	const MANUAL_TRACKING = 0;
	const MAXIMUM_VALUE = null;
	public $maximumDailyValue = CaloriesBurnedCommonVariable::MAXIMUM_ALLOWED_VALUE;
	const MINIMUM_VALUE = null;
	const NAME = 'Calories';
	const SCALE = 'ratio';
	const SUFFIX = null;
	const SYNONYMS = ['Calories', 'cal', 'Calory'];

}
