<?php
/**
 * IntradayPerformancePredictionQueueData
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
 * IntradayPerformancePredictionQueueData Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IntradayPerformancePredictionQueueData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IntradayPerformancePredictionQueueData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'serviceLevelPercent' => 'double',
        'averageSpeedOfAnswerSeconds' => 'double',
        'numberOfInteractions' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'serviceLevelPercent' => 'double',
        'averageSpeedOfAnswerSeconds' => 'double',
        'numberOfInteractions' => 'double'
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
        'serviceLevelPercent' => 'serviceLevelPercent',
        'averageSpeedOfAnswerSeconds' => 'averageSpeedOfAnswerSeconds',
        'numberOfInteractions' => 'numberOfInteractions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'serviceLevelPercent' => 'setServiceLevelPercent',
        'averageSpeedOfAnswerSeconds' => 'setAverageSpeedOfAnswerSeconds',
        'numberOfInteractions' => 'setNumberOfInteractions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'serviceLevelPercent' => 'getServiceLevelPercent',
        'averageSpeedOfAnswerSeconds' => 'getAverageSpeedOfAnswerSeconds',
        'numberOfInteractions' => 'getNumberOfInteractions'
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
        $this->container['serviceLevelPercent'] = isset($data['serviceLevelPercent']) ? $data['serviceLevelPercent'] : null;
        $this->container['averageSpeedOfAnswerSeconds'] = isset($data['averageSpeedOfAnswerSeconds']) ? $data['averageSpeedOfAnswerSeconds'] : null;
        $this->container['numberOfInteractions'] = isset($data['numberOfInteractions']) ? $data['numberOfInteractions'] : null;
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
     * Gets serviceLevelPercent
     *
     * @return double
     */
    public function getServiceLevelPercent()
    {
        return $this->container['serviceLevelPercent'];
    }

    /**
     * Sets serviceLevelPercent
     *
     * @param double $serviceLevelPercent Predicted percent of interactions answered in X seconds, where X is the service level objective configured in the service goal group matching this intraday group
     *
     * @return $this
     */
    public function setServiceLevelPercent($serviceLevelPercent)
    {
        $this->container['serviceLevelPercent'] = $serviceLevelPercent;

        return $this;
    }

    /**
     * Gets averageSpeedOfAnswerSeconds
     *
     * @return double
     */
    public function getAverageSpeedOfAnswerSeconds()
    {
        return $this->container['averageSpeedOfAnswerSeconds'];
    }

    /**
     * Sets averageSpeedOfAnswerSeconds
     *
     * @param double $averageSpeedOfAnswerSeconds Predicted average time in seconds it takes to answer an interaction once the interaction becomes available to be routed
     *
     * @return $this
     */
    public function setAverageSpeedOfAnswerSeconds($averageSpeedOfAnswerSeconds)
    {
        $this->container['averageSpeedOfAnswerSeconds'] = $averageSpeedOfAnswerSeconds;

        return $this;
    }

    /**
     * Gets numberOfInteractions
     *
     * @return double
     */
    public function getNumberOfInteractions()
    {
        return $this->container['numberOfInteractions'];
    }

    /**
     * Sets numberOfInteractions
     *
     * @param double $numberOfInteractions Predicted number of interactions
     *
     * @return $this
     */
    public function setNumberOfInteractions($numberOfInteractions)
    {
        $this->container['numberOfInteractions'] = $numberOfInteractions;

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


