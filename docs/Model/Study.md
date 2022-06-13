# Study

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Ex: population, cohort, or individual | 
**user_id** | **int** | The user id of the principal investigator or subject if an individual studies | [optional] 
**id** | **string** | ID of the cohort study which is necessary to allow participants to join | [optional] 
**cause_variable** | [**\CureDAO\Client\Model\Variable**](Variable.md) |  | [optional] 
**cause_variable_name** | **string** | Ex: Sleep Quality | [optional] 
**study_charts** | [**\CureDAO\Client\Model\StudyCharts**](StudyCharts.md) |  | [optional] 
**effect_variable** | [**\CureDAO\Client\Model\Variable**](Variable.md) |  | [optional] 
**effect_variable_name** | **string** | Ex: Overall Mood | [optional] 
**participant_instructions** | [**\CureDAO\Client\Model\ParticipantInstruction**](ParticipantInstruction.md) |  | [optional] 
**statistics** | [**\CureDAO\Client\Model\Correlation**](Correlation.md) |  | [optional] 
**study_card** | [**\CureDAO\Client\Model\Card**](Card.md) | Contains a summary, images, sharing buttons, and links | [optional] 
**study_html** | [**\CureDAO\Client\Model\StudyHtml**](StudyHtml.md) |  | [optional] 
**study_images** | [**\CureDAO\Client\Model\StudyImages**](StudyImages.md) |  | [optional] 
**study_links** | [**\CureDAO\Client\Model\StudyLinks**](StudyLinks.md) |  | [optional] 
**study_sharing** | [**\CureDAO\Client\Model\StudySharing**](StudySharing.md) |  | [optional] 
**study_text** | [**\CureDAO\Client\Model\StudyText**](StudyText.md) |  | [optional] 
**study_votes** | [**\CureDAO\Client\Model\StudyVotes**](StudyVotes.md) |  | [optional] 
**joined** | **bool** | True if you are sharing your data with this study | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
