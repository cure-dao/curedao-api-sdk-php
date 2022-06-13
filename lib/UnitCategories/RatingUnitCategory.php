<?php
namespace CureDAO\Client\UnitCategories;
use CureDAO\Client\UI\FontAwesome;
use CureDAO\Client\UI\ImageUrls;
use CureDAO\Client\Slim\Model\QMUnitCategory;
class RatingUnitCategory extends QMUnitCategory {
	const CAN_BE_SUMMED = false;
	const COMBINATION_OPERATION = 'MEAN';
	const FILLING_VALUE = null;
	const ID = 5;
	const NAME = 'Rating';
	const STANDARD_UNIT_ABBREVIATED_NAME = '%';
    public $canBeSummed = self::CAN_BE_SUMMED;
	public $combinationOperation = self::COMBINATION_OPERATION;
	public $fillingValue = self::FILLING_VALUE;
	public $id = self::ID;
    public $image = ImageUrls::AUDIO_AND_VIDEO_CONTROLS_STAR;
	public $name = self::NAME;
	public $standardUnitAbbreviatedName = self::STANDARD_UNIT_ABBREVIATED_NAME;
    public $fontAwesome = FontAwesome::SMILE;
}
