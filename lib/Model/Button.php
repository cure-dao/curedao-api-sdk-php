<?php
/**
 * Button
 *
 */



namespace CureDAO\Client\Model;

use \ArrayAccess;
use \CureDAO\Client\ObjectSerializer;

/**
 * Button Class Doc Comment
 *
 */
class Button implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Button';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accessibility_text' => 'string',
        'action' => 'object',
        'additional_information' => 'string',
        'color' => 'string',
        'confirmation_text' => 'string',
        'function_name' => 'string',
        'parameters' => 'object',
        'html' => 'string',
        'id' => 'string',
        'image' => 'string',
        'ion_icon' => 'string',
        'link' => 'string',
        'state_name' => 'string',
        'state_params' => 'object',
        'success_toast_text' => 'string',
        'success_alert_title' => 'string',
        'success_alert_body' => 'string',
        'text' => 'string',
        'tooltip' => 'string',
        'webhook_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accessibility_text' => null,
        'action' => null,
        'additional_information' => null,
        'color' => null,
        'confirmation_text' => null,
        'function_name' => null,
        'parameters' => null,
        'html' => null,
        'id' => null,
        'image' => null,
        'ion_icon' => null,
        'link' => null,
        'state_name' => null,
        'state_params' => null,
        'success_toast_text' => null,
        'success_alert_title' => null,
        'success_alert_body' => null,
        'text' => null,
        'tooltip' => null,
        'webhook_url' => null
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
        'accessibility_text' => 'accessibilityText',
        'action' => 'action',
        'additional_information' => 'additionalInformation',
        'color' => 'color',
        'confirmation_text' => 'confirmationText',
        'function_name' => 'functionName',
        'parameters' => 'parameters',
        'html' => 'html',
        'id' => 'id',
        'image' => 'image',
        'ion_icon' => 'ionIcon',
        'link' => 'link',
        'state_name' => 'stateName',
        'state_params' => 'stateParams',
        'success_toast_text' => 'successToastText',
        'success_alert_title' => 'successAlertTitle',
        'success_alert_body' => 'successAlertBody',
        'text' => 'text',
        'tooltip' => 'tooltip',
        'webhook_url' => 'webhookUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accessibility_text' => 'setAccessibilityText',
        'action' => 'setAction',
        'additional_information' => 'setAdditionalInformation',
        'color' => 'setColor',
        'confirmation_text' => 'setConfirmationText',
        'function_name' => 'setFunctionName',
        'parameters' => 'setParameters',
        'html' => 'setHtml',
        'id' => 'setId',
        'image' => 'setImage',
        'ion_icon' => 'setIonIcon',
        'link' => 'setLink',
        'state_name' => 'setStateName',
        'state_params' => 'setStateParams',
        'success_toast_text' => 'setSuccessToastText',
        'success_alert_title' => 'setSuccessAlertTitle',
        'success_alert_body' => 'setSuccessAlertBody',
        'text' => 'setText',
        'tooltip' => 'setTooltip',
        'webhook_url' => 'setWebhookUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accessibility_text' => 'getAccessibilityText',
        'action' => 'getAction',
        'additional_information' => 'getAdditionalInformation',
        'color' => 'getColor',
        'confirmation_text' => 'getConfirmationText',
        'function_name' => 'getFunctionName',
        'parameters' => 'getParameters',
        'html' => 'getHtml',
        'id' => 'getId',
        'image' => 'getImage',
        'ion_icon' => 'getIonIcon',
        'link' => 'getLink',
        'state_name' => 'getStateName',
        'state_params' => 'getStateParams',
        'success_toast_text' => 'getSuccessToastText',
        'success_alert_title' => 'getSuccessAlertTitle',
        'success_alert_body' => 'getSuccessAlertBody',
        'text' => 'getText',
        'tooltip' => 'getTooltip',
        'webhook_url' => 'getWebhookUrl'
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
        $this->container['accessibility_text'] = isset($data['accessibility_text']) ? $data['accessibility_text'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['additional_information'] = isset($data['additional_information']) ? $data['additional_information'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['confirmation_text'] = isset($data['confirmation_text']) ? $data['confirmation_text'] : null;
        $this->container['function_name'] = isset($data['function_name']) ? $data['function_name'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['html'] = isset($data['html']) ? $data['html'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['ion_icon'] = isset($data['ion_icon']) ? $data['ion_icon'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['state_name'] = isset($data['state_name']) ? $data['state_name'] : null;
        $this->container['state_params'] = isset($data['state_params']) ? $data['state_params'] : null;
        $this->container['success_toast_text'] = isset($data['success_toast_text']) ? $data['success_toast_text'] : null;
        $this->container['success_alert_title'] = isset($data['success_alert_title']) ? $data['success_alert_title'] : null;
        $this->container['success_alert_body'] = isset($data['success_alert_body']) ? $data['success_alert_body'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['tooltip'] = isset($data['tooltip']) ? $data['tooltip'] : null;
        $this->container['webhook_url'] = isset($data['webhook_url']) ? $data['webhook_url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['link'] === null) {
            $invalidProperties[] = "'link' can't be null";
        }
        if ($this->container['text'] === null) {
            $invalidProperties[] = "'text' can't be null";
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
     * Gets accessibility_text
     *
     * @return string
     */
    public function getAccessibilityText()
    {
        return $this->container['accessibility_text'];
    }

    /**
     * Sets accessibility_text
     *
     * @param string $accessibility_text Ex: connect
     *
     * @return $this
     */
    public function setAccessibilityText($accessibility_text)
    {
        $this->container['accessibility_text'] = $accessibility_text;

        return $this;
    }

    /**
     * Gets action
     *
     * @return object
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param object $action Action data
     *
     * @return $this
     */
    public function setAction($action)
    {
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets additional_information
     *
     * @return string
     */
    public function getAdditionalInformation()
    {
        return $this->container['additional_information'];
    }

    /**
     * Sets additional_information
     *
     * @param string $additional_information Ex: connect
     *
     * @return $this
     */
    public function setAdditionalInformation($additional_information)
    {
        $this->container['additional_information'] = $additional_information;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string $color Ex: #f2f2f2
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets confirmation_text
     *
     * @return string
     */
    public function getConfirmationText()
    {
        return $this->container['confirmation_text'];
    }

    /**
     * Sets confirmation_text
     *
     * @param string $confirmation_text Text to show user before executing functionName
     *
     * @return $this
     */
    public function setConfirmationText($confirmation_text)
    {
        $this->container['confirmation_text'] = $confirmation_text;

        return $this;
    }

    /**
     * Gets function_name
     *
     * @return string
     */
    public function getFunctionName()
    {
        return $this->container['function_name'];
    }

    /**
     * Sets function_name
     *
     * @param string $function_name Name of function to call
     *
     * @return $this
     */
    public function setFunctionName($function_name)
    {
        $this->container['function_name'] = $function_name;

        return $this;
    }

    /**
     * Gets parameters
     *
     * @return object
     */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
     * Sets parameters
     *
     * @param object $parameters Data to provide to functionName or be copied to the card parameters when button is clicked and card is posted to the API
     *
     * @return $this
     */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;

        return $this;
    }

    /**
     * Gets html
     *
     * @return string
     */
    public function getHtml()
    {
        return $this->container['html'];
    }

    /**
     * Sets html
     *
     * @param string $html Ex: connect
     *
     * @return $this
     */
    public function setHtml($html)
    {
        $this->container['html'] = $html;

        return $this;
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
     * @param string $id HTML element id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param string $image Ex: https://image.jpg
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets ion_icon
     *
     * @return string
     */
    public function getIonIcon()
    {
        return $this->container['ion_icon'];
    }

    /**
     * Sets ion_icon
     *
     * @param string $ion_icon Ex: ion-refresh
     *
     * @return $this
     */
    public function setIonIcon($ion_icon)
    {
        $this->container['ion_icon'] = $ion_icon;

        return $this;
    }

    /**
     * Gets link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     *
     * @param string $link Ex: https://local.quantimo.do
     *
     * @return $this
     */
    public function setLink($link)
    {
        $this->container['link'] = $link;

        return $this;
    }

    /**
     * Gets state_name
     *
     * @return string
     */
    public function getStateName()
    {
        return $this->container['state_name'];
    }

    /**
     * Sets state_name
     *
     * @param string $state_name State to go to
     *
     * @return $this
     */
    public function setStateName($state_name)
    {
        $this->container['state_name'] = $state_name;

        return $this;
    }

    /**
     * Gets state_params
     *
     * @return object
     */
    public function getStateParams()
    {
        return $this->container['state_params'];
    }

    /**
     * Sets state_params
     *
     * @param object $state_params Data to provide to the state
     *
     * @return $this
     */
    public function setStateParams($state_params)
    {
        $this->container['state_params'] = $state_params;

        return $this;
    }

    /**
     * Gets success_toast_text
     *
     * @return string
     */
    public function getSuccessToastText()
    {
        return $this->container['success_toast_text'];
    }

    /**
     * Sets success_toast_text
     *
     * @param string $success_toast_text Text to show user after executing functionName
     *
     * @return $this
     */
    public function setSuccessToastText($success_toast_text)
    {
        $this->container['success_toast_text'] = $success_toast_text;

        return $this;
    }

    /**
     * Gets success_alert_title
     *
     * @return string
     */
    public function getSuccessAlertTitle()
    {
        return $this->container['success_alert_title'];
    }

    /**
     * Sets success_alert_title
     *
     * @param string $success_alert_title Text to show user after executing functionName
     *
     * @return $this
     */
    public function setSuccessAlertTitle($success_alert_title)
    {
        $this->container['success_alert_title'] = $success_alert_title;

        return $this;
    }

    /**
     * Gets success_alert_body
     *
     * @return string
     */
    public function getSuccessAlertBody()
    {
        return $this->container['success_alert_body'];
    }

    /**
     * Sets success_alert_body
     *
     * @param string $success_alert_body Text to show user after executing functionName
     *
     * @return $this
     */
    public function setSuccessAlertBody($success_alert_body)
    {
        $this->container['success_alert_body'] = $success_alert_body;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text Ex: Connect
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets tooltip
     *
     * @return string
     */
    public function getTooltip()
    {
        return $this->container['tooltip'];
    }

    /**
     * Sets tooltip
     *
     * @param string $tooltip Ex: This is a tooltip
     *
     * @return $this
     */
    public function setTooltip($tooltip)
    {
        $this->container['tooltip'] = $tooltip;

        return $this;
    }

    /**
     * Gets webhook_url
     *
     * @return string
     */
    public function getWebhookUrl()
    {
        return $this->container['webhook_url'];
    }

    /**
     * Sets webhook_url
     *
     * @param string $webhook_url Post here on button click
     *
     * @return $this
     */
    public function setWebhookUrl($webhook_url)
    {
        $this->container['webhook_url'] = $webhook_url;

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
