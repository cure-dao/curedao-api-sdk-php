<?php
namespace CureDAO\Client\UnitCategories;
use CureDAO\Client\UI\FontAwesome;
use CureDAO\Client\UI\ImageUrls;
use CureDAO\Client\Slim\Model\QMUnitCategory;
class EnergyUnitCategory extends QMUnitCategory {
	const CAN_BE_SUMMED = true;
	const COMBINATION_OPERATION = 'SUM';
	const FILLING_VALUE = null;
	const ID = 7;
	const NAME = 'Energy';
	const STANDARD_UNIT_ABBREVIATED_NAME = 'cal';
	public $canBeSummed = self::CAN_BE_SUMMED;
	public $combinationOperation = self::COMBINATION_OPERATION;
	public $fillingValue = self::FILLING_VALUE;
	public $id = self::ID;
    public $image = ImageUrls::FITNESS_ENERGY_DRINK;
	public $name = self::NAME;
	public $standardUnitAbbreviatedName = self::STANDARD_UNIT_ABBREVIATED_NAME;
    public $fontAwesome = FontAwesome::UTENSIL_SPOON_SOLID;
}
