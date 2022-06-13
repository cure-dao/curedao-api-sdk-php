<?php
namespace CureDAO\Client\UnitCategories;
use CureDAO\Client\Properties\Base\BaseCombinationOperationProperty;
use CureDAO\Client\UI\FontAwesome;
use CureDAO\Client\UI\ImageUrls;
class CountUnitCategory {
	const CAN_BE_SUMMED = true;
	const COMBINATION_OPERATION = BaseCombinationOperationProperty::COMBINATION_SUM;
	const FILLING_VALUE = 0;
	const ID = 13;
	const NAME = 'Count';
	const STANDARD_UNIT_ABBREVIATED_NAME = 'count';
    public $canBeSummed = self::CAN_BE_SUMMED;
	public $combinationOperation = self::COMBINATION_OPERATION;
	public $fillingValue = self::FILLING_VALUE;
	public $id = self::ID;
	public $name = self::NAME;
	public $standardUnitAbbreviatedName = self::STANDARD_UNIT_ABBREVIATED_NAME;
	public $image = ImageUrls::FITNESS_MEASURING_TAPE;
    public $fontAwesome = FontAwesome::CALCULATOR_SOLID;
}
