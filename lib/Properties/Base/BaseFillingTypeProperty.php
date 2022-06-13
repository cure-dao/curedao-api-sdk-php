<?php
namespace CureDAO\Client\Properties\Base;
use CureDAO\Client\UI\FontAwesome;
use CureDAO\Client\UI\ImageUrls;
use OpenApi\Generator;
class BaseFillingTypeProperty{
    public const FILLING_TYPE_ZERO = 'zero';
    public const FILLING_TYPE_UNDEFINED = Generator::UNDEFINED;
    public const FILLING_TYPE_NONE = 'none';
    public const FILLING_TYPE_VALUE = 'value';
    public const FILLING_TYPE_INTERPOLATION = 'interpolation';
    public $dbInput = 'string:nullable';
	public $default = Generator::UNDEFINED;
	public $description = 'How gaps without any measurements should be treated. Options are none or zero.';
	public $example = 'none';
	public $enum = [
	    self::FILLING_TYPE_VALUE,
        self::FILLING_TYPE_ZERO,
        self::FILLING_TYPE_NONE,
        self::FILLING_TYPE_UNDEFINED,
        self::FILLING_TYPE_INTERPOLATION,
    ];
	public $fontAwesome = FontAwesome::QUESTION_CIRCLE;
	public $htmlInput = 'text';
	public $htmlType = 'text';
	public $image = ImageUrls::QUESTION_MARK;
	public $inForm = true;
	public $inIndex = true;
	public $inView = true;
	public $isFillable = true;
	public $isOrderable = false;
	public $isSearchable = true;
	public $name = self::NAME;
	public const NAME = 'filling_type';
	public $canBeChangedToNull = true;
	public $rules = 'nullable|in:none,zero';
	public $title = 'Filling Type';
	public $validations = 'nullable|in:none,zero';
	/**
	 * @param $val
	 * @return string
	 */
	public static function valueToType($val): string{
        return BaseFillingValueProperty::fillingValueToType($val);
    }
	/**
	 * @param $val
	 * @return string
	 */
	public static function fromValue($val): string{
        return self::valueToType($val);
    }
    public static function toValue(string $type, float $value = null): ?float {
        return BaseFillingValueProperty::fromType($type, $value);
    }
    public static function hasFillingValue(string $type): bool{
        return $type === BaseFillingTypeProperty::FILLING_TYPE_VALUE ||
            $type === BaseFillingTypeProperty::FILLING_TYPE_ZERO;
    }
}
