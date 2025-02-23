<?php
/**
 * DomainCapabilities
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
 * DomainCapabilities Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DomainCapabilities implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DomainCapabilities';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'enabled' => 'bool',
        'dhcp' => 'bool',
        'metric' => 'int',
        'autoMetric' => 'bool',
        'supportsMetric' => 'bool',
        'pingEnabled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'enabled' => null,
        'dhcp' => null,
        'metric' => 'int32',
        'autoMetric' => null,
        'supportsMetric' => null,
        'pingEnabled' => null
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
        'enabled' => 'enabled',
        'dhcp' => 'dhcp',
        'metric' => 'metric',
        'autoMetric' => 'autoMetric',
        'supportsMetric' => 'supportsMetric',
        'pingEnabled' => 'pingEnabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enabled' => 'setEnabled',
        'dhcp' => 'setDhcp',
        'metric' => 'setMetric',
        'autoMetric' => 'setAutoMetric',
        'supportsMetric' => 'setSupportsMetric',
        'pingEnabled' => 'setPingEnabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enabled' => 'getEnabled',
        'dhcp' => 'getDhcp',
        'metric' => 'getMetric',
        'autoMetric' => 'getAutoMetric',
        'supportsMetric' => 'getSupportsMetric',
        'pingEnabled' => 'getPingEnabled'
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
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['dhcp'] = isset($data['dhcp']) ? $data['dhcp'] : null;
        $this->container['metric'] = isset($data['metric']) ? $data['metric'] : null;
        $this->container['autoMetric'] = isset($data['autoMetric']) ? $data['autoMetric'] : null;
        $this->container['supportsMetric'] = isset($data['supportsMetric']) ? $data['supportsMetric'] : null;
        $this->container['pingEnabled'] = isset($data['pingEnabled']) ? $data['pingEnabled'] : null;
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
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled True if this address family on the interface is enabled.
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets dhcp
     *
     * @return bool
     */
    public function getDhcp()
    {
        return $this->container['dhcp'];
    }

    /**
     * Sets dhcp
     *
     * @param bool $dhcp True if this address family on the interface is using DHCP.
     *
     * @return $this
     */
    public function setDhcp($dhcp)
    {
        $this->container['dhcp'] = $dhcp;

        return $this;
    }

    /**
     * Gets metric
     *
     * @return int
     */
    public function getMetric()
    {
        return $this->container['metric'];
    }

    /**
     * Sets metric
     *
     * @param int $metric The metric being used for the address family on this interface. Lower values will have a higher priority. If autoMetric is true, this value will be the automatically calculated metric. To set this value be sure autoMetric is false. If no value is returned, metric configuration is not supported on this Edge.
     *
     * @return $this
     */
    public function setMetric($metric)
    {
        $this->container['metric'] = $metric;

        return $this;
    }

    /**
     * Gets autoMetric
     *
     * @return bool
     */
    public function getAutoMetric()
    {
        return $this->container['autoMetric'];
    }

    /**
     * Sets autoMetric
     *
     * @param bool $autoMetric True if the metric is being calculated automatically for the address family on this interface.
     *
     * @return $this
     */
    public function setAutoMetric($autoMetric)
    {
        $this->container['autoMetric'] = $autoMetric;

        return $this;
    }

    /**
     * Gets supportsMetric
     *
     * @return bool
     */
    public function getSupportsMetric()
    {
        return $this->container['supportsMetric'];
    }

    /**
     * Sets supportsMetric
     *
     * @param bool $supportsMetric True if metric configuration is supported.
     *
     * @return $this
     */
    public function setSupportsMetric($supportsMetric)
    {
        $this->container['supportsMetric'] = $supportsMetric;

        return $this;
    }

    /**
     * Gets pingEnabled
     *
     * @return bool
     */
    public function getPingEnabled()
    {
        return $this->container['pingEnabled'];
    }

    /**
     * Sets pingEnabled
     *
     * @param bool $pingEnabled Set to true to enable this address family on this interface to respond to ping requests.
     *
     * @return $this
     */
    public function setPingEnabled($pingEnabled)
    {
        $this->container['pingEnabled'] = $pingEnabled;

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


