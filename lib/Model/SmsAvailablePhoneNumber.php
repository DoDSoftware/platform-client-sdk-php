<?php
/**
 * SmsAvailablePhoneNumber
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
 * SmsAvailablePhoneNumber Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmsAvailablePhoneNumber implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SmsAvailablePhoneNumber';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'phoneNumber' => 'string',
        'countryCode' => 'string',
        'region' => 'string',
        'city' => 'string',
        'capabilities' => 'string[]',
        'phoneNumberType' => 'string',
        'addressRequirement' => 'string',
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
        'countryCode' => null,
        'region' => null,
        'city' => null,
        'capabilities' => null,
        'phoneNumberType' => null,
        'addressRequirement' => null,
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
        'countryCode' => 'countryCode',
        'region' => 'region',
        'city' => 'city',
        'capabilities' => 'capabilities',
        'phoneNumberType' => 'phoneNumberType',
        'addressRequirement' => 'addressRequirement',
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
        'countryCode' => 'setCountryCode',
        'region' => 'setRegion',
        'city' => 'setCity',
        'capabilities' => 'setCapabilities',
        'phoneNumberType' => 'setPhoneNumberType',
        'addressRequirement' => 'setAddressRequirement',
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
        'countryCode' => 'getCountryCode',
        'region' => 'getRegion',
        'city' => 'getCity',
        'capabilities' => 'getCapabilities',
        'phoneNumberType' => 'getPhoneNumberType',
        'addressRequirement' => 'getAddressRequirement',
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

    const CAPABILITIES_SMS = 'sms';
    const CAPABILITIES_MMS = 'mms';
    const CAPABILITIES_VOICE = 'voice';
    const PHONE_NUMBER_TYPE_LOCAL = 'local';
    const PHONE_NUMBER_TYPE_MOBILE = 'mobile';
    const PHONE_NUMBER_TYPE_TOLLFREE = 'tollfree';
    const PHONE_NUMBER_TYPE_SHORTCODE = 'shortcode';
    const ADDRESS_REQUIREMENT_NONE = 'none';
    const ADDRESS_REQUIREMENT_ANY = 'any';
    const ADDRESS_REQUIREMENT_LOCAL = 'local';
    const ADDRESS_REQUIREMENT_FOREIGN = 'foreign';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCapabilitiesAllowableValues()
    {
        return [
            self::CAPABILITIES_SMS,
            self::CAPABILITIES_MMS,
            self::CAPABILITIES_VOICE,
        ];
    }
    
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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAddressRequirementAllowableValues()
    {
        return [
            self::ADDRESS_REQUIREMENT_NONE,
            self::ADDRESS_REQUIREMENT_ANY,
            self::ADDRESS_REQUIREMENT_LOCAL,
            self::ADDRESS_REQUIREMENT_FOREIGN,
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
        $this->container['countryCode'] = isset($data['countryCode']) ? $data['countryCode'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['capabilities'] = isset($data['capabilities']) ? $data['capabilities'] : null;
        $this->container['phoneNumberType'] = isset($data['phoneNumberType']) ? $data['phoneNumberType'] : null;
        $this->container['addressRequirement'] = isset($data['addressRequirement']) ? $data['addressRequirement'] : null;
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

        $allowedValues = $this->getPhoneNumberTypeAllowableValues();
        if (!is_null($this->container['phoneNumberType']) && !in_array($this->container['phoneNumberType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'phoneNumberType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAddressRequirementAllowableValues();
        if (!is_null($this->container['addressRequirement']) && !in_array($this->container['addressRequirement'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'addressRequirement', must be one of '%s'",
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
     * @param string $phoneNumber A phone number available for provisioning in E.164 format. E.g. +13175555555 or +34234234234
     *
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->container['phoneNumber'] = $phoneNumber;

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
     * Gets region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string $region The region/province/state the phone number is associated with.
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city The city the phone number is associated with.
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets capabilities
     *
     * @return string[]
     */
    public function getCapabilities()
    {
        return $this->container['capabilities'];
    }

    /**
     * Sets capabilities
     *
     * @param string[] $capabilities The capabilities of the phone number available for provisioning.
     *
     * @return $this
     */
    public function setCapabilities($capabilities)
    {
        $allowedValues = $this->getCapabilitiesAllowableValues();
        if (!is_null($capabilities) && array_diff($capabilities, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'capabilities', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['capabilities'] = $capabilities;

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
     * @param string $phoneNumberType The type of phone number available for provisioning.
     *
     * @return $this
     */
    public function setPhoneNumberType($phoneNumberType)
    {
        $allowedValues = $this->getPhoneNumberTypeAllowableValues();
        if (!is_null($phoneNumberType) && !in_array($phoneNumberType, $allowedValues, true)) {
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
     * Gets addressRequirement
     *
     * @return string
     */
    public function getAddressRequirement()
    {
        return $this->container['addressRequirement'];
    }

    /**
     * Sets addressRequirement
     *
     * @param string $addressRequirement The address requirement needed for provisioning this number. If there is a requirement, the address must be the residence or place of business of the individual or entity using the phone number.
     *
     * @return $this
     */
    public function setAddressRequirement($addressRequirement)
    {
        $allowedValues = $this->getAddressRequirementAllowableValues();
        if (!is_null($addressRequirement) && !in_array($addressRequirement, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'addressRequirement', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['addressRequirement'] = $addressRequirement;

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

