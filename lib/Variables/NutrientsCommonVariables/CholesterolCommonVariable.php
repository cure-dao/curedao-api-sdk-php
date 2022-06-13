<?php
namespace CureDAO\Client\Variables\NutrientsCommonVariables;
use CureDAO\Client\UI\ImageUrls;
use CureDAO\Client\Variables\BaseVariable;
use CureDAO\Client\VariableCategories\NutrientsVariableCategory;
use CureDAO\Client\Units\MilligramsUnit;
class CholesterolCommonVariable extends BaseVariable {
	public const CAUSE_ONLY = false;

	public const DEFAULT_UNIT_ID = MilligramsUnit::ID;
	public const CREATOR_USER_ID = 0;
	public const DURATION_OF_ACTION = 604800;
	public const FILLING_TYPE = 'zero';
	public const ID = 1290;
	public const IMAGE_URL = ImageUrls::FITNESS_FAST_FOOD;
	public const MANUAL_TRACKING = false;
	public const NAME = 'Cholesterol';
	public const ONSET_DELAY = 0;
	public const OUTCOME = false;
	public const PRICE = 21.890000000000001;
	public const PRODUCT_URL = 'https://www.amazon.com/Nature-Made-CholestOff-Original-Caplets/dp/B001F1FXZU?psc=1&SubscriptionId=AKIAU4A65MD5NAL2A57V&tag=quantimodo04-20&linkCode=xm2&camp=2025&creative=165953&creativeASIN=B001F1FXZU';
	public const PUBLIC = true;
	public const SYNONYMS = ['Cholesterol'];
	public const VARIABLE_CATEGORY_ID = NutrientsVariableCategory::ID;
	public $causeOnly = self::CAUSE_ONLY;

	public $defaultUnitId = self::DEFAULT_UNIT_ID;
	public $creatorUserId = self::CREATOR_USER_ID;
	public $durationOfAction = self::DURATION_OF_ACTION;
	public $fillingType = self::FILLING_TYPE;
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
