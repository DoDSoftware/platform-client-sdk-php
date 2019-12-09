<?php
/**
 * Cobrowsesession
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
 * Cobrowsesession Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Cobrowsesession implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Cobrowsesession';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'state' => 'string',
        'id' => 'string',
        'disconnectType' => 'string',
        'self' => '\PureCloudPlatform\Client\V2\Model\Address',
        'cobrowseSessionId' => 'string',
        'cobrowseRole' => 'string',
        'controlling' => 'string[]',
        'viewerUrl' => 'string',
        'providerEventTime' => '\DateTime',
        'startAlertingTime' => '\DateTime',
        'connectedTime' => '\DateTime',
        'disconnectedTime' => '\DateTime',
        'provider' => 'string',
        'peerId' => 'string',
        'segments' => '\PureCloudPlatform\Client\V2\Model\Segment[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'state' => null,
        'id' => null,
        'disconnectType' => null,
        'self' => null,
        'cobrowseSessionId' => null,
        'cobrowseRole' => null,
        'controlling' => null,
        'viewerUrl' => null,
        'providerEventTime' => 'date-time',
        'startAlertingTime' => 'date-time',
        'connectedTime' => 'date-time',
        'disconnectedTime' => 'date-time',
        'provider' => null,
        'peerId' => null,
        'segments' => null
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
        'disconnectType' => 'disconnectType',
        'self' => 'self',
        'cobrowseSessionId' => 'cobrowseSessionId',
        'cobrowseRole' => 'cobrowseRole',
        'controlling' => 'controlling',
        'viewerUrl' => 'viewerUrl',
        'providerEventTime' => 'providerEventTime',
        'startAlertingTime' => 'startAlertingTime',
        'connectedTime' => 'connectedTime',
        'disconnectedTime' => 'disconnectedTime',
        'provider' => 'provider',
        'peerId' => 'peerId',
        'segments' => 'segments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'state' => 'setState',
        'id' => 'setId',
        'disconnectType' => 'setDisconnectType',
        'self' => 'setSelf',
        'cobrowseSessionId' => 'setCobrowseSessionId',
        'cobrowseRole' => 'setCobrowseRole',
        'controlling' => 'setControlling',
        'viewerUrl' => 'setViewerUrl',
        'providerEventTime' => 'setProviderEventTime',
        'startAlertingTime' => 'setStartAlertingTime',
        'connectedTime' => 'setConnectedTime',
        'disconnectedTime' => 'setDisconnectedTime',
        'provider' => 'setProvider',
        'peerId' => 'setPeerId',
        'segments' => 'setSegments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'state' => 'getState',
        'id' => 'getId',
        'disconnectType' => 'getDisconnectType',
        'self' => 'getSelf',
        'cobrowseSessionId' => 'getCobrowseSessionId',
        'cobrowseRole' => 'getCobrowseRole',
        'controlling' => 'getControlling',
        'viewerUrl' => 'getViewerUrl',
        'providerEventTime' => 'getProviderEventTime',
        'startAlertingTime' => 'getStartAlertingTime',
        'connectedTime' => 'getConnectedTime',
        'disconnectedTime' => 'getDisconnectedTime',
        'provider' => 'getProvider',
        'peerId' => 'getPeerId',
        'segments' => 'getSegments'
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
    const STATE_SCHEDULED = 'scheduled';
    const STATE_NONE = 'none';
    const DISCONNECT_TYPE_ENDPOINT = 'endpoint';
    const DISCONNECT_TYPE_CLIENT = 'client';
    const DISCONNECT_TYPE_SYSTEM = 'system';
    const DISCONNECT_TYPE_TIMEOUT = 'timeout';
    const DISCONNECT_TYPE_TRANSFER = 'transfer';
    const DISCONNECT_TYPE_TRANSFERCONFERENCE = 'transfer.conference';
    const DISCONNECT_TYPE_TRANSFERCONSULT = 'transfer.consult';
    const DISCONNECT_TYPE_TRANSFERFORWARD = 'transfer.forward';
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
            self::STATE_SCHEDULED,
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
        $this->container['disconnectType'] = isset($data['disconnectType']) ? $data['disconnectType'] : null;
        $this->container['self'] = isset($data['self']) ? $data['self'] : null;
        $this->container['cobrowseSessionId'] = isset($data['cobrowseSessionId']) ? $data['cobrowseSessionId'] : null;
        $this->container['cobrowseRole'] = isset($data['cobrowseRole']) ? $data['cobrowseRole'] : null;
        $this->container['controlling'] = isset($data['controlling']) ? $data['controlling'] : null;
        $this->container['viewerUrl'] = isset($data['viewerUrl']) ? $data['viewerUrl'] : null;
        $this->container['providerEventTime'] = isset($data['providerEventTime']) ? $data['providerEventTime'] : null;
        $this->container['startAlertingTime'] = isset($data['startAlertingTime']) ? $data['startAlertingTime'] : null;
        $this->container['connectedTime'] = isset($data['connectedTime']) ? $data['connectedTime'] : null;
        $this->container['disconnectedTime'] = isset($data['disconnectedTime']) ? $data['disconnectedTime'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['peerId'] = isset($data['peerId']) ? $data['peerId'] : null;
        $this->container['segments'] = isset($data['segments']) ? $data['segments'] : null;
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
     * Gets self
     *
     * @return \PureCloudPlatform\Client\V2\Model\Address
     */
    public function getSelf()
    {
        return $this->container['self'];
    }

    /**
     * Sets self
     *
     * @param \PureCloudPlatform\Client\V2\Model\Address $self Address and name data for a call endpoint.
     *
     * @return $this
     */
    public function setSelf($self)
    {
        $this->container['self'] = $self;

        return $this;
    }

    /**
     * Gets cobrowseSessionId
     *
     * @return string
     */
    public function getCobrowseSessionId()
    {
        return $this->container['cobrowseSessionId'];
    }

    /**
     * Sets cobrowseSessionId
     *
     * @param string $cobrowseSessionId The co-browse session ID.
     *
     * @return $this
     */
    public function setCobrowseSessionId($cobrowseSessionId)
    {
        $this->container['cobrowseSessionId'] = $cobrowseSessionId;

        return $this;
    }

    /**
     * Gets cobrowseRole
     *
     * @return string
     */
    public function getCobrowseRole()
    {
        return $this->container['cobrowseRole'];
    }

    /**
     * Sets cobrowseRole
     *
     * @param string $cobrowseRole This value identifies the role of the co-browse client within the co-browse session (a client is a sharer or a viewer).
     *
     * @return $this
     */
    public function setCobrowseRole($cobrowseRole)
    {
        $this->container['cobrowseRole'] = $cobrowseRole;

        return $this;
    }

    /**
     * Gets controlling
     *
     * @return string[]
     */
    public function getControlling()
    {
        return $this->container['controlling'];
    }

    /**
     * Sets controlling
     *
     * @param string[] $controlling ID of co-browse participants for which this client has been granted control (list is empty if this client cannot control any shared pages).
     *
     * @return $this
     */
    public function setControlling($controlling)
    {
        $this->container['controlling'] = $controlling;

        return $this;
    }

    /**
     * Gets viewerUrl
     *
     * @return string
     */
    public function getViewerUrl()
    {
        return $this->container['viewerUrl'];
    }

    /**
     * Sets viewerUrl
     *
     * @param string $viewerUrl The URL that can be used to open co-browse session in web browser.
     *
     * @return $this
     */
    public function setViewerUrl($viewerUrl)
    {
        $this->container['viewerUrl'] = $viewerUrl;

        return $this;
    }

    /**
     * Gets providerEventTime
     *
     * @return \DateTime
     */
    public function getProviderEventTime()
    {
        return $this->container['providerEventTime'];
    }

    /**
     * Sets providerEventTime
     *
     * @param \DateTime $providerEventTime The time when the provider event which triggered this conversation update happened in the corrected provider clock (milliseconds since 1970-01-01 00:00:00 UTC). Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setProviderEventTime($providerEventTime)
    {
        $this->container['providerEventTime'] = $providerEventTime;

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
     * @param string $provider The source provider for the co-browse session.
     *
     * @return $this
     */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;

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
     * @param \PureCloudPlatform\Client\V2\Model\Segment[] $segments The time line of the participant's call, divided into activity segments.
     *
     * @return $this
     */
    public function setSegments($segments)
    {
        $this->container['segments'] = $segments;

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


