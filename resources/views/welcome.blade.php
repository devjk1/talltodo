@extends('layouts.app')

@section('content')
<div 
    x-data="todos()"
>
    <h1
        class="p-4 text-4xl font-bold"
    >
        My Tasks
    </h1>

    <div>TO-DO</div>
    <div class="grid grid-cols-2">
        <template 
            class=""
            x-for="(todo, index) in todos"
            :key="index"
        >
            <div 
                class="bg-blue-100"
                x-text="todo.title"
            >
            </div>
            <input 
                class="bg-green-100"
                type="checkbox"
                @change="completeTodo(index)"
            >
        </template>
    </div>

    <div>COMPLETED</div>
    <ul>
        <template
            x-for="(todo, index) in completedTodos"
            :key="index"
        >
            <li>
                <div 
                    class="line-through"
                    x-text="todo.title"
                >
                </div> 
            </li>
        </template>
    </ul>
        
    <div class="p-4 bg-gray-200">
        <label>
            New Task
        </label>
        <input 
            type="text"
            x-model="newTodoTitle"    
        >
        <button
            @click="addTodo()"
            class="bg-gray-100"
        >
            Add
        </button>
    </div>
</div>

<script>
    function todos() {
        return {
            todos: [],
            completedTodos: [],
            newTodoTitle: "",
            newTodoId: 1,
            addTodo() {
                if (this.newTodoTitle.trim() === "") {
                    return;
                }

                this.todos.push({
                    title: this.newTodoTitle,
                    id: this.newTodoId,
                });

                this.newTodoId++;
                this.newTodoTitle = "";
            },
            completeTodo(index) {
                this.completedTodos.push(
                    {
                        title: this.todos[index].title,
                    }
                );

                this.todos.splice(index, 1);
            },
        };
    }
</script>
@endsection
