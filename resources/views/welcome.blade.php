@extends('layouts.app')

@section('content')
<div 
    class="h-screen w-screen flex flex-col"
    x-data="todos()"
>
    <!-- TOP SECTION -->
    <div class="bg-gray-100 flex-grow">
        <div class="p-4 text-4xl font-bold text-gray-900">
            My Tasks
        </div>
        
        <div class="container mx-auto mt-8">
            <!-- TODO -->
            <div class="text-gray-400 font-medium text-lg tracking-wider">
                TO-DO
            </div>
            <!-- TODO LIST -->
            <div class="grid grid-cols-12 border-2 border-gray-300 rounded-lg mt-2">
                <template 
                    x-for="(todo, index) in todos"
                    :key="index"
                >
                    <div class="flex items-center col-span-12 px-4 py-2">
                        <div 
                            class="col-span-11 text-lg text-gray-700"
                            x-text="todo.title"
                        >
                        </div>
                        <input 
                            class="col-start-12 col-end-13 ml-auto"
                            type="checkbox"
                            @change="completeTodo(index)"
                        >
                    </div>                    
                </template>
            </div>
            <!-- COMPLETED -->
            <div class="mt-8 text-gray-400 font-medium text-lg tracking-wider">
                COMPLETED
            </div>
            <!-- COMPLETED LIST -->
            <div class="flex flex-col border border-gray-200 rounded-lg mt-2">
                <template
                    x-for="(todo, index) in completedTodos"
                    :key="index"
                >
                    <div 
                        class="line-through px-4 py-2 text-lg text-gray-500"
                        x-text="todo.title"
                    >
                    </div> 
                </template>
            </div>
        </div>
    </div>
    <!-- FOOTER -->
    <footer class="bg-gray-200 h-32">
        <div class="px-4 pt-4 text-gray-900 text-lg">
            New Task
        </div>
        <div class="flex mx-4 border-2 border-gray-300 rounded-lg">
            <input 
                class="flex-grow rounded-l-lg"
                type="text"
                x-model="newTodoTitle"    
            >
            <button
                class="p-2 text-gray-800 rounded-r-lg bg-gray-100"
                @click="addTodo()"
            >
                Add
            </button>
        </div>
    </footer>
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

                this.todos.push(
                    {
                        title: this.newTodoTitle,
                    }
                );

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
