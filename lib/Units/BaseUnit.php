<?php

namespace CureDAO\Client\Units;
use CureDAO\Client\BaseModel;
use CureDAO\Client\Properties\Base\BaseFillingTypeProperty;
use CureDAO\Client\UI\ImageUrls;
use Illuminate\Support\Collection;

class BaseUnit extends BaseModel
{
    private static $nonAdvanced;
    private static $units;
    private static $unitsIndexedById;
    private static $unitsWithAbbreviatedNameAsKey;
    private static $unitsWithLowerCaseAbbreviatedNameAsKey;
    private static $unitsWithLowerCaseNameAsKey;
    private static $unitsWithLowerCaseSynonymAsKey = [];
    private static $valueAndUnitStrings;
    public $abbreviatedName;
    public $add;
    public $advanced;
    public $categoryName;
    public $combinationOperation;
    public $conversionSteps;
    public $defaultValue;
    public $fillingType = BaseFillingTypeProperty::FILLING_TYPE_NONE;
    public $fillingValue;
    public $fontAwesome;
    public $hint;
    public $id;
    public $image = ImageUrls::FITNESS_MEASURING_TAPE;
    public $inputType;
    public $manualTracking;
    public $maximumDailyValue;
    public $maximumValue;
    public $minimumValue;
    public $multiply;
    public $name;
    public $numberOfCommonTagsWhereTaggedVariableUnit;
    public $numberOfCommonTagsWhereTagVariableUnit;
    public $numberOfMeasurements;
    public $numberOfOutcomeCaseStudies;
    public $numberOfOutcomePopulationStudies;
    public $numberOfUserVariablesWhereDefaultUnit;
    public $numberOfVariableCategoriesWhereDefaultUnit;
    public $numberOfVariablesWhereDefaultUnit;
    public $suffix;
    public $synonyms;
    public $unitCategoryId;
    public const FIELD_CATEGORY_ID = 'category_id';
    public const FIELD_CREATED_AT = 'created_at';
    public const FIELD_DELETED_AT = 'deleted_at';
    public const FIELD_ID = 'id';
    public const FIELD_MAXIMUM_VALUE = 'maximum_value';
    public const FIELD_MINIMUM_VALUE = 'minimum_value';
    public const FIELD_UPDATED_AT = 'updated_at';
    public const INPUT_TYPE_bloodPressure = 'bloodPressure';
    public const INPUT_TYPE_happiestFaceIsFive = 'happiestFaceIsFive';
    public const INPUT_TYPE_oneToFiveNumbers = 'oneToFiveNumbers';
    public const INPUT_TYPE_oneToTen = 'oneToTen';
    public const INPUT_TYPE_saddestFaceIsFive = 'saddestFaceIsFive';
    public const INPUT_TYPE_slider = 'slider';
    public const INPUT_TYPE_value = 'value';
    public const INPUT_TYPE_yesOrNo = 'yesOrNo';
    public $scale;
    // Ordinal is used to simply depict the order of variables and not the difference between each of the variables. These scales
    // are generally used to depict non-mathematical ideas such as frequency, satisfaction, happiness, a degree of pain etc.
    public const SCALE_ORDINAL = 'ordinal';
    // Ratio Scale not only produces the order of variables but also
    // makes the difference between variables known along with information on the value of true zero.
    public const SCALE_RATIO = 'ratio';
    // Interval scale contains all the properties of ordinal scale, in addition to which, it offers a calculation of the
    // difference between variables. The main characteristic of this scale is the equidistant difference between objects.
    // Interval has no pre-decided starting point or a true zero value.
    public const SCALE_INTERVAL = 'interval';
    // Nominal, also called the categorical variable scale, is defined as a scale used for labeling variables into
    // distinct classifications and doesn’t involve a quantitative value or order.
    public const SCALE_NOMINAL = 'nominal';

    /**
     * @return self[]|Collection
     */
    public static function all(): Collection {
        $all = static::getClient()->get('/api/v6/units');
        return static::instantiateArray($all);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }
}
