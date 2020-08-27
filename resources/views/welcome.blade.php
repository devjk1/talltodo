@extends('layouts.app')

@section('content')
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
        <label>
            New Task
        </label>
        <input 
            type="text"
            x-model="newTodoTitle"    
        >
        <button
            @click="addTodo()"
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
