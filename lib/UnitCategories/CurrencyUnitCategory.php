<?php
namespace CureDAO\Client\UnitCategories;
use CureDAO\Client\UI\FontAwesome;
use CureDAO\Client\UI\ImageUrls;
use CureDAO\Client\Slim\Model\QMUnitCategory;
class CurrencyUnitCategory extends QMUnitCategory {
	const CAN_BE_SUMMED = true;
	const COMBINATION_OPERATION = 'SUM';
	const FILLING_VALUE = 0;
	const ID = 12;
	const NAME = 'Currency';
	const STANDARD_UNIT_ABBREVIATED_NAME = '$';
    public $canBeSummed = self::CAN_BE_SUMMED;
	public $combinationOperation = self::COMBINATION_OPERATION;
	public $fillingValue = self::FILLING_VALUE;
	public $id = self::ID;
	public $name = self::NAME;
	public $standardUnitAbbreviatedName = self::STANDARD_UNIT_ABBREVIATED_NAME;
	public $image = ImageUrls::BASIC_FLAT_ICONS_MONEY;
    public $fontAwesome = FontAwesome::MONEY_BILL_ALT;
}
