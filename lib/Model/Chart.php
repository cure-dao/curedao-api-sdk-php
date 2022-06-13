<?php
/**
 * Chart
 *
 */



namespace CureDAO\Client\Model;

use \ArrayAccess;
use \CureDAO\Client\ObjectSerializer;

/**
 * Chart Class Doc Comment
 *
 */
class Chart implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Chart';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'highchart_config' => 'object',
        'chart_id' => 'string',
        'chart_title' => 'string',
        'explanation' => 'string',
        'svg_url' => 'string',
        'svg' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'highchart_config' => null,
        'chart_id' => null,
        'chart_title' => null,
        'explanation' => null,
        'svg_url' => null,
        'svg' => null
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
        'highchart_config' => 'highchartConfig',
        'chart_id' => 'chartId',
        'chart_title' => 'chartTitle',
        'explanation' => 'explanation',
        'svg_url' => 'svgUrl',
        'svg' => 'svg'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'highchart_config' => 'setHighchartConfig',
        'chart_id' => 'setChartId',
        'chart_title' => 'setChartTitle',
        'explanation' => 'setExplanation',
        'svg_url' => 'setSvgUrl',
        'svg' => 'setSvg'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'highchart_config' => 'getHighchartConfig',
        'chart_id' => 'getChartId',
        'chart_title' => 'getChartTitle',
        'explanation' => 'getExplanation',
        'svg_url' => 'getSvgUrl',
        'svg' => 'getSvg'
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
        $this->container['highchart_config'] = isset($data['highchart_config']) ? $data['highchart_config'] : null;
        $this->container['chart_id'] = isset($data['chart_id']) ? $data['chart_id'] : null;
        $this->container['chart_title'] = isset($data['chart_title']) ? $data['chart_title'] : null;
        $this->container['explanation'] = isset($data['explanation']) ? $data['explanation'] : null;
        $this->container['svg_url'] = isset($data['svg_url']) ? $data['svg_url'] : null;
        $this->container['svg'] = isset($data['svg']) ? $data['svg'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets highchart_config
     *
     * @return object
     */
    public function getHighchartConfig()
    {
        return $this->container['highchart_config'];
    }

    /**
     * Sets highchart_config
     *
     * @param object $highchart_config Highcharts config that can be used if you have highcharts.js included on the page
     *
     * @return $this
     */
    public function setHighchartConfig($highchart_config)
    {
        $this->container['highchart_config'] = $highchart_config;

        return $this;
    }

    /**
     * Gets chart_id
     *
     * @return string
     */
    public function getChartId()
    {
        return $this->container['chart_id'];
    }

    /**
     * Sets chart_id
     *
     * @param string $chart_id Ex: correlationScatterPlot
     *
     * @return $this
     */
    public function setChartId($chart_id)
    {
        $this->container['chart_id'] = $chart_id;

        return $this;
    }

    /**
     * Gets chart_title
     *
     * @return string
     */
    public function getChartTitle()
    {
        return $this->container['chart_title'];
    }

    /**
     * Sets chart_title
     *
     * @param string $chart_title Ex: Overall Mood following Sleep Duration (R = -0.173)
     *
     * @return $this
     */
    public function setChartTitle($chart_title)
    {
        $this->container['chart_title'] = $chart_title;

        return $this;
    }

    /**
     * Gets explanation
     *
     * @return string
     */
    public function getExplanation()
    {
        return $this->container['explanation'];
    }

    /**
     * Sets explanation
     *
     * @param string $explanation Ex: The chart above indicates that an increase in Sleep Duration is usually followed by an decrease in Overall Mood.
     *
     * @return $this
     */
    public function setExplanation($explanation)
    {
        $this->container['explanation'] = $explanation;

        return $this;
    }

    /**
     * Gets svg_url
     *
     * @return string
     */
    public function getSvgUrl()
    {
        return $this->container['svg_url'];
    }

    /**
     * Sets svg_url
     *
     * @param string $svg_url Url to a static svg of the chart
     *
     * @return $this
     */
    public function setSvgUrl($svg_url)
    {
        $this->container['svg_url'] = $svg_url;

        return $this;
    }

    /**
     * Gets svg
     *
     * @return string
     */
    public function getSvg()
    {
        return $this->container['svg'];
    }

    /**
     * Sets svg
     *
     * @param string $svg SVG string than can be embedded directly in HTML
     *
     * @return $this
     */
    public function setSvg($svg)
    {
        $this->container['svg'] = $svg;

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
