<?php
/**
 * MessageData
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
 * MessageData Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MessageData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MessageData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'providerMessageId' => 'string',
        'timestamp' => '\DateTime',
        'fromAddress' => 'string',
        'toAddress' => 'string',
        'direction' => 'string',
        'messengerType' => 'string',
        'textBody' => 'string',
        'status' => 'string',
        'media' => '\PureCloudPlatform\Client\V2\Model\MessageMedia[]',
        'stickers' => '\PureCloudPlatform\Client\V2\Model\MessageSticker[]',
        'createdBy' => '\PureCloudPlatform\Client\V2\Model\User',
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
        'providerMessageId' => null,
        'timestamp' => 'date-time',
        'fromAddress' => null,
        'toAddress' => null,
        'direction' => null,
        'messengerType' => null,
        'textBody' => null,
        'status' => null,
        'media' => null,
        'stickers' => null,
        'createdBy' => null,
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
        'providerMessageId' => 'providerMessageId',
        'timestamp' => 'timestamp',
        'fromAddress' => 'fromAddress',
        'toAddress' => 'toAddress',
        'direction' => 'direction',
        'messengerType' => 'messengerType',
        'textBody' => 'textBody',
        'status' => 'status',
        'media' => 'media',
        'stickers' => 'stickers',
        'createdBy' => 'createdBy',
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
        'providerMessageId' => 'setProviderMessageId',
        'timestamp' => 'setTimestamp',
        'fromAddress' => 'setFromAddress',
        'toAddress' => 'setToAddress',
        'direction' => 'setDirection',
        'messengerType' => 'setMessengerType',
        'textBody' => 'setTextBody',
        'status' => 'setStatus',
        'media' => 'setMedia',
        'stickers' => 'setStickers',
        'createdBy' => 'setCreatedBy',
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
        'providerMessageId' => 'getProviderMessageId',
        'timestamp' => 'getTimestamp',
        'fromAddress' => 'getFromAddress',
        'toAddress' => 'getToAddress',
        'direction' => 'getDirection',
        'messengerType' => 'getMessengerType',
        'textBody' => 'getTextBody',
        'status' => 'getStatus',
        'media' => 'getMedia',
        'stickers' => 'getStickers',
        'createdBy' => 'getCreatedBy',
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

    const DIRECTION_INBOUND = 'inbound';
    const DIRECTION_OUTBOUND = 'outbound';
    const MESSENGER_TYPE_SMS = 'sms';
    const MESSENGER_TYPE_FACEBOOK = 'facebook';
    const MESSENGER_TYPE_TWITTER = 'twitter';
    const MESSENGER_TYPE_LINE = 'line';
    const MESSENGER_TYPE_WHATSAPP = 'whatsapp';
    const STATUS_QUEUED = 'queued';
    const STATUS_SENT = 'sent';
    const STATUS_FAILED = 'failed';
    const STATUS_RECEIVED = 'received';
    const STATUS_DELIVERY_SUCCESS = 'delivery-success';
    const STATUS_DELIVERY_FAILED = 'delivery-failed';
    const STATUS_READ = 'read';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDirectionAllowableValues()
    {
        return [
            self::DIRECTION_INBOUND,
            self::DIRECTION_OUTBOUND,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMessengerTypeAllowableValues()
    {
        return [
            self::MESSENGER_TYPE_SMS,
            self::MESSENGER_TYPE_FACEBOOK,
            self::MESSENGER_TYPE_TWITTER,
            self::MESSENGER_TYPE_LINE,
            self::MESSENGER_TYPE_WHATSAPP,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_QUEUED,
            self::STATUS_SENT,
            self::STATUS_FAILED,
            self::STATUS_RECEIVED,
            self::STATUS_DELIVERY_SUCCESS,
            self::STATUS_DELIVERY_FAILED,
            self::STATUS_READ,
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
        $this->container['providerMessageId'] = isset($data['providerMessageId']) ? $data['providerMessageId'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['fromAddress'] = isset($data['fromAddress']) ? $data['fromAddress'] : null;
        $this->container['toAddress'] = isset($data['toAddress']) ? $data['toAddress'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['messengerType'] = isset($data['messengerType']) ? $data['messengerType'] : null;
        $this->container['textBody'] = isset($data['textBody']) ? $data['textBody'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['media'] = isset($data['media']) ? $data['media'] : null;
        $this->container['stickers'] = isset($data['stickers']) ? $data['stickers'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
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

        if ($this->container['timestamp'] === null) {
            $invalidProperties[] = "'timestamp' can't be null";
        }
        $allowedValues = $this->getDirectionAllowableValues();
        if (!is_null($this->container['direction']) && !in_array($this->container['direction'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'direction', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMessengerTypeAllowableValues();
        if (!is_null($this->container['messengerType']) && !in_array($this->container['messengerType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'messengerType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['textBody'] === null) {
            $invalidProperties[] = "'textBody' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
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
     * Gets providerMessageId
     *
     * @return string
     */
    public function getProviderMessageId()
    {
        return $this->container['providerMessageId'];
    }

    /**
     * Sets providerMessageId
     *
     * @param string $providerMessageId The unique identifier of the message from provider
     *
     * @return $this
     */
    public function setProviderMessageId($providerMessageId)
    {
        $this->container['providerMessageId'] = $providerMessageId;

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
     * @param \DateTime $timestamp The time when the message was received or sent. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets fromAddress
     *
     * @return string
     */
    public function getFromAddress()
    {
        return $this->container['fromAddress'];
    }

    /**
     * Sets fromAddress
     *
     * @param string $fromAddress The sender of the text message.
     *
     * @return $this
     */
    public function setFromAddress($fromAddress)
    {
        $this->container['fromAddress'] = $fromAddress;

        return $this;
    }

    /**
     * Gets toAddress
     *
     * @return string
     */
    public function getToAddress()
    {
        return $this->container['toAddress'];
    }

    /**
     * Sets toAddress
     *
     * @param string $toAddress The recipient of the text message.
     *
     * @return $this
     */
    public function setToAddress($toAddress)
    {
        $this->container['toAddress'] = $toAddress;

        return $this;
    }

    /**
     * Gets direction
     *
     * @return string
     */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
     * Sets direction
     *
     * @param string $direction The direction of the message.
     *
     * @return $this
     */
    public function setDirection($direction)
    {
        $allowedValues = $this->getDirectionAllowableValues();
        if (!is_null($direction) && !in_array($direction, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'direction', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['direction'] = $direction;

        return $this;
    }

    /**
     * Gets messengerType
     *
     * @return string
     */
    public function getMessengerType()
    {
        return $this->container['messengerType'];
    }

    /**
     * Sets messengerType
     *
     * @param string $messengerType Type of text messenger.
     *
     * @return $this
     */
    public function setMessengerType($messengerType)
    {
        $allowedValues = $this->getMessengerTypeAllowableValues();
        if (!is_null($messengerType) && !in_array($messengerType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'messengerType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['messengerType'] = $messengerType;

        return $this;
    }

    /**
     * Gets textBody
     *
     * @return string
     */
    public function getTextBody()
    {
        return $this->container['textBody'];
    }

    /**
     * Sets textBody
     *
     * @param string $textBody The body of the text message.
     *
     * @return $this
     */
    public function setTextBody($textBody)
    {
        $this->container['textBody'] = $textBody;

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
     * @param string $status The status of the message.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
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
     * Gets media
     *
     * @return \PureCloudPlatform\Client\V2\Model\MessageMedia[]
     */
    public function getMedia()
    {
        return $this->container['media'];
    }

    /**
     * Sets media
     *
     * @param \PureCloudPlatform\Client\V2\Model\MessageMedia[] $media The media details associated to a message.
     *
     * @return $this
     */
    public function setMedia($media)
    {
        $this->container['media'] = $media;

        return $this;
    }

    /**
     * Gets stickers
     *
     * @return \PureCloudPlatform\Client\V2\Model\MessageSticker[]
     */
    public function getStickers()
    {
        return $this->container['stickers'];
    }

    /**
     * Sets stickers
     *
     * @param \PureCloudPlatform\Client\V2\Model\MessageSticker[] $stickers The sticker details associated to a message.
     *
     * @return $this
     */
    public function setStickers($stickers)
    {
        $this->container['stickers'] = $stickers;

        return $this;
    }

    /**
     * Gets createdBy
     *
     * @return \PureCloudPlatform\Client\V2\Model\User
     */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
     * Sets createdBy
     *
     * @param \PureCloudPlatform\Client\V2\Model\User $createdBy User who sent this message.
     *
     * @return $this
     */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;

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


