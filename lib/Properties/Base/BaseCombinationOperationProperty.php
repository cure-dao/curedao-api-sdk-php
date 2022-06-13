<?php
namespace CureDAO\Client\Properties\Base;
use CureDAO\Client\Properties\EnumProperty;
use CureDAO\Client\Types\PhpTypes;
use CureDAO\Client\Types\QMArr;
use CureDAO\Client\UI\FontAwesome;
use CureDAO\Client\UI\ImageUrls;
use OpenApi\Generator;
class BaseCombinationOperationProperty extends EnumProperty{
    public const COMBINATION_SUM = 'SUM';
    public const COMBINATION_MEAN = 'MEAN';
    public static $combinationOperationsMap = [
        0 => self::COMBINATION_SUM,
        1 => self::COMBINATION_MEAN,
        'SUM' => self::COMBINATION_SUM,
        'MEAN' => self::COMBINATION_MEAN,
    ];
    public $dbInput = 'string:nullable';
	public $dbType = PhpTypes::STRING;
	public $default = Generator::UNDEFINED;
	public $description = 'The combination operation setting specifies how to combine values of this variable over a given day. The available options are SUM or MEAN. Note that multi-day aggregation will always be averaged even if this setting is SUM, in the case of %RDA for instance. ';
	public $example = 'MEAN';
	public $enum = [self::COMBINATION_MEAN, self::COMBINATION_SUM];
	public $fieldType = PhpTypes::STRING;
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
	public const NAME = 'combination_operation';
	public $phpType = PhpTypes::STRING;
	public $rules = 'nullable';
	public $title = 'Combination Operation';
	public $type = self::TYPE_ENUM;
	public $canBeChangedToNull = true;
	public $validations = 'nullable';
    /**
     * @param QMUnit $unit
     * @param BaseVariableCategory $category
     * @return string
     */
    public static function getCombinationOperationFromUnitOrCategory(QMUnit $unit,
                                                                     BaseVariableCategory $category): string{
        $co = $unit->getCombinationOperation();
        if(!$co){$co = $category->getCombinationOperation();}
        return $co;
    }
    /**
     * @param array $newParams
     * @param QMUnit $unit
     * @return string
     */
    public static function getCombinationOperationFromNewVariableParams(array $newParams, QMUnit $unit): ?string{
        $co = QMArr::getValueForSnakeOrCamelCaseKey($newParams, Variable::FIELD_COMBINATION_OPERATION);
        if(!$co){return $unit->getCombinationOperation();}
        return VariableCombinationOperationProperty::getValidCombinationOperation($unit, $co);
    }
    public function shouldShowFilter(): bool{return false;}
    protected function isLowerCase():bool{return false;}
	public function getEnumOptions(): array{return $this->enum;}
}
