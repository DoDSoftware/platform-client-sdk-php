<?php
/**
 * AnalyticsSurvey
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
 * AnalyticsSurvey Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AnalyticsSurvey implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AnalyticsSurvey';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'surveyId' => 'string',
        'surveyFormId' => 'string',
        'surveyFormName' => 'string',
        'surveyFormContextId' => 'string',
        'eventTime' => '\DateTime',
        'userId' => 'string',
        'queueId' => 'string',
        'surveyStatus' => 'string',
        'surveyPromoterScore' => 'int',
        'surveyCompletedDate' => '\DateTime',
        'oSurveyTotalScore' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'surveyId' => null,
        'surveyFormId' => null,
        'surveyFormName' => null,
        'surveyFormContextId' => null,
        'eventTime' => 'date-time',
        'userId' => null,
        'queueId' => null,
        'surveyStatus' => null,
        'surveyPromoterScore' => 'int32',
        'surveyCompletedDate' => 'date-time',
        'oSurveyTotalScore' => 'int64'
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
        'surveyId' => 'surveyId',
        'surveyFormId' => 'surveyFormId',
        'surveyFormName' => 'surveyFormName',
        'surveyFormContextId' => 'surveyFormContextId',
        'eventTime' => 'eventTime',
        'userId' => 'userId',
        'queueId' => 'queueId',
        'surveyStatus' => 'surveyStatus',
        'surveyPromoterScore' => 'surveyPromoterScore',
        'surveyCompletedDate' => 'surveyCompletedDate',
        'oSurveyTotalScore' => 'oSurveyTotalScore'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'surveyId' => 'setSurveyId',
        'surveyFormId' => 'setSurveyFormId',
        'surveyFormName' => 'setSurveyFormName',
        'surveyFormContextId' => 'setSurveyFormContextId',
        'eventTime' => 'setEventTime',
        'userId' => 'setUserId',
        'queueId' => 'setQueueId',
        'surveyStatus' => 'setSurveyStatus',
        'surveyPromoterScore' => 'setSurveyPromoterScore',
        'surveyCompletedDate' => 'setSurveyCompletedDate',
        'oSurveyTotalScore' => 'setOSurveyTotalScore'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'surveyId' => 'getSurveyId',
        'surveyFormId' => 'getSurveyFormId',
        'surveyFormName' => 'getSurveyFormName',
        'surveyFormContextId' => 'getSurveyFormContextId',
        'eventTime' => 'getEventTime',
        'userId' => 'getUserId',
        'queueId' => 'getQueueId',
        'surveyStatus' => 'getSurveyStatus',
        'surveyPromoterScore' => 'getSurveyPromoterScore',
        'surveyCompletedDate' => 'getSurveyCompletedDate',
        'oSurveyTotalScore' => 'getOSurveyTotalScore'
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
        $this->container['surveyId'] = isset($data['surveyId']) ? $data['surveyId'] : null;
        $this->container['surveyFormId'] = isset($data['surveyFormId']) ? $data['surveyFormId'] : null;
        $this->container['surveyFormName'] = isset($data['surveyFormName']) ? $data['surveyFormName'] : null;
        $this->container['surveyFormContextId'] = isset($data['surveyFormContextId']) ? $data['surveyFormContextId'] : null;
        $this->container['eventTime'] = isset($data['eventTime']) ? $data['eventTime'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['queueId'] = isset($data['queueId']) ? $data['queueId'] : null;
        $this->container['surveyStatus'] = isset($data['surveyStatus']) ? $data['surveyStatus'] : null;
        $this->container['surveyPromoterScore'] = isset($data['surveyPromoterScore']) ? $data['surveyPromoterScore'] : null;
        $this->container['surveyCompletedDate'] = isset($data['surveyCompletedDate']) ? $data['surveyCompletedDate'] : null;
        $this->container['oSurveyTotalScore'] = isset($data['oSurveyTotalScore']) ? $data['oSurveyTotalScore'] : null;
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
     * Gets surveyId
     *
     * @return string
     */
    public function getSurveyId()
    {
        return $this->container['surveyId'];
    }

    /**
     * Sets surveyId
     *
     * @param string $surveyId Unique identifier for the survey
     *
     * @return $this
     */
    public function setSurveyId($surveyId)
    {
        $this->container['surveyId'] = $surveyId;

        return $this;
    }

    /**
     * Gets surveyFormId
     *
     * @return string
     */
    public function getSurveyFormId()
    {
        return $this->container['surveyFormId'];
    }

    /**
     * Sets surveyFormId
     *
     * @param string $surveyFormId Unique identifier for the survey form
     *
     * @return $this
     */
    public function setSurveyFormId($surveyFormId)
    {
        $this->container['surveyFormId'] = $surveyFormId;

        return $this;
    }

    /**
     * Gets surveyFormName
     *
     * @return string
     */
    public function getSurveyFormName()
    {
        return $this->container['surveyFormName'];
    }

    /**
     * Sets surveyFormName
     *
     * @param string $surveyFormName Name of the survey form
     *
     * @return $this
     */
    public function setSurveyFormName($surveyFormName)
    {
        $this->container['surveyFormName'] = $surveyFormName;

        return $this;
    }

    /**
     * Gets surveyFormContextId
     *
     * @return string
     */
    public function getSurveyFormContextId()
    {
        return $this->container['surveyFormContextId'];
    }

    /**
     * Sets surveyFormContextId
     *
     * @param string $surveyFormContextId Unique identifier for the survey form, regardless of version
     *
     * @return $this
     */
    public function setSurveyFormContextId($surveyFormContextId)
    {
        $this->container['surveyFormContextId'] = $surveyFormContextId;

        return $this;
    }

    /**
     * Gets eventTime
     *
     * @return \DateTime
     */
    public function getEventTime()
    {
        return $this->container['eventTime'];
    }

    /**
     * Sets eventTime
     *
     * @param \DateTime $eventTime Specifies when a survey occurred. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setEventTime($eventTime)
    {
        $this->container['eventTime'] = $eventTime;

        return $this;
    }

    /**
     * Gets userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     *
     * @param string $userId A unique identifier of the PureCloud user
     *
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

        return $this;
    }

    /**
     * Gets queueId
     *
     * @return string
     */
    public function getQueueId()
    {
        return $this->container['queueId'];
    }

    /**
     * Sets queueId
     *
     * @param string $queueId Unique identifier for the queue the conversation was on
     *
     * @return $this
     */
    public function setQueueId($queueId)
    {
        $this->container['queueId'] = $queueId;

        return $this;
    }

    /**
     * Gets surveyStatus
     *
     * @return string
     */
    public function getSurveyStatus()
    {
        return $this->container['surveyStatus'];
    }

    /**
     * Sets surveyStatus
     *
     * @param string $surveyStatus Survey status
     *
     * @return $this
     */
    public function setSurveyStatus($surveyStatus)
    {
        $this->container['surveyStatus'] = $surveyStatus;

        return $this;
    }

    /**
     * Gets surveyPromoterScore
     *
     * @return int
     */
    public function getSurveyPromoterScore()
    {
        return $this->container['surveyPromoterScore'];
    }

    /**
     * Sets surveyPromoterScore
     *
     * @param int $surveyPromoterScore Promoter score of the survey
     *
     * @return $this
     */
    public function setSurveyPromoterScore($surveyPromoterScore)
    {
        $this->container['surveyPromoterScore'] = $surveyPromoterScore;

        return $this;
    }

    /**
     * Gets surveyCompletedDate
     *
     * @return \DateTime
     */
    public function getSurveyCompletedDate()
    {
        return $this->container['surveyCompletedDate'];
    }

    /**
     * Sets surveyCompletedDate
     *
     * @param \DateTime $surveyCompletedDate Completion date/time of the survey. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setSurveyCompletedDate($surveyCompletedDate)
    {
        $this->container['surveyCompletedDate'] = $surveyCompletedDate;

        return $this;
    }

    /**
     * Gets oSurveyTotalScore
     *
     * @return int
     */
    public function getOSurveyTotalScore()
    {
        return $this->container['oSurveyTotalScore'];
    }

    /**
     * Sets oSurveyTotalScore
     *
     * @param int $oSurveyTotalScore oSurveyTotalScore
     *
     * @return $this
     */
    public function setOSurveyTotalScore($oSurveyTotalScore)
    {
        $this->container['oSurveyTotalScore'] = $oSurveyTotalScore;

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


