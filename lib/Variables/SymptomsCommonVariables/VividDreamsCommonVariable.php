<?php
namespace CureDAO\Client\Variables\SymptomsCommonVariables;
use CureDAO\Client\Properties\Base\BaseValenceProperty;
use CureDAO\Client\VariableCategories\SleepVariableCategory;
use CureDAO\Client\Variables\BaseVariable;
use CureDAO\Client\VariableCategories\SymptomsVariableCategory;
use CureDAO\Client\Units\OneToFiveRatingUnit;
class VividDreamsCommonVariable extends BaseVariable {
	public const DEFAULT_UNIT_ID = OneToFiveRatingUnit::ID;
	public const ID = 87812;
	public const IMAGE_URL = SleepVariableCategory::IMAGE_URL;
	public const NAME = 'Vivid Dreams';
	public const PRICE = 29.989999999999998;
	public const PRODUCT_URL = 'https://www.amazon.com/Dream-Leaf-Supplement-Experience-Revolution/dp/B00IP25N20?SubscriptionId=AKIAU4A65MD5NAL2A57V&tag=quantimodo05-20&linkCode=xm2&camp=2025&creative=165953&creativeASIN=B00IP25N20';
	public const PUBLIC = true;
	public const SYNONYMS = ['Vivid Dreams', 'Vivid Dream'];
	public const VALENCE = BaseValenceProperty::VALENCE_NEUTRAL;
	public const VARIABLE_CATEGORY_ID = SymptomsVariableCategory::ID;
	public $defaultUnitId = self::DEFAULT_UNIT_ID;
	public $id = self::ID;
	public $imageUrl = self::IMAGE_URL;
	public $name = self::NAME;
	public float $price = self::PRICE;
	public $productUrl = self::PRODUCT_URL;
	public $public = self::PUBLIC;
	public $synonyms = self::SYNONYMS;
	public $valence = self::VALENCE;
	public $variableCategoryId = self::VARIABLE_CATEGORY_ID;
}
