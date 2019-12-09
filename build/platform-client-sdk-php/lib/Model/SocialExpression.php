<?php
/**
 * SocialExpression
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
 * SocialExpression Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SocialExpression implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SocialExpression';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'state' => 'string',
        'id' => 'string',
        'socialMediaId' => 'string',
        'socialMediaHub' => 'string',
        'socialUserName' => 'string',
        'previewText' => 'string',
        'recordingId' => 'string',
        'segments' => '\PureCloudPlatform\Client\V2\Model\Segment[]',
        'held' => 'bool',
        'disconnectType' => 'string',
        'startHoldTime' => '\DateTime',
        'startAlertingTime' => '\DateTime',
        'connectedTime' => '\DateTime',
        'disconnectedTime' => '\DateTime',
        'provider' => 'string',
        'scriptId' => 'string',
        'peerId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'state' => null,
        'id' => null,
        'socialMediaId' => null,
        'socialMediaHub' => null,
        'socialUserName' => null,
        'previewText' => null,
        'recordingId' => null,
        'segments' => null,
        'held' => null,
        'disconnectType' => null,
        'startHoldTime' => 'date-time',
        'startAlertingTime' => 'date-time',
        'connectedTime' => 'date-time',
        'disconnectedTime' => 'date-time',
        'provider' => null,
        'scriptId' => null,
        'peerId' => null
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
        'state' => 'state',
        'id' => 'id',
        'socialMediaId' => 'socialMediaId',
        'socialMediaHub' => 'socialMediaHub',
        'socialUserName' => 'socialUserName',
        'previewText' => 'previewText',
        'recordingId' => 'recordingId',
        'segments' => 'segments',
        'held' => 'held',
        'disconnectType' => 'disconnectType',
        'startHoldTime' => 'startHoldTime',
        'startAlertingTime' => 'startAlertingTime',
        'connectedTime' => 'connectedTime',
        'disconnectedTime' => 'disconnectedTime',
        'provider' => 'provider',
        'scriptId' => 'scriptId',
        'peerId' => 'peerId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'state' => 'setState',
        'id' => 'setId',
        'socialMediaId' => 'setSocialMediaId',
        'socialMediaHub' => 'setSocialMediaHub',
        'socialUserName' => 'setSocialUserName',
        'previewText' => 'setPreviewText',
        'recordingId' => 'setRecordingId',
        'segments' => 'setSegments',
        'held' => 'setHeld',
        'disconnectType' => 'setDisconnectType',
        'startHoldTime' => 'setStartHoldTime',
        'startAlertingTime' => 'setStartAlertingTime',
        'connectedTime' => 'setConnectedTime',
        'disconnectedTime' => 'setDisconnectedTime',
        'provider' => 'setProvider',
        'scriptId' => 'setScriptId',
        'peerId' => 'setPeerId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'state' => 'getState',
        'id' => 'getId',
        'socialMediaId' => 'getSocialMediaId',
        'socialMediaHub' => 'getSocialMediaHub',
        'socialUserName' => 'getSocialUserName',
        'previewText' => 'getPreviewText',
        'recordingId' => 'getRecordingId',
        'segments' => 'getSegments',
        'held' => 'getHeld',
        'disconnectType' => 'getDisconnectType',
        'startHoldTime' => 'getStartHoldTime',
        'startAlertingTime' => 'getStartAlertingTime',
        'connectedTime' => 'getConnectedTime',
        'disconnectedTime' => 'getDisconnectedTime',
        'provider' => 'getProvider',
        'scriptId' => 'getScriptId',
        'peerId' => 'getPeerId'
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

    const STATE_ALERTING = 'alerting';
    const STATE_DIALING = 'dialing';
    const STATE_CONTACTING = 'contacting';
    const STATE_OFFERING = 'offering';
    const STATE_CONNECTED = 'connected';
    const STATE_DISCONNECTED = 'disconnected';
    const STATE_TERMINATED = 'terminated';
    const STATE_NONE = 'none';
    const DISCONNECT_TYPE_ENDPOINT = 'endpoint';
    const DISCONNECT_TYPE_CLIENT = 'client';
    const DISCONNECT_TYPE_SYSTEM = 'system';
    const DISCONNECT_TYPE_TIMEOUT = 'timeout';
    const DISCONNECT_TYPE_TRANSFER = 'transfer';
    const DISCONNECT_TYPE_TRANSFERCONFERENCE = 'transfer.conference';
    const DISCONNECT_TYPE_TRANSFERCONSULT = 'transfer.consult';
    const DISCONNECT_TYPE_TRANSFERFORWARD = 'transfer.forward';
    const DISCONNECT_TYPE_TRANSFERNOANSWER = 'transfer.noanswer';
    const DISCONNECT_TYPE_TRANSFERNOTAVAILABLE = 'transfer.notavailable';
    const DISCONNECT_TYPE_TRANSPORTFAILURE = 'transport.failure';
    const DISCONNECT_TYPE_ERROR = 'error';
    const DISCONNECT_TYPE_PEER = 'peer';
    const DISCONNECT_TYPE_OTHER = 'other';
    const DISCONNECT_TYPE_SPAM = 'spam';
    const DISCONNECT_TYPE_UNCALLABLE = 'uncallable';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_ALERTING,
            self::STATE_DIALING,
            self::STATE_CONTACTING,
            self::STATE_OFFERING,
            self::STATE_CONNECTED,
            self::STATE_DISCONNECTED,
            self::STATE_TERMINATED,
            self::STATE_NONE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDisconnectTypeAllowableValues()
    {
        return [
            self::DISCONNECT_TYPE_ENDPOINT,
            self::DISCONNECT_TYPE_CLIENT,
            self::DISCONNECT_TYPE_SYSTEM,
            self::DISCONNECT_TYPE_TIMEOUT,
            self::DISCONNECT_TYPE_TRANSFER,
            self::DISCONNECT_TYPE_TRANSFERCONFERENCE,
            self::DISCONNECT_TYPE_TRANSFERCONSULT,
            self::DISCONNECT_TYPE_TRANSFERFORWARD,
            self::DISCONNECT_TYPE_TRANSFERNOANSWER,
            self::DISCONNECT_TYPE_TRANSFERNOTAVAILABLE,
            self::DISCONNECT_TYPE_TRANSPORTFAILURE,
            self::DISCONNECT_TYPE_ERROR,
            self::DISCONNECT_TYPE_PEER,
            self::DISCONNECT_TYPE_OTHER,
            self::DISCONNECT_TYPE_SPAM,
            self::DISCONNECT_TYPE_UNCALLABLE,
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
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['socialMediaId'] = isset($data['socialMediaId']) ? $data['socialMediaId'] : null;
        $this->container['socialMediaHub'] = isset($data['socialMediaHub']) ? $data['socialMediaHub'] : null;
        $this->container['socialUserName'] = isset($data['socialUserName']) ? $data['socialUserName'] : null;
        $this->container['previewText'] = isset($data['previewText']) ? $data['previewText'] : null;
        $this->container['recordingId'] = isset($data['recordingId']) ? $data['recordingId'] : null;
        $this->container['segments'] = isset($data['segments']) ? $data['segments'] : null;
        $this->container['held'] = isset($data['held']) ? $data['held'] : null;
        $this->container['disconnectType'] = isset($data['disconnectType']) ? $data['disconnectType'] : null;
        $this->container['startHoldTime'] = isset($data['startHoldTime']) ? $data['startHoldTime'] : null;
        $this->container['startAlertingTime'] = isset($data['startAlertingTime']) ? $data['startAlertingTime'] : null;
        $this->container['connectedTime'] = isset($data['connectedTime']) ? $data['connectedTime'] : null;
        $this->container['disconnectedTime'] = isset($data['disconnectedTime']) ? $data['disconnectedTime'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['scriptId'] = isset($data['scriptId']) ? $data['scriptId'] : null;
        $this->container['peerId'] = isset($data['peerId']) ? $data['peerId'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDisconnectTypeAllowableValues();
        if (!is_null($this->container['disconnectType']) && !in_array($this->container['disconnectType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'disconnectType', must be one of '%s'",
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
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state The connection state of this communication.
     *
     * @return $this
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($state) && !in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

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
     * @param string $id A globally unique identifier for this communication.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets socialMediaId
     *
     * @return string
     */
    public function getSocialMediaId()
    {
        return $this->container['socialMediaId'];
    }

    /**
     * Sets socialMediaId
     *
     * @param string $socialMediaId A globally unique identifier for the social media.
     *
     * @return $this
     */
    public function setSocialMediaId($socialMediaId)
    {
        $this->container['socialMediaId'] = $socialMediaId;

        return $this;
    }

    /**
     * Gets socialMediaHub
     *
     * @return string
     */
    public function getSocialMediaHub()
    {
        return $this->container['socialMediaHub'];
    }

    /**
     * Sets socialMediaHub
     *
     * @param string $socialMediaHub The social network of the communication
     *
     * @return $this
     */
    public function setSocialMediaHub($socialMediaHub)
    {
        $this->container['socialMediaHub'] = $socialMediaHub;

        return $this;
    }

    /**
     * Gets socialUserName
     *
     * @return string
     */
    public function getSocialUserName()
    {
        return $this->container['socialUserName'];
    }

    /**
     * Sets socialUserName
     *
     * @param string $socialUserName The user name for the communication.
     *
     * @return $this
     */
    public function setSocialUserName($socialUserName)
    {
        $this->container['socialUserName'] = $socialUserName;

        return $this;
    }

    /**
     * Gets previewText
     *
     * @return string
     */
    public function getPreviewText()
    {
        return $this->container['previewText'];
    }

    /**
     * Sets previewText
     *
     * @param string $previewText The text preview of the communication contents
     *
     * @return $this
     */
    public function setPreviewText($previewText)
    {
        $this->container['previewText'] = $previewText;

        return $this;
    }

    /**
     * Gets recordingId
     *
     * @return string
     */
    public function getRecordingId()
    {
        return $this->container['recordingId'];
    }

    /**
     * Sets recordingId
     *
     * @param string $recordingId A globally unique identifier for the recording associated with this chat.
     *
     * @return $this
     */
    public function setRecordingId($recordingId)
    {
        $this->container['recordingId'] = $recordingId;

        return $this;
    }

    /**
     * Gets segments
     *
     * @return \PureCloudPlatform\Client\V2\Model\Segment[]
     */
    public function getSegments()
    {
        return $this->container['segments'];
    }

    /**
     * Sets segments
     *
     * @param \PureCloudPlatform\Client\V2\Model\Segment[] $segments The time line of the participant's chat, divided into activity segments.
     *
     * @return $this
     */
    public function setSegments($segments)
    {
        $this->container['segments'] = $segments;

        return $this;
    }

    /**
     * Gets held
     *
     * @return bool
     */
    public function getHeld()
    {
        return $this->container['held'];
    }

    /**
     * Sets held
     *
     * @param bool $held True if this call is held and the person on this side hears silence.
     *
     * @return $this
     */
    public function setHeld($held)
    {
        $this->container['held'] = $held;

        return $this;
    }

    /**
     * Gets disconnectType
     *
     * @return string
     */
    public function getDisconnectType()
    {
        return $this->container['disconnectType'];
    }

    /**
     * Sets disconnectType
     *
     * @param string $disconnectType System defined string indicating what caused the communication to disconnect. Will be null until the communication disconnects.
     *
     * @return $this
     */
    public function setDisconnectType($disconnectType)
    {
        $allowedValues = $this->getDisconnectTypeAllowableValues();
        if (!is_null($disconnectType) && !in_array($disconnectType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'disconnectType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['disconnectType'] = $disconnectType;

        return $this;
    }

    /**
     * Gets startHoldTime
     *
     * @return \DateTime
     */
    public function getStartHoldTime()
    {
        return $this->container['startHoldTime'];
    }

    /**
     * Sets startHoldTime
     *
     * @param \DateTime $startHoldTime The timestamp the chat was placed on hold in the cloud clock if the chat is currently on hold. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setStartHoldTime($startHoldTime)
    {
        $this->container['startHoldTime'] = $startHoldTime;

        return $this;
    }

    /**
     * Gets startAlertingTime
     *
     * @return \DateTime
     */
    public function getStartAlertingTime()
    {
        return $this->container['startAlertingTime'];
    }

    /**
     * Sets startAlertingTime
     *
     * @param \DateTime $startAlertingTime The timestamp the communication has when it is first put into an alerting state. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setStartAlertingTime($startAlertingTime)
    {
        $this->container['startAlertingTime'] = $startAlertingTime;

        return $this;
    }

    /**
     * Gets connectedTime
     *
     * @return \DateTime
     */
    public function getConnectedTime()
    {
        return $this->container['connectedTime'];
    }

    /**
     * Sets connectedTime
     *
     * @param \DateTime $connectedTime The timestamp when this communication was connected in the cloud clock. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setConnectedTime($connectedTime)
    {
        $this->container['connectedTime'] = $connectedTime;

        return $this;
    }

    /**
     * Gets disconnectedTime
     *
     * @return \DateTime
     */
    public function getDisconnectedTime()
    {
        return $this->container['disconnectedTime'];
    }

    /**
     * Sets disconnectedTime
     *
     * @param \DateTime $disconnectedTime The timestamp when this communication disconnected from the conversation in the provider clock. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setDisconnectedTime($disconnectedTime)
    {
        $this->container['disconnectedTime'] = $disconnectedTime;

        return $this;
    }

    /**
     * Gets provider
     *
     * @return string
     */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
     * Sets provider
     *
     * @param string $provider The source provider for the social expression.
     *
     * @return $this
     */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;

        return $this;
    }

    /**
     * Gets scriptId
     *
     * @return string
     */
    public function getScriptId()
    {
        return $this->container['scriptId'];
    }

    /**
     * Sets scriptId
     *
     * @param string $scriptId The UUID of the script to use.
     *
     * @return $this
     */
    public function setScriptId($scriptId)
    {
        $this->container['scriptId'] = $scriptId;

        return $this;
    }

    /**
     * Gets peerId
     *
     * @return string
     */
    public function getPeerId()
    {
        return $this->container['peerId'];
    }

    /**
     * Sets peerId
     *
     * @param string $peerId The id of the peer communication corresponding to a matching leg for this communication.
     *
     * @return $this
     */
    public function setPeerId($peerId)
    {
        $this->container['peerId'] = $peerId;

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


