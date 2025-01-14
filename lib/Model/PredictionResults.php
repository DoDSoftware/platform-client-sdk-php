<?php
/**
 * PredictionResults
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
 * PredictionResults Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PredictionResults implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PredictionResults';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'intent' => 'string',
        'formula' => 'string',
        'estimatedWaitTimeSeconds' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'intent' => null,
        'formula' => null,
        'estimatedWaitTimeSeconds' => 'int32'
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
        'intent' => 'intent',
        'formula' => 'formula',
        'estimatedWaitTimeSeconds' => 'estimatedWaitTimeSeconds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'intent' => 'setIntent',
        'formula' => 'setFormula',
        'estimatedWaitTimeSeconds' => 'setEstimatedWaitTimeSeconds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'intent' => 'getIntent',
        'formula' => 'getFormula',
        'estimatedWaitTimeSeconds' => 'getEstimatedWaitTimeSeconds'
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

    const INTENT_ALL = 'ALL';
    const INTENT_CALL = 'CALL';
    const INTENT_CALLBACK = 'CALLBACK';
    const INTENT_CHAT = 'CHAT';
    const INTENT_EMAIL = 'EMAIL';
    const INTENT_SOCIALEXPRESSION = 'SOCIALEXPRESSION';
    const INTENT_VIDEOCOMM = 'VIDEOCOMM';
    const INTENT_MESSAGE = 'MESSAGE';
    const FORMULA_BEST = 'BEST';
    const FORMULA_SIMPLE = 'SIMPLE';
    const FORMULA_ABANDON = 'ABANDON';
    const FORMULA_PATIENCE_ABANDON = 'PATIENCE_ABANDON';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIntentAllowableValues()
    {
        return [
            self::INTENT_ALL,
            self::INTENT_CALL,
            self::INTENT_CALLBACK,
            self::INTENT_CHAT,
            self::INTENT_EMAIL,
            self::INTENT_SOCIALEXPRESSION,
            self::INTENT_VIDEOCOMM,
            self::INTENT_MESSAGE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFormulaAllowableValues()
    {
        return [
            self::FORMULA_BEST,
            self::FORMULA_SIMPLE,
            self::FORMULA_ABANDON,
            self::FORMULA_PATIENCE_ABANDON,
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
        $this->container['intent'] = isset($data['intent']) ? $data['intent'] : null;
        $this->container['formula'] = isset($data['formula']) ? $data['formula'] : null;
        $this->container['estimatedWaitTimeSeconds'] = isset($data['estimatedWaitTimeSeconds']) ? $data['estimatedWaitTimeSeconds'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getIntentAllowableValues();
        if (!is_null($this->container['intent']) && !in_array($this->container['intent'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'intent', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['formula'] === null) {
            $invalidProperties[] = "'formula' can't be null";
        }
        $allowedValues = $this->getFormulaAllowableValues();
        if (!is_null($this->container['formula']) && !in_array($this->container['formula'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'formula', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['estimatedWaitTimeSeconds'] === null) {
            $invalidProperties[] = "'estimatedWaitTimeSeconds' can't be null";
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
     * Gets intent
     *
     * @return string
     */
    public function getIntent()
    {
        return $this->container['intent'];
    }

    /**
     * Sets intent
     *
     * @param string $intent Indicates the media type scope of this estimated wait time
     *
     * @return $this
     */
    public function setIntent($intent)
    {
        $allowedValues = $this->getIntentAllowableValues();
        if (!is_null($intent) && !in_array($intent, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'intent', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['intent'] = $intent;

        return $this;
    }

    /**
     * Gets formula
     *
     * @return string
     */
    public function getFormula()
    {
        return $this->container['formula'];
    }

    /**
     * Sets formula
     *
     * @param string $formula Indicates the estimated wait time Formula
     *
     * @return $this
     */
    public function setFormula($formula)
    {
        $allowedValues = $this->getFormulaAllowableValues();
        if (!in_array($formula, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'formula', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['formula'] = $formula;

        return $this;
    }

    /**
     * Gets estimatedWaitTimeSeconds
     *
     * @return int
     */
    public function getEstimatedWaitTimeSeconds()
    {
        return $this->container['estimatedWaitTimeSeconds'];
    }

    /**
     * Sets estimatedWaitTimeSeconds
     *
     * @param int $estimatedWaitTimeSeconds Estimated wait time in seconds
     *
     * @return $this
     */
    public function setEstimatedWaitTimeSeconds($estimatedWaitTimeSeconds)
    {
        $this->container['estimatedWaitTimeSeconds'] = $estimatedWaitTimeSeconds;

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


