<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return "Displaying the list of classes";
    }
}