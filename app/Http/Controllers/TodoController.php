<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function home(){
        $todos = Todo::orderBy('created_at', 'desc')->paginate(5);
        return view('todo.index', ["todos" => $todos]);
    }

    public function create(Request $request){

        $validated = $request->validate([
            'name' => 'required|string|max:20',
            'description' => 'required|string|min:10|max:1000',
        ]);

        Todo::create($validated);

        return redirect()->route('todo.index');
    }

    public function delete($id){

        $todo = Todo::findOrFail($id);
        $todo->delete();
        return redirect()->route('todo.index');
    }
}