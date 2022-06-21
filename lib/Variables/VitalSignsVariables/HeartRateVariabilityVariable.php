<?php

namespace CureDAO\Client\Variables\VitalSignsVariables;
use CureDAO\Client\UI\ImageUrls;
use CureDAO\Client\Units\MillisecondsUnit;
use CureDAO\Client\VariableCategories\VitalSignsVariableCategory;
use CureDAO\Client\Variables\BaseVariable;

class HeartRateVariabilityVariable extends BaseVariable
{
    public const DEFAULT_UNIT_ID = MillisecondsUnit::ID;
    public const IMAGE_URL = ImageUrls::MEDICAL_HEART;
    public const MANUAL_TRACKING = false; // Need these to show up in search if people want to record manually
    public const NAME = 'Heart Rate Variability (HRV)';
    public const PUBLIC = true;
    public const SYNONYMS = ['Heart Rate Variability', 'HRV'];
    public const VARIABLE_CATEGORY_ID = VitalSignsVariableCategory::ID;
    public $defaultUnitId = self::DEFAULT_UNIT_ID;
    public $imageUrl = self::IMAGE_URL;
    public $manualTracking = self::MANUAL_TRACKING;
    public $name = self::NAME;
    public $public = self::PUBLIC;
    public $synonyms = self::SYNONYMS;
    public $variableCategoryId = self::VARIABLE_CATEGORY_ID;
}
