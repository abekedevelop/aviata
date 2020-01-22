<?php
/**
 * Created by PhpStorm.
 * User: abk
 * Date: 1/22/20
 * Time: 9:38 PM
 */

namespace App\Domain\Common;


use App\Domain\Contracts\CommandContract;
use App\Domain\Contracts\CommandFactoryContract;
use App\Domain\Exceptions\FactoryException;
use Illuminate\Foundation\Application;

class CommandFactory implements CommandFactoryContract
{
    /** @var Application $app */
    private $app;

    /**
     * CommandFactory constructor.
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    /**
     * @param string $commandClassName
     * @return CommandContract
     */
    public function make(string $commandClassName): CommandContract
    {
        if (class_exists($commandClassName)) {
            $command = $this->app->make($commandClassName);
            if ($command instanceof CommandContract) {
                return $command;
            }
            throw new FactoryException(
                sprintf(
                    'created command (%s) should implement (%s) contract',
                    $commandClassName,
                    CommandContract::class
                )
            );

        }
        throw new FactoryException(sprintf('can\'t create command: %s', $commandClassName));
    }
}