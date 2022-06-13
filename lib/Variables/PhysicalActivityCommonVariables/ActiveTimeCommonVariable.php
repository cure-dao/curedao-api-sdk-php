<?php
namespace CureDAO\Client\Variables\PhysicalActivityCommonVariables;
use CureDAO\Client\Properties\Base\BaseCombinationOperationProperty;
use CureDAO\Client\Properties\Base\BaseFillingTypeProperty;
use CureDAO\Client\UI\ImageUrls;
use CureDAO\Client\Variables\BaseVariable;
use CureDAO\Client\VariableCategories\PhysicalActivityVariableCategory;
use CureDAO\Client\Units\SecondsUnit;
class ActiveTimeCommonVariable extends BaseVariable {
	public const DEFAULT_UNIT_ID = SecondsUnit::ID;
	public const DURATION_OF_ACTION = 604800;
    public const FILLING_TYPE = BaseFillingTypeProperty::FILLING_TYPE_ZERO;
	public const ID = 1872;
	public const IMAGE_URL = ImageUrls::FITNESS_TREADMILL;
	public const MANUAL_TRACKING = false;
	public const NAME = 'Active Time';
    public const OUTCOME = true;
	public const PRICE = 27.0;
	public const PRODUCT_URL = 'https://www.amazon.com/RealTime-Physics-Active-Learning-Laboratories/dp/0470768924?SubscriptionId=AKIAU4A65MD5NAL2A57V&tag=quantimodo05-20&linkCode=xm2&camp=2025&creative=165953&creativeASIN=047076892';
	public const PUBLIC = true;
	public const SYNONYMS = ['Active Time'];
	public const VARIABLE_CATEGORY_ID = PhysicalActivityVariableCategory::ID;
	public $defaultUnitId = self::DEFAULT_UNIT_ID;
	public $durationOfAction = self::DURATION_OF_ACTION;
    public $fillingType = self::FILLING_TYPE;
	public $id = self::ID;
	public $imageUrl = self::IMAGE_URL;
	public $manualTracking = self::MANUAL_TRACKING;
	public $name = self::NAME;
    public $outcome = self::OUTCOME;
	public float $price = self::PRICE;
	public $productUrl = self::PRODUCT_URL;
	public $public = self::PUBLIC;
	public $synonyms = self::SYNONYMS;
	public $variableCategoryId = self::VARIABLE_CATEGORY_ID;
    public const COMBINATION_OPERATION = BaseCombinationOperationProperty::COMBINATION_SUM;
    public $combinationOperation = self::COMBINATION_OPERATION;
}
