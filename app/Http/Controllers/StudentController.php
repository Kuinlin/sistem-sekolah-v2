<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return "Displaying the list of students";
    }

    public function create()
    {
        return "Displaying the form to create a new student";
    }

    public function store(Request $request)
    {
        return "Storing a new student";
    }

    public function show($id)
    {
        return "Displaying student with ID: {$id}";
    }

    public function edit($id)
    {
        return "Displaying the form to edit student with ID: {$id}";
    }

    public function update(Request $request, $id)
    {
        return "Updating student with ID: {$id}";
    }

    public function destroy($id)
    {
        return "Deleting student with ID: {$id}";
    }
}