<?php
/**
 * VariableCategory
 *
 */

namespace CureDAO\Client\Models;

use ArrayAccess;
use CureDAO\Client\Api\VariablesApi;
use CureDAO\Client\ObjectSerializer;
use CureDAO\Client\VariableCategories\ElectronicsVariableCategory;
use CureDAO\Client\VariableCategories\LocationsVariableCategory;
use CureDAO\Client\VariableCategories\PhysicalActivityVariableCategory;
use Illuminate\Support\Collection;

/**
 * VariableCategory Class 
 */
class VariableCategory implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VariableCategory';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'app_type' => 'string',
        'cause_only' => 'bool',
        'combination_operation' => 'string',
        'created_time' => 'string',
        'unit_abbreviated_name' => 'string',
        'unit_id' => 'int',
        'duration_of_action' => 'int',
        'filling_value' => 'int',
        'help_text' => 'string',
        'id' => 'int',
        'image_url' => 'string',
        'ion_icon' => 'string',
        'manual_tracking' => 'bool',
        'maximum_allowed_value' => 'string',
        'measurement_synonym_singular_lowercase' => 'string',
        'minimum_allowed_value' => 'string',
        'more_info' => 'string',
        'name' => 'string',
        'onset_delay' => 'int',
        'outcome' => 'bool',
        'png_path' => 'string',
        'png_url' => 'string',
        'public' => 'bool',
        'svg_path' => 'string',
        'svg_url' => 'string',
        'updated' => 'int',
        'updated_time' => 'string',
        'variable_category_name' => 'string',
        'variable_category_name_singular' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'app_type' => null,
        'cause_only' => null,
        'combination_operation' => null,
        'created_time' => null,
        'unit_abbreviated_name' => null,
        'unit_id' => null,
        'duration_of_action' => null,
        'filling_value' => null,
        'help_text' => null,
        'id' => null,
        'image_url' => null,
        'ion_icon' => null,
        'manual_tracking' => null,
        'maximum_allowed_value' => null,
        'measurement_synonym_singular_lowercase' => null,
        'minimum_allowed_value' => null,
        'more_info' => null,
        'name' => null,
        'onset_delay' => null,
        'outcome' => null,
        'png_path' => null,
        'png_url' => null,
        'public' => null,
        'svg_path' => null,
        'svg_url' => null,
        'updated' => null,
        'updated_time' => null,
        'variable_category_name' => null,
        'variable_category_name_singular' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes(): array
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats(): array
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'app_type' => 'appType',
        'cause_only' => 'causeOnly',
        'combination_operation' => 'combinationOperation',
        'created_time' => 'createdTime',
        'unit_abbreviated_name' => 'unitAbbreviatedName',
        'unit_id' => 'unitId',
        'duration_of_action' => 'durationOfAction',
        'filling_value' => 'fillingValue',
        'help_text' => 'helpText',
        'id' => 'id',
        'image_url' => 'imageUrl',
        'ion_icon' => 'ionIcon',
        'manual_tracking' => 'manualTracking',
        'maximum_allowed_value' => 'maximumAllowedValue',
        'measurement_synonym_singular_lowercase' => 'measurementSynonymSingularLowercase',
        'minimum_allowed_value' => 'minimumAllowedValue',
        'more_info' => 'moreInfo',
        'name' => 'name',
        'onset_delay' => 'onsetDelay',
        'outcome' => 'outcome',
        'png_path' => 'pngPath',
        'png_url' => 'pngUrl',
        'public' => 'public',
        'svg_path' => 'svgPath',
        'svg_url' => 'svgUrl',
        'updated' => 'updated',
        'updated_time' => 'updatedTime',
        'variable_category_name' => 'variableCategoryName',
        'variable_category_name_singular' => 'variableCategoryNameSingular'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'app_type' => 'setAppType',
        'cause_only' => 'setCauseOnly',
        'combination_operation' => 'setCombinationOperation',
        'created_time' => 'setCreatedTime',
        'unit_abbreviated_name' => 'setUnitAbbreviatedName',
        'unit_id' => 'setUnitId',
        'duration_of_action' => 'setDurationOfAction',
        'filling_value' => 'setFillingValue',
        'help_text' => 'setHelpText',
        'id' => 'setId',
        'image_url' => 'setImageUrl',
        'ion_icon' => 'setIonIcon',
        'manual_tracking' => 'setManualTracking',
        'maximum_allowed_value' => 'setMaximumAllowedValue',
        'measurement_synonym_singular_lowercase' => 'setMeasurementSynonymSingularLowercase',
        'minimum_allowed_value' => 'setMinimumAllowedValue',
        'more_info' => 'setMoreInfo',
        'name' => 'setName',
        'onset_delay' => 'setOnsetDelay',
        'outcome' => 'setOutcome',
        'png_path' => 'setPngPath',
        'png_url' => 'setPngUrl',
        'public' => 'setPublic',
        'svg_path' => 'setSvgPath',
        'svg_url' => 'setSvgUrl',
        'updated' => 'setUpdated',
        'updated_time' => 'setUpdatedTime',
        'variable_category_name' => 'setVariableCategoryName',
        'variable_category_name_singular' => 'setVariableCategoryNameSingular'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'app_type' => 'getAppType',
        'cause_only' => 'getCauseOnly',
        'combination_operation' => 'getCombinationOperation',
        'created_time' => 'getCreatedTime',
        'unit_abbreviated_name' => 'getUnitAbbreviatedName',
        'unit_id' => 'getUnitId',
        'duration_of_action' => 'getDurationOfAction',
        'filling_value' => 'getFillingValue',
        'help_text' => 'getHelpText',
        'id' => 'getId',
        'image_url' => 'getImageUrl',
        'ion_icon' => 'getIonIcon',
        'manual_tracking' => 'getManualTracking',
        'maximum_allowed_value' => 'getMaximumAllowedValue',
        'measurement_synonym_singular_lowercase' => 'getMeasurementSynonymSingularLowercase',
        'minimum_allowed_value' => 'getMinimumAllowedValue',
        'more_info' => 'getMoreInfo',
        'name' => 'getName',
        'onset_delay' => 'getOnsetDelay',
        'outcome' => 'getOutcome',
        'png_path' => 'getPngPath',
        'png_url' => 'getPngUrl',
        'public' => 'getPublic',
        'svg_path' => 'getSvgPath',
        'svg_url' => 'getSvgUrl',
        'updated' => 'getUpdated',
        'updated_time' => 'getUpdatedTime',
        'variable_category_name' => 'getVariableCategoryName',
        'variable_category_name_singular' => 'getVariableCategoryNameSingular'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * @return VariableCategory[]|Collection
     */
    public static function all(): Collection
    {
        return VariablesApi::variableCategories();
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$swaggerModelName;
    }

    const VARIABLE_CATEGORY_NAME_ACTIVITY = 'Activity';
    const VARIABLE_CATEGORY_NAME_BOOKS = 'Books';
    const VARIABLE_CATEGORY_NAME_CAUSES_OF_ILLNESS = 'Causes of Illness';
    const VARIABLE_CATEGORY_NAME_COGNITIVE_PERFORMANCE = 'Cognitive Performance';
    const VARIABLE_CATEGORY_NAME_CONDITIONS = 'Conditions';
    const VARIABLE_CATEGORY_NAME_EMOTIONS = 'Emotions';
    const VARIABLE_CATEGORY_NAME_ENVIRONMENT = 'Environment';
    const VARIABLE_CATEGORY_NAME_FOODS = 'Foods';
    const VARIABLE_CATEGORY_NAME_GOALS = 'Goals';
    const VARIABLE_CATEGORY_NAME_LOCATIONS = 'Locations';
    const VARIABLE_CATEGORY_NAME_MISCELLANEOUS = 'Miscellaneous';
    const VARIABLE_CATEGORY_NAME_MOVIES_AND_TV = 'Movies and TV';
    const VARIABLE_CATEGORY_NAME_MUSIC = 'Music';
    const VARIABLE_CATEGORY_NAME_NUTRIENTS = 'Nutrients';
    const VARIABLE_CATEGORY_NAME_PAYMENTS = 'Payments';
    const VARIABLE_CATEGORY_NAME_PHYSICAL_ACTIVITIES = 'Physical Activities';
    const VARIABLE_CATEGORY_NAME_PHYSIQUE = 'Physique';
    const VARIABLE_CATEGORY_NAME_SLEEP = 'Sleep';
    const VARIABLE_CATEGORY_NAME_SOCIAL_INTERACTIONS = 'Social Interactions';
    const VARIABLE_CATEGORY_NAME_SOFTWARE = 'Software';
    const VARIABLE_CATEGORY_NAME_SYMPTOMS = 'Symptoms';
    const VARIABLE_CATEGORY_NAME_TREATMENTS = 'Treatments';
    const VARIABLE_CATEGORY_NAME_VITAL_SIGNS = 'Vital Signs';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVariableCategoryNameAllowableValues(): array
    {
        $arr = [
            self::VARIABLE_CATEGORY_NAME_ACTIVITY,
            self::VARIABLE_CATEGORY_NAME_BOOKS,
            self::VARIABLE_CATEGORY_NAME_CAUSES_OF_ILLNESS,
            self::VARIABLE_CATEGORY_NAME_COGNITIVE_PERFORMANCE,
            self::VARIABLE_CATEGORY_NAME_CONDITIONS,
            self::VARIABLE_CATEGORY_NAME_EMOTIONS,
            self::VARIABLE_CATEGORY_NAME_ENVIRONMENT,
            self::VARIABLE_CATEGORY_NAME_FOODS,
            self::VARIABLE_CATEGORY_NAME_GOALS,
            self::VARIABLE_CATEGORY_NAME_LOCATIONS,
            self::VARIABLE_CATEGORY_NAME_MISCELLANEOUS,
            self::VARIABLE_CATEGORY_NAME_MOVIES_AND_TV,
            self::VARIABLE_CATEGORY_NAME_MUSIC,
            self::VARIABLE_CATEGORY_NAME_NUTRIENTS,
            self::VARIABLE_CATEGORY_NAME_PAYMENTS,
            self::VARIABLE_CATEGORY_NAME_PHYSICAL_ACTIVITIES,
            self::VARIABLE_CATEGORY_NAME_PHYSIQUE,
            self::VARIABLE_CATEGORY_NAME_SLEEP,
            self::VARIABLE_CATEGORY_NAME_SOCIAL_INTERACTIONS,
            self::VARIABLE_CATEGORY_NAME_SOFTWARE,
            self::VARIABLE_CATEGORY_NAME_SYMPTOMS,
            self::VARIABLE_CATEGORY_NAME_TREATMENTS,
            self::VARIABLE_CATEGORY_NAME_VITAL_SIGNS,
            ElectronicsVariableCategory::NAME,
            PhysicalActivityVariableCategory::NAME,
            LocationsVariableCategory::NAME,
        ];
        $arr[] = (new LocationsVariableCategory())->synonyms;
        return $arr;
    }
    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param array $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['app_type'] = $data['app_type'] ?? null;
        $this->container['cause_only'] = $data['cause_only'] ?? null;
        $this->container['combination_operation'] = $data['combination_operation'] ?? null;
        $this->container['created_time'] = $data['created_time'] ?? null;
        $this->container['unit_abbreviated_name'] = $data['unit_abbreviated_name'] ?? null;
        $this->container['unit_id'] = $data['unit_id'] ?? null;
        $this->container['duration_of_action'] = $data['duration_of_action'] ?? null;
        $this->container['filling_value'] = $data['filling_value'] ?? null;
        $this->container['help_text'] = $data['help_text'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['image_url'] = $data['image_url'] ?? null;
        $this->container['ion_icon'] = $data['ion_icon'] ?? null;
        $this->container['manual_tracking'] = $data['manual_tracking'] ?? null;
        $this->container['maximum_allowed_value'] = $data['maximum_allowed_value'] ?? null;
        $this->container['measurement_synonym_singular_lowercase'] = $data['measurement_synonym_singular_lowercase'] ?? null;
        $this->container['minimum_allowed_value'] = $data['minimum_allowed_value'] ?? null;
        $this->container['more_info'] = $data['more_info'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['onset_delay'] = $data['onset_delay'] ?? null;
        $this->container['outcome'] = $data['outcome'] ?? null;
        $this->container['png_path'] = $data['png_path'] ?? null;
        $this->container['png_url'] = $data['png_url'] ?? null;
        $this->container['public'] = $data['public'] ?? null;
        $this->container['svg_path'] = $data['svg_path'] ?? null;
        $this->container['svg_url'] = $data['svg_url'] ?? null;
        $this->container['updated'] = $data['updated'] ?? null;
        $this->container['updated_time'] = $data['updated_time'] ?? null;
        $this->container['variable_category_name'] = $data['variable_category_name'] ?? null;
        $this->container['variable_category_name_singular'] = $data['variable_category_name_singular'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        $allowedValues = $this->getVariableCategoryNameAllowableValues();
        if (!is_null($this->container['variable_category_name']) && !in_array($this->container['variable_category_name'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'variable_category_name', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }
    /**
     * Gets app_type
     *
     * @return string
     */
    public function getAppType(): string
    {
        return $this->container['app_type'];
    }

    /**
     * Sets app_type
     *
     * @param string $app_type Ex: mood
     *
     * @return $this
     */
    public function setAppType(string $app_type): VariableCategory
    {
        $this->container['app_type'] = $app_type;

        return $this;
    }

    /**
     * Gets cause_only
     *
     * @return bool
     */
    public function getCauseOnly(): bool
    {
        return $this->container['cause_only'];
    }

    /**
     * Sets cause_only
     *
     * @param bool $cause_only Ex: false
     *
     * @return $this
     */
    public function setCauseOnly(bool $cause_only): VariableCategory
    {
        $this->container['cause_only'] = $cause_only;

        return $this;
    }

    /**
     * Gets combination_operation
     *
     * @return string
     */
    public function getCombinationOperation(): string
    {
        return $this->container['combination_operation'];
    }

    /**
     * Sets combination_operation
     *
     * @param string $combination_operation Ex: MEAN
     *
     * @return $this
     */
    public function setCombinationOperation(string $combination_operation): VariableCategory
    {
        $this->container['combination_operation'] = $combination_operation;

        return $this;
    }

    /**
     * Gets created_time
     *
     * @return string
     */
    public function getCreatedTime(): string
    {
        return $this->container['created_time'];
    }

    /**
     * Sets created_time
     *
     * @param string $created_time UTC ISO 8601 YYYY-MM-DDThh:mm:ss
     *
     * @return $this
     */
    public function setCreatedTime(string $created_time): VariableCategory
    {
        $this->container['created_time'] = $created_time;

        return $this;
    }

    /**
     * Gets unit_abbreviated_name
     *
     * @return string
     */
    public function getUnitAbbreviatedName(): string
    {
        return $this->container['unit_abbreviated_name'];
    }

    /**
     * Sets unit_abbreviated_name
     *
     * @param string $unit_abbreviated_name Ex: /5
     *
     * @return $this
     */
    public function setUnitAbbreviatedName(string $unit_abbreviated_name): VariableCategory
    {
        $this->container['unit_abbreviated_name'] = $unit_abbreviated_name;

        return $this;
    }

    /**
     * Gets unit_id
     *
     * @return int
     */
    public function getUnitId(): int
    {
        return $this->container['unit_id'];
    }

    /**
     * Sets unit_id
     *
     * @param int $unit_id Ex: 10
     *
     * @return $this
     */
    public function setUnitId(int $unit_id): VariableCategory
    {
        $this->container['unit_id'] = $unit_id;

        return $this;
    }

    /**
     * Gets duration_of_action
     *
     * @return int
     */
    public function getDurationOfAction(): int
    {
        return $this->container['duration_of_action'];
    }

    /**
     * Sets duration_of_action
     *
     * @param int $duration_of_action User-Defined Variable Setting: The amount of time over which a predictor/stimulus event can exert an observable influence on an outcome variable value. For instance, aspirin (stimulus/predictor) typically decreases headache severity for approximately four hours (duration of action) following the onset delay.  Unit: Seconds
     *
     * @return $this
     */
    public function setDurationOfAction(int $duration_of_action): VariableCategory
    {
        $this->container['duration_of_action'] = $duration_of_action;

        return $this;
    }

    /**
     * Gets filling_value
     *
     * @return int
     */
    public function getFillingValue(): int
    {
        return $this->container['filling_value'];
    }

    /**
     * Sets filling_value
     *
     * @param int $filling_value Ex: -1. Unit: Variable category default unit.
     *
     * @return $this
     */
    public function setFillingValue(int $filling_value): VariableCategory
    {
        $this->container['filling_value'] = $filling_value;

        return $this;
    }

    /**
     * Gets help_text
     *
     * @return string
     */
    public function getHelpText(): string
    {
        return $this->container['help_text'];
    }

    /**
     * Sets help_text
     *
     * @param string $help_text Ex: What emotion do you want to rate?
     *
     * @return $this
     */
    public function setHelpText(string $help_text): VariableCategory
    {
        $this->container['help_text'] = $help_text;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Ex: 1
     *
     * @return $this
     */
    public function setId(int $id): VariableCategory
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets image_url
     *
     * @return string
     */
    public function getImageUrl(): string
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url
     *
     * @param string $image_url Ex: https://maxcdn.icons8.com/Color/PNG/96/Cinema/theatre_mask-96.png
     *
     * @return $this
     */
    public function setImageUrl(string $image_url): VariableCategory
    {
        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets ion_icon
     *
     * @return string
     */
    public function getIonIcon(): string
    {
        return $this->container['ion_icon'];
    }

    /**
     * Sets ion_icon
     *
     * @param string $ion_icon Ex: ion-happy-outline
     *
     * @return $this
     */
    public function setIonIcon(string $ion_icon): VariableCategory
    {
        $this->container['ion_icon'] = $ion_icon;

        return $this;
    }

    /**
     * Gets manual_tracking
     *
     * @return bool
     */
    public function getManualTracking(): bool
    {
        return $this->container['manual_tracking'];
    }

    /**
     * Sets manual_tracking
     *
     * @param bool $manual_tracking Ex: true
     *
     * @return $this
     */
    public function setManualTracking(bool $manual_tracking): VariableCategory
    {
        $this->container['manual_tracking'] = $manual_tracking;

        return $this;
    }

    /**
     * Gets maximum_allowed_value
     *
     * @return string
     */
    public function getMaximumAllowedValue(): string
    {
        return $this->container['maximum_allowed_value'];
    }

    /**
     * Sets maximum_allowed_value
     *
     * @param string $maximum_allowed_value Unit: Variable category default unit.
     *
     * @return $this
     */
    public function setMaximumAllowedValue(string $maximum_allowed_value): VariableCategory
    {
        $this->container['maximum_allowed_value'] = $maximum_allowed_value;

        return $this;
    }

    /**
     * Gets measurement_synonym_singular_lowercase
     *
     * @return string
     */
    public function getMeasurementSynonymSingularLowercase(): string
    {
        return $this->container['measurement_synonym_singular_lowercase'];
    }

    /**
     * Sets measurement_synonym_singular_lowercase
     *
     * @param string $measurement_synonym_singular_lowercase Ex: rating
     *
     * @return $this
     */
    public function setMeasurementSynonymSingularLowercase(string $measurement_synonym_singular_lowercase): VariableCategory
    {
        $this->container['measurement_synonym_singular_lowercase'] = $measurement_synonym_singular_lowercase;

        return $this;
    }

    /**
     * Gets minimum_allowed_value
     *
     * @return string
     */
    public function getMinimumAllowedValue(): string
    {
        return $this->container['minimum_allowed_value'];
    }

    /**
     * Sets minimum_allowed_value
     *
     * @param string $minimum_allowed_value Unit: Variable category default unit.
     *
     * @return $this
     */
    public function setMinimumAllowedValue(string $minimum_allowed_value): VariableCategory
    {
        $this->container['minimum_allowed_value'] = $minimum_allowed_value;

        return $this;
    }

    /**
     * Gets more_info
     *
     * @return string
     */
    public function getMoreInfo(): string
    {
        return $this->container['more_info'];
    }

    /**
     * Sets more_info
     *
     * @param string $more_info Ex: Do you have any emotions that fluctuate regularly?  If so, add them so I can try to determine which factors are influencing them.
     *
     * @return $this
     */
    public function setMoreInfo(string $more_info): VariableCategory
    {
        $this->container['more_info'] = $more_info;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Category name
     *
     * @return $this
     */
    public function setName(string $name): VariableCategory
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets onset_delay
     *
     * @return int
     */
    public function getOnsetDelay(): int
    {
        return $this->container['onset_delay'];
    }

    /**
     * Sets onset_delay
     *
     * @param int $onset_delay Ex: 0
     *
     * @return $this
     */
    public function setOnsetDelay(int $onset_delay): VariableCategory
    {
        $this->container['onset_delay'] = $onset_delay;

        return $this;
    }

    /**
     * Gets outcome
     *
     * @return bool
     */
    public function getOutcome(): bool
    {
        return $this->container['outcome'];
    }

    /**
     * Sets outcome
     *
     * @param bool $outcome Ex: true
     *
     * @return $this
     */
    public function setOutcome(bool $outcome): VariableCategory
    {
        $this->container['outcome'] = $outcome;

        return $this;
    }

    /**
     * Gets png_path
     *
     * @return string
     */
    public function getPngPath(): string
    {
        return $this->container['png_path'];
    }

    /**
     * Sets png_path
     *
     * @param string $png_path Ex: img/variable_categories/emotions.png
     *
     * @return $this
     */
    public function setPngPath(string $png_path): VariableCategory
    {
        $this->container['png_path'] = $png_path;

        return $this;
    }

    /**
     * Gets png_url
     *
     * @return string
     */
    public function getPngUrl(): string
    {
        return $this->container['png_url'];
    }

    /**
     * Sets png_url
     *
     * @param string $png_url Ex: https://web.quantimo.do/img/variable_categories/emotions.png
     *
     * @return $this
     */
    public function setPngUrl(string $png_url): VariableCategory
    {
        $this->container['png_url'] = $png_url;

        return $this;
    }

    /**
     * Gets public
     *
     * @return bool
     */
    public function getPublic(): bool
    {
        return $this->container['public'];
    }

    /**
     * Sets public
     *
     * @param bool $public Ex: true
     *
     * @return $this
     */
    public function setPublic(bool $public): VariableCategory
    {
        $this->container['public'] = $public;

        return $this;
    }

    /**
     * Gets svg_path
     *
     * @return string
     */
    public function getSvgPath(): string
    {
        return $this->container['svg_path'];
    }

    /**
     * Sets svg_path
     *
     * @param string $svg_path Ex: img/variable_categories/emotions.svg
     *
     * @return $this
     */
    public function setSvgPath(string $svg_path): VariableCategory
    {
        $this->container['svg_path'] = $svg_path;

        return $this;
    }

    /**
     * Gets svg_url
     *
     * @return string
     */
    public function getSvgUrl(): string
    {
        return $this->container['svg_url'];
    }

    /**
     * Sets svg_url
     *
     * @param string $svg_url Ex: https://web.quantimo.do/img/variable_categories/emotions.svg
     *
     * @return $this
     */
    public function setSvgUrl(string $svg_url): VariableCategory
    {
        $this->container['svg_url'] = $svg_url;

        return $this;
    }

    /**
     * Gets updated
     *
     * @return int
     */
    public function getUpdated(): int
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     *
     * @param int $updated Ex: 1
     *
     * @return $this
     */
    public function setUpdated(int $updated): VariableCategory
    {
        $this->container['updated'] = $updated;

        return $this;
    }

    /**
     * Gets updated_time
     *
     * @return string
     */
    public function getUpdatedTime(): string
    {
        return $this->container['updated_time'];
    }

    /**
     * Sets updated_time
     *
     * @param string $updated_time UTC ISO 8601 YYYY-MM-DDThh:mm:ss
     *
     * @return $this
     */
    public function setUpdatedTime(string $updated_time): VariableCategory
    {
        $this->container['updated_time'] = $updated_time;

        return $this;
    }

    /**
     * Gets variable_category_name
     *
     * @return string
     */
    public function getVariableCategoryName(): string
    {
        return $this->container['variable_category_name'];
    }

    /**
     * Sets variable_category_name
     *
     * @param string $variable_category_name Ex: Emotions, Treatments, Symptoms...
     *
     * @return $this
     */
    public function setVariableCategoryName(string $variable_category_name): VariableCategory
    {
        $allowedValues = $this->getVariableCategoryNameAllowableValues();
        if (!is_null($variable_category_name) && !in_array($variable_category_name, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'variable_category_name', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['variable_category_name'] = $variable_category_name;

        return $this;
    }

    /**
     * Gets variable_category_name_singular
     *
     * @return string
     */
    public function getVariableCategoryNameSingular(): string
    {
        return $this->container['variable_category_name_singular'];
    }

    /**
     * Sets variable_category_name_singular
     *
     * @param string $variable_category_name_singular Ex: Emotion
     *
     * @return $this
     */
    public function setVariableCategoryNameSingular(string $variable_category_name_singular): VariableCategory
    {
        $this->container['variable_category_name_singular'] = $variable_category_name_singular;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
