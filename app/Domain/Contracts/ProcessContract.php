<?php
/**
 * Created by PhpStorm.
 * User: abk
 * Date: 1/22/20
 * Time: 10:48 PM
 */

namespace App\Domain\Contracts;


interface ProcessContract
{
    /**
     * @param ContextContract $context
     *
     * @return ContextContract
     */
    public function run(ContextContract $context): ContextContract;
}