<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TeacherController extends Controller
{
    public function index()
    {
        return "Displaying the list of teachers";
    }

    public function create()
    {
        return "Displaying the form to create a new teacher";
    }

    public function store(Request $request)
    {
        return "Storing a new teacher";
    }

    public function show($id)
    {
        return "Displaying teacher with ID: {$id}";
    }

    public function edit($id)
    {
        return "Displaying the form to edit teacher with ID: {$id}";
    }

    public function update(Request $request, $id)
    {
        return "Updating teacher with ID: {$id}";
    }

    public function destroy($id)
    {
        return "Deleting teacher with ID: {$id}";
    }
}