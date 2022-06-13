<?php
namespace CureDAO\Client\VariableCategories;
use CureDAO\Client\BaseModel;
use CureDAO\Client\Model\VariableCategory;
use Illuminate\Support\Collection;

class BaseVariableCategory extends BaseModel {
    public const ID = null;
    private static $synonymsMap;
    private static $variableCategoriesIndexedById;
    public $amazonProductCategory;
    public $averageSecondsBetweenMeasurements;
    public $boring;
    public $causeOnly;
    public $combinationOperation;
    public $common;
    public $defaultUnitAbbreviatedName;
    public $defaultUnitId;
    public $durationOfAction;
    public $effectOnly;
    public $fillingType;
    public $fillingValue;
    public $fontAwesome;
    public $imageUrl;
    public $ionIcon;
    public $isPublic;
    public $manualTracking;
    public $id;
    public $maximumAllowedValue;
    public $medianSecondsBetweenMeasurements;
    public $minimumAllowedSecondsBetweenMeasurements;
    public $minimumAllowedValue;
    public $moreInfo;
    public $name;
    public $nameSingular;
    public $numberOfMeasurements;
    public $numberOfOutcomeCaseStudies;
    public $numberOfOutcomePopulationStudies; // Don't remove this or you get undefined error from getDBInsertionArray
    public $numberOfPredictorCaseStudies;
    public $numberOfPredictorPopulationStudies; // Don't remove this or you get undefined error from getDBInsertionArray
    public $numberOfUserVariables;
    public $numberOfVariables;
    public $onsetDelay;
    public $outcome;
    public $pngPath;
    public $pngUrl;
    public $predictor;
    public $setupQuestion;
    public $studyImageFileName;
    public $suffix;
    public $svgPath;
    public $svgUrl;
    public $synonyms;
    public $valence;
    public $variableCategoryNameSingular;

    public static function all(): Collection
    {
        $all = static::getClient()->get('/api/v6/variable_categories');
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
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }
}
