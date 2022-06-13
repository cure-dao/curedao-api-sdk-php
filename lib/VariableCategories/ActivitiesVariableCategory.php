<?php
namespace CureDAO\Client\VariableCategories;
use CureDAO\Client\Properties\VariableCategory\BaseFillingTypeProperty;
use CureDAO\Client\Units\MinutesUnit;
use CureDAO\Client\Properties\VariableCategory\VariableCategoryCombinationOperationProperty;
use CureDAO\Client\Models\BaseModel;
use CureDAO\Client\UI\FontAwesome;
use CureDAO\Client\UI\ImageUrls;
use Illuminate\Database\Eloquent\Builder;
class ActivitiesVariableCategory extends BaseVariableCategory {
	const NAME_SINGULAR = 'Activity';
	const WP_POST_ID = null;
	const UPDATED_AT = '2021-01-27 02:24:48';
	const NUMBER_OF_VARIABLES = 1637;
	const NUMBER_OF_USER_VARIABLES = 9345;
	const NUMBER_OF_PREDICTOR_POPULATION_STUDIES = 6406;
	const NUMBER_OF_PREDICTOR_CASE_STUDIES = 16384;
	const NUMBER_OF_OUTCOME_POPULATION_STUDIES = 14294;
	const NUMBER_OF_OUTCOME_CASE_STUDIES = 46999;
	const NUMBER_OF_MEASUREMENTS = 1325498;
	const MEDIAN_SECONDS_BETWEEN_MEASUREMENTS = null;
	const IS_PUBLIC = false;
	const DELETED_AT = null;
	const CREATED_AT = '2020-07-28 17:56:03';
	const AVERAGE_SECONDS_BETWEEN_MEASUREMENTS = null;
	const AMAZON_PRODUCT_CATEGORY = null;
	const BORING = false;
	const CAUSE_ONLY = false;
	const COMBINATION_OPERATION = VariableCategoryCombinationOperationProperty::COMBINATION_SUM;
	const COMMON = null;
	const DEFAULT_UNIT_ABBREVIATED_NAME = 'min';
	const DEFAULT_UNIT_ID = MinutesUnit::ID;
	const DURATION_OF_ACTION = 86400;
	const EFFECT_ONLY = null;
	const FILLING_TYPE = BaseFillingTypeProperty::FILLING_TYPE_ZERO;
	const FILLING_VALUE = 0;
	const HELP_TEXT = 'What activity do you want to record?';
	const FONT_AWESOME = FontAwesome::CALENDAR_CHECK;
	const ID = 14;
	const IMAGE_URL = ImageUrls::CLOCK;
	const ION_ICON = 'ion-ios-body-outline';
	const MANUAL_TRACKING = null; // Leave this null so it can be set at the variable level.  Rescuetime variables false manual in their models
	const MAXIMUM_ALLOWED_VALUE = null;
	const MEASUREMENT_SYNONYM_SINGULAR_LOWERCASE = 'activity';
	const MINIMUM_ALLOWED_SECONDS_BETWEEN_MEASUREMENTS = null;
	const MINIMUM_ALLOWED_VALUE = null;
	const MORE_INFO = 'Non-physical activities like studying.';
	const NAME = 'Activities';
	const ONSET_DELAY = 0;
	const OUTCOME = null; // Leave this null so it can be set at the variable level.  // Keystrokes are activities and it may be a goal for keystrokes to be higher.  Also, maybe people have a goal of engaging (or their kids) in certain activities more
	const PNG_PATH = 'img/variable_categories/activity.png';
    const PNG_URL = 'https://static.quantimo.do/img/variable_categories/activity.png';
	const PREDICTOR = true;
	const PUBLIC = false;
	const SETUP_QUESTION = null;
	const STUDY_IMAGE_FILE_NAME = 'activity';
	const SUFFIX = null;
	const SVG_PATH = 'img/variable_categories/activity.svg';
    const SVG_URL = 'https://static.quantimo.do/img/variable_categories/activity.svg';
	const SYNONYMS = ['Activities', 'Activity'];
	const VALENCE = null;
	const VARIABLE_CATEGORY_NAME = 'Activity';
	const VARIABLE_CATEGORY_NAME_SINGULAR = 'Activity';
    public $amazonProductCategory = self::AMAZON_PRODUCT_CATEGORY;
	public $boring = self::BORING;
	public $causeOnly = self::CAUSE_ONLY;
	public $combinationOperation = self::COMBINATION_OPERATION;
	public $common = self::COMMON;
	public $defaultUnitAbbreviatedName = self::DEFAULT_UNIT_ABBREVIATED_NAME;
	public $defaultUnitId = self::DEFAULT_UNIT_ID;
	public $durationOfAction = self::DURATION_OF_ACTION;
	public $effectOnly = self::EFFECT_ONLY;
	public $fillingType = self::FILLING_TYPE;
	public $fillingValue = self::FILLING_VALUE;
	public $helpText = self::HELP_TEXT;
	public $fontAwesome = self::FONT_AWESOME;
	public $id = self::ID;
	public $imageUrl = self::IMAGE_URL;
	public $ionIcon = self::ION_ICON;
	public $manualTracking = self::MANUAL_TRACKING;
	public $maximumAllowedValue = self::MAXIMUM_ALLOWED_VALUE;
	public $measurementSynonymSingularLowercase = self::MEASUREMENT_SYNONYM_SINGULAR_LOWERCASE;
	public $minimumAllowedSecondsBetweenMeasurements = self::MINIMUM_ALLOWED_SECONDS_BETWEEN_MEASUREMENTS;
	public $minimumAllowedValue = self::MINIMUM_ALLOWED_VALUE;
	public $moreInfo = self::MORE_INFO;
	public $name = self::NAME;
	public $onsetDelay = self::ONSET_DELAY;
	public $outcome = self::OUTCOME;
	public $pngPath = self::PNG_PATH;
	public $pngUrl = self::PNG_URL;
	public $predictor = self::PREDICTOR;
	public $public = self::PUBLIC;
	public $setupQuestion = self::SETUP_QUESTION;
	public $studyImageFileName = self::STUDY_IMAGE_FILE_NAME;
	public $suffix = self::SUFFIX;
	public $svgPath = self::SVG_PATH;
	public $svgUrl = self::SVG_URL;
	public $synonyms = self::SYNONYMS;
	public $valence = self::VALENCE;
	public $variableCategoryName = self::VARIABLE_CATEGORY_NAME;
	public $variableCategoryNameSingular = self::VARIABLE_CATEGORY_NAME_SINGULAR;
	public function __construct($variableCategory = null){
        parent::__construct($variableCategory);
        if($this->manualTracking !== null){
            $this->validateManualTracking($this->manualTracking);
        }
    }
    public function getManualTracking(): ?bool{
        $val = parent::getManualTracking();
        $this->validateManualTracking($val);
        return $val;
    }
    /**
     * @param bool|null $val
     */
    private function validateManualTracking($val): void{
        if($val !== null){
            le("Leave manualTracking null so it can be set at the variable level.  Rescuetime variables false manual in their models");
        }
    }
    public function setAttribute($key, $value){
        le("why are we setting $key");
        return parent::setAttribute($key, $value);
    }
    public function populateByLaravelModel(BaseModel $l){
        parent::populateByLaravelModel($l);
    }
    public function setLaravelModel(BaseModel $laravelModel): BaseModel{
        return parent::setLaravelModel($laravelModel);
    }
    public function indexVariablesQB(): Builder{
        return $this->publicStudyVariablesQB();
    }
}
