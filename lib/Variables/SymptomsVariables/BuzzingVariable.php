<?php
namespace CureDAO\Client\Variables\SymptomsVariables;
use CureDAO\Client\UI\ImageUrls;
use CureDAO\Client\Variables\BaseVariable;
use CureDAO\Client\VariableCategories\SymptomsVariableCategory;
use CureDAO\Client\Units\OneToFiveRatingUnit;
class BuzzingVariable extends BaseVariable {
	public const DEFAULT_UNIT_ID = OneToFiveRatingUnit::ID;
	public const ID = 88390;
	public const IMAGE_URL = ImageUrls::EMOTICON_SET_SAD_2;
	public const NAME = 'Buzzing';
	public const PRICE = 23.0;
	public const PRODUCT_URL = 'https://www.amazon.com/Buzzing-Communities-Bigger-Better-Active/dp/0988359901?SubscriptionId=AKIAU4A65MD5NAL2A57V&tag=quantimodo05-20&linkCode=xm2&camp=2025&creative=165953&creativeASIN=0988359901';
	public const PUBLIC = true;
	public const SYNONYMS = ['Buzzing'];
	public const VARIABLE_CATEGORY_ID = SymptomsVariableCategory::ID;
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
