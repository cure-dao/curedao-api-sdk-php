<?php
namespace CureDAO\Client\Variables\PhysiqueCommonVariables;
use CureDAO\Client\UI\ImageUrls;
use CureDAO\Client\Variables\BaseVariable;
use CureDAO\Client\VariableCategories\PhysiqueVariableCategory;
use CureDAO\Client\Units\KilogramsUnit;
class FatFreeMassFfmOrLeanBodyMassLbmCommonVariable extends BaseVariable {
	public const DEFAULT_UNIT_ID = KilogramsUnit::ID;
	public const ID = 5955691;
	public const IMAGE_URL =ImageUrls::FITNESS_WEIGHING_SCALE;
	public const NAME = 'Fat-Free Mass (FFM) Or Lean Body Mass (LBM)';
	public const PRICE = 19.989999999999998;
	public const PRODUCT_URL = 'https://www.amazon.com/Therapeutic-Nutrition-Powder-Orange-Packets/dp/B004L5HAXK?SubscriptionId=AKIAU4A65MD5NAL2A57V&tag=quantimodo05-20&linkCode=xm2&camp=2025&creative=165953&creativeASIN=B004L5HAXK';
	public const PUBLIC = true;
	public const SYNONYMS = ['Fat-Free Mass', 'FFM', 'Fat-Free Mas', 'Fat-Free Ma'];
	public const VARIABLE_CATEGORY_ID = PhysiqueVariableCategory::ID;
	public $defaultUnitId = self::DEFAULT_UNIT_ID;
	public $id = self::ID;
	public $imageUrl = self::IMAGE_URL;
	public $name = self::NAME;
	public float $price = self::PRICE;
	public $productUrl = self::PRODUCT_URL;
	public $public = self::PUBLIC;
	public $synonyms = self::SYNONYMS;
	public $variableCategoryId = self::VARIABLE_CATEGORY_ID;
}
