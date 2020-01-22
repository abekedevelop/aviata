<?php
/**
 * Created by PhpStorm.
 * User: abk
 * Date: 1/22/20
 * Time: 9:25 PM
 */

namespace App\Domain\Contracts;


interface HandlerContract
{
    public function handle(): ContextContract;
}