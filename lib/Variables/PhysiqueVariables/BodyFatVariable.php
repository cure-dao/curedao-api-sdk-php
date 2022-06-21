<?php
namespace CureDAO\Client\Variables\PhysiqueVariables;
use CureDAO\Client\UI\ImageUrls;
use CureDAO\Client\Variables\BaseVariable;
use CureDAO\Client\VariableCategories\PhysiqueVariableCategory;
use CureDAO\Client\Units\PercentUnit;
class BodyFatVariable extends BaseVariable {
	public const DEFAULT_UNIT_ID = PercentUnit::ID;
	public const ID = 1273;
	public const IMAGE_URL = ImageUrls::FITNESS_WEIGHING_SCALE;
	public const MAXIMUM_ALLOWED_VALUE = 50.0;
    public const MINIMUM_ALLOWED_VALUE = 2;
	public const MINIMUM_ALLOWED_SECONDS_BETWEEN_MEASUREMENTS = 86400;
	public const NAME = 'Body Fat';
	public const PRICE = 36.770000000000003;
	public const PRODUCT_URL = 'https://www.amazon.com/Omron-HBF-306CN-Fat-Loss-Monitor/dp/B000FYZMYK?psc=1&SubscriptionId=AKIAU4A65MD5NAL2A57V&tag=quantimodo04-20&linkCode=xm2&camp=2025&creative=165953&creativeASIN=B000FYZMYK';
	public const PUBLIC = true;
	public const SYNONYMS = ['Body Fat'];
	public const VARIABLE_CATEGORY_ID = PhysiqueVariableCategory::ID;
	public $defaultUnitId = self::DEFAULT_UNIT_ID;
	public $id = self::ID;
	public $imageUrl = self::IMAGE_URL;
	public $maximumAllowedValue = self::MAXIMUM_ALLOWED_VALUE;
    public $minimumAllowedValue = self::MINIMUM_ALLOWED_VALUE;
	public $minimumAllowedSecondsBetweenMeasurements = self::MINIMUM_ALLOWED_SECONDS_BETWEEN_MEASUREMENTS;
	public $name = self::NAME;
	public float $price = self::PRICE;
	public $productUrl = self::PRODUCT_URL;
	public $public = self::PUBLIC;
	public $synonyms = self::SYNONYMS;
	public $variableCategoryId = self::VARIABLE_CATEGORY_ID;
}
