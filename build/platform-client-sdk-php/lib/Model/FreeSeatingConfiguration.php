<?php
/**
 * FreeSeatingConfiguration
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
 * FreeSeatingConfiguration Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FreeSeatingConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FreeSeatingConfiguration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'freeSeatingState' => 'string',
        'ttlMinutes' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'freeSeatingState' => null,
        'ttlMinutes' => 'int32'
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
        'freeSeatingState' => 'freeSeatingState',
        'ttlMinutes' => 'ttlMinutes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'freeSeatingState' => 'setFreeSeatingState',
        'ttlMinutes' => 'setTtlMinutes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'freeSeatingState' => 'getFreeSeatingState',
        'ttlMinutes' => 'getTtlMinutes'
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

    const FREE_SEATING_STATE_ON = 'ON';
    const FREE_SEATING_STATE_OFF = 'OFF';
    const FREE_SEATING_STATE_PARTIAL = 'PARTIAL';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFreeSeatingStateAllowableValues()
    {
        return [
            self::FREE_SEATING_STATE_ON,
            self::FREE_SEATING_STATE_OFF,
            self::FREE_SEATING_STATE_PARTIAL,
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
        $this->container['freeSeatingState'] = isset($data['freeSeatingState']) ? $data['freeSeatingState'] : null;
        $this->container['ttlMinutes'] = isset($data['ttlMinutes']) ? $data['ttlMinutes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getFreeSeatingStateAllowableValues();
        if (!is_null($this->container['freeSeatingState']) && !in_array($this->container['freeSeatingState'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'freeSeatingState', must be one of '%s'",
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
     * Gets freeSeatingState
     *
     * @return string
     */
    public function getFreeSeatingState()
    {
        return $this->container['freeSeatingState'];
    }

    /**
     * Sets freeSeatingState
     *
     * @param string $freeSeatingState The FreeSeatingState for FreeSeatingConfiguration. Can be ON, OFF, or PARTIAL. ON meaning disassociate the user after the ttl expires, OFF meaning never disassociate the user, and PARTIAL meaning only disassociate when a user explicitly clicks log out.
     *
     * @return $this
     */
    public function setFreeSeatingState($freeSeatingState)
    {
        $allowedValues = $this->getFreeSeatingStateAllowableValues();
        if (!is_null($freeSeatingState) && !in_array($freeSeatingState, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'freeSeatingState', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['freeSeatingState'] = $freeSeatingState;

        return $this;
    }

    /**
     * Gets ttlMinutes
     *
     * @return int
     */
    public function getTtlMinutes()
    {
        return $this->container['ttlMinutes'];
    }

    /**
     * Sets ttlMinutes
     *
     * @param int $ttlMinutes The amount of time in minutes until an offline user is disassociated from their station
     *
     * @return $this
     */
    public function setTtlMinutes($ttlMinutes)
    {
        $this->container['ttlMinutes'] = $ttlMinutes;

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


