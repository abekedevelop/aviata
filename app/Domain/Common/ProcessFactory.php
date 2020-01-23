<?php
/**
 * @noinspection MethodShouldBeFinalInspection
 */
namespace App\Domain\Common;

use App\Domain\Contracts\ProcessContract;
use App\Domain\Contracts\ProcessFactoryContract;
use App\Domain\Exceptions\FactoryException;
use Illuminate\Contracts\Foundation\Application;

/**
 * Class ProcessFactory
 *
 * @package App\Domain\Common
 */
class ProcessFactory implements ProcessFactoryContract
{
    /**
     * @var Application
     */
    private $app;

    /**
     * ProcessFactory constructor.
     *
     * @param $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    /**
     * @param string $processClassName
     *
     * @return ProcessContract
     */
    public function make(string $processClassName): ProcessContract
    {
        if (class_exists($processClassName)) {
            $process = $this->app->make($processClassName);
            if ($process instanceof ProcessContract) {
                return $process;
            }

            throw new FactoryException(
                sprintf(
                    'created process (%s) should implement (%s) contract',
                    $processClassName,
                    ProcessContract::class
                )
            );
        }

        throw new FactoryException(sprintf('can\'t create process: %s', $processClassName));
    }


}