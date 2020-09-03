<?php

namespace App\Http\Livewire;

use App\Todo;
use Livewire\Component;

class TodoForm extends Component
{
    public $title;

    public function render()
    {
        return view('livewire.todo-form');
    }

    public function addTodo()
    {
        $todo = new Todo;
        $todo->title = $this->title;
        $todo->is_completed = false;
        $todo->save();

        $this->emit('addedTodo');
        $this->title = '';
    }
}
