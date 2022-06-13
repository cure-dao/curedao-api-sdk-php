<?php
namespace CureDAO\Client\Variables\PhysiqueCommonVariables;
use CureDAO\Client\Properties\Base\BaseFillingTypeProperty;
use CureDAO\Client\UI\ImageUrls;
use CureDAO\Client\Variables\BaseVariable;
use CureDAO\Client\VariableCategories\PhysiqueVariableCategory;
use CureDAO\Client\Units\InchesUnit;
class NeckCircumferenceCommonVariable extends BaseVariable {
	public const DEFAULT_UNIT_ID = InchesUnit::ID;
	public const FILLING_TYPE = BaseFillingTypeProperty::FILLING_TYPE_NONE;
	public const ID = 1506;
	public const IMAGE_URL = ImageUrls::FITNESS_MEASURING_TAPE;
	public const NAME = 'Neck Circumference';
	public const PRICE = 30.989999999999998;
	public const PRODUCT_URL = 'https://www.amazon.com/SUN-CUBE-Adjustable-Breathable-Packable/dp/B078GZ3ZLM?psc=1&SubscriptionId=AKIAU4A65MD5NAL2A57V&tag=quantimodo05-20&linkCode=xm2&camp=2025&creative=165953&creativeASIN=B078GZ3ZL';
	public const PUBLIC = true;
	public const SYNONYMS = ['Neck Circumference'];
	public const VARIABLE_CATEGORY_ID = PhysiqueVariableCategory::ID;
	public $defaultUnitId = self::DEFAULT_UNIT_ID;
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
