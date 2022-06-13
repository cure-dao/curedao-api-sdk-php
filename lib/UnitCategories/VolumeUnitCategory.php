<?php
namespace CureDAO\Client\UnitCategories;
use CureDAO\Client\UI\FontAwesome;
use CureDAO\Client\UI\ImageUrls;
use CureDAO\Client\Slim\Model\QMUnitCategory;
class VolumeUnitCategory extends QMUnitCategory {
	const CAN_BE_SUMMED = true;
	const COMBINATION_OPERATION = 'SUM';
	const FILLING_VALUE = 0;
	const ID = 4;
	const NAME = 'Volume';
	const STANDARD_UNIT_ABBREVIATED_NAME = 'L';
	public $canBeSummed = self::CAN_BE_SUMMED;
	public $combinationOperation = self::COMBINATION_OPERATION;
	public $fillingValue = self::FILLING_VALUE;
	public $id = self::ID;
    public $image = ImageUrls::FITNESS_WATER;
	public $name = self::NAME;
	public $standardUnitAbbreviatedName = self::STANDARD_UNIT_ABBREVIATED_NAME;
    public $fontAwesome = FontAwesome::GLASS_CHEERS_SOLID;
}
