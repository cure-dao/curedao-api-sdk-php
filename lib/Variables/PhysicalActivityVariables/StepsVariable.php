<?php
namespace CureDAO\Client\Variables\PhysicalActivityVariables;
use CureDAO\Client\Properties\Base\BaseCombinationOperationProperty;
use CureDAO\Client\Properties\Base\BaseFillingTypeProperty;
use CureDAO\Client\UI\ImageUrls;
use CureDAO\Client\Variables\BaseVariable;
use CureDAO\Client\VariableCategories\PhysicalActivityVariableCategory;
use CureDAO\Client\Units\CountUnit;
class StepsVariable extends BaseVariable {
	public const DEFAULT_UNIT_ID = CountUnit::ID;
	public const FILLING_TYPE = BaseFillingTypeProperty::FILLING_TYPE_ZERO;
	public const ID = 5995011;
	public const IMAGE_URL = ImageUrls::FITNESS_TREADMILL;
	public const NAME = 'Steps';
	public const PRICE = 33.840000000000003;
	public const PRODUCT_URL = 'https://www.amazon.com/Pet-Gear-Stairs-150-pounds-Chocolate/dp/B003SZS5JW?psc=1&SubscriptionId=AKIAU4A65MD5NAL2A57V&tag=quantimodo04-20&linkCode=xm2&camp=2025&creative=165953&creativeASIN=B003SZS5JW';
	public const PUBLIC = true;
	public const SYNONYMS = ['Steps', 'Step'];
	public const VARIABLE_CATEGORY_ID = PhysicalActivityVariableCategory::ID;
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
    public const COMBINATION_OPERATION = BaseCombinationOperationProperty::COMBINATION_SUM;
    public $combinationOperation = self::COMBINATION_OPERATION;
}
