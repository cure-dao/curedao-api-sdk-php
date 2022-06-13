<?php
namespace CureDAO\Client\Variables\VitalSignsCommonVariables;
use CureDAO\Client\UI\ImageUrls;
use CureDAO\Client\Variables\BaseVariable;
use CureDAO\Client\VariableCategories\VitalSignsVariableCategory;
use CureDAO\Client\Units\BeatsPerMinuteUnit;
class RestingHeartRatePulseCommonVariable extends BaseVariable {
	public const DEFAULT_UNIT_ID = BeatsPerMinuteUnit::ID;
	public const DEFAULT_VALUE = 68.0;
	public const ID = 5211891;
	public const IMAGE_URL = ImageUrls::MEDICAL_HEART;
	public const MANUAL_TRACKING = true; // Need these to show up in search if people want to record manually
	public const NAME = 'Resting Heart Rate (Pulse)';
	public const PRICE = 99.989999999999995;
	public const PRODUCT_URL = 'https://www.amazon.com/Backpod-Treatment-Smartphones-Computers-Costochondritis/dp/B01LYNZBV3?SubscriptionId=AKIAU4A65MD5NAL2A57V&tag=quantimodo05-20&linkCode=xm2&camp=2025&creative=165953&creativeASIN=B01L';
	public const PUBLIC = true;
	public const SYNONYMS = ['Resting Heart Rate', 'Pulse'];
	public const VARIABLE_CATEGORY_ID = VitalSignsVariableCategory::ID;
	public $defaultUnitId = self::DEFAULT_UNIT_ID;
	public $defaultValue = self::DEFAULT_VALUE;
	public $id = self::ID;
	public $imageUrl = self::IMAGE_URL;
	public $manualTracking = self::MANUAL_TRACKING;
	public $name = self::NAME;
	public float $price = self::PRICE;
	public $productUrl = self::PRODUCT_URL;
	public $public = self::PUBLIC;
	public $synonyms = self::SYNONYMS;
	public $variableCategoryId = self::VARIABLE_CATEGORY_ID;
}
