<?php
/**
 * SchedulingSettings
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
 * SchedulingSettings Class Doc Comment
 *
 * @category Class
 * @description Scheduling Settings
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SchedulingSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SchedulingSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'maxOccupancyPercentForDeferredWork' => 'int',
        'defaultShrinkagePercent' => 'double',
        'shrinkageOverrides' => '\PureCloudPlatform\Client\V2\Model\ShrinkageOverrides',
        'planningPeriod' => '\PureCloudPlatform\Client\V2\Model\PlanningPeriodSettings'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'maxOccupancyPercentForDeferredWork' => 'int32',
        'defaultShrinkagePercent' => 'double',
        'shrinkageOverrides' => null,
        'planningPeriod' => null
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
        'maxOccupancyPercentForDeferredWork' => 'maxOccupancyPercentForDeferredWork',
        'defaultShrinkagePercent' => 'defaultShrinkagePercent',
        'shrinkageOverrides' => 'shrinkageOverrides',
        'planningPeriod' => 'planningPeriod'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'maxOccupancyPercentForDeferredWork' => 'setMaxOccupancyPercentForDeferredWork',
        'defaultShrinkagePercent' => 'setDefaultShrinkagePercent',
        'shrinkageOverrides' => 'setShrinkageOverrides',
        'planningPeriod' => 'setPlanningPeriod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'maxOccupancyPercentForDeferredWork' => 'getMaxOccupancyPercentForDeferredWork',
        'defaultShrinkagePercent' => 'getDefaultShrinkagePercent',
        'shrinkageOverrides' => 'getShrinkageOverrides',
        'planningPeriod' => 'getPlanningPeriod'
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
        $this->container['maxOccupancyPercentForDeferredWork'] = isset($data['maxOccupancyPercentForDeferredWork']) ? $data['maxOccupancyPercentForDeferredWork'] : null;
        $this->container['defaultShrinkagePercent'] = isset($data['defaultShrinkagePercent']) ? $data['defaultShrinkagePercent'] : null;
        $this->container['shrinkageOverrides'] = isset($data['shrinkageOverrides']) ? $data['shrinkageOverrides'] : null;
        $this->container['planningPeriod'] = isset($data['planningPeriod']) ? $data['planningPeriod'] : null;
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
     * Gets maxOccupancyPercentForDeferredWork
     *
     * @return int
     */
    public function getMaxOccupancyPercentForDeferredWork()
    {
        return $this->container['maxOccupancyPercentForDeferredWork'];
    }

    /**
     * Sets maxOccupancyPercentForDeferredWork
     *
     * @param int $maxOccupancyPercentForDeferredWork Max occupancy percent for deferred work
     *
     * @return $this
     */
    public function setMaxOccupancyPercentForDeferredWork($maxOccupancyPercentForDeferredWork)
    {
        $this->container['maxOccupancyPercentForDeferredWork'] = $maxOccupancyPercentForDeferredWork;

        return $this;
    }

    /**
     * Gets defaultShrinkagePercent
     *
     * @return double
     */
    public function getDefaultShrinkagePercent()
    {
        return $this->container['defaultShrinkagePercent'];
    }

    /**
     * Sets defaultShrinkagePercent
     *
     * @param double $defaultShrinkagePercent Default shrinkage percent for scheduling
     *
     * @return $this
     */
    public function setDefaultShrinkagePercent($defaultShrinkagePercent)
    {
        $this->container['defaultShrinkagePercent'] = $defaultShrinkagePercent;

        return $this;
    }

    /**
     * Gets shrinkageOverrides
     *
     * @return \PureCloudPlatform\Client\V2\Model\ShrinkageOverrides
     */
    public function getShrinkageOverrides()
    {
        return $this->container['shrinkageOverrides'];
    }

    /**
     * Sets shrinkageOverrides
     *
     * @param \PureCloudPlatform\Client\V2\Model\ShrinkageOverrides $shrinkageOverrides Shrinkage overrides for scheduling
     *
     * @return $this
     */
    public function setShrinkageOverrides($shrinkageOverrides)
    {
        $this->container['shrinkageOverrides'] = $shrinkageOverrides;

        return $this;
    }

    /**
     * Gets planningPeriod
     *
     * @return \PureCloudPlatform\Client\V2\Model\PlanningPeriodSettings
     */
    public function getPlanningPeriod()
    {
        return $this->container['planningPeriod'];
    }

    /**
     * Sets planningPeriod
     *
     * @param \PureCloudPlatform\Client\V2\Model\PlanningPeriodSettings $planningPeriod Planning period settings for scheduling
     *
     * @return $this
     */
    public function setPlanningPeriod($planningPeriod)
    {
        $this->container['planningPeriod'] = $planningPeriod;

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


