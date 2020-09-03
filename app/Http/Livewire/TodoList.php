<?php

namespace App\Http\Livewire;

use App\Todo;
use Livewire\Component;

class TodoList extends Component
{
    public $todos;

    public $listeners = [
        'addedTodo' => 'render',
    ];

    public function render()
    {
        $this->todos = Todo::all();

        return view('livewire.todo-list');
    }
}
