<?php
/**
 * ForecastSourceDayPointer
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
 * ForecastSourceDayPointer Class Doc Comment
 *
 * @category Class
 * @description Pointer to look up source data for a short term forecast
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ForecastSourceDayPointer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ForecastSourceDayPointer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dayOfWeek' => 'string',
        'weight' => 'int',
        'date' => 'string',
        'fileName' => 'string',
        'dataKey' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dayOfWeek' => null,
        'weight' => 'int32',
        'date' => null,
        'fileName' => null,
        'dataKey' => null
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
        'dayOfWeek' => 'dayOfWeek',
        'weight' => 'weight',
        'date' => 'date',
        'fileName' => 'fileName',
        'dataKey' => 'dataKey'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dayOfWeek' => 'setDayOfWeek',
        'weight' => 'setWeight',
        'date' => 'setDate',
        'fileName' => 'setFileName',
        'dataKey' => 'setDataKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dayOfWeek' => 'getDayOfWeek',
        'weight' => 'getWeight',
        'date' => 'getDate',
        'fileName' => 'getFileName',
        'dataKey' => 'getDataKey'
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

    const DAY_OF_WEEK_SUNDAY = 'Sunday';
    const DAY_OF_WEEK_MONDAY = 'Monday';
    const DAY_OF_WEEK_TUESDAY = 'Tuesday';
    const DAY_OF_WEEK_WEDNESDAY = 'Wednesday';
    const DAY_OF_WEEK_THURSDAY = 'Thursday';
    const DAY_OF_WEEK_FRIDAY = 'Friday';
    const DAY_OF_WEEK_SATURDAY = 'Saturday';
    const DAY_OF_WEEK_EIGHTH_DAY = 'EighthDay';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDayOfWeekAllowableValues()
    {
        return [
            self::DAY_OF_WEEK_SUNDAY,
            self::DAY_OF_WEEK_MONDAY,
            self::DAY_OF_WEEK_TUESDAY,
            self::DAY_OF_WEEK_WEDNESDAY,
            self::DAY_OF_WEEK_THURSDAY,
            self::DAY_OF_WEEK_FRIDAY,
            self::DAY_OF_WEEK_SATURDAY,
            self::DAY_OF_WEEK_EIGHTH_DAY,
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
        $this->container['dayOfWeek'] = isset($data['dayOfWeek']) ? $data['dayOfWeek'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['dataKey'] = isset($data['dataKey']) ? $data['dataKey'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDayOfWeekAllowableValues();
        if (!is_null($this->container['dayOfWeek']) && !in_array($this->container['dayOfWeek'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'dayOfWeek', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets dayOfWeek
     *
     * @return string
     */
    public function getDayOfWeek()
    {
        return $this->container['dayOfWeek'];
    }

    /**
     * Sets dayOfWeek
     *
     * @param string $dayOfWeek The forecast day of week for this source data
     *
     * @return $this
     */
    public function setDayOfWeek($dayOfWeek)
    {
        $allowedValues = $this->getDayOfWeekAllowableValues();
        if (!is_null($dayOfWeek) && !in_array($dayOfWeek, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'dayOfWeek', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['dayOfWeek'] = $dayOfWeek;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return int
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param int $weight The relative weight to apply to this source data item for weighted averages
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param string $date The date this source data represents, in yyyy-MM-dd format
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
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
     * @param string $fileName The name of the source file this data came from if it originated from a data import
     *
     * @return $this
     */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;

        return $this;
    }

    /**
     * Gets dataKey
     *
     * @return string
     */
    public function getDataKey()
    {
        return $this->container['dataKey'];
    }

    /**
     * Sets dataKey
     *
     * @param string $dataKey The key to look up the forecast source data for this source day
     *
     * @return $this
     */
    public function setDataKey($dataKey)
    {
        $this->container['dataKey'] = $dataKey;

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


