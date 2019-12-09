<?php
/**
 * ShiftTradeNotification
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
 * ShiftTradeNotification Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShiftTradeNotification implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShiftTradeNotification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'weekDate' => 'string',
        'tradeId' => 'string',
        'oneSided' => 'bool',
        'newState' => 'string',
        'initiatingUser' => '\PureCloudPlatform\Client\V2\Model\UserReference',
        'initiatingShiftDate' => '\DateTime',
        'receivingUser' => '\PureCloudPlatform\Client\V2\Model\UserReference',
        'receivingShiftDate' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'weekDate' => null,
        'tradeId' => null,
        'oneSided' => null,
        'newState' => null,
        'initiatingUser' => null,
        'initiatingShiftDate' => 'date-time',
        'receivingUser' => null,
        'receivingShiftDate' => 'date-time'
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
        'weekDate' => 'weekDate',
        'tradeId' => 'tradeId',
        'oneSided' => 'oneSided',
        'newState' => 'newState',
        'initiatingUser' => 'initiatingUser',
        'initiatingShiftDate' => 'initiatingShiftDate',
        'receivingUser' => 'receivingUser',
        'receivingShiftDate' => 'receivingShiftDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'weekDate' => 'setWeekDate',
        'tradeId' => 'setTradeId',
        'oneSided' => 'setOneSided',
        'newState' => 'setNewState',
        'initiatingUser' => 'setInitiatingUser',
        'initiatingShiftDate' => 'setInitiatingShiftDate',
        'receivingUser' => 'setReceivingUser',
        'receivingShiftDate' => 'setReceivingShiftDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'weekDate' => 'getWeekDate',
        'tradeId' => 'getTradeId',
        'oneSided' => 'getOneSided',
        'newState' => 'getNewState',
        'initiatingUser' => 'getInitiatingUser',
        'initiatingShiftDate' => 'getInitiatingShiftDate',
        'receivingUser' => 'getReceivingUser',
        'receivingShiftDate' => 'getReceivingShiftDate'
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

    const NEW_STATE_UNMATCHED = 'Unmatched';
    const NEW_STATE_MATCHED = 'Matched';
    const NEW_STATE_APPROVED = 'Approved';
    const NEW_STATE_DENIED = 'Denied';
    const NEW_STATE_EXPIRED = 'Expired';
    const NEW_STATE_CANCELED = 'Canceled';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNewStateAllowableValues()
    {
        return [
            self::NEW_STATE_UNMATCHED,
            self::NEW_STATE_MATCHED,
            self::NEW_STATE_APPROVED,
            self::NEW_STATE_DENIED,
            self::NEW_STATE_EXPIRED,
            self::NEW_STATE_CANCELED,
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
        $this->container['weekDate'] = isset($data['weekDate']) ? $data['weekDate'] : null;
        $this->container['tradeId'] = isset($data['tradeId']) ? $data['tradeId'] : null;
        $this->container['oneSided'] = isset($data['oneSided']) ? $data['oneSided'] : null;
        $this->container['newState'] = isset($data['newState']) ? $data['newState'] : null;
        $this->container['initiatingUser'] = isset($data['initiatingUser']) ? $data['initiatingUser'] : null;
        $this->container['initiatingShiftDate'] = isset($data['initiatingShiftDate']) ? $data['initiatingShiftDate'] : null;
        $this->container['receivingUser'] = isset($data['receivingUser']) ? $data['receivingUser'] : null;
        $this->container['receivingShiftDate'] = isset($data['receivingShiftDate']) ? $data['receivingShiftDate'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getNewStateAllowableValues();
        if (!is_null($this->container['newState']) && !in_array($this->container['newState'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'newState', must be one of '%s'",
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
     * Gets weekDate
     *
     * @return string
     */
    public function getWeekDate()
    {
        return $this->container['weekDate'];
    }

    /**
     * Sets weekDate
     *
     * @param string $weekDate The start date of the schedule with which this trade is associated
     *
     * @return $this
     */
    public function setWeekDate($weekDate)
    {
        $this->container['weekDate'] = $weekDate;

        return $this;
    }

    /**
     * Gets tradeId
     *
     * @return string
     */
    public function getTradeId()
    {
        return $this->container['tradeId'];
    }

    /**
     * Sets tradeId
     *
     * @param string $tradeId The ID of the shift trade
     *
     * @return $this
     */
    public function setTradeId($tradeId)
    {
        $this->container['tradeId'] = $tradeId;

        return $this;
    }

    /**
     * Gets oneSided
     *
     * @return bool
     */
    public function getOneSided()
    {
        return $this->container['oneSided'];
    }

    /**
     * Sets oneSided
     *
     * @param bool $oneSided Whether this is a one sided shift trade
     *
     * @return $this
     */
    public function setOneSided($oneSided)
    {
        $this->container['oneSided'] = $oneSided;

        return $this;
    }

    /**
     * Gets newState
     *
     * @return string
     */
    public function getNewState()
    {
        return $this->container['newState'];
    }

    /**
     * Sets newState
     *
     * @param string $newState The new state of the shift trade, null if there was no change
     *
     * @return $this
     */
    public function setNewState($newState)
    {
        $allowedValues = $this->getNewStateAllowableValues();
        if (!is_null($newState) && !in_array($newState, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'newState', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['newState'] = $newState;

        return $this;
    }

    /**
     * Gets initiatingUser
     *
     * @return \PureCloudPlatform\Client\V2\Model\UserReference
     */
    public function getInitiatingUser()
    {
        return $this->container['initiatingUser'];
    }

    /**
     * Sets initiatingUser
     *
     * @param \PureCloudPlatform\Client\V2\Model\UserReference $initiatingUser The user who initiated the shift trade
     *
     * @return $this
     */
    public function setInitiatingUser($initiatingUser)
    {
        $this->container['initiatingUser'] = $initiatingUser;

        return $this;
    }

    /**
     * Gets initiatingShiftDate
     *
     * @return \DateTime
     */
    public function getInitiatingShiftDate()
    {
        return $this->container['initiatingShiftDate'];
    }

    /**
     * Sets initiatingShiftDate
     *
     * @param \DateTime $initiatingShiftDate The start date and time of the initiating shift. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setInitiatingShiftDate($initiatingShiftDate)
    {
        $this->container['initiatingShiftDate'] = $initiatingShiftDate;

        return $this;
    }

    /**
     * Gets receivingUser
     *
     * @return \PureCloudPlatform\Client\V2\Model\UserReference
     */
    public function getReceivingUser()
    {
        return $this->container['receivingUser'];
    }

    /**
     * Sets receivingUser
     *
     * @param \PureCloudPlatform\Client\V2\Model\UserReference $receivingUser The user on the receiving side of this shift trade (null if not matched)
     *
     * @return $this
     */
    public function setReceivingUser($receivingUser)
    {
        $this->container['receivingUser'] = $receivingUser;

        return $this;
    }

    /**
     * Gets receivingShiftDate
     *
     * @return \DateTime
     */
    public function getReceivingShiftDate()
    {
        return $this->container['receivingShiftDate'];
    }

    /**
     * Sets receivingShiftDate
     *
     * @param \DateTime $receivingShiftDate The start date and time of the receiving shift (null if not matched or if one-sided. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setReceivingShiftDate($receivingShiftDate)
    {
        $this->container['receivingShiftDate'] = $receivingShiftDate;

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


