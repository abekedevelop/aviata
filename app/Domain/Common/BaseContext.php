<?php
/**
 * Created by PhpStorm.
 * User: abk
 * Date: 1/22/20
 * Time: 8:58 PM
 */

namespace App\Domain\Common;


use App\Domain\Contracts\ContextContract;

abstract class BaseContext implements ContextContract
{
    /**
     * @param string $key
     * @param null $default
     * @return null
     */
    public function get(string $key, $default = null)
    {
        return $this->toArray()[ $key ] ?? $default;
    }


    /**
     * @param $key
     * @param $value
     */
    abstract public function put(string $key, $value);

    /**
     * @return array
     */
    abstract public function toArray(): array;

    /**
     * @param $key
     * @return bool
     */
    abstract public function has($key): bool;
}