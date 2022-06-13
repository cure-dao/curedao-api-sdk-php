<?php
namespace CureDAO\Client;
use CureDAO\Client\Model\MeasurementSet;

class Analysis extends HttpClient
{

    private $predictorMeasurementSet;
    private $outcomeMeasurementSet;
    private $yourUserId;
    public function __construct($yourUserId,  $predictorMeasurementSet, MeasurementSet $outcomeMeasurementSet)
    {
        $this->setYourUserId($yourUserId);
        $this->setPredictorMeasurementSet($predictorMeasurementSet);
        $this->setOutcomeMeasurementSet($outcomeMeasurementSet);
        parent::__construct();
    }

    public function analyze(){
        if($this->data){
            return $this->data;
        }
        $p = $this->getPredictorMeasurementSet();
        $o = $this->getOutcomeMeasurementSet();
        return $this->post('/api/v6/analyze', array (
            'predictor' => $p->toArray(),
            'outcome' => $o->toArray(),
            'your_user_id' => $this->getYourUserId(),
        ));
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

}
