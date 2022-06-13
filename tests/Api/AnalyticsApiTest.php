<?php

namespace CureDAO\Tests\Api;

use CureDAO\Client\Analysis;
use CureDAO\Client\Model\MeasurementSet;
use CureDAO\Client\Variables\PhysicalActivityCommonVariables\DailyStepCountCommonVariable;
use CureDAO\Client\Variables\VitalSignsCommonVariables\HeartRateVariabilityVariable;
use PHPUnit\Framework\TestCase;

class AnalyticsApiTest extends TestCase
{

    public function testAnalyze()
    {
        $predictorMeasurementSet = (new MeasurementSet())
            ->setVariable(new DailyStepCountCommonVariable())
            ->addMeasurements(array (
            0 =>
                array (
                    'start_at' => '2022-05-7',
                    'value' => 8472,
                ),
            1 =>
                array (
                    'start_at' => '2022-05-8',
                    'value' => 3402,
                ),
            2 =>
                array (
                    'start_at' => '2022-05-9',
                    'value' => 3930,
                ),
            3 =>
                array (
                    'start_at' => '2022-05-10',
                    'value' => 9909,
                ),
            4 =>
                array (
                    'start_at' => '2022-05-11',
                    'value' => 4943,
                ),
            5 =>
                array (
                    'start_at' => '2022-05-12',
                    'value' => 9012,
                ),
            6 =>
                array (
                    'start_at' => '2022-05-13',
                    'value' => 1122,
                ),
        ));

        $outcomeMeasurementSet = (new MeasurementSet())
            ->setVariable(new HeartRateVariabilityVariable())
            ->addMeasurements([
            '0' =>
                [
                    'start_at' => '2022-05-7',
                    'value' => 8472,
                ],
            '1' =>
                [
                    'start_at' => '2022-05-8',
                    'value' => 3402,
                ],
            '2' =>
                [
                    'start_at' => '2022-05-9',
                    'value' => 3930,
                ],
            '3' =>
                [
                    'start_at' => '2022-05-10',
                    'value' => 9909,
                ],
            '4' =>
                [
                    'start_at' => '2022-05-11',
                    'value' => 4943,
                ],
            '5' =>
                [
                    'start_at' => '2022-05-12',
                    'value' => 9012,
                ],
            '6' =>
                [
                    'start_at' => '2022-05-13',
                    'value' => 1122,
                ],
        ]);

        $yourUserId = "test-user-for-sdk-analyze-test".time();
        $analysis = new Analysis($yourUserId, $predictorMeasurementSet, $outcomeMeasurementSet);
        $results = $analysis->analyze();
        $this->assertNotNull($results['analysis']);
        $this->assertStringContainsString(DailyStepCountCommonVariable::NAME,
            $results['html'], 'study-html');
        $this->assertStringContainsString(HeartRateVariabilityVariable::NAME,
            $results['html'], 'study-html');
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
