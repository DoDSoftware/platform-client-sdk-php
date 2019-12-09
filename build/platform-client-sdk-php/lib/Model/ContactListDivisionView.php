<?php
/**
 * ContactListDivisionView
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
 * ContactListDivisionView Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContactListDivisionView implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ContactListDivisionView';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'division' => '\PureCloudPlatform\Client\V2\Model\Division',
        'columnNames' => 'string[]',
        'phoneColumns' => '\PureCloudPlatform\Client\V2\Model\ContactPhoneNumberColumn[]',
        'importStatus' => '\PureCloudPlatform\Client\V2\Model\ImportStatus',
        'size' => 'int',
        'selfUri' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'division' => null,
        'columnNames' => null,
        'phoneColumns' => null,
        'importStatus' => null,
        'size' => 'int64',
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
        'name' => 'name',
        'division' => 'division',
        'columnNames' => 'columnNames',
        'phoneColumns' => 'phoneColumns',
        'importStatus' => 'importStatus',
        'size' => 'size',
        'selfUri' => 'selfUri'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'division' => 'setDivision',
        'columnNames' => 'setColumnNames',
        'phoneColumns' => 'setPhoneColumns',
        'importStatus' => 'setImportStatus',
        'size' => 'setSize',
        'selfUri' => 'setSelfUri'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'division' => 'getDivision',
        'columnNames' => 'getColumnNames',
        'phoneColumns' => 'getPhoneColumns',
        'importStatus' => 'getImportStatus',
        'size' => 'getSize',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['division'] = isset($data['division']) ? $data['division'] : null;
        $this->container['columnNames'] = isset($data['columnNames']) ? $data['columnNames'] : null;
        $this->container['phoneColumns'] = isset($data['phoneColumns']) ? $data['phoneColumns'] : null;
        $this->container['importStatus'] = isset($data['importStatus']) ? $data['importStatus'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
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

        if ($this->container['columnNames'] === null) {
            $invalidProperties[] = "'columnNames' can't be null";
        }
        if ($this->container['phoneColumns'] === null) {
            $invalidProperties[] = "'phoneColumns' can't be null";
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
     * @param string $id The globally unique identifier for the object.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets division
     *
     * @return \PureCloudPlatform\Client\V2\Model\Division
     */
    public function getDivision()
    {
        return $this->container['division'];
    }

    /**
     * Sets division
     *
     * @param \PureCloudPlatform\Client\V2\Model\Division $division The division to which this entity belongs.
     *
     * @return $this
     */
    public function setDivision($division)
    {
        $this->container['division'] = $division;

        return $this;
    }

    /**
     * Gets columnNames
     *
     * @return string[]
     */
    public function getColumnNames()
    {
        return $this->container['columnNames'];
    }

    /**
     * Sets columnNames
     *
     * @param string[] $columnNames The names of the contact data columns.
     *
     * @return $this
     */
    public function setColumnNames($columnNames)
    {
        $this->container['columnNames'] = $columnNames;

        return $this;
    }

    /**
     * Gets phoneColumns
     *
     * @return \PureCloudPlatform\Client\V2\Model\ContactPhoneNumberColumn[]
     */
    public function getPhoneColumns()
    {
        return $this->container['phoneColumns'];
    }

    /**
     * Sets phoneColumns
     *
     * @param \PureCloudPlatform\Client\V2\Model\ContactPhoneNumberColumn[] $phoneColumns Indicates which columns are phone numbers.
     *
     * @return $this
     */
    public function setPhoneColumns($phoneColumns)
    {
        $this->container['phoneColumns'] = $phoneColumns;

        return $this;
    }

    /**
     * Gets importStatus
     *
     * @return \PureCloudPlatform\Client\V2\Model\ImportStatus
     */
    public function getImportStatus()
    {
        return $this->container['importStatus'];
    }

    /**
     * Sets importStatus
     *
     * @param \PureCloudPlatform\Client\V2\Model\ImportStatus $importStatus The status of the import process.
     *
     * @return $this
     */
    public function setImportStatus($importStatus)
    {
        $this->container['importStatus'] = $importStatus;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int $size The number of contacts in the ContactList.
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

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


