<?php
namespace CureDAO\Client\UnitCategories;
use CureDAO\Client\UI\FontAwesome;
use CureDAO\Client\UI\ImageUrls;
use CureDAO\Client\Slim\Model\QMUnitCategory;
class ProportionUnitCategory extends QMUnitCategory {
	const CAN_BE_SUMMED = false;
	const COMBINATION_OPERATION = 'MEAN';
	const FILLING_VALUE = null;
	const ID = 8;
	const NAME = 'Proportion';
	const STANDARD_UNIT_ABBREVIATED_NAME = null;
	public $canBeSummed = self::CAN_BE_SUMMED;
	public $combinationOperation = self::COMBINATION_OPERATION;
	public $fillingValue = self::FILLING_VALUE;
	public $id = self::ID;
    public $image = ImageUrls::WORK_PRODUCTIVITY_RATING;
	public $name = self::NAME;
	public $standardUnitAbbreviatedName = self::STANDARD_UNIT_ABBREVIATED_NAME;
    public $fontAwesome = FontAwesome::RULER_SOLID;
}
