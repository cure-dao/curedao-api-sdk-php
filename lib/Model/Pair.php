<?php
/**
 * Pair

 */

namespace CureDAO\Client\Model;

use \ArrayAccess;
use \CureDAO\Client\ObjectSerializer;

/**
 * Pair Class Doc Comment
 *
 * @category Class
 * @package  CureDAO\Client
 * @author   Mike P. Sinn
 * @link     https://github.com/cure-dao
 */
class Pair implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Pair';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cause_measurement' => 'double',
        'cause_measurement_value' => 'double',
        'cause_variable_unit_abbreviated_name' => 'string',
        'effect_measurement' => 'double',
        'effect_measurement_value' => 'double',
        'effect_variable_unit_abbreviated_name' => 'string',
        'event_at' => 'string',
        'event_at_unix_time' => 'int',
        'start_time_string' => 'string',
        'timestamp' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cause_measurement' => 'double',
        'cause_measurement_value' => 'double',
        'cause_variable_unit_abbreviated_name' => null,
        'effect_measurement' => 'double',
        'effect_measurement_value' => 'double',
        'effect_variable_unit_abbreviated_name' => null,
        'event_at' => null,
        'event_at_unix_time' => null,
        'start_time_string' => null,
        'timestamp' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
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
        'cause_measurement' => 'causeMeasurement',
        'cause_measurement_value' => 'causeMeasurementValue',
        'cause_variable_unit_abbreviated_name' => 'causeVariableUnitAbbreviatedName',
        'effect_measurement' => 'effectMeasurement',
        'effect_measurement_value' => 'effectMeasurementValue',
        'effect_variable_unit_abbreviated_name' => 'effectVariableUnitAbbreviatedName',
        'event_at' => 'eventAt',
        'event_at_unix_time' => 'eventAtUnixTime',
        'start_time_string' => 'startTimeString',
        'timestamp' => 'timestamp'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cause_measurement' => 'setCauseMeasurement',
        'cause_measurement_value' => 'setCauseMeasurementValue',
        'cause_variable_unit_abbreviated_name' => 'setCauseVariableUnitAbbreviatedName',
        'effect_measurement' => 'setEffectMeasurement',
        'effect_measurement_value' => 'setEffectMeasurementValue',
        'effect_variable_unit_abbreviated_name' => 'setEffectVariableUnitAbbreviatedName',
        'event_at' => 'setEventAt',
        'event_at_unix_time' => 'setEventAtUnixTime',
        'start_time_string' => 'setStartTimeString',
        'timestamp' => 'setTimestamp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cause_measurement' => 'getCauseMeasurement',
        'cause_measurement_value' => 'getCauseMeasurementValue',
        'cause_variable_unit_abbreviated_name' => 'getCauseVariableUnitAbbreviatedName',
        'effect_measurement' => 'getEffectMeasurement',
        'effect_measurement_value' => 'getEffectMeasurementValue',
        'effect_variable_unit_abbreviated_name' => 'getEffectVariableUnitAbbreviatedName',
        'event_at' => 'getEventAt',
        'event_at_unix_time' => 'getEventAtUnixTime',
        'start_time_string' => 'getStartTimeString',
        'timestamp' => 'getTimestamp'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['cause_measurement'] = isset($data['cause_measurement']) ? $data['cause_measurement'] : null;
        $this->container['cause_measurement_value'] = isset($data['cause_measurement_value']) ? $data['cause_measurement_value'] : null;
        $this->container['cause_variable_unit_abbreviated_name'] = isset($data['cause_variable_unit_abbreviated_name']) ? $data['cause_variable_unit_abbreviated_name'] : null;
        $this->container['effect_measurement'] = isset($data['effect_measurement']) ? $data['effect_measurement'] : null;
        $this->container['effect_measurement_value'] = isset($data['effect_measurement_value']) ? $data['effect_measurement_value'] : null;
        $this->container['effect_variable_unit_abbreviated_name'] = isset($data['effect_variable_unit_abbreviated_name']) ? $data['effect_variable_unit_abbreviated_name'] : null;
        $this->container['event_at'] = isset($data['event_at']) ? $data['event_at'] : null;
        $this->container['event_at_unix_time'] = isset($data['event_at_unix_time']) ? $data['event_at_unix_time'] : null;
        $this->container['start_time_string'] = isset($data['start_time_string']) ? $data['start_time_string'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['cause_measurement'] === null) {
            $invalidProperties[] = "'cause_measurement' can't be null";
        }
        if ($this->container['cause_measurement_value'] === null) {
            $invalidProperties[] = "'cause_measurement_value' can't be null";
        }
        if ($this->container['cause_variable_unit_abbreviated_name'] === null) {
            $invalidProperties[] = "'cause_variable_unit_abbreviated_name' can't be null";
        }
        if ($this->container['effect_measurement'] === null) {
            $invalidProperties[] = "'effect_measurement' can't be null";
        }
        if ($this->container['effect_measurement_value'] === null) {
            $invalidProperties[] = "'effect_measurement_value' can't be null";
        }
        if ($this->container['effect_variable_unit_abbreviated_name'] === null) {
            $invalidProperties[] = "'effect_variable_unit_abbreviated_name' can't be null";
        }
        if ($this->container['timestamp'] === null) {
            $invalidProperties[] = "'timestamp' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    /**
     * Gets cause_measurement
     *
     * @return double
     */
    public function getCauseMeasurement()
    {
        return $this->container['cause_measurement'];
    }

    /**
     * Sets cause_measurement
     *
     * @param double $cause_measurement Ex: 101341.66666667
     *
     * @return $this
     */
    public function setCauseMeasurement($cause_measurement)
    {
        $this->container['cause_measurement'] = $cause_measurement;

        return $this;
    }

    /**
     * Gets cause_measurement_value
     *
     * @return double
     */
    public function getCauseMeasurementValue()
    {
        return $this->container['cause_measurement_value'];
    }

    /**
     * Sets cause_measurement_value
     *
     * @param double $cause_measurement_value Ex: 101341.66666667
     *
     * @return $this
     */
    public function setCauseMeasurementValue($cause_measurement_value)
    {
        $this->container['cause_measurement_value'] = $cause_measurement_value;

        return $this;
    }

    /**
     * Gets cause_variable_unit_abbreviated_name
     *
     * @return string
     */
    public function getCauseVariableUnitAbbreviatedName()
    {
        return $this->container['cause_variable_unit_abbreviated_name'];
    }

    /**
     * Sets cause_variable_unit_abbreviated_name
     *
     * @param string $cause_variable_unit_abbreviated_name Ex: mg
     *
     * @return $this
     */
    public function setCauseVariableUnitAbbreviatedName($cause_variable_unit_abbreviated_name)
    {
        $this->container['cause_variable_unit_abbreviated_name'] = $cause_variable_unit_abbreviated_name;

        return $this;
    }

    /**
     * Gets effect_measurement
     *
     * @return double
     */
    public function getEffectMeasurement()
    {
        return $this->container['effect_measurement'];
    }

    /**
     * Sets effect_measurement
     *
     * @param double $effect_measurement Ex: 7.98
     *
     * @return $this
     */
    public function setEffectMeasurement($effect_measurement)
    {
        $this->container['effect_measurement'] = $effect_measurement;

        return $this;
    }

    /**
     * Gets effect_measurement_value
     *
     * @return double
     */
    public function getEffectMeasurementValue()
    {
        return $this->container['effect_measurement_value'];
    }

    /**
     * Sets effect_measurement_value
     *
     * @param double $effect_measurement_value Ex: 7.98
     *
     * @return $this
     */
    public function setEffectMeasurementValue($effect_measurement_value)
    {
        $this->container['effect_measurement_value'] = $effect_measurement_value;

        return $this;
    }

    /**
     * Gets effect_variable_unit_abbreviated_name
     *
     * @return string
     */
    public function getEffectVariableUnitAbbreviatedName()
    {
        return $this->container['effect_variable_unit_abbreviated_name'];
    }

    /**
     * Sets effect_variable_unit_abbreviated_name
     *
     * @param string $effect_variable_unit_abbreviated_name Ex: %
     *
     * @return $this
     */
    public function setEffectVariableUnitAbbreviatedName($effect_variable_unit_abbreviated_name)
    {
        $this->container['effect_variable_unit_abbreviated_name'] = $effect_variable_unit_abbreviated_name;

        return $this;
    }

    /**
     * Gets event_at
     *
     * @return string
     */
    public function getEventAt()
    {
        return $this->container['event_at'];
    }

    /**
     * Sets event_at
     *
     * @param string $event_at Ex: 2015-08-06 15:49:02 UTC ISO 8601 YYYY-MM-DDThh:mm:ss
     *
     * @return $this
     */
    public function setEventAt($event_at)
    {
        $this->container['event_at'] = $event_at;

        return $this;
    }

    /**
     * Gets event_at_unix_time
     *
     * @return int
     */
    public function getEventAtUnixTime()
    {
        return $this->container['event_at_unix_time'];
    }

    /**
     * Sets event_at_unix_time
     *
     * @param int $event_at_unix_time Ex: 1438876142
     *
     * @return $this
     */
    public function setEventAtUnixTime($event_at_unix_time)
    {
        $this->container['event_at_unix_time'] = $event_at_unix_time;

        return $this;
    }

    /**
     * Gets start_time_string
     *
     * @return string
     */
    public function getStartTimeString()
    {
        return $this->container['start_time_string'];
    }

    /**
     * Sets start_time_string
     *
     * @param string $start_time_string Ex: 2015-08-06 15:49:02 UTC ISO 8601 YYYY-MM-DDThh:mm:ss
     *
     * @return $this
     */
    public function setStartTimeString($start_time_string)
    {
        $this->container['start_time_string'] = $start_time_string;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return int
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param int $timestamp Ex: 1464937200
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
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
