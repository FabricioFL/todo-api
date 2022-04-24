<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class todoController extends Controller
{
    

    public function getTodos()
    {
        return Todo::all();
    }


    public function createTodo(Request $request)
    {
        $payload = [
            'title' => $request->input('title'),
            'descrition' => $request->input('description')
        ];
        
        Todo::create($payload);
    }


    public function updateTodo(Request $request)
    {
        $payload = [
            'title' => $request->input('title'),
            'new_title' => $request->input('new_title'),
            'new_descrition' => $request->input('new_description'),
            'new_is_done' => $request->input('new_is_done')
        ];
    }


    public function deleteTodo(Request $request)
    {
        $payload = [
            'title' => $request->input('title')
        ];
    }


}
