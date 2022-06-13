<?php
namespace CureDAO\Client\Variables\VitalSignsCommonVariables;
use CureDAO\Client\Properties\Base\BaseFillingTypeProperty;
use CureDAO\Client\UI\ImageUrls;
use CureDAO\Client\Variables\BaseVariable;
class BloodPressureSystolicTopNumberCommonVariable extends BaseVariable {
	public const COMBINATION_OPERATION = 'MEAN';
    public const COMMON_ALIAS = self::NAME;
	public const DEFAULT_UNIT_ID = 30;
	public const DESCRIPTION = null;
	public const DURATION_OF_ACTION = 604800;
	public const FILLING_TYPE = BaseFillingTypeProperty::FILLING_TYPE_NONE;
	public const ID = 1874;
	public const IMAGE_URL = ImageUrls::MEDICAL_HEART;
	public const INFORMATIONAL_URL = null;
	public const MANUAL_TRACKING = true; // Need these to show up in search if people want to record manually
	public const MAXIMUM_ALLOWED_VALUE = 100000;
	public const MINIMUM_ALLOWED_SECONDS_BETWEEN_MEASUREMENTS = null;
	public const MINIMUM_ALLOWED_VALUE = 1;
	public const NAME = 'Blood Pressure (Systolic - Top Number)';
	public const ONSET_DELAY = 0;
	public const OUTCOME = true;
	public const SYNONYMS = ['Blood Pressure', 'Systolic - Top Number'];
	public const VARIABLE_CATEGORY_ID = 8;
	public $combinationOperation = self::COMBINATION_OPERATION;
	//public $commonAlias = self::COMMON_ALIAS;
	public $defaultUnitId = self::DEFAULT_UNIT_ID;
	public $description = self::DESCRIPTION;
	public $durationOfAction = self::DURATION_OF_ACTION;
	public $displayName = "Blood Pressure";
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
