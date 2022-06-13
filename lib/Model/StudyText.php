<?php
/**
 * StudyText
 *
 */

namespace CureDAO\Client\Model;

use \ArrayAccess;
use \CureDAO\Client\ObjectSerializer;

/**
 * StudyText Class Doc Comment
 *
 */
class StudyText implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'StudyText';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'average_effect_following_high_cause_explanation' => 'string',
        'average_effect_following_low_cause_explanation' => 'string',
        'value_predicting_high_outcome_explanation' => 'string',
        'value_predicting_low_outcome_explanation' => 'string',
        'data_analysis' => 'string',
        'data_sources' => 'string',
        'data_sources_paragraph_for_cause' => 'string',
        'data_sources_paragraph_for_effect' => 'string',
        'last_cause_daily_value_sentence_extended' => 'string',
        'last_cause_and_optimal_value_sentence' => 'string',
        'last_cause_daily_value_sentence' => 'string',
        'optimal_daily_value_sentence' => 'string',
        'participant_instructions' => 'string',
        'predictor_explanation' => 'string',
        'significance_explanation' => 'string',
        'study_abstract' => 'string',
        'study_design' => 'string',
        'study_limitations' => 'string',
        'study_objective' => 'string',
        'study_results' => 'string',
        'study_title' => 'string',
        'study_invitation' => 'string',
        'study_question' => 'string',
        'study_background' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'average_effect_following_high_cause_explanation' => null,
        'average_effect_following_low_cause_explanation' => null,
        'value_predicting_high_outcome_explanation' => null,
        'value_predicting_low_outcome_explanation' => null,
        'data_analysis' => null,
        'data_sources' => null,
        'data_sources_paragraph_for_cause' => null,
        'data_sources_paragraph_for_effect' => null,
        'last_cause_daily_value_sentence_extended' => null,
        'last_cause_and_optimal_value_sentence' => null,
        'last_cause_daily_value_sentence' => null,
        'optimal_daily_value_sentence' => null,
        'participant_instructions' => null,
        'predictor_explanation' => null,
        'significance_explanation' => null,
        'study_abstract' => null,
        'study_design' => null,
        'study_limitations' => null,
        'study_objective' => null,
        'study_results' => null,
        'study_title' => null,
        'study_invitation' => null,
        'study_question' => null,
        'study_background' => null
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
        'average_effect_following_high_cause_explanation' => 'averageEffectFollowingHighCauseExplanation',
        'average_effect_following_low_cause_explanation' => 'averageEffectFollowingLowCauseExplanation',
        'value_predicting_high_outcome_explanation' => 'valuePredictingHighOutcomeExplanation',
        'value_predicting_low_outcome_explanation' => 'valuePredictingLowOutcomeExplanation',
        'data_analysis' => 'dataAnalysis',
        'data_sources' => 'dataSources',
        'data_sources_paragraph_for_cause' => 'dataSourcesParagraphForCause',
        'data_sources_paragraph_for_effect' => 'dataSourcesParagraphForEffect',
        'last_cause_daily_value_sentence_extended' => 'lastCauseDailyValueSentenceExtended',
        'last_cause_and_optimal_value_sentence' => 'lastCauseAndOptimalValueSentence',
        'last_cause_daily_value_sentence' => 'lastCauseDailyValueSentence',
        'optimal_daily_value_sentence' => 'optimalDailyValueSentence',
        'participant_instructions' => 'participantInstructions',
        'predictor_explanation' => 'predictorExplanation',
        'significance_explanation' => 'significanceExplanation',
        'study_abstract' => 'studyAbstract',
        'study_design' => 'studyDesign',
        'study_limitations' => 'studyLimitations',
        'study_objective' => 'studyObjective',
        'study_results' => 'studyResults',
        'study_title' => 'studyTitle',
        'study_invitation' => 'studyInvitation',
        'study_question' => 'studyQuestion',
        'study_background' => 'studyBackground'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'average_effect_following_high_cause_explanation' => 'setAverageEffectFollowingHighCauseExplanation',
        'average_effect_following_low_cause_explanation' => 'setAverageEffectFollowingLowCauseExplanation',
        'value_predicting_high_outcome_explanation' => 'setValuePredictingHighOutcomeExplanation',
        'value_predicting_low_outcome_explanation' => 'setValuePredictingLowOutcomeExplanation',
        'data_analysis' => 'setDataAnalysis',
        'data_sources' => 'setDataSources',
        'data_sources_paragraph_for_cause' => 'setDataSourcesParagraphForCause',
        'data_sources_paragraph_for_effect' => 'setDataSourcesParagraphForEffect',
        'last_cause_daily_value_sentence_extended' => 'setLastCauseDailyValueSentenceExtended',
        'last_cause_and_optimal_value_sentence' => 'setLastCauseAndOptimalValueSentence',
        'last_cause_daily_value_sentence' => 'setLastCauseDailyValueSentence',
        'optimal_daily_value_sentence' => 'setOptimalDailyValueSentence',
        'participant_instructions' => 'setParticipantInstructions',
        'predictor_explanation' => 'setPredictorExplanation',
        'significance_explanation' => 'setSignificanceExplanation',
        'study_abstract' => 'setStudyAbstract',
        'study_design' => 'setStudyDesign',
        'study_limitations' => 'setStudyLimitations',
        'study_objective' => 'setStudyObjective',
        'study_results' => 'setStudyResults',
        'study_title' => 'setStudyTitle',
        'study_invitation' => 'setStudyInvitation',
        'study_question' => 'setStudyQuestion',
        'study_background' => 'setStudyBackground'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'average_effect_following_high_cause_explanation' => 'getAverageEffectFollowingHighCauseExplanation',
        'average_effect_following_low_cause_explanation' => 'getAverageEffectFollowingLowCauseExplanation',
        'value_predicting_high_outcome_explanation' => 'getValuePredictingHighOutcomeExplanation',
        'value_predicting_low_outcome_explanation' => 'getValuePredictingLowOutcomeExplanation',
        'data_analysis' => 'getDataAnalysis',
        'data_sources' => 'getDataSources',
        'data_sources_paragraph_for_cause' => 'getDataSourcesParagraphForCause',
        'data_sources_paragraph_for_effect' => 'getDataSourcesParagraphForEffect',
        'last_cause_daily_value_sentence_extended' => 'getLastCauseDailyValueSentenceExtended',
        'last_cause_and_optimal_value_sentence' => 'getLastCauseAndOptimalValueSentence',
        'last_cause_daily_value_sentence' => 'getLastCauseDailyValueSentence',
        'optimal_daily_value_sentence' => 'getOptimalDailyValueSentence',
        'participant_instructions' => 'getParticipantInstructions',
        'predictor_explanation' => 'getPredictorExplanation',
        'significance_explanation' => 'getSignificanceExplanation',
        'study_abstract' => 'getStudyAbstract',
        'study_design' => 'getStudyDesign',
        'study_limitations' => 'getStudyLimitations',
        'study_objective' => 'getStudyObjective',
        'study_results' => 'getStudyResults',
        'study_title' => 'getStudyTitle',
        'study_invitation' => 'getStudyInvitation',
        'study_question' => 'getStudyQuestion',
        'study_background' => 'getStudyBackground'
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
        $this->container['average_effect_following_high_cause_explanation'] = isset($data['average_effect_following_high_cause_explanation']) ? $data['average_effect_following_high_cause_explanation'] : null;
        $this->container['average_effect_following_low_cause_explanation'] = isset($data['average_effect_following_low_cause_explanation']) ? $data['average_effect_following_low_cause_explanation'] : null;
        $this->container['value_predicting_high_outcome_explanation'] = isset($data['value_predicting_high_outcome_explanation']) ? $data['value_predicting_high_outcome_explanation'] : null;
        $this->container['value_predicting_low_outcome_explanation'] = isset($data['value_predicting_low_outcome_explanation']) ? $data['value_predicting_low_outcome_explanation'] : null;
        $this->container['data_analysis'] = isset($data['data_analysis']) ? $data['data_analysis'] : null;
        $this->container['data_sources'] = isset($data['data_sources']) ? $data['data_sources'] : null;
        $this->container['data_sources_paragraph_for_cause'] = isset($data['data_sources_paragraph_for_cause']) ? $data['data_sources_paragraph_for_cause'] : null;
        $this->container['data_sources_paragraph_for_effect'] = isset($data['data_sources_paragraph_for_effect']) ? $data['data_sources_paragraph_for_effect'] : null;
        $this->container['last_cause_daily_value_sentence_extended'] = isset($data['last_cause_daily_value_sentence_extended']) ? $data['last_cause_daily_value_sentence_extended'] : null;
        $this->container['last_cause_and_optimal_value_sentence'] = isset($data['last_cause_and_optimal_value_sentence']) ? $data['last_cause_and_optimal_value_sentence'] : null;
        $this->container['last_cause_daily_value_sentence'] = isset($data['last_cause_daily_value_sentence']) ? $data['last_cause_daily_value_sentence'] : null;
        $this->container['optimal_daily_value_sentence'] = isset($data['optimal_daily_value_sentence']) ? $data['optimal_daily_value_sentence'] : null;
        $this->container['participant_instructions'] = isset($data['participant_instructions']) ? $data['participant_instructions'] : null;
        $this->container['predictor_explanation'] = isset($data['predictor_explanation']) ? $data['predictor_explanation'] : null;
        $this->container['significance_explanation'] = isset($data['significance_explanation']) ? $data['significance_explanation'] : null;
        $this->container['study_abstract'] = isset($data['study_abstract']) ? $data['study_abstract'] : null;
        $this->container['study_design'] = isset($data['study_design']) ? $data['study_design'] : null;
        $this->container['study_limitations'] = isset($data['study_limitations']) ? $data['study_limitations'] : null;
        $this->container['study_objective'] = isset($data['study_objective']) ? $data['study_objective'] : null;
        $this->container['study_results'] = isset($data['study_results']) ? $data['study_results'] : null;
        $this->container['study_title'] = isset($data['study_title']) ? $data['study_title'] : null;
        $this->container['study_invitation'] = isset($data['study_invitation']) ? $data['study_invitation'] : null;
        $this->container['study_question'] = isset($data['study_question']) ? $data['study_question'] : null;
        $this->container['study_background'] = isset($data['study_background']) ? $data['study_background'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['study_abstract'] === null) {
            $invalidProperties[] = "'study_abstract' can't be null";
        }
        if ($this->container['study_design'] === null) {
            $invalidProperties[] = "'study_design' can't be null";
        }
        if ($this->container['study_limitations'] === null) {
            $invalidProperties[] = "'study_limitations' can't be null";
        }
        if ($this->container['study_objective'] === null) {
            $invalidProperties[] = "'study_objective' can't be null";
        }
        if ($this->container['study_results'] === null) {
            $invalidProperties[] = "'study_results' can't be null";
        }
        if ($this->container['study_title'] === null) {
            $invalidProperties[] = "'study_title' can't be null";
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
     * Gets average_effect_following_high_cause_explanation
     *
     * @return string
     */
    public function getAverageEffectFollowingHighCauseExplanation()
    {
        return $this->container['average_effect_following_high_cause_explanation'];
    }

    /**
     * Sets average_effect_following_high_cause_explanation
     *
     * @param string $average_effect_following_high_cause_explanation Ex: Overall Mood is 3.55/5 (15% higher) on average after days with around 4.19/5 Sleep Quality
     *
     * @return $this
     */
    public function setAverageEffectFollowingHighCauseExplanation($average_effect_following_high_cause_explanation)
    {
        $this->container['average_effect_following_high_cause_explanation'] = $average_effect_following_high_cause_explanation;

        return $this;
    }

    /**
     * Gets average_effect_following_low_cause_explanation
     *
     * @return string
     */
    public function getAverageEffectFollowingLowCauseExplanation()
    {
        return $this->container['average_effect_following_low_cause_explanation'];
    }

    /**
     * Sets average_effect_following_low_cause_explanation
     *
     * @param string $average_effect_following_low_cause_explanation Ex: Overall Mood is 2.65/5 (14% lower) on average after days with around 1.97/5 Sleep Quality
     *
     * @return $this
     */
    public function setAverageEffectFollowingLowCauseExplanation($average_effect_following_low_cause_explanation)
    {
        $this->container['average_effect_following_low_cause_explanation'] = $average_effect_following_low_cause_explanation;

        return $this;
    }

    /**
     * Gets value_predicting_high_outcome_explanation
     *
     * @return string
     */
    public function getValuePredictingHighOutcomeExplanation()
    {
        return $this->container['value_predicting_high_outcome_explanation'];
    }

    /**
     * Sets value_predicting_high_outcome_explanation
     *
     * @param string $value_predicting_high_outcome_explanation Ex: Overall Mood, on average, 17% higher after around 4.14/5 Sleep Quality
     *
     * @return $this
     */
    public function setValuePredictingHighOutcomeExplanation($value_predicting_high_outcome_explanation)
    {
        $this->container['value_predicting_high_outcome_explanation'] = $value_predicting_high_outcome_explanation;

        return $this;
    }

    /**
     * Gets value_predicting_low_outcome_explanation
     *
     * @return string
     */
    public function getValuePredictingLowOutcomeExplanation()
    {
        return $this->container['value_predicting_low_outcome_explanation'];
    }

    /**
     * Sets value_predicting_low_outcome_explanation
     *
     * @param string $value_predicting_low_outcome_explanation Ex: Overall Mood, on average, 11% lower after around 3.03/5 Sleep Quality
     *
     * @return $this
     */
    public function setValuePredictingLowOutcomeExplanation($value_predicting_low_outcome_explanation)
    {
        $this->container['value_predicting_low_outcome_explanation'] = $value_predicting_low_outcome_explanation;

        return $this;
    }

    /**
     * Gets data_analysis
     *
     * @return string
     */
    public function getDataAnalysis()
    {
        return $this->container['data_analysis'];
    }

    /**
     * Sets data_analysis
     *
     * @param string $data_analysis Ex: It was assumed that 0 hours would pass before a change in Very Distracting Time would produce an observable change in Video Activities.  It was assumed that Very Distracting Time could produce an observable change in Video Activities for as much as 7 days after the stimulus event.
     *
     * @return $this
     */
    public function setDataAnalysis($data_analysis)
    {
        $this->container['data_analysis'] = $data_analysis;

        return $this;
    }

    /**
     * Gets data_sources
     *
     * @return string
     */
    public function getDataSources()
    {
        return $this->container['data_sources'];
    }

    /**
     * Sets data_sources
     *
     * @param string $data_sources Ex: Very Distracting Time data was primarily collected using <a href=\"https://www.rescuetime.com/rp/curedao/plans\">RescueTime</a>. Detailed reports show which applications and websites you spent time on. Activities are automatically grouped into pre-defined categories with built-in productivity scores covering thousands of websites and applications. You can customize categories and productivity scores to meet your needs.<br>Video Activities data was primarily collected using <a href=\"https://www.rescuetime.com/rp/curedao/plans\">RescueTime</a>. Detailed reports show which applications and websites you spent time on. Activities are automatically grouped into pre-defined categories with built-in productivity scores covering thousands of websites and applications. You can customize categories and productivity scores to meet your needs.
     *
     * @return $this
     */
    public function setDataSources($data_sources)
    {
        $this->container['data_sources'] = $data_sources;

        return $this;
    }

    /**
     * Gets data_sources_paragraph_for_cause
     *
     * @return string
     */
    public function getDataSourcesParagraphForCause()
    {
        return $this->container['data_sources_paragraph_for_cause'];
    }

    /**
     * Sets data_sources_paragraph_for_cause
     *
     * @param string $data_sources_paragraph_for_cause Ex: Very Distracting Time data was primarily collected using <a href=\"https://www.rescuetime.com/rp/curedao/plans\">RescueTime</a>. Detailed reports show which applications and websites you spent time on. Activities are automatically grouped into pre-defined categories with built-in productivity scores covering thousands of websites and applications. You can customize categories and productivity scores to meet your needs.<br>Video Activities data was primarily collected using <a href=\"https://www.rescuetime.com/rp/curedao/plans\">RescueTime</a>. Detailed reports show which applications and websites you spent time on. Activities are automatically grouped into pre-defined categories with built-in productivity scores covering thousands of websites and applications. You can customize categories and productivity scores to meet your needs.
     *
     * @return $this
     */
    public function setDataSourcesParagraphForCause($data_sources_paragraph_for_cause)
    {
        $this->container['data_sources_paragraph_for_cause'] = $data_sources_paragraph_for_cause;

        return $this;
    }

    /**
     * Gets data_sources_paragraph_for_effect
     *
     * @return string
     */
    public function getDataSourcesParagraphForEffect()
    {
        return $this->container['data_sources_paragraph_for_effect'];
    }

    /**
     * Sets data_sources_paragraph_for_effect
     *
     * @param string $data_sources_paragraph_for_effect Ex: Very Distracting Time data was primarily collected using <a href=\"https://www.rescuetime.com/rp/curedao/plans\">RescueTime</a>. Detailed reports show which applications and websites you spent time on. Activities are automatically grouped into pre-defined categories with built-in productivity scores covering thousands of websites and applications. You can customize categories and productivity scores to meet your needs.<br>Video Activities data was primarily collected using <a href=\"https://www.rescuetime.com/rp/curedao/plans\">RescueTime</a>. Detailed reports show which applications and websites you spent time on. Activities are automatically grouped into pre-defined categories with built-in productivity scores covering thousands of websites and applications. You can customize categories and productivity scores to meet your needs.
     *
     * @return $this
     */
    public function setDataSourcesParagraphForEffect($data_sources_paragraph_for_effect)
    {
        $this->container['data_sources_paragraph_for_effect'] = $data_sources_paragraph_for_effect;

        return $this;
    }

    /**
     * Gets last_cause_daily_value_sentence_extended
     *
     * @return string
     */
    public function getLastCauseDailyValueSentenceExtended()
    {
        return $this->container['last_cause_daily_value_sentence_extended'];
    }

    /**
     * Sets last_cause_daily_value_sentence_extended
     *
     * @param string $last_cause_daily_value_sentence_extended Ex: Sleep Quality Predicts Higher Overall Mood
     *
     * @return $this
     */
    public function setLastCauseDailyValueSentenceExtended($last_cause_daily_value_sentence_extended)
    {
        $this->container['last_cause_daily_value_sentence_extended'] = $last_cause_daily_value_sentence_extended;

        return $this;
    }

    /**
     * Gets last_cause_and_optimal_value_sentence
     *
     * @return string
     */
    public function getLastCauseAndOptimalValueSentence()
    {
        return $this->container['last_cause_and_optimal_value_sentence'];
    }

    /**
     * Sets last_cause_and_optimal_value_sentence
     *
     * @param string $last_cause_and_optimal_value_sentence Ex: Sleep Quality Predicts Higher Overall Mood
     *
     * @return $this
     */
    public function setLastCauseAndOptimalValueSentence($last_cause_and_optimal_value_sentence)
    {
        $this->container['last_cause_and_optimal_value_sentence'] = $last_cause_and_optimal_value_sentence;

        return $this;
    }

    /**
     * Gets last_cause_daily_value_sentence
     *
     * @return string
     */
    public function getLastCauseDailyValueSentence()
    {
        return $this->container['last_cause_daily_value_sentence'];
    }

    /**
     * Sets last_cause_daily_value_sentence
     *
     * @param string $last_cause_daily_value_sentence Ex: Sleep Quality Predicts Higher Overall Mood
     *
     * @return $this
     */
    public function setLastCauseDailyValueSentence($last_cause_daily_value_sentence)
    {
        $this->container['last_cause_daily_value_sentence'] = $last_cause_daily_value_sentence;

        return $this;
    }

    /**
     * Gets optimal_daily_value_sentence
     *
     * @return string
     */
    public function getOptimalDailyValueSentence()
    {
        return $this->container['optimal_daily_value_sentence'];
    }

    /**
     * Sets optimal_daily_value_sentence
     *
     * @param string $optimal_daily_value_sentence Ex: Sleep Quality Predicts Higher Overall Mood
     *
     * @return $this
     */
    public function setOptimalDailyValueSentence($optimal_daily_value_sentence)
    {
        $this->container['optimal_daily_value_sentence'] = $optimal_daily_value_sentence;

        return $this;
    }

    /**
     * Gets participant_instructions
     *
     * @return string
     */
    public function getParticipantInstructions()
    {
        return $this->container['participant_instructions'];
    }

    /**
     * Sets participant_instructions
     *
     * @param string $participant_instructions Instructions for study participation
     *
     * @return $this
     */
    public function setParticipantInstructions($participant_instructions)
    {
        $this->container['participant_instructions'] = $participant_instructions;

        return $this;
    }

    /**
     * Gets predictor_explanation
     *
     * @return string
     */
    public function getPredictorExplanation()
    {
        return $this->container['predictor_explanation'];
    }

    /**
     * Sets predictor_explanation
     *
     * @param string $predictor_explanation Ex: Sleep Quality Predicts Higher Overall Mood
     *
     * @return $this
     */
    public function setPredictorExplanation($predictor_explanation)
    {
        $this->container['predictor_explanation'] = $predictor_explanation;

        return $this;
    }

    /**
     * Gets significance_explanation
     *
     * @return string
     */
    public function getSignificanceExplanation()
    {
        return $this->container['significance_explanation'];
    }

    /**
     * Sets significance_explanation
     *
     * @param string $significance_explanation Ex: Using a two-tailed t-test with alpha = 0.05, it was determined that the change in Video Activities is statistically significant at 95% confidence interval.
     *
     * @return $this
     */
    public function setSignificanceExplanation($significance_explanation)
    {
        $this->container['significance_explanation'] = $significance_explanation;

        return $this;
    }

    /**
     * Gets study_abstract
     *
     * @return string
     */
    public function getStudyAbstract()
    {
        return $this->container['study_abstract'];
    }

    /**
     * Sets study_abstract
     *
     * @param string $study_abstract Ex: Aggregated data from 21 suggests with a low degree of confidence (p=0.097) that Very Distracting Time has a moderately positive predictive relationship (R=0.354) with Video Activities  (Activity).  The highest quartile of Video Activities measurements were observed following an average 2.03h Very Distracting Timeper day.  The lowest quartile of Video Activities  measurements were observed following an average 1.04h Very Distracting Timeper day.
     *
     * @return $this
     */
    public function setStudyAbstract($study_abstract)
    {
        $this->container['study_abstract'] = $study_abstract;

        return $this;
    }

    /**
     * Gets study_design
     *
     * @return string
     */
    public function getStudyDesign()
    {
        return $this->container['study_design'];
    }

    /**
     * Sets study_design
     *
     * @param string $study_design Ex: This study is based on data donated by  21 CureDAO users. Thus, the study design is equivalent to the aggregation of 21 separate n=1 observational natural experiments.
     *
     * @return $this
     */
    public function setStudyDesign($study_design)
    {
        $this->container['study_design'] = $study_design;

        return $this;
    }

    /**
     * Gets study_limitations
     *
     * @return string
     */
    public function getStudyLimitations()
    {
        return $this->container['study_limitations'];
    }

    /**
     * Sets study_limitations
     *
     * @param string $study_limitations Ex: As with any human experiment, it was impossible to control for all potentially confounding variables.             Correlation does not necessarily imply correlation.  We can never know for sure if one factor is definitely the cause of an outcome.             However, lack of correlation definitely implies the lack of a causal relationship.  Hence, we can with great             confidence rule out non-existent relationships. For instance, if we discover no relationship between mood             and an antidepressant this information is just as or even more valuable than the discovery that there is a relationship.             <br>             <br>             We can also take advantage of several characteristics of time series data from many subjects  to infer the likelihood of a causal relationship if we do find a correlational relationship.             The criteria for causation are a group of minimal conditions necessary to provide adequate evidence of a causal relationship between an incidence and a possible consequence.             The list of the criteria is as follows:             <br>             1. Strength (effect size): A small association does not mean that there is not a causal effect, though the larger the association, the more likely that it is causal.             <br>             2. Consistency (reproducibility): Consistent findings observed by different persons in different places with different samples strengthens the likelihood of an effect.             <br>             3. Specificity: Causation is likely if a very specific population at a specific site and disease with no other likely explanation. The more specific an association between a factor and an effect is, the bigger the probability of a causal relationship.             <br>             4. Temporality: The effect has to occur after the cause (and if there is an expected delay between the cause and expected effect, then the effect must occur after that delay).             <br>             5. Biological gradient: Greater exposure should generally lead to greater incidence of the effect. However, in some cases, the mere presence of the factor can trigger the effect. In other cases, an inverse proportion is observed: greater exposure leads to lower incidence.             <br>             6. Plausibility: A plausible mechanism between cause and effect is helpful.             <br>             7. Coherence: Coherence between epidemiological and laboratory findings increases the likelihood of an effect.             <br>             8. Experiment: \"Occasionally it is possible to appeal to experimental evidence\".             <br>             9. Analogy: The effect of similar factors may be considered.             <br>             <br>              The confidence in a causal relationship is bolstered by the fact that time-precedence was taken into account in all calculations. Furthermore, in accordance with the law of large numbers (LLN), the predictive power and accuracy of these results will continually grow over time.  146 paired data points were used in this analysis.   Assuming that the relationship is merely coincidental, as the participant independently modifies their Very Distracting Time values, the observed strength of the relationship will decline until it is below the threshold of significance.  To it another way, in the case that we do find a spurious correlation, suggesting that banana intake improves mood for instance,             one will likely increase their banana intake.  Due to the fact that this correlation is spurious, it is unlikely             that you will see a continued and persistent corresponding increase in mood.  So over time, the spurious correlation will             naturally dissipate.Furthermore, it will be very enlightening to aggregate this data with the data from other participants  with similar genetic, diseasomic, environmentomic, and demographic profiles.
     *
     * @return $this
     */
    public function setStudyLimitations($study_limitations)
    {
        $this->container['study_limitations'] = $study_limitations;

        return $this;
    }

    /**
     * Gets study_objective
     *
     * @return string
     */
    public function getStudyObjective()
    {
        return $this->container['study_objective'];
    }

    /**
     * Sets study_objective
     *
     * @param string $study_objective Ex: The objective of this study is to determine the nature of the relationship (if any) between the Very Distracting Time and the Video Activities. Additionally, we attempt to determine the Very Distracting Time values most likely to produce optimal Video Activities values.
     *
     * @return $this
     */
    public function setStudyObjective($study_objective)
    {
        $this->container['study_objective'] = $study_objective;

        return $this;
    }

    /**
     * Gets study_results
     *
     * @return string
     */
    public function getStudyResults()
    {
        return $this->container['study_results'];
    }

    /**
     * Sets study_results
     *
     * @param string $study_results Ex: This analysis suggests that higher Very Distracting Time generally predicts negative Video Activities (p = 0.097). Video Activities is, on average, 36%  higher after around 2.03 Very Distracting Time.  After an onset delay of 168 hours, Video Activities is, on average, 16%  lower than its average over the 168 hours following around 1.04 Very Distracting Time.  146 data points were used in this analysis.  The value for Very Distracting Time changed 2984 times, effectively running 1492 separate natural experiments. The top quartile outcome values are preceded by an average 2.03 h of Very Distracting Time.  The bottom quartile outcome values are preceded by an average 1.04 h of Very Distracting Time.  Forward Pearson Correlation Coefficient was 0.354 (p=0.097, 95% CI -0.437 to 1.144 onset delay = 0 hours, duration of action = 168 hours) .  The Reverse Pearson Correlation Coefficient was 0.208 (P=0.097, 95% CI -0.583 to 0.998, onset delay = -0 hours, duration of action = -168 hours). When the Very Distracting Time value is closer to 2.03 h than 1.04 h, the Video Activities value which follows is, on average, 36% percent higher than its typical value.  When the Very Distracting Time value is closer to 1.04 h than 2.03 h, the Video Activities value which follows is 0% lower than its typical value.  Video Activities is 5 h (67% higher) on average after days with around 5 h Very Distracting Time
     *
     * @return $this
     */
    public function setStudyResults($study_results)
    {
        $this->container['study_results'] = $study_results;

        return $this;
    }

    /**
     * Gets study_title
     *
     * @return string
     */
    public function getStudyTitle()
    {
        return $this->container['study_title'];
    }

    /**
     * Sets study_title
     *
     * @param string $study_title Ex: N1 Study: Very Distracting Time Predicts Negative Video Activities
     *
     * @return $this
     */
    public function setStudyTitle($study_title)
    {
        $this->container['study_title'] = $study_title;

        return $this;
    }

    /**
     * Gets study_invitation
     *
     * @return string
     */
    public function getStudyInvitation()
    {
        return $this->container['study_invitation'];
    }

    /**
     * Sets study_invitation
     *
     * @param string $study_invitation Help us determine if Remeron affects Overall Mood!
     *
     * @return $this
     */
    public function setStudyInvitation($study_invitation)
    {
        $this->container['study_invitation'] = $study_invitation;

        return $this;
    }

    /**
     * Gets study_question
     *
     * @return string
     */
    public function getStudyQuestion()
    {
        return $this->container['study_question'];
    }

    /**
     * Sets study_question
     *
     * @param string $study_question Does Remeron affect Overall Mood?
     *
     * @return $this
     */
    public function setStudyQuestion($study_question)
    {
        $this->container['study_question'] = $study_question;

        return $this;
    }

    /**
     * Gets study_background
     *
     * @return string
     */
    public function getStudyBackground()
    {
        return $this->container['study_background'];
    }

    /**
     * Sets study_background
     *
     * @param string $study_background In order to reduce suffering through the advancement of human knowledge...
     *
     * @return $this
     */
    public function setStudyBackground($study_background)
    {
        $this->container['study_background'] = $study_background;

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
