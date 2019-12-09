<?php
/**
 * IntegrationEvent
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
 * IntegrationEvent Class Doc Comment
 *
 * @category Class
 * @description Describes an event that has happened related to an integration
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IntegrationEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IntegrationEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'selfUri' => 'string',
        'correlationId' => 'string',
        'timestamp' => '\DateTime',
        'level' => 'string',
        'eventCode' => 'string',
        'message' => '\PureCloudPlatform\Client\V2\Model\MessageInfo',
        'entities' => '\PureCloudPlatform\Client\V2\Model\EventEntity[]',
        'contextAttributes' => 'map[string,string]',
        'detailMessage' => '\PureCloudPlatform\Client\V2\Model\MessageInfo',
        'user' => '\PureCloudPlatform\Client\V2\Model\User'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'selfUri' => 'uri',
        'correlationId' => null,
        'timestamp' => 'date-time',
        'level' => null,
        'eventCode' => null,
        'message' => null,
        'entities' => null,
        'contextAttributes' => null,
        'detailMessage' => null,
        'user' => null
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
        'id' => 'id',
        'selfUri' => 'selfUri',
        'correlationId' => 'correlationId',
        'timestamp' => 'timestamp',
        'level' => 'level',
        'eventCode' => 'eventCode',
        'message' => 'message',
        'entities' => 'entities',
        'contextAttributes' => 'contextAttributes',
        'detailMessage' => 'detailMessage',
        'user' => 'user'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'selfUri' => 'setSelfUri',
        'correlationId' => 'setCorrelationId',
        'timestamp' => 'setTimestamp',
        'level' => 'setLevel',
        'eventCode' => 'setEventCode',
        'message' => 'setMessage',
        'entities' => 'setEntities',
        'contextAttributes' => 'setContextAttributes',
        'detailMessage' => 'setDetailMessage',
        'user' => 'setUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'selfUri' => 'getSelfUri',
        'correlationId' => 'getCorrelationId',
        'timestamp' => 'getTimestamp',
        'level' => 'getLevel',
        'eventCode' => 'getEventCode',
        'message' => 'getMessage',
        'entities' => 'getEntities',
        'contextAttributes' => 'getContextAttributes',
        'detailMessage' => 'getDetailMessage',
        'user' => 'getUser'
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

    const LEVEL_INFO = 'INFO';
    const LEVEL_WARN = 'WARN';
    const LEVEL_ERROR = 'ERROR';
    const LEVEL_CRITICAL = 'CRITICAL';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLevelAllowableValues()
    {
        return [
            self::LEVEL_INFO,
            self::LEVEL_WARN,
            self::LEVEL_ERROR,
            self::LEVEL_CRITICAL,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['selfUri'] = isset($data['selfUri']) ? $data['selfUri'] : null;
        $this->container['correlationId'] = isset($data['correlationId']) ? $data['correlationId'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['eventCode'] = isset($data['eventCode']) ? $data['eventCode'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['entities'] = isset($data['entities']) ? $data['entities'] : null;
        $this->container['contextAttributes'] = isset($data['contextAttributes']) ? $data['contextAttributes'] : null;
        $this->container['detailMessage'] = isset($data['detailMessage']) ? $data['detailMessage'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getLevelAllowableValues();
        if (!is_null($this->container['level']) && !in_array($this->container['level'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'level', must be one of '%s'",
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Unique ID for this event
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets selfUri
     *
     * @return string
     */
    public function getSelfUri()
    {
        return $this->container['selfUri'];
    }

    /**
     * Sets selfUri
     *
     * @param string $selfUri The URI for this object
     *
     * @return $this
     */
    public function setSelfUri($selfUri)
    {
        $this->container['selfUri'] = $selfUri;

        return $this;
    }

    /**
     * Gets correlationId
     *
     * @return string
     */
    public function getCorrelationId()
    {
        return $this->container['correlationId'];
    }

    /**
     * Sets correlationId
     *
     * @param string $correlationId Correlation ID for the event
     *
     * @return $this
     */
    public function setCorrelationId($correlationId)
    {
        $this->container['correlationId'] = $correlationId;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param \DateTime $timestamp Time the event occurred. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets level
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     *
     * @param string $level Indicates the severity of the event.
     *
     * @return $this
     */
    public function setLevel($level)
    {
        $allowedValues = $this->getLevelAllowableValues();
        if (!is_null($level) && !in_array($level, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'level', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['level'] = $level;

        return $this;
    }

    /**
     * Gets eventCode
     *
     * @return string
     */
    public function getEventCode()
    {
        return $this->container['eventCode'];
    }

    /**
     * Sets eventCode
     *
     * @param string $eventCode A classification for the event. Suitable for programmatic searching, sorting, or filtering
     *
     * @return $this
     */
    public function setEventCode($eventCode)
    {
        $this->container['eventCode'] = $eventCode;

        return $this;
    }

    /**
     * Gets message
     *
     * @return \PureCloudPlatform\Client\V2\Model\MessageInfo
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param \PureCloudPlatform\Client\V2\Model\MessageInfo $message Message indicating what happened
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets entities
     *
     * @return \PureCloudPlatform\Client\V2\Model\EventEntity[]
     */
    public function getEntities()
    {
        return $this->container['entities'];
    }

    /**
     * Sets entities
     *
     * @param \PureCloudPlatform\Client\V2\Model\EventEntity[] $entities Collection of entities affected by or pertaining to the event (e.g. a list of Integrations or Bridge connectors)
     *
     * @return $this
     */
    public function setEntities($entities)
    {
        $this->container['entities'] = $entities;

        return $this;
    }

    /**
     * Gets contextAttributes
     *
     * @return map[string,string]
     */
    public function getContextAttributes()
    {
        return $this->container['contextAttributes'];
    }

    /**
     * Sets contextAttributes
     *
     * @param map[string,string] $contextAttributes Map of context attributes specific to this event.
     *
     * @return $this
     */
    public function setContextAttributes($contextAttributes)
    {
        $this->container['contextAttributes'] = $contextAttributes;

        return $this;
    }

    /**
     * Gets detailMessage
     *
     * @return \PureCloudPlatform\Client\V2\Model\MessageInfo
     */
    public function getDetailMessage()
    {
        return $this->container['detailMessage'];
    }

    /**
     * Sets detailMessage
     *
     * @param \PureCloudPlatform\Client\V2\Model\MessageInfo $detailMessage Message with additional details about the event. (e.g. an exception cause.)
     *
     * @return $this
     */
    public function setDetailMessage($detailMessage)
    {
        $this->container['detailMessage'] = $detailMessage;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \PureCloudPlatform\Client\V2\Model\User
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \PureCloudPlatform\Client\V2\Model\User $user User that took an action that resulted in the event.
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

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

