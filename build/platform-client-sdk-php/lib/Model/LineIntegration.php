<?php
/**
 * LineIntegration
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
 * LineIntegration Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LineIntegration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LineIntegration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'channelId' => 'string',
        'webhookUri' => 'string',
        'status' => 'string',
        'recipient' => '\PureCloudPlatform\Client\V2\Model\DomainEntityRef',
        'dateCreated' => '\DateTime',
        'dateModified' => '\DateTime',
        'createdBy' => '\PureCloudPlatform\Client\V2\Model\DomainEntityRef',
        'modifiedBy' => '\PureCloudPlatform\Client\V2\Model\DomainEntityRef',
        'version' => 'int',
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
        'channelId' => null,
        'webhookUri' => 'uri',
        'status' => null,
        'recipient' => null,
        'dateCreated' => 'date-time',
        'dateModified' => 'date-time',
        'createdBy' => null,
        'modifiedBy' => null,
        'version' => 'int32',
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
        'channelId' => 'channelId',
        'webhookUri' => 'webhookUri',
        'status' => 'status',
        'recipient' => 'recipient',
        'dateCreated' => 'dateCreated',
        'dateModified' => 'dateModified',
        'createdBy' => 'createdBy',
        'modifiedBy' => 'modifiedBy',
        'version' => 'version',
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
        'channelId' => 'setChannelId',
        'webhookUri' => 'setWebhookUri',
        'status' => 'setStatus',
        'recipient' => 'setRecipient',
        'dateCreated' => 'setDateCreated',
        'dateModified' => 'setDateModified',
        'createdBy' => 'setCreatedBy',
        'modifiedBy' => 'setModifiedBy',
        'version' => 'setVersion',
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
        'channelId' => 'getChannelId',
        'webhookUri' => 'getWebhookUri',
        'status' => 'getStatus',
        'recipient' => 'getRecipient',
        'dateCreated' => 'getDateCreated',
        'dateModified' => 'getDateModified',
        'createdBy' => 'getCreatedBy',
        'modifiedBy' => 'getModifiedBy',
        'version' => 'getVersion',
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
        $this->container['channelId'] = isset($data['channelId']) ? $data['channelId'] : null;
        $this->container['webhookUri'] = isset($data['webhookUri']) ? $data['webhookUri'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['recipient'] = isset($data['recipient']) ? $data['recipient'] : null;
        $this->container['dateCreated'] = isset($data['dateCreated']) ? $data['dateCreated'] : null;
        $this->container['dateModified'] = isset($data['dateModified']) ? $data['dateModified'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['modifiedBy'] = isset($data['modifiedBy']) ? $data['modifiedBy'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['channelId'] === null) {
            $invalidProperties[] = "'channelId' can't be null";
        }
        if ($this->container['webhookUri'] === null) {
            $invalidProperties[] = "'webhookUri' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
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
     * @param string $id A unique Integration Id
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
     * @param string $name The name of the LINE Integration
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets channelId
     *
     * @return string
     */
    public function getChannelId()
    {
        return $this->container['channelId'];
    }

    /**
     * Sets channelId
     *
     * @param string $channelId The Channel Id from LINE messenger
     *
     * @return $this
     */
    public function setChannelId($channelId)
    {
        $this->container['channelId'] = $channelId;

        return $this;
    }

    /**
     * Gets webhookUri
     *
     * @return string
     */
    public function getWebhookUri()
    {
        return $this->container['webhookUri'];
    }

    /**
     * Sets webhookUri
     *
     * @param string $webhookUri The Webhook URI to be updated in LINE platform
     *
     * @return $this
     */
    public function setWebhookUri($webhookUri)
    {
        $this->container['webhookUri'] = $webhookUri;

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
     * @param string $status The status of the LINE Integration
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets recipient
     *
     * @return \PureCloudPlatform\Client\V2\Model\DomainEntityRef
     */
    public function getRecipient()
    {
        return $this->container['recipient'];
    }

    /**
     * Sets recipient
     *
     * @param \PureCloudPlatform\Client\V2\Model\DomainEntityRef $recipient The recipient associated to the Line Integration. This recipient is used to associate a flow to an integration
     *
     * @return $this
     */
    public function setRecipient($recipient)
    {
        $this->container['recipient'] = $recipient;

        return $this;
    }

    /**
     * Gets dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->container['dateCreated'];
    }

    /**
     * Sets dateCreated
     *
     * @param \DateTime $dateCreated Date this Integration was created. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setDateCreated($dateCreated)
    {
        $this->container['dateCreated'] = $dateCreated;

        return $this;
    }

    /**
     * Gets dateModified
     *
     * @return \DateTime
     */
    public function getDateModified()
    {
        return $this->container['dateModified'];
    }

    /**
     * Sets dateModified
     *
     * @param \DateTime $dateModified Date this Integration was modified. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setDateModified($dateModified)
    {
        $this->container['dateModified'] = $dateModified;

        return $this;
    }

    /**
     * Gets createdBy
     *
     * @return \PureCloudPlatform\Client\V2\Model\DomainEntityRef
     */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
     * Sets createdBy
     *
     * @param \PureCloudPlatform\Client\V2\Model\DomainEntityRef $createdBy User reference that created this Integration
     *
     * @return $this
     */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;

        return $this;
    }

    /**
     * Gets modifiedBy
     *
     * @return \PureCloudPlatform\Client\V2\Model\DomainEntityRef
     */
    public function getModifiedBy()
    {
        return $this->container['modifiedBy'];
    }

    /**
     * Sets modifiedBy
     *
     * @param \PureCloudPlatform\Client\V2\Model\DomainEntityRef $modifiedBy User reference that last modified this Integration
     *
     * @return $this
     */
    public function setModifiedBy($modifiedBy)
    {
        $this->container['modifiedBy'] = $modifiedBy;

        return $this;
    }

    /**
     * Gets version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int $version Version number required for updates.
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

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


