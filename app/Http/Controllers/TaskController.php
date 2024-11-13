<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() {
        return view('tasks.view');
    }

    public function create() {
        return view('tasks.create');
    }

    public function edit() {
        return view('tasks.edit');
    }

    public function delete() {
        //deleta e retorna pra view home
        return redirect(route('home'));
    }
}
