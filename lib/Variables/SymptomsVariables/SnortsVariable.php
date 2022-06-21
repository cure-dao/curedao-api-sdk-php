<?php
namespace CureDAO\Client\Variables\SymptomsVariables;
use CureDAO\Client\Properties\Base\BaseFillingTypeProperty;
use CureDAO\Client\UI\ImageUrls;
use CureDAO\Client\Variables\BaseVariable;
use CureDAO\Client\VariableCategories\SymptomsVariableCategory;
use CureDAO\Client\Units\CountUnit;
class SnortsVariable extends BaseVariable {
	public const COMBINATION_OPERATION = 'SUM';
	public const DEFAULT_UNIT_ID = CountUnit::ID;
	public const DESCRIPTION = 'An explosive sound made by the sudden forcing of breath through one\'s nose';
	public const FILLING_TYPE = BaseFillingTypeProperty::FILLING_TYPE_ZERO;
	public const ID = 100334;
	public const IMAGE_URL = ImageUrls::EMOTICON_SET_SAD_2;
	public const NAME = 'Snorts';
	public const PRODUCT_URL = 'https://www.amazon.com/Snort-Cookbook-Solutions-Examples-Administrators-ebook/dp/B0028N4WJ2?SubscriptionId=AKIAU4A65MD5NAL2A57V&tag=quantimodo05-20&linkCode=xm2&camp=2025&creative=165953&creativeASIN=';
    public const PUBLIC = true;
	public const SYNONYMS = ['Snorts', 'Snort'];
	public const VARIABLE_CATEGORY_ID = SymptomsVariableCategory::ID;
	public $combinationOperation = self::COMBINATION_OPERATION;
	public $defaultUnitId = self::DEFAULT_UNIT_ID;
	public $description = self::DESCRIPTION;
	public $fillingType = self::FILLING_TYPE;
	public $id = self::ID;
	public $imageUrl = self::IMAGE_URL;
	public $name = self::NAME;
	public $productUrl = self::PRODUCT_URL;
	public $public = self::PUBLIC;
	public $synonyms = self::SYNONYMS;
	public $variableCategoryId = self::VARIABLE_CATEGORY_ID;
}
