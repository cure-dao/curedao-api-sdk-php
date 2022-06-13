<?php
namespace CureDAO\Client\Units;
use CureDAO\Client\Properties\Base\BaseCombinationOperationProperty;
use CureDAO\Client\Properties\Base\BaseFillingTypeProperty;

use CureDAO\Client\UI\FontAwesome;
use CureDAO\Client\UI\ImageUrls;
class BeatsPerMinuteUnit extends BaseUnit {
	const ABBREVIATED_NAME = 'bpm';
	const ADVANCED = 1;
	const CATEGORY_ID = 6;
	const CATEGORY_NAME = 'Miscellany';
	const COMBINATION_OPERATION = BaseCombinationOperationProperty::COMBINATION_MEAN;
	const CONVERSION_STEPS = [];
	const DEFAULT_VALUE = null;
	const FILLING_VALUE = null;
	public $fillingType = BaseFillingTypeProperty::FILLING_TYPE_NONE;
	const HINT = null;
	const ID = 26;
	const MANUAL_TRACKING = 0;
	const MAXIMUM_VALUE = 300;
	const MINIMUM_VALUE = 20;
	const NAME = 'Beats per Minute';
	const SCALE = 'ratio';
	const SUFFIX = null;
	const SYNONYMS = ['Beats per Minute', 'bpm'];

}
