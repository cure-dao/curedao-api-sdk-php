<?php
namespace CureDAO\Client\Variables\FoodsVariables;
use CureDAO\Client\UI\ImageUrls;
use CureDAO\Client\Variables\BaseVariable;
use CureDAO\Client\VariableCategories\FoodsVariableCategory;
use CureDAO\Client\Units\ServingUnit;
class TeaBrewedPreparedWithTapWaterBlackTeaVariable extends BaseVariable {
	public const CAUSE_ONLY = false;
	public const COMBINATION_OPERATION = 'SUM';
	public const DEFAULT_UNIT_ID = ServingUnit::ID;
	public const CREATOR_USER_ID = 7;
	public const DEFAULT_VALUE = 1.0;
	public const DURATION_OF_ACTION = 1209600;
	public const FILLING_VALUE = 0.0;
	public const ID = 1730;
	public const IMAGE_URL = ImageUrls::FITNESS_ENERGY_DRINK;
	public const MANUAL_TRACKING = true;
	public const NAME = 'Tea - Brewed, Prepared With Tap Water (black Tea)';
	public const ONSET_DELAY = 1800;
	public const OUTCOME = false;
	public const PRICE = 37.560000000000002;
	public const PRODUCT_URL = 'https://www.amazon.com/Lipton-Gallon-Sized-Black-Unsweetened/dp/B071YYY2M3?SubscriptionId=AKIAU4A65MD5NAL2A57V&tag=quantimodo05-20&linkCode=xm2&camp=2025&creative=165953&creativeASIN=B071YYY2M3';
	public const PUBLIC = true;
	public const SYNONYMS = [
    'Tea - Brewed, Prepared With Tap Water',
    'black Tea',
    'Tea',
    'Tea - Brewed',
];
	public const VARIABLE_CATEGORY_ID = FoodsVariableCategory::ID;
	public $causeOnly = self::CAUSE_ONLY;
	public $combinationOperation = self::COMBINATION_OPERATION;
	public $defaultUnitId = self::DEFAULT_UNIT_ID;
	public $creatorUserId = self::CREATOR_USER_ID;
	public $defaultValue = self::DEFAULT_VALUE;
	public $durationOfAction = self::DURATION_OF_ACTION;
	public $fillingValue = self::FILLING_VALUE;
	public $id = self::ID;
	public $imageUrl = self::IMAGE_URL;
	public $manualTracking = self::MANUAL_TRACKING;
	public $name = self::NAME;
	public $onsetDelay = self::ONSET_DELAY;
	public $outcome = self::OUTCOME;
	public float $price = self::PRICE;
	public $productUrl = self::PRODUCT_URL;
	public $public = self::PUBLIC;
	public $synonyms = self::SYNONYMS;
	public $variableCategoryId = self::VARIABLE_CATEGORY_ID;
}