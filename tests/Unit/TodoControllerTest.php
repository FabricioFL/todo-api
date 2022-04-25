<?php


namespace Tests\Unit;

use App\Http\Controllers\TodoController;
use Tests\TestCase;

class TodoControllerTest extends TestCase
{


    /**
     * @test
     */
    public function get_todos_must_to_return_an_array()
    {
        $this->assertIsArray([TodoController::class, 'getTodos']);
    }


    /**
     * @test
     */
    public function create_todo_must_to_return_an_array()
    {
        $this->assertIsArray([TodoController::class, 'createTodo']);
    }


    /**
     * @test
     */
    public function update_todo_must_to_return_an_array()
    {
        $this->assertIsArray([TodoController::class, 'updateTodo']);
    }


    /**
     * @test
     */
    public function delete_todo_must_to_return_an_array()
    {
        $this->assertIsArray([TodoController::class, 'deleteTodo']);
    }


}