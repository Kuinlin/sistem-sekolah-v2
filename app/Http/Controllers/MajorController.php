<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function index()
    {
        return "Displaying the list of majors";
    }

    public function create()
    {
        return "Displaying the form to create a new major";
    }

    public function store(Request $request)
    {
        return "Storing a new major";
    }

    public function show(string $id)
    {
        return "Displaying major with ID: {$id}";
    }

    public function edit(string $id)
    {
        return "Displaying the form to edit major with ID: {$id}";
    }

    public function update(Request $request, string $id)
    {
        return "Updating major with ID: {$id}";
    }

    public function destroy(string $id)
    {
        return "Deleting major with ID: {$id}";
    }
}