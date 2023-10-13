<?php

namespace App\Http\Controllers;

use QuantaQuirk\Foundation\Auth\Access\AuthorizesRequests;
use QuantaQuirk\Foundation\Validation\ValidatesRequests;
use QuantaQuirk\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
