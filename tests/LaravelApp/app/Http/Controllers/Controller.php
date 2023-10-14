<?php

namespace App\Http\Controllers;

use QuantaForge\Foundation\Auth\Access\AuthorizesRequests;
use QuantaForge\Foundation\Validation\ValidatesRequests;
use QuantaForge\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
