<?php
namespace CureDAO\Client\UnitCategories;
use CureDAO\Client\UI\FontAwesome;
use CureDAO\Client\UI\ImageUrls;
use CureDAO\Client\Slim\Model\QMUnitCategory;
class TemperatureUnitCategory extends QMUnitCategory {
	const CAN_BE_SUMMED = false;
	const COMBINATION_OPERATION = 'MEAN';
	const FILLING_VALUE = null;
	const ID = 11;
	const NAME = 'Temperature';
	const STANDARD_UNIT_ABBREVIATED_NAME = 'C';
	public $canBeSummed = self::CAN_BE_SUMMED;
	public $combinationOperation = self::COMBINATION_OPERATION;
	public $fillingValue = self::FILLING_VALUE;
	public $id = self::ID;
    public $image = ImageUrls::BASIC_FLAT_ICONS_TEMPERATURE;
	public $name = self::NAME;
	public $standardUnitAbbreviatedName = self::STANDARD_UNIT_ABBREVIATED_NAME;
    public $fontAwesome = FontAwesome::THERMOMETER_EMPTY_SOLID;
}
