<?php
namespace CureDAO\Client\Variables\EmotionsVariables;
use CureDAO\Client\UI\ImageUrls;
use CureDAO\Client\Variables\BaseVariable;
use CureDAO\Client\VariableCategories\EmotionsVariableCategory;
use CureDAO\Client\Units\OneToFiveRatingUnit;
class AlertnessVariable extends BaseVariable {
	public const DEFAULT_UNIT_ID = OneToFiveRatingUnit::ID;
	public const DEFAULT_VALUE = 3.0;
	public const DESCRIPTION = 'If you are alert, you are paying full attention to things around you and are able to deal with anything that might happen.';
	public const ID = 1258;
	public const IMAGE_URL = ImageUrls::EMOTICON_SET_HAPPY_1;
	public const NAME = 'Alertness';
	public const PRICE = 29.989999999999998;
	public const PRODUCT_URL = 'https://www.amazon.com/Gaia-Herbs-Mental-Alertness-Phyto-Capsules/dp/B00F1J7OA4?psc=1&SubscriptionId=AKIAU4A65MD5NAL2A57V&tag=quantimodo05-20&linkCode=xm2&camp=2025&creative=165953&creativeASIN=B00F1J7OA4';
	public const SYNONYMS = ['Alertness', 'Alertnes', 'Alertne'];
	public const VALENCE = 'positive';
	public const VARIABLE_CATEGORY_ID = EmotionsVariableCategory::ID;
	public $defaultUnitId = self::DEFAULT_UNIT_ID;
	public $defaultValue = self::DEFAULT_VALUE;
	public $description = self::DESCRIPTION;
	public $id = self::ID;
	public $imageUrl = self::IMAGE_URL;
	public $name = self::NAME;
	public float $price = self::PRICE;
	public $productUrl = self::PRODUCT_URL;
	public $synonyms = self::SYNONYMS;
	public $valence = self::VALENCE;
	public $variableCategoryId = self::VARIABLE_CATEGORY_ID;
}
