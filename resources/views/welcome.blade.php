@extends('layouts.app')

@section('content')
<<<<<<< HEAD
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
=======
<div x-data="todos()">
    <h1>My Tasks</h1>
    <div class="todo-section">
        <div class="incompleted-todos">
            <div>TO-DO</div>
            <ul>
                <template
                    x-for="(todo, index) in todos"
                    :key="index"
                >
                    <li>
                        <div>
                            <div 
                                x-text="todo.title"
                            >
                            </div>
                            <input 
                                type="checkbox"
                                @change="completeTodo(index)"
                            >
                        </div>
                    </li>
                </template>
            </ul>
        </div>
        <div class="completed-todos">
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
        </div>
    </div>
    <div class="todo-add-section">
>>>>>>> f208f198a2bd016aabf2977bf24d20c986405ac8
        <label>
            New Task
        </label>
        <input 
            type="text"
            x-model="newTodoTitle"    
        >
        <button
            @click="addTodo()"
<<<<<<< HEAD
            class="bg-gray-100"
=======
>>>>>>> f208f198a2bd016aabf2977bf24d20c986405ac8
        >
            Add
        </button>
    </div>
</div>
<<<<<<< HEAD

=======
>>>>>>> f208f198a2bd016aabf2977bf24d20c986405ac8
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
