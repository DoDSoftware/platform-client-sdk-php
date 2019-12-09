<?php
/**
 * EvaluationAggregationView
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
 * EvaluationAggregationView Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EvaluationAggregationView implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EvaluationAggregationView';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'target' => 'string',
        'name' => 'string',
        'function' => 'string',
        'range' => '\PureCloudPlatform\Client\V2\Model\AggregationRange'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'target' => null,
        'name' => null,
        'function' => null,
        'range' => null
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
        'target' => 'target',
        'name' => 'name',
        'function' => 'function',
        'range' => 'range'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'target' => 'setTarget',
        'name' => 'setName',
        'function' => 'setFunction',
        'range' => 'setRange'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'target' => 'getTarget',
        'name' => 'getName',
        'function' => 'getFunction',
        'range' => 'getRange'
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

    const TARGET_N_EVALUATIONS = 'nEvaluations';
    const TARGET_N_EVALUATIONS_DELETED = 'nEvaluationsDeleted';
    const TARGET_N_EVALUATIONS_RESCORED = 'nEvaluationsRescored';
    const TARGET_O_TOTAL_CRITICAL_SCORE = 'oTotalCriticalScore';
    const TARGET_O_TOTAL_SCORE = 'oTotalScore';
    const MODEL_FUNCTION_RANGE_BOUND = 'rangeBound';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTargetAllowableValues()
    {
        return [
            self::TARGET_N_EVALUATIONS,
            self::TARGET_N_EVALUATIONS_DELETED,
            self::TARGET_N_EVALUATIONS_RESCORED,
            self::TARGET_O_TOTAL_CRITICAL_SCORE,
            self::TARGET_O_TOTAL_SCORE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFunctionAllowableValues()
    {
        return [
            self::MODEL_FUNCTION_RANGE_BOUND,
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
        $this->container['target'] = isset($data['target']) ? $data['target'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['function'] = isset($data['function']) ? $data['function'] : null;
        $this->container['range'] = isset($data['range']) ? $data['range'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['target'] === null) {
            $invalidProperties[] = "'target' can't be null";
        }
        $allowedValues = $this->getTargetAllowableValues();
        if (!is_null($this->container['target']) && !in_array($this->container['target'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'target', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['function'] === null) {
            $invalidProperties[] = "'function' can't be null";
        }
        $allowedValues = $this->getFunctionAllowableValues();
        if (!is_null($this->container['function']) && !in_array($this->container['function'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'function', must be one of '%s'",
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
     * Gets target
     *
     * @return string
     */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
     * Sets target
     *
     * @param string $target Target metric name
     *
     * @return $this
     */
    public function setTarget($target)
    {
        $allowedValues = $this->getTargetAllowableValues();
        if (!in_array($target, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'target', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['target'] = $target;

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
     * @param string $name A unique name for this view. Must be distinct from other views and built-in metric names.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets function
     *
     * @return string
     */
    public function getFunction()
    {
        return $this->container['function'];
    }

    /**
     * Sets function
     *
     * @param string $function Type of view you wish to create
     *
     * @return $this
     */
    public function setFunction($function)
    {
        $allowedValues = $this->getFunctionAllowableValues();
        if (!in_array($function, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'function', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['function'] = $function;

        return $this;
    }

    /**
     * Gets range
     *
     * @return \PureCloudPlatform\Client\V2\Model\AggregationRange
     */
    public function getRange()
    {
        return $this->container['range'];
    }

    /**
     * Sets range
     *
     * @param \PureCloudPlatform\Client\V2\Model\AggregationRange $range Range of numbers for slicing up data
     *
     * @return $this
     */
    public function setRange($range)
    {
        $this->container['range'] = $range;

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


