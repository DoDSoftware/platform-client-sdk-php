<?php
/**
 * IntradayResponse
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
 * IntradayResponse Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IntradayResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IntradayResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'startDate' => '\DateTime',
        'endDate' => '\DateTime',
        'intervalLengthMinutes' => 'int',
        'numberOfIntervals' => 'int',
        'metrics' => '\PureCloudPlatform\Client\V2\Model\IntradayMetric[]',
        'noDataReason' => 'string',
        'queueIds' => 'string[]',
        'intradayDataGroupings' => '\PureCloudPlatform\Client\V2\Model\IntradayDataGroup[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'startDate' => 'date-time',
        'endDate' => 'date-time',
        'intervalLengthMinutes' => 'int32',
        'numberOfIntervals' => 'int32',
        'metrics' => null,
        'noDataReason' => null,
        'queueIds' => null,
        'intradayDataGroupings' => null
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
        'startDate' => 'startDate',
        'endDate' => 'endDate',
        'intervalLengthMinutes' => 'intervalLengthMinutes',
        'numberOfIntervals' => 'numberOfIntervals',
        'metrics' => 'metrics',
        'noDataReason' => 'noDataReason',
        'queueIds' => 'queueIds',
        'intradayDataGroupings' => 'intradayDataGroupings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'startDate' => 'setStartDate',
        'endDate' => 'setEndDate',
        'intervalLengthMinutes' => 'setIntervalLengthMinutes',
        'numberOfIntervals' => 'setNumberOfIntervals',
        'metrics' => 'setMetrics',
        'noDataReason' => 'setNoDataReason',
        'queueIds' => 'setQueueIds',
        'intradayDataGroupings' => 'setIntradayDataGroupings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'startDate' => 'getStartDate',
        'endDate' => 'getEndDate',
        'intervalLengthMinutes' => 'getIntervalLengthMinutes',
        'numberOfIntervals' => 'getNumberOfIntervals',
        'metrics' => 'getMetrics',
        'noDataReason' => 'getNoDataReason',
        'queueIds' => 'getQueueIds',
        'intradayDataGroupings' => 'getIntradayDataGroupings'
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

    const NO_DATA_REASON_NO_WEEK_DATA = 'NoWeekData';
    const NO_DATA_REASON_NO_PUBLISHED_SCHEDULE = 'NoPublishedSchedule';
    const NO_DATA_REASON_NO_SOURCE_FORECAST = 'NoSourceForecast';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNoDataReasonAllowableValues()
    {
        return [
            self::NO_DATA_REASON_NO_WEEK_DATA,
            self::NO_DATA_REASON_NO_PUBLISHED_SCHEDULE,
            self::NO_DATA_REASON_NO_SOURCE_FORECAST,
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
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['intervalLengthMinutes'] = isset($data['intervalLengthMinutes']) ? $data['intervalLengthMinutes'] : null;
        $this->container['numberOfIntervals'] = isset($data['numberOfIntervals']) ? $data['numberOfIntervals'] : null;
        $this->container['metrics'] = isset($data['metrics']) ? $data['metrics'] : null;
        $this->container['noDataReason'] = isset($data['noDataReason']) ? $data['noDataReason'] : null;
        $this->container['queueIds'] = isset($data['queueIds']) ? $data['queueIds'] : null;
        $this->container['intradayDataGroupings'] = isset($data['intradayDataGroupings']) ? $data['intradayDataGroupings'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getNoDataReasonAllowableValues();
        if (!is_null($this->container['noDataReason']) && !in_array($this->container['noDataReason'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'noDataReason', must be one of '%s'",
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
     * Gets startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     *
     * @param \DateTime $startDate The start of the date range for which this data applies.  This is also the start reference point for the intervals represented in the various arrays. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;

        return $this;
    }

    /**
     * Gets endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
     * Sets endDate
     *
     * @param \DateTime $endDate The end of the date range for which this data applies. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;

        return $this;
    }

    /**
     * Gets intervalLengthMinutes
     *
     * @return int
     */
    public function getIntervalLengthMinutes()
    {
        return $this->container['intervalLengthMinutes'];
    }

    /**
     * Sets intervalLengthMinutes
     *
     * @param int $intervalLengthMinutes The aggregation period in minutes, which determines the interval duration of the returned data
     *
     * @return $this
     */
    public function setIntervalLengthMinutes($intervalLengthMinutes)
    {
        $this->container['intervalLengthMinutes'] = $intervalLengthMinutes;

        return $this;
    }

    /**
     * Gets numberOfIntervals
     *
     * @return int
     */
    public function getNumberOfIntervals()
    {
        return $this->container['numberOfIntervals'];
    }

    /**
     * Sets numberOfIntervals
     *
     * @param int $numberOfIntervals The total number of time intervals represented by this data
     *
     * @return $this
     */
    public function setNumberOfIntervals($numberOfIntervals)
    {
        $this->container['numberOfIntervals'] = $numberOfIntervals;

        return $this;
    }

    /**
     * Gets metrics
     *
     * @return \PureCloudPlatform\Client\V2\Model\IntradayMetric[]
     */
    public function getMetrics()
    {
        return $this->container['metrics'];
    }

    /**
     * Sets metrics
     *
     * @param \PureCloudPlatform\Client\V2\Model\IntradayMetric[] $metrics The metrics to which this data corresponds
     *
     * @return $this
     */
    public function setMetrics($metrics)
    {
        $this->container['metrics'] = $metrics;

        return $this;
    }

    /**
     * Gets noDataReason
     *
     * @return string
     */
    public function getNoDataReason()
    {
        return $this->container['noDataReason'];
    }

    /**
     * Sets noDataReason
     *
     * @param string $noDataReason If not null, the reason there was no data for the request
     *
     * @return $this
     */
    public function setNoDataReason($noDataReason)
    {
        $allowedValues = $this->getNoDataReasonAllowableValues();
        if (!is_null($noDataReason) && !in_array($noDataReason, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'noDataReason', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['noDataReason'] = $noDataReason;

        return $this;
    }

    /**
     * Gets queueIds
     *
     * @return string[]
     */
    public function getQueueIds()
    {
        return $this->container['queueIds'];
    }

    /**
     * Sets queueIds
     *
     * @param string[] $queueIds The IDs of the queues this data corresponds to
     *
     * @return $this
     */
    public function setQueueIds($queueIds)
    {
        $this->container['queueIds'] = $queueIds;

        return $this;
    }

    /**
     * Gets intradayDataGroupings
     *
     * @return \PureCloudPlatform\Client\V2\Model\IntradayDataGroup[]
     */
    public function getIntradayDataGroupings()
    {
        return $this->container['intradayDataGroupings'];
    }

    /**
     * Sets intradayDataGroupings
     *
     * @param \PureCloudPlatform\Client\V2\Model\IntradayDataGroup[] $intradayDataGroupings Intraday data grouped by a single media type and set of queue IDs
     *
     * @return $this
     */
    public function setIntradayDataGroupings($intradayDataGroupings)
    {
        $this->container['intradayDataGroupings'] = $intradayDataGroupings;

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

