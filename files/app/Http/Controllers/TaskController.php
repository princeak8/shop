<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class TaskController extends Controller
{

	public function index()
	{
	    $tasks = Task::all();

	    return view('welcome', compact('tasks'));
	}

	public function show(Task $task)
	{
		//$task = Task::find($task);

    	return view('tasks.show', compact('task'));
	}
}
