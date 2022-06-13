<?php
namespace CureDAO\Client\Properties\Base;
use CureDAO\Client\UI\ImageUrls;
use CureDAO\Client\UI\FontAwesome;
class BaseFillingValueProperty {
	public $description = 'The filling value is substituted used when data is missing if the filling type is set to value.';
	public $example = -1;
	public $fieldType = 'float';
	public $fontAwesome = FontAwesome::QUESTION_CIRCLE;
	public $htmlType = 'text';
	public $image = ImageUrls::QUESTION_MARK;
	public $inForm = true;
	public $inIndex = true;
	public $inView = true;
	public $isFillable = true;
	public $isOrderable = true;
	public $isSearchable = false;
	public $name = self::NAME;
	public const NAME = 'filling_value';
	public $phpType = 'float';
	public $rules = 'nullable|numeric';
	public $title = 'Filling Value';
	public $canBeChangedToNull = true;
	public $validations = 'nullable|numeric';
    /**
     * @param string $type
     * @param float|null $value
     * @return mixed
     */
    public static function fromType(string $type, float $value = null){
        if($type === BaseFillingTypeProperty::FILLING_TYPE_NONE){
            return null;
        }
        if($type === BaseFillingTypeProperty::FILLING_TYPE_ZERO){
            return (float)0;
        }
        return $value;
    }
    public static function fillingValueToType(?float $val): string {
        if($val === null || (int)$val === (int)-1){
            return BaseFillingTypeProperty::FILLING_TYPE_NONE;
        } elseif($val == 0){
           return BaseFillingTypeProperty::FILLING_TYPE_ZERO;
        } else {
            return BaseFillingTypeProperty::FILLING_TYPE_VALUE;
        }
    }
}
