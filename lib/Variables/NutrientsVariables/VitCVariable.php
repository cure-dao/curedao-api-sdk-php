<?php
namespace CureDAO\Client\Variables\NutrientsVariables;
use CureDAO\Client\Variables\BaseVariable;
use CureDAO\Client\VariableCategories\NutrientsVariableCategory;
use CureDAO\Client\Units\RecommendedDailyAllowanceUnit;
class VitCVariable extends BaseVariable {
	public const CAUSE_ONLY = false;
	public const DEFAULT_UNIT_ID = RecommendedDailyAllowanceUnit::ID;
	public const DURATION_OF_ACTION = 604800;
	public const ID = 1943;
	public const IMAGE_URL = 'https://images-na.ssl-images-amazon.com/images/I/51%2BruzDDl-L._SL160_.jpg';
	public const NAME = 'Vit.C';
	public const PRICE = 16.989999999999998;
	public const PRODUCT_URL = 'https://www.amazon.com/Natures-Way-Vitamin-Bioflavonoids-Vcaps/dp/B000F4WTY6?psc=1&SubscriptionId=AKIAU4A65MD5NAL2A57V&tag=quantimodo05-20&linkCode=xm2&camp=2025&creative=165953&creativeASIN=B000F4WTY';
	public const PUBLIC = true;
	public const SYNONYMS = ['Vit.C'];
	public const VARIABLE_CATEGORY_ID = NutrientsVariableCategory::ID;
	public $causeOnly = self::CAUSE_ONLY;
	public $defaultUnitId = self::DEFAULT_UNIT_ID;
	public $durationOfAction = self::DURATION_OF_ACTION;
	public $id = self::ID;
	public $imageUrl = self::IMAGE_URL;
	public $name = self::NAME;
	public float $price = self::PRICE;
	public $productUrl = self::PRODUCT_URL;
	public $public = self::PUBLIC;
	public $synonyms = self::SYNONYMS;
	public $variableCategoryId = self::VARIABLE_CATEGORY_ID;
}
