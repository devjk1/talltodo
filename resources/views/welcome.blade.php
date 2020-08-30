@extends('layouts.app')

@section('content')
<div 
    class="h-screen w-screen flex flex-col"
    x-data="todo()"
>
    <!-- TOP SECTION -->
    <div class="bg-gray-100 flex-grow">
        <div class="p-4 text-4xl font-bold text-gray-800">
            My Tasks
        </div>
        
        <div class="container mx-auto mt-8">
            <!-- TODO -->
            <div class="text-gray-400 font-medium text-lg tracking-wider">
                TO-DO
            </div>
            <div class="border-2 border-gray-300 rounded-lg mt-2">
                1
            </div>
            <!-- COMPLETED -->
            <div class="mt-8 text-gray-400 font-medium text-lg tracking-wider">
                COMPLETED
            </div>
            <div class="border border-gray-200 rounded-lg mt-2">
                1
            </div>
        </div>
    </div>
    <!-- FOOTER -->
    <footer class="bg-gray-200 h-32">
        <div class="p-4 text-gray-800">
            New Task
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
