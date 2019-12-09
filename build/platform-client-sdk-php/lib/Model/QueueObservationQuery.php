<?php
/**
 * QueueObservationQuery
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
 * QueueObservationQuery Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class QueueObservationQuery implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'QueueObservationQuery';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'filter' => '\PureCloudPlatform\Client\V2\Model\QueueObservationQueryFilter',
        'metrics' => 'string[]',
        'detailMetrics' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'filter' => null,
        'metrics' => null,
        'detailMetrics' => null
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
        'filter' => 'filter',
        'metrics' => 'metrics',
        'detailMetrics' => 'detailMetrics'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'filter' => 'setFilter',
        'metrics' => 'setMetrics',
        'detailMetrics' => 'setDetailMetrics'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'filter' => 'getFilter',
        'metrics' => 'getMetrics',
        'detailMetrics' => 'getDetailMetrics'
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

    const METRICS_O_ACTIVE_USERS = 'oActiveUsers';
    const METRICS_O_INTERACTING = 'oInteracting';
    const METRICS_O_MEMBER_USERS = 'oMemberUsers';
    const METRICS_O_OFF_QUEUE_USERS = 'oOffQueueUsers';
    const METRICS_O_ON_QUEUE_USERS = 'oOnQueueUsers';
    const METRICS_O_USER_PRESENCES = 'oUserPresences';
    const METRICS_O_USER_ROUTING_STATUSES = 'oUserRoutingStatuses';
    const METRICS_O_WAITING = 'oWaiting';
    const DETAIL_METRICS_O_ACTIVE_USERS = 'oActiveUsers';
    const DETAIL_METRICS_O_INTERACTING = 'oInteracting';
    const DETAIL_METRICS_O_MEMBER_USERS = 'oMemberUsers';
    const DETAIL_METRICS_O_OFF_QUEUE_USERS = 'oOffQueueUsers';
    const DETAIL_METRICS_O_ON_QUEUE_USERS = 'oOnQueueUsers';
    const DETAIL_METRICS_O_USER_PRESENCES = 'oUserPresences';
    const DETAIL_METRICS_O_USER_ROUTING_STATUSES = 'oUserRoutingStatuses';
    const DETAIL_METRICS_O_WAITING = 'oWaiting';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMetricsAllowableValues()
    {
        return [
            self::METRICS_O_ACTIVE_USERS,
            self::METRICS_O_INTERACTING,
            self::METRICS_O_MEMBER_USERS,
            self::METRICS_O_OFF_QUEUE_USERS,
            self::METRICS_O_ON_QUEUE_USERS,
            self::METRICS_O_USER_PRESENCES,
            self::METRICS_O_USER_ROUTING_STATUSES,
            self::METRICS_O_WAITING,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDetailMetricsAllowableValues()
    {
        return [
            self::DETAIL_METRICS_O_ACTIVE_USERS,
            self::DETAIL_METRICS_O_INTERACTING,
            self::DETAIL_METRICS_O_MEMBER_USERS,
            self::DETAIL_METRICS_O_OFF_QUEUE_USERS,
            self::DETAIL_METRICS_O_ON_QUEUE_USERS,
            self::DETAIL_METRICS_O_USER_PRESENCES,
            self::DETAIL_METRICS_O_USER_ROUTING_STATUSES,
            self::DETAIL_METRICS_O_WAITING,
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
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['metrics'] = isset($data['metrics']) ? $data['metrics'] : null;
        $this->container['detailMetrics'] = isset($data['detailMetrics']) ? $data['detailMetrics'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['filter'] === null) {
            $invalidProperties[] = "'filter' can't be null";
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
     * Gets filter
     *
     * @return \PureCloudPlatform\Client\V2\Model\QueueObservationQueryFilter
     */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
     * Sets filter
     *
     * @param \PureCloudPlatform\Client\V2\Model\QueueObservationQueryFilter $filter Filter to return a subset of observations. Expresses boolean logical predicates as well as dimensional filters
     *
     * @return $this
     */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;

        return $this;
    }

    /**
     * Gets metrics
     *
     * @return string[]
     */
    public function getMetrics()
    {
        return $this->container['metrics'];
    }

    /**
     * Sets metrics
     *
     * @param string[] $metrics Behaves like a SQL SELECT clause. Enables retrieving only named metrics. If omitted, all metrics that are available will be returned (like SELECT *).
     *
     * @return $this
     */
    public function setMetrics($metrics)
    {
        $allowedValues = $this->getMetricsAllowableValues();
        if (!is_null($metrics) && array_diff($metrics, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'metrics', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['metrics'] = $metrics;

        return $this;
    }

    /**
     * Gets detailMetrics
     *
     * @return string[]
     */
    public function getDetailMetrics()
    {
        return $this->container['detailMetrics'];
    }

    /**
     * Sets detailMetrics
     *
     * @param string[] $detailMetrics Metrics for which to include additional detailed observations
     *
     * @return $this
     */
    public function setDetailMetrics($detailMetrics)
    {
        $allowedValues = $this->getDetailMetricsAllowableValues();
        if (!is_null($detailMetrics) && array_diff($detailMetrics, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'detailMetrics', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['detailMetrics'] = $detailMetrics;

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


