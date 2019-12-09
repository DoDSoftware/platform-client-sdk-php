<?php
/**
 * RecordingMessagingMessage
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
 * RecordingMessagingMessage Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RecordingMessagingMessage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RecordingMessagingMessage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'from' => 'string',
        'fromUser' => '\PureCloudPlatform\Client\V2\Model\User',
        'fromExternalContact' => '\PureCloudPlatform\Client\V2\Model\ExternalContact',
        'to' => 'string',
        'timestamp' => '\DateTime',
        'id' => 'string',
        'messageText' => 'string',
        'messageMediaAttachments' => '\PureCloudPlatform\Client\V2\Model\MessageMediaAttachment[]',
        'messageStickerAttachments' => '\PureCloudPlatform\Client\V2\Model\MessageStickerAttachment[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'from' => null,
        'fromUser' => null,
        'fromExternalContact' => null,
        'to' => null,
        'timestamp' => 'date-time',
        'id' => null,
        'messageText' => null,
        'messageMediaAttachments' => null,
        'messageStickerAttachments' => null
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
        'from' => 'from',
        'fromUser' => 'fromUser',
        'fromExternalContact' => 'fromExternalContact',
        'to' => 'to',
        'timestamp' => 'timestamp',
        'id' => 'id',
        'messageText' => 'messageText',
        'messageMediaAttachments' => 'messageMediaAttachments',
        'messageStickerAttachments' => 'messageStickerAttachments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'from' => 'setFrom',
        'fromUser' => 'setFromUser',
        'fromExternalContact' => 'setFromExternalContact',
        'to' => 'setTo',
        'timestamp' => 'setTimestamp',
        'id' => 'setId',
        'messageText' => 'setMessageText',
        'messageMediaAttachments' => 'setMessageMediaAttachments',
        'messageStickerAttachments' => 'setMessageStickerAttachments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'from' => 'getFrom',
        'fromUser' => 'getFromUser',
        'fromExternalContact' => 'getFromExternalContact',
        'to' => 'getTo',
        'timestamp' => 'getTimestamp',
        'id' => 'getId',
        'messageText' => 'getMessageText',
        'messageMediaAttachments' => 'getMessageMediaAttachments',
        'messageStickerAttachments' => 'getMessageStickerAttachments'
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
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['fromUser'] = isset($data['fromUser']) ? $data['fromUser'] : null;
        $this->container['fromExternalContact'] = isset($data['fromExternalContact']) ? $data['fromExternalContact'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['messageText'] = isset($data['messageText']) ? $data['messageText'] : null;
        $this->container['messageMediaAttachments'] = isset($data['messageMediaAttachments']) ? $data['messageMediaAttachments'] : null;
        $this->container['messageStickerAttachments'] = isset($data['messageStickerAttachments']) ? $data['messageStickerAttachments'] : null;
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
     * Gets from
     *
     * @return string
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param string $from from
     *
     * @return $this
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets fromUser
     *
     * @return \PureCloudPlatform\Client\V2\Model\User
     */
    public function getFromUser()
    {
        return $this->container['fromUser'];
    }

    /**
     * Sets fromUser
     *
     * @param \PureCloudPlatform\Client\V2\Model\User $fromUser fromUser
     *
     * @return $this
     */
    public function setFromUser($fromUser)
    {
        $this->container['fromUser'] = $fromUser;

        return $this;
    }

    /**
     * Gets fromExternalContact
     *
     * @return \PureCloudPlatform\Client\V2\Model\ExternalContact
     */
    public function getFromExternalContact()
    {
        return $this->container['fromExternalContact'];
    }

    /**
     * Sets fromExternalContact
     *
     * @param \PureCloudPlatform\Client\V2\Model\ExternalContact $fromExternalContact fromExternalContact
     *
     * @return $this
     */
    public function setFromExternalContact($fromExternalContact)
    {
        $this->container['fromExternalContact'] = $fromExternalContact;

        return $this;
    }

    /**
     * Gets to
     *
     * @return string
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param string $to to
     *
     * @return $this
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

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
     * @param \DateTime $timestamp Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
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
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets messageText
     *
     * @return string
     */
    public function getMessageText()
    {
        return $this->container['messageText'];
    }

    /**
     * Sets messageText
     *
     * @param string $messageText messageText
     *
     * @return $this
     */
    public function setMessageText($messageText)
    {
        $this->container['messageText'] = $messageText;

        return $this;
    }

    /**
     * Gets messageMediaAttachments
     *
     * @return \PureCloudPlatform\Client\V2\Model\MessageMediaAttachment[]
     */
    public function getMessageMediaAttachments()
    {
        return $this->container['messageMediaAttachments'];
    }

    /**
     * Sets messageMediaAttachments
     *
     * @param \PureCloudPlatform\Client\V2\Model\MessageMediaAttachment[] $messageMediaAttachments messageMediaAttachments
     *
     * @return $this
     */
    public function setMessageMediaAttachments($messageMediaAttachments)
    {
        $this->container['messageMediaAttachments'] = $messageMediaAttachments;

        return $this;
    }

    /**
     * Gets messageStickerAttachments
     *
     * @return \PureCloudPlatform\Client\V2\Model\MessageStickerAttachment[]
     */
    public function getMessageStickerAttachments()
    {
        return $this->container['messageStickerAttachments'];
    }

    /**
     * Sets messageStickerAttachments
     *
     * @param \PureCloudPlatform\Client\V2\Model\MessageStickerAttachment[] $messageStickerAttachments messageStickerAttachments
     *
     * @return $this
     */
    public function setMessageStickerAttachments($messageStickerAttachments)
    {
        $this->container['messageStickerAttachments'] = $messageStickerAttachments;

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


