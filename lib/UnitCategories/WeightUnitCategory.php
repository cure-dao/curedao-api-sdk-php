<?php
namespace CureDAO\Client\UnitCategories;
use CureDAO\Client\UI\FontAwesome;
use CureDAO\Client\UI\ImageUrls;
use CureDAO\Client\Slim\Model\QMUnitCategory;
class WeightUnitCategory extends QMUnitCategory {
	const CAN_BE_SUMMED = true;
	const COMBINATION_OPERATION = 'SUM';
	const FILLING_VALUE = null;
	const ID = 3;
	const NAME = 'Weight';
	const STANDARD_UNIT_ABBREVIATED_NAME = 'kg';
    public $canBeSummed = self::CAN_BE_SUMMED;
	public $combinationOperation = self::COMBINATION_OPERATION;
	public $fillingValue = self::FILLING_VALUE;
	public $id = self::ID;
    public $image = ImageUrls::FITNESS_WEIGHING_SCALE;
    public $fontAwesome = FontAwesome::BALANCE_SCALE_SOLID;
	public $name = self::NAME;
	public $standardUnitAbbreviatedName = self::STANDARD_UNIT_ABBREVIATED_NAME;
}
