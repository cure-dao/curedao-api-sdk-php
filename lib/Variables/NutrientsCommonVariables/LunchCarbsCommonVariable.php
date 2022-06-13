<?php
namespace CureDAO\Client\Variables\NutrientsCommonVariables;
use CureDAO\Client\Properties\Base\BaseFillingTypeProperty;
use CureDAO\Client\Variables\BaseVariable;
use CureDAO\Client\VariableCategories\NutrientsVariableCategory;
use CureDAO\Client\Units\GramsUnit;
class LunchCarbsCommonVariable extends BaseVariable {
	public const CAUSE_ONLY = false;

	public const DEFAULT_UNIT_ID = GramsUnit::ID;
	public const DURATION_OF_ACTION = 604800;
	public const FILLING_TYPE = BaseFillingTypeProperty::FILLING_TYPE_NONE;
	public const ID = 2016;
	public const IMAGE_URL = 'https://images-na.ssl-images-amazon.com/images/I/51p4OkXKwqL._SL160_.jpg';
	public const MANUAL_TRACKING = false;
	public const NAME = 'Lunch Carbs';
	public const PRODUCT_URL = 'https://www.amazon.com/Lunch-Five-Lunches-Carbs-Ingredients-ebook/dp/B06XSHSG47?SubscriptionId=AKIAU4A65MD5NAL2A57V&tag=quantimodo05-20&linkCode=xm2&camp=2025&creative=165953&creativeASIN=B06XSHSG47';
	public const PUBLIC = true;
	public const SYNONYMS = ['Lunch Carbs', 'Lunch Carb'];
	public const VARIABLE_CATEGORY_ID = NutrientsVariableCategory::ID;
	public $causeOnly = self::CAUSE_ONLY;

	public $defaultUnitId = self::DEFAULT_UNIT_ID;
	public $durationOfAction = self::DURATION_OF_ACTION;
	public $fillingType = self::FILLING_TYPE;
	public $id = self::ID;
	public $imageUrl = self::IMAGE_URL;
	public $manualTracking = self::MANUAL_TRACKING;
	public $name = self::NAME;
	public $productUrl = self::PRODUCT_URL;
	public $public = self::PUBLIC;
	public $synonyms = self::SYNONYMS;
	public $variableCategoryId = self::VARIABLE_CATEGORY_ID;
}
