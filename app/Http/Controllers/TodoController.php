<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    

    public function getTodos()
    {
        try
        {
            return Todo::all();
        }catch(Exception)
        {
            return ['alert' => 'something bad has occured!'];
        }
    }


    public function createTodo(Request $request)
    {
        $payload = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'is_done' => false
        ];
        
        if($payload['title'] != null && $payload['description'] != null)
        {
            Todo::create($payload);
            return ['message' => 'ok'];
        }

        return ['alert' => 'something bad has occured!'];
    }


    public function updateTodo(Request $request)
    {
        $title = $request->input('title');

        $payload = [
            'title' => $request->input('new_title'),
            'description' => $request->input('new_description'),
            'is_done' => $request->input('new_is_done')
        ];

        if($title !== null && $payload['title'] !== null && $payload['description'] !== null && $payload['is_done'] !== null)
        {
            DB::table('todos')->where('title', $title)->update($payload);
            return ['message' => 'Ok'];
        }

        if($title === null)
        {
            return ['alert' => 'the param "title" must to be filled!'];
        }

        if($payload['title'] === null || $payload['description'] === null || $payload['is_done'] === null)
        {
            return ['alert' => 'all the params of update should be not a null (title, description, is_done)!'];
        }

        return ['alert' => 'something bad has occured!'];
    }


    public function deleteTodo(Request $request)
    {
        $title = $request->input('title');

        if($title != null)
        {
            DB::table('todos')->where('title', $title)->delete();
            return ['message' => 'Ok'];
        }

        return ['alert' => 'something bad has occured!'];
    }


}
