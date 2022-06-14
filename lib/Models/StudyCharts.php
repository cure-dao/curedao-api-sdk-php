<?php
/**
 * StudyCharts
 *
 */

namespace CureDAO\Client\Models;

use ArrayAccess;
use CureDAO\Client\ObjectSerializer;

/**
 * StudyCharts Class 
 * @category Class
 * @description An object with various chart properties each property contain and svg and Highcharts configuration
 * @package  CureDAO\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StudyCharts implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'StudyCharts';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'population_trait_scatter_plot' => '\CureDAO\Client\Models\Chart',
        'outcome_distribution_column_chart' => '\CureDAO\Client\Models\Chart',
        'predictor_distribution_column_chart' => '\CureDAO\Client\Models\Chart',
        'correlation_scatter_plot' => '\CureDAO\Client\Models\Chart',
        'pairs_over_time_line_chart' => '\CureDAO\Client\Models\Chart'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'population_trait_scatter_plot' => null,
        'outcome_distribution_column_chart' => null,
        'predictor_distribution_column_chart' => null,
        'correlation_scatter_plot' => null,
        'pairs_over_time_line_chart' => null
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
        'population_trait_scatter_plot' => 'populationTraitScatterPlot',
        'outcome_distribution_column_chart' => 'outcomeDistributionColumnChart',
        'predictor_distribution_column_chart' => 'predictorDistributionColumnChart',
        'correlation_scatter_plot' => 'correlationScatterPlot',
        'pairs_over_time_line_chart' => 'pairsOverTimeLineChart'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'population_trait_scatter_plot' => 'setPopulationTraitScatterPlot',
        'outcome_distribution_column_chart' => 'setOutcomeDistributionColumnChart',
        'predictor_distribution_column_chart' => 'setPredictorDistributionColumnChart',
        'correlation_scatter_plot' => 'setCorrelationScatterPlot',
        'pairs_over_time_line_chart' => 'setPairsOverTimeLineChart'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'population_trait_scatter_plot' => 'getPopulationTraitScatterPlot',
        'outcome_distribution_column_chart' => 'getOutcomeDistributionColumnChart',
        'predictor_distribution_column_chart' => 'getPredictorDistributionColumnChart',
        'correlation_scatter_plot' => 'getCorrelationScatterPlot',
        'pairs_over_time_line_chart' => 'getPairsOverTimeLineChart'
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
        $this->container['population_trait_scatter_plot'] = isset($data['population_trait_scatter_plot']) ? $data['population_trait_scatter_plot'] : null;
        $this->container['outcome_distribution_column_chart'] = isset($data['outcome_distribution_column_chart']) ? $data['outcome_distribution_column_chart'] : null;
        $this->container['predictor_distribution_column_chart'] = isset($data['predictor_distribution_column_chart']) ? $data['predictor_distribution_column_chart'] : null;
        $this->container['correlation_scatter_plot'] = isset($data['correlation_scatter_plot']) ? $data['correlation_scatter_plot'] : null;
        $this->container['pairs_over_time_line_chart'] = isset($data['pairs_over_time_line_chart']) ? $data['pairs_over_time_line_chart'] : null;
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
     * Gets population_trait_scatter_plot
     *
     * @return \CureDAO\Client\Models\Chart
     */
    public function getPopulationTraitScatterPlot()
    {
        return $this->container['population_trait_scatter_plot'];
    }

    /**
     * Sets population_trait_scatter_plot
     *
     * @param \CureDAO\Client\Models\Chart $population_trait_scatter_plot population_trait_scatter_plot
     *
     * @return $this
     */
    public function setPopulationTraitScatterPlot($population_trait_scatter_plot)
    {
        $this->container['population_trait_scatter_plot'] = $population_trait_scatter_plot;

        return $this;
    }

    /**
     * Gets outcome_distribution_column_chart
     *
     * @return \CureDAO\Client\Models\Chart
     */
    public function getOutcomeDistributionColumnChart()
    {
        return $this->container['outcome_distribution_column_chart'];
    }

    /**
     * Sets outcome_distribution_column_chart
     *
     * @param \CureDAO\Client\Models\Chart $outcome_distribution_column_chart outcome_distribution_column_chart
     *
     * @return $this
     */
    public function setOutcomeDistributionColumnChart($outcome_distribution_column_chart)
    {
        $this->container['outcome_distribution_column_chart'] = $outcome_distribution_column_chart;

        return $this;
    }

    /**
     * Gets predictor_distribution_column_chart
     *
     * @return \CureDAO\Client\Models\Chart
     */
    public function getPredictorDistributionColumnChart()
    {
        return $this->container['predictor_distribution_column_chart'];
    }

    /**
     * Sets predictor_distribution_column_chart
     *
     * @param \CureDAO\Client\Models\Chart $predictor_distribution_column_chart predictor_distribution_column_chart
     *
     * @return $this
     */
    public function setPredictorDistributionColumnChart($predictor_distribution_column_chart)
    {
        $this->container['predictor_distribution_column_chart'] = $predictor_distribution_column_chart;

        return $this;
    }

    /**
     * Gets correlation_scatter_plot
     *
     * @return \CureDAO\Client\Models\Chart
     */
    public function getCorrelationScatterPlot()
    {
        return $this->container['correlation_scatter_plot'];
    }

    /**
     * Sets correlation_scatter_plot
     *
     * @param \CureDAO\Client\Models\Chart $correlation_scatter_plot correlation_scatter_plot
     *
     * @return $this
     */
    public function setCorrelationScatterPlot($correlation_scatter_plot)
    {
        $this->container['correlation_scatter_plot'] = $correlation_scatter_plot;

        return $this;
    }

    /**
     * Gets pairs_over_time_line_chart
     *
     * @return \CureDAO\Client\Models\Chart
     */
    public function getPairsOverTimeLineChart()
    {
        return $this->container['pairs_over_time_line_chart'];
    }

    /**
     * Sets pairs_over_time_line_chart
     *
     * @param \CureDAO\Client\Models\Chart $pairs_over_time_line_chart pairs_over_time_line_chart
     *
     * @return $this
     */
    public function setPairsOverTimeLineChart($pairs_over_time_line_chart)
    {
        $this->container['pairs_over_time_line_chart'] = $pairs_over_time_line_chart;

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
