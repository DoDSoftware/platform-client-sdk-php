<?php
/**
 * DocumentUpdate
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
 * DocumentUpdate Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DocumentUpdate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DocumentUpdate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'changeNumber' => 'int',
        'name' => 'string',
        'read' => 'bool',
        'addTags' => 'string[]',
        'removeTags' => 'string[]',
        'addTagIds' => 'string[]',
        'removeTagIds' => 'string[]',
        'updateAttributes' => '\PureCloudPlatform\Client\V2\Model\DocumentAttribute[]',
        'removeAttributes' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'changeNumber' => 'int32',
        'name' => null,
        'read' => null,
        'addTags' => null,
        'removeTags' => null,
        'addTagIds' => null,
        'removeTagIds' => null,
        'updateAttributes' => null,
        'removeAttributes' => null
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
        'changeNumber' => 'changeNumber',
        'name' => 'name',
        'read' => 'read',
        'addTags' => 'addTags',
        'removeTags' => 'removeTags',
        'addTagIds' => 'addTagIds',
        'removeTagIds' => 'removeTagIds',
        'updateAttributes' => 'updateAttributes',
        'removeAttributes' => 'removeAttributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'changeNumber' => 'setChangeNumber',
        'name' => 'setName',
        'read' => 'setRead',
        'addTags' => 'setAddTags',
        'removeTags' => 'setRemoveTags',
        'addTagIds' => 'setAddTagIds',
        'removeTagIds' => 'setRemoveTagIds',
        'updateAttributes' => 'setUpdateAttributes',
        'removeAttributes' => 'setRemoveAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'changeNumber' => 'getChangeNumber',
        'name' => 'getName',
        'read' => 'getRead',
        'addTags' => 'getAddTags',
        'removeTags' => 'getRemoveTags',
        'addTagIds' => 'getAddTagIds',
        'removeTagIds' => 'getRemoveTagIds',
        'updateAttributes' => 'getUpdateAttributes',
        'removeAttributes' => 'getRemoveAttributes'
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
        $this->container['changeNumber'] = isset($data['changeNumber']) ? $data['changeNumber'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['read'] = isset($data['read']) ? $data['read'] : null;
        $this->container['addTags'] = isset($data['addTags']) ? $data['addTags'] : null;
        $this->container['removeTags'] = isset($data['removeTags']) ? $data['removeTags'] : null;
        $this->container['addTagIds'] = isset($data['addTagIds']) ? $data['addTagIds'] : null;
        $this->container['removeTagIds'] = isset($data['removeTagIds']) ? $data['removeTagIds'] : null;
        $this->container['updateAttributes'] = isset($data['updateAttributes']) ? $data['updateAttributes'] : null;
        $this->container['removeAttributes'] = isset($data['removeAttributes']) ? $data['removeAttributes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
     * Gets changeNumber
     *
     * @return int
     */
    public function getChangeNumber()
    {
        return $this->container['changeNumber'];
    }

    /**
     * Sets changeNumber
     *
     * @param int $changeNumber changeNumber
     *
     * @return $this
     */
    public function setChangeNumber($changeNumber)
    {
        $this->container['changeNumber'] = $changeNumber;

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
     * @param string $name The name of the document
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets read
     *
     * @return bool
     */
    public function getRead()
    {
        return $this->container['read'];
    }

    /**
     * Sets read
     *
     * @param bool $read read
     *
     * @return $this
     */
    public function setRead($read)
    {
        $this->container['read'] = $read;

        return $this;
    }

    /**
     * Gets addTags
     *
     * @return string[]
     */
    public function getAddTags()
    {
        return $this->container['addTags'];
    }

    /**
     * Sets addTags
     *
     * @param string[] $addTags addTags
     *
     * @return $this
     */
    public function setAddTags($addTags)
    {
        $this->container['addTags'] = $addTags;

        return $this;
    }

    /**
     * Gets removeTags
     *
     * @return string[]
     */
    public function getRemoveTags()
    {
        return $this->container['removeTags'];
    }

    /**
     * Sets removeTags
     *
     * @param string[] $removeTags removeTags
     *
     * @return $this
     */
    public function setRemoveTags($removeTags)
    {
        $this->container['removeTags'] = $removeTags;

        return $this;
    }

    /**
     * Gets addTagIds
     *
     * @return string[]
     */
    public function getAddTagIds()
    {
        return $this->container['addTagIds'];
    }

    /**
     * Sets addTagIds
     *
     * @param string[] $addTagIds addTagIds
     *
     * @return $this
     */
    public function setAddTagIds($addTagIds)
    {
        $this->container['addTagIds'] = $addTagIds;

        return $this;
    }

    /**
     * Gets removeTagIds
     *
     * @return string[]
     */
    public function getRemoveTagIds()
    {
        return $this->container['removeTagIds'];
    }

    /**
     * Sets removeTagIds
     *
     * @param string[] $removeTagIds removeTagIds
     *
     * @return $this
     */
    public function setRemoveTagIds($removeTagIds)
    {
        $this->container['removeTagIds'] = $removeTagIds;

        return $this;
    }

    /**
     * Gets updateAttributes
     *
     * @return \PureCloudPlatform\Client\V2\Model\DocumentAttribute[]
     */
    public function getUpdateAttributes()
    {
        return $this->container['updateAttributes'];
    }

    /**
     * Sets updateAttributes
     *
     * @param \PureCloudPlatform\Client\V2\Model\DocumentAttribute[] $updateAttributes updateAttributes
     *
     * @return $this
     */
    public function setUpdateAttributes($updateAttributes)
    {
        $this->container['updateAttributes'] = $updateAttributes;

        return $this;
    }

    /**
     * Gets removeAttributes
     *
     * @return string[]
     */
    public function getRemoveAttributes()
    {
        return $this->container['removeAttributes'];
    }

    /**
     * Sets removeAttributes
     *
     * @param string[] $removeAttributes removeAttributes
     *
     * @return $this
     */
    public function setRemoveAttributes($removeAttributes)
    {
        $this->container['removeAttributes'] = $removeAttributes;

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


