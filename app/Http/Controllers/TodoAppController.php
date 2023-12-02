<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TodoAppController extends Controller
{
    protected $validationRules = [
        "content" => "required|max:5",
    ];

    protected $customErrorMessages = [
        "content.required" => "To pole jest wymagane",
        "content.max" => "Maksymalnie 5 znaków",
    ];

    public function index()
    {
        return view('todoapp.index')->with("tasks", Task::all());
    }

    public function store(Request $request)
    {
//        Log::info($request);

        $validatedData = $request->validate($this->validationRules, $this->customErrorMessages);

        Task::create($validatedData);

        return redirect()->route('todoapp.index');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('todoapp.index');
    }

    public function update(Task $task, Request $request)
    {
        $validatedData = $request->validate($this->validationRules, $this->customErrorMessages);

        $task->update($validatedData);

        return redirect()->route('todoapp.index');
    }

    public function complete(Task $task, Request $request)
    {
//        Log::info($request->all());
        $task->update($request->all());

        return redirect()->route('todoapp.index');
    }


}
