<?php
namespace CureDAO\Client\Variables\FoodsVariables;
use CureDAO\Client\Properties\Base\BaseFillingTypeProperty;
use CureDAO\Client\Variables\BaseVariable;
use CureDAO\Client\VariableCategories\FoodsVariableCategory;
use CureDAO\Client\Units\ServingUnit;
class AlmondBreezeAlmondMilkOriginalVariable extends BaseVariable {
	public const CAUSE_ONLY = false;
	public const DEFAULT_UNIT_ID = ServingUnit::ID;
	public const DURATION_OF_ACTION = 1209600;
	public const FILLING_TYPE = BaseFillingTypeProperty::FILLING_TYPE_ZERO;
	public const ID = 1728;
	public const IMAGE_URL = 'https://images-na.ssl-images-amazon.com/images/I/515nGZAvVxL._SL160_.jpg';
	public const NAME = 'Almond Breeze - Almond Milk (Original)';
	public const PRODUCT_URL = 'https://www.amazon.com/Almond-Breeze-Almondmilk/dp/B008AL4CGO?SubscriptionId=AKIAU4A65MD5NAL2A57V&tag=quantimodo05-20&linkCode=xm2&camp=2025&creative=165953&creativeASIN=B008AL4CGO';
	public const PUBLIC = true;
	public const SYNONYMS = ['Almond Breeze - Almond Milk', 'Original', 'Almond Breeze'];
	public const VARIABLE_CATEGORY_ID = FoodsVariableCategory::ID;
	public $causeOnly = self::CAUSE_ONLY;
	public $defaultUnitId = self::DEFAULT_UNIT_ID;
	public $durationOfAction = self::DURATION_OF_ACTION;
	public $fillingType = self::FILLING_TYPE;
	public $id = self::ID;
	public $imageUrl = self::IMAGE_URL;
	public $name = self::NAME;
	public $productUrl = self::PRODUCT_URL;
	public $public = self::PUBLIC;
	public $synonyms = self::SYNONYMS;
	public $variableCategoryId = self::VARIABLE_CATEGORY_ID;
}
