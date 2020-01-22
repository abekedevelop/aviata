<?php
/**
 * Created by PhpStorm.
 * User: abk
 * Date: 1/22/20
 * Time: 9:03 PM
 */

namespace App\Domain\Common;


class CollectionContext extends BaseContext
{
    /**
     * @var \Illuminate\Support\Collection
     */
    private $items;

    public function  __construct()
    {
        $this->items = collect([]);
    }

    public function get(string $key, $default = null)
    {
        return $this->items->get($key);
    }

    public function put(string $key, $value)
    {
        $this->items->put($key, $value);
    }

    public function has($key): bool
    {
        return $this->items->has($key);
    }

    public function toArray(): array
    {
        return $this->items->toArray();
    }
}