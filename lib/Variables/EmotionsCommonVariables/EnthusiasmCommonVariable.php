<?php
namespace CureDAO\Client\Variables\EmotionsCommonVariables;
use CureDAO\Client\UI\ImageUrls;
use CureDAO\Client\Variables\BaseVariable;
use CureDAO\Client\VariableCategories\EmotionsVariableCategory;
use CureDAO\Client\Units\OneToFiveRatingUnit;
class EnthusiasmCommonVariable extends BaseVariable {
	public const DEFAULT_UNIT_ID = OneToFiveRatingUnit::ID;
	public const DEFAULT_VALUE = 1.0;
	public const DESCRIPTION = 'Enthusiasm is great eagerness to be involved in a particular activity that you like and enjoy or that you think is important.';
	public const ID = 1307;
	public const IMAGE_URL = ImageUrls::EMOTICON_SET_JOYFUL_2;
	public const NAME = 'Enthusiasm';
	public const PRODUCT_URL = 'https://www.amazon.com/Enthusiasm-Makes-Difference-Norman-Vincent-ebook/dp/B000FC0O0Y?SubscriptionId=AKIAU4A65MD5NAL2A57V&tag=quantimodo05-20&linkCode=xm2&camp=2025&creative=165953&creativeASIN=B000FC';
	public const SYNONYMS = ['Enthusiasm'];
	public const VALENCE = 'positive';
	public const VARIABLE_CATEGORY_ID = EmotionsVariableCategory::ID;
	public $defaultUnitId = self::DEFAULT_UNIT_ID;
	public $defaultValue = self::DEFAULT_VALUE;
	public $description = self::DESCRIPTION;
	public $id = self::ID;
	public $imageUrl = self::IMAGE_URL;
	public $name = self::NAME;
	public $productUrl = self::PRODUCT_URL;
	public $synonyms = self::SYNONYMS;
	public $valence = self::VALENCE;
	public $variableCategoryId = self::VARIABLE_CATEGORY_ID;
}
