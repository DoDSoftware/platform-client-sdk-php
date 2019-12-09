<?php
/**
 * TimeOffRequestQueryBody
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
 * TimeOffRequestQueryBody Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TimeOffRequestQueryBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TimeOffRequestQueryBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'userIds' => 'string[]',
        'statuses' => 'string[]',
        'dateRange' => '\PureCloudPlatform\Client\V2\Model\DateRange'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'userIds' => null,
        'statuses' => null,
        'dateRange' => null
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
        'userIds' => 'userIds',
        'statuses' => 'statuses',
        'dateRange' => 'dateRange'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'userIds' => 'setUserIds',
        'statuses' => 'setStatuses',
        'dateRange' => 'setDateRange'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'userIds' => 'getUserIds',
        'statuses' => 'getStatuses',
        'dateRange' => 'getDateRange'
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

    const STATUSES_PENDING = 'PENDING';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusesAllowableValues()
    {
        return [
            self::STATUSES_PENDING,
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
        $this->container['userIds'] = isset($data['userIds']) ? $data['userIds'] : null;
        $this->container['statuses'] = isset($data['statuses']) ? $data['statuses'] : null;
        $this->container['dateRange'] = isset($data['dateRange']) ? $data['dateRange'] : null;
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
     * Gets userIds
     *
     * @return string[]
     */
    public function getUserIds()
    {
        return $this->container['userIds'];
    }

    /**
     * Sets userIds
     *
     * @param string[] $userIds The set of user ids to filter time off requests
     *
     * @return $this
     */
    public function setUserIds($userIds)
    {
        $this->container['userIds'] = $userIds;

        return $this;
    }

    /**
     * Gets statuses
     *
     * @return string[]
     */
    public function getStatuses()
    {
        return $this->container['statuses'];
    }

    /**
     * Sets statuses
     *
     * @param string[] $statuses The set of statuses to filter time off requests
     *
     * @return $this
     */
    public function setStatuses($statuses)
    {
        $allowedValues = $this->getStatusesAllowableValues();
        if (!is_null($statuses) && array_diff($statuses, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'statuses', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['statuses'] = $statuses;

        return $this;
    }

    /**
     * Gets dateRange
     *
     * @return \PureCloudPlatform\Client\V2\Model\DateRange
     */
    public function getDateRange()
    {
        return $this->container['dateRange'];
    }

    /**
     * Sets dateRange
     *
     * @param \PureCloudPlatform\Client\V2\Model\DateRange $dateRange The inclusive range of dates to filter time off requests
     *
     * @return $this
     */
    public function setDateRange($dateRange)
    {
        $this->container['dateRange'] = $dateRange;

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

