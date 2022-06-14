# GroupsMembersResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**groups_members** | [**\CureDAO\Client\Models\GroupsMember[]**](GroupsMember.md) |  | 
**description** | **string** | GroupsMember | [optional] 
**summary** | **string** | GroupsMember | [optional] 
**image** | [**\CureDAO\Client\Models\Image**](Image.md) |  | [optional] 
**avatar** | **string** | Square icon png url | [optional] 
**ion_icon** | **string** | Ex: ion-ios-person | [optional] 
**html** | **string** | Embeddable list of study summaries with explanation at the top | [optional] 
**errors** | [**\CureDAO\Client\Models\Error[]**](Error.md) | Array of error objects with message property | [optional] 
**status** | **string** | ex. OK or ERROR | [optional] 
**success** | **bool** | true or false | [optional] 
**code** | **float** | Response code such as 200 | [optional] 
**link** | **string** | A super neat url you might want to share with your users! | [optional] 
**card** | [**\CureDAO\Client\Models\Card**](Card.md) | A super neat card with buttons and HTML that you can use in your app! | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
