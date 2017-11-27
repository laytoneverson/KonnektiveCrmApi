<?php

namespace LE\KonnektiveCrmApi\DTO;
use function call_user_func;
use function get_class;
use function get_class_methods;
use function lcfirst;
use ReflectionClass;
use ReflectionMethod;
use function substr;

/**
 * Interface KonnektiveDTOInterface
 */
abstract class AbstractKonnektiveDto
{
    /**
     * AbstractKonnektiveDto constructor.
     * @param array $data
     */
    public function __construct($data = [])
    {
        foreach ($data as $k => $v) {
            $setter = "set" . \ucfirst($k);
            $callableFunc = [$this, $setter];

            if (\is_callable($callableFunc)) {
                $callableFunc($v);
            }
        }
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $reflectedClass = new ReflectionClass($this);
        $methods = $reflectedClass->getMethods();
        /**
         * Gets all values from "getter" functions and loads them in an assoc array.
         *
         * @var $method ReflectionMethod
         */
        $ret = [];
        foreach ($methods as $method) {
            if (0 === strpos($method->name, "get")) {
                if (!empty($d = $this->{$method->name}())) {
                    $ret[lcfirst(substr($method->name,3))] = $d;
                }

            }
            if (0 === strpos($method->name, "is")) {
                if (!empty($d = $this->{$method->name}() )) {
                    $ret[lcfirst(substr($method->name,2))] = $d;
                }
            }
        }

        return $ret;
    }
}
