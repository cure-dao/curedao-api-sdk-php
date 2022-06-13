<?php
namespace CureDAO\Client\VariableCategories;
use CureDAO\Client\Properties\Base\BaseFillingTypeProperty;
use CureDAO\Client\UI\FontAwesome;
use Illuminate\Database\Eloquent\Builder;
use CureDAO\Client\VariableCategories\BaseVariableCategory;
class CausesOfIllnessVariableCategory extends BaseVariableCategory {
	const AMAZON_PRODUCT_CATEGORY = null;
	const BORING = null;
	const CAUSE_ONLY = false;
	const COMBINATION_OPERATION = 'MEAN';
	const COMMON = null;
	const DEFAULT_UNIT_ABBREVIATED_NAME = null;
	const DEFAULT_UNIT_ID = null;
	const DURATION_OF_ACTION = 86400;
	const EFFECT_ONLY = null;
    const FILLING_TYPE = BaseFillingTypeProperty::FILLING_TYPE_ZERO;
    const FILLING_VALUE = 0;
	const FONT_AWESOME = FontAwesome::DISEASE_SOLID;
	const ID = 18;
    const IMAGE_URL = 'https://static.quantimo.do/img/variable_categories/virus-96.png';
	const ION_ICON = 'ion-ios-medkit';
	const MANUAL_TRACKING = false;
	const MAXIMUM_ALLOWED_VALUE = null;
	const MINIMUM_ALLOWED_SECONDS_BETWEEN_MEASUREMENTS = null;
	const MINIMUM_ALLOWED_VALUE = null;
	const MORE_INFO = "Factors leading or increasing the severity of illness or disease. ";
	const NAME = 'Causes of Illness';
	const ONSET_DELAY = 0;
	const OUTCOME = false;
	const PNG_PATH = 'img/variable_categories/causes-of-illness.png';
    const PNG_URL = 'https://static.quantimo.do/img/variable_categories/causes-of-illness.png';
	const PREDICTOR = true;
	const PUBLIC = true;
	const SETUP_QUESTION = null;
	const STUDY_IMAGE_FILE_NAME = null;
	const SUFFIX = null;
	const SVG_PATH = 'img/variable_categories/causes-of-illness.svg';
    const SVG_URL = 'https://static.quantimo.do/img/variable_categories/causes-of-illness.svg';
	const SYNONYMS = [
        'Causes of Illness',
        'Cause of Illness',
    ];
	const VALENCE = null;
	const VARIABLE_CATEGORY_NAME_SINGULAR = 'Cause of Illness';
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
	public $fontAwesome = self::FONT_AWESOME;
	public $id = self::ID;
	public $imageUrl = self::IMAGE_URL;
	public $ionIcon = self::ION_ICON;
	public $manualTracking = self::MANUAL_TRACKING;
	public $maximumAllowedValue = self::MAXIMUM_ALLOWED_VALUE;
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
	public $variableCategoryNameSingular = self::VARIABLE_CATEGORY_NAME_SINGULAR;
    public function getKeyWords(): array{
        return parent::getKeyWords();
    }
}
