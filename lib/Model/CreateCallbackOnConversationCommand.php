<?php
/**
 * CreateCallbackOnConversationCommand
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
 * CreateCallbackOnConversationCommand Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateCallbackOnConversationCommand implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateCallbackOnConversationCommand';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'scriptId' => 'string',
        'queueId' => 'string',
        'routingData' => '\PureCloudPlatform\Client\V2\Model\RoutingData',
        'callbackUserName' => 'string',
        'callbackNumbers' => 'string[]',
        'callbackScheduledTime' => '\DateTime',
        'countryCode' => 'string',
        'validateCallbackNumbers' => 'bool',
        'data' => 'map[string,string]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'scriptId' => null,
        'queueId' => null,
        'routingData' => null,
        'callbackUserName' => null,
        'callbackNumbers' => null,
        'callbackScheduledTime' => 'date-time',
        'countryCode' => null,
        'validateCallbackNumbers' => null,
        'data' => null
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
        'scriptId' => 'scriptId',
        'queueId' => 'queueId',
        'routingData' => 'routingData',
        'callbackUserName' => 'callbackUserName',
        'callbackNumbers' => 'callbackNumbers',
        'callbackScheduledTime' => 'callbackScheduledTime',
        'countryCode' => 'countryCode',
        'validateCallbackNumbers' => 'validateCallbackNumbers',
        'data' => 'data'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'scriptId' => 'setScriptId',
        'queueId' => 'setQueueId',
        'routingData' => 'setRoutingData',
        'callbackUserName' => 'setCallbackUserName',
        'callbackNumbers' => 'setCallbackNumbers',
        'callbackScheduledTime' => 'setCallbackScheduledTime',
        'countryCode' => 'setCountryCode',
        'validateCallbackNumbers' => 'setValidateCallbackNumbers',
        'data' => 'setData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'scriptId' => 'getScriptId',
        'queueId' => 'getQueueId',
        'routingData' => 'getRoutingData',
        'callbackUserName' => 'getCallbackUserName',
        'callbackNumbers' => 'getCallbackNumbers',
        'callbackScheduledTime' => 'getCallbackScheduledTime',
        'countryCode' => 'getCountryCode',
        'validateCallbackNumbers' => 'getValidateCallbackNumbers',
        'data' => 'getData'
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
        $this->container['scriptId'] = isset($data['scriptId']) ? $data['scriptId'] : null;
        $this->container['queueId'] = isset($data['queueId']) ? $data['queueId'] : null;
        $this->container['routingData'] = isset($data['routingData']) ? $data['routingData'] : null;
        $this->container['callbackUserName'] = isset($data['callbackUserName']) ? $data['callbackUserName'] : null;
        $this->container['callbackNumbers'] = isset($data['callbackNumbers']) ? $data['callbackNumbers'] : null;
        $this->container['callbackScheduledTime'] = isset($data['callbackScheduledTime']) ? $data['callbackScheduledTime'] : null;
        $this->container['countryCode'] = isset($data['countryCode']) ? $data['countryCode'] : null;
        $this->container['validateCallbackNumbers'] = isset($data['validateCallbackNumbers']) ? $data['validateCallbackNumbers'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['callbackNumbers'] === null) {
            $invalidProperties[] = "'callbackNumbers' can't be null";
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
     * @param string $scriptId The identifier of the script to be used for the callback
     *
     * @return $this
     */
    public function setScriptId($scriptId)
    {
        $this->container['scriptId'] = $scriptId;

        return $this;
    }

    /**
     * Gets queueId
     *
     * @return string
     */
    public function getQueueId()
    {
        return $this->container['queueId'];
    }

    /**
     * Sets queueId
     *
     * @param string $queueId The identifier of the queue to be used for the callback. Either queueId or routingData is required.
     *
     * @return $this
     */
    public function setQueueId($queueId)
    {
        $this->container['queueId'] = $queueId;

        return $this;
    }

    /**
     * Gets routingData
     *
     * @return \PureCloudPlatform\Client\V2\Model\RoutingData
     */
    public function getRoutingData()
    {
        return $this->container['routingData'];
    }

    /**
     * Sets routingData
     *
     * @param \PureCloudPlatform\Client\V2\Model\RoutingData $routingData The routing data to be used for the callback. Either queueId or routingData is required.
     *
     * @return $this
     */
    public function setRoutingData($routingData)
    {
        $this->container['routingData'] = $routingData;

        return $this;
    }

    /**
     * Gets callbackUserName
     *
     * @return string
     */
    public function getCallbackUserName()
    {
        return $this->container['callbackUserName'];
    }

    /**
     * Sets callbackUserName
     *
     * @param string $callbackUserName The name of the party to be called back.
     *
     * @return $this
     */
    public function setCallbackUserName($callbackUserName)
    {
        $this->container['callbackUserName'] = $callbackUserName;

        return $this;
    }

    /**
     * Gets callbackNumbers
     *
     * @return string[]
     */
    public function getCallbackNumbers()
    {
        return $this->container['callbackNumbers'];
    }

    /**
     * Sets callbackNumbers
     *
     * @param string[] $callbackNumbers A list of phone numbers for the callback.
     *
     * @return $this
     */
    public function setCallbackNumbers($callbackNumbers)
    {
        $this->container['callbackNumbers'] = $callbackNumbers;

        return $this;
    }

    /**
     * Gets callbackScheduledTime
     *
     * @return \DateTime
     */
    public function getCallbackScheduledTime()
    {
        return $this->container['callbackScheduledTime'];
    }

    /**
     * Sets callbackScheduledTime
     *
     * @param \DateTime $callbackScheduledTime The scheduled date-time for the callback as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setCallbackScheduledTime($callbackScheduledTime)
    {
        $this->container['callbackScheduledTime'] = $callbackScheduledTime;

        return $this;
    }

    /**
     * Gets countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['countryCode'];
    }

    /**
     * Sets countryCode
     *
     * @param string $countryCode The country code to be associated with the callback numbers.
     *
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        $this->container['countryCode'] = $countryCode;

        return $this;
    }

    /**
     * Gets validateCallbackNumbers
     *
     * @return bool
     */
    public function getValidateCallbackNumbers()
    {
        return $this->container['validateCallbackNumbers'];
    }

    /**
     * Sets validateCallbackNumbers
     *
     * @param bool $validateCallbackNumbers Whether or not to validate the callback numbers for phone number format.
     *
     * @return $this
     */
    public function setValidateCallbackNumbers($validateCallbackNumbers)
    {
        $this->container['validateCallbackNumbers'] = $validateCallbackNumbers;

        return $this;
    }

    /**
     * Gets data
     *
     * @return map[string,string]
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param map[string,string] $data A map of key-value pairs containing additional data that can be associated to the callback. These values will appear in the attributes property on the conversation participant. Example: { \"notes\": \"ready to close the deal!\", \"customerPreferredName\": \"Doc\" }
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

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

