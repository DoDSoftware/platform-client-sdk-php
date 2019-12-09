<?php
/**
 * WeekScheduleGenerationResult
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
 * WeekScheduleGenerationResult Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WeekScheduleGenerationResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WeekScheduleGenerationResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'failed' => 'bool',
        'runId' => 'string',
        'agentWarnings' => '\PureCloudPlatform\Client\V2\Model\ScheduleGenerationWarning[]',
        'agentWarningCount' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'failed' => null,
        'runId' => null,
        'agentWarnings' => null,
        'agentWarningCount' => 'int32'
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
        'failed' => 'failed',
        'runId' => 'runId',
        'agentWarnings' => 'agentWarnings',
        'agentWarningCount' => 'agentWarningCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'failed' => 'setFailed',
        'runId' => 'setRunId',
        'agentWarnings' => 'setAgentWarnings',
        'agentWarningCount' => 'setAgentWarningCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'failed' => 'getFailed',
        'runId' => 'getRunId',
        'agentWarnings' => 'getAgentWarnings',
        'agentWarningCount' => 'getAgentWarningCount'
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
        $this->container['failed'] = isset($data['failed']) ? $data['failed'] : null;
        $this->container['runId'] = isset($data['runId']) ? $data['runId'] : null;
        $this->container['agentWarnings'] = isset($data['agentWarnings']) ? $data['agentWarnings'] : null;
        $this->container['agentWarningCount'] = isset($data['agentWarningCount']) ? $data['agentWarningCount'] : null;
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
     * Gets failed
     *
     * @return bool
     */
    public function getFailed()
    {
        return $this->container['failed'];
    }

    /**
     * Sets failed
     *
     * @param bool $failed Whether the schedule generation failed
     *
     * @return $this
     */
    public function setFailed($failed)
    {
        $this->container['failed'] = $failed;

        return $this;
    }

    /**
     * Gets runId
     *
     * @return string
     */
    public function getRunId()
    {
        return $this->container['runId'];
    }

    /**
     * Sets runId
     *
     * @param string $runId ID of the schedule run
     *
     * @return $this
     */
    public function setRunId($runId)
    {
        $this->container['runId'] = $runId;

        return $this;
    }

    /**
     * Gets agentWarnings
     *
     * @return \PureCloudPlatform\Client\V2\Model\ScheduleGenerationWarning[]
     */
    public function getAgentWarnings()
    {
        return $this->container['agentWarnings'];
    }

    /**
     * Sets agentWarnings
     *
     * @param \PureCloudPlatform\Client\V2\Model\ScheduleGenerationWarning[] $agentWarnings Warning messages from the schedule run. This will be available only when requesting information for a single week schedule
     *
     * @return $this
     */
    public function setAgentWarnings($agentWarnings)
    {
        $this->container['agentWarnings'] = $agentWarnings;

        return $this;
    }

    /**
     * Gets agentWarningCount
     *
     * @return int
     */
    public function getAgentWarningCount()
    {
        return $this->container['agentWarningCount'];
    }

    /**
     * Sets agentWarningCount
     *
     * @param int $agentWarningCount Count of warning messages from the schedule run. This will be available only when requesting multiple week schedules
     *
     * @return $this
     */
    public function setAgentWarningCount($agentWarningCount)
    {
        $this->container['agentWarningCount'] = $agentWarningCount;

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


