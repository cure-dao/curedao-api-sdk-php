<?php
namespace CureDAO\Client\VariableCategories;
use CureDAO\Client\Pages\StrategyComparisonPage;
use CureDAO\Client\Properties\Base\BaseCombinationOperationProperty;
use CureDAO\Client\Properties\Base\BaseFillingTypeProperty;
use CureDAO\Client\UI\FontAwesome;
use CureDAO\Client\UI\ImageUrls;
use CureDAO\Client\UI\IonIcon;
use Illuminate\View\View;
use CureDAO\Client\Units\PercentUnit;
use CureDAO\Client\VariableCategories\BaseVariableCategory;
class InvestmentStrategiesVariableCategory extends BaseVariableCategory
{
    const AMAZON_PRODUCT_CATEGORY = null;
    const BORING = true;
    const CAUSE_ONLY = false;
    const COMBINATION_OPERATION = BaseCombinationOperationProperty::COMBINATION_MEAN;
    const COMMON = false;
    const DEFAULT_UNIT_ABBREVIATED_NAME = PercentUnit::ABBREVIATED_NAME;
    const DEFAULT_UNIT_ID = PercentUnit::ID;
    const DURATION_OF_ACTION = 86400;
    const EFFECT_ONLY = false;
    const FILLING_TYPE = BaseFillingTypeProperty::FILLING_TYPE_NONE;
    const FILLING_VALUE = -1;
    const FONT_AWESOME = FontAwesome::MONEY_BILL_ALT;
    const ID = 255;
    const IMAGE_URL = ImageUrls::MONEY_MONEY_NOTES;
    const ION_ICON = IonIcon::money;
    const MANUAL_TRACKING = false;
    const MAXIMUM_ALLOWED_VALUE = null;
    const MINIMUM_ALLOWED_SECONDS_BETWEEN_MEASUREMENTS = null;
    const MINIMUM_ALLOWED_VALUE = null;
    const MORE_INFO = "An investment strategy is what guides an investor's decisions based on goals, risk tolerance, and future needs for capital. ";
    const NAME = 'Investment Strategies';
    const ONSET_DELAY = 0;
    const OUTCOME = true;
    const PNG_PATH = 'img/variable_categories/payments.png';
    const PNG_URL = ImageUrls::BASIC_FLAT_ICONS_MONEY;
    const PREDICTOR = true;
    const PUBLIC = true;
    const SETUP_QUESTION = null;
    const STUDY_IMAGE_FILE_NAME = null;
    const SUFFIX = null;
    const SVG_PATH = 'img/variable_categories/payments.svg';
    const SVG_URL = 'https://static.quantimo.do/img/variable_categories/payments.svg';
    const SYNONYMS = ['Investment Strategy', self::NAME];
    const VALENCE = null;
    const VARIABLE_CATEGORY_NAME_SINGULAR = 'Investment Strategy';
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
    public function getShowPageView(array $params = []): View{
        return StrategyComparisonPage::getStrategyComparisonView($params);
    }
    public function getShowContentView(array $params = []): View{
        return StrategyComparisonPage::instance()->getContentView($params);
    }
}