<?php
namespace CureDAO\Client\Variables\PhysicalActivityCommonVariables;
use CureDAO\Client\Properties\Base\BaseFillingTypeProperty;
use CureDAO\Client\UI\ImageUrls;
use CureDAO\Client\Units\CountUnit;
use CureDAO\Client\Variables\BaseVariable;
class HourlyStepCountCommonVariable extends BaseVariable {
	public const COMMON_ALIAS = null;
	public const DEFAULT_UNIT_ID = CountUnit::ID;
	public const DESCRIPTION = null;
	public const DURATION_OF_ACTION = 86400;
	public const FILLING_TYPE = BaseFillingTypeProperty::FILLING_TYPE_ZERO;
	public const ID = 5955886;
	public const IMAGE_URL = ImageUrls::FITNESS_TREADMILL;
	public const INFORMATIONAL_URL = null;
	public const MANUAL_TRACKING = false;
	public const MAXIMUM_ALLOWED_VALUE = null;
	public const MINIMUM_ALLOWED_SECONDS_BETWEEN_MEASUREMENTS = 3600;
	public const MINIMUM_ALLOWED_VALUE = 0;
	public const NAME = 'Hourly Step Count';
	public const ONSET_DELAY = 0;
	public const OUTCOME = true;
	public const SYNONYMS = ['Hourly Step', 'Hourly Step Count'];
	public const VARIABLE_CATEGORY_ID = 3;

	public $commonAlias = self::COMMON_ALIAS;
	public $defaultUnitId = self::DEFAULT_UNIT_ID;
	public $description = self::DESCRIPTION;
	public $durationOfAction = self::DURATION_OF_ACTION;
	public $fillingType = self::FILLING_TYPE;
	public $id = self::ID;
	public $imageUrl = self::IMAGE_URL;
	public $informationalUrl = self::INFORMATIONAL_URL;
    public $manualTracking = self::MANUAL_TRACKING;
	public $maximumAllowedValue = self::MAXIMUM_ALLOWED_VALUE;
	public $minimumAllowedSecondsBetweenMeasurements = self::MINIMUM_ALLOWED_SECONDS_BETWEEN_MEASUREMENTS;
	public $minimumAllowedValue = self::MINIMUM_ALLOWED_VALUE;
	public $name = self::NAME;
	public $onsetDelay = self::ONSET_DELAY;
	public $outcome = self::OUTCOME;
	public $synonyms = self::SYNONYMS;
	public $variableCategoryId = self::VARIABLE_CATEGORY_ID;
}
