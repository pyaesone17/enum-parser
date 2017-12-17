<?php
namespace App\Enums;

// Database enum column types can be problematic, see here for one article on this topic.
// http://komlenic.com/244/8-reasons-why-mysqls-enum-data-type-is-evil/
use ReflectionClass;

abstract class Enum
{

    static function getKeys(){
        $class = new ReflectionClass(get_called_class());
        return array_keys($class->getConstants());
    }

    static function getKeyOrThrow($key){
        $class = new ReflectionClass(get_called_class());
        $keys = array_keys($class->getConstants());
        
        if (in_array($key, $keys)) {
            return $key;
        } else {
            throw new EnumNotAllowedException();
        }
    }

    /**
     * It will return enum keys value as a Laravel Collection
     * 
     * @return Illuminate\Support\Collection 
     */
    static function getCollection(){
        $class = new ReflectionClass(get_called_class());
        return collect($class->getConstants());
    }
}
