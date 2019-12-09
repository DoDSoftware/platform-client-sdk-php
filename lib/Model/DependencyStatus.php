<?php
/**
 * DependencyStatus
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
 * DependencyStatus Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DependencyStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DependencyStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'user' => '\PureCloudPlatform\Client\V2\Model\User',
        'client' => '\PureCloudPlatform\Client\V2\Model\DomainEntityRef',
        'buildId' => 'string',
        'dateStarted' => '\DateTime',
        'dateCompleted' => '\DateTime',
        'status' => 'string',
        'failedObjects' => '\PureCloudPlatform\Client\V2\Model\FailedObject[]',
        'selfUri' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'user' => null,
        'client' => null,
        'buildId' => null,
        'dateStarted' => 'date-time',
        'dateCompleted' => 'date-time',
        'status' => null,
        'failedObjects' => null,
        'selfUri' => 'uri'
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
        'name' => 'name',
        'user' => 'user',
        'client' => 'client',
        'buildId' => 'buildId',
        'dateStarted' => 'dateStarted',
        'dateCompleted' => 'dateCompleted',
        'status' => 'status',
        'failedObjects' => 'failedObjects',
        'selfUri' => 'selfUri'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'user' => 'setUser',
        'client' => 'setClient',
        'buildId' => 'setBuildId',
        'dateStarted' => 'setDateStarted',
        'dateCompleted' => 'setDateCompleted',
        'status' => 'setStatus',
        'failedObjects' => 'setFailedObjects',
        'selfUri' => 'setSelfUri'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'user' => 'getUser',
        'client' => 'getClient',
        'buildId' => 'getBuildId',
        'dateStarted' => 'getDateStarted',
        'dateCompleted' => 'getDateCompleted',
        'status' => 'getStatus',
        'failedObjects' => 'getFailedObjects',
        'selfUri' => 'getSelfUri'
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

    const STATUS_BUILDINITIALIZING = 'BUILDINITIALIZING';
    const STATUS_BUILDINPROGRESS = 'BUILDINPROGRESS';
    const STATUS_NOTBUILT = 'NOTBUILT';
    const STATUS_OPERATIONAL = 'OPERATIONAL';
    const STATUS_OPERATIONALNEEDSREBUILD = 'OPERATIONALNEEDSREBUILD';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_BUILDINITIALIZING,
            self::STATUS_BUILDINPROGRESS,
            self::STATUS_NOTBUILT,
            self::STATUS_OPERATIONAL,
            self::STATUS_OPERATIONALNEEDSREBUILD,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['client'] = isset($data['client']) ? $data['client'] : null;
        $this->container['buildId'] = isset($data['buildId']) ? $data['buildId'] : null;
        $this->container['dateStarted'] = isset($data['dateStarted']) ? $data['dateStarted'] : null;
        $this->container['dateCompleted'] = isset($data['dateCompleted']) ? $data['dateCompleted'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['failedObjects'] = isset($data['failedObjects']) ? $data['failedObjects'] : null;
        $this->container['selfUri'] = isset($data['selfUri']) ? $data['selfUri'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
     * @param string $id The globally unique identifier for the object.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param \PureCloudPlatform\Client\V2\Model\User $user User that initiated the build.
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets client
     *
     * @return \PureCloudPlatform\Client\V2\Model\DomainEntityRef
     */
    public function getClient()
    {
        return $this->container['client'];
    }

    /**
     * Sets client
     *
     * @param \PureCloudPlatform\Client\V2\Model\DomainEntityRef $client OAuth client that initiated the build.
     *
     * @return $this
     */
    public function setClient($client)
    {
        $this->container['client'] = $client;

        return $this;
    }

    /**
     * Gets buildId
     *
     * @return string
     */
    public function getBuildId()
    {
        return $this->container['buildId'];
    }

    /**
     * Sets buildId
     *
     * @param string $buildId buildId
     *
     * @return $this
     */
    public function setBuildId($buildId)
    {
        $this->container['buildId'] = $buildId;

        return $this;
    }

    /**
     * Gets dateStarted
     *
     * @return \DateTime
     */
    public function getDateStarted()
    {
        return $this->container['dateStarted'];
    }

    /**
     * Sets dateStarted
     *
     * @param \DateTime $dateStarted Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setDateStarted($dateStarted)
    {
        $this->container['dateStarted'] = $dateStarted;

        return $this;
    }

    /**
     * Gets dateCompleted
     *
     * @return \DateTime
     */
    public function getDateCompleted()
    {
        return $this->container['dateCompleted'];
    }

    /**
     * Sets dateCompleted
     *
     * @param \DateTime $dateCompleted Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setDateCompleted($dateCompleted)
    {
        $this->container['dateCompleted'] = $dateCompleted;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets failedObjects
     *
     * @return \PureCloudPlatform\Client\V2\Model\FailedObject[]
     */
    public function getFailedObjects()
    {
        return $this->container['failedObjects'];
    }

    /**
     * Sets failedObjects
     *
     * @param \PureCloudPlatform\Client\V2\Model\FailedObject[] $failedObjects failedObjects
     *
     * @return $this
     */
    public function setFailedObjects($failedObjects)
    {
        $this->container['failedObjects'] = $failedObjects;

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

