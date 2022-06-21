<?php
namespace CureDAO\Client\Variables\GoalsVariables;
use CureDAO\Client\DataSources\Connectors\RescueTimeConnector;
use CureDAO\Client\Variables\BaseVariable;
use CureDAO\Client\VariableCategories\GoalsVariableCategory;
use CureDAO\Client\Units\PercentUnit;
class ProductivityVariable extends BaseVariable {
	public const DEFAULT_UNIT_ID = PercentUnit::ID;
	public const DURATION_OF_ACTION = 604800;
	public const ID = 1876;
	public const IMAGE_URL = RescueTimeConnector::IMAGE;
	public const MANUAL_TRACKING = true;
	public const NAME = 'Productivity';
	public const FIELD_OUTCOME = true;
	public const PRICE = 16.0;
	public const PRODUCT_URL = 'https://www.amazon.com/Productivity-Project-Accomplishing-Managing-Attention/dp/1101904054?SubscriptionId=AKIAU4A65MD5NAL2A57V&tag=quantimodo05-20&linkCode=xm2&camp=2025&creative=165953&creativeASIN=1';
	public const PUBLIC = true;
	public const SYNONYMS = ['Productivity'];
	public const VARIABLE_CATEGORY_ID = GoalsVariableCategory::ID;
	public $defaultUnitId = self::DEFAULT_UNIT_ID;
	public $durationOfAction = self::DURATION_OF_ACTION;
	public $id = self::ID;
	public $imageUrl = self::IMAGE_URL;
	public $manualTracking = self::MANUAL_TRACKING;
	public $name = self::NAME;
	public float $price = self::PRICE;
	public $productUrl = self::PRODUCT_URL;
	public $public = self::PUBLIC;
	public $synonyms = self::SYNONYMS;
	public $variableCategoryId = self::VARIABLE_CATEGORY_ID;
	public $outcome = self::FIELD_OUTCOME;
}
