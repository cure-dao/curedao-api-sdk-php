<?php

namespace CureDAO\Client\Responses;
use ICanBoogie\Inflector;
use ReflectionClass;

class BaseResponse
{
    public function __construct($data = []){
        /** @noinspection DuplicatedCode */
        $inflector = Inflector::get(Inflector::DEFAULT_LOCALE);
        if($data){
            foreach ($data as $key => $value) {
                $key = $inflector->camelize($key, true);
                $this->$key = $value;
            }
        } else {
            $reflector = new ReflectionClass(static::class);
            $constants = $reflector->getConstants();
            foreach ($constants as $key => $value) {
                $key = $inflector->camelize($key, true);
                if (property_exists(static::class, $key)) {
                    $this->$key = $value;
                }
            }
        }
    }

}
