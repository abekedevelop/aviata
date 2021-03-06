<?php
/**
 * Created by PhpStorm.
 * User: abk
 * Date: 1/22/20
 * Time: 9:30 PM
 */

namespace App\Domain\Contracts;


interface CommandContract
{
    /**
     * @param ContextContract $context
     *
     * @return ContextContract
     */
    public function handle(ContextContract $context): ContextContract;
}
