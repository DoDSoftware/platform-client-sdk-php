# EdgeLine

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** | The name of the entity. | 
**description** | **string** | The resource&#39;s description. | [optional] 
**version** | **int** | The current version of the resource. | [optional] 
**dateCreated** | [**\DateTime**](\DateTime.md) | The date the resource was created. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**dateModified** | [**\DateTime**](\DateTime.md) | The date of the last modification to the resource. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**modifiedBy** | **string** | The ID of the user that last modified the resource. | [optional] 
**createdBy** | **string** | The ID of the user that created the resource. | [optional] 
**state** | **string** | Indicates if the resource is active, inactive, or deleted. | [optional] 
**modifiedByApp** | **string** | The application that last modified the resource. | [optional] 
**createdByApp** | **string** | The application that created the resource. | [optional] 
**schema** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) |  | [optional] 
**properties** | **map[string,object]** |  | [optional] 
**edge** | [**\PureCloudPlatform\Client\V2\Model\Edge**](Edge.md) |  | [optional] 
**edgeGroup** | [**\PureCloudPlatform\Client\V2\Model\EdgeGroup**](EdgeGroup.md) |  | [optional] 
**lineType** | **string** |  | [optional] 
**endpoint** | [**\PureCloudPlatform\Client\V2\Model\Endpoint**](Endpoint.md) |  | [optional] 
**ipAddress** | **string** |  | [optional] 
**logicalInterfaceId** | **string** |  | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


