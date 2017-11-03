<?php

namespace LE\KonnektiveCrmApi\DTO;

/**
 * Interface KonnektiveDTOInterface
 */
abstract class AbstractKonnektiveDto
{
    public function __construct($data = [])
    {
        foreach ($data as $k => $v) {
            $setter = "set" . \ucfirst($k);
            $callableFunc = [$this, $setter];

            if (\is_callable($callableFunc)) {
                \call_user_func($callableFunc, $v);
            }
        }
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $ret = [];
        foreach ($this as $k => $v) {
            $ret[$k] = \call_user_func([$this, "get" . \ucfirst($v)]);
        }
        return $ret;
    }
}
