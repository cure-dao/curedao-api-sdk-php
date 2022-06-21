<?php
namespace CureDAO\Client\Variables\NutrientsVariables;
use CureDAO\Client\Variables\BaseVariable;
use CureDAO\Client\VariableCategories\NutrientsVariableCategory;
use CureDAO\Client\Units\GramsUnit;
class FiberVariable extends BaseVariable {
	public const CAUSE_ONLY = false;

	public const DEFAULT_UNIT_ID = GramsUnit::ID;
	public const DURATION_OF_ACTION = 604800;
	public const ID = 1315;
	public const IMAGE_URL = 'https://images-na.ssl-images-amazon.com/images/I/41NHdaTj%2B9L._SL160_.jpg';
	public const MAXIMUM_ALLOWED_VALUE = 7257.0;
	public const NAME = 'Fiber';
	public const PRICE = 19.760000000000002;
	public const PRODUCT_URL = 'https://www.amazon.com/Vitafusion-Fiber-Gummies-Count-Packaging/dp/B002NPCML0?psc=1&SubscriptionId=AKIAU4A65MD5NAL2A57V&tag=quantimodo04-20&linkCode=xm2&camp=2025&creative=165953&creativeASIN=B002NPCML0';
	public const PUBLIC = true;
	public const SYNONYMS = ['Fiber'];
	public const VARIABLE_CATEGORY_ID = NutrientsVariableCategory::ID;
	public $causeOnly = self::CAUSE_ONLY;

	public $defaultUnitId = self::DEFAULT_UNIT_ID;
	public $durationOfAction = self::DURATION_OF_ACTION;
	public $id = self::ID;
	public $imageUrl = self::IMAGE_URL;
	public $maximumAllowedValue = self::MAXIMUM_ALLOWED_VALUE;
	public $name = self::NAME;
	public float $price = self::PRICE;
	public $productUrl = self::PRODUCT_URL;
	public $public = self::PUBLIC;
	public $synonyms = self::SYNONYMS;
	public $variableCategoryId = self::VARIABLE_CATEGORY_ID;
}
