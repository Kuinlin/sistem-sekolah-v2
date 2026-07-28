<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;

class EditController extends Controller
{
    public function __invoke($id)
    {
        return "Displaying the form to edit class with ID: {$id}";
    }
}