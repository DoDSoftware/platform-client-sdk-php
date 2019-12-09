<?php
/**
 * ForecastTimeSeriesResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * PureCloud Platform API
 *
 * With the PureCloud Platform API, you can control all aspects of your PureCloud environment. With the APIs you can access the system configuration, manage conversations and more.
 *
 * OpenAPI spec version: v2
 * Contact: DeveloperEvangelists@genesys.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.9
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace PureCloudPlatform\Client\V2\Model;

use \ArrayAccess;
use \PureCloudPlatform\Client\V2\ObjectSerializer;

/**
 * ForecastTimeSeriesResult Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ForecastTimeSeriesResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ForecastTimeSeriesResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'metric' => 'string',
        'forecastingMethod' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'metric' => null,
        'forecastingMethod' => null
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
        'metric' => 'metric',
        'forecastingMethod' => 'forecastingMethod'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'metric' => 'setMetric',
        'forecastingMethod' => 'setForecastingMethod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'metric' => 'getMetric',
        'forecastingMethod' => 'getForecastingMethod'
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

    const METRIC_OFFERED = 'Offered';
    const METRIC_AVERAGE_TALK_TIME_SECONDS = 'AverageTalkTimeSeconds';
    const METRIC_AVERAGE_AFTER_CALL_WORK_TIME_SECONDS = 'AverageAfterCallWorkTimeSeconds';
    const METRIC_AVERAGE_HANDLE_TIME_SECONDS = 'AverageHandleTimeSeconds';
    const FORECASTING_METHOD_AUTO_REGRESSIVE_INTEGRATED_MOVING_AVERAGE = 'AutoRegressiveIntegratedMovingAverage';
    const FORECASTING_METHOD_MOVING_AVERAGE = 'MovingAverage';
    const FORECASTING_METHOD_SINGLE_EXPONENTIAL_SMOOTHING = 'SingleExponentialSmoothing';
    const FORECASTING_METHOD_RANDOM_WALK = 'RandomWalk';
    const FORECASTING_METHOD_DECOMPOSITION_USING_ADDITIVE_SEASONALITY = 'DecompositionUsingAdditiveSeasonality';
    const FORECASTING_METHOD_DECOMPOSITION_USING_MULTIPLICATIVE_SEASONALITY = 'DecompositionUsingMultiplicativeSeasonality';
    const FORECASTING_METHOD_HOLT_WINTERS_ADDITIVE_SEASONALITY = 'HoltWintersAdditiveSeasonality';
    const FORECASTING_METHOD_HOLT_WINTERS_ADDITIVE_SEASONALITY_WITH_DAMPED_TREND = 'HoltWintersAdditiveSeasonalityWithDampedTrend';
    const FORECASTING_METHOD_HOLT_WINTERS_MULTIPLICATIVE_SEASONALITY = 'HoltWintersMultiplicativeSeasonality';
    const FORECASTING_METHOD_HOLT_WINTERS_MULTIPLICATIVE_SEASONALITY_WITH_DAMPED_TREND = 'HoltWintersMultiplicativeSeasonalityWithDampedTrend';
    const FORECASTING_METHOD_DAMPED_LINEAR_EXPONENTIAL_SMOOTHING = 'DampedLinearExponentialSmoothing';
    const FORECASTING_METHOD_DOUBLE_EXPONENTIAL_SMOOTHING = 'DoubleExponentialSmoothing';
    const FORECASTING_METHOD_DOUBLE_MOVING_AVERAGE = 'DoubleMovingAverage';
    const FORECASTING_METHOD_LINEAR_EXPONENTIAL_SMOOTHING = 'LinearExponentialSmoothing';
    const FORECASTING_METHOD_LINEAR_WEIGHTED_MOVING_AVERAGE = 'LinearWeightedMovingAverage';
    const FORECASTING_METHOD_POINT_ESTIMATE_USING_DAMPED_LINEAR_EXPONENTIAL_SMOOTHING = 'PointEstimateUsingDampedLinearExponentialSmoothing';
    const FORECASTING_METHOD_POINT_ESTIMATE_USING_DOUBLE_EXPONENTIAL_SMOOTHING = 'PointEstimateUsingDoubleExponentialSmoothing';
    const FORECASTING_METHOD_POINT_ESTIMATE_USING_LATEST_WEEK = 'PointEstimateUsingLatestWeek';
    const FORECASTING_METHOD_POINT_ESTIMATE_USING_LINEAR_EXPONENTIAL_SMOOTHING = 'PointEstimateUsingLinearExponentialSmoothing';
    const FORECASTING_METHOD_POINT_ESTIMATE_USING_WEIGHTED_AVERAGE = 'PointEstimateUsingWeightedAverage';
    const FORECASTING_METHOD_CURVE_FIT = 'CurveFit';
    const FORECASTING_METHOD_MULTI_LINEAR_REGRESSION = 'MultiLinearRegression';
    const FORECASTING_METHOD_DYNAMIC_HARMONIC_REGRESSION = 'DynamicHarmonicRegression';
    const FORECASTING_METHOD_OTHER = 'Other';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMetricAllowableValues()
    {
        return [
            self::METRIC_OFFERED,
            self::METRIC_AVERAGE_TALK_TIME_SECONDS,
            self::METRIC_AVERAGE_AFTER_CALL_WORK_TIME_SECONDS,
            self::METRIC_AVERAGE_HANDLE_TIME_SECONDS,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getForecastingMethodAllowableValues()
    {
        return [
            self::FORECASTING_METHOD_AUTO_REGRESSIVE_INTEGRATED_MOVING_AVERAGE,
            self::FORECASTING_METHOD_MOVING_AVERAGE,
            self::FORECASTING_METHOD_SINGLE_EXPONENTIAL_SMOOTHING,
            self::FORECASTING_METHOD_RANDOM_WALK,
            self::FORECASTING_METHOD_DECOMPOSITION_USING_ADDITIVE_SEASONALITY,
            self::FORECASTING_METHOD_DECOMPOSITION_USING_MULTIPLICATIVE_SEASONALITY,
            self::FORECASTING_METHOD_HOLT_WINTERS_ADDITIVE_SEASONALITY,
            self::FORECASTING_METHOD_HOLT_WINTERS_ADDITIVE_SEASONALITY_WITH_DAMPED_TREND,
            self::FORECASTING_METHOD_HOLT_WINTERS_MULTIPLICATIVE_SEASONALITY,
            self::FORECASTING_METHOD_HOLT_WINTERS_MULTIPLICATIVE_SEASONALITY_WITH_DAMPED_TREND,
            self::FORECASTING_METHOD_DAMPED_LINEAR_EXPONENTIAL_SMOOTHING,
            self::FORECASTING_METHOD_DOUBLE_EXPONENTIAL_SMOOTHING,
            self::FORECASTING_METHOD_DOUBLE_MOVING_AVERAGE,
            self::FORECASTING_METHOD_LINEAR_EXPONENTIAL_SMOOTHING,
            self::FORECASTING_METHOD_LINEAR_WEIGHTED_MOVING_AVERAGE,
            self::FORECASTING_METHOD_POINT_ESTIMATE_USING_DAMPED_LINEAR_EXPONENTIAL_SMOOTHING,
            self::FORECASTING_METHOD_POINT_ESTIMATE_USING_DOUBLE_EXPONENTIAL_SMOOTHING,
            self::FORECASTING_METHOD_POINT_ESTIMATE_USING_LATEST_WEEK,
            self::FORECASTING_METHOD_POINT_ESTIMATE_USING_LINEAR_EXPONENTIAL_SMOOTHING,
            self::FORECASTING_METHOD_POINT_ESTIMATE_USING_WEIGHTED_AVERAGE,
            self::FORECASTING_METHOD_CURVE_FIT,
            self::FORECASTING_METHOD_MULTI_LINEAR_REGRESSION,
            self::FORECASTING_METHOD_DYNAMIC_HARMONIC_REGRESSION,
            self::FORECASTING_METHOD_OTHER,
        ];
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
        $this->container['metric'] = isset($data['metric']) ? $data['metric'] : null;
        $this->container['forecastingMethod'] = isset($data['forecastingMethod']) ? $data['forecastingMethod'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getMetricAllowableValues();
        if (!is_null($this->container['metric']) && !in_array($this->container['metric'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'metric', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getForecastingMethodAllowableValues();
        if (!is_null($this->container['forecastingMethod']) && !in_array($this->container['forecastingMethod'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'forecastingMethod', must be one of '%s'",
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
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets metric
     *
     * @return string
     */
    public function getMetric()
    {
        return $this->container['metric'];
    }

    /**
     * Sets metric
     *
     * @param string $metric The metric this result applies to
     *
     * @return $this
     */
    public function setMetric($metric)
    {
        $allowedValues = $this->getMetricAllowableValues();
        if (!is_null($metric) && !in_array($metric, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'metric', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['metric'] = $metric;

        return $this;
    }

    /**
     * Gets forecastingMethod
     *
     * @return string
     */
    public function getForecastingMethod()
    {
        return $this->container['forecastingMethod'];
    }

    /**
     * Sets forecastingMethod
     *
     * @param string $forecastingMethod The forecasting method that was used for this metric
     *
     * @return $this
     */
    public function setForecastingMethod($forecastingMethod)
    {
        $allowedValues = $this->getForecastingMethodAllowableValues();
        if (!is_null($forecastingMethod) && !in_array($forecastingMethod, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'forecastingMethod', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['forecastingMethod'] = $forecastingMethod;

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


