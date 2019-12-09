<?php
/**
 * RouteGroupAttributes
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
 * RouteGroupAttributes Class Doc Comment
 *
 * @category Class
 * @description Attributes for the associated route group
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RouteGroupAttributes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RouteGroupAttributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'queue' => '\PureCloudPlatform\Client\V2\Model\QueueReference',
        'mediaType' => 'string',
        'language' => '\PureCloudPlatform\Client\V2\Model\LanguageReference',
        'skills' => '\PureCloudPlatform\Client\V2\Model\RoutingSkillReference[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'queue' => null,
        'mediaType' => null,
        'language' => null,
        'skills' => null
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
        'queue' => 'queue',
        'mediaType' => 'mediaType',
        'language' => 'language',
        'skills' => 'skills'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'queue' => 'setQueue',
        'mediaType' => 'setMediaType',
        'language' => 'setLanguage',
        'skills' => 'setSkills'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'queue' => 'getQueue',
        'mediaType' => 'getMediaType',
        'language' => 'getLanguage',
        'skills' => 'getSkills'
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

    const MEDIA_TYPE_VOICE = 'Voice';
    const MEDIA_TYPE_CHAT = 'Chat';
    const MEDIA_TYPE_EMAIL = 'Email';
    const MEDIA_TYPE_CALLBACK = 'Callback';
    const MEDIA_TYPE_MESSAGE = 'Message';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMediaTypeAllowableValues()
    {
        return [
            self::MEDIA_TYPE_VOICE,
            self::MEDIA_TYPE_CHAT,
            self::MEDIA_TYPE_EMAIL,
            self::MEDIA_TYPE_CALLBACK,
            self::MEDIA_TYPE_MESSAGE,
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
        $this->container['queue'] = isset($data['queue']) ? $data['queue'] : null;
        $this->container['mediaType'] = isset($data['mediaType']) ? $data['mediaType'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['skills'] = isset($data['skills']) ? $data['skills'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['queue'] === null) {
            $invalidProperties[] = "'queue' can't be null";
        }
        if ($this->container['mediaType'] === null) {
            $invalidProperties[] = "'mediaType' can't be null";
        }
        $allowedValues = $this->getMediaTypeAllowableValues();
        if (!is_null($this->container['mediaType']) && !in_array($this->container['mediaType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'mediaType', must be one of '%s'",
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
     * Gets queue
     *
     * @return \PureCloudPlatform\Client\V2\Model\QueueReference
     */
    public function getQueue()
    {
        return $this->container['queue'];
    }

    /**
     * Sets queue
     *
     * @param \PureCloudPlatform\Client\V2\Model\QueueReference $queue The queue to which the associated route group applies
     *
     * @return $this
     */
    public function setQueue($queue)
    {
        $this->container['queue'] = $queue;

        return $this;
    }

    /**
     * Gets mediaType
     *
     * @return string
     */
    public function getMediaType()
    {
        return $this->container['mediaType'];
    }

    /**
     * Sets mediaType
     *
     * @param string $mediaType The media type to which the associated route group applies
     *
     * @return $this
     */
    public function setMediaType($mediaType)
    {
        $allowedValues = $this->getMediaTypeAllowableValues();
        if (!in_array($mediaType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'mediaType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['mediaType'] = $mediaType;

        return $this;
    }

    /**
     * Gets language
     *
     * @return \PureCloudPlatform\Client\V2\Model\LanguageReference
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param \PureCloudPlatform\Client\V2\Model\LanguageReference $language The language to which the associated route group applies
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets skills
     *
     * @return \PureCloudPlatform\Client\V2\Model\RoutingSkillReference[]
     */
    public function getSkills()
    {
        return $this->container['skills'];
    }

    /**
     * Sets skills
     *
     * @param \PureCloudPlatform\Client\V2\Model\RoutingSkillReference[] $skills The skill set to which the associated route group applies
     *
     * @return $this
     */
    public function setSkills($skills)
    {
        $this->container['skills'] = $skills;

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


