<?php
/**
 * ImportStatus
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
 * ImportStatus Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ImportStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ImportStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'state' => 'string',
        'totalRecords' => 'int',
        'completedRecords' => 'int',
        'percentComplete' => 'int',
        'failureReason' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'state' => null,
        'totalRecords' => 'int64',
        'completedRecords' => 'int64',
        'percentComplete' => 'int32',
        'failureReason' => null
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
        'totalRecords' => 'totalRecords',
        'completedRecords' => 'completedRecords',
        'percentComplete' => 'percentComplete',
        'failureReason' => 'failureReason'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'state' => 'setState',
        'totalRecords' => 'setTotalRecords',
        'completedRecords' => 'setCompletedRecords',
        'percentComplete' => 'setPercentComplete',
        'failureReason' => 'setFailureReason'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'state' => 'getState',
        'totalRecords' => 'getTotalRecords',
        'completedRecords' => 'getCompletedRecords',
        'percentComplete' => 'getPercentComplete',
        'failureReason' => 'getFailureReason'
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

    const STATE_IN_PROGRESS = 'IN_PROGRESS';
    const STATE_FAILED = 'FAILED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_IN_PROGRESS,
            self::STATE_FAILED,
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
        $this->container['totalRecords'] = isset($data['totalRecords']) ? $data['totalRecords'] : null;
        $this->container['completedRecords'] = isset($data['completedRecords']) ? $data['completedRecords'] : null;
        $this->container['percentComplete'] = isset($data['percentComplete']) ? $data['percentComplete'] : null;
        $this->container['failureReason'] = isset($data['failureReason']) ? $data['failureReason'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['totalRecords'] === null) {
            $invalidProperties[] = "'totalRecords' can't be null";
        }
        if ($this->container['completedRecords'] === null) {
            $invalidProperties[] = "'completedRecords' can't be null";
        }
        if ($this->container['percentComplete'] === null) {
            $invalidProperties[] = "'percentComplete' can't be null";
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
     * @param string $state current status of the import
     *
     * @return $this
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!in_array($state, $allowedValues, true)) {
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
     * Gets totalRecords
     *
     * @return int
     */
    public function getTotalRecords()
    {
        return $this->container['totalRecords'];
    }

    /**
     * Sets totalRecords
     *
     * @param int $totalRecords total number of records to be imported
     *
     * @return $this
     */
    public function setTotalRecords($totalRecords)
    {
        $this->container['totalRecords'] = $totalRecords;

        return $this;
    }

    /**
     * Gets completedRecords
     *
     * @return int
     */
    public function getCompletedRecords()
    {
        return $this->container['completedRecords'];
    }

    /**
     * Sets completedRecords
     *
     * @param int $completedRecords number of records finished importing
     *
     * @return $this
     */
    public function setCompletedRecords($completedRecords)
    {
        $this->container['completedRecords'] = $completedRecords;

        return $this;
    }

    /**
     * Gets percentComplete
     *
     * @return int
     */
    public function getPercentComplete()
    {
        return $this->container['percentComplete'];
    }

    /**
     * Sets percentComplete
     *
     * @param int $percentComplete percentage of records finished importing
     *
     * @return $this
     */
    public function setPercentComplete($percentComplete)
    {
        $this->container['percentComplete'] = $percentComplete;

        return $this;
    }

    /**
     * Gets failureReason
     *
     * @return string
     */
    public function getFailureReason()
    {
        return $this->container['failureReason'];
    }

    /**
     * Sets failureReason
     *
     * @param string $failureReason if the import has failed, the reason for the failure
     *
     * @return $this
     */
    public function setFailureReason($failureReason)
    {
        $this->container['failureReason'] = $failureReason;

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


