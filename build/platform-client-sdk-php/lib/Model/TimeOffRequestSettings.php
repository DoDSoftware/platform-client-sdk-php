<?php
/**
 * TimeOffRequestSettings
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
 * TimeOffRequestSettings Class Doc Comment
 *
 * @category Class
 * @description Time Off Request Settings
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TimeOffRequestSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TimeOffRequestSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'submissionRangeEnforced' => 'bool',
        'submissionEarliestDaysFromNow' => 'int',
        'submissionLatestDaysFromNow' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'submissionRangeEnforced' => null,
        'submissionEarliestDaysFromNow' => 'int32',
        'submissionLatestDaysFromNow' => 'int32'
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
        'submissionRangeEnforced' => 'submissionRangeEnforced',
        'submissionEarliestDaysFromNow' => 'submissionEarliestDaysFromNow',
        'submissionLatestDaysFromNow' => 'submissionLatestDaysFromNow'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'submissionRangeEnforced' => 'setSubmissionRangeEnforced',
        'submissionEarliestDaysFromNow' => 'setSubmissionEarliestDaysFromNow',
        'submissionLatestDaysFromNow' => 'setSubmissionLatestDaysFromNow'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'submissionRangeEnforced' => 'getSubmissionRangeEnforced',
        'submissionEarliestDaysFromNow' => 'getSubmissionEarliestDaysFromNow',
        'submissionLatestDaysFromNow' => 'getSubmissionLatestDaysFromNow'
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
        $this->container['submissionRangeEnforced'] = isset($data['submissionRangeEnforced']) ? $data['submissionRangeEnforced'] : null;
        $this->container['submissionEarliestDaysFromNow'] = isset($data['submissionEarliestDaysFromNow']) ? $data['submissionEarliestDaysFromNow'] : null;
        $this->container['submissionLatestDaysFromNow'] = isset($data['submissionLatestDaysFromNow']) ? $data['submissionLatestDaysFromNow'] : null;
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
     * Gets submissionRangeEnforced
     *
     * @return bool
     */
    public function getSubmissionRangeEnforced()
    {
        return $this->container['submissionRangeEnforced'];
    }

    /**
     * Sets submissionRangeEnforced
     *
     * @param bool $submissionRangeEnforced Whether to enforce a submission range for agent time off requests
     *
     * @return $this
     */
    public function setSubmissionRangeEnforced($submissionRangeEnforced)
    {
        $this->container['submissionRangeEnforced'] = $submissionRangeEnforced;

        return $this;
    }

    /**
     * Gets submissionEarliestDaysFromNow
     *
     * @return int
     */
    public function getSubmissionEarliestDaysFromNow()
    {
        return $this->container['submissionEarliestDaysFromNow'];
    }

    /**
     * Sets submissionEarliestDaysFromNow
     *
     * @param int $submissionEarliestDaysFromNow The earliest number of days from now for which an agent can submit a time off request.  Use negative numbers to indicate days in the past
     *
     * @return $this
     */
    public function setSubmissionEarliestDaysFromNow($submissionEarliestDaysFromNow)
    {
        $this->container['submissionEarliestDaysFromNow'] = $submissionEarliestDaysFromNow;

        return $this;
    }

    /**
     * Gets submissionLatestDaysFromNow
     *
     * @return int
     */
    public function getSubmissionLatestDaysFromNow()
    {
        return $this->container['submissionLatestDaysFromNow'];
    }

    /**
     * Sets submissionLatestDaysFromNow
     *
     * @param int $submissionLatestDaysFromNow The latest number of days from now for which an agent can submit a time off request
     *
     * @return $this
     */
    public function setSubmissionLatestDaysFromNow($submissionLatestDaysFromNow)
    {
        $this->container['submissionLatestDaysFromNow'] = $submissionLatestDaysFromNow;

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


