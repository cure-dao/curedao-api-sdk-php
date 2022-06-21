<?php
namespace CureDAO\Client\Variables\TreatmentsVariables;
use CureDAO\Client\Properties\Base\BaseFillingTypeProperty;
use CureDAO\Client\Variables\BaseVariable;
use CureDAO\Client\VariableCategories\TreatmentsVariableCategory;
use CureDAO\Client\Units\TabletsUnit;
class VitaminCVariable extends BaseVariable {
	public const CAUSE_ONLY = false;
	public const DEFAULT_UNIT_ID = TabletsUnit::ID;
	public const DEFAULT_VALUE = 1.0;
	public const DURATION_OF_ACTION = 1814400;
	public const FILLING_TYPE = BaseFillingTypeProperty::FILLING_TYPE_ZERO;
	public const ID = 1478;
	public const IMAGE_URL = 'https://images-na.ssl-images-amazon.com/images/I/51Ezbn0cLJL._SL160_.jpg';
	public const NAME = 'Vitamin C';
	public const PRICE = 9.9900000000000002;
	public const PRODUCT_URL = 'https://www.amazon.com/Nature-Made-Vitamin-Rose-Caplets/dp/B0000DJAVX?SubscriptionId=AKIAU4A65MD5NAL2A57V&tag=quantimodo05-20&linkCode=xm2&camp=2025&creative=165953&creativeASIN=B0000DJAVX';
	public const PUBLIC = true;
	public const SYNONYMS = ['Vitamin C'];
	public const VARIABLE_CATEGORY_ID = TreatmentsVariableCategory::ID;
	public $causeOnly = self::CAUSE_ONLY;
	public $defaultUnitId = self::DEFAULT_UNIT_ID;
	public $defaultValue = self::DEFAULT_VALUE;
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
