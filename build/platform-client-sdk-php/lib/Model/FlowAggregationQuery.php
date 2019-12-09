<?php
/**
 * FlowAggregationQuery
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
 * FlowAggregationQuery Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FlowAggregationQuery implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FlowAggregationQuery';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'interval' => 'string',
        'granularity' => 'string',
        'timeZone' => 'string',
        'groupBy' => 'string[]',
        'filter' => '\PureCloudPlatform\Client\V2\Model\FlowAggregateQueryFilter',
        'metrics' => 'string[]',
        'flattenMultivaluedDimensions' => 'bool',
        'views' => '\PureCloudPlatform\Client\V2\Model\FlowAggregationView[]',
        'alternateTimeDimension' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'interval' => null,
        'granularity' => null,
        'timeZone' => null,
        'groupBy' => null,
        'filter' => null,
        'metrics' => null,
        'flattenMultivaluedDimensions' => null,
        'views' => null,
        'alternateTimeDimension' => null
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
        'interval' => 'interval',
        'granularity' => 'granularity',
        'timeZone' => 'timeZone',
        'groupBy' => 'groupBy',
        'filter' => 'filter',
        'metrics' => 'metrics',
        'flattenMultivaluedDimensions' => 'flattenMultivaluedDimensions',
        'views' => 'views',
        'alternateTimeDimension' => 'alternateTimeDimension'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'interval' => 'setInterval',
        'granularity' => 'setGranularity',
        'timeZone' => 'setTimeZone',
        'groupBy' => 'setGroupBy',
        'filter' => 'setFilter',
        'metrics' => 'setMetrics',
        'flattenMultivaluedDimensions' => 'setFlattenMultivaluedDimensions',
        'views' => 'setViews',
        'alternateTimeDimension' => 'setAlternateTimeDimension'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'interval' => 'getInterval',
        'granularity' => 'getGranularity',
        'timeZone' => 'getTimeZone',
        'groupBy' => 'getGroupBy',
        'filter' => 'getFilter',
        'metrics' => 'getMetrics',
        'flattenMultivaluedDimensions' => 'getFlattenMultivaluedDimensions',
        'views' => 'getViews',
        'alternateTimeDimension' => 'getAlternateTimeDimension'
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

    const GROUP_BY_ADDRESS_FROM = 'addressFrom';
    const GROUP_BY_ADDRESS_TO = 'addressTo';
    const GROUP_BY_AGENT_SCORE = 'agentScore';
    const GROUP_BY_ANI = 'ani';
    const GROUP_BY_CONVERSATION_ID = 'conversationId';
    const GROUP_BY_CONVERTED_FROM = 'convertedFrom';
    const GROUP_BY_CONVERTED_TO = 'convertedTo';
    const GROUP_BY_DIRECTION = 'direction';
    const GROUP_BY_DISCONNECT_TYPE = 'disconnectType';
    const GROUP_BY_DIVISION_ID = 'divisionId';
    const GROUP_BY_DNIS = 'dnis';
    const GROUP_BY_EDGE_ID = 'edgeId';
    const GROUP_BY_ENDING_LANGUAGE = 'endingLanguage';
    const GROUP_BY_ENTRY_REASON = 'entryReason';
    const GROUP_BY_ENTRY_TYPE = 'entryType';
    const GROUP_BY_EXIT_REASON = 'exitReason';
    const GROUP_BY_EXTERNAL_ORGANIZATION_ID = 'externalOrganizationId';
    const GROUP_BY_FLAGGED_REASON = 'flaggedReason';
    const GROUP_BY_FLOW_ID = 'flowId';
    const GROUP_BY_FLOW_NAME = 'flowName';
    const GROUP_BY_FLOW_OUT_TYPE = 'flowOutType';
    const GROUP_BY_FLOW_OUTCOME = 'flowOutcome';
    const GROUP_BY_FLOW_OUTCOME_ID = 'flowOutcomeId';
    const GROUP_BY_FLOW_OUTCOME_VALUE = 'flowOutcomeValue';
    const GROUP_BY_FLOW_TYPE = 'flowType';
    const GROUP_BY_FLOW_VERSION = 'flowVersion';
    const GROUP_BY_GROUP_ID = 'groupId';
    const GROUP_BY_INTERACTION_TYPE = 'interactionType';
    const GROUP_BY_JOURNEY_ACTION_ID = 'journeyActionId';
    const GROUP_BY_JOURNEY_ACTION_MAP_ID = 'journeyActionMapId';
    const GROUP_BY_JOURNEY_ACTION_MAP_VERSION = 'journeyActionMapVersion';
    const GROUP_BY_JOURNEY_CUSTOMER_ID = 'journeyCustomerId';
    const GROUP_BY_JOURNEY_CUSTOMER_ID_TYPE = 'journeyCustomerIdType';
    const GROUP_BY_JOURNEY_CUSTOMER_SESSION_ID = 'journeyCustomerSessionId';
    const GROUP_BY_JOURNEY_CUSTOMER_SESSION_ID_TYPE = 'journeyCustomerSessionIdType';
    const GROUP_BY_MEDIA_TYPE = 'mediaType';
    const GROUP_BY_MESSAGE_TYPE = 'messageType';
    const GROUP_BY_ORIGINATING_DIRECTION = 'originatingDirection';
    const GROUP_BY_OUTBOUND_CAMPAIGN_ID = 'outboundCampaignId';
    const GROUP_BY_OUTBOUND_CONTACT_ID = 'outboundContactId';
    const GROUP_BY_OUTBOUND_CONTACT_LIST_ID = 'outboundContactListId';
    const GROUP_BY_PARTICIPANT_NAME = 'participantName';
    const GROUP_BY_PEER_ID = 'peerId';
    const GROUP_BY_PROVIDER = 'provider';
    const GROUP_BY_PURPOSE = 'purpose';
    const GROUP_BY_QUEUE_ID = 'queueId';
    const GROUP_BY_REQUESTED_LANGUAGE_ID = 'requestedLanguageId';
    const GROUP_BY_REQUESTED_ROUTING_SKILL_ID = 'requestedRoutingSkillId';
    const GROUP_BY_ROOM_ID = 'roomId';
    const GROUP_BY_ROUTING_PRIORITY = 'routingPriority';
    const GROUP_BY_SCORED_AGENT_ID = 'scoredAgentId';
    const GROUP_BY_SESSION_DNIS = 'sessionDnis';
    const GROUP_BY_SESSION_ID = 'sessionId';
    const GROUP_BY_STARTING_LANGUAGE = 'startingLanguage';
    const GROUP_BY_STATION_ID = 'stationId';
    const GROUP_BY_TRANSFER_TARGET_ADDRESS = 'transferTargetAddress';
    const GROUP_BY_TRANSFER_TARGET_NAME = 'transferTargetName';
    const GROUP_BY_TRANSFER_TYPE = 'transferType';
    const GROUP_BY_USER_ID = 'userId';
    const GROUP_BY_WRAP_UP_CODE = 'wrapUpCode';
    const METRICS_N_FLOW = 'nFlow';
    const METRICS_N_FLOW_OUTCOME = 'nFlowOutcome';
    const METRICS_N_FLOW_OUTCOME_FAILED = 'nFlowOutcomeFailed';
    const METRICS_O_FLOW = 'oFlow';
    const METRICS_T_FLOW = 'tFlow';
    const METRICS_T_FLOW_DISCONNECT = 'tFlowDisconnect';
    const METRICS_T_FLOW_EXIT = 'tFlowExit';
    const METRICS_T_FLOW_OUTCOME = 'tFlowOutcome';
    const ALTERNATE_TIME_DIMENSION_EVENT_TIME = 'eventTime';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGroupByAllowableValues()
    {
        return [
            self::GROUP_BY_ADDRESS_FROM,
            self::GROUP_BY_ADDRESS_TO,
            self::GROUP_BY_AGENT_SCORE,
            self::GROUP_BY_ANI,
            self::GROUP_BY_CONVERSATION_ID,
            self::GROUP_BY_CONVERTED_FROM,
            self::GROUP_BY_CONVERTED_TO,
            self::GROUP_BY_DIRECTION,
            self::GROUP_BY_DISCONNECT_TYPE,
            self::GROUP_BY_DIVISION_ID,
            self::GROUP_BY_DNIS,
            self::GROUP_BY_EDGE_ID,
            self::GROUP_BY_ENDING_LANGUAGE,
            self::GROUP_BY_ENTRY_REASON,
            self::GROUP_BY_ENTRY_TYPE,
            self::GROUP_BY_EXIT_REASON,
            self::GROUP_BY_EXTERNAL_ORGANIZATION_ID,
            self::GROUP_BY_FLAGGED_REASON,
            self::GROUP_BY_FLOW_ID,
            self::GROUP_BY_FLOW_NAME,
            self::GROUP_BY_FLOW_OUT_TYPE,
            self::GROUP_BY_FLOW_OUTCOME,
            self::GROUP_BY_FLOW_OUTCOME_ID,
            self::GROUP_BY_FLOW_OUTCOME_VALUE,
            self::GROUP_BY_FLOW_TYPE,
            self::GROUP_BY_FLOW_VERSION,
            self::GROUP_BY_GROUP_ID,
            self::GROUP_BY_INTERACTION_TYPE,
            self::GROUP_BY_JOURNEY_ACTION_ID,
            self::GROUP_BY_JOURNEY_ACTION_MAP_ID,
            self::GROUP_BY_JOURNEY_ACTION_MAP_VERSION,
            self::GROUP_BY_JOURNEY_CUSTOMER_ID,
            self::GROUP_BY_JOURNEY_CUSTOMER_ID_TYPE,
            self::GROUP_BY_JOURNEY_CUSTOMER_SESSION_ID,
            self::GROUP_BY_JOURNEY_CUSTOMER_SESSION_ID_TYPE,
            self::GROUP_BY_MEDIA_TYPE,
            self::GROUP_BY_MESSAGE_TYPE,
            self::GROUP_BY_ORIGINATING_DIRECTION,
            self::GROUP_BY_OUTBOUND_CAMPAIGN_ID,
            self::GROUP_BY_OUTBOUND_CONTACT_ID,
            self::GROUP_BY_OUTBOUND_CONTACT_LIST_ID,
            self::GROUP_BY_PARTICIPANT_NAME,
            self::GROUP_BY_PEER_ID,
            self::GROUP_BY_PROVIDER,
            self::GROUP_BY_PURPOSE,
            self::GROUP_BY_QUEUE_ID,
            self::GROUP_BY_REQUESTED_LANGUAGE_ID,
            self::GROUP_BY_REQUESTED_ROUTING_SKILL_ID,
            self::GROUP_BY_ROOM_ID,
            self::GROUP_BY_ROUTING_PRIORITY,
            self::GROUP_BY_SCORED_AGENT_ID,
            self::GROUP_BY_SESSION_DNIS,
            self::GROUP_BY_SESSION_ID,
            self::GROUP_BY_STARTING_LANGUAGE,
            self::GROUP_BY_STATION_ID,
            self::GROUP_BY_TRANSFER_TARGET_ADDRESS,
            self::GROUP_BY_TRANSFER_TARGET_NAME,
            self::GROUP_BY_TRANSFER_TYPE,
            self::GROUP_BY_USER_ID,
            self::GROUP_BY_WRAP_UP_CODE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMetricsAllowableValues()
    {
        return [
            self::METRICS_N_FLOW,
            self::METRICS_N_FLOW_OUTCOME,
            self::METRICS_N_FLOW_OUTCOME_FAILED,
            self::METRICS_O_FLOW,
            self::METRICS_T_FLOW,
            self::METRICS_T_FLOW_DISCONNECT,
            self::METRICS_T_FLOW_EXIT,
            self::METRICS_T_FLOW_OUTCOME,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAlternateTimeDimensionAllowableValues()
    {
        return [
            self::ALTERNATE_TIME_DIMENSION_EVENT_TIME,
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
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['granularity'] = isset($data['granularity']) ? $data['granularity'] : null;
        $this->container['timeZone'] = isset($data['timeZone']) ? $data['timeZone'] : null;
        $this->container['groupBy'] = isset($data['groupBy']) ? $data['groupBy'] : null;
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['metrics'] = isset($data['metrics']) ? $data['metrics'] : null;
        $this->container['flattenMultivaluedDimensions'] = isset($data['flattenMultivaluedDimensions']) ? $data['flattenMultivaluedDimensions'] : null;
        $this->container['views'] = isset($data['views']) ? $data['views'] : null;
        $this->container['alternateTimeDimension'] = isset($data['alternateTimeDimension']) ? $data['alternateTimeDimension'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAlternateTimeDimensionAllowableValues();
        if (!is_null($this->container['alternateTimeDimension']) && !in_array($this->container['alternateTimeDimension'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'alternateTimeDimension', must be one of '%s'",
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
     * Gets interval
     *
     * @return string
     */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
     * Sets interval
     *
     * @param string $interval Behaves like one clause in a SQL WHERE. Specifies the date and time range of data being queried. Intervals are represented as an ISO-8601 string. For example: YYYY-MM-DDThh:mm:ss/YYYY-MM-DDThh:mm:ss
     *
     * @return $this
     */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;

        return $this;
    }

    /**
     * Gets granularity
     *
     * @return string
     */
    public function getGranularity()
    {
        return $this->container['granularity'];
    }

    /**
     * Sets granularity
     *
     * @param string $granularity Granularity aggregates metrics into subpartitions within the time interval specified. The default granularity is the same duration as the interval. Periods are represented as an ISO-8601 string. For example: P1D or P1DT12H
     *
     * @return $this
     */
    public function setGranularity($granularity)
    {
        $this->container['granularity'] = $granularity;

        return $this;
    }

    /**
     * Gets timeZone
     *
     * @return string
     */
    public function getTimeZone()
    {
        return $this->container['timeZone'];
    }

    /**
     * Sets timeZone
     *
     * @param string $timeZone Sets the time zone for the query interval, defaults to UTC. Time zones are represented as a string of the zone name as found in the IANA time zone database. For example: UTC, Etc/UTC, or Europe/London
     *
     * @return $this
     */
    public function setTimeZone($timeZone)
    {
        $this->container['timeZone'] = $timeZone;

        return $this;
    }

    /**
     * Gets groupBy
     *
     * @return string[]
     */
    public function getGroupBy()
    {
        return $this->container['groupBy'];
    }

    /**
     * Sets groupBy
     *
     * @param string[] $groupBy Behaves like a SQL GROUPBY. Allows for multiple levels of grouping as a list of dimensions. Partitions resulting aggregate computations into distinct named subgroups rather than across the entire result set as if it were one group.
     *
     * @return $this
     */
    public function setGroupBy($groupBy)
    {
        $allowedValues = $this->getGroupByAllowableValues();
        if (!is_null($groupBy) && array_diff($groupBy, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'groupBy', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['groupBy'] = $groupBy;

        return $this;
    }

    /**
     * Gets filter
     *
     * @return \PureCloudPlatform\Client\V2\Model\FlowAggregateQueryFilter
     */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
     * Sets filter
     *
     * @param \PureCloudPlatform\Client\V2\Model\FlowAggregateQueryFilter $filter Behaves like a SQL WHERE clause. This is ANDed with the interval parameter. Expresses boolean logical predicates as well as dimensional filters
     *
     * @return $this
     */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;

        return $this;
    }

    /**
     * Gets metrics
     *
     * @return string[]
     */
    public function getMetrics()
    {
        return $this->container['metrics'];
    }

    /**
     * Sets metrics
     *
     * @param string[] $metrics Behaves like a SQL SELECT clause. Enables retrieving only named metrics. If omitted, all metrics that are available will be returned (like SELECT *).
     *
     * @return $this
     */
    public function setMetrics($metrics)
    {
        $allowedValues = $this->getMetricsAllowableValues();
        if (!is_null($metrics) && array_diff($metrics, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'metrics', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['metrics'] = $metrics;

        return $this;
    }

    /**
     * Gets flattenMultivaluedDimensions
     *
     * @return bool
     */
    public function getFlattenMultivaluedDimensions()
    {
        return $this->container['flattenMultivaluedDimensions'];
    }

    /**
     * Sets flattenMultivaluedDimensions
     *
     * @param bool $flattenMultivaluedDimensions Flattens any multivalued dimensions used in response groups (e.g. ['a','b','c']->'a,b,c')
     *
     * @return $this
     */
    public function setFlattenMultivaluedDimensions($flattenMultivaluedDimensions)
    {
        $this->container['flattenMultivaluedDimensions'] = $flattenMultivaluedDimensions;

        return $this;
    }

    /**
     * Gets views
     *
     * @return \PureCloudPlatform\Client\V2\Model\FlowAggregationView[]
     */
    public function getViews()
    {
        return $this->container['views'];
    }

    /**
     * Sets views
     *
     * @param \PureCloudPlatform\Client\V2\Model\FlowAggregationView[] $views Custom derived metric views
     *
     * @return $this
     */
    public function setViews($views)
    {
        $this->container['views'] = $views;

        return $this;
    }

    /**
     * Gets alternateTimeDimension
     *
     * @return string
     */
    public function getAlternateTimeDimension()
    {
        return $this->container['alternateTimeDimension'];
    }

    /**
     * Sets alternateTimeDimension
     *
     * @param string $alternateTimeDimension Dimension to use as the alternative timestamp for data in the aggregate.  Choosing \"eventTime\" uses the actual time of the data event.
     *
     * @return $this
     */
    public function setAlternateTimeDimension($alternateTimeDimension)
    {
        $allowedValues = $this->getAlternateTimeDimensionAllowableValues();
        if (!is_null($alternateTimeDimension) && !in_array($alternateTimeDimension, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'alternateTimeDimension', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['alternateTimeDimension'] = $alternateTimeDimension;

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


