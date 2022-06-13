<?php
namespace CureDAO\Client\Variables\PhysiqueCommonVariables;
use CureDAO\Client\UI\ImageUrls;
use CureDAO\Client\Variables\BaseVariable;
use CureDAO\Client\VariableCategories\PhysiqueVariableCategory;
use CureDAO\Client\Units\PercentUnit;
class FatRatioCommonVariable extends BaseVariable {
	public const DEFAULT_UNIT_ID = PercentUnit::ID;
	public const ID = 1875;
	public const IMAGE_URL = ImageUrls::FITNESS_WEIGHING_SCALE;
	public const NAME = 'Fat Ratio';
	public const PRICE = 36.990000000000002;
	public const PRODUCT_URL = 'https://www.amazon.com/Beverly-International-servings-Vanilla-whey-casein/dp/B0013OSBYE?psc=1&SubscriptionId=AKIAU4A65MD5NAL2A57V&tag=quantimodo05-20&linkCode=xm2&camp=2025&creative=165953&creativeASI';
	public const SYNONYMS = ['Fat Ratio'];
	public const VARIABLE_CATEGORY_ID = PhysiqueVariableCategory::ID;
	public $defaultUnitId = self::DEFAULT_UNIT_ID;
	public $id = self::ID;
	public $imageUrl = self::IMAGE_URL;
	public $name = self::NAME;
	public float $price = self::PRICE;
	public $productUrl = self::PRODUCT_URL;
	public $synonyms = self::SYNONYMS;
	public $variableCategoryId = self::VARIABLE_CATEGORY_ID;
}
