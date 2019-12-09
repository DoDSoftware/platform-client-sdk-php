<?php
/**
 * NoteListing
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
 * NoteListing Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NoteListing implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NoteListing';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'entities' => '\PureCloudPlatform\Client\V2\Model\Note[]',
        'pageSize' => 'int',
        'pageNumber' => 'int',
        'total' => 'int',
        'selfUri' => 'string',
        'firstUri' => 'string',
        'nextUri' => 'string',
        'lastUri' => 'string',
        'previousUri' => 'string',
        'pageCount' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'entities' => null,
        'pageSize' => 'int32',
        'pageNumber' => 'int32',
        'total' => 'int64',
        'selfUri' => 'uri',
        'firstUri' => 'uri',
        'nextUri' => 'uri',
        'lastUri' => 'uri',
        'previousUri' => 'uri',
        'pageCount' => 'int32'
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
        'entities' => 'entities',
        'pageSize' => 'pageSize',
        'pageNumber' => 'pageNumber',
        'total' => 'total',
        'selfUri' => 'selfUri',
        'firstUri' => 'firstUri',
        'nextUri' => 'nextUri',
        'lastUri' => 'lastUri',
        'previousUri' => 'previousUri',
        'pageCount' => 'pageCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'entities' => 'setEntities',
        'pageSize' => 'setPageSize',
        'pageNumber' => 'setPageNumber',
        'total' => 'setTotal',
        'selfUri' => 'setSelfUri',
        'firstUri' => 'setFirstUri',
        'nextUri' => 'setNextUri',
        'lastUri' => 'setLastUri',
        'previousUri' => 'setPreviousUri',
        'pageCount' => 'setPageCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'entities' => 'getEntities',
        'pageSize' => 'getPageSize',
        'pageNumber' => 'getPageNumber',
        'total' => 'getTotal',
        'selfUri' => 'getSelfUri',
        'firstUri' => 'getFirstUri',
        'nextUri' => 'getNextUri',
        'lastUri' => 'getLastUri',
        'previousUri' => 'getPreviousUri',
        'pageCount' => 'getPageCount'
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
        $this->container['entities'] = isset($data['entities']) ? $data['entities'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['pageNumber'] = isset($data['pageNumber']) ? $data['pageNumber'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['selfUri'] = isset($data['selfUri']) ? $data['selfUri'] : null;
        $this->container['firstUri'] = isset($data['firstUri']) ? $data['firstUri'] : null;
        $this->container['nextUri'] = isset($data['nextUri']) ? $data['nextUri'] : null;
        $this->container['lastUri'] = isset($data['lastUri']) ? $data['lastUri'] : null;
        $this->container['previousUri'] = isset($data['previousUri']) ? $data['previousUri'] : null;
        $this->container['pageCount'] = isset($data['pageCount']) ? $data['pageCount'] : null;
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
     * Gets entities
     *
     * @return \PureCloudPlatform\Client\V2\Model\Note[]
     */
    public function getEntities()
    {
        return $this->container['entities'];
    }

    /**
     * Sets entities
     *
     * @param \PureCloudPlatform\Client\V2\Model\Note[] $entities entities
     *
     * @return $this
     */
    public function setEntities($entities)
    {
        $this->container['entities'] = $entities;

        return $this;
    }

    /**
     * Gets pageSize
     *
     * @return int
     */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
     * Sets pageSize
     *
     * @param int $pageSize pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;

        return $this;
    }

    /**
     * Gets pageNumber
     *
     * @return int
     */
    public function getPageNumber()
    {
        return $this->container['pageNumber'];
    }

    /**
     * Sets pageNumber
     *
     * @param int $pageNumber pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        $this->container['pageNumber'] = $pageNumber;

        return $this;
    }

    /**
     * Gets total
     *
     * @return int
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param int $total total
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

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
     * @param string $selfUri selfUri
     *
     * @return $this
     */
    public function setSelfUri($selfUri)
    {
        $this->container['selfUri'] = $selfUri;

        return $this;
    }

    /**
     * Gets firstUri
     *
     * @return string
     */
    public function getFirstUri()
    {
        return $this->container['firstUri'];
    }

    /**
     * Sets firstUri
     *
     * @param string $firstUri firstUri
     *
     * @return $this
     */
    public function setFirstUri($firstUri)
    {
        $this->container['firstUri'] = $firstUri;

        return $this;
    }

    /**
     * Gets nextUri
     *
     * @return string
     */
    public function getNextUri()
    {
        return $this->container['nextUri'];
    }

    /**
     * Sets nextUri
     *
     * @param string $nextUri nextUri
     *
     * @return $this
     */
    public function setNextUri($nextUri)
    {
        $this->container['nextUri'] = $nextUri;

        return $this;
    }

    /**
     * Gets lastUri
     *
     * @return string
     */
    public function getLastUri()
    {
        return $this->container['lastUri'];
    }

    /**
     * Sets lastUri
     *
     * @param string $lastUri lastUri
     *
     * @return $this
     */
    public function setLastUri($lastUri)
    {
        $this->container['lastUri'] = $lastUri;

        return $this;
    }

    /**
     * Gets previousUri
     *
     * @return string
     */
    public function getPreviousUri()
    {
        return $this->container['previousUri'];
    }

    /**
     * Sets previousUri
     *
     * @param string $previousUri previousUri
     *
     * @return $this
     */
    public function setPreviousUri($previousUri)
    {
        $this->container['previousUri'] = $previousUri;

        return $this;
    }

    /**
     * Gets pageCount
     *
     * @return int
     */
    public function getPageCount()
    {
        return $this->container['pageCount'];
    }

    /**
     * Sets pageCount
     *
     * @param int $pageCount pageCount
     *
     * @return $this
     */
    public function setPageCount($pageCount)
    {
        $this->container['pageCount'] = $pageCount;

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


