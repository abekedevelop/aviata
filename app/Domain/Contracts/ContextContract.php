<?php
/**
 * Created by PhpStorm.
 * User: abk
 * Date: 1/22/20
 * Time: 8:55 PM
 */

namespace App\Domain\Contracts;


interface ContextContract
{
    public function get(string $key, $default = null);

    public function toArray(): array;

    public function has(string $key);

    public function put(string $key, $value);
}