<?php
/**
 * Created by PhpStorm.
 * User: abk
 * Date: 1/23/20
 * Time: 9:26 PM
 */

namespace App\Domain\Contracts;


interface ProcessFactoryContract
{
    /**
     * @param string $processClassName
     *
     * @return ProcessContract
     */
    public function make(string $processClassName): ProcessContract;
}