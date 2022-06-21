<?php
namespace CureDAO\Client\Variables\FoodsVariables;
use CureDAO\Client\Properties\Base\BaseFillingTypeProperty;
use CureDAO\Client\Variables\BaseVariable;
use CureDAO\Client\VariableCategories\FoodsVariableCategory;
use CureDAO\Client\Units\YesNoUnit;
class DairyAndEggProductsVariable extends BaseVariable {
	public const CAUSE_ONLY = false;
	public const DEFAULT_UNIT_ID = YesNoUnit::ID;
	public const DURATION_OF_ACTION = 1209600;
	public const FILLING_TYPE = BaseFillingTypeProperty::FILLING_TYPE_ZERO;
	public const ID = 5400961;
	public const IMAGE_URL = 'https://static.quantimo.do/img/variable_categories/vegetarian_food-96.png';
	public const NAME = 'Dairy And Egg Products';
	public const PUBLIC = true;
	public const SYNONYMS = ['Dairy And Egg Products', 'Dairy And Egg Product'];
	public const VARIABLE_CATEGORY_ID = FoodsVariableCategory::ID;
	public $causeOnly = self::CAUSE_ONLY;
	public $defaultUnitId = self::DEFAULT_UNIT_ID;
	public $durationOfAction = self::DURATION_OF_ACTION;
	public $fillingType = self::FILLING_TYPE;
	public $id = self::ID;
	public $imageUrl = self::IMAGE_URL;
	public $name = self::NAME;
	public $public = self::PUBLIC;
	public $synonyms = self::SYNONYMS;
	public $variableCategoryId = self::VARIABLE_CATEGORY_ID;
}
