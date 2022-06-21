<?php

namespace CureDAO\Tests\Api;

use CureDAO\Client\Analysis;
use CureDAO\Client\Models\MeasurementSet;
use CureDAO\Client\Units\MilligramsUnit;
use CureDAO\Client\Units\OneToFiveRatingUnit;
use CureDAO\Client\VariableCategories\SymptomsVariableCategory;
use CureDAO\Client\VariableCategories\TreatmentsVariableCategory;
use CureDAO\Client\Variables\PhysicalActivityVariables\DailyStepCountVariable;
use CureDAO\Client\Variables\VitalSignsVariables\HeartRateVariabilityVariable;

class AnalyticsApiTest extends \CureDAO\Tests\BaseTestCase
{

    public function testAnalyze()
    {
        $predictorMeasurementSet = (new MeasurementSet())
            ->setVariable(new DailyStepCountVariable())
            ->addMeasurements([
                [
                    'start_at' => '2022-05-7',
                    'value' => 8472,
                ],
                [
                    'start_at' => '2022-05-8',
                    'value' => 3402,
                ],
                [
                    'start_at' => '2022-05-9',
                    'value' => 3930,
                ],
                [
                    'start_at' => '2022-05-10',
                    'value' => 9909,
                ],
                [
                    'start_at' => '2022-05-11',
                    'value' => 4943,
                ],
                [
                    'start_at' => '2022-05-12',
                    'value' => 9012,
                ],
                [
                    'start_at' => '2022-05-13',
                    'value' => 1122,
                ],
            ]);

        $outcomeMeasurementSet = (new MeasurementSet())
            ->setVariable(new HeartRateVariabilityVariable())
            ->addMeasurements([
                [
                    'start_at' => '2022-05-7',
                    'value' => 8472,
                ],
                [
                    'start_at' => '2022-05-8',
                    'value' => 3402,
                ],
                [
                    'start_at' => '2022-05-9',
                    'value' => 3930,
                ],
                [
                    'start_at' => '2022-05-10',
                    'value' => 9909,
                ],
                [
                    'start_at' => '2022-05-11',
                    'value' => 4943,
                ],
                [
                    'start_at' => '2022-05-12',
                    'value' => 9012,
                ],
                [
                    'start_at' => '2022-05-13',
                    'value' => 1122,
                ],
        ]);

        $yourUserId = "test-user-for-sdk-analyze-test".time();
        $analysis = new Analysis($yourUserId, $predictorMeasurementSet, $outcomeMeasurementSet);
        $results = $analysis->analyze();

        $this->generateModels(ucfirst(__FUNCTION__)."Response", $results);
        $this->assertNotNull($results->analysis);
        $this->assertStringContainsString(DailyStepCountVariable::NAME,
            $results->html, 'study-html');
        $this->assertStringContainsString(HeartRateVariabilityVariable::NAME,
            $results->html, 'study-html');
    }
    public function testAnalyzeWithNewVariables()
    {
        $treatments_variable_name = 'Treatments Test Variable';
        $predictorMeasurementSet = (new MeasurementSet())
            ->setVariableName($treatments_variable_name)
            ->setUnitName(MilligramsUnit::NAME)
            ->setVariableCategoryName(TreatmentsVariableCategory::NAME)
            ->addMeasurements([
                    [
                        'start_at' => '2022-05-7',
                        'value' => 500,
                    ],
                    [
                        'start_at' => '2022-05-8',
                        'value' => 0,
                    ],
                    [
                        'start_at' => '2022-05-9',
                        'value' => 0,
                    ],
                    [
                        'start_at' => '2022-05-10',
                        'value' => 500,
                    ],
                    [
                        'start_at' => '2022-05-11',
                        'value' => 500,
                    ],
                    [
                        'start_at' => '2022-05-12',
                        'value' => 0,
                    ],
                    [
                        'start_at' => '2022-05-13',
                        'value' => 0,
                    ],
            ]);

        $symptoms_variable_name = 'Symptoms Test Variable';
        $outcomeMeasurementSet = (new MeasurementSet())
            ->setVariableName($symptoms_variable_name)
            ->setUnitName(OneToFiveRatingUnit::NAME)
            ->setVariableCategoryName(SymptomsVariableCategory::NAME)
            ->addMeasurements([
                [
                    'start_at' => '2022-05-7',
                    'value' => 3,
                ],
                [
                    'start_at' => '2022-05-8',
                    'value' => 1,
                ],
                [
                    'start_at' => '2022-05-9',
                    'value' => 5,
                ],
                [
                    'start_at' => '2022-05-10',
                    'value' => 2,
                ],
                [
                    'start_at' => '2022-05-11',
                    'value' => 2,
                ],
                [
                    'start_at' => '2022-05-12',
                    'value' => 4,
                ],
                [
                    'start_at' => '2022-05-13',
                    'value' => 5,
                ],
            ]);

        $yourUserId = "test-user-for-sdk-analyze-test".time();
        $analysis = new Analysis($yourUserId, $predictorMeasurementSet, $outcomeMeasurementSet);
        $results = $analysis->analyze();

        $this->generateModels(ucfirst(__FUNCTION__)."Response", $results);
        $this->assertNotNull($results->analysis);
        $this->assertStringContainsString($treatments_variable_name,
            $results->html, 'study-html');
        $this->assertStringContainsString($symptoms_variable_name,
            $results->html, 'study-html');
    }
    /**
     * Test case for getCorrelationExplanations
     *
     * Get correlation explanations.
     *
     */
    public function testGetCorrelationExplanations()
    {
    }

    /**
     * Test case for getCorrelations
     *
     * Get correlations.
     *
     */
    public function testGetCorrelations()
    {
    }
}
