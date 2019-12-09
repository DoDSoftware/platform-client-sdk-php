<?php
/**
 * SmsPhoneNumberProvision
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
 * SmsPhoneNumberProvision Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmsPhoneNumberProvision implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SmsPhoneNumberProvision';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'phoneNumber' => 'string',
        'phoneNumberType' => 'string',
        'countryCode' => 'string',
        'addressId' => 'string',
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
        'phoneNumber' => null,
        'phoneNumberType' => null,
        'countryCode' => null,
        'addressId' => null,
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
        'phoneNumber' => 'phoneNumber',
        'phoneNumberType' => 'phoneNumberType',
        'countryCode' => 'countryCode',
        'addressId' => 'addressId',
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
        'phoneNumber' => 'setPhoneNumber',
        'phoneNumberType' => 'setPhoneNumberType',
        'countryCode' => 'setCountryCode',
        'addressId' => 'setAddressId',
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
        'phoneNumber' => 'getPhoneNumber',
        'phoneNumberType' => 'getPhoneNumberType',
        'countryCode' => 'getCountryCode',
        'addressId' => 'getAddressId',
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

    const PHONE_NUMBER_TYPE_LOCAL = 'local';
    const PHONE_NUMBER_TYPE_MOBILE = 'mobile';
    const PHONE_NUMBER_TYPE_TOLLFREE = 'tollfree';
    const PHONE_NUMBER_TYPE_SHORTCODE = 'shortcode';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPhoneNumberTypeAllowableValues()
    {
        return [
            self::PHONE_NUMBER_TYPE_LOCAL,
            self::PHONE_NUMBER_TYPE_MOBILE,
            self::PHONE_NUMBER_TYPE_TOLLFREE,
            self::PHONE_NUMBER_TYPE_SHORTCODE,
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
        $this->container['phoneNumber'] = isset($data['phoneNumber']) ? $data['phoneNumber'] : null;
        $this->container['phoneNumberType'] = isset($data['phoneNumberType']) ? $data['phoneNumberType'] : null;
        $this->container['countryCode'] = isset($data['countryCode']) ? $data['countryCode'] : null;
        $this->container['addressId'] = isset($data['addressId']) ? $data['addressId'] : null;
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

        if ($this->container['phoneNumber'] === null) {
            $invalidProperties[] = "'phoneNumber' can't be null";
        }
        if ($this->container['phoneNumberType'] === null) {
            $invalidProperties[] = "'phoneNumberType' can't be null";
        }
        $allowedValues = $this->getPhoneNumberTypeAllowableValues();
        if (!is_null($this->container['phoneNumberType']) && !in_array($this->container['phoneNumberType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'phoneNumberType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['countryCode'] === null) {
            $invalidProperties[] = "'countryCode' can't be null";
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
     * Gets phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phoneNumber'];
    }

    /**
     * Sets phoneNumber
     *
     * @param string $phoneNumber A phone number to be used for SMS communications. E.g. +13175555555 or +34234234234
     *
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->container['phoneNumber'] = $phoneNumber;

        return $this;
    }

    /**
     * Gets phoneNumberType
     *
     * @return string
     */
    public function getPhoneNumberType()
    {
        return $this->container['phoneNumberType'];
    }

    /**
     * Sets phoneNumberType
     *
     * @param string $phoneNumberType Type of the phone number provisioned.
     *
     * @return $this
     */
    public function setPhoneNumberType($phoneNumberType)
    {
        $allowedValues = $this->getPhoneNumberTypeAllowableValues();
        if (!in_array($phoneNumberType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'phoneNumberType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['phoneNumberType'] = $phoneNumberType;

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
     * @param string $countryCode The ISO 3166-1 alpha-2 country code of the country this phone number is associated with.
     *
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        $this->container['countryCode'] = $countryCode;

        return $this;
    }

    /**
     * Gets addressId
     *
     * @return string
     */
    public function getAddressId()
    {
        return $this->container['addressId'];
    }

    /**
     * Sets addressId
     *
     * @param string $addressId The id of an address added on your account. Due to regulatory requirements in some countries, an address may be required when provisioning a sms number. In those cases you should provide the provisioned sms address id here
     *
     * @return $this
     */
    public function setAddressId($addressId)
    {
        $this->container['addressId'] = $addressId;

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


