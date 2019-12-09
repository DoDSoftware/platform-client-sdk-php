<?php
/**
 * ShortTermForecastListItemResponse
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
 * ShortTermForecastListItemResponse Class Doc Comment
 *
 * @category Class
 * @description Abbreviated information for a short term forecast to be returned in a list
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShortTermForecastListItemResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShortTermForecastListItemResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'weekDate' => 'string',
        'description' => 'string',
        'creationMethod' => 'string',
        'metadata' => '\PureCloudPlatform\Client\V2\Model\WfmVersionedEntityMetadata',
        'selfUri' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'weekDate' => null,
        'description' => null,
        'creationMethod' => null,
        'metadata' => null,
        'selfUri' => 'uri'
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
        'id' => 'id',
        'weekDate' => 'weekDate',
        'description' => 'description',
        'creationMethod' => 'creationMethod',
        'metadata' => 'metadata',
        'selfUri' => 'selfUri'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'weekDate' => 'setWeekDate',
        'description' => 'setDescription',
        'creationMethod' => 'setCreationMethod',
        'metadata' => 'setMetadata',
        'selfUri' => 'setSelfUri'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'weekDate' => 'getWeekDate',
        'description' => 'getDescription',
        'creationMethod' => 'getCreationMethod',
        'metadata' => 'getMetadata',
        'selfUri' => 'getSelfUri'
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

    const CREATION_METHOD_IMPORT = 'Import';
    const CREATION_METHOD_HISTORICAL_WEIGHTED_AVERAGE = 'HistoricalWeightedAverage';
    const CREATION_METHOD_ADVANCED = 'Advanced';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCreationMethodAllowableValues()
    {
        return [
            self::CREATION_METHOD_IMPORT,
            self::CREATION_METHOD_HISTORICAL_WEIGHTED_AVERAGE,
            self::CREATION_METHOD_ADVANCED,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['weekDate'] = isset($data['weekDate']) ? $data['weekDate'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['creationMethod'] = isset($data['creationMethod']) ? $data['creationMethod'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['selfUri'] = isset($data['selfUri']) ? $data['selfUri'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['weekDate'] === null) {
            $invalidProperties[] = "'weekDate' can't be null";
        }
        $allowedValues = $this->getCreationMethodAllowableValues();
        if (!is_null($this->container['creationMethod']) && !in_array($this->container['creationMethod'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'creationMethod', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['metadata'] === null) {
            $invalidProperties[] = "'metadata' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The id of the short term forecast
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets weekDate
     *
     * @return string
     */
    public function getWeekDate()
    {
        return $this->container['weekDate'];
    }

    /**
     * Sets weekDate
     *
     * @param string $weekDate The weekDate of the short term forecast in yyyy-MM-dd format
     *
     * @return $this
     */
    public function setWeekDate($weekDate)
    {
        $this->container['weekDate'] = $weekDate;

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
     * @param string $description The description of the short term forecast
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets creationMethod
     *
     * @return string
     */
    public function getCreationMethod()
    {
        return $this->container['creationMethod'];
    }

    /**
     * Sets creationMethod
     *
     * @param string $creationMethod The method used to create this forecast
     *
     * @return $this
     */
    public function setCreationMethod($creationMethod)
    {
        $allowedValues = $this->getCreationMethodAllowableValues();
        if (!is_null($creationMethod) && !in_array($creationMethod, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'creationMethod', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['creationMethod'] = $creationMethod;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return \PureCloudPlatform\Client\V2\Model\WfmVersionedEntityMetadata
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param \PureCloudPlatform\Client\V2\Model\WfmVersionedEntityMetadata $metadata Metadata for this forecast
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets selfUri
     *
     * @return string
     */
    public function getSelfUri()
    {
        return $this->container['selfUri'];
    }

    /**
     * Sets selfUri
     *
     * @param string $selfUri The URI for this object
     *
     * @return $this
     */
    public function setSelfUri($selfUri)
    {
        $this->container['selfUri'] = $selfUri;

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


