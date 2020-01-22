<?php
/**
 * Created by PhpStorm.
 * User: abk
 * Date: 1/22/20
 * Time: 9:26 PM
 */

namespace App\Domain\Common;


use App\Domain\Contracts\CommandFactoryContract;
use App\Domain\Contracts\ContextContract;
use App\Domain\Contracts\HandlerContract;
use Illuminate\Http\Request;

abstract class BaseHandler implements HandlerContract
{
    /** @var Request $request */
    protected $request;

    /**
     * @param Request $request
     * @return $this
     */
    public function setRequest(Request $request)
    {
        $this->request = $request;

        return $this;
    }

    public function getCommandFactory(): CommandFactoryContract
    {
        return app()->make(CommandFactoryContract::class);
    }

    abstract public function handle(): ContextContract;
}