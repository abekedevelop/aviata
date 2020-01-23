<?php


namespace App\Domain\Common;


use App\Domain\Contracts\ContextContract;
use App\Domain\Contracts\ProcessContract;

abstract class BaseProcessCommand extends BaseCommand
{
    /** @var array|string[] */
    protected $processes = [];

    /**
     * @var ProcessFactoryContract
     */
    protected $factory;

    public function __construct(ProcessFactoryContract $factory, array $process)
    {
        $this->factory = $factory;
        $this->processes = array_merge(
            $this->processes,
            $process
        );
    }

    public function handle(ContextContract $context): ContextContract
    {
        foreach ($this->processes as $process) {
            if (class_exists($process)) {
                $processInstance = $this->factory->make($process);
                if ($process instanceof ProcessContract) {
                    $context = $processInstance->run($context);
                    if (
                        $context instanceof BreakContextPartContract
                        && $context->hasBreak()
                    ) {
                        return $context;
                    }
                }
            }
        }
        return $context;
    }
}
