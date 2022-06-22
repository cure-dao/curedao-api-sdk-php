# CureDAO API SDK for PHP

We make it easy to retrieve and analyze normalized user data from a wide array of devices and applications. Check out our [docs and SDKs](https://github.com/cure-dao) or [contact us](https://curedao.org/discord?utm_source=php-sdk).

### Requirements

PHP 7.2 and up

## Installation & Usage

Install [Composer](http://getcomposer.org/) and run

```
composer require cure-dao/cure-dao-sdk-php
```

Then run `composer install`

## Getting Started

Create a .env file in the root directory of your project.

Create your API Client Application at [https://curedao.org/api-clients](https://curedao.org/api-clients).

Copy the `client_id` and `client_secret` you receive into the .env file.

Add the following lines to your .env file:

```
CUREDAO_CLIENT_ID=Get me from https://builder.curedao.org/#/app/clients
CUREDAO_CLIENT_SECRET=Get me from https://builder.curedao.org/#/app/clients
```

### How to Analyze the Relationship Between a Pair of Variables

The request below returns the analysis results, the HTML used in the studies, and an array of Highcharts
configurations.  The chart configs could be transformed to work with other charting libraries as well.

```php
<?php
use CureDAO\Client\Requests\AnalysisRequest;
use CureDAO\Client\Models\MeasurementSet;
use CureDAO\Client\Variables\PhysicalActivityVariables\DailyStepCountVariable;
use CureDAO\Client\Variables\VitalSignsVariables\HeartRateVariabilityVariable;
    
    $predictorMeasurementSet = (new MeasurementSet())
         // setVariable accepts an existing variable in lib/Variables or an array with variable_name, unit_name, and variable_category_name
        ->setVariable(new DailyStepCountVariable())  
        ->addMeasurements([['start_at' => '2022-05-7', 'value' => 8472], etc...]);
    
    $outcomeMeasurementSet = (new MeasurementSet())
        ->setVariable(new HeartRateVariabilityVariable())
        ->addMeasurements([['start_at' => '2022-05-8','value' => 3402], etc...]);
    
    $yourUserId = "a-unique-identifier-for-your-user";
    $analysis = new AnalysisRequest($yourUserId, $predictorMeasurementSet, $outcomeMeasurementSet);
    $results = $analysis->analyze();
    print_r($results);
?>
```
### Example Response from `analyze()`

```php
stdClass Object
(
    [analysis] => stdClass Object
        (
            [title] => Higher Daily Step Count Predicts Significantly Higher Heart Rate Variability (HRV)
            [id] => 119250508
            [actions_count] => 
            [aggregate_correlation_id] => 65934819
            [aggregated_at] => 
            [analysis_ended_at] => 2022-06-13T19:47:54.000000Z
            [analysis_requested_at] => 
            [analysis_started_at] => 2022-06-13T19:47:50.000000Z
            [average_daily_high_cause] => 9131
            [average_daily_low_cause] => 3349.25
            [average_effect] => 4922.5489795918
            [average_effect_following_high_cause] => 5713.5476190476
            [average_effect_following_low_cause] => 4329.3
            [average_forward_pearson_correlation_over_onset_delays] => -0.25123405088819
            [average_reverse_pearson_correlation_over_onset_delays] => -0.28188848394244
            [boring] => 
            [causality_vote] => 
            [cause_baseline_average_per_day] => 478.57142857143
            [cause_baseline_average_per_duration_of_action] => 3350
            [cause_changes] => 6
            [cause_filling_value] => 
            [cause_number_of_processed_daily_measurements] => 7
            [cause_number_of_raw_measurements] => 7
            [cause_treatment_average_per_day] => 1304.2857142857
            [cause_treatment_average_per_duration_of_action] => 9130
            [cause_unit_id] => 23
            [cause_user_variable_id] => 251372
            [cause_variable_category_id] => 3
            [cause_variable_id] => 1451
            [client_id] => 
            [confidence_interval] => 4065.1890999396
            [confidence_level] => LOW
            [correlation] => 
            [correlation_causality_votes_count] => 
            [correlation_usefulness_votes_count] => 
            [correlations_over_delays] => stdClass Object
                (
                    [-345600] => -0.23433220418127
                    [-172800] => 0.034760598063043
                    [-86400] => -0.64609384570908
                    [0] => 1
                    [86400] => -0.5968831073605
                    [172800] => 0.094415005584126
                )

            [correlations_over_durations] => stdClass Object
                (
                    [86400] => 1
                    [172800] => 0.6379499154506
                    [345600] => 0.57787061118854
                    [691200] => 0.67464277155072
                    [1382400] => 0.67464277155072
                    [2764800] => 0.67464277155072
                )

            [created_at] => 2022-06-13T19:47:53.000000Z
            [critical_t_value] => 1.895
            [data_source] => 
            [data_source_name] => user
            [deletion_reason] => 
            [duration_of_action] => 604800
            [earliest_measurement_start_at] => 
            [effect_baseline_average] => 4330
            [effect_baseline_relative_standard_deviation] => 49.9
            [effect_baseline_standard_deviation] => 2160.466346434
            [effect_changes] => 6
            [effect_filling_value] => 
            [effect_follow_up_average] => 5713.5476190476
            [effect_follow_up_percent_change_from_baseline] => 32
            [effect_number_of_processed_daily_measurements] => 7
            [effect_number_of_raw_measurements] => 7
            [effect_user_variable_id] => 251373
            [effect_variable_category_id] => 8
            [effect_variable_id] => 6068048
            [experiment_end_at] => 2022-05-21 00:00:00
            [experiment_start_at] => 2022-05-07 00:00:00
            [favoriters_count] => 
            [forward_pearson_correlation_coefficient] => 0.67464277155072
            [forward_spearman_correlation_coefficient] => 0.60714285714286
            [grouped_cause_value_closest_to_value_predicting_high_outcome] => 40790
            [grouped_cause_value_closest_to_value_predicting_low_outcome] => 40790
            [interesting_variable_category_pair] => 
            [is_public] => 
            [latest_measurement_start_at] => 
            [likers_count] => 
            [media_count] => 
            [name] => Relationship Between Daily Step Count and Heart Rate Variability (HRV)
            [newest_data_at] => 2022-06-13T19:47:49.000000Z
            [number_of_days] => 6
            [number_of_down_votes] => 
            [number_of_pairs] => 7
            [number_of_up_votes] => 
            [obvious] => 
            [onset_delay] => 0
            [onset_delay_with_strongest_pearson_correlation] => 0
            [optimal_pearson_product] => 1.1149049560059
            [outcome_is_goal] => 
            [p_value] => 0.22053649897756
            [pearson_correlation_with_no_onset_delay] => 1
            [plausibly_causal] => 
            [predictive_pearson_correlation_coefficient] => 0.95653125549315
            [predictor_is_controllable] => 
            [predicts_high_effect_change] => 7
            [predicts_low_effect_change] => -18
            [published_at] => 
            [qm_score] => 0.0007
            [reason_for_analysis] => A study is being created
            [record_size_in_kb] => 
            [relationship] => POSITIVE
            [report_title] => Higher Daily Step Count Predicts Significantly Higher Heart Rate Variability (HRV)
            [reverse_pearson_correlation_coefficient] => 
            [slug] => 
            [sort_order] => 
            [statistical_significance] => 0.001
            [strength_level] => STRONG
            [strongest_pearson_correlation_coefficient] => 1
            [subtitle] => Heart Rate Variability is generally 32% higher after 9130 count of Daily Step Count over the previous 7 days. 
            [t_value] => 1.0888099341446
            [updated_at] => 2022-06-13T19:47:55.000000Z
            [usefulness_vote] => 
            [user_error_message] => 
            [user_id] => 93294
            [user_variables_where_best_user_correlation_count] => 
            [value_predicting_high_outcome] => 6611.3333333333
            [value_predicting_low_outcome] => 1122
            [vote] => 
            [votes_count] => 
            [wp_post_id] => 
            [z_score] => 0.64
        )

    [html] => An html study page like this: <a href="https://studies.curedao.org/studies/cause-5627301-effect-1398-population-study">https://studies.curedao.org/studies/cause-5627301-effect-1398-population-study</a>
    [outcome_user_variable] => stdClass Object
        (
            [id] => 251373
            [title] => Heart Rate Variability (HRV)
            [name] => Heart Rate Variability (HRV)
            [description] => 
            [analysis_ended_at] => 2022-06-13T19:47:53.000000Z
            [analysis_requested_at] => 2022-06-13T19:47:49.000000Z
            [analysis_settings_modified_at] => 
            [analysis_started_at] => 2022-06-13T19:47:52.000000Z
            [average_seconds_between_measurements] => 86400
            [best_cause_variable_id] => 1451
            [best_correlations_where_cause_user_variable_count] => 
            [best_correlations_where_effect_user_variable_count] => 
            [best_effect_variable_id] => 
            [best_user_correlation_id] => 119250508
            [boring] => 
            [cause_only] => 
            [client_id] => oauth_test_client
            [combination_operation] => SUM
            [controllable] => 
            [correlations_count] => 
            [correlations_where_cause_user_variable_count] => 
            [correlations_where_effect_user_variable_count] => 
            [created_at] => 2022-06-13T19:47:48.000000Z
            [data_sources_count] => stdClass Object
                (
                    [oauth_test_client] => 7
                )

            [default_unit_id] => 204
            [duration_of_action] => 86400
            [earliest_non_tagged_measurement_start_at] => 2022-05-07T00:00:00.000000Z
            [earliest_source_measurement_start_at] => 2022-05-07 00:00:00
            [earliest_tagged_measurement_start_at] => 2022-05-07T00:00:00.000000Z
            [error_message] => 
            [favoriters_count] => 
            [favorites_count] => 
            [filling_type] => zero
            [filling_value] => 0
            [informational_url] => 
            [is_goal] => 
            [is_public] => 
            [join_with] => 
            [kurtosis] => 1.3248376497722
            [last_correlated_at] => 
            [last_original_unit_id] => 204
            [last_original_value] => 1122
            [last_unit_id] => 204
            [last_value] => 1122
            [latest_non_tagged_measurement_start_at] => 2022-05-13T00:00:00.000000Z
            [latest_source_measurement_start_at] => 2022-05-13 00:00:00
            [latest_tagged_measurement_start_at] => 2022-05-13T00:00:00.000000Z
            [maximum_allowed_value] => 864000000
            [maximum_recorded_daily_value] => 
            [maximum_recorded_value] => 9909
            [mean] => 5827.1
            [measurements_at_last_analysis] => 7
            [measurements_count] => 
            [measurements] => stdClass Object
                (
                    [2022-05-07 00:00:00] => stdClass Object
                        (
                            [title] => Measurement
                            [id] => 1093095314
                            [value] => 8472
                            [original_value] => 8472
                            [duration] => 
                            [note] => stdClass Object
                                (
                                )

                            [created_at] => 2022-06-13T19:47:49.000000Z
                            [updated_at] => 2022-06-13T19:47:49.000000Z
                            [error] => 
                            [start_at] => 2022-05-07 00:00:00
                            [original_start_at] => 2022-05-07T00:00:00.000000Z
                            [subtitle] => 8470 milliseconds Heart Rate Variability (HRV)
                            [client_id] => oauth_test_client
                            [connector_id] => 
                            [variable_id] => 6068048
                            [unit_id] => 204
                            [original_unit_id] => 204
                            [variable_category_id] => 8
                            [user_variable_id] => 251373
                            [connection_id] => 
                            [connector_import_id] => 
                        )

                    [2022-05-08 00:00:00] => stdClass Object
                        (
                            [title] => Measurement
                            [id] => 1093095315
                            [value] => 3402
                            [original_value] => 3402
                            [duration] => 
                            [note] => stdClass Object
                                (
                                )

                            [created_at] => 2022-06-13T19:47:49.000000Z
                            [updated_at] => 2022-06-13T19:47:49.000000Z
                            [error] => 
                            [start_at] => 2022-05-08 00:00:00
                            [original_start_at] => 2022-05-08T00:00:00.000000Z
                            [subtitle] => 3400 milliseconds Heart Rate Variability (HRV)
                            [client_id] => oauth_test_client
                            [connector_id] => 
                            [variable_id] => 6068048
                            [unit_id] => 204
                            [original_unit_id] => 204
                            [variable_category_id] => 8
                            [user_variable_id] => 251373
                            [connection_id] => 
                            [connector_import_id] => 
                        )

                    [2022-05-09 00:00:00] => stdClass Object
                        (
                            [title] => Measurement
                            [id] => 1093095316
                            [value] => 3930
                            [original_value] => 3930
                            [duration] => 
                            [note] => stdClass Object
                                (
                                )

                            [created_at] => 2022-06-13T19:47:49.000000Z
                            [updated_at] => 2022-06-13T19:47:49.000000Z
                            [error] => 
                            [start_at] => 2022-05-09 00:00:00
                            [original_start_at] => 2022-05-09T00:00:00.000000Z
                            [subtitle] => 3930 milliseconds Heart Rate Variability (HRV)
                            [client_id] => oauth_test_client
                            [connector_id] => 
                            [variable_id] => 6068048
                            [unit_id] => 204
                            [original_unit_id] => 204
                            [variable_category_id] => 8
                            [user_variable_id] => 251373
                            [connection_id] => 
                            [connector_import_id] => 
                        )

                    [2022-05-10 00:00:00] => stdClass Object
                        (
                            [title] => Measurement
                            [id] => 1093095317
                            [value] => 9909
                            [original_value] => 9909
                            [duration] => 
                            [note] => stdClass Object
                                (
                                )

                            [created_at] => 2022-06-13T19:47:49.000000Z
                            [updated_at] => 2022-06-13T19:47:49.000000Z
                            [error] => 
                            [start_at] => 2022-05-10 00:00:00
                            [original_start_at] => 2022-05-10T00:00:00.000000Z
                            [subtitle] => 9910 milliseconds Heart Rate Variability (HRV)
                            [client_id] => oauth_test_client
                            [connector_id] => 
                            [variable_id] => 6068048
                            [unit_id] => 204
                            [original_unit_id] => 204
                            [variable_category_id] => 8
                            [user_variable_id] => 251373
                            [connection_id] => 
                            [connector_import_id] => 
                        )

                    [2022-05-11 00:00:00] => stdClass Object
                        (
                            [title] => Measurement
                            [id] => 1093095318
                            [value] => 4943
                            [original_value] => 4943
                            [duration] => 
                            [note] => stdClass Object
                                (
                                )

                            [created_at] => 2022-06-13T19:47:49.000000Z
                            [updated_at] => 2022-06-13T19:47:49.000000Z
                            [error] => 
                            [start_at] => 2022-05-11 00:00:00
                            [original_start_at] => 2022-05-11T00:00:00.000000Z
                            [subtitle] => 4940 milliseconds Heart Rate Variability (HRV)
                            [client_id] => oauth_test_client
                            [connector_id] => 
                            [variable_id] => 6068048
                            [unit_id] => 204
                            [original_unit_id] => 204
                            [variable_category_id] => 8
                            [user_variable_id] => 251373
                            [connection_id] => 
                            [connector_import_id] => 
                        )

                    [2022-05-12 00:00:00] => stdClass Object
                        (
                            [title] => Measurement
                            [id] => 1093095319
                            [value] => 9012
                            [original_value] => 9012
                            [duration] => 
                            [note] => stdClass Object
                                (
                                )

                            [created_at] => 2022-06-13T19:47:49.000000Z
                            [updated_at] => 2022-06-13T19:47:49.000000Z
                            [error] => 
                            [start_at] => 2022-05-12 00:00:00
                            [original_start_at] => 2022-05-12T00:00:00.000000Z
                            [subtitle] => 9010 milliseconds Heart Rate Variability (HRV)
                            [client_id] => oauth_test_client
                            [connector_id] => 
                            [variable_id] => 6068048
                            [unit_id] => 204
                            [original_unit_id] => 204
                            [variable_category_id] => 8
                            [user_variable_id] => 251373
                            [connection_id] => 
                            [connector_import_id] => 
                        )

                    [2022-05-13 00:00:00] => stdClass Object
                        (
                            [title] => Measurement
                            [id] => 1093095320
                            [value] => 1122
                            [original_value] => 1122
                            [duration] => 
                            [note] => stdClass Object
                                (
                                )

                            [created_at] => 2022-06-13T19:47:49.000000Z
                            [updated_at] => 2022-06-13T19:47:49.000000Z
                            [error] => 
                            [start_at] => 2022-05-13 00:00:00
                            [original_start_at] => 2022-05-13T00:00:00.000000Z
                            [subtitle] => 1120 milliseconds Heart Rate Variability (HRV)
                            [client_id] => oauth_test_client
                            [connector_id] => 
                            [variable_id] => 6068048
                            [unit_id] => 204
                            [original_unit_id] => 204
                            [variable_category_id] => 8
                            [user_variable_id] => 251373
                            [connection_id] => 
                            [connector_import_id] => 
                        )

                )

            [media_count] => 
            [median] => 4943
            [median_seconds_between_measurements] => 86400
            [minimum_allowed_seconds_between_measurements] => 1
            [minimum_allowed_value] => 0
            [minimum_recorded_daily_value] => 
            [minimum_recorded_value] => 1122
            [most_common_connector_id] => 
            [most_common_original_unit_id] => 
            [most_common_source_name] => oauth_test_client
            [most_common_value] => 8472
            [newest_data_at] => 2022-06-13T19:47:49.000000Z
            [number_common_tagged_by] => 0
            [number_of_changes] => 6
            [number_of_common_children] => 
            [number_of_common_foods] => 
            [number_of_common_ingredients] => 
            [number_of_common_joined_variables] => 
            [number_of_common_parents] => 
            [number_of_common_tags] => 
            [number_of_correlations] => 0
            [number_of_measurements] => 7
            [number_of_measurements_with_tags_at_last_correlation] => 
            [number_of_outcome_case_studies] => 
            [number_of_processed_daily_measurements] => 7
            [number_of_raw_measurements_with_tags_joins_children] => 7
            [number_of_soft_deleted_measurements] => 0
            [number_of_tracking_reminder_notifications] => 0
            [number_of_tracking_reminders] => 0
            [number_of_unique_daily_values] => 7
            [number_of_unique_values] => 7
            [number_of_user_children] => 
            [number_of_user_correlations_as_cause] => 0
            [number_of_user_correlations_as_effect] => 0
            [number_of_user_foods] => 
            [number_of_user_ingredients] => 
            [number_of_user_joined_variables] => 
            [number_of_user_parents] => 
            [number_of_user_tags] => 0
            [number_user_tagged_by] => 0
            [onset_delay] => 0
            [optimal_value_message] => Higher Daily Step Count predicts significantly higher Heart Rate Variability (HRV).  Heart Rate Variability (HRV) was 32% higher following above average over the previous 7 days. 
            [outcome] => 
            [outcome_of_interest] => 1
            [outcomes_count] => 
            [parent_id] => 
            [predictor] => 
            [predictor_of_interest] => 
            [predictors_count] => 
            [reason_for_analysis] => setEffectMeasurementsAndAnalyze
            [record_size_in_kb] => 
            [report_title] => Heart Rate Variability (HRV)
            [second_to_last_value] => 9012
            [skewness] => -0.032423795632679
            [slug] => 
            [sources] => 
            [standard_deviation] => 3321.6634602044
            [subtitle] => 7 measurements | Recorded 32 days ago | Higher Daily Step Count predicts significantly higher Heart Rate Variability (HRV).  Heart Rate Variability (HRV) was 32% higher following above average over the previous 7 days. 
            [third_to_last_value] => 4943
            [tracking_reminder_notifications_count] => 
            [tracking_reminders_count] => 
            [updated_at] => 2022-06-13T19:47:55.000000Z
            [user_error_message] => 
            [user_id] => 93294
            [user_maximum_allowed_daily_value] => 
            [user_minimum_allowed_daily_value] => 
            [user_minimum_allowed_non_zero_value] => 
            [user_tags_where_tag_user_variable_count] => 
            [user_tags_where_tagged_user_variable_count] => 
            [user_variable_clients_count] => 
            [user_variable_outcome_categories_count] => 
            [user_variable_predictor_categories_count] => 
            [valence] => 
            [variable_category_id] => 8
            [variable_id] => 6068048
            [variable_user_sources_count] => 
            [variance] => 11033448.142857
            [wikipedia_title] => 
            [wp_post_id] => 
        )

    [outcome_variable] => stdClass Object
        (
            [title] => Heart Rate Variability (HRV)
            [id] => 6068048
            [name] => Heart Rate Variability (HRV)
            [abbreviatedUnitName] => 
            [actions_count] => 
            [additional_meta_data] => 
            [aggregate_correlations_count] => 
            [aggregate_correlations_where_cause_variable_count] => 
            [aggregate_correlations_where_effect_variable_count] => 
            [analysis_ended_at] => 
            [analysis_requested_at] => 
            [analysis_settings_modified_at] => 
            [analysis_started_at] => 
            [applications_where_outcome_variable_count] => 
            [applications_where_predictor_variable_count] => 
            [average_seconds_between_measurements] => 
            [best_aggregate_correlation_id] => 
            [best_cause_variable_id] => 1451
            [best_effect_variable_id] => 
            [boring] => 
            [brand_name] => 
            [canonical_variable_id] => 
            [cause_only] => 
            [charts] => 
            [client_id] => oauth_test_client
            [combination_operation] => SUM
            [common_alias] => 
            [common_maximum_allowed_daily_value] => 
            [common_minimum_allowed_daily_value] => 
            [common_minimum_allowed_non_zero_value] => 
            [common_tagged_by_count] => 
            [common_tags_count] => 
            [common_tags_where_tag_variable_count] => 
            [common_tags_where_tagged_variable_count] => 
            [condition_causes_where_cause_count] => 
            [condition_causes_where_condition_count] => 
            [condition_treatments_count] => 
            [condition_treatments_where_condition_count] => 
            [condition_treatments_where_treatment_count] => 
            [controllable] => 
            [correlation_causality_votes_where_cause_variable_count] => 
            [correlation_causality_votes_where_effect_variable_count] => 
            [correlation_usefulness_votes_where_cause_variable_count] => 
            [correlation_usefulness_votes_where_effect_variable_count] => 
            [correlations_count] => 
            [correlations_where_cause_variable_count] => 
            [correlations_where_effect_variable_count] => 
            [created_at] => 2022-06-13T07:26:35.000000Z
            [creator_user_id] => 93284
            [ct_treatment_side_effects_where_side_effect_variable_count] => 
            [ct_treatment_side_effects_where_treatment_variable_count] => 
            [data_sources_count] => stdClass Object
                (
                    [oauth_test_client] => 1
                )

            [default_unit_id] => 204
            [default_value] => 
            [deletion_reason] => 
            [description] => 
            [display_name] => Heart Rate Variability (HRV)
            [duration_of_action] => 86400
            [earliest_non_tagged_measurement_start_at] => 2022-05-07T00:00:00.000000Z
            [earliest_tagged_measurement_start_at] => 2022-05-07T00:00:00.000000Z
            [favoriters_count] => 
            [favorites_count] => 
            [filling_type] => zero
            [filling_value] => 0
            [image_url] => https://static.quantimo.do/img/variable_categories/heart_monitor-96.png
            [individual_cause_studies_count] => 
            [individual_effect_studies_count] => 
            [informational_url] => 
            [ion_icon] => 
            [is_goal] => 
            [is_public] => 
            [kurtosis] => 
            [latest_non_tagged_measurement_start_at] => 2022-05-13T00:00:00.000000Z
            [latest_tagged_measurement_start_at] => 2022-05-13T00:00:00.000000Z
            [manual_tracking] => 
            [maximum_allowed_daily_value] => 
            [maximum_allowed_value] => 864000000
            [maximum_recorded_value] => 9909
            [mean] => 
            [measurements_count] => 
            [media_count] => 
            [median] => 
            [median_seconds_between_measurements] => 
            [meta_data] => 
            [minimum_allowed_seconds_between_measurements] => 1
            [minimum_allowed_value] => 0
            [minimum_recorded_value] => 1122
            [most_common_connector_id] => 
            [most_common_original_unit_id] => 
            [most_common_source_name] => 
            [most_common_value] => 
            [newest_data_at] => 2022-06-13T07:26:46.000000Z
            [number_common_tagged_by] => 
            [number_of_aggregate_correlations_as_cause] => 
            [number_of_aggregate_correlations_as_effect] => 
            [number_of_applications_where_outcome_variable] => 
            [number_of_applications_where_predictor_variable] => 
            [number_of_common_children] => 
            [number_of_common_foods] => 
            [number_of_common_ingredients] => 
            [number_of_common_joined_variables] => 
            [number_of_common_parents] => 
            [number_of_common_tags] => 
            [number_of_common_tags_where_tag_variable] => 
            [number_of_common_tags_where_tagged_variable] => 
            [number_of_measurements] => 7
            [number_of_outcome_case_studies] => 
            [number_of_outcome_population_studies] => 
            [number_of_predictor_case_studies] => 
            [number_of_predictor_population_studies] => 
            [number_of_raw_measurements] => 
            [number_of_raw_measurements_with_tags_joins_children] => 7
            [number_of_soft_deleted_measurements] => 
            [number_of_studies_where_cause_variable] => 
            [number_of_studies_where_effect_variable] => 
            [number_of_tracking_reminder_notifications] => 
            [number_of_tracking_reminders] => 
            [number_of_unique_values] => 7
            [number_of_user_children] => 
            [number_of_user_foods] => 
            [number_of_user_ingredients] => 
            [number_of_user_joined_variables] => 
            [number_of_user_parents] => 
            [number_of_user_tags_where_tag_variable] => 
            [number_of_user_tags_where_tagged_variable] => 
            [number_of_user_variables] => 1
            [number_of_users_where_primary_outcome_variable] => 
            [number_of_variables_where_best_cause_variable] => 
            [number_of_variables_where_best_effect_variable] => 
            [number_of_votes_where_cause_variable] => 
            [number_of_votes_where_effect_variable] => 
            [onset_delay] => 0
            [optimal_value_message] => Higher Daily Step Count predicts significantly higher Heart Rate Variability (HRV).  Based on data from 1 participants, Heart Rate Variability (HRV) was highest after 40800 count. 
            [outcome] => 
            [outcomes_count] => 
            [parent_id] => 
            [population_cause_studies_count] => 
            [population_effect_studies_count] => 
            [predictor] => 
            [predictors_count] => 
            [price] => 
            [product_url] => 
            [public_outcomes_count] => 
            [public_predictors_count] => 
            [reason_for_analysis] => 
            [record_size_in_kb] => 
            [report_title] => Heart Rate Variability (HRV)
            [second_most_common_value] => 
            [side_effect_variables_count] => 
            [side_effects_count] => 
            [skewness] => 
            [slug] => 
            [sort_order] => 0
            [source_url] => 
            [standard_deviation] => 
            [studies_count] => 
            [studies_where_cause_variable_count] => 
            [studies_where_effect_variable_count] => 
            [subtitle] => Heart Rate Variability (HRV) overview with data visualizations and likely outcomes based on the anonymously aggregated data donated by 108 participants
            [synonyms] => Array
                (
                    [0] => Heart Rate Variability
                    [1] => HRV
                    [2] => Heart Rate Variability (HRV)
                )

            [tags_count] => 
            [third_most_common_value] => 
            [third_party_correlations_count] => 
            [tracking_reminder_notifications_count] => 
            [tracking_reminders_count] => 
            [treatment_side_effects_where_treatment_count] => 
            [unit_id] => 204
            [up_voted_public_outcomes_count] => 
            [up_voted_public_predictors_count] => 
            [upc_12] => 
            [upc_14] => 
            [updated_at] => 2022-06-13T07:26:53.000000Z
            [user_error_message] => 
            [user_tagged_by_count] => 
            [user_tags_count] => 
            [user_tags_where_tag_variable_count] => 
            [user_tags_where_tagged_variable_count] => 
            [user_variable_clients_count] => 
            [user_variable_outcome_categories_count] => 
            [user_variable_predictor_categories_count] => 
            [user_variables_count] => 
            [user_variables_excluding_test_users_count] => 
            [users_count] => 
            [users_where_primary_outcome_variable_count] => 
            [valence] => 
            [variable_category_id] => 8
            [variable_id] => 6068048
            [variable_outcome_categories_count] => 
            [variable_predictor_categories_count] => 
            [variable_user_sources_count] => 
            [variables_count] => 
            [variables_where_best_cause_variable_count] => 
            [variables_where_best_effect_variable_count] => 
            [variance] => 
            [votes_count] => 
            [votes_where_cause_count] => 
            [votes_where_cause_variable_count] => 
            [votes_where_effect_count] => 
            [votes_where_effect_variable_count] => 
            [wikipedia_title] => 
            [wikipedia_url] => 
            [wp_post_id] => 
        )

    [predictor_user_variable] => stdClass Object
        (
            [id] => 251372
            [title] => Daily Step Count
            [name] => Daily Step Count
            [description] => 
            [analysis_ended_at] => 2022-06-13T19:47:52.000000Z
            [analysis_requested_at] => 2022-06-13T19:47:48.000000Z
            [analysis_settings_modified_at] => 
            [analysis_started_at] => 2022-06-13T19:47:51.000000Z
            [average_seconds_between_measurements] => 86400
            [best_cause_variable_id] => 
            [best_correlations_where_cause_user_variable_count] => 
            [best_correlations_where_effect_user_variable_count] => 
            [best_effect_variable_id] => 6068048
            [best_user_correlation_id] => 119250508
            [boring] => 
            [cause_only] => 
            [client_id] => oauth_test_client
            [combination_operation] => SUM
            [controllable] => 
            [correlations_count] => 
            [correlations_where_cause_user_variable_count] => 
            [correlations_where_effect_user_variable_count] => 
            [created_at] => 2022-06-13T19:47:46.000000Z
            [data_sources_count] => stdClass Object
                (
                    [oauth_test_client] => 7
                )

            [default_unit_id] => 23
            [duration_of_action] => 604800
            [earliest_non_tagged_measurement_start_at] => 2022-05-07T00:00:00.000000Z
            [earliest_source_measurement_start_at] => 2022-05-07 00:00:00
            [earliest_tagged_measurement_start_at] => 2022-05-07T00:00:00.000000Z
            [error_message] => 
            [favoriters_count] => 
            [favorites_count] => 
            [filling_type] => none
            [filling_value] => 
            [informational_url] => 
            [is_goal] => 
            [is_public] => 
            [join_with] => 
            [kurtosis] => 1.3248376497722
            [last_correlated_at] => 
            [last_original_unit_id] => 23
            [last_original_value] => 1122
            [last_unit_id] => 23
            [last_value] => 1122
            [latest_non_tagged_measurement_start_at] => 2022-05-13T00:00:00.000000Z
            [latest_source_measurement_start_at] => 2022-05-13 00:00:00
            [latest_tagged_measurement_start_at] => 2022-05-13T00:00:00.000000Z
            [maximum_allowed_value] => 
            [maximum_recorded_daily_value] => 
            [maximum_recorded_value] => 9909
            [mean] => 5827.1
            [measurements_at_last_analysis] => 7
            [measurements_count] => 
            [measurements] => stdClass Object
                (
                    [2022-05-07 00:00:00] => stdClass Object
                        (
                            [title] => Measurement
                            [id] => 1093095307
                            [value] => 8472
                            [original_value] => 8472
                            [duration] => 
                            [note] => stdClass Object
                                (
                                )

                            [created_at] => 2022-06-13T19:47:47.000000Z
                            [updated_at] => 2022-06-13T19:47:47.000000Z
                            [error] => 
                            [start_at] => 2022-05-07 00:00:00
                            [original_start_at] => 2022-05-07T00:00:00.000000Z
                            [subtitle] => 8470 count Daily Step Count
                            [client_id] => oauth_test_client
                            [connector_id] => 
                            [variable_id] => 1451
                            [unit_id] => 23
                            [original_unit_id] => 23
                            [variable_category_id] => 3
                            [user_variable_id] => 251372
                            [connection_id] => 
                            [connector_import_id] => 
                        )

                    [2022-05-08 00:00:00] => stdClass Object
                        (
                            [title] => Measurement
                            [id] => 1093095308
                            [value] => 3402
                            [original_value] => 3402
                            [duration] => 
                            [note] => stdClass Object
                                (
                                )

                            [created_at] => 2022-06-13T19:47:47.000000Z
                            [updated_at] => 2022-06-13T19:47:47.000000Z
                            [error] => 
                            [start_at] => 2022-05-08 00:00:00
                            [original_start_at] => 2022-05-08T00:00:00.000000Z
                            [subtitle] => 3400 count Daily Step Count
                            [client_id] => oauth_test_client
                            [connector_id] => 
                            [variable_id] => 1451
                            [unit_id] => 23
                            [original_unit_id] => 23
                            [variable_category_id] => 3
                            [user_variable_id] => 251372
                            [connection_id] => 
                            [connector_import_id] => 
                        )

                    [2022-05-09 00:00:00] => stdClass Object
                        (
                            [title] => Measurement
                            [id] => 1093095309
                            [value] => 3930
                            [original_value] => 3930
                            [duration] => 
                            [note] => stdClass Object
                                (
                                )

                            [created_at] => 2022-06-13T19:47:47.000000Z
                            [updated_at] => 2022-06-13T19:47:47.000000Z
                            [error] => 
                            [start_at] => 2022-05-09 00:00:00
                            [original_start_at] => 2022-05-09T00:00:00.000000Z
                            [subtitle] => 3930 count Daily Step Count
                            [client_id] => oauth_test_client
                            [connector_id] => 
                            [variable_id] => 1451
                            [unit_id] => 23
                            [original_unit_id] => 23
                            [variable_category_id] => 3
                            [user_variable_id] => 251372
                            [connection_id] => 
                            [connector_import_id] => 
                        )

                    [2022-05-10 00:00:00] => stdClass Object
                        (
                            [title] => Measurement
                            [id] => 1093095310
                            [value] => 9909
                            [original_value] => 9909
                            [duration] => 
                            [note] => stdClass Object
                                (
                                )

                            [created_at] => 2022-06-13T19:47:47.000000Z
                            [updated_at] => 2022-06-13T19:47:47.000000Z
                            [error] => 
                            [start_at] => 2022-05-10 00:00:00
                            [original_start_at] => 2022-05-10T00:00:00.000000Z
                            [subtitle] => 9910 count Daily Step Count
                            [client_id] => oauth_test_client
                            [connector_id] => 
                            [variable_id] => 1451
                            [unit_id] => 23
                            [original_unit_id] => 23
                            [variable_category_id] => 3
                            [user_variable_id] => 251372
                            [connection_id] => 
                            [connector_import_id] => 
                        )

                    [2022-05-11 00:00:00] => stdClass Object
                        (
                            [title] => Measurement
                            [id] => 1093095311
                            [value] => 4943
                            [original_value] => 4943
                            [duration] => 
                            [note] => stdClass Object
                                (
                                )

                            [created_at] => 2022-06-13T19:47:47.000000Z
                            [updated_at] => 2022-06-13T19:47:47.000000Z
                            [error] => 
                            [start_at] => 2022-05-11 00:00:00
                            [original_start_at] => 2022-05-11T00:00:00.000000Z
                            [subtitle] => 4940 count Daily Step Count
                            [client_id] => oauth_test_client
                            [connector_id] => 
                            [variable_id] => 1451
                            [unit_id] => 23
                            [original_unit_id] => 23
                            [variable_category_id] => 3
                            [user_variable_id] => 251372
                            [connection_id] => 
                            [connector_import_id] => 
                        )

                    [2022-05-12 00:00:00] => stdClass Object
                        (
                            [title] => Measurement
                            [id] => 1093095312
                            [value] => 9012
                            [original_value] => 9012
                            [duration] => 
                            [note] => stdClass Object
                                (
                                )

                            [created_at] => 2022-06-13T19:47:47.000000Z
                            [updated_at] => 2022-06-13T19:47:47.000000Z
                            [error] => 
                            [start_at] => 2022-05-12 00:00:00
                            [original_start_at] => 2022-05-12T00:00:00.000000Z
                            [subtitle] => 9010 count Daily Step Count
                            [client_id] => oauth_test_client
                            [connector_id] => 
                            [variable_id] => 1451
                            [unit_id] => 23
                            [original_unit_id] => 23
                            [variable_category_id] => 3
                            [user_variable_id] => 251372
                            [connection_id] => 
                            [connector_import_id] => 
                        )

                    [2022-05-13 00:00:00] => stdClass Object
                        (
                            [title] => Measurement
                            [id] => 1093095313
                            [value] => 1122
                            [original_value] => 1122
                            [duration] => 
                            [note] => stdClass Object
                                (
                                )

                            [created_at] => 2022-06-13T19:47:48.000000Z
                            [updated_at] => 2022-06-13T19:47:48.000000Z
                            [error] => 
                            [start_at] => 2022-05-13 00:00:00
                            [original_start_at] => 2022-05-13T00:00:00.000000Z
                            [subtitle] => 1120 count Daily Step Count
                            [client_id] => oauth_test_client
                            [connector_id] => 
                            [variable_id] => 1451
                            [unit_id] => 23
                            [original_unit_id] => 23
                            [variable_category_id] => 3
                            [user_variable_id] => 251372
                            [connection_id] => 
                            [connector_import_id] => 
                        )

                )

            [media_count] => 
            [median] => 4943
            [median_seconds_between_measurements] => 86400
            [minimum_allowed_seconds_between_measurements] => 86400
            [minimum_allowed_value] => 1
            [minimum_recorded_daily_value] => 
            [minimum_recorded_value] => 1122
            [most_common_connector_id] => 
            [most_common_original_unit_id] => 
            [most_common_source_name] => oauth_test_client
            [most_common_value] => 8472
            [newest_data_at] => 2022-06-13T19:47:48.000000Z
            [number_common_tagged_by] => 0
            [number_of_changes] => 6
            [number_of_common_children] => 
            [number_of_common_foods] => 
            [number_of_common_ingredients] => 
            [number_of_common_joined_variables] => 
            [number_of_common_parents] => 
            [number_of_common_tags] => 
            [number_of_correlations] => 0
            [number_of_measurements] => 7
            [number_of_measurements_with_tags_at_last_correlation] => 
            [number_of_outcome_case_studies] => 
            [number_of_processed_daily_measurements] => 7
            [number_of_raw_measurements_with_tags_joins_children] => 7
            [number_of_soft_deleted_measurements] => 0
            [number_of_tracking_reminder_notifications] => 0
            [number_of_tracking_reminders] => 0
            [number_of_unique_daily_values] => 7
            [number_of_unique_values] => 7
            [number_of_user_children] => 
            [number_of_user_correlations_as_cause] => 0
            [number_of_user_correlations_as_effect] => 0
            [number_of_user_foods] => 
            [number_of_user_ingredients] => 
            [number_of_user_joined_variables] => 
            [number_of_user_parents] => 
            [number_of_user_tags] => 0
            [number_user_tagged_by] => 0
            [onset_delay] => 0
            [optimal_value_message] => Higher Daily Step Count predicts significantly higher Heart Rate Variability (HRV).  Heart Rate Variability (HRV) was 32% higher following above average over the previous 7 days. 
            [outcome] => 1
            [outcome_of_interest] => 1
            [outcomes_count] => 
            [parent_id] => 
            [predictor] => 
            [predictor_of_interest] => 
            [predictors_count] => 
            [reason_for_analysis] => setCauseMeasurementsAndAnalyze
            [record_size_in_kb] => 
            [report_title] => Daily Step Count
            [second_to_last_value] => 9012
            [skewness] => -0.032423795632679
            [slug] => 
            [sources] => 
            [standard_deviation] => 3321.6634602044
            [subtitle] => 7 measurements | Recorded 32 days ago | Higher Daily Step Count predicts significantly higher Heart Rate Variability (HRV).  Heart Rate Variability (HRV) was 32% higher following above average over the previous 7 days. 
            [third_to_last_value] => 4943
            [tracking_reminder_notifications_count] => 
            [tracking_reminders_count] => 
            [updated_at] => 2022-06-13T19:47:55.000000Z
            [user_error_message] => 
            [user_id] => 93294
            [user_maximum_allowed_daily_value] => 
            [user_minimum_allowed_daily_value] => 
            [user_minimum_allowed_non_zero_value] => 
            [user_tags_where_tag_user_variable_count] => 
            [user_tags_where_tagged_user_variable_count] => 
            [user_variable_clients_count] => 
            [user_variable_outcome_categories_count] => 
            [user_variable_predictor_categories_count] => 
            [valence] => 
            [variable_category_id] => 3
            [variable_id] => 1451
            [variable_user_sources_count] => 
            [variance] => 11033448.142857
            [wikipedia_title] => 
            [wp_post_id] => 
        )

    [predictor_variable] => stdClass Object
        (
            [title] => Daily Step Count
            [id] => 1451
            [name] => Daily Step Count
            [abbreviatedUnitName] => 
            [actions_count] => 
            [additional_meta_data] => 
            [aggregate_correlations_count] => 
            [aggregate_correlations_where_cause_variable_count] => 
            [aggregate_correlations_where_effect_variable_count] => 
            [analysis_ended_at] => 2020-10-11T17:02:49.000000Z
            [analysis_requested_at] => 
            [analysis_settings_modified_at] => 2020-09-15T21:17:25.000000Z
            [analysis_started_at] => 2020-10-11T17:02:46.000000Z
            [applications_where_outcome_variable_count] => 
            [applications_where_predictor_variable_count] => 
            [average_seconds_between_measurements] => 238986
            [best_aggregate_correlation_id] => 65685197
            [best_cause_variable_id] => 6057041
            [best_effect_variable_id] => 1398
            [boring] => 
            [brand_name] => 
            [canonical_variable_id] => 
            [cause_only] => 
            [charts] => stdClass Object
                (
                    [id] => 
                    [monthlyColumnChart] => stdClass Object
                        (
                            [id] => average-steps-by-month
                            [title] => 
                            [jpgUrl] => 
                            [pngUrl] => https://static.quantimo.do/variables/1451/average-steps-by-month-monthly-column-chart.png
                            [svgUrl] => 
                            [chartId] => average-steps-by-month
                            [imageUrl] => https://static.quantimo.do/variables/1451/average-steps-by-month-monthly-column-chart.png
                            [subtitle] => 
                            [chartTitle] => Average Steps by Month
                            [explanation] => Typical Steps value for each month.
                            [variableName] => Steps
                            [validImageOnS3] => 1
                            [highchartConfig] => stdClass Object
                                (
                                    [id] => average-steps-by-month
                                    [lang] => stdClass Object
                                        (
                                            [loading] => 
                                        )

                                    [chart] => stdClass Object
                                        (
                                            [type] => column
                                            [renderTo] => average-steps-by-month-chart-container
                                            [animation] => stdClass Object
                                                (
                                                    [duration] => 0
                                                )

                                        )

                                    [title] => stdClass Object
                                        (
                                            [text] => Average Steps by Month
                                            [style] => Array
                                                (
                                                )

                                            [enabled] => 1
                                        )

                                    [xAxis] => stdClass Object
                                        (
                                            [title] => stdClass Object
                                                (
                                                    [text] => Month
                                                    [style] => Array
                                                        (
                                                        )

                                                )

                                            [categories] => Array
                                                (
                                                    [0] => January
                                                    [1] => February
                                                    [2] => March
                                                    [3] => April
                                                    [4] => May
                                                    [5] => June
                                                    [6] => July
                                                    [7] => August
                                                    [8] => September
                                                    [9] => October
                                                    [10] => November
                                                    [11] => December
                                                )

                                        )

                                    [yAxis] => stdClass Object
                                        (
                                            [max] => 4677.7
                                            [min] => 3892.3
                                            [title] => stdClass Object
                                                (
                                                    [text] => Daily Average (count)
                                                    [style] => Array
                                                        (
                                                        )

                                                    [enabled] => 1
                                                )

                                        )

                                    [colors] => Array
                                        (
                                            [0] => #000000
                                            [1] => #3467d6
                                            [2] => #dd4b39
                                            [3] => #0f9d58
                                            [4] => #f09402
                                            [5] => #d34836
                                        )

                                    [legend] => stdClass Object
                                        (
                                            [enabled] => 
                                        )

                                    [series] => Array
                                        (
                                            [0] => stdClass Object
                                                (
                                                    [data] => Array
                                                        (
                                                            [0] => 3900
                                                            [1] => 4080
                                                            [2] => 4560
                                                            [3] => 4470
                                                            [4] => 4670
                                                            [5] => 4540
                                                            [6] => 4190
                                                            [7] => 3960
                                                            [8] => 4010
                                                            [9] => 3940
                                                            [10] => 3990
                                                            [11] => 3900
                                                        )

                                                    [name] => Daily Average Steps By Month
                                                )

                                        )

                                    [credits] => stdClass Object
                                        (
                                            [enabled] => 
                                        )

                                    [loading] => stdClass Object
                                        (
                                            [style] => Array
                                                (
                                                )

                                            [hideDuration] => 10
                                            [showDuration] => 10
                                        )

                                    [tooltip] => stdClass Object
                                        (
                                            [formatter] => stdClass Object
                                                (
                                                    [_expression] => function() {
            return this.y +'count <br/>on average<br/>in '+this.x;
        }
                                                )

                                        )

                                    [subtitle] => stdClass Object
                                        (
                                            [text] => Typical Steps value for each month.
                                            [style] => Array
                                                (
                                                )

                                        )

                                    [exporting] => stdClass Object
                                        (
                                            [enabled] => 1
                                        )

                                    [plotOptions] => stdClass Object
                                        (
                                            [column] => stdClass Object
                                                (
                                                    [borderWidth] => 0
                                                    [colorByPoint] => 1
                                                    [pointPadding] => 0.2
                                                    [enableMouseTracking] => 1
                                                )

                                        )

                                    [useHighStocks] => 
                                )

                            [imageGeneratedAt] => 
                        )

                    [weekdayColumnChart] => stdClass Object
                        (
                            [id] => average-steps-by-day-of-week
                            [title] => 
                            [jpgUrl] => 
                            [pngUrl] => https://static.quantimo.do/variables/1451/average-steps-by-day-of-week-weekday-column-chart.png
                            [svgUrl] => 
                            [chartId] => average-steps-by-day-of-week
                            [imageUrl] => https://static.quantimo.do/variables/1451/average-steps-by-day-of-week-weekday-column-chart.png
                            [subtitle] => 
                            [chartTitle] => Average Steps by Day of Week
                            [explanation] => Typical Steps value on each day of the week.
                            [variableName] => Steps
                            [validImageOnS3] => 1
                            [highchartConfig] => stdClass Object
                                (
                                    [id] => average-steps-by-day-of-week
                                    [lang] => stdClass Object
                                        (
                                            [loading] => 
                                        )

                                    [chart] => stdClass Object
                                        (
                                            [type] => column
                                            [renderTo] => average-steps-by-day-of-week-chart-container
                                            [animation] => stdClass Object
                                                (
                                                    [duration] => 0
                                                )

                                        )

                                    [title] => stdClass Object
                                        (
                                            [text] => Average Steps by Day of Week
                                            [style] => Array
                                                (
                                                )

                                            [enabled] => 1
                                        )

                                    [xAxis] => stdClass Object
                                        (
                                            [title] => stdClass Object
                                                (
                                                    [text] => Day
                                                    [style] => Array
                                                        (
                                                        )

                                                )

                                            [categories] => Array
                                                (
                                                    [0] => Sun
                                                    [1] => Mon
                                                    [2] => Tue
                                                    [3] => Wed
                                                    [4] => Thu
                                                    [5] => Fri
                                                    [6] => Sat
                                                )

                                        )

                                    [yAxis] => stdClass Object
                                        (
                                            [max] => 4343.9
                                            [min] => 3946.1
                                            [title] => stdClass Object
                                                (
                                                    [text] => Average (count)
                                                    [style] => Array
                                                        (
                                                        )

                                                    [enabled] => 1
                                                )

                                        )

                                    [colors] => Array
                                        (
                                            [0] => #000000
                                            [1] => #3467d6
                                            [2] => #dd4b39
                                            [3] => #0f9d58
                                            [4] => #f09402
                                            [5] => #d34836
                                        )

                                    [legend] => stdClass Object
                                        (
                                            [enabled] => 
                                        )

                                    [series] => Array
                                        (
                                            [0] => stdClass Object
                                                (
                                                    [data] => Array
                                                        (
                                                            [0] => 3950
                                                            [1] => 4170
                                                            [2] => 4200
                                                            [3] => 4190
                                                            [4] => 4270
                                                            [5] => 4340
                                                            [6] => 4210
                                                        )

                                                    [name] => Average Steps By Day of Week
                                                )

                                        )

                                    [credits] => stdClass Object
                                        (
                                            [enabled] => 
                                        )

                                    [loading] => stdClass Object
                                        (
                                            [style] => Array
                                                (
                                                )

                                            [hideDuration] => 10
                                            [showDuration] => 10
                                        )

                                    [tooltip] => stdClass Object
                                        (
                                            [formatter] => stdClass Object
                                                (
                                                    [_expression] => function() {
            return this.y +'count <br/>on average<br/>on '+this.x;
        }
                                                )

                                        )

                                    [subtitle] => stdClass Object
                                        (
                                            [text] => Typical Steps value seen on each day of the week. 
                                            [style] => Array
                                                (
                                                )

                                        )

                                    [exporting] => stdClass Object
                                        (
                                            [enabled] => 1
                                        )

                                    [plotOptions] => stdClass Object
                                        (
                                            [column] => stdClass Object
                                                (
                                                    [borderWidth] => 0
                                                    [colorByPoint] => 1
                                                    [pointPadding] => 0.2
                                                    [enableMouseTracking] => 1
                                                )

                                        )

                                    [useHighStocks] => 
                                )

                            [imageGeneratedAt] => 
                        )

                    [distributionColumnChart] => stdClass Object
                        (
                            [id] => daily-steps-distribution
                            [title] => 
                            [jpgUrl] => 
                            [pngUrl] => https://static.quantimo.do/variables/1451/daily-steps-distribution-distribution-column-chart.png
                            [svgUrl] => 
                            [chartId] => daily-steps-distribution
                            [imageUrl] => https://static.quantimo.do/variables/1451/daily-steps-distribution-distribution-column-chart.png
                            [subtitle] => 
                            [chartTitle] => Daily Steps Distribution
                            [explanation] => Each column represents the number of days this value occurred.
                            [variableName] => Steps
                            [validImageOnS3] => 1
                            [highchartConfig] => stdClass Object
                                (
                                    [id] => daily-steps-distribution
                                    [lang] => stdClass Object
                                        (
                                            [loading] => 
                                        )

                                    [chart] => stdClass Object
                                        (
                                            [type] => column
                                            [renderTo] => daily-steps-distribution-chart-container
                                            [animation] => stdClass Object
                                                (
                                                    [duration] => 0
                                                )

                                        )

                                    [title] => stdClass Object
                                        (
                                            [text] => Daily Steps Distribution
                                            [style] => Array
                                                (
                                                )

                                            [enabled] => 1
                                        )

                                    [xAxis] => stdClass Object
                                        (
                                            [title] => stdClass Object
                                                (
                                                    [text] => Daily Values (count)
                                                    [style] => Array
                                                        (
                                                        )

                                                )

                                            [categories] => Array
                                                (
                                                    [0] => 0
                                                    [1] => 3
                                                    [2] => 4
                                                    [3] => 10
                                                    [4] => 50
                                                    [5] => 200
                                                    [6] => 300
                                                    [7] => 400
                                                    [8] => 500
                                                    [9] => 600
                                                    [10] => 800
                                                    [11] => 900
                                                    [12] => 1000
                                                    [13] => 2000
                                                    [14] => 3000
                                                    [15] => 4000
                                                    [16] => 5000
                                                    [17] => 6000
                                                    [18] => 7000
                                                    [19] => 8000
                                                    [20] => 9000
                                                    [21] => 10000
                                                )

                                        )

                                    [yAxis] => stdClass Object
                                        (
                                            [max] => 790.82
                                            [min] => -6.82
                                            [title] => stdClass Object
                                                (
                                                    [text] => Number of Days
                                                    [style] => Array
                                                        (
                                                        )

                                                    [enabled] => 1
                                                )

                                        )

                                    [colors] => Array
                                        (
                                            [0] => #000000
                                            [1] => #3467d6
                                            [2] => #dd4b39
                                            [3] => #0f9d58
                                            [4] => #f09402
                                            [5] => #d34836
                                        )

                                    [legend] => stdClass Object
                                        (
                                            [enabled] => 
                                        )

                                    [series] => Array
                                        (
                                            [0] => stdClass Object
                                                (
                                                    [data] => Array
                                                        (
                                                            [0] => 783
                                                            [1] => 1
                                                            [2] => 2
                                                            [3] => 1
                                                            [4] => 1
                                                            [5] => 1
                                                            [6] => 1
                                                            [7] => 1
                                                            [8] => 1
                                                            [9] => 3
                                                            [10] => 3
                                                            [11] => 5
                                                            [12] => 63
                                                            [13] => 310
                                                            [14] => 450
                                                            [15] => 381
                                                            [16] => 349
                                                            [17] => 583
                                                            [18] => 564
                                                            [19] => 269
                                                            [20] => 88
                                                            [21] => 68
                                                        )

                                                    [name] => Steps Distribution
                                                )

                                        )

                                    [credits] => stdClass Object
                                        (
                                            [enabled] => 
                                        )

                                    [loading] => stdClass Object
                                        (
                                            [style] => Array
                                                (
                                                )

                                            [hideDuration] => 10
                                            [showDuration] => 10
                                        )

                                    [tooltip] => stdClass Object
                                        (
                                            [formatter] => stdClass Object
                                                (
                                                    [_expression] => function() {
            return this.y +' days where the <br/> average daily value is '+this.x+'count';
        }
                                                )

                                        )

                                    [subtitle] => stdClass Object
                                        (
                                            [text] => Each column represents the number of days this value occurred.
                                            [style] => Array
                                                (
                                                )

                                        )

                                    [exporting] => stdClass Object
                                        (
                                            [enabled] => 1
                                        )

                                    [plotOptions] => stdClass Object
                                        (
                                            [column] => stdClass Object
                                                (
                                                    [borderWidth] => 0
                                                    [colorByPoint] => 1
                                                    [pointPadding] => 0.2
                                                    [enableMouseTracking] => 1
                                                )

                                        )

                                    [useHighStocks] => 
                                )

                            [imageGeneratedAt] => 
                        )

                )

            [client_id] => unknown
            [combination_operation] => SUM
            [common_alias] => Steps
            [common_maximum_allowed_daily_value] => 
            [common_minimum_allowed_daily_value] => 
            [common_minimum_allowed_non_zero_value] => 
            [common_tagged_by_count] => 
            [common_tags_count] => 
            [common_tags_where_tag_variable_count] => 
            [common_tags_where_tagged_variable_count] => 
            [condition_causes_where_cause_count] => 
            [condition_causes_where_condition_count] => 
            [condition_treatments_count] => 
            [condition_treatments_where_condition_count] => 
            [condition_treatments_where_treatment_count] => 
            [controllable] => 
            [correlation_causality_votes_where_cause_variable_count] => 
            [correlation_causality_votes_where_effect_variable_count] => 
            [correlation_usefulness_votes_where_cause_variable_count] => 
            [correlation_usefulness_votes_where_effect_variable_count] => 
            [correlations_count] => 
            [correlations_where_cause_variable_count] => 
            [correlations_where_effect_variable_count] => 
            [created_at] => 2000-01-01T00:00:00.000000Z
            [creator_user_id] => 7
            [ct_treatment_side_effects_where_side_effect_variable_count] => 
            [ct_treatment_side_effects_where_treatment_variable_count] => 
            [data_sources_count] => stdClass Object
                (
                    [JAWBONE Up] => 8
                    [Vv7HymHq6PkTrZfM] => 15
                    [Fitbit] => 123
                    [QuantiModo] => 123
                    [app] => 8
                    [oauth_test_client] => 1
                    [medimodo] => 3
                    [unknown] => 2
                    [MoodiModo] => 7
                    [Withings] => 12
                    [UnknownClient] => 8
                    [bOGtinzJyQrbXEfv] => 4
                    [local] => 1
                    [system] => 1
                    [forever-today] => 1
                )

            [default_unit_id] => 23
            [default_value] => 
            [deletion_reason] => 
            [description] => 
            [display_name] => Daily Step Count
            [duration_of_action] => 604800
            [earliest_non_tagged_measurement_start_at] => 2010-01-01T00:00:00.000000Z
            [earliest_tagged_measurement_start_at] => 2010-01-01T00:00:00.000000Z
            [favoriters_count] => 
            [favorites_count] => 
            [filling_type] => none
            [filling_value] => 
            [image_url] => https://static.quantimo.do/img/fitness/png/treadmill.png
            [individual_cause_studies_count] => 
            [individual_effect_studies_count] => 
            [informational_url] => 
            [ion_icon] => ion-ios-body-outline
            [is_goal] => 
            [is_public] => 1
            [kurtosis] => 16.639977980211
            [latest_non_tagged_measurement_start_at] => 2022-05-13T00:00:00.000000Z
            [latest_tagged_measurement_start_at] => 2022-05-13T00:00:00.000000Z
            [manual_tracking] => 
            [maximum_allowed_daily_value] => 
            [maximum_allowed_value] => 
            [maximum_recorded_value] => 32759
            [mean] => 6466.3629645193
            [measurements_count] => 
            [media_count] => 
            [median] => 6036.923245614
            [median_seconds_between_measurements] => 86400
            [meta_data] => 
            [minimum_allowed_seconds_between_measurements] => 86400
            [minimum_allowed_value] => 1
            [minimum_recorded_value] => 11
            [most_common_connector_id] => 72
            [most_common_original_unit_id] => 23
            [most_common_source_name] => Withings
            [most_common_value] => 48516
            [newest_data_at] => 2020-10-03T12:49:43.000000Z
            [number_common_tagged_by] => 0
            [number_of_aggregate_correlations_as_cause] => 200
            [number_of_aggregate_correlations_as_effect] => 131
            [number_of_applications_where_outcome_variable] => 0
            [number_of_applications_where_predictor_variable] => 1
            [number_of_common_children] => 
            [number_of_common_foods] => 
            [number_of_common_ingredients] => 
            [number_of_common_joined_variables] => 
            [number_of_common_parents] => 
            [number_of_common_tags] => 0
            [number_of_common_tags_where_tag_variable] => 0
            [number_of_common_tags_where_tagged_variable] => 0
            [number_of_measurements] => 88028
            [number_of_outcome_case_studies] => 
            [number_of_outcome_population_studies] => 
            [number_of_predictor_case_studies] => 
            [number_of_predictor_population_studies] => 
            [number_of_raw_measurements] => 
            [number_of_raw_measurements_with_tags_joins_children] => 10365
            [number_of_soft_deleted_measurements] => 
            [number_of_studies_where_cause_variable] => 221
            [number_of_studies_where_effect_variable] => 35
            [number_of_tracking_reminder_notifications] => 368
            [number_of_tracking_reminders] => 28
            [number_of_unique_values] => 7600
            [number_of_user_children] => 
            [number_of_user_foods] => 
            [number_of_user_ingredients] => 
            [number_of_user_joined_variables] => 
            [number_of_user_parents] => 
            [number_of_user_tags_where_tag_variable] => 0
            [number_of_user_tags_where_tagged_variable] => 0
            [number_of_user_variables] => 280
            [number_of_users_where_primary_outcome_variable] => 0
            [number_of_variables_where_best_cause_variable] => 23
            [number_of_variables_where_best_effect_variable] => 4
            [number_of_votes_where_cause_variable] => 16
            [number_of_votes_where_effect_variable] => 5
            [onset_delay] => 0
            [optimal_value_message] => Higher Daily Step Count predicts insignificantly higher Overall Mood.  Based on data from 86 participants, Overall Mood was highest after 6330 count. 
            [outcome] => 1
            [outcomes_count] => 
            [parent_id] => 
            [population_cause_studies_count] => 
            [population_effect_studies_count] => 
            [predictor] => 
            [predictors_count] => 
            [price] => 12.99
            [product_url] => https://www.amazon.com/Omron-BP742N-Pressure-Monitor-Standard/dp/B00KPQB2NS?SubscriptionId=AKIAJSWU3RSJTDQWCXDQ&tag=quantimodo05-20&linkCode=xm2&camp=2025&creative=165953&creativeASIN=B00KPQB2NS
            [public_outcomes_count] => 
            [public_predictors_count] => 
            [reason_for_analysis] => STALE: analysis_ended_at before newest_data_at
            [record_size_in_kb] => 6
            [report_title] => Daily Step Count
            [second_most_common_value] => 48412
            [side_effect_variables_count] => 
            [side_effects_count] => 
            [skewness] => 1.5032080948564
            [slug] => daily-step-count
            [sort_order] => 0
            [source_url] => 
            [standard_deviation] => 3084.0373174008
            [studies_count] => 
            [studies_where_cause_variable_count] => 
            [studies_where_effect_variable_count] => 
            [subtitle] => 331 studies
            [synonyms] => Array
                (
                    [0] => Steps
                    [1] => Daily Step
                    [2] => Daily Step Count
                    [3] => Step
                )

            [tags_count] => 
            [third_most_common_value] => 45615
            [third_party_correlations_count] => 
            [tracking_reminder_notifications_count] => 
            [tracking_reminders_count] => 
            [treatment_side_effects_where_treatment_count] => 
            [unit_id] => 23
            [up_voted_public_outcomes_count] => 
            [up_voted_public_predictors_count] => 
            [upc_12] => 
            [upc_14] => 734010049130
            [updated_at] => 2022-05-27T17:17:02.000000Z
            [user_error_message] => 
            [user_tagged_by_count] => 
            [user_tags_count] => 
            [user_tags_where_tag_variable_count] => 
            [user_tags_where_tagged_variable_count] => 
            [user_variable_clients_count] => 
            [user_variable_outcome_categories_count] => 
            [user_variable_predictor_categories_count] => 
            [user_variables_count] => 
            [user_variables_excluding_test_users_count] => 
            [users_count] => 
            [users_where_primary_outcome_variable_count] => 
            [valence] => 
            [variable_category_id] => 3
            [variable_id] => 1451
            [variable_outcome_categories_count] => 
            [variable_predictor_categories_count] => 
            [variable_user_sources_count] => 
            [variables_count] => 
            [variables_where_best_cause_variable_count] => 
            [variables_where_best_effect_variable_count] => 
            [variance] => 12961277.144652
            [votes_count] => 
            [votes_where_cause_count] => 
            [votes_where_cause_variable_count] => 
            [votes_where_effect_count] => 
            [votes_where_effect_variable_count] => 
            [wikipedia_title] => 
            [wikipedia_url] => 
            [wp_post_id] => 122044
        )

    [user] => stdClass Object
        (
           
            [client_id] => oauth_test_client
            [client_user_id] => test-user-for-sdk-analyze-test1655149665
            [combine_notifications] => 
            [country] => 
            [cover_photo] => 
            [created_at] => 2022-06-13T19:47:46.000000Z
            [currency] => 
            [display_name] => test-user-for-sdk-analyze-test1655149665@oauth_test_client.com
            [earliest_reminder_time] => 
            [email] => test-user-for-sdk-analyze-test1655149665@oauth_test_client.com
            [first_name] => 
            [gender] => 
            [gravatar] => 
            [has_android_app] => 
            [has_chrome_extension] => 
            [has_ios_app] => 
            [id] => 93294
            [primary_outcome_variable_id] => 
            [provider_id] => test-user-for-sdk-analyze-test1655149665
            [push_notifications_enabled] => 
            [reg_provider] => oauth_test_client
            [roles] => Array
                (
                )

            [send_predictor_emails] => 
            [send_reminder_notification_emails] => 
            [sent_emails_count] => 
            [share_all_data] => 
            [slug] => 
            [state] => 
            [tag_line] => 
            [time_zone_offset] => 
            [timezone] => 
            [track_location] => 
            [tracking_reminder_notifications_count] => 
            [tracking_reminders_count] => 
            [unsubscribed] => 1
            [updated_at] => 2022-06-13T19:47:46.000000Z
            [user_error_message] => 
            [user_login] => oauth_test_client-test-user-for-sdk-analyze-test1655149665
            [user_url] => 
            [verified] => 
            [zip_code] => 
            [access_token] => stdClass Object
                (
                    [access_token] => token-you-can-use-in-your-front-end-for-other-endpoints
                    [client_id] => oauth_test_client
                    [created_at] => 2022-06-13 19:47:56
                    [expires] => 2022-08-12 19:47:56
                    [updated_at] => 2022-06-13 19:47:56
                    [user_id] => 93294
                )

            [refresh_token] => stdClass Object
                (
                    [client_id] => oauth_test_client
                    [created_at] => 2022-06-13 19:47:56
                    [expires] => 2022-08-12 19:47:56
                    [updated_at] => 2022-06-13 19:47:56
                    [user_id] => 93294
                )

        )

)

```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```



## Documentation for API Endpoints

All URIs are relative to *https://v7.curedao.org/api*
| Class               | Method                                                                                              | HTTP request                                      | Description                                                                     |
|---------------------|-----------------------------------------------------------------------------------------------------|---------------------------------------------------|---------------------------------------------------------------------------------|
|                     |                                                                                                     |                                                   |                                                                                 |
| *AnalyticsApi*      | [**getCorrelationExplanations**](docs/Api/AnalyticsApi.md#getcorrelationexplanations)               | **GET** /v3/correlations/explanations             | Get correlation explanations                                                    |
| *AnalyticsApi*      | [**getCorrelations**](docs/Api/AnalyticsApi.md#getcorrelations)                                     | **GET** /v3/correlations                          | Get correlations                                                                |
| *AppSettingsApi*    | [**getAppSettings**](docs/Api/AppSettingsApi.md#getappsettings)                                     | **GET** /v3/appSettings                           | Get client app settings                                                         |
| *AuthenticationApi* | [**getAccessToken**](docs/Api/AuthenticationApi.md#getaccesstoken)                                  | **GET** /v3/oauth2/token                          | Get a user access token                                                         |
| *AuthenticationApi* | [**getOauthAuthorizationCode**](docs/Api/AuthenticationApi.md#getoauthauthorizationcode)            | **GET** /v3/oauth2/authorize                      | Request Authorization Code                                                      |
| *AuthenticationApi* | [**postGoogleIdToken**](docs/Api/AuthenticationApi.md#postgoogleidtoken)                            | **POST** /v3/googleIdToken                        | Post GoogleIdToken                                                              |
| *ConnectorsApi*     | [**connectConnector**](docs/Api/ConnectorsApi.md#connectconnector)                                  | **GET** /v3/connectors/{connectorName}/connect    | Obtain a token from 3rd party data source                                       |
| *ConnectorsApi*     | [**disconnectConnector**](docs/Api/ConnectorsApi.md#disconnectconnector)                            | **GET** /v3/connectors/{connectorName}/disconnect | Delete stored connection info                                                   |
| *ConnectorsApi*     | [**getConnectors**](docs/Api/ConnectorsApi.md#getconnectors)                                        | **GET** /v3/connectors/list                       | List of Connectors                                                              |
| *ConnectorsApi*     | [**getIntegrationJs**](docs/Api/ConnectorsApi.md#getintegrationjs)                                  | **GET** /v3/integration.js                        | Get embeddable connect javascript                                               |
| *ConnectorsApi*     | [**getMobileConnectPage**](docs/Api/ConnectorsApi.md#getmobileconnectpage)                          | **GET** /v3/connect/mobile                        | Mobile connect page                                                             |
| *ConnectorsApi*     | [**updateConnector**](docs/Api/ConnectorsApi.md#updateconnector)                                    | **GET** /v3/connectors/{connectorName}/update     | Sync with data source                                                           |
| *FeedApi*           | [**getFeed**](docs/Api/FeedApi.md#getfeed)                                                          | **GET** /v3/feed                                  | Tracking reminder notifications, messages, and study results                    |
| *FeedApi*           | [**postFeed**](docs/Api/FeedApi.md#postfeed)                                                        | **POST** /v3/feed                                 | Post user interactions with feed                                                |
| *MeasurementsApi*   | [**deleteMeasurement**](docs/Api/MeasurementsApi.md#deletemeasurement)                              | **DELETE** /v3/measurements/delete                | Delete a measurement                                                            |
| *MeasurementsApi*   | [**getMeasurements**](docs/Api/MeasurementsApi.md#getmeasurements)                                  | **GET** /v3/measurements                          | Get measurements for this user                                                  |
| *MeasurementsApi*   | [**getPairs**](docs/Api/MeasurementsApi.md#getpairs)                                                | **GET** /v3/pairs                                 | Get pairs of measurements for correlational analysis                            |
| *MeasurementsApi*   | [**measurementExportRequest**](docs/Api/MeasurementsApi.md#measurementexportrequest)                | **POST** /v2/measurements/exportRequest           | Post Request for Measurements CSV                                               |
| *MeasurementsApi*   | [**postMeasurements**](docs/Api/MeasurementsApi.md#postmeasurements)                                | **POST** /v3/measurements/post                    | Post a new set or update existing measurements to the database                  |
| *MeasurementsApi*   | [**updateMeasurement**](docs/Api/MeasurementsApi.md#updatemeasurement)                              | **POST** /v3/measurements/update                  | Update a measurement                                                            |
|                     |                                                                                                     |                                                   |                                                                                 |
| *NotificationsApi*  | [**getNotificationPreferences**](docs/Api/NotificationsApi.md#getnotificationpreferences)           | **GET** /v3/notificationPreferences               | Get NotificationPreferences                                                     |
| *NotificationsApi*  | [**getNotifications**](docs/Api/NotificationsApi.md#getnotifications)                               | **GET** /v3/notifications                         | Get Notifications                                                               |
| *NotificationsApi*  | [**postDeviceToken**](docs/Api/NotificationsApi.md#postdevicetoken)                                 | **POST** /v3/deviceTokens                         | Post DeviceTokens                                                               |
| *NotificationsApi*  | [**postNotifications**](docs/Api/NotificationsApi.md#postnotifications)                             | **POST** /v3/notifications                        | Post Notifications                                                              |
| *RemindersApi*      | [**deleteTrackingReminder**](docs/Api/RemindersApi.md#deletetrackingreminder)                       | **DELETE** /v3/trackingReminders/delete           | Delete Tracking Reminder                                                        |
| *RemindersApi*      | [**getTrackingReminderNotifications**](docs/Api/RemindersApi.md#gettrackingremindernotifications)   | **GET** /v3/trackingReminderNotifications         | Get specific tracking reminder notifications                                    |
| *RemindersApi*      | [**getTrackingReminders**](docs/Api/RemindersApi.md#gettrackingreminders)                           | **GET** /v3/trackingReminders                     | Get repeating tracking reminder settings                                        |
| *RemindersApi*      | [**postTrackingReminderNotifications**](docs/Api/RemindersApi.md#posttrackingremindernotifications) | **POST** /v3/trackingReminderNotifications        | Snooze, skip, or track a tracking reminder notification                         |
| *RemindersApi*      | [**postTrackingReminders**](docs/Api/RemindersApi.md#posttrackingreminders)                         | **POST** /v3/trackingReminders                    | Store a Tracking Reminder                                                       |
| *SharesApi*         | [**deleteShare**](docs/Api/SharesApi.md#deleteshare)                                                | **POST** /v3/shares/delete                        | Delete share                                                                    |
| *SharesApi*         | [**getShares**](docs/Api/SharesApi.md#getshares)                                                    | **GET** /v3/shares                                | Get Authorized Apps, Studies, and Individuals                                   |
| *SharesApi*         | [**inviteShare**](docs/Api/SharesApi.md#inviteshare)                                                | **POST** /v3/shares/invite                        | Delete share                                                                    |
| *StudiesApi*        | [**createStudy**](docs/Api/StudiesApi.md#createstudy)                                               | **POST** /v3/study/create                         | Create a Study                                                                  |
| *StudiesApi*        | [**deleteVote**](docs/Api/StudiesApi.md#deletevote)                                                 | **DELETE** /v3/votes/delete                       | Delete vote                                                                     |
| *StudiesApi*        | [**getOpenStudies**](docs/Api/StudiesApi.md#getopenstudies)                                         | **GET** /v3/studies/open                          | These are open studies that anyone can join                                     |
| *StudiesApi*        | [**getStudies**](docs/Api/StudiesApi.md#getstudies)                                                 | **GET** /v3/studies                               | Get Personal or Population Studies                                              |
| *StudiesApi*        | [**getStudiesCreated**](docs/Api/StudiesApi.md#getstudiescreated)                                   | **GET** /v3/studies/created                       | Get studies you have created                                                    |
| *StudiesApi*        | [**getStudiesJoined**](docs/Api/StudiesApi.md#getstudiesjoined)                                     | **GET** /v3/studies/joined                        | Studies You Have Joined                                                         |
| *StudiesApi*        | [**getStudy**](docs/Api/StudiesApi.md#getstudy)                                                     | **GET** /v4/study                                 | Get Study                                                                       |
| *StudiesApi*        | [**joinStudy**](docs/Api/StudiesApi.md#joinstudy)                                                   | **POST** /v3/study/join                           | Join a Study                                                                    |
| *StudiesApi*        | [**postVote**](docs/Api/StudiesApi.md#postvote)                                                     | **POST** /v3/votes                                | Post or update vote                                                             |
| *StudiesApi*        | [**publishStudy**](docs/Api/StudiesApi.md#publishstudy)                                             | **POST** /v3/study/publish                        | Publish Your Study                                                              |
| *UnitsApi*          | [**getUnitCategories**](docs/Api/UnitsApi.md#getunitcategories)                                     | **GET** /v3/unitCategories                        | Get unit categories                                                             |
| *UnitsApi*          | [**getUnits**](docs/Api/UnitsApi.md#getunits)                                                       | **GET** /v3/units                                 | Get units                                                                       |
| *UserApi*           | [**deleteUser**](docs/Api/UserApi.md#deleteuser)                                                    | **DELETE** /v3/user/delete                        | Delete user                                                                     |
| *UserApi*           | [**getUser**](docs/Api/UserApi.md#getuser)                                                          | **GET** /v3/user                                  | Get user info                                                                   |
| *UserApi*           | [**getUserBlogs**](docs/Api/UserApi.md#getuserblogs)                                                | **GET** /v3/userBlogs                             | Get UserBlogs                                                                   |
| *UserApi*           | [**postUserBlogs**](docs/Api/UserApi.md#postuserblogs)                                              | **POST** /v3/userBlogs                            | Post UserBlogs                                                                  |
| *UserApi*           | [**postUserSettings**](docs/Api/UserApi.md#postusersettings)                                        | **POST** /v3/userSettings                         | Post UserSettings                                                               |
| *VariablesApi*      | [**deleteUserTag**](docs/Api/VariablesApi.md#deleteusertag)                                         | **DELETE** /v3/userTags/delete                    | Delete user tag or ingredient                                                   |
| *VariablesApi*      | [**deleteUserVariable**](docs/Api/VariablesApi.md#deleteuservariable)                               | **DELETE** /v3/userVariables/delete               | Delete All Measurements For Variable                                            |
| *VariablesApi*      | [**getVariableCategories**](docs/Api/VariablesApi.md#getvariablecategories)                         | **GET** /v3/variableCategories                    | Variable categories                                                             |
| *VariablesApi*      | [**getVariables**](docs/Api/VariablesApi.md#getvariables)                                           | **GET** /v3/variables                             | Get variables along with related user-specific analysis settings and statistics |
| *VariablesApi*      | [**postUserTags**](docs/Api/VariablesApi.md#postusertags)                                           | **POST** /v3/userTags                             | Post or update user tags or ingredients                                         |
| *VariablesApi*      | [**postUserVariables**](docs/Api/VariablesApi.md#postuservariables)                                 | **POST** /v3/variables                            | Update User Settings for a Variable                                             |
| *VariablesApi*      | [**resetUserVariableSettings**](docs/Api/VariablesApi.md#resetuservariablesettings)                 | **POST** /v3/userVariables/reset                  | Reset user settings for a variable to defaults                                  |
|                     |                                                                                                     |                                                   |                                                                                 |

## Documentation For Models

- [ActivitiesResponse](docs/Model/ActivitiesResponse.md)
- [Activity](docs/Model/Activity.md)
- [AppSettings](docs/Model/AppSettings.md)
- [AppSettingsResponse](docs/Model/AppSettingsResponse.md)
- [AuthorizedClients](docs/Model/AuthorizedClients.md)
- [Button](docs/Model/Button.md)
- [Card](docs/Model/Card.md)
- [Chart](docs/Model/Chart.md)
- [CommonResponse](docs/Model/CommonResponse.md)
- [ConnectInstructions](docs/Model/ConnectInstructions.md)
- [ConversionStep](docs/Model/ConversionStep.md)
- [Correlation](docs/Model/Correlation.md)
- [DataSource](docs/Model/DataSource.md)
- [DeviceToken](docs/Model/DeviceToken.md)
- [Explanation](docs/Model/Explanation.md)
- [ExplanationStartTracking](docs/Model/ExplanationStartTracking.md)
- [FeedResponse](docs/Model/FeedResponse.md)
- [GetConnectorsResponse](docs/Model/GetConnectorsResponse.md)
- [GetCorrelationsDataResponse](docs/Model/GetCorrelationsDataResponse.md)
- [GetCorrelationsResponse](docs/Model/GetCorrelationsResponse.md)
- [GetSharesResponse](docs/Model/GetSharesResponse.md)
- [GetStudiesResponse](docs/Model/GetStudiesResponse.md)
- [GetTrackingReminderNotificationsResponse](docs/Model/GetTrackingReminderNotificationsResponse.md)
- [Group](docs/Model/Group.md)
- [GroupsMember](docs/Model/GroupsMember.md)
- [GroupsMembersResponse](docs/Model/GroupsMembersResponse.md)
- [GroupsResponse](docs/Model/GroupsResponse.md)
- [Image](docs/Model/Image.md)
- [InputField](docs/Model/InputField.md)
- [JsonErrorResponse](docs/Model/JsonErrorResponse.md)
- [Measurement](docs/Model/Measurement.md)
- [MeasurementDelete](docs/Model/MeasurementDelete.md)
- [MeasurementItem](docs/Model/MeasurementItem.md)
- [MeasurementSet](docs/Model/MeasurementSet.md)
- [MeasurementUpdate](docs/Model/MeasurementUpdate.md)
- [Notification](docs/Model/Notification.md)
- [NotificationsResponse](docs/Model/NotificationsResponse.md)
- [Pair](docs/Model/Pair.md)
- [ParticipantInstruction](docs/Model/ParticipantInstruction.md)
- [PostMeasurementsDataResponse](docs/Model/PostMeasurementsDataResponse.md)
- [PostMeasurementsResponse](docs/Model/PostMeasurementsResponse.md)
- [PostStudyCreateResponse](docs/Model/PostStudyCreateResponse.md)
- [PostStudyPublishResponse](docs/Model/PostStudyPublishResponse.md)
- [PostTrackingRemindersDataResponse](docs/Model/PostTrackingRemindersDataResponse.md)
- [PostTrackingRemindersResponse](docs/Model/PostTrackingRemindersResponse.md)
- [PostUserSettingsDataResponse](docs/Model/PostUserSettingsDataResponse.md)
- [PostUserSettingsResponse](docs/Model/PostUserSettingsResponse.md)
- [ShareInvitationBody](docs/Model/ShareInvitationBody.md)
- [Study](docs/Model/Study.md)
- [StudyCharts](docs/Model/StudyCharts.md)
- [StudyCreationBody](docs/Model/StudyCreationBody.md)
- [StudyHtml](docs/Model/StudyHtml.md)
- [StudyImages](docs/Model/StudyImages.md)
- [StudyJoinResponse](docs/Model/StudyJoinResponse.md)
- [StudyLinks](docs/Model/StudyLinks.md)
- [StudySharing](docs/Model/StudySharing.md)
- [StudyText](docs/Model/StudyText.md)
- [StudyVotes](docs/Model/StudyVotes.md)
- [TrackingReminder](docs/Model/TrackingReminder.md)
- [TrackingReminderDelete](docs/Model/TrackingReminderDelete.md)
- [TrackingReminderNotification](docs/Model/TrackingReminderNotification.md)
- [TrackingReminderNotificationAction](docs/Model/TrackingReminderNotificationAction.md)
- [TrackingReminderNotificationPost](docs/Model/TrackingReminderNotificationPost.md)
- [TrackingReminderNotificationTrackAllAction](docs/Model/TrackingReminderNotificationTrackAllAction.md)
- [Unit](docs/Model/Unit.md)
- [UnitCategory](docs/Model/UnitCategory.md)
- [User](docs/Model/User.md)
- [UserBlog](docs/Model/UserBlog.md)
- [UserBlogsResponse](docs/Model/UserBlogsResponse.md)
- [UserTag](docs/Model/UserTag.md)
- [UserVariableDelete](docs/Model/UserVariableDelete.md)
- [Variable](docs/Model/Variable.md)
- [VariableCategory](docs/Model/VariableCategory.md)
- [VariableCharts](docs/Model/VariableCharts.md)
- [Vote](docs/Model/Vote.md)
- [VoteDelete](docs/Model/VoteDelete.md)

## Documentation For Authorization

## access_token

- **Type**: API key
- **API key parameter name**: access_token
- **Location**: URL query string

## client_id

- **Type**: API key
- **API key parameter name**: clientId
- **Location**: URL query string

## curedao_oauth2

- **Type**: OAuth
- **Flow**: accessCode
- **Authorization URL**: https://v7.curedao.org/api/v2/oauth/authorize
- **Scopes**:
- **basic**: Allows you to read user info (display name, email, etc)
- **readmeasurements**: Allows one to read a user's measurements
- **writemeasurements**: Allows you to write user measurements

## Author
