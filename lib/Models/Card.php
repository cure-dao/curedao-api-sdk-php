<?php
/**
 * Card
 *
 */

namespace CureDAO\Client\Models;

use ArrayAccess;
use CureDAO\Client\ObjectSerializer;

/**
 * Card Class
 */
class Card implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Card';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'action_sheet_buttons' => '\CureDAO\Client\Models\Button[]',
        'avatar' => 'string',
        'avatar_circular' => 'string',
        'background_color' => 'string',
        'buttons' => '\CureDAO\Client\Models\Button[]',
        'buttons_secondary' => '\CureDAO\Client\Models\Button[]',
        'content' => 'string',
        'header_title' => 'string',
        'html' => 'string',
        'html_content' => 'string',
        'id' => 'string',
        'image' => 'string',
        'input_fields' => '\CureDAO\Client\Models\InputField[]',
        'ion_icon' => 'string',
        'link' => 'string',
        'parameters' => 'object',
        'related_cards' => '\CureDAO\Client\Models\Card[]',
        'selected_button' => '\CureDAO\Client\Models\Button',
        'sharing_body' => 'string',
        'sharing_buttons' => '\CureDAO\Client\Models\Button[]',
        'sharing_title' => 'string',
        'sub_header' => 'string',
        'sub_title' => 'string',
        'title' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'action_sheet_buttons' => null,
        'avatar' => null,
        'avatar_circular' => null,
        'background_color' => null,
        'buttons' => null,
        'buttons_secondary' => null,
        'content' => null,
        'header_title' => null,
        'html' => null,
        'html_content' => null,
        'id' => null,
        'image' => null,
        'input_fields' => null,
        'ion_icon' => null,
        'link' => null,
        'parameters' => null,
        'related_cards' => null,
        'selected_button' => null,
        'sharing_body' => null,
        'sharing_buttons' => null,
        'sharing_title' => null,
        'sub_header' => null,
        'sub_title' => null,
        'title' => null
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
        'action_sheet_buttons' => 'actionSheetButtons',
        'avatar' => 'avatar',
        'avatar_circular' => 'avatarCircular',
        'background_color' => 'backgroundColor',
        'buttons' => 'buttons',
        'buttons_secondary' => 'buttonsSecondary',
        'content' => 'content',
        'header_title' => 'headerTitle',
        'html' => 'html',
        'html_content' => 'htmlContent',
        'id' => 'id',
        'image' => 'image',
        'input_fields' => 'inputFields',
        'ion_icon' => 'ionIcon',
        'link' => 'link',
        'parameters' => 'parameters',
        'related_cards' => 'relatedCards',
        'selected_button' => 'selectedButton',
        'sharing_body' => 'sharingBody',
        'sharing_buttons' => 'sharingButtons',
        'sharing_title' => 'sharingTitle',
        'sub_header' => 'subHeader',
        'sub_title' => 'subTitle',
        'title' => 'title'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'action_sheet_buttons' => 'setActionSheetButtons',
        'avatar' => 'setAvatar',
        'avatar_circular' => 'setAvatarCircular',
        'background_color' => 'setBackgroundColor',
        'buttons' => 'setButtons',
        'buttons_secondary' => 'setButtonsSecondary',
        'content' => 'setContent',
        'header_title' => 'setHeaderTitle',
        'html' => 'setHtml',
        'html_content' => 'setHtmlContent',
        'id' => 'setId',
        'image' => 'setImage',
        'input_fields' => 'setInputFields',
        'ion_icon' => 'setIonIcon',
        'link' => 'setLink',
        'parameters' => 'setParameters',
        'related_cards' => 'setRelatedCards',
        'selected_button' => 'setSelectedButton',
        'sharing_body' => 'setSharingBody',
        'sharing_buttons' => 'setSharingButtons',
        'sharing_title' => 'setSharingTitle',
        'sub_header' => 'setSubHeader',
        'sub_title' => 'setSubTitle',
        'title' => 'setTitle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'action_sheet_buttons' => 'getActionSheetButtons',
        'avatar' => 'getAvatar',
        'avatar_circular' => 'getAvatarCircular',
        'background_color' => 'getBackgroundColor',
        'buttons' => 'getButtons',
        'buttons_secondary' => 'getButtonsSecondary',
        'content' => 'getContent',
        'header_title' => 'getHeaderTitle',
        'html' => 'getHtml',
        'html_content' => 'getHtmlContent',
        'id' => 'getId',
        'image' => 'getImage',
        'input_fields' => 'getInputFields',
        'ion_icon' => 'getIonIcon',
        'link' => 'getLink',
        'parameters' => 'getParameters',
        'related_cards' => 'getRelatedCards',
        'selected_button' => 'getSelectedButton',
        'sharing_body' => 'getSharingBody',
        'sharing_buttons' => 'getSharingButtons',
        'sharing_title' => 'getSharingTitle',
        'sub_header' => 'getSubHeader',
        'sub_title' => 'getSubTitle',
        'title' => 'getTitle'
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
        $this->container['action_sheet_buttons'] = isset($data['action_sheet_buttons']) ? $data['action_sheet_buttons'] : null;
        $this->container['avatar'] = isset($data['avatar']) ? $data['avatar'] : null;
        $this->container['avatar_circular'] = isset($data['avatar_circular']) ? $data['avatar_circular'] : null;
        $this->container['background_color'] = isset($data['background_color']) ? $data['background_color'] : null;
        $this->container['buttons'] = isset($data['buttons']) ? $data['buttons'] : null;
        $this->container['buttons_secondary'] = isset($data['buttons_secondary']) ? $data['buttons_secondary'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['header_title'] = isset($data['header_title']) ? $data['header_title'] : null;
        $this->container['html'] = isset($data['html']) ? $data['html'] : null;
        $this->container['html_content'] = isset($data['html_content']) ? $data['html_content'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['input_fields'] = isset($data['input_fields']) ? $data['input_fields'] : null;
        $this->container['ion_icon'] = isset($data['ion_icon']) ? $data['ion_icon'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['related_cards'] = isset($data['related_cards']) ? $data['related_cards'] : null;
        $this->container['selected_button'] = isset($data['selected_button']) ? $data['selected_button'] : null;
        $this->container['sharing_body'] = isset($data['sharing_body']) ? $data['sharing_body'] : null;
        $this->container['sharing_buttons'] = isset($data['sharing_buttons']) ? $data['sharing_buttons'] : null;
        $this->container['sharing_title'] = isset($data['sharing_title']) ? $data['sharing_title'] : null;
        $this->container['sub_header'] = isset($data['sub_header']) ? $data['sub_header'] : null;
        $this->container['sub_title'] = isset($data['sub_title']) ? $data['sub_title'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
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
     * Gets action_sheet_buttons
     *
     * @return \CureDAO\Client\Models\Button[]
     */
    public function getActionSheetButtons()
    {
        return $this->container['action_sheet_buttons'];
    }

    /**
     * Sets action_sheet_buttons
     *
     * @param \CureDAO\Client\Models\Button[] $action_sheet_buttons action_sheet_buttons
     *
     * @return $this
     */
    public function setActionSheetButtons($action_sheet_buttons)
    {
        $this->container['action_sheet_buttons'] = $action_sheet_buttons;

        return $this;
    }

    /**
     * Gets avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->container['avatar'];
    }

    /**
     * Sets avatar
     *
     * @param string $avatar Smaller square image
     *
     * @return $this
     */
    public function setAvatar($avatar)
    {
        $this->container['avatar'] = $avatar;

        return $this;
    }

    /**
     * Gets avatar_circular
     *
     * @return string
     */
    public function getAvatarCircular()
    {
        return $this->container['avatar_circular'];
    }

    /**
     * Sets avatar_circular
     *
     * @param string $avatar_circular Smaller circular image
     *
     * @return $this
     */
    public function setAvatarCircular($avatar_circular)
    {
        $this->container['avatar_circular'] = $avatar_circular;

        return $this;
    }

    /**
     * Gets background_color
     *
     * @return string
     */
    public function getBackgroundColor()
    {
        return $this->container['background_color'];
    }

    /**
     * Sets background_color
     *
     * @param string $background_color Ex: #f2f2f2
     *
     * @return $this
     */
    public function setBackgroundColor($background_color)
    {
        $this->container['background_color'] = $background_color;

        return $this;
    }

    /**
     * Gets buttons
     *
     * @return \CureDAO\Client\Models\Button[]
     */
    public function getButtons()
    {
        return $this->container['buttons'];
    }

    /**
     * Sets buttons
     *
     * @param \CureDAO\Client\Models\Button[] $buttons buttons
     *
     * @return $this
     */
    public function setButtons($buttons)
    {
        $this->container['buttons'] = $buttons;

        return $this;
    }

    /**
     * Gets buttons_secondary
     *
     * @return \CureDAO\Client\Models\Button[]
     */
    public function getButtonsSecondary()
    {
        return $this->container['buttons_secondary'];
    }

    /**
     * Sets buttons_secondary
     *
     * @param \CureDAO\Client\Models\Button[] $buttons_secondary buttons_secondary
     *
     * @return $this
     */
    public function setButtonsSecondary($buttons_secondary)
    {
        $this->container['buttons_secondary'] = $buttons_secondary;

        return $this;
    }

    /**
     * Gets content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string $content Ex: Content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets header_title
     *
     * @return string
     */
    public function getHeaderTitle()
    {
        return $this->container['header_title'];
    }

    /**
     * Sets header_title
     *
     * @param string $header_title Ex: Title
     *
     * @return $this
     */
    public function setHeaderTitle($header_title)
    {
        $this->container['header_title'] = $header_title;

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
     * @param string $html HTML for the entire card.
     *
     * @return $this
     */
    public function setHtml($html)
    {
        $this->container['html'] = $html;

        return $this;
    }

    /**
     * Gets html_content
     *
     * @return string
     */
    public function getHtmlContent()
    {
        return $this->container['html_content'];
    }

    /**
     * Sets html_content
     *
     * @param string $html_content Ex: <div>Content</div>
     *
     * @return $this
     */
    public function setHtmlContent($html_content)
    {
        $this->container['html_content'] = $html_content;

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
     * @param string $image Larger image of variable dimensions
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets input_fields
     *
     * @return \CureDAO\Client\Models\InputField[]
     */
    public function getInputFields()
    {
        return $this->container['input_fields'];
    }

    /**
     * Sets input_fields
     *
     * @param \CureDAO\Client\Models\InputField[] $input_fields input_fields
     *
     * @return $this
     */
    public function setInputFields($input_fields)
    {
        $this->container['input_fields'] = $input_fields;

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
     * @param string $link A link to a web page or something. Not much more to say about that.
     *
     * @return $this
     */
    public function setLink($link)
    {
        $this->container['link'] = $link;

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
     * @param object $parameters Key value pairs derived from user input fields, button clicks, or preset defaults
     *
     * @return $this
     */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;

        return $this;
    }

    /**
     * Gets related_cards
     *
     * @return \CureDAO\Client\Models\Card[]
     */
    public function getRelatedCards()
    {
        return $this->container['related_cards'];
    }

    /**
     * Sets related_cards
     *
     * @param \CureDAO\Client\Models\Card[] $related_cards related_cards
     *
     * @return $this
     */
    public function setRelatedCards($related_cards)
    {
        $this->container['related_cards'] = $related_cards;

        return $this;
    }

    /**
     * Gets selected_button
     *
     * @return \CureDAO\Client\Models\Button
     */
    public function getSelectedButton()
    {
        return $this->container['selected_button'];
    }

    /**
     * Sets selected_button
     *
     * @param \CureDAO\Client\Models\Button $selected_button Button that the user clicked and the provided function parameters
     *
     * @return $this
     */
    public function setSelectedButton($selected_button)
    {
        $this->container['selected_button'] = $selected_button;

        return $this;
    }

    /**
     * Gets sharing_body
     *
     * @return string
     */
    public function getSharingBody()
    {
        return $this->container['sharing_body'];
    }

    /**
     * Sets sharing_body
     *
     * @param string $sharing_body Ex: sharingBody
     *
     * @return $this
     */
    public function setSharingBody($sharing_body)
    {
        $this->container['sharing_body'] = $sharing_body;

        return $this;
    }

    /**
     * Gets sharing_buttons
     *
     * @return \CureDAO\Client\Models\Button[]
     */
    public function getSharingButtons()
    {
        return $this->container['sharing_buttons'];
    }

    /**
     * Sets sharing_buttons
     *
     * @param \CureDAO\Client\Models\Button[] $sharing_buttons sharing_buttons
     *
     * @return $this
     */
    public function setSharingButtons($sharing_buttons)
    {
        $this->container['sharing_buttons'] = $sharing_buttons;

        return $this;
    }

    /**
     * Gets sharing_title
     *
     * @return string
     */
    public function getSharingTitle()
    {
        return $this->container['sharing_title'];
    }

    /**
     * Sets sharing_title
     *
     * @param string $sharing_title Ex: sharingTitle
     *
     * @return $this
     */
    public function setSharingTitle($sharing_title)
    {
        $this->container['sharing_title'] = $sharing_title;

        return $this;
    }

    /**
     * Gets sub_header
     *
     * @return string
     */
    public function getSubHeader()
    {
        return $this->container['sub_header'];
    }

    /**
     * Sets sub_header
     *
     * @param string $sub_header Ex: subTitle
     *
     * @return $this
     */
    public function setSubHeader($sub_header)
    {
        $this->container['sub_header'] = $sub_header;

        return $this;
    }

    /**
     * Gets sub_title
     *
     * @return string
     */
    public function getSubTitle()
    {
        return $this->container['sub_title'];
    }

    /**
     * Sets sub_title
     *
     * @param string $sub_title Ex: subTitle
     *
     * @return $this
     */
    public function setSubTitle($sub_title)
    {
        $this->container['sub_title'] = $sub_title;

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
     * @param string $title Ex: Title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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
