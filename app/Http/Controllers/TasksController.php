<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TasksController extends Controller
{
    public function index()
    {
    	return view('tasks.index');
    }

    public function store()
    {
    	return redirect('/');
    }

    public function update($task)
    {
    	return redirect('/');
    }

    public function destroy($task)
    {
    	return redirect('/');
    }
}
