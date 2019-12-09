<?php
/**
 * DurationCondition
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
 * DurationCondition Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DurationCondition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DurationCondition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'durationTarget' => 'string',
        'durationOperator' => 'string',
        'durationRange' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'durationTarget' => null,
        'durationOperator' => null,
        'durationRange' => null
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
        'durationTarget' => 'durationTarget',
        'durationOperator' => 'durationOperator',
        'durationRange' => 'durationRange'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'durationTarget' => 'setDurationTarget',
        'durationOperator' => 'setDurationOperator',
        'durationRange' => 'setDurationRange'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'durationTarget' => 'getDurationTarget',
        'durationOperator' => 'getDurationOperator',
        'durationRange' => 'getDurationRange'
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

    const DURATION_TARGET_DURATION = 'DURATION';
    const DURATION_TARGET_DURATION_RANGE = 'DURATION_RANGE';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDurationTargetAllowableValues()
    {
        return [
            self::DURATION_TARGET_DURATION,
            self::DURATION_TARGET_DURATION_RANGE,
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
        $this->container['durationTarget'] = isset($data['durationTarget']) ? $data['durationTarget'] : null;
        $this->container['durationOperator'] = isset($data['durationOperator']) ? $data['durationOperator'] : null;
        $this->container['durationRange'] = isset($data['durationRange']) ? $data['durationRange'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDurationTargetAllowableValues();
        if (!is_null($this->container['durationTarget']) && !in_array($this->container['durationTarget'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'durationTarget', must be one of '%s'",
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
     * Gets durationTarget
     *
     * @return string
     */
    public function getDurationTarget()
    {
        return $this->container['durationTarget'];
    }

    /**
     * Sets durationTarget
     *
     * @param string $durationTarget durationTarget
     *
     * @return $this
     */
    public function setDurationTarget($durationTarget)
    {
        $allowedValues = $this->getDurationTargetAllowableValues();
        if (!is_null($durationTarget) && !in_array($durationTarget, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'durationTarget', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['durationTarget'] = $durationTarget;

        return $this;
    }

    /**
     * Gets durationOperator
     *
     * @return string
     */
    public function getDurationOperator()
    {
        return $this->container['durationOperator'];
    }

    /**
     * Sets durationOperator
     *
     * @param string $durationOperator durationOperator
     *
     * @return $this
     */
    public function setDurationOperator($durationOperator)
    {
        $this->container['durationOperator'] = $durationOperator;

        return $this;
    }

    /**
     * Gets durationRange
     *
     * @return string
     */
    public function getDurationRange()
    {
        return $this->container['durationRange'];
    }

    /**
     * Sets durationRange
     *
     * @param string $durationRange durationRange
     *
     * @return $this
     */
    public function setDurationRange($durationRange)
    {
        $this->container['durationRange'] = $durationRange;

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


