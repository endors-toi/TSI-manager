<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admins.index');
    }

    public function create()
    {
        // Acción "create"
    }

    public function edit($id)
    {
        // Acción "edit"
    }

    public function show($id)
    {
        // Acción "show"
    }

    public function store(Request $request)
    {
        // Acción "store"
    }

    public function update(Request $request, $id)
    {
        // Acción "update"
    }


    public function destroy($id)
    {
        // Acción "destroy"
    }
}
