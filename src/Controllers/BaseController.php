<?php

namespace Exadra37\PackageSkeleton\Controllers;

use App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exadra37\PackageSkeleton\Interfaces\Controllers\BaseControllerInterface;

class BaseController extends Controller implements BaseControllerInterface
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function handle($class)
    {
        $class = str_replace('Controller', 'Handler', $class);

        $interface = "{$class}Interface";

        $handler = App::make($class);

        $handler = $handler->handle();

        $result = [];

        $result[] = __METHOD__;

        $result[] = $handler;

        return $result;
    }
}
