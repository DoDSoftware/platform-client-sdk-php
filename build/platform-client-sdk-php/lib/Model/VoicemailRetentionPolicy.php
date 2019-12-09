<?php
/**
 * VoicemailRetentionPolicy
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
 * VoicemailRetentionPolicy Class Doc Comment
 *
 * @category Class
 * @description Governs how the voicemail is retained
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VoicemailRetentionPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VoicemailRetentionPolicy';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'voicemailRetentionPolicyType' => 'string',
        'numberOfDays' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'voicemailRetentionPolicyType' => null,
        'numberOfDays' => 'int32'
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
        'voicemailRetentionPolicyType' => 'voicemailRetentionPolicyType',
        'numberOfDays' => 'numberOfDays'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'voicemailRetentionPolicyType' => 'setVoicemailRetentionPolicyType',
        'numberOfDays' => 'setNumberOfDays'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'voicemailRetentionPolicyType' => 'getVoicemailRetentionPolicyType',
        'numberOfDays' => 'getNumberOfDays'
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

    const VOICEMAIL_RETENTION_POLICY_TYPE_RETAIN_INDEFINITELY = 'RETAIN_INDEFINITELY';
    const VOICEMAIL_RETENTION_POLICY_TYPE_RETAIN_WITH_TTL = 'RETAIN_WITH_TTL';
    const VOICEMAIL_RETENTION_POLICY_TYPE_IMMEDIATE_DELETE = 'IMMEDIATE_DELETE';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVoicemailRetentionPolicyTypeAllowableValues()
    {
        return [
            self::VOICEMAIL_RETENTION_POLICY_TYPE_RETAIN_INDEFINITELY,
            self::VOICEMAIL_RETENTION_POLICY_TYPE_RETAIN_WITH_TTL,
            self::VOICEMAIL_RETENTION_POLICY_TYPE_IMMEDIATE_DELETE,
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
        $this->container['voicemailRetentionPolicyType'] = isset($data['voicemailRetentionPolicyType']) ? $data['voicemailRetentionPolicyType'] : null;
        $this->container['numberOfDays'] = isset($data['numberOfDays']) ? $data['numberOfDays'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getVoicemailRetentionPolicyTypeAllowableValues();
        if (!is_null($this->container['voicemailRetentionPolicyType']) && !in_array($this->container['voicemailRetentionPolicyType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'voicemailRetentionPolicyType', must be one of '%s'",
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
     * Gets voicemailRetentionPolicyType
     *
     * @return string
     */
    public function getVoicemailRetentionPolicyType()
    {
        return $this->container['voicemailRetentionPolicyType'];
    }

    /**
     * Sets voicemailRetentionPolicyType
     *
     * @param string $voicemailRetentionPolicyType The retention policy type
     *
     * @return $this
     */
    public function setVoicemailRetentionPolicyType($voicemailRetentionPolicyType)
    {
        $allowedValues = $this->getVoicemailRetentionPolicyTypeAllowableValues();
        if (!is_null($voicemailRetentionPolicyType) && !in_array($voicemailRetentionPolicyType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'voicemailRetentionPolicyType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['voicemailRetentionPolicyType'] = $voicemailRetentionPolicyType;

        return $this;
    }

    /**
     * Gets numberOfDays
     *
     * @return int
     */
    public function getNumberOfDays()
    {
        return $this->container['numberOfDays'];
    }

    /**
     * Sets numberOfDays
     *
     * @param int $numberOfDays If retentionPolicyType == RETAIN_WITH_TTL, then this value represents the number of days for the TTL
     *
     * @return $this
     */
    public function setNumberOfDays($numberOfDays)
    {
        $this->container['numberOfDays'] = $numberOfDays;

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


