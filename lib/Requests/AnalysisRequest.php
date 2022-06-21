<?php
namespace CureDAO\Client\Requests;
use CureDAO\Client\Models\MeasurementSet;
use CureDAO\Client\Responses\AnalyzeResponse;

class AnalysisRequest extends HttpClient
{

    private $predictorMeasurementSet;
    private $outcomeMeasurementSet;
    private $yourUserId;
    private $response;

    /**
     * @param int|string $yourUserId
     * @param MeasurementSet $predictorMeasurementSet
     * @param MeasurementSet $outcomeMeasurementSet
     * @throws \Exception
     */
    public function __construct($yourUserId, MeasurementSet $predictorMeasurementSet, MeasurementSet $outcomeMeasurementSet)
    {
        $this->setYourUserId($yourUserId);
        $this->setPredictorMeasurementSet($predictorMeasurementSet);
        $this->setOutcomeMeasurementSet($outcomeMeasurementSet);
        parent::__construct();
    }

    public function analyze(): AnalyzeResponse{
        if($this->response){
            return $this->response;
        }
        $p = $this->getPredictorMeasurementSet();
        $o = $this->getOutcomeMeasurementSet();
        $data = $this->post('/api/v6/analyze', array (
            'predictor' => $p->toArray(),
            'outcome' => $o->toArray(),
            'your_user_id' => $this->getYourUserId(),
        ));
        return $this->getResponse();
    }

    /**
     * @return MeasurementSet
     */
    public function getPredictorMeasurementSet(): MeasurementSet
    {
        return $this->predictorMeasurementSet;
    }

    /**
     * @param MeasurementSet $predictorMeasurementSet
     */
    public function setPredictorMeasurementSet(MeasurementSet $predictorMeasurementSet)
    {
        $this->predictorMeasurementSet = $predictorMeasurementSet;
    }

    /**
     * @return MeasurementSet
     */
    public function getOutcomeMeasurementSet(): MeasurementSet
    {
        return $this->outcomeMeasurementSet;
    }

    /**
     * @param MeasurementSet $outcomeMeasurementSet
     */
    public function setOutcomeMeasurementSet(MeasurementSet $outcomeMeasurementSet)
    {
        $this->outcomeMeasurementSet = $outcomeMeasurementSet;
    }

    /**
     * @return string|int
     */
    public function getYourUserId()
    {
        return $this->yourUserId;
    }

    /**
     * @param string|int $yourUserId
     */
    public function setYourUserId($yourUserId): self
    {
        $this->yourUserId = $yourUserId;
        return $this;
    }

    public function getSlug()
    {
        $this->getResponse()->getAnalysis()->getSlug();
    }

    public function getResponse(): AnalyzeResponse
    {
        return new AnalyzeResponse($this->getData());
    }

}
