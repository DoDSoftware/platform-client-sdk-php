<?php
/**
 * EdgeMetricsProcessor
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
 * EdgeMetricsProcessor Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EdgeMetricsProcessor implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EdgeMetricsProcessor';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'activeTimePct' => 'double',
        'cpuId' => 'string',
        'idleTimePct' => 'double',
        'privilegedTimePct' => 'double',
        'userTimePct' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'activeTimePct' => 'double',
        'cpuId' => null,
        'idleTimePct' => 'double',
        'privilegedTimePct' => 'double',
        'userTimePct' => 'double'
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
        'activeTimePct' => 'activeTimePct',
        'cpuId' => 'cpuId',
        'idleTimePct' => 'idleTimePct',
        'privilegedTimePct' => 'privilegedTimePct',
        'userTimePct' => 'userTimePct'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activeTimePct' => 'setActiveTimePct',
        'cpuId' => 'setCpuId',
        'idleTimePct' => 'setIdleTimePct',
        'privilegedTimePct' => 'setPrivilegedTimePct',
        'userTimePct' => 'setUserTimePct'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activeTimePct' => 'getActiveTimePct',
        'cpuId' => 'getCpuId',
        'idleTimePct' => 'getIdleTimePct',
        'privilegedTimePct' => 'getPrivilegedTimePct',
        'userTimePct' => 'getUserTimePct'
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
        $this->container['activeTimePct'] = isset($data['activeTimePct']) ? $data['activeTimePct'] : null;
        $this->container['cpuId'] = isset($data['cpuId']) ? $data['cpuId'] : null;
        $this->container['idleTimePct'] = isset($data['idleTimePct']) ? $data['idleTimePct'] : null;
        $this->container['privilegedTimePct'] = isset($data['privilegedTimePct']) ? $data['privilegedTimePct'] : null;
        $this->container['userTimePct'] = isset($data['userTimePct']) ? $data['userTimePct'] : null;
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
     * Gets activeTimePct
     *
     * @return double
     */
    public function getActiveTimePct()
    {
        return $this->container['activeTimePct'];
    }

    /**
     * Sets activeTimePct
     *
     * @param double $activeTimePct Percent time processor was active.
     *
     * @return $this
     */
    public function setActiveTimePct($activeTimePct)
    {
        $this->container['activeTimePct'] = $activeTimePct;

        return $this;
    }

    /**
     * Gets cpuId
     *
     * @return string
     */
    public function getCpuId()
    {
        return $this->container['cpuId'];
    }

    /**
     * Sets cpuId
     *
     * @param string $cpuId Machine CPU identifier. 'total' will always be included in the array and is the total of all CPU resources.
     *
     * @return $this
     */
    public function setCpuId($cpuId)
    {
        $this->container['cpuId'] = $cpuId;

        return $this;
    }

    /**
     * Gets idleTimePct
     *
     * @return double
     */
    public function getIdleTimePct()
    {
        return $this->container['idleTimePct'];
    }

    /**
     * Sets idleTimePct
     *
     * @param double $idleTimePct Percent time processor was idle.
     *
     * @return $this
     */
    public function setIdleTimePct($idleTimePct)
    {
        $this->container['idleTimePct'] = $idleTimePct;

        return $this;
    }

    /**
     * Gets privilegedTimePct
     *
     * @return double
     */
    public function getPrivilegedTimePct()
    {
        return $this->container['privilegedTimePct'];
    }

    /**
     * Sets privilegedTimePct
     *
     * @param double $privilegedTimePct Percent time processor spent in privileged mode.
     *
     * @return $this
     */
    public function setPrivilegedTimePct($privilegedTimePct)
    {
        $this->container['privilegedTimePct'] = $privilegedTimePct;

        return $this;
    }

    /**
     * Gets userTimePct
     *
     * @return double
     */
    public function getUserTimePct()
    {
        return $this->container['userTimePct'];
    }

    /**
     * Sets userTimePct
     *
     * @param double $userTimePct Percent time processor spent in user mode.
     *
     * @return $this
     */
    public function setUserTimePct($userTimePct)
    {
        $this->container['userTimePct'] = $userTimePct;

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


