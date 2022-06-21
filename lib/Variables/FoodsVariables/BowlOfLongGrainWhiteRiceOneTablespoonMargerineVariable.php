<?php
namespace CureDAO\Client\Variables\FoodsVariables;
use CureDAO\Client\Properties\Base\BaseFillingTypeProperty;
use CureDAO\Client\Variables\BaseVariable;
use CureDAO\Client\VariableCategories\FoodsVariableCategory;
use CureDAO\Client\Units\ServingUnit;
class BowlOfLongGrainWhiteRiceOneTablespoonMargerineVariable extends BaseVariable {
	public const CAUSE_ONLY = false;
	public const DEFAULT_UNIT_ID = ServingUnit::ID;
	public const DURATION_OF_ACTION = 1209600;
	public const FILLING_TYPE = BaseFillingTypeProperty::FILLING_TYPE_ZERO;
	public const ID = 1722;
	public const IMAGE_URL = 'https://images-na.ssl-images-amazon.com/images/I/21xSZMrpzVL._SL160_.jpg';
	public const NAME = 'Bowl of Long Grain White Rice + 1 Tablespoon Margerine';
	public const PRICE = 25.780000000000001;
	public const PRODUCT_URL = 'https://www.amazon.com/Minute-Ready-Serve-Grain-White/dp/B0074EE7J0?SubscriptionId=AKIAU4A65MD5NAL2A57V&tag=quantimodo05-20&linkCode=xm2&camp=2025&creative=165953&creativeASIN=B0074EE7J0';
	public const PUBLIC = true;
	public const SYNONYMS = ['Bowl of Long Grain White Rice + 1 Tablespoon Margerine'];
	public const VARIABLE_CATEGORY_ID = FoodsVariableCategory::ID;
	public $causeOnly = self::CAUSE_ONLY;
	public $defaultUnitId = self::DEFAULT_UNIT_ID;
	public $durationOfAction = self::DURATION_OF_ACTION;
	public $fillingType = self::FILLING_TYPE;
	public $id = self::ID;
	public $imageUrl = self::IMAGE_URL;
	public $name = self::NAME;
	public float $price = self::PRICE;
	public $productUrl = self::PRODUCT_URL;
	public $public = self::PUBLIC;
	public $synonyms = self::SYNONYMS;
	public $variableCategoryId = self::VARIABLE_CATEGORY_ID;
}
