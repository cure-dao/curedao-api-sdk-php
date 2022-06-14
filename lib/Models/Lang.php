<?php

namespace CureDAO\Client\Models;

class Lang
{
    /**
     * @var string
     */
    private $loading;


    /**
     * @return string|null
     */
    public function getLoading(): ?string
    {
        return $this->loading;
    }

    /**
     * @param string|null $loading
     *
     * @return Lang
     */
    public function setLoading(?string $loading): Lang
    {
        $this->loading = $loading;
        
        return $this;
    }
}

