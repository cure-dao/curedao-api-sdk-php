<?php
namespace CureDAO\Client\Properties\Base;
use OpenApi\Generator;
class BaseValenceProperty {
    public const VALENCE_NEGATIVE = 'negative';
    public const VALENCE_POSITIVE = 'positive';
    public const VALENCE_NEUTRAL = 'neutral';
    public $dbInput = 'string:nullable';
	public $default = Generator::UNDEFINED;
	public $description = 'Set the valence positive if more is better for all the variables in the category, negative if more is bad, and neutral if none of the variables have such a valence. Valence is null if there is not a consistent valence for all variables in the category.';
	public $enum = [self::VALENCE_POSITIVE, self::VALENCE_NEGATIVE, self::VALENCE_NEUTRAL];
	public $inForm = true;
	public $inIndex = true;
	public $inView = true;
	public $isFillable = true;
	public $isOrderable = false;
	public $isSearchable = true;
	public $name = self::NAME;
	public const NAME = 'valence';
	public $rules = 'nullable';
	public $title = 'Valence';
	public $canBeChangedToNull = true;
	public $validations = 'nullable';
}
