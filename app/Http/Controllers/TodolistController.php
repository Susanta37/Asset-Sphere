<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
    public function index()
    {
        $tasks = Todolist::all();
        return view('admin.dashboard', compact('tasks'));
    }

    public function store(Request $request)
    {
        $request->validate(['task' => 'required|string|max:255']);
        Todolist::create(['task' => $request->task, 'completed' => false]);
        return redirect()->route('okcl.dashboard')->with('success', 'Task added successfully.');
    }

    public function update(Request $request, Todolist $todolist)
    {
        
        $todolist->update(['completed' => $request->has('completed')]);
        
        return redirect()->route('okcl.dashboard')->with('success', 'Task status updated successfully.');
    }

    public function destroy(Todolist $todolist)
    {
        $todolist->delete();
        return redirect()->route('okcl.dashboard')->with('success', 'Task deleted successfully.');
    }
}
