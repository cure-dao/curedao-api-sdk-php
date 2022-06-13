<?php
namespace CureDAO\Client\VariableCategories;
use CureDAO\Client\Properties\Base\BaseFillingTypeProperty;
use CureDAO\Client\UI\FontAwesome;
use CureDAO\Client\VariableCategories\BaseVariableCategory;
class TreatmentsVariableCategory extends BaseVariableCategory {
	const AMAZON_PRODUCT_CATEGORY = 'HealthPersonalCare';
	const APP_TYPE = 'medication';
	const BORING = null;
	const CAUSE_ONLY = true;
	const COMBINATION_OPERATION = 'SUM';
	const COMMON = true;
	const DEFAULT_UNIT_ABBREVIATED_NAME = 'count';
	const DEFAULT_UNIT_ID = 23;
	const DEFAULT_VALUE_LABEL = 'Dosage';
	const DEFAULT_VALUE_PLACEHOLDER_TEXT = 'Enter dose value here...';
	const DURATION_OF_ACTION = 86400;
	const EFFECT_ONLY = null;
    const FILLING_TYPE = BaseFillingTypeProperty::FILLING_TYPE_ZERO;
    const FILLING_VALUE = 0;
	const HELP_TEXT = 'What treatment do you want to record?';
	const FONT_AWESOME = FontAwesome::BRIEFCASE_MEDICAL_SOLID;
	const ID = 13;
    const IMAGE_URL = 'https://static.quantimo.do/img/variable_categories/treatments.png';
	const ION_ICON = 'ion-ios-medkit-outline';
	const MANUAL_TRACKING = true;
	const MAXIMUM_ALLOWED_VALUE = null;
	const MEASUREMENT_SYNONYM_SINGULAR_LOWERCASE = 'dose';
	const MINIMUM_ALLOWED_SECONDS_BETWEEN_MEASUREMENTS = 60;
	const MINIMUM_ALLOWED_VALUE = 0;
	const MORE_INFO = 'Often the effects of medications and treatments aren\'t intuitively perceptible. That\'s where I come in!  If you regularly record your treatments,  I can analyze the data so we can get a better idea which ones are helping you,which one may be harming you, and which ones are merely a waste of money.';
	const FEATURE = "See the effectiveness of treatments for various conditions and likelihood of side effects. ";
	const NAME = 'Treatments';
	const ONSET_DELAY = 1800;
	const OUTCOME = false;
	const PNG_PATH = 'img/variable_categories/treatments.png';
    const PNG_URL = 'https://static.quantimo.do/img/variable_categories/treatments.png';
	const PREDICTOR = true;
	const PUBLIC = true;
	const SETUP_QUESTION = 'What is a medication, treatment, or supplement that you are taking?';
	const STUDY_IMAGE_FILE_NAME = null;
	const SUFFIX = null;
	const SVG_PATH = 'img/variable_categories/treatments.svg';
    const SVG_URL = 'https://static.quantimo.do/img/variable_categories/treatments.svg';
	const SYNONYMS = [
    'Health and Beauty',
    'Health & Beauty',
    'Treatments',
    'Treatment',
    'HealthPersonalCare',
    'Baby Product',
    'Home',
];
	const VALENCE = null;
	const VARIABLE_CATEGORY_NAME = 'Treatments';
	const VARIABLE_CATEGORY_NAME_SINGULAR = 'Treatment';
    public $amazonProductCategory = self::AMAZON_PRODUCT_CATEGORY;
	public $appType = self::APP_TYPE;
	public $boring = self::BORING;
	public $causeOnly = self::CAUSE_ONLY;
	public $combinationOperation = self::COMBINATION_OPERATION;
	public $common = self::COMMON;
	public $defaultUnitAbbreviatedName = self::DEFAULT_UNIT_ABBREVIATED_NAME;
	public $defaultUnitId = self::DEFAULT_UNIT_ID;
	public $defaultValueLabel = self::DEFAULT_VALUE_LABEL;
	public $defaultValuePlaceholderText = self::DEFAULT_VALUE_PLACEHOLDER_TEXT;
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
}
