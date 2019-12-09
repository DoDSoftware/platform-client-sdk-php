<?php
/**
 * ExternalContact
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
 * ExternalContact Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExternalContact implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ExternalContact';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'firstName' => 'string',
        'middleName' => 'string',
        'lastName' => 'string',
        'salutation' => 'string',
        'title' => 'string',
        'workPhone' => '\PureCloudPlatform\Client\V2\Model\PhoneNumber',
        'cellPhone' => '\PureCloudPlatform\Client\V2\Model\PhoneNumber',
        'homePhone' => '\PureCloudPlatform\Client\V2\Model\PhoneNumber',
        'otherPhone' => '\PureCloudPlatform\Client\V2\Model\PhoneNumber',
        'workEmail' => 'string',
        'personalEmail' => 'string',
        'otherEmail' => 'string',
        'address' => '\PureCloudPlatform\Client\V2\Model\ContactAddress',
        'twitterId' => '\PureCloudPlatform\Client\V2\Model\TwitterId',
        'lineId' => '\PureCloudPlatform\Client\V2\Model\LineId',
        'whatsAppId' => '\PureCloudPlatform\Client\V2\Model\WhatsAppId',
        'facebookId' => '\PureCloudPlatform\Client\V2\Model\FacebookId',
        'modifyDate' => '\DateTime',
        'createDate' => '\DateTime',
        'externalOrganization' => '\PureCloudPlatform\Client\V2\Model\ExternalOrganization',
        'surveyOptOut' => 'bool',
        'externalSystemUrl' => 'string',
        'externalDataSources' => '\PureCloudPlatform\Client\V2\Model\ExternalDataSource[]',
        'selfUri' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'firstName' => null,
        'middleName' => null,
        'lastName' => null,
        'salutation' => null,
        'title' => null,
        'workPhone' => null,
        'cellPhone' => null,
        'homePhone' => null,
        'otherPhone' => null,
        'workEmail' => null,
        'personalEmail' => null,
        'otherEmail' => null,
        'address' => null,
        'twitterId' => null,
        'lineId' => null,
        'whatsAppId' => null,
        'facebookId' => null,
        'modifyDate' => 'date-time',
        'createDate' => 'date-time',
        'externalOrganization' => null,
        'surveyOptOut' => null,
        'externalSystemUrl' => null,
        'externalDataSources' => null,
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
        'firstName' => 'firstName',
        'middleName' => 'middleName',
        'lastName' => 'lastName',
        'salutation' => 'salutation',
        'title' => 'title',
        'workPhone' => 'workPhone',
        'cellPhone' => 'cellPhone',
        'homePhone' => 'homePhone',
        'otherPhone' => 'otherPhone',
        'workEmail' => 'workEmail',
        'personalEmail' => 'personalEmail',
        'otherEmail' => 'otherEmail',
        'address' => 'address',
        'twitterId' => 'twitterId',
        'lineId' => 'lineId',
        'whatsAppId' => 'whatsAppId',
        'facebookId' => 'facebookId',
        'modifyDate' => 'modifyDate',
        'createDate' => 'createDate',
        'externalOrganization' => 'externalOrganization',
        'surveyOptOut' => 'surveyOptOut',
        'externalSystemUrl' => 'externalSystemUrl',
        'externalDataSources' => 'externalDataSources',
        'selfUri' => 'selfUri'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'firstName' => 'setFirstName',
        'middleName' => 'setMiddleName',
        'lastName' => 'setLastName',
        'salutation' => 'setSalutation',
        'title' => 'setTitle',
        'workPhone' => 'setWorkPhone',
        'cellPhone' => 'setCellPhone',
        'homePhone' => 'setHomePhone',
        'otherPhone' => 'setOtherPhone',
        'workEmail' => 'setWorkEmail',
        'personalEmail' => 'setPersonalEmail',
        'otherEmail' => 'setOtherEmail',
        'address' => 'setAddress',
        'twitterId' => 'setTwitterId',
        'lineId' => 'setLineId',
        'whatsAppId' => 'setWhatsAppId',
        'facebookId' => 'setFacebookId',
        'modifyDate' => 'setModifyDate',
        'createDate' => 'setCreateDate',
        'externalOrganization' => 'setExternalOrganization',
        'surveyOptOut' => 'setSurveyOptOut',
        'externalSystemUrl' => 'setExternalSystemUrl',
        'externalDataSources' => 'setExternalDataSources',
        'selfUri' => 'setSelfUri'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'firstName' => 'getFirstName',
        'middleName' => 'getMiddleName',
        'lastName' => 'getLastName',
        'salutation' => 'getSalutation',
        'title' => 'getTitle',
        'workPhone' => 'getWorkPhone',
        'cellPhone' => 'getCellPhone',
        'homePhone' => 'getHomePhone',
        'otherPhone' => 'getOtherPhone',
        'workEmail' => 'getWorkEmail',
        'personalEmail' => 'getPersonalEmail',
        'otherEmail' => 'getOtherEmail',
        'address' => 'getAddress',
        'twitterId' => 'getTwitterId',
        'lineId' => 'getLineId',
        'whatsAppId' => 'getWhatsAppId',
        'facebookId' => 'getFacebookId',
        'modifyDate' => 'getModifyDate',
        'createDate' => 'getCreateDate',
        'externalOrganization' => 'getExternalOrganization',
        'surveyOptOut' => 'getSurveyOptOut',
        'externalSystemUrl' => 'getExternalSystemUrl',
        'externalDataSources' => 'getExternalDataSources',
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
        $this->container['firstName'] = isset($data['firstName']) ? $data['firstName'] : null;
        $this->container['middleName'] = isset($data['middleName']) ? $data['middleName'] : null;
        $this->container['lastName'] = isset($data['lastName']) ? $data['lastName'] : null;
        $this->container['salutation'] = isset($data['salutation']) ? $data['salutation'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['workPhone'] = isset($data['workPhone']) ? $data['workPhone'] : null;
        $this->container['cellPhone'] = isset($data['cellPhone']) ? $data['cellPhone'] : null;
        $this->container['homePhone'] = isset($data['homePhone']) ? $data['homePhone'] : null;
        $this->container['otherPhone'] = isset($data['otherPhone']) ? $data['otherPhone'] : null;
        $this->container['workEmail'] = isset($data['workEmail']) ? $data['workEmail'] : null;
        $this->container['personalEmail'] = isset($data['personalEmail']) ? $data['personalEmail'] : null;
        $this->container['otherEmail'] = isset($data['otherEmail']) ? $data['otherEmail'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['twitterId'] = isset($data['twitterId']) ? $data['twitterId'] : null;
        $this->container['lineId'] = isset($data['lineId']) ? $data['lineId'] : null;
        $this->container['whatsAppId'] = isset($data['whatsAppId']) ? $data['whatsAppId'] : null;
        $this->container['facebookId'] = isset($data['facebookId']) ? $data['facebookId'] : null;
        $this->container['modifyDate'] = isset($data['modifyDate']) ? $data['modifyDate'] : null;
        $this->container['createDate'] = isset($data['createDate']) ? $data['createDate'] : null;
        $this->container['externalOrganization'] = isset($data['externalOrganization']) ? $data['externalOrganization'] : null;
        $this->container['surveyOptOut'] = isset($data['surveyOptOut']) ? $data['surveyOptOut'] : null;
        $this->container['externalSystemUrl'] = isset($data['externalSystemUrl']) ? $data['externalSystemUrl'] : null;
        $this->container['externalDataSources'] = isset($data['externalDataSources']) ? $data['externalDataSources'] : null;
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

        if ($this->container['firstName'] === null) {
            $invalidProperties[] = "'firstName' can't be null";
        }
        if ($this->container['lastName'] === null) {
            $invalidProperties[] = "'lastName' can't be null";
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
     * Gets firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['firstName'];
    }

    /**
     * Sets firstName
     *
     * @param string $firstName The first name of the contact.
     *
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->container['firstName'] = $firstName;

        return $this;
    }

    /**
     * Gets middleName
     *
     * @return string
     */
    public function getMiddleName()
    {
        return $this->container['middleName'];
    }

    /**
     * Sets middleName
     *
     * @param string $middleName middleName
     *
     * @return $this
     */
    public function setMiddleName($middleName)
    {
        $this->container['middleName'] = $middleName;

        return $this;
    }

    /**
     * Gets lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['lastName'];
    }

    /**
     * Sets lastName
     *
     * @param string $lastName The last name of the contact.
     *
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->container['lastName'] = $lastName;

        return $this;
    }

    /**
     * Gets salutation
     *
     * @return string
     */
    public function getSalutation()
    {
        return $this->container['salutation'];
    }

    /**
     * Sets salutation
     *
     * @param string $salutation salutation
     *
     * @return $this
     */
    public function setSalutation($salutation)
    {
        $this->container['salutation'] = $salutation;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets workPhone
     *
     * @return \PureCloudPlatform\Client\V2\Model\PhoneNumber
     */
    public function getWorkPhone()
    {
        return $this->container['workPhone'];
    }

    /**
     * Sets workPhone
     *
     * @param \PureCloudPlatform\Client\V2\Model\PhoneNumber $workPhone workPhone
     *
     * @return $this
     */
    public function setWorkPhone($workPhone)
    {
        $this->container['workPhone'] = $workPhone;

        return $this;
    }

    /**
     * Gets cellPhone
     *
     * @return \PureCloudPlatform\Client\V2\Model\PhoneNumber
     */
    public function getCellPhone()
    {
        return $this->container['cellPhone'];
    }

    /**
     * Sets cellPhone
     *
     * @param \PureCloudPlatform\Client\V2\Model\PhoneNumber $cellPhone cellPhone
     *
     * @return $this
     */
    public function setCellPhone($cellPhone)
    {
        $this->container['cellPhone'] = $cellPhone;

        return $this;
    }

    /**
     * Gets homePhone
     *
     * @return \PureCloudPlatform\Client\V2\Model\PhoneNumber
     */
    public function getHomePhone()
    {
        return $this->container['homePhone'];
    }

    /**
     * Sets homePhone
     *
     * @param \PureCloudPlatform\Client\V2\Model\PhoneNumber $homePhone homePhone
     *
     * @return $this
     */
    public function setHomePhone($homePhone)
    {
        $this->container['homePhone'] = $homePhone;

        return $this;
    }

    /**
     * Gets otherPhone
     *
     * @return \PureCloudPlatform\Client\V2\Model\PhoneNumber
     */
    public function getOtherPhone()
    {
        return $this->container['otherPhone'];
    }

    /**
     * Sets otherPhone
     *
     * @param \PureCloudPlatform\Client\V2\Model\PhoneNumber $otherPhone otherPhone
     *
     * @return $this
     */
    public function setOtherPhone($otherPhone)
    {
        $this->container['otherPhone'] = $otherPhone;

        return $this;
    }

    /**
     * Gets workEmail
     *
     * @return string
     */
    public function getWorkEmail()
    {
        return $this->container['workEmail'];
    }

    /**
     * Sets workEmail
     *
     * @param string $workEmail workEmail
     *
     * @return $this
     */
    public function setWorkEmail($workEmail)
    {
        $this->container['workEmail'] = $workEmail;

        return $this;
    }

    /**
     * Gets personalEmail
     *
     * @return string
     */
    public function getPersonalEmail()
    {
        return $this->container['personalEmail'];
    }

    /**
     * Sets personalEmail
     *
     * @param string $personalEmail personalEmail
     *
     * @return $this
     */
    public function setPersonalEmail($personalEmail)
    {
        $this->container['personalEmail'] = $personalEmail;

        return $this;
    }

    /**
     * Gets otherEmail
     *
     * @return string
     */
    public function getOtherEmail()
    {
        return $this->container['otherEmail'];
    }

    /**
     * Sets otherEmail
     *
     * @param string $otherEmail otherEmail
     *
     * @return $this
     */
    public function setOtherEmail($otherEmail)
    {
        $this->container['otherEmail'] = $otherEmail;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \PureCloudPlatform\Client\V2\Model\ContactAddress
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \PureCloudPlatform\Client\V2\Model\ContactAddress $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets twitterId
     *
     * @return \PureCloudPlatform\Client\V2\Model\TwitterId
     */
    public function getTwitterId()
    {
        return $this->container['twitterId'];
    }

    /**
     * Sets twitterId
     *
     * @param \PureCloudPlatform\Client\V2\Model\TwitterId $twitterId twitterId
     *
     * @return $this
     */
    public function setTwitterId($twitterId)
    {
        $this->container['twitterId'] = $twitterId;

        return $this;
    }

    /**
     * Gets lineId
     *
     * @return \PureCloudPlatform\Client\V2\Model\LineId
     */
    public function getLineId()
    {
        return $this->container['lineId'];
    }

    /**
     * Sets lineId
     *
     * @param \PureCloudPlatform\Client\V2\Model\LineId $lineId lineId
     *
     * @return $this
     */
    public function setLineId($lineId)
    {
        $this->container['lineId'] = $lineId;

        return $this;
    }

    /**
     * Gets whatsAppId
     *
     * @return \PureCloudPlatform\Client\V2\Model\WhatsAppId
     */
    public function getWhatsAppId()
    {
        return $this->container['whatsAppId'];
    }

    /**
     * Sets whatsAppId
     *
     * @param \PureCloudPlatform\Client\V2\Model\WhatsAppId $whatsAppId whatsAppId
     *
     * @return $this
     */
    public function setWhatsAppId($whatsAppId)
    {
        $this->container['whatsAppId'] = $whatsAppId;

        return $this;
    }

    /**
     * Gets facebookId
     *
     * @return \PureCloudPlatform\Client\V2\Model\FacebookId
     */
    public function getFacebookId()
    {
        return $this->container['facebookId'];
    }

    /**
     * Sets facebookId
     *
     * @param \PureCloudPlatform\Client\V2\Model\FacebookId $facebookId facebookId
     *
     * @return $this
     */
    public function setFacebookId($facebookId)
    {
        $this->container['facebookId'] = $facebookId;

        return $this;
    }

    /**
     * Gets modifyDate
     *
     * @return \DateTime
     */
    public function getModifyDate()
    {
        return $this->container['modifyDate'];
    }

    /**
     * Sets modifyDate
     *
     * @param \DateTime $modifyDate Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setModifyDate($modifyDate)
    {
        $this->container['modifyDate'] = $modifyDate;

        return $this;
    }

    /**
     * Gets createDate
     *
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->container['createDate'];
    }

    /**
     * Sets createDate
     *
     * @param \DateTime $createDate Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setCreateDate($createDate)
    {
        $this->container['createDate'] = $createDate;

        return $this;
    }

    /**
     * Gets externalOrganization
     *
     * @return \PureCloudPlatform\Client\V2\Model\ExternalOrganization
     */
    public function getExternalOrganization()
    {
        return $this->container['externalOrganization'];
    }

    /**
     * Sets externalOrganization
     *
     * @param \PureCloudPlatform\Client\V2\Model\ExternalOrganization $externalOrganization externalOrganization
     *
     * @return $this
     */
    public function setExternalOrganization($externalOrganization)
    {
        $this->container['externalOrganization'] = $externalOrganization;

        return $this;
    }

    /**
     * Gets surveyOptOut
     *
     * @return bool
     */
    public function getSurveyOptOut()
    {
        return $this->container['surveyOptOut'];
    }

    /**
     * Sets surveyOptOut
     *
     * @param bool $surveyOptOut surveyOptOut
     *
     * @return $this
     */
    public function setSurveyOptOut($surveyOptOut)
    {
        $this->container['surveyOptOut'] = $surveyOptOut;

        return $this;
    }

    /**
     * Gets externalSystemUrl
     *
     * @return string
     */
    public function getExternalSystemUrl()
    {
        return $this->container['externalSystemUrl'];
    }

    /**
     * Sets externalSystemUrl
     *
     * @param string $externalSystemUrl A string that identifies an external system-of-record resource that may have more detailed information on the contact. It should be a valid URL (including the http/https protocol, port, and path [if any]). The value is automatically trimmed of any leading and trailing whitespace.
     *
     * @return $this
     */
    public function setExternalSystemUrl($externalSystemUrl)
    {
        $this->container['externalSystemUrl'] = $externalSystemUrl;

        return $this;
    }

    /**
     * Gets externalDataSources
     *
     * @return \PureCloudPlatform\Client\V2\Model\ExternalDataSource[]
     */
    public function getExternalDataSources()
    {
        return $this->container['externalDataSources'];
    }

    /**
     * Sets externalDataSources
     *
     * @param \PureCloudPlatform\Client\V2\Model\ExternalDataSource[] $externalDataSources Links to the sources of data (e.g. one source might be a CRM) that contributed data to this record.  Read-only, and only populated when requested via expand param.
     *
     * @return $this
     */
    public function setExternalDataSources($externalDataSources)
    {
        $this->container['externalDataSources'] = $externalDataSources;

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

