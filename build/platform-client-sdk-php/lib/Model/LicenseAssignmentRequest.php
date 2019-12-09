<?php
/**
 * LicenseAssignmentRequest
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
 * LicenseAssignmentRequest Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LicenseAssignmentRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LicenseAssignmentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'licenseId' => 'string',
        'userIdsAdd' => 'string[]',
        'userIdsRemove' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'licenseId' => null,
        'userIdsAdd' => null,
        'userIdsRemove' => null
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
        'licenseId' => 'licenseId',
        'userIdsAdd' => 'userIdsAdd',
        'userIdsRemove' => 'userIdsRemove'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'licenseId' => 'setLicenseId',
        'userIdsAdd' => 'setUserIdsAdd',
        'userIdsRemove' => 'setUserIdsRemove'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'licenseId' => 'getLicenseId',
        'userIdsAdd' => 'getUserIdsAdd',
        'userIdsRemove' => 'getUserIdsRemove'
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
        $this->container['licenseId'] = isset($data['licenseId']) ? $data['licenseId'] : null;
        $this->container['userIdsAdd'] = isset($data['userIdsAdd']) ? $data['userIdsAdd'] : null;
        $this->container['userIdsRemove'] = isset($data['userIdsRemove']) ? $data['userIdsRemove'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['licenseId'] === null) {
            $invalidProperties[] = "'licenseId' can't be null";
        }
        if ($this->container['userIdsAdd'] === null) {
            $invalidProperties[] = "'userIdsAdd' can't be null";
        }
        if ($this->container['userIdsRemove'] === null) {
            $invalidProperties[] = "'userIdsRemove' can't be null";
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
     * Gets licenseId
     *
     * @return string
     */
    public function getLicenseId()
    {
        return $this->container['licenseId'];
    }

    /**
     * Sets licenseId
     *
     * @param string $licenseId The id of the license to assign/unassign.
     *
     * @return $this
     */
    public function setLicenseId($licenseId)
    {
        $this->container['licenseId'] = $licenseId;

        return $this;
    }

    /**
     * Gets userIdsAdd
     *
     * @return string[]
     */
    public function getUserIdsAdd()
    {
        return $this->container['userIdsAdd'];
    }

    /**
     * Sets userIdsAdd
     *
     * @param string[] $userIdsAdd The ids of users to assign this license to.
     *
     * @return $this
     */
    public function setUserIdsAdd($userIdsAdd)
    {
        $this->container['userIdsAdd'] = $userIdsAdd;

        return $this;
    }

    /**
     * Gets userIdsRemove
     *
     * @return string[]
     */
    public function getUserIdsRemove()
    {
        return $this->container['userIdsRemove'];
    }

    /**
     * Sets userIdsRemove
     *
     * @param string[] $userIdsRemove The ids of users to unassign this license from.
     *
     * @return $this
     */
    public function setUserIdsRemove($userIdsRemove)
    {
        $this->container['userIdsRemove'] = $userIdsRemove;

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


