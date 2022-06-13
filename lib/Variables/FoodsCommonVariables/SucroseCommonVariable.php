<?php
namespace CureDAO\Client\Variables\CommonVariables\FoodsCommonVariables;
use CureDAO\Client\Properties\Base\BaseFillingTypeProperty;
use CureDAO\Client\Variables\QMCommonVariable;
use CureDAO\Client\VariableCategories\FoodsVariableCategory;
use CureDAO\Client\Units\GramsUnit;
class SucroseCommonVariable extends QMCommonVariable {
	public const CAUSE_ONLY = false;
	public const DEFAULT_UNIT_ID = GramsUnit::ID;
	public const DURATION_OF_ACTION = 1209600;
	public const FILLING_TYPE = BaseFillingTypeProperty::FILLING_TYPE_ZERO;
	public const ID = 1960;
	public const IMAGE_URL = 'https://images-na.ssl-images-amazon.com/images/I/51YLqP5hwqL._SL160_.jpg';
	public const NAME = 'Sucrose';
	public const PRICE = 14.99;
	public const PRODUCT_URL = 'https://www.amazon.com/Sucrose-Molecular-Gastronomy-Non-GMO-Certified/dp/B00CYGWOXE?SubscriptionId=AKIAU4A65MD5NAL2A57V&tag=quantimodo04-20&linkCode=xm2&camp=2025&creative=165953&creativeASIN=B00CYGWOXE';
	public const PUBLIC = true;
	public const SYNONYMS = ['Sucrose'];
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
