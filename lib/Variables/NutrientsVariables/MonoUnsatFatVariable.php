<?php
namespace CureDAO\Client\Variables\NutrientsVariables;
use CureDAO\Client\Properties\Base\BaseFillingTypeProperty;
use CureDAO\Client\Variables\BaseVariable;
use CureDAO\Client\VariableCategories\NutrientsVariableCategory;
use CureDAO\Client\Units\GramsUnit;
class MonoUnsatFatVariable extends BaseVariable {
	public const CAUSE_ONLY = false;

	public const DEFAULT_UNIT_ID = GramsUnit::ID;
	public const DURATION_OF_ACTION = 604800;
	public const FILLING_TYPE = BaseFillingTypeProperty::FILLING_TYPE_NONE;
	public const ID = 1939;
	public const IMAGE_URL = 'https://images-na.ssl-images-amazon.com/images/I/51zUCqX2LJL._SL160_.jpg';
	public const MANUAL_TRACKING = false;
	public const NAME = 'Mono Unsat Fat';
	public const PRICE = 0.98999999999999999;
	public const PRODUCT_URL = 'https://www.amazon.com/Into-the-Bod-Pod/dp/B077F2SDVB?SubscriptionId=AKIAU4A65MD5NAL2A57V&tag=quantimodo05-20&linkCode=xm2&camp=2025&creative=165953&creativeASIN=B077F2SDVB';
	public const PUBLIC = true;
	public const SYNONYMS = ['Mono Unsat Fat'];
	public const VARIABLE_CATEGORY_ID = NutrientsVariableCategory::ID;
	public $causeOnly = self::CAUSE_ONLY;

	public $defaultUnitId = self::DEFAULT_UNIT_ID;
	public $durationOfAction = self::DURATION_OF_ACTION;
	public $fillingType = self::FILLING_TYPE;
	public $id = self::ID;
	public $imageUrl = self::IMAGE_URL;
	public $manualTracking = self::MANUAL_TRACKING;
	public $name = self::NAME;
	public float $price = self::PRICE;
	public $productUrl = self::PRODUCT_URL;
	public $public = self::PUBLIC;
	public $synonyms = self::SYNONYMS;
	public $variableCategoryId = self::VARIABLE_CATEGORY_ID;
}
