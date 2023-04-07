<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
 
}

