<?php

namespace CureDAO\Client\Models;

class Series
{
    /**
     * @var array
     */
    public $data;

    /**
     * @var string
     */
    public $name;


    /**
     * @return array|null
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * @param array|null $data
     *
     * @return Series
     */
    public function setData(?array $data): Series
    {
        $this->data = $data;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     *
     * @return Series
     */
    public function setName(?string $name): Series
    {
        $this->name = $name;
        
        return $this;
    }
}

