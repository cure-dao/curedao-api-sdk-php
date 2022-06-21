<?php

namespace CureDAO\Client\Responses;

class BaseResponse
{
    public function __construct($data = [])
    {
        foreach ($data as $key => $value){
            $this->$key = $value;
        }
    }

}
