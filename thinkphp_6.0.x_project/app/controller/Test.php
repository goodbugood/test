<?php declare(strict_types=1);

namespace app\controller;

use app\BaseController;
use app\Request;

class Test extends BaseController
{
    public function index(Request $request)
    {
        return $request->controller();
    }
}

