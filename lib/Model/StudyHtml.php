<?php
/**
 * StudyHtml
 *
 */



namespace CureDAO\Client\Model;

use \ArrayAccess;
use \CureDAO\Client\ObjectSerializer;

/**
 * StudyHtml Class Doc Comment
 *
 */
class StudyHtml implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'StudyHtml';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'chart_html' => 'string',
        'download_buttons_html' => 'string',
        'full_page_with_head' => 'string',
        'full_study_html' => 'string',
        'full_study_html_with_css_styles' => 'string',
        'participant_instructions_html' => 'string',
        'statistics_table_html' => 'string',
        'study_abstract_html' => 'string',
        'study_header_html' => 'string',
        'study_image_html' => 'string',
        'study_meta_html' => 'string',
        'study_text_html' => 'string',
        'social_sharing_button_html' => 'string',
        'study_summary_box_html' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'chart_html' => null,
        'download_buttons_html' => null,
        'full_page_with_head' => null,
        'full_study_html' => null,
        'full_study_html_with_css_styles' => null,
        'participant_instructions_html' => null,
        'statistics_table_html' => null,
        'study_abstract_html' => null,
        'study_header_html' => null,
        'study_image_html' => null,
        'study_meta_html' => null,
        'study_text_html' => null,
        'social_sharing_button_html' => null,
        'study_summary_box_html' => null
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
        'chart_html' => 'chartHtml',
        'download_buttons_html' => 'downloadButtonsHtml',
        'full_page_with_head' => 'fullPageWithHead',
        'full_study_html' => 'fullStudyHtml',
        'full_study_html_with_css_styles' => 'fullStudyHtmlWithCssStyles',
        'participant_instructions_html' => 'participantInstructionsHtml',
        'statistics_table_html' => 'statisticsTableHtml',
        'study_abstract_html' => 'studyAbstractHtml',
        'study_header_html' => 'studyHeaderHtml',
        'study_image_html' => 'studyImageHtml',
        'study_meta_html' => 'studyMetaHtml',
        'study_text_html' => 'studyTextHtml',
        'social_sharing_button_html' => 'socialSharingButtonHtml',
        'study_summary_box_html' => 'studySummaryBoxHtml'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'chart_html' => 'setChartHtml',
        'download_buttons_html' => 'setDownloadButtonsHtml',
        'full_page_with_head' => 'setFullPageWithHead',
        'full_study_html' => 'setFullStudyHtml',
        'full_study_html_with_css_styles' => 'setFullStudyHtmlWithCssStyles',
        'participant_instructions_html' => 'setParticipantInstructionsHtml',
        'statistics_table_html' => 'setStatisticsTableHtml',
        'study_abstract_html' => 'setStudyAbstractHtml',
        'study_header_html' => 'setStudyHeaderHtml',
        'study_image_html' => 'setStudyImageHtml',
        'study_meta_html' => 'setStudyMetaHtml',
        'study_text_html' => 'setStudyTextHtml',
        'social_sharing_button_html' => 'setSocialSharingButtonHtml',
        'study_summary_box_html' => 'setStudySummaryBoxHtml'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'chart_html' => 'getChartHtml',
        'download_buttons_html' => 'getDownloadButtonsHtml',
        'full_page_with_head' => 'getFullPageWithHead',
        'full_study_html' => 'getFullStudyHtml',
        'full_study_html_with_css_styles' => 'getFullStudyHtmlWithCssStyles',
        'participant_instructions_html' => 'getParticipantInstructionsHtml',
        'statistics_table_html' => 'getStatisticsTableHtml',
        'study_abstract_html' => 'getStudyAbstractHtml',
        'study_header_html' => 'getStudyHeaderHtml',
        'study_image_html' => 'getStudyImageHtml',
        'study_meta_html' => 'getStudyMetaHtml',
        'study_text_html' => 'getStudyTextHtml',
        'social_sharing_button_html' => 'getSocialSharingButtonHtml',
        'study_summary_box_html' => 'getStudySummaryBoxHtml'
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
        $this->container['chart_html'] = isset($data['chart_html']) ? $data['chart_html'] : null;
        $this->container['download_buttons_html'] = isset($data['download_buttons_html']) ? $data['download_buttons_html'] : null;
        $this->container['full_page_with_head'] = isset($data['full_page_with_head']) ? $data['full_page_with_head'] : null;
        $this->container['full_study_html'] = isset($data['full_study_html']) ? $data['full_study_html'] : null;
        $this->container['full_study_html_with_css_styles'] = isset($data['full_study_html_with_css_styles']) ? $data['full_study_html_with_css_styles'] : null;
        $this->container['participant_instructions_html'] = isset($data['participant_instructions_html']) ? $data['participant_instructions_html'] : null;
        $this->container['statistics_table_html'] = isset($data['statistics_table_html']) ? $data['statistics_table_html'] : null;
        $this->container['study_abstract_html'] = isset($data['study_abstract_html']) ? $data['study_abstract_html'] : null;
        $this->container['study_header_html'] = isset($data['study_header_html']) ? $data['study_header_html'] : null;
        $this->container['study_image_html'] = isset($data['study_image_html']) ? $data['study_image_html'] : null;
        $this->container['study_meta_html'] = isset($data['study_meta_html']) ? $data['study_meta_html'] : null;
        $this->container['study_text_html'] = isset($data['study_text_html']) ? $data['study_text_html'] : null;
        $this->container['social_sharing_button_html'] = isset($data['social_sharing_button_html']) ? $data['social_sharing_button_html'] : null;
        $this->container['study_summary_box_html'] = isset($data['study_summary_box_html']) ? $data['study_summary_box_html'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['chart_html'] === null) {
            $invalidProperties[] = "'chart_html' can't be null";
        }
        if ($this->container['full_study_html'] === null) {
            $invalidProperties[] = "'full_study_html' can't be null";
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
     * Gets chart_html
     *
     * @return string
     */
    public function getChartHtml()
    {
        return $this->container['chart_html'];
    }

    /**
     * Sets chart_html
     *
     * @param string $chart_html Embeddable chart html
     *
     * @return $this
     */
    public function setChartHtml($chart_html)
    {
        $this->container['chart_html'] = $chart_html;

        return $this;
    }

    /**
     * Gets download_buttons_html
     *
     * @return string
     */
    public function getDownloadButtonsHtml()
    {
        return $this->container['download_buttons_html'];
    }

    /**
     * Sets download_buttons_html
     *
     * @param string $download_buttons_html Play Store, App Store, Chrome Web Store
     *
     * @return $this
     */
    public function setDownloadButtonsHtml($download_buttons_html)
    {
        $this->container['download_buttons_html'] = $download_buttons_html;

        return $this;
    }

    /**
     * Gets full_page_with_head
     *
     * @return string
     */
    public function getFullPageWithHead()
    {
        return $this->container['full_page_with_head'];
    }

    /**
     * Sets full_page_with_head
     *
     * @param string $full_page_with_head Embeddable study including HTML head section charts.  Modifiable css classes are study-title, study-section-header, study-section-body
     *
     * @return $this
     */
    public function setFullPageWithHead($full_page_with_head)
    {
        $this->container['full_page_with_head'] = $full_page_with_head;

        return $this;
    }

    /**
     * Gets full_study_html
     *
     * @return string
     */
    public function getFullStudyHtml()
    {
        return $this->container['full_study_html'];
    }

    /**
     * Sets full_study_html
     *
     * @param string $full_study_html Embeddable study text html including charts.  Modifiable css classes are study-title, study-section-header, study-section-body
     *
     * @return $this
     */
    public function setFullStudyHtml($full_study_html)
    {
        $this->container['full_study_html'] = $full_study_html;

        return $this;
    }

    /**
     * Gets full_study_html_with_css_styles
     *
     * @return string
     */
    public function getFullStudyHtmlWithCssStyles()
    {
        return $this->container['full_study_html_with_css_styles'];
    }

    /**
     * Sets full_study_html_with_css_styles
     *
     * @param string $full_study_html_with_css_styles Embeddable study html including charts and css styling
     *
     * @return $this
     */
    public function setFullStudyHtmlWithCssStyles($full_study_html_with_css_styles)
    {
        $this->container['full_study_html_with_css_styles'] = $full_study_html_with_css_styles;

        return $this;
    }

    /**
     * Gets participant_instructions_html
     *
     * @return string
     */
    public function getParticipantInstructionsHtml()
    {
        return $this->container['participant_instructions_html'];
    }

    /**
     * Sets participant_instructions_html
     *
     * @param string $participant_instructions_html Instructions for study participation
     *
     * @return $this
     */
    public function setParticipantInstructionsHtml($participant_instructions_html)
    {
        $this->container['participant_instructions_html'] = $participant_instructions_html;

        return $this;
    }

    /**
     * Gets statistics_table_html
     *
     * @return string
     */
    public function getStatisticsTableHtml()
    {
        return $this->container['statistics_table_html'];
    }

    /**
     * Sets statistics_table_html
     *
     * @param string $statistics_table_html Embeddable table with statistics
     *
     * @return $this
     */
    public function setStatisticsTableHtml($statistics_table_html)
    {
        $this->container['statistics_table_html'] = $statistics_table_html;

        return $this;
    }

    /**
     * Gets study_abstract_html
     *
     * @return string
     */
    public function getStudyAbstractHtml()
    {
        return $this->container['study_abstract_html'];
    }

    /**
     * Sets study_abstract_html
     *
     * @param string $study_abstract_html Text summary
     *
     * @return $this
     */
    public function setStudyAbstractHtml($study_abstract_html)
    {
        $this->container['study_abstract_html'] = $study_abstract_html;

        return $this;
    }

    /**
     * Gets study_header_html
     *
     * @return string
     */
    public function getStudyHeaderHtml()
    {
        return $this->container['study_header_html'];
    }

    /**
     * Sets study_header_html
     *
     * @param string $study_header_html Title, study image, abstract with CSS styling
     *
     * @return $this
     */
    public function setStudyHeaderHtml($study_header_html)
    {
        $this->container['study_header_html'] = $study_header_html;

        return $this;
    }

    /**
     * Gets study_image_html
     *
     * @return string
     */
    public function getStudyImageHtml()
    {
        return $this->container['study_image_html'];
    }

    /**
     * Sets study_image_html
     *
     * @param string $study_image_html PNG image
     *
     * @return $this
     */
    public function setStudyImageHtml($study_image_html)
    {
        $this->container['study_image_html'] = $study_image_html;

        return $this;
    }

    /**
     * Gets study_meta_html
     *
     * @return string
     */
    public function getStudyMetaHtml()
    {
        return $this->container['study_meta_html'];
    }

    /**
     * Sets study_meta_html
     *
     * @param string $study_meta_html Facebook, Twitter, Google+
     *
     * @return $this
     */
    public function setStudyMetaHtml($study_meta_html)
    {
        $this->container['study_meta_html'] = $study_meta_html;

        return $this;
    }

    /**
     * Gets study_text_html
     *
     * @return string
     */
    public function getStudyTextHtml()
    {
        return $this->container['study_text_html'];
    }

    /**
     * Sets study_text_html
     *
     * @param string $study_text_html Formatted study text sections
     *
     * @return $this
     */
    public function setStudyTextHtml($study_text_html)
    {
        $this->container['study_text_html'] = $study_text_html;

        return $this;
    }

    /**
     * Gets social_sharing_button_html
     *
     * @return string
     */
    public function getSocialSharingButtonHtml()
    {
        return $this->container['social_sharing_button_html'];
    }

    /**
     * Sets social_sharing_button_html
     *
     * @param string $social_sharing_button_html What do you expect?
     *
     * @return $this
     */
    public function setSocialSharingButtonHtml($social_sharing_button_html)
    {
        $this->container['social_sharing_button_html'] = $social_sharing_button_html;

        return $this;
    }

    /**
     * Gets study_summary_box_html
     *
     * @return string
     */
    public function getStudySummaryBoxHtml()
    {
        return $this->container['study_summary_box_html'];
    }

    /**
     * Sets study_summary_box_html
     *
     * @param string $study_summary_box_html What do you expect?
     *
     * @return $this
     */
    public function setStudySummaryBoxHtml($study_summary_box_html)
    {
        $this->container['study_summary_box_html'] = $study_summary_box_html;

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
