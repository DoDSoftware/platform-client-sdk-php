<?php
/**
 * ImportShortTermForecastRequest
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
 * ImportShortTermForecastRequest Class Doc Comment
 *
 * @category Class
 * @description Request body for importing a short term forecast
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ImportShortTermForecastRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ImportShortTermForecastRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'fileName' => 'string',
        'description' => 'string',
        'routeGroupList' => '\PureCloudPlatform\Client\V2\Model\RouteGroupList',
        'partialUploadIds' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'fileName' => null,
        'description' => null,
        'routeGroupList' => null,
        'partialUploadIds' => null
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
        'fileName' => 'fileName',
        'description' => 'description',
        'routeGroupList' => 'routeGroupList',
        'partialUploadIds' => 'partialUploadIds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fileName' => 'setFileName',
        'description' => 'setDescription',
        'routeGroupList' => 'setRouteGroupList',
        'partialUploadIds' => 'setPartialUploadIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fileName' => 'getFileName',
        'description' => 'getDescription',
        'routeGroupList' => 'getRouteGroupList',
        'partialUploadIds' => 'getPartialUploadIds'
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
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['routeGroupList'] = isset($data['routeGroupList']) ? $data['routeGroupList'] : null;
        $this->container['partialUploadIds'] = isset($data['partialUploadIds']) ? $data['partialUploadIds'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['routeGroupList'] === null) {
            $invalidProperties[] = "'routeGroupList' can't be null";
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
     * Gets fileName
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
     * Sets fileName
     *
     * @param string $fileName The file name, if applicable, this data was extracted from (display purposes only)
     *
     * @return $this
     */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description for the imported forecast.  Pass an empty string for no description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets routeGroupList
     *
     * @return \PureCloudPlatform\Client\V2\Model\RouteGroupList
     */
    public function getRouteGroupList()
    {
        return $this->container['routeGroupList'];
    }

    /**
     * Sets routeGroupList
     *
     * @param \PureCloudPlatform\Client\V2\Model\RouteGroupList $routeGroupList The raw data to import
     *
     * @return $this
     */
    public function setRouteGroupList($routeGroupList)
    {
        $this->container['routeGroupList'] = $routeGroupList;

        return $this;
    }

    /**
     * Gets partialUploadIds
     *
     * @return string[]
     */
    public function getPartialUploadIds()
    {
        return $this->container['partialUploadIds'];
    }

    /**
     * Sets partialUploadIds
     *
     * @param string[] $partialUploadIds IDs of partial uploads to include in this imported forecast.  Only relevant for large forecasts
     *
     * @return $this
     */
    public function setPartialUploadIds($partialUploadIds)
    {
        $this->container['partialUploadIds'] = $partialUploadIds;

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


