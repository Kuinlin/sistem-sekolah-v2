<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;

class DestroyController extends Controller
{
    public function __invoke(string $id)
    {
        return "Deleting class with ID: {$id}";
    }
}