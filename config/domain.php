<?php
/**
 * Created by PhpStorm.
 * User: abk
 * Date: 1/22/20
 * Time: 9:37 PM
 */


use App\Domain\Common\CommandFactory;
use App\Domain\Common\ProcessFactory;

return [
    'command_factory' => CommandFactory::class,
    'process_factory' => ProcessFactory::class,
];