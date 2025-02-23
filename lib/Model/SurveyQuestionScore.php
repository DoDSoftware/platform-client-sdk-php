<?php
/**
 * SurveyQuestionScore
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
 * SurveyQuestionScore Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SurveyQuestionScore implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SurveyQuestionScore';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'questionId' => 'string',
        'answerId' => 'string',
        'score' => 'int',
        'markedNA' => 'bool',
        'npsScore' => 'int',
        'npsTextAnswer' => 'string',
        'freeTextAnswer' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'questionId' => null,
        'answerId' => null,
        'score' => 'int32',
        'markedNA' => null,
        'npsScore' => 'int32',
        'npsTextAnswer' => null,
        'freeTextAnswer' => null
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
        'questionId' => 'questionId',
        'answerId' => 'answerId',
        'score' => 'score',
        'markedNA' => 'markedNA',
        'npsScore' => 'npsScore',
        'npsTextAnswer' => 'npsTextAnswer',
        'freeTextAnswer' => 'freeTextAnswer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'questionId' => 'setQuestionId',
        'answerId' => 'setAnswerId',
        'score' => 'setScore',
        'markedNA' => 'setMarkedNA',
        'npsScore' => 'setNpsScore',
        'npsTextAnswer' => 'setNpsTextAnswer',
        'freeTextAnswer' => 'setFreeTextAnswer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'questionId' => 'getQuestionId',
        'answerId' => 'getAnswerId',
        'score' => 'getScore',
        'markedNA' => 'getMarkedNA',
        'npsScore' => 'getNpsScore',
        'npsTextAnswer' => 'getNpsTextAnswer',
        'freeTextAnswer' => 'getFreeTextAnswer'
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
        $this->container['questionId'] = isset($data['questionId']) ? $data['questionId'] : null;
        $this->container['answerId'] = isset($data['answerId']) ? $data['answerId'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['markedNA'] = isset($data['markedNA']) ? $data['markedNA'] : null;
        $this->container['npsScore'] = isset($data['npsScore']) ? $data['npsScore'] : null;
        $this->container['npsTextAnswer'] = isset($data['npsTextAnswer']) ? $data['npsTextAnswer'] : null;
        $this->container['freeTextAnswer'] = isset($data['freeTextAnswer']) ? $data['freeTextAnswer'] : null;
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
     * Gets questionId
     *
     * @return string
     */
    public function getQuestionId()
    {
        return $this->container['questionId'];
    }

    /**
     * Sets questionId
     *
     * @param string $questionId questionId
     *
     * @return $this
     */
    public function setQuestionId($questionId)
    {
        $this->container['questionId'] = $questionId;

        return $this;
    }

    /**
     * Gets answerId
     *
     * @return string
     */
    public function getAnswerId()
    {
        return $this->container['answerId'];
    }

    /**
     * Sets answerId
     *
     * @param string $answerId answerId
     *
     * @return $this
     */
    public function setAnswerId($answerId)
    {
        $this->container['answerId'] = $answerId;

        return $this;
    }

    /**
     * Gets score
     *
     * @return int
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     *
     * @param int $score score
     *
     * @return $this
     */
    public function setScore($score)
    {
        $this->container['score'] = $score;

        return $this;
    }

    /**
     * Gets markedNA
     *
     * @return bool
     */
    public function getMarkedNA()
    {
        return $this->container['markedNA'];
    }

    /**
     * Sets markedNA
     *
     * @param bool $markedNA markedNA
     *
     * @return $this
     */
    public function setMarkedNA($markedNA)
    {
        $this->container['markedNA'] = $markedNA;

        return $this;
    }

    /**
     * Gets npsScore
     *
     * @return int
     */
    public function getNpsScore()
    {
        return $this->container['npsScore'];
    }

    /**
     * Sets npsScore
     *
     * @param int $npsScore npsScore
     *
     * @return $this
     */
    public function setNpsScore($npsScore)
    {
        $this->container['npsScore'] = $npsScore;

        return $this;
    }

    /**
     * Gets npsTextAnswer
     *
     * @return string
     */
    public function getNpsTextAnswer()
    {
        return $this->container['npsTextAnswer'];
    }

    /**
     * Sets npsTextAnswer
     *
     * @param string $npsTextAnswer npsTextAnswer
     *
     * @return $this
     */
    public function setNpsTextAnswer($npsTextAnswer)
    {
        $this->container['npsTextAnswer'] = $npsTextAnswer;

        return $this;
    }

    /**
     * Gets freeTextAnswer
     *
     * @return string
     */
    public function getFreeTextAnswer()
    {
        return $this->container['freeTextAnswer'];
    }

    /**
     * Sets freeTextAnswer
     *
     * @param string $freeTextAnswer freeTextAnswer
     *
     * @return $this
     */
    public function setFreeTextAnswer($freeTextAnswer)
    {
        $this->container['freeTextAnswer'] = $freeTextAnswer;

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


