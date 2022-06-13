<?php

namespace CureDAO\Client;

use ICanBoogie\Inflector;
use Illuminate\Support\Collection;
use LogicException;
use ReflectionClass;

abstract class BaseModel
{
    public function __construct($data = []){
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

    /**
     * @param $array
     * @return static[]|Collection
     */
    protected static function instantiateArray($array): Collection{
        $objects = [];
        foreach ($array as $item) {
            $objects[] = new static($item);
        }
        return collect($objects)->keyBy('name');
    }
    public static function find($nameOrId): self {
        $all = static::all();
        foreach ($all as $unit){
            if ($unit->getName() == $nameOrId || $unit->getId() == $nameOrId){
                return $unit;
            }
        }
        throw new LogicException("Unit not found");
    }
    protected static function getClient(): HttpClient{
        return new HttpClient();
    }
}
