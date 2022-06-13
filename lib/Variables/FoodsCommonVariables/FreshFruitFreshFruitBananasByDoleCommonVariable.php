<?php
namespace CureDAO\Client\Variables\CommonVariables\FoodsCommonVariables;
use CureDAO\Client\Properties\Base\BaseFillingTypeProperty;
use CureDAO\Client\Variables\QMCommonVariable;
use CureDAO\Client\VariableCategories\FoodsVariableCategory;
use CureDAO\Client\Units\GramsUnit;
class FreshFruitFreshFruitBananasByDoleCommonVariable extends QMCommonVariable {
	public const CAUSE_ONLY = false;
	public const DEFAULT_UNIT_ID = GramsUnit::ID;
	public const DURATION_OF_ACTION = 1209600;
	public const FILLING_TYPE = BaseFillingTypeProperty::FILLING_TYPE_ZERO;
	public const ID = 1971;
	public const IMAGE_URL = 'https://images-na.ssl-images-amazon.com/images/I/21dA3cYpqOL._SL160_.jpg';
	public const NAME = 'Fresh Fruit Fresh Fruit Bananas By Dole';
	public const PRICE = 14.27;
	public const PRODUCT_URL = 'https://www.amazon.com/Fresh-Organic-Bananas-Approximately-Bunch/dp/B00ZVIWWB6?SubscriptionId=AKIAU4A65MD5NAL2A57V&tag=quantimodo05-20&linkCode=xm2&camp=2025&creative=165953&creativeASIN=B00ZVIWWB6';
	public const PUBLIC = true;
	public const SYNONYMS = [
    'Fresh Fruit Fresh Fruit Bananas',
    'Fresh Fruit Fresh Fruit Bananas By Dole',
    'Fresh Fruit Fresh Fruit Banana',
];
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
