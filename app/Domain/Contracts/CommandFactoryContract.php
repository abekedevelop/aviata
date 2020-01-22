<?php
/**
 * Created by PhpStorm.
 * User: abk
 * Date: 1/22/20
 * Time: 9:28 PM
 */

namespace App\Domain\Contracts;


interface CommandFactoryContract
{
    /**
     * @param string $commandClassName
     * @return CommandContract
     */
    public function make(string $commandClassName): CommandContract;

}