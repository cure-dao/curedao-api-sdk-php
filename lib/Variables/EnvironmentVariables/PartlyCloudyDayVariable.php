<?php
namespace CureDAO\Client\Variables\EnvironmentVariables;
use CureDAO\Client\UI\ImageUrls;
use CureDAO\Client\Variables\BaseVariable;
use CureDAO\Client\VariableCategories\EnvironmentVariableCategory;
use CureDAO\Client\Units\CountUnit;
class PartlyCloudyDayVariable extends BaseVariable {
	public const CAUSE_ONLY = false;
	public const COMBINATION_OPERATION = 'SUM';
	public const DEFAULT_UNIT_ID = CountUnit::ID;
	public const CREATOR_USER_ID = 0;
	public const DURATION_OF_ACTION = 604800;
	public const FILLING_VALUE = 0.0;
	public const ID = 5965343;
	public const IMAGE_URL = ImageUrls::AGRICULTURE_RAIN;
	public const MANUAL_TRACKING = false;
	public const NAME = 'Partly Cloudy-day';
	public const ONSET_DELAY = 0;
	public const OUTCOME = false;
	public const PRICE = 12.0;
	public const PRODUCT_URL = 'https://www.amazon.com/Blue-Ink-Runs-Partly-Cloudy/dp/0931659167?SubscriptionId=AKIAU4A65MD5NAL2A57V&tag=quantimodo05-20&linkCode=xm2&camp=2025&creative=165953&creativeASIN=0931659167';
	public const PUBLIC = true;
	public const SYNONYMS = ['Partly Cloudy-day'];
	public const VARIABLE_CATEGORY_ID = EnvironmentVariableCategory::ID;
	public $causeOnly = self::CAUSE_ONLY;

	public $defaultUnitId = self::DEFAULT_UNIT_ID;
	public $creatorUserId = self::CREATOR_USER_ID;
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
