<?php
namespace CureDAO\Client\Variables\PhysiqueCommonVariables;
use CureDAO\Client\UI\ImageUrls;
use CureDAO\Client\Variables\BaseVariable;
use CureDAO\Client\VariableCategories\PhysiqueVariableCategory;
use CureDAO\Client\Units\CentimetersUnit;
class HeightCommonVariable extends BaseVariable {
	public const DEFAULT_UNIT_ID = CentimetersUnit::ID;
	public const ID = 1343;
	public const IMAGE_URL = ImageUrls::FITNESS_MEASURING_TAPE;
	public const MANUAL_TRACKING = false;
	public const NAME = 'Height';
	public const PRICE = 59.950000000000003;
	public const PRODUCT_URL = 'https://www.amazon.com/PureHeight-Enhancement-Dietary-Supplement-Capsules/dp/B01J6GO82Y?SubscriptionId=AKIAU4A65MD5NAL2A57V&tag=quantimodo05-20&linkCode=xm2&camp=2025&creative=165953&creativeASIN=B01J';
	public const PUBLIC = true;
	public const SYNONYMS = ['Height'];
	public const VARIABLE_CATEGORY_ID = PhysiqueVariableCategory::ID;
	public $defaultUnitId = self::DEFAULT_UNIT_ID;
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
